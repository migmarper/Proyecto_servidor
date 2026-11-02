<?php
// frontend.lector.php
$title     = 'Lector | AuraVerse Nexus';
$shellType = 'web_standard';

include __DIR__ . '/frontend.header.php';
?>

    <!-- ===== TOP BAR STICKY DEL LECTOR ===== -->
    <aside class="sticky top-20 z-40 w-full bg-surface-container-low/95 backdrop-blur-2xl shadow-[0_12px_32px_rgba(0,0,0,0.65)] px-gutter-sm lg:px-gutter-lg py-space-sm flex flex-col md:flex-row items-center justify-between gap-space-md">

        <!-- Meta + capítulo -->
        <div class="flex items-center gap-space-md w-full md:w-auto justify-between md:justify-start">
            <a href="/serie" class="flex items-center gap-1.5 px-space-sm py-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface hover:text-tertiary transition-all shadow-sm">
                <span class="material-symbols-outlined text-lg">arrow_back</span>
                <span class="font-label-md text-label-md uppercase hidden sm:inline">Volver a Serie</span>
            </a>
            <div class="flex flex-col">
                <div class="flex items-center gap-2">
                    <span class="font-headline-md text-headline-md text-primary tracking-wide leading-none">SOLO LEVELING</span>
                    <span class="px-1.5 py-0.5 rounded bg-secondary-container text-on-secondary-container font-label-sm text-[9px] uppercase font-bold tracking-widest">Manhwa</span>
                </div>
                <div class="relative inline-block mt-0.5">
                    <button class="flex items-center gap-1 font-label-sm text-label-sm text-tertiary hover:text-tertiary-fixed transition-colors">
                        <span>CAP. 178: EL FIN DE LA GUERRA CELESTIAL</span>
                        <span class="material-symbols-outlined text-sm">expand_more</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Progreso -->
        <div class="hidden xl:flex items-center gap-space-md bg-surface-container-lowest/80 px-space-md py-1.5 rounded-full shadow-inner">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary text-base">auto_stories</span>
                <span class="font-label-md text-label-md text-on-surface">Pág <span class="text-tertiary font-bold" id="current-page-num">14</span> / 42</span>
                <span class="font-label-sm text-label-sm text-outline">(33%)</span>
            </div>
            <div class="w-24 h-1.5 rounded-full bg-surface-container-highest overflow-hidden">
                <div class="h-full bg-gradient-to-r from-primary to-tertiary w-1/3 transition-all duration-300" id="reading-progress-bar"></div>
            </div>
        </div>

        <!-- Controles -->
        <div class="flex items-center gap-space-xs sm:gap-space-sm w-full md:w-auto justify-end">

            <!-- Modo vertical / paginado -->
            <div class="flex items-center bg-surface-container-lowest p-0.5 rounded-lg shadow-inner">
                <button class="px-2.5 py-1 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm uppercase flex items-center gap-1 transition-all" id="mode-vertical-btn" title="Scroll Vertical Webtoon">
                    <span class="material-symbols-outlined text-sm">view_agenda</span>
                    <span class="hidden lg:inline">Vertical</span>
                </button>
                <button class="px-2.5 py-1 rounded text-outline hover:text-on-surface font-label-sm text-label-sm uppercase flex items-center gap-1 transition-all" id="mode-paged-btn" title="Paginado horizontal Manga">
                    <span class="material-symbols-outlined text-sm">auto_stories</span>
                    <span class="hidden lg:inline">Paginado</span>
                </button>
            </div>

            <!-- Zoom -->
            <div class="flex items-center bg-surface-container-high px-1 py-0.5 rounded-lg">
                <button class="p-1 hover:text-tertiary text-on-surface-variant transition-colors" id="zoom-out-btn" title="Reducir Zoom">
                    <span class="material-symbols-outlined text-base">remove</span>
                </button>
                <span class="font-label-sm text-label-sm text-on-surface px-1 min-w-[42px] text-center" id="zoom-label">100%</span>
                <button class="p-1 hover:text-tertiary text-on-surface-variant transition-colors" id="zoom-in-btn" title="Aumentar Zoom">
                    <span class="material-symbols-outlined text-base">add</span>
                </button>
            </div>

            <!-- Tema -->
            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-tertiary transition-all" id="theme-bg-toggle" title="Alternar Fondo Abisal / Papel">
                <span class="material-symbols-outlined text-lg" id="theme-icon">dark_mode</span>
            </button>

            <!-- Bookmark -->
            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-secondary transition-all" id="bookmark-btn" title="Marcador">
                <span class="material-symbols-outlined text-lg">bookmark</span>
            </button>

            <!-- Fullscreen -->
            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-tertiary transition-all hidden sm:flex" id="fullscreen-btn" title="Pantalla Completa">
                <span class="material-symbols-outlined text-lg">fullscreen</span>
            </button>

            <!-- Índice -->
            <button class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-primary hover:bg-primary-fixed text-on-primary font-label-md text-label-md uppercase transition-all shadow-[0_0_16px_rgba(208,188,255,0.35)]" id="drawer-toggle-btn">
                <span class="material-symbols-outlined text-base">menu_book</span>
                <span class="hidden sm:inline">Índice</span>
            </button>
        </div>
    </aside>

    <!-- ===== CANVAS DEL LECTOR ===== -->
    <div class="relative w-full flex overflow-hidden">

        <div class="flex-1 w-full bg-surface transition-colors duration-500 flex flex-col items-center py-space-lg px-gutter-sm relative min-h-screen" id="reader-stage">

            <div class="absolute top-10 pointer-events-none select-none text-surface-container-highest/15 font-headline-xl text-[160px] tracking-widest leading-none z-0">
                影の君主
            </div>

            <!-- Banner del capítulo -->
            <div class="w-full max-w-[840px] bg-surface-container-low/90 backdrop-blur-md rounded-xl p-space-md mb-space-lg shadow-xl relative z-10 flex flex-col sm:flex-row items-center justify-between gap-space-md">
                <div class="flex items-center gap-space-md">
                    <div class="w-12 h-12 rounded-lg bg-surface-container-highest flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-2xl">bolt</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm uppercase text-tertiary tracking-widest">Arco Final: Trascendencia Astral</span>
                        <h1 class="font-headline-lg text-headline-lg text-on-surface leading-tight">EPISODIO 178: EL FIN DE LA GUERRA CELESTIAL</h1>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <span class="px-2 py-1 rounded bg-surface-container-high text-outline font-label-sm text-label-sm">HD 4K ULTRA</span>
                    <span class="px-2 py-1 rounded bg-secondary/10 text-secondary font-label-sm text-label-sm">AUTOR: DUBU (REDICE STUDIO)</span>
                </div>
            </div>

            <!-- Paneles del capítulo -->
            <div class="w-full max-w-[840px] flex flex-col items-center transition-transform duration-200 z-10 shadow-[0_24px_60px_rgba(0,0,0,0.85)] rounded-xl overflow-hidden bg-surface-container-lowest" id="manhwa-scroll-container">
                <?php
                $paneles = [
                    ['num' => 14, 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA3vxkMR1sKEElxvkdk9sCZBz1cgRljgR-zZNdMsD_WmG4IbvJHMLPXhq_L_aKW5tgaY1GyvuRkVDSYSTWMZ2OSS0sj9Orj8cAHeFlaKYwQi2Hwb5qTPi-wbC3B-Exky_9m0FbOVSKnIosf2kaWzKU1m1p39Fgl2bZ8sGXE1WkkQfCtDza_7wWHiTKumw-qgb2IW8htZy5XeS-eF6YmwTW5C1HFlhK_BeAWJPEGhEsO92RQWO33Zg4p'],
                    ['num' => 15, 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDnhu8zEELLZSYm1WIGglOIr1IqAHmncH-JZpK1Lj7nYmj-Q7Qbpj9drL0IkJljlpnwEuaTWZI5TeRc6M9FthtbWsHM8UQA2e7eArH8qfFalBPs3P10muO3iJZaZHWe0ZAf5qyZqDCLmpPMJgobOIidbFNiL4UOmUan1T3lqWlAFWpdGhmJgnUuCDOHM0r37eIc07Eili9NIR8nywpuM06CIbEXB6HqN3C_yFGXh6HRhDs2VW6jEiyj'],
                    ['num' => 16, 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB3lDh94ChpXSGeCgFF1lS8iBEolBM1PZ8j9SknPYwJ7xLWgfB5QWuC4m04cvosm_gbuZk0NtQ43yLmJxZ7zwaHn1YBon4R5oQFwMp17krhNDSn7T6E6dACPscpzBnejSDqov1GXZdXkxGqSOCOL7_72kdaLCj-eCYWJOLFr1oqZYWCQ1VkpnM_xTjvxU6UEteTj1Bwe_PSOJm5oTUQmyNwk0sn-DukSDlTzbSaOznXUvX84NEjddGc'],
                    ['num' => 17, 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDKYe0LuAXuNe__lQnB1SG-QBUkpe-1GIEdFsMfqIr55RfNr5uln_2pAORrrR67G4jtjdLd-BS4KNcRWBkb4HsIUrAVlaKaxLGnfXaBRX9MLX57T1qog49uWFRhF1L-1gcw-2tqaLu6NEnMRKO2tVp65K7GaCEbls4oumyCEQnvYdkq_pUUhWKYZJ-Z8vcFAl8k1nvbJno5AluzSuvijIsYIV_L1LyHG7scj3ZBzPdmgMsWtWm5sjk6'],
                ];
                foreach ($paneles as $p):
                    ?>
                    <div class="w-full relative group">
                        <img class="w-full h-auto block select-none" alt="Panel <?= $p['num'] ?>" loading="lazy" src="<?= $p['img'] ?>" />
                        <div class="absolute bottom-4 right-4 bg-surface-container-lowest/80 backdrop-blur-md px-2 py-1 rounded text-tertiary font-label-sm text-label-sm pointer-events-none">
                            PANEL <?= $p['num'] ?> / 42
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Navegación flotante -->
            <div class="fixed left-4 bottom-8 hidden lg:flex flex-col gap-2 z-30">
                <button class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-surface-container-high/90 hover:bg-surface-container-highest text-on-surface hover:text-tertiary backdrop-blur-lg shadow-[0_8px_24px_rgba(0,0,0,0.5)] transition-all group">
                    <span class="material-symbols-outlined text-lg group-hover:-translate-x-1 transition-transform">skip_previous</span>
                    <div class="flex flex-col text-left">
                        <span class="font-label-sm text-[9px] uppercase text-outline">Anterior</span>
                        <span class="font-label-md text-label-md font-bold">Capítulo 177</span>
                    </div>
                </button>
            </div>
            <div class="fixed right-4 bottom-8 hidden lg:flex flex-col gap-2 z-30">
                <button class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-primary-container text-on-primary-container hover:bg-primary-fixed shadow-[0_0_24px_rgba(160,120,255,0.45)] transition-all group">
                    <div class="flex flex-col text-right">
                        <span class="font-label-sm text-[9px] uppercase text-on-primary-container/80">Siguiente</span>
                        <span class="font-label-md text-label-md font-bold">Capítulo 179</span>
                    </div>
                    <span class="material-symbols-outlined text-lg group-hover:translate-x-1 transition-transform">skip_next</span>
                </button>
            </div>

            <!-- Fin de capítulo + siguiente -->
            <div class="w-full max-w-[840px] mt-space-xl z-10 flex flex-col items-center">
                <div class="w-full bg-gradient-to-r from-surface-container-low via-surface-container to-surface-container-low p-space-lg rounded-2xl shadow-[0_16px_40px_rgba(0,0,0,0.7)] flex flex-col items-center text-center relative overflow-hidden">
                    <div class="absolute -right-12 -top-12 w-48 h-48 rounded-full bg-primary/10 blur-3xl pointer-events-none"></div>
                    <div class="absolute -left-12 -bottom-12 w-48 h-48 rounded-full bg-tertiary/10 blur-3xl pointer-events-none"></div>
                    <span class="font-label-md text-label-md uppercase text-tertiary tracking-widest mb-space-xs flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
                    Fin de la Transmisión de Lectura
                </span>
                    <h2 class="font-headline-xl text-headline-xl text-on-surface mb-space-xs">¿LISTO PARA EL CLÍMAX DIMENSIONAL?</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-lg mb-space-lg">
                        El monarca de las sombras ha despertado su ejército definitivo. La batalla contra los gobernantes comienza en el próximo pergamino.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center gap-space-md w-full justify-center max-w-md">
                        <button class="w-full sm:w-auto flex-1 flex items-center justify-center gap-2 py-3.5 px-6 rounded-lg bg-surface-container-highest hover:bg-surface-bright text-on-surface font-label-md text-label-md uppercase transition-all shadow-md">
                            <span class="material-symbols-outlined text-lg">replay</span> Releer Cap. 178
                        </button>
                        <button class="w-full sm:w-auto flex-1 flex items-center justify-center gap-2 py-3.5 px-6 rounded-lg bg-primary text-on-primary hover:bg-primary-fixed font-label-md text-label-md uppercase shadow-[0_0_24px_rgba(208,188,255,0.45)] transition-all">
                            <span>Capítulo 179</span>
                            <span class="material-symbols-outlined text-xl">east</span>
                        </button>
                    </div>
                    <div class="flex items-center gap-space-lg mt-space-lg pt-space-md text-outline">
                        <button class="flex items-center gap-1.5 hover:text-secondary transition-colors font-label-sm text-label-sm uppercase">
                            <span class="material-symbols-outlined text-base">favorite</span> 12.4K Me Gusta
                        </button>
                        <span class="text-surface-container-highest">•</span>
                        <button class="flex items-center gap-1.5 hover:text-tertiary transition-colors font-label-sm text-label-sm uppercase" onclick="navigator.clipboard?.writeText(window.location.href); window.showToast('Enlace copiado')">
                            <span class="material-symbols-outlined text-base">share</span> Compartir
                        </button>
                    </div>
                </div>
            </div>

            <!-- Comentarios -->
            <section class="w-full max-w-[840px] mt-space-xl flex flex-col gap-space-md">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-space-sm">
                        <span class="material-symbols-outlined text-primary text-2xl">forum</span>
                        <h3 class="font-headline-lg text-headline-lg text-on-surface">DISCUSIÓN DE LA COMUNIDAD (384)</h3>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="font-label-sm text-label-sm text-outline">Ordenar por:</span>
                        <button class="px-2.5 py-1 rounded bg-surface-container text-tertiary font-label-sm text-label-sm">Más Votados</button>
                    </div>
                </div>

                <div class="p-space-md rounded-xl bg-surface-container-low shadow-lg flex gap-space-md items-start">
                    <div class="w-10 h-10 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-label-md text-label-md font-bold shrink-0">REN</div>
                    <div class="flex-1 flex flex-col gap-space-sm">
                        <textarea class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md p-space-sm rounded-lg focus:outline-none focus:shadow-[0_0_12px_rgba(76,215,246,0.35)] placeholder:text-outline transition-all resize-none" rows="2" placeholder="Escribe tu teoría o reacción a este capítulo..."></textarea>
                        <div class="flex items-center justify-end">
                            <button class="px-4 py-1.5 rounded-lg bg-primary hover:bg-primary-fixed text-on-primary font-label-sm text-label-sm uppercase transition-all shadow-sm">
                                Publicar Opinión
                            </button>
                        </div>
                    </div>
                </div>

                <?php
                $comentarios = [
                    ['avatar' => 'KS', 'color' => 'tertiary', 'nombre' => 'Kael_ShadowKing', 'badge' => 'MONARCA LV.89', 'badgeColor' => 'surface-container-highest', 'badgeText' => 'tertiary',
                        'tiempo' => 'hace 2 horas', 'likes' => '1.2K', 'respuestas' => 28,
                        'texto' => '¡La doble página del dragón astral en la viñeta 14 me dejó sin aliento! El nivel de dibujo superó todas las expectativas.'],
                    ['avatar' => 'VR', 'color' => 'secondary', 'nombre' => 'ValkyrieRei', 'badge' => 'VIP SPIRIT', 'badgeColor' => 'secondary-container', 'badgeText' => 'on-secondary-container',
                        'tiempo' => 'hace 5 horas', 'likes' => '842', 'respuestas' => 9,
                        'texto' => 'Los efectos de aura púrpura y cian en este lector se ven impresionantes en pantalla OLED.'],
                ];
                foreach ($comentarios as $c):
                    ?>
                    <div class="p-space-md rounded-xl bg-surface-container-low shadow-md flex flex-col gap-space-sm">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-space-sm">
                                <div class="w-8 h-8 rounded-full bg-surface-container-highest text-<?= $c['color'] ?> flex items-center justify-center font-label-sm text-label-sm font-bold"><?= $c['avatar'] ?></div>
                                <div class="flex items-center gap-2">
                                    <span class="font-title-md text-title-md text-on-surface"><?= $c['nombre'] ?></span>
                                    <span class="px-1.5 py-0.5 rounded bg-<?= $c['badgeColor'] ?> text-<?= $c['badgeText'] ?> font-label-sm text-[10px]"><?= $c['badge'] ?></span>
                                    <span class="font-body-sm text-body-sm text-outline"><?= $c['tiempo'] ?></span>
                                </div>
                            </div>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant pl-10"><?= $c['texto'] ?></p>
                        <div class="flex items-center gap-space-md pl-10 pt-1">
                            <button class="flex items-center text-outline hover:text-primary transition-colors text-xs gap-1">
                                <span class="material-symbols-outlined text-sm">thumb_up</span> <?= $c['likes'] ?>
                            </button>
                            <button class="font-label-sm text-label-sm text-outline hover:text-tertiary uppercase transition-colors">Responder (<?= $c['respuestas'] ?>)</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
        </div>

        <!-- Drawer de capítulos -->
        <div class="fixed inset-y-0 right-0 top-20 w-80 sm:w-96 bg-surface-container-low/95 backdrop-blur-2xl shadow-[0_0_50px_rgba(0,0,0,0.85)] z-50 transform translate-x-full transition-transform duration-300 flex flex-col" id="chapter-drawer">

            <div class="p-space-md bg-surface-container flex items-center justify-between shadow-sm">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-xl">format_list_bulleted</span>
                    <span class="font-headline-md text-headline-md text-on-surface tracking-wide">ÍNDICE DE CAPÍTULOS</span>
                </div>
                <button class="p-1 rounded hover:bg-surface-container-high text-outline hover:text-on-surface transition-colors" id="drawer-close-btn">
                    <span class="material-symbols-outlined text-lg">close</span>
                </button>
            </div>

            <div class="p-space-md flex flex-col gap-space-sm bg-surface-container-lowest/60">
                <div class="flex items-center bg-surface-container-lowest px-3 py-1.5 rounded-lg shadow-inner">
                    <span class="material-symbols-outlined text-outline text-base mr-2">search</span>
                    <input type="text" class="bg-transparent font-body-sm text-body-sm text-on-surface placeholder:text-outline focus:outline-none w-full" placeholder="Buscar capítulo..." />
                </div>
                <button class="w-full flex items-center justify-center gap-2 py-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-tertiary font-label-sm text-label-sm uppercase transition-all shadow-sm">
                    <span class="material-symbols-outlined text-base">download_for_offline</span>
                    Descargar Cap. 178 Offline
                </button>
            </div>

            <div class="flex-1 overflow-y-auto p-space-sm flex flex-col gap-1.5">
                <?php
                $caps = [
                    ['num' => 178, 'titulo' => 'El Fin de la Guerra', 'estado' => 'ACTUAL', 'estadoIcon' => 'play_arrow', 'estadoColor' => 'primary', 'fecha' => 'ACTUAL'],
                    ['num' => 177, 'titulo' => 'Resonancia de la Monarquía', 'estado' => 'Completado', 'estadoIcon' => 'check_circle', 'estadoColor' => 'tertiary', 'fecha' => '12 DIC'],
                    ['num' => 176, 'titulo' => 'Las Sombras del Abismo', 'estado' => 'Completado', 'estadoIcon' => 'check_circle', 'estadoColor' => 'tertiary', 'fecha' => '05 DIC'],
                    ['num' => 175, 'titulo' => 'Despertar Sangriento', 'estado' => 'Completado', 'estadoIcon' => 'check_circle', 'estadoColor' => 'tertiary', 'fecha' => '28 NOV'],
                    ['num' => 179, 'titulo' => 'La Última Batalla', 'estado' => 'Por Leer', 'estadoIcon' => 'radio_button_unchecked', 'estadoColor' => 'outline', 'fecha' => '24 DIC'],
                    ['num' => 180, 'titulo' => 'Epílogo del Tirano', 'estado' => 'Estreno en 4 días', 'estadoIcon' => 'lock', 'estadoColor' => 'outline', 'fecha' => 'RAW'],
                ];
                foreach ($caps as $c):
                    $isCurrent = $c['estado'] === 'ACTUAL';
                    ?>
                    <div class="<?= $isCurrent ? 'p-space-sm rounded-lg bg-primary/15 text-primary shadow-[0_0_15px_rgba(208,188,255,0.15)]' : 'p-space-sm rounded-lg hover:bg-surface-container-high text-on-surface-variant' ?> flex items-center justify-between cursor-pointer transition-colors">
                        <div class="flex items-center gap-2.5">
                            <span class="material-symbols-outlined text-<?= $c['estadoColor'] ?> text-base"><?= $c['estadoIcon'] ?></span>
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md <?= $isCurrent ? 'font-bold text-on-surface' : 'text-on-surface' ?>">Cap. <?= $c['num'] ?>: <?= $c['titulo'] ?></span>
                                <span class="font-label-sm text-[10px] text-<?= $c['estadoColor'] ?>"><?= $c['estado'] ?></span>
                            </div>
                        </div>
                        <span class="font-label-sm text-[10px] text-outline"><?= $c['fecha'] ?></span>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="p-space-sm bg-surface-container-lowest flex items-center justify-between">
                <span class="font-label-sm text-[10px] text-outline uppercase tracking-wider">AuraVerse Webtoon v4.2</span>
                <div class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                    <span class="font-label-sm text-[10px] text-tertiary uppercase">Sincronizado</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function initReaderEngine() {
            const stage       = document.getElementById('reader-stage');
            const manhwaStrip = document.getElementById('manhwa-scroll-container');
            const drawer      = document.getElementById('chapter-drawer');
            const btnDrawerOpen  = document.getElementById('drawer-toggle-btn');
            const btnDrawerClose = document.getElementById('drawer-close-btn');
            const btnVertical = document.getElementById('mode-vertical-btn');
            const btnPaged    = document.getElementById('mode-paged-btn');
            const btnZoomIn   = document.getElementById('zoom-in-btn');
            const btnZoomOut  = document.getElementById('zoom-out-btn');
            const zoomLabel   = document.getElementById('zoom-label');
            const btnThemeBg  = document.getElementById('theme-bg-toggle');
            const themeIcon   = document.getElementById('theme-icon');
            const btnBookmark = document.getElementById('bookmark-btn');
            const btnFullscreen = document.getElementById('fullscreen-btn');
            const progressBar = document.getElementById('reading-progress-bar');
            const pageNum     = document.getElementById('current-page-num');

            let zoomLevel = 100;
            let isDarkAbyssal = true;
            let isBookmarked  = false;

            // Drawer
            btnDrawerOpen?.addEventListener('click', () => drawer.classList.remove('translate-x-full'));
            btnDrawerClose?.addEventListener('click', () => drawer.classList.add('translate-x-full'));

            // Modo
            btnVertical?.addEventListener('click', () => {
                btnVertical.classList.add('bg-primary-container', 'text-on-primary-container');
                btnVertical.classList.remove('text-outline');
                btnPaged.classList.remove('bg-primary-container', 'text-on-primary-container');
                btnPaged.classList.add('text-outline');
                manhwaStrip.className = "w-full max-w-[840px] flex flex-col items-center transition-transform duration-200 z-10 shadow-[0_24px_60px_rgba(0,0,0,0.85)] rounded-xl overflow-hidden bg-surface-container-lowest";
            });
            btnPaged?.addEventListener('click', () => {
                btnPaged.classList.add('bg-primary-container', 'text-on-primary-container');
                btnPaged.classList.remove('text-outline');
                btnVertical.classList.remove('bg-primary-container', 'text-on-primary-container');
                btnVertical.classList.add('text-outline');
                manhwaStrip.className = "w-full max-w-[980px] grid grid-cols-1 md:grid-cols-2 gap-4 transition-transform duration-200 z-10 rounded-xl overflow-hidden bg-transparent";
            });

            // Zoom
            function applyZoom(delta) {
                zoomLevel = Math.max(70, Math.min(150, zoomLevel + delta));
                zoomLabel.textContent = zoomLevel + '%';
                manhwaStrip.style.transform = 'scale(' + (zoomLevel / 100) + ')';
                manhwaStrip.style.transformOrigin = 'top center';
            }
            btnZoomIn?.addEventListener('click', () => applyZoom(10));
            btnZoomOut?.addEventListener('click', () => applyZoom(-10));

            // Tema
            btnThemeBg?.addEventListener('click', () => {
                isDarkAbyssal = !isDarkAbyssal;
                if (!isDarkAbyssal) {
                    stage.classList.remove('bg-surface');
                    stage.classList.add('bg-white');
                    themeIcon.textContent = 'light_mode';
                    btnThemeBg.classList.add('text-primary');
                } else {
                    stage.classList.remove('bg-white');
                    stage.classList.add('bg-surface');
                    themeIcon.textContent = 'dark_mode';
                    btnThemeBg.classList.remove('text-primary');
                }
            });

            // Bookmark
            btnBookmark?.addEventListener('click', () => {
                isBookmarked = !isBookmarked;
                if (isBookmarked) {
                    btnBookmark.classList.add('text-secondary', 'bg-secondary-container/30');
                    btnBookmark.innerHTML = '<span class="material-symbols-outlined text-lg" style="font-variation-settings: \'FILL\' 1;">bookmark</span>';
                } else {
                    btnBookmark.classList.remove('text-secondary', 'bg-secondary-container/30');
                    btnBookmark.innerHTML = '<span class="material-symbols-outlined text-lg">bookmark</span>';
                }
            });

            // Fullscreen
            btnFullscreen?.addEventListener('click', () => {
                if (!document.fullscreenElement) {
                    document.documentElement.requestFullscreen?.().catch(() => {});
                } else {
                    document.exitFullscreen?.().catch(() => {});
                }
            });

            // Progreso de lectura
            window.addEventListener('scroll', () => {
                const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
                if (totalHeight > 0) {
                    const progress = Math.min(100, Math.max(0, (window.scrollY / totalHeight) * 100));
                    if (progressBar) progressBar.style.width = progress + '%';
                    const calculatedPage = Math.min(42, Math.max(1, Math.round((progress / 100) * 42)));
                    if (pageNum) pageNum.textContent = calculatedPage;
                }
            });
        })();
    </script>

<?php include __DIR__ . '/frontend.endmain.php'; ?>