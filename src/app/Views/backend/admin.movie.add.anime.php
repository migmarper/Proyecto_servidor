<?php
$title     = 'Añadir Anime | AuraVerse Nexus';
$shellType = 'web_dashboard';
include "app/Views/backend/new_template/backend.head.php";
include "app/Views/backend/new_template/backend.aside.php";

?>

    <main class="relative pt-16 bg-surface min-h-screen px-gutter-lg py-space-lg">
        <div class="max-w-3xl mx-auto bg-surface-container-low p-space-lg rounded-xl shadow-xl border-l-4 border-l-primary">
            <h1 class="font-headline-lg text-headline-lg text-on-surface mb-space-md tracking-wide">AÑADIR ANIME / SERIE</h1>

            <form method="POST" action="/ver-anime" enctype="multipart/form-data" class="flex flex-col gap-space-md">

                <div>
                    <label class="font-label-sm text-label-sm text-outline uppercase block mb-1">Título</label>
                    <input type="text" name="titulo" required
                           class="w-full bg-surface-container-lowest text-on-surface px-3 py-2 rounded focus:outline-none focus:ring-1 focus:ring-tertiary" />
                </div>

                <div>
                    <label class="font-label-sm text-label-sm text-outline uppercase block mb-1">Duración</label>
                    <input type="number" name="duracion"
                           class="w-full bg-surface-container-lowest text-on-surface px-3 py-2 rounded focus:outline-none focus:ring-1 focus:ring-tertiary" />
                </div>

                <div>
                    <label class="font-label-sm text-label-sm text-outline uppercase block mb-1">Descripción</label>
                    <textarea name="descripcion" rows="5"
                              class="w-full bg-surface-container-lowest text-on-surface px-3 py-2 rounded focus:outline-none focus:ring-1 focus:ring-tertiary"></textarea>
                </div>

                <div>
                    <label class="font-label-sm text-label-sm text-outline uppercase block mb-1">Portada</label>
                    <input type="file" name="portada" accept="image/*"
                           class="w-full bg-surface-container-lowest text-on-surface px-3 py-2 rounded" />
                </div>

                <div>
                    <label class="font-label-sm text-label-sm text-outline uppercase block mb-1">Géneros</label>
                    <label class="inline-flex items-center gap-2 mr-4 text-on-surface">
                        <input type="checkbox" name="genero[]" value="comedia"> Comedia
                    </label>
                    <label class="inline-flex items-center gap-2 mr-4 text-on-surface">
                        <input type="checkbox" name="genero[]" value="drama"> Drama
                    </label>
                    <label class="inline-flex items-center gap-2 text-on-surface">
                        <input type="checkbox" name="genero[]" value="terror"> Terror
                    </label>
                </div>

                <div class="flex justify-end gap-space-sm pt-space-md border-t border-outline-variant/40">
                    <a href="/admin" class="px-4 py-2 rounded bg-surface-container-high text-on-surface font-label-md uppercase">Cancelar</a>
                    <button type="submit" class="px-4 py-2 rounded bg-primary-container text-on-primary-container font-label-md uppercase">Enviar</button>
                </div>
            </form>
        </div>
    </main>

<?php include "app/Views/backend/new_template/backend.footer.php"; ?>