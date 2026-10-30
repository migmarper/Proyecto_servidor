<?php
// frontend/frontend.index.php
// Página HOME

$title     = 'Inicio | AuraVerse Nexus';
$shellType = 'web_standard';

include __DIR__ . '/template/frontend.header.php';
?>

    <div class="flex flex-col w-full relative overflow-hidden bg-surface">

        <!-- Orbes ambientales -->
        <div class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[140px] pointer-events-none -z-10"></div>
        <div class="absolute top-[800px] right-10 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-[160px] pointer-events-none -z-10"></div>
        <div class="absolute top-[1800px] left-[-100px] w-[550px] h-[550px] bg-tertiary/10 rounded-full blur-[150px] pointer-events-none -z-10"></div>

        <!-- 1. Hero -->
        <?php include __DIR__ . '/template/frontend.banner.php'; ?>

        <!-- 2. Barra de filtros sticky -->
        <nav class="sticky top-20 z-40 w-full bg-surface-container-lowest/90 backdrop-blur-xl py-space-sm px-gutter-lg shadow-md transition-all">
            <div class="flex items-center justify-between overflow-x-auto gap-space-md no-scrollbar">
                <div class="flex items-center gap-space-xs shrink-0" id="filter-container">
                    <button class="filter-chip px-4 py-1.5 rounded font-label-sm text-label-sm uppercase tracking-wider transition-all bg-primary-container text-on-primary-container shadow-[0_0_12px_rgba(160,120,255,0.4)]">
                        Todos (Grimorio)
                    </button>
                    <button class="filter-chip px-4 py-1.5 rounded font-label-sm text-label-sm uppercase tracking-wider transition-all text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high">
                        Series TV
                    </button>
                    <button class="filter-chip px-4 py-1.5 rounded font-label-sm text-label-sm uppercase tracking-wider transition-all text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high">
                        Películas Box-Office
                    </button>
                    <button class="filter-chip px-4 py-1.5 rounded font-label-sm text-label-sm uppercase tracking-wider transition-all text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high">
                        Manga Shonen
                    </button>
                    <button class="filter-chip px-4 py-1.5 rounded font-label-sm text-label-sm uppercase tracking-wider transition-all text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high">
                        Webtoons &amp; Manhwa
                    </button>
                    <button class="filter-chip px-4 py-1.5 rounded font-label-sm text-label-sm uppercase tracking-wider transition-all text-secondary hover:bg-secondary-container/20 flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
                        Simulcast Directo
                    </button>
                </div>
                <div class="hidden md:flex items-center gap-space-sm text-outline shrink-0 font-label-sm text-label-sm uppercase">
                    <span class="material-symbols-outlined text-base text-tertiary">tune</span>
                    <span>Orden: Rango de Poder (Tier)</span>
                </div>
            </div>
        </nav>

        <!-- Contenedor de filas -->
        <div class="w-full px-gutter-lg flex flex-col gap-space-xl mt-space-lg">

            <?php include __DIR__ . '/template/frontend.watching.php'; ?>
            <?php include __DIR__ . '/template/frontend.top10.php'; ?>
            <?php include __DIR__ . '/template/frontend.simulcast.php'; ?>
            <?php include __DIR__ . '/template/frontend.manga.php'; ?>
            <?php include __DIR__ . '/template/frontend.peliculas.php'; ?>

        </div>
    </div>

<?php include __DIR__ . '/template/frontend.endmain.php'; ?>