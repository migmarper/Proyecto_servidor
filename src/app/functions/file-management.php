<?php
const FILES_DIRECTORY   = __DIR__ . "/../../files";
const ANIMES_JSON_FILE  = FILES_DIRECTORY . "/animes.json";

function checkDirectory(string $name): bool {
    return is_dir(FILES_DIRECTORY . "/" . $name);
}

function createDirectory(string $name): bool {
    $path = FILES_DIRECTORY . "/" . $name;
    if (is_dir($path)) return true;
    return mkdir($path, 0777, true);
}

function manageFiles(array $imageData, string $targetDir = "animes"): array {
    $guardados = [];
    if (!checkDirectory($targetDir)) createDirectory($targetDir);
    $dirPath = FILES_DIRECTORY . "/" . $targetDir;

    foreach ($imageData as $file) {
        if (is_array($file['name'])) {
            for ($i = 0; $i < count($file['name']); $i++) {
                if ($file['error'][$i] !== UPLOAD_ERR_OK) continue;
                $nombre = date('Ymd_His') . "_" . uniqid() . "_" . basename($file['name'][$i]);
                $ruta   = $dirPath . "/" . $nombre;
                if (move_uploaded_file($file['tmp_name'][$i], $ruta)) {
                    $guardados[] = ['ruta' => $ruta, 'nombre' => $nombre];
                }
            }
        } else {
            if ($file['error'] !== UPLOAD_ERR_OK) continue;
            $nombre = date('Ymd_His') . "_" . uniqid() . "_" . basename($file['name']);
            $ruta   = $dirPath . "/" . $nombre;
            if (move_uploaded_file($file['tmp_name'], $ruta)) {
                $guardados[] = ['ruta' => $ruta, 'nombre' => $nombre];
            }
        }
    }
    return $guardados;
}

function deleteFile(string $ruta): bool {
    return file_exists($ruta) && is_file($ruta) && unlink($ruta);
}

function listFiles(string $targetDir = "animes"): array {
    $dir = FILES_DIRECTORY . "/" . $targetDir;
    if (!is_dir($dir)) return [];
    $out = [];
    foreach (scandir($dir) as $f) {
        if ($f === '.' || $f === '..') continue;
        $ruta = $dir . "/" . $f;
        if (is_file($ruta)) {
            $out[] = ['nombre' => $f, 'ruta' => $ruta, 'fecha' => date('Y-m-d H:i:s', filemtime($ruta)), 'size' => filesize($ruta)];
        }
    }
    return $out;
}

// ================== CRUD ANIMES (JSON) ==================

function getAnimes(): array {
    if (!file_exists(ANIMES_JSON_FILE)) return [];
    $json = file_get_contents(ANIMES_JSON_FILE);
    $data = json_decode($json, true);
    return is_array($data) ? $data : [];
}

function saveAnimes(array $animes): bool {
    if (!is_dir(FILES_DIRECTORY)) mkdir(FILES_DIRECTORY, 0777, true);
    return file_put_contents(ANIMES_JSON_FILE, json_encode($animes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) !== false;
}

function addAnime(array $datos, array $archivos): array {
    $animes = getAnimes();

    $rutas   = manageFiles($archivos, "animes");
    $portada = $rutas[0]['ruta'] ?? null;

    $anime = [
        'id'          => uniqid('anm_', true),
        'titulo'      => $datos['titulo']      ?? '',
        'duracion'    => $datos['duracion']    ?? 0,
        'descripcion' => $datos['descripcion'] ?? '',
        'generos'     => $datos['genero']      ?? [],
        'portada'     => $portada,
        'fecha'       => date('Y-m-d H:i:s'),
    ];

    $animes[] = $anime;
    saveAnimes($animes);
    return $anime;
}

function getAnimeById(string $id): ?array {
    foreach (getAnimes() as $a) {
        if ($a['id'] === $id) return $a;
    }
    return null;
}

function updateAnime(string $id, array $datos, array $archivos = []): bool {
    $animes = getAnimes();
    foreach ($animes as &$a) {
        if ($a['id'] !== $id) continue;

        if (!empty($datos['titulo']))      $a['titulo']      = $datos['titulo'];
        if (!empty($datos['duracion']))    $a['duracion']    = $datos['duracion'];
        if (isset($datos['descripcion']))  $a['descripcion'] = $datos['descripcion'];
        if (!empty($datos['genero']))      $a['generos']     = $datos['genero'];

        // Si suben nueva portada, borrar la antigua y guardar la nueva
        if (!empty($archivos['portada']['name'])) {
            if (!empty($a['portada']) && file_exists($a['portada'])) {
                deleteFile($a['portada']);
            }
            $rutas = manageFiles($archivos, "animes");
            $a['portada'] = $rutas[0]['ruta'] ?? $a['portada'];
        }

        $a['fecha_edicion'] = date('Y-m-d H:i:s');
        saveAnimes($animes);
        return true;
    }
    return false;
}

function deleteAnime(string $id): bool {
    $animes = getAnimes();
    foreach ($animes as $i => $a) {
        if ($a['id'] !== $id) continue;

        if (!empty($a['portada']) && file_exists($a['portada'])) {
            deleteFile($a['portada']);
        }
        unset($animes[$i]);
        saveAnimes(array_values($animes));
        return true;
    }
    return false;
}