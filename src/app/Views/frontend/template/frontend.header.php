<?php
// frontend.header.php
$title     = $title     ?? 'AuraVerse Nexus';
$shellType = $shellType ?? 'web_standard';
$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

// Helper para marcar el enlace activo
if (!function_exists('navClass')) {
    function navClass($path, $currentPath) {
        return $path === $currentPath
            ? 'uppercase px-space-sm py-1.5 transition-all bg-primary-container text-on-primary-container font-label-md rounded'
            : 'font-label-md text-label-md uppercase px-space-sm py-1.5 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all';
    }
}
?>
<!DOCTYPE html>
<html class="dark" lang="es">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="<?= htmlspecialchars($shellType) ?>" name="shell-type" />
    <title><?= htmlspecialchars($title) ?></title>

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;600;700&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-error-container": "#ffdad6", "outline": "#958ea0",
                        "primary-container": "#a078ff", "inverse-primary": "#6d3bd7",
                        "surface-container-low": "#1c1a25", "on-surface-variant": "#cbc3d7",
                        "on-error": "#690005", "on-background": "#e5e0f0",
                        "error": "#ffb4ab", "on-primary-fixed-variant": "#5516be",
                        "error-container": "#93000a", "surface-container-highest": "#35333f",
                        "surface-container-lowest": "#0e0d17", "background": "#13121d",
                        "on-tertiary-fixed-variant": "#004e5c", "surface": "#13121d",
                        "inverse-surface": "#e5e0f0", "secondary": "#ffb2b7",
                        "surface-variant": "#35333f", "surface-container-high": "#2a2934",
                        "on-secondary-fixed": "#40000d", "on-tertiary-container": "#002f38",
                        "surface-container": "#201e29", "tertiary": "#4cd7f6",
                        "on-secondary-fixed-variant": "#92002a", "tertiary-fixed-dim": "#4cd7f6",
                        "on-primary-fixed": "#23005c", "secondary-fixed": "#ffdadb",
                        "on-surface": "#e5e0f0", "secondary-container": "#b50036",
                        "on-secondary": "#67001b", "inverse-on-surface": "#312f3b",
                        "secondary-fixed-dim": "#ffb2b7", "tertiary-fixed": "#acedff",
                        "primary-fixed": "#e9ddff", "on-tertiary": "#003640",
                        "on-primary-container": "#340080", "outline-variant": "#494454",
                        "tertiary-container": "#009eb9", "on-primary": "#3c0091",
                        "primary-fixed-dim": "#d0bcff", "on-tertiary-fixed": "#001f26",
                        "surface-bright": "#3a3844", "surface-tint": "#d0bcff",
                        "on-secondary-container": "#ffc2c4", "surface-dim": "#13121d",
                        "primary": "#d0bcff"
                    },
                    borderRadius: { DEFAULT: "0.125rem", lg: "0.25rem", xl: "0.5rem", full: "0.75rem" },
                    spacing: {
                        "space-md": "1rem", "space-lg": "1.5rem", "gutter-sm": "1rem",
                        "space-sm": "0.5rem", "space-xs": "0.25rem", "space-xl": "2.5rem",
                        "margin-lg": "4rem", "margin-sm": "1rem", "gutter-lg": "2rem",
                        "margin": "2rem", "gutter": "1.5rem"
                    },
                    fontFamily: {
                        "body-sm": ["Montserrat"], "label-sm": ["Space Grotesk"],
                        "body-lg": ["Montserrat"], "headline-lg": ["Bebas Neue"],
                        "label-lg": ["Space Grotesk"], "label-md": ["Space Grotesk"],
                        "display-hero": ["Bebas Neue"], "headline-xl": ["Bebas Neue"],
                        "display-hero-mobile": ["Bebas Neue"], "title-md": ["Montserrat"],
                        "title-lg": ["Montserrat"], "headline-xl-mobile": ["Bebas Neue"],
                        "body-md": ["Montserrat"], "headline-md": ["Bebas Neue"]
                    },
                    fontSize: {
                        "body-sm": ["12px", { lineHeight: "18px", fontWeight: "400" }],
                        "label-sm": ["10px", { lineHeight: "14px", letterSpacing: "0.08em", fontWeight: "600" }],
                        "body-lg": ["16px", { lineHeight: "26px", fontWeight: "400" }],
                        "headline-lg": ["32px", { lineHeight: "36px", letterSpacing: "0.03em", fontWeight: "400" }],
                        "label-lg": ["14px", { lineHeight: "18px", letterSpacing: "0.08em", fontWeight: "700" }],
                        "label-md": ["12px", { lineHeight: "16px", letterSpacing: "0.06em", fontWeight: "600" }],
                        "display-hero": ["72px", { lineHeight: "72px", letterSpacing: "0.05em", fontWeight: "400" }],
                        "headline-xl": ["48px", { lineHeight: "52px", letterSpacing: "0.04em", fontWeight: "400" }],
                        "display-hero-mobile": ["44px", { lineHeight: "48px", letterSpacing: "0.05em", fontWeight: "400" }],
                        "title-md": ["16px", { lineHeight: "24px", fontWeight: "600" }],
                        "title-lg": ["20px", { lineHeight: "28px", fontWeight: "700" }],
                        "headline-xl-mobile": ["34px", { lineHeight: "38px", letterSpacing: "0.03em", fontWeight: "400" }],
                        "body-md": ["14px", { lineHeight: "22px", fontWeight: "400" }],
                        "headline-md": ["24px", { lineHeight: "28px", letterSpacing: "0.02em", fontWeight: "400" }]
                    }
                }
            }
        };
    </script>

    <style>
        @layer base {
            html, body { margin: 0; padding: 0; }
            body { overscroll-behavior: none; }
            main > :first-child { margin-top: 0 !important; }
            main > :last-child { margin-bottom: 0 !important; }
        }
        ::-webkit-scrollbar { display: none; }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface min-h-screen selection:bg-primary-container selection:text-on-primary-container">

<!-- ===== HEADER DE NAVEGACIÓN ===== -->
<header class="fixed top-0 left-0 right-0 z-50 bg-surface-container-low/85 backdrop-blur-xl shadow-[0_4px_30px_rgba(0,0,0,0.5)]">
    <div class="h-20 w-full px-gutter-lg flex items-center justify-between gap-space-lg">

        <!-- Logo + Nav -->
        <div class="flex items-center gap-space-md shrink-0">
            <img alt="AuraVerse Logo" class="h-8 w-auto object-contain"
                 src="https://lh3.googleusercontent.com/aida/AEtjO1X6v5UC87i97oheiR5ftynVxG96mNtzc4QvUJB4Gw4HmAQfw63e5STdLaU6uKD5dgDM8ljrGEkn2RFa_E8JZmoHJbM-6PPn9YasvDHIncWHX0nfgSoDUh382bnYQEzVNh8Bqvx8xS8onqTz7LHDjA5imbo0ssZnEYSUVTrTAcSPHIxiaFzP6h6qZL7DUqQxlR3L6-MX5O9kmWzkUqCCiJwY0g6Q64FQ-296tT89tLNpmyZx7VR9trzJhA" />
            <a class="flex items-center gap-space-xs group" href="/">
                <span class="font-headline-lg text-headline-lg text-primary tracking-wide transition-colors group-hover:text-primary-fixed">AURAVERSE</span>
                <span class="font-headline-lg text-headline-lg text-secondary tracking-wide">NEXUS</span>
                <span class="ml-space-xs px-1.5 py-0.5 rounded bg-surface-container-highest text-tertiary font-label-sm text-label-sm shadow-[0_0_10px_rgba(76,215,246,0.25)]">霊圧</span>
            </a>
        </div>

        <!-- Menú -->
        <nav class="hidden xl:flex items-center gap-space-md">
            <a class="<?= navClass('/', $currentPath) ?>"           href="/">Inicio</a>
            <a class="<?= navClass('/catalogo', $currentPath) ?>"   href="/catalogo">Catálogo / Grimorio</a>
            <a class="<?= navClass('/serie', $currentPath) ?>"      href="/serie">Series &amp; Fichas</a>
            <a class="<?= navClass('/lector', $currentPath) ?>"     href="/lector">Lector Manga</a>
            <a class="<?= navClass('/admin', $currentPath) ?>"      href="/admin">Centro de Mando Admin</a>
        </nav>

        <!-- Zona derecha -->
        <div class="flex items-center gap-space-md shrink-0">
            <!-- Buscador -->
            <div class="hidden sm:flex items-center bg-surface-container-lowest px-space-md py-1.5 rounded-full shadow-[inset_0_1px_4px_rgba(0,0,0,0.6)] focus-within:shadow-[0_0_12px_rgba(76,215,246,0.35)] transition-all">
                <span class="material-symbols-outlined text-outline text-lg mr-space-xs">search</span>
                <input type="text" placeholder="Buscar anime, manhwa..."
                       class="bg-transparent border-none outline-none font-body-sm text-body-sm text-on-surface placeholder:text-outline pr-space-md w-40" />
                <kbd class="bg-surface-container-high px-1.5 py-0.5 rounded font-label-sm text-label-sm text-tertiary">CMD+K</kbd>
            </div>

            <!-- Notificaciones -->
            <button class="relative p-2 rounded-full bg-surface-container-high text-on-surface hover:text-tertiary transition-colors">
                <span class="material-symbols-outlined text-xl">notifications</span>
                <span class="absolute top-1 right-1 w-2.5 h-2.5 rounded-full bg-secondary shadow-[0_0_8px_#ffb2b7]"></span>
            </button>

            <!-- Dropdown de usuario -->
            <div class="relative group cursor-pointer">
                <div class="flex items-center gap-space-xs p-1 rounded-full bg-surface-container-high hover:bg-surface-container-highest transition-all">
                    <img alt="Profile" class="w-8 h-8 rounded-full object-cover ring-1 ring-primary"
                         src="https://lh3.googleusercontent.com/aida/AEtjO1UX0C4_1xLnglUswC9RhF2Ttcbaisz8wV2wfFMbpjpv8no2W5-rmAZcVjhmkndb-UVgSUSX1rSZialQhRw-fRHQs6wOcaDRkLoVp6nOi-fkIj4M3adYmyv2V8o8oTeJe7jHZu37j1mgxKuEkQrG89fp0JGd_C_anGXMrDcmVMzbRqNNp0BKtM8MckqRrjQ_pNd84pMk9lwLd_dtJcNFGW4MSpKO8fBQmv3Ap3LurvXuca535_YthyhQS8o" />
                    <div class="hidden lg:flex flex-col text-left pr-space-xs">
                        <div class="flex items-center gap-1">
                            <span class="font-label-sm text-label-sm text-on-surface font-bold leading-tight" data-user-name>REN</span>
                            <span class="px-1 rounded bg-secondary-container text-on-secondary-container font-label-sm text-[9px]" data-user-rank>S-RANK</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-tertiary leading-tight" data-user-level>LV.99 SPIRIT</span>
                    </div>
                    <span class="material-symbols-outlined text-outline text-base pr-1">expand_more</span>
                </div>

                <!-- Menú desplegable -->
                <div class="absolute right-0 mt-2 w-56 py-2 bg-surface-container-low rounded-xl shadow-[0_8px_32px_rgba(0,0,0,0.8)] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-150 z-50">
                    <div class="px-4 py-2 bg-surface-container-lowest/50 mb-1">
                        <p class="font-label-sm text-label-sm text-outline uppercase">Rango Espiritual</p>
                        <p class="font-headline-md text-headline-md text-primary leading-tight" data-user-grade>SPECIAL GRADE</p>
                    </div>
                    <a class="flex items-center px-4 py-2 font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors" href="/perfil">
                        <span class="material-symbols-outlined text-base mr-3 text-primary">account_circle</span>Mi Perfil
                    </a>
                    <a class="flex items-center px-4 py-2 font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors" href="/mi-lista">
                        <span class="material-symbols-outlined text-base mr-3 text-secondary">bookmark</span>Mi Lista
                    </a>
                    <a class="flex items-center px-4 py-2 font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors" href="/historial">
                        <span class="material-symbols-outlined text-base mr-3 text-tertiary">history</span>Historial
                    </a>
                    <a class="flex items-center px-4 py-2 font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors" href="/configuracion">
                        <span class="material-symbols-outlined text-base mr-3 text-outline">settings</span>Configuración
                    </a>
                    <div class="my-1 bg-surface-container-highest/40 h-px"></div>
                    <a class="flex items-center px-4 py-2 font-body-sm text-body-sm text-error hover:bg-error-container hover:text-on-error-container transition-colors" href="/login">
                        <span class="material-symbols-outlined text-base mr-3">logout</span>Cerrar Sesión
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ===== INICIO DEL MAIN ===== -->
<main class="w-full pt-20 bg-surface min-h-[calc(100vh-200px)]">