<?php
// frontend.serie.php
// Página FICHA DE SERIE

$title     = 'Solo Leveling: Arise | AuraVerse Nexus';
$shellType = 'web_standard';

include __DIR__ . '/frontend.header.php';
?>

    <div class="flex flex-col w-full">

        <!-- ===== HERO BANNER DE LA SERIE ===== -->
        <section class="relative w-full overflow-hidden bg-surface-container-lowest -mt-20">
            <div class="w-full min-h-[580px] lg:h-[720px] bg-cover bg-center relative flex items-end"
                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCyUXQu8dHScgxpmjC1d72mvVxsNEN-A7S9XK8BzGZFAVCgzbwKbgOmvDNZ4BxsZSNPo6CfYLkaB9IPO3r2V7qUGwCF5-P5bSCEuXtHZq8avk4I8FjxD2RZc3zeb5buE0mCi9g2yXFAZJlNAXjFgxEWD_7GRfpdbJhG7xGVtY59zmql95lcbmCnooP3igZ8Pkgmhlwaao2-hEPyNE0IrotkOactV7_tkJfXrDzVjZ0O2s_t2dqg3tag')">

                <span class="absolute top-28 right-16 font-display-hero text-[180px] lg:text-[280px] leading-none text-primary/5 select-none pointer-events-none blur-[1px]">影</span>
                <span class="absolute bottom-12 left-1/3 font-display-hero text-[140px] lg:text-[220px] leading-none text-tertiary/5 select-none pointer-events-none">神</span>

                <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/60 to-surface-container-lowest/80"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/40 to-transparent"></div>
                <div class="absolute -top-32 -left-32 w-96 h-96 bg-primary-container/20 rounded-full blur-[120px] pointer-events-none"></div>
                <div class="absolute top-1/2 right-10 w-80 h-80 bg-tertiary/15 rounded-full blur-[100px] pointer-events-none"></div>

                <div class="relative z-10 w-full px-gutter-lg pb-12 pt-40 max-w-7xl mx-auto flex flex-col gap-space-sm">
                    <div class="flex flex-wrap items-center gap-space-xs">
                        <span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm shadow-[0_0_12px_rgba(244,63,94,0.4)]">AURAVERSE EXCLUSIVE</span>
                        <span class="px-2 py-0.5 rounded-full bg-primary-container/30 text-primary-fixed font-label-sm text-label-sm backdrop-blur-md">RANGO MONARCA SSS</span>
                        <span class="px-2 py-0.5 rounded-full bg-surface-container-high text-tertiary font-label-sm text-label-sm">4K HDR • DOLBY ATMOS</span>
                    </div>
                    <h1 class="font-display-hero text-display-hero-mobile lg:text-display-hero text-on-surface uppercase tracking-tight max-w-4xl drop-shadow-[0_4px_24px_rgba(0,0,0,0.9)]">
                        SOLO LEVELING: ARISE <span class="text-primary block lg:inline">SHADOW MONARCH</span>
                    </h1>
                    <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-on-surface-variant font-label-md text-label-md pt-2">
                        <span class="text-tertiary font-bold">2024</span>
                        <span class="text-outline">•</span>
                        <span>TEMPORADA 2</span>
                        <span class="text-outline">•</span>
                        <span>24 EPISODIOS</span>
                        <span class="text-outline">•</span>
                        <span class="inline-flex items-center text-secondary gap-1">
                        <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="text-on-surface font-bold">9.9</span>
                        <span class="text-outline">(148K VOTOS)</span>
                    </span>
                        <span class="text-outline">•</span>
                        <span class="text-primary-fixed bg-surface-container-highest px-2 py-0.5 rounded">ULTRA HD 120 FPS</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CONTENIDO PRINCIPAL ===== -->
        <section class="w-full px-gutter-lg max-w-7xl mx-auto -mt-16 relative z-20 pb-space-xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-start">

                <!-- ===== POSTER IZQUIERDO ===== -->
                <div class="lg:col-span-4 flex flex-col gap-space-md">
                    <div class="relative group rounded-xl overflow-hidden shadow-[0_16px_50px_rgba(0,0,0,0.85)] bg-surface-container-low transition-transform duration-300 hover:scale-[1.01]">
                        <div class="h-1.5 w-full bg-gradient-to-r from-primary via-tertiary to-secondary"></div>
                        <img class="w-full h-[520px] object-cover object-center group-hover:contrast-105 transition-all duration-500"
                             alt="Solo Leveling Poster"
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuA64JiE3gBHaQFAIEgjv5eFJIaooJkJ17TAUisF97Q79gF02HJSuX7BtRnN7ZMoApoeu3sBQo6T3Vm0bntd3iYasdiVDdOl2kSsZ5OlgYXI1R7A2VxJH7hFCGZzMVEnFX1s0ygk7LpeI4DkdjbNlPH6SGgmC2ZtVhuEXAfYPhn8xsd_b---tmLKwdf3YNvR9TeyEWhQh1909cAvIE5ynh5rOskBlWZ2D-dI0kByY9Z6ncyqBAgGrtsr" />
                        <div class="absolute top-4 left-4 flex flex-col gap-1.5">
                            <span class="bg-surface-container-lowest/90 backdrop-blur-md px-2.5 py-1 rounded font-label-sm text-label-sm text-tertiary shadow-[0_0_12px_rgba(76,215,246,0.3)]">ESTRENO SIMULCAST</span>
                            <span class="bg-secondary-container/90 text-on-secondary-container backdrop-blur-md px-2 py-0.5 rounded font-label-sm text-label-sm font-bold">RANK SSS</span>
                        </div>
                        <div class="absolute bottom-0 inset-x-0 p-space-md bg-gradient-to-t from-surface-container-lowest via-surface-container-lowest/80 to-transparent">
                            <div class="flex items-center justify-between text-on-surface">
                                <span class="font-label-md text-label-md text-outline">AUDIO MULTI-CANAL</span>
                                <span class="font-label-md text-label-md text-primary font-bold">JP / ES LAT / EN</span>
                            </div>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="bg-surface-container-low p-space-md rounded-xl shadow-lg flex flex-col gap-space-sm backdrop-blur-lg">
                        <div class="flex items-center justify-between">
                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Afinidad Espiritual</span>
                            <span class="font-label-sm text-label-sm text-tertiary">MONARCA OSCURO</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="flex justify-between items-center font-label-sm text-label-sm">
                            <span class="text-on-surface-variant flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs text-primary">bolt</span>Poder de Sombra (Mana)
                            </span>
                                <span class="text-primary font-bold">998,400 pts</span>
                            </div>
                            <div class="w-full h-1.5 bg-surface-container-highest rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-primary to-primary-container rounded-full shadow-[0_0_8px_#d0bcff]" style="width: 98%;"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="flex justify-between items-center font-label-sm text-label-sm">
                            <span class="text-on-surface-variant flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs text-tertiary">group_work</span>Ejército Sombrío
                            </span>
                                <span class="text-tertiary font-bold">130,000 Tropas</span>
                            </div>
                            <div class="w-full h-1.5 bg-surface-container-highest rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-tertiary to-tertiary-container rounded-full shadow-[0_0_8px_#4cd7f6]" style="width: 94%;"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="flex justify-between items-center font-label-sm text-label-sm">
                            <span class="text-on-surface-variant flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs text-secondary">local_fire_department</span>Letalidad de Asesino
                            </span>
                                <span class="text-secondary font-bold">CRÍTICO MAX</span>
                            </div>
                            <div class="w-full h-1.5 bg-surface-container-highest rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-secondary-container to-secondary rounded-full shadow-[0_0_8px_#ffb2b7]" style="width: 99%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== INFO DERECHA ===== -->
                <div class="lg:col-span-8 flex flex-col gap-space-lg">

                    <!-- Info + Sinopsis + Botones -->
                    <div class="bg-surface-container-low p-space-lg rounded-xl shadow-xl flex flex-col gap-space-md relative overflow-hidden backdrop-blur-md">
                        <div class="absolute -right-8 -top-8 w-48 h-48 bg-primary-container/10 rounded-full blur-3xl pointer-events-none"></div>

                        <!-- Botones de acción -->
                        <div class="flex flex-wrap items-center gap-space-sm">
                            <button class="flex items-center gap-2 px-space-md py-3 rounded bg-primary text-on-primary font-label-lg text-label-lg transition-all duration-200 hover:shadow-[0_0_24px_rgba(76,215,246,0.6)] hover:bg-primary-fixed cursor-pointer active:scale-95"
                                    onclick="document.getElementById('tab-btn-episodes').click(); document.getElementById('tab-content-episodes').scrollIntoView({behavior: 'smooth', block: 'start'});">
                                <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                                REPRODUCIR S2:E01
                            </button>

                            <button class="flex items-center gap-2 px-space-md py-3 rounded bg-surface-container-high text-on-surface font-label-md text-label-md transition-all duration-200 hover:bg-surface-container-highest hover:text-tertiary cursor-pointer"
                                    id="btn-bookmark">
                                <span class="material-symbols-outlined text-lg" id="bookmark-icon">bookmark_add</span>
                                <span id="bookmark-label">AÑADIR A MI LISTA</span>
                            </button>

                            <button class="p-3 rounded bg-surface-container-high text-on-surface hover:text-primary transition-all duration-200 cursor-pointer"
                                    id="btn-share" title="Compartir vínculo">
                                <span class="material-symbols-outlined text-xl">share</span>
                            </button>

                            <div class="relative group ml-auto">
                                <button class="flex items-center gap-2 px-space-sm py-3 rounded bg-surface-container-highest text-tertiary font-label-md text-label-md hover:bg-surface-bright transition-colors">
                                    <span class="material-symbols-outlined text-lg">download</span>
                                    DESCARGAR 4K
                                    <span class="material-symbols-outlined text-sm">expand_more</span>
                                </button>
                                <div class="absolute right-0 mt-2 w-48 py-2 bg-surface-container-lowest rounded shadow-[0_10px_30px_rgba(0,0,0,0.8)] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-150 z-30">
                                    <a class="flex justify-between items-center px-4 py-2 font-label-sm text-label-sm text-on-surface hover:bg-surface-container-high hover:text-tertiary" href="#">
                                        <span>Ultra HD 4K (HEVC)</span><span class="text-outline">2.8 GB</span>
                                    </a>
                                    <a class="flex justify-between items-center px-4 py-2 font-label-sm text-label-sm text-on-surface hover:bg-surface-container-high hover:text-tertiary" href="#">
                                        <span>Full HD 1080p</span><span class="text-outline">1.2 GB</span>
                                    </a>
                                    <a class="flex justify-between items-center px-4 py-2 font-label-sm text-label-sm text-on-surface hover:bg-surface-container-high hover:text-tertiary" href="#">
                                        <span>Mobile 720p</span><span class="text-outline">480 MB</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Bento de metadatos -->
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm pt-space-xs">
                            <div class="bg-surface-container p-space-sm rounded">
                                <span class="font-label-sm text-label-sm text-outline uppercase block">Estudio</span>
                                <span class="font-title-md text-title-md text-primary font-bold">A-1 PICTURES</span>
                            </div>
                            <div class="bg-surface-container p-space-sm rounded">
                                <span class="font-label-sm text-label-sm text-outline uppercase block">Dirección</span>
                                <span class="font-title-md text-title-md text-on-surface font-semibold">S. Nakashige</span>
                            </div>
                            <div class="bg-surface-container p-space-sm rounded">
                                <span class="font-label-sm text-label-sm text-outline uppercase block">Afinidad Astral</span>
                                <span class="font-title-md text-title-md text-tertiary font-semibold">Vacío &amp; Sombra</span>
                            </div>
                            <div class="bg-surface-container p-space-sm rounded">
                                <span class="font-label-sm text-label-sm text-outline uppercase block">Estado</span>
                                <span class="font-title-md text-title-md text-secondary font-semibold">En Emisión</span>
                            </div>
                        </div>

                        <!-- Géneros -->
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2.5 py-1 rounded bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">FANTASÍA OSCURA</span>
                            <span class="px-2.5 py-1 rounded bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">ACCIÓN SOBRENATURAL</span>
                            <span class="px-2.5 py-1 rounded bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">SISTEMA RPG</span>
                            <span class="px-2.5 py-1 rounded bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">S-RANK DUNGEON</span>
                            <span class="px-2.5 py-1 rounded bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">MONARCA MILITAR</span>
                        </div>

                        <!-- Sinopsis -->
                        <div class="flex flex-col gap-space-xs text-on-surface-variant font-body-md text-body-md">
                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Sinopsis del Grimorio</span>
                            <p class="leading-relaxed">
                                En un mundo asolado por la apertura de portales dimensionales repletos de bestias feroces, la humanidad depende de los cazadores dotados de habilidades mágicas. Sung Jin-woo, universalmente condenado y apodado como «el cazador más débil de toda la humanidad», apenas sobrevive en incursiones de rango inferior para costear los tratamientos de su madre.
                            </p>
                            <p class="leading-relaxed">
                                Sin embargo, tras una brutal masacre en un misterioso Calabozo Doble y al borde del abismo final, Jin-woo es bendecido por un misterioso sistema de interfaz que solo él puede visualizar. Capaz de subir de nivel sin límites físicos ni mágicos, desbloquea la legendaria clase secreta del Nigromante: el despertar absoluto como el temido <strong class="text-primary font-semibold">Monarca de las Sombras</strong>, capaz de subyugar las almas de sus enemigos caídos y desafiar el tejido de la misma existencia.
                            </p>
                        </div>
                    </div>

                    <!-- ===== TABS ===== -->
                    <div class="flex flex-col gap-space-md">
                        <div class="flex items-center gap-space-xs overflow-x-auto pb-1 bg-surface-container-low p-1.5 rounded-lg">
                            <button id="tab-btn-episodes" onclick="switchSeriesTab('episodes')"
                                    class="px-space-md py-2.5 rounded font-label-md text-label-md uppercase transition-all bg-primary-container text-on-primary-container font-bold shadow-[0_0_12px_rgba(160,120,255,0.4)] flex items-center gap-1.5 cursor-pointer shrink-0">
                                <span class="material-symbols-outlined text-base">video_library</span> Episodios (24)
                            </button>
                            <button id="tab-btn-characters" onclick="switchSeriesTab('characters')"
                                    class="px-space-md py-2.5 rounded font-label-md text-label-md uppercase transition-all text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high flex items-center gap-1.5 cursor-pointer shrink-0">
                                <span class="material-symbols-outlined text-base">shield_person</span> Fichas de Personajes
                            </button>
                            <button id="tab-btn-related" onclick="switchSeriesTab('related')"
                                    class="px-space-md py-2.5 rounded font-label-md text-label-md uppercase transition-all text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high flex items-center gap-1.5 cursor-pointer shrink-0">
                                <span class="material-symbols-outlined text-base">auto_awesome_motion</span> Relacionados
                            </button>
                            <button id="tab-btn-comments" onclick="switchSeriesTab('comments')"
                                    class="px-space-md py-2.5 rounded font-label-md text-label-md uppercase transition-all text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high flex items-center gap-1.5 cursor-pointer shrink-0">
                                <span class="material-symbols-outlined text-base">forum</span> Reseñas (324)
                            </button>
                        </div>

                        <!-- TAB EPISODIOS -->
                        <div id="tab-content-episodes" class="flex flex-col gap-space-md">
                            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-space-sm bg-surface-container p-space-sm rounded-lg">
                                <div class="flex items-center gap-space-xs">
                                    <span class="font-label-sm text-label-sm text-outline uppercase">Temporada:</span>
                                    <button class="px-3 py-1 rounded bg-primary-container/20 text-primary-fixed font-label-sm text-label-sm font-bold">T2: El Despertar del Monarca (12)</button>
                                    <button class="px-3 py-1 rounded bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm hover:text-on-surface">T1: El Doble Calabozo (12)</button>
                                </div>
                                <span class="font-label-sm text-label-sm text-tertiary">Transmitido en 4K Ultra • Sub &amp; Dob</span>
                            </div>

                            <?php
                            $episodios = [
                                ['num' => 'EPISODIO 01', 'tipo' => 'VISTO', 'titulo' => '"Levántate: El Reino de las Sombras Responde"',
                                    'desc' => 'Con la caída del comandante Igris en el Salón del Trono Carmesí, Jin-woo pronuncia las palabras prohibidas.',
                                    'dur' => '24:18 MIN', 'prog' => 100, 'nota' => '4.2M vistas', 'nuevo' => false,
                                    'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC03eXqdtv1y8CUP3jMtnD0vLyyYHJLlzxuyVGqkNS3SqyHuQwS0tHk86sXQKt8fbU3RQJeUw2sp0JxAnaiX1mpCJMcFphI2i8KjesCpE8PUoWITRfBEDK7vYNp_dSxXQrWCJlun25VG53g-80kdk1laz4K24uBgf6TVEGmsENauMEqrwV_pdIMx2DHTzTOLG4SbV3PUZbpsQLJDmfi1NFio9OJVK_yEdhSbXJkUd8qh6y0hJB5bLxi'],
                                ['num' => 'EPISODIO 02', 'tipo' => 'EN REPRODUCCIÓN', 'titulo' => '"La Puerta Roja y el Caos de Hielo"',
                                    'desc' => 'Una expedición de entrenamiento para novatos queda atrapada en una anomalía dimensional clasificada como Puerta Roja.',
                                    'dur' => '23:50 MIN', 'prog' => 45, 'nota' => '3.8M vistas', 'nuevo' => false,
                                    'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCKGeycVFuD0RmIUh5NiUlj22Q5JOQ1g0cstcleXZs7FvgtVK5ynv_PJ_B1ra2o0EyTSdUWHIVciWv-nPTdEw6hcCwEdpQh6msD9ah1DlwCEZa4yOp1Oa1AbVfwQNrS7leApFKgMicaN8Sbh6ThBF-14J6H6t3akqKLB4h6eiZjIYbsUcsn4zVA9HaeHDJnFFuSGHy6i4yguXuS8eHdVCynVCh7YJ-Gt24Fj8TUokayncrnpdt9QLI9'],
                                ['num' => 'EPISODIO 03', 'tipo' => 'NUEVO', 'titulo' => '"El Olor de la Muerte: La Sospecha de Cha Hae-In"',
                                    'desc' => 'La vice-líder del Gremio Cazadores, poseedora de un olfato sobrehumano, percibe por primera vez una fragancia aterradora.',
                                    'dur' => '24:42 MIN', 'prog' => 0, 'nota' => '3.1M vistas', 'nuevo' => true,
                                    'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBX7vR7vSAEivcLMGfLvvC_Sgl_srPaR4_Z00bGuLQeqFjHNPN1oCiSunymHJ0B_nmEmvyfa3ksaKHm4rrZAa2bU1R0A70fsiVNy0wK8BPniwBDEroVxNoIgS8SNQI5DIKDaza0hIEhVFbadRZVfthEmftu9dQAzbe_91asDxEJlWyVbQdXH8Za_y7slwAYzRRiOC3mJFwfeLCMZeoIZIawyn4t_BXxe4Cxl3dnwvlMmLzJOs0hGVI4'],
                                ['num' => 'EPISODIO 04', 'tipo' => 'ESTRENO SÁBADO', 'titulo' => '"Piso 100 del Castillo Demoníaco: La Sangre del Rey"',
                                    'desc' => 'Para sintetizar el Elixir de la Vida y sanar el sueño eterno de su madre, Jin-woo desafía al Rey de los Demonios Blancos.',
                                    'dur' => '25:10 MIN', 'prog' => 0, 'nota' => 'Próximamente', 'nuevo' => false,
                                    'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB-nP8tLdVXDI_h-y9OMWTSiynGgd-nXZiG-YVikOm-x6jgUrbn50vBOV3hWB0CtE3CdpoHtHakSZ67_umQsRo3AmZlApIT9eV7dd9yZevgUsDIOtsSSl2Lgdn8WIPlrRlGnIC5yeHnL1TPiuCLavSCi9qodDDXE6Hv7Gq2qNHO6jB1_aeZhq9tHWXfpY6z609M9xh0TCnZ57G176qcH3ic6c5quLPxp2xZq_Y9r39uk9BDLyqaIEmw'],
                            ];
                            foreach ($episodios as $ep):
                                $borderColor = $ep['nuevo'] ? 'tertiary' : 'primary';
                                $tipoColor   = $ep['nuevo'] ? 'tertiary' : ($ep['tipo'] === 'EN REPRODUCCIÓN' ? 'tertiary' : ($ep['tipo'] === 'VISTO' ? 'outline' : 'secondary'));
                                ?>
                                <div class="group bg-surface-container-low hover:bg-surface-container p-space-sm rounded-xl transition-all duration-200 shadow-md flex flex-col md:flex-row gap-space-md items-start">
                                    <div class="relative w-full md:w-56 h-32 rounded-lg overflow-hidden shrink-0 bg-surface-container-lowest">
                                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                             alt="<?= htmlspecialchars($ep['titulo']) ?>"
                                             src="<?= $ep['img'] ?>" />
                                        <div class="absolute inset-0 bg-surface-container-lowest/40 flex items-center justify-center group-hover:bg-surface-container-lowest/10 transition-colors">
                                            <button class="w-10 h-10 rounded-full bg-primary/90 text-on-primary flex items-center justify-center shadow-[0_0_12px_#d0bcff] hover:scale-110 transition-transform">
                                                <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                                            </button>
                                        </div>
                                        <span class="absolute bottom-2 right-2 bg-surface-container-lowest/90 px-1.5 py-0.5 rounded font-label-sm text-[10px] text-tertiary"><?= $ep['dur'] ?></span>
                                        <?php if ($ep['prog'] > 0): ?>
                                            <div class="absolute bottom-0 inset-x-0 h-1 bg-surface-container-highest">
                                                <div class="h-full bg-primary" style="width: <?= $ep['prog'] ?>%;"></div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex flex-col justify-between flex-grow h-full py-0.5">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex items-center justify-between">
                                                <span class="font-label-sm text-label-sm text-<?= $tipoColor ?> font-bold"><?= $ep['num'] ?> • TEMPORADA 2</span>
                                                <span class="px-2 py-0.5 rounded bg-surface-container-highest font-label-sm text-label-sm text-<?= $tipoColor ?>"><?= $ep['tipo'] ?></span>
                                            </div>
                                            <h3 class="font-title-md text-title-md text-on-surface font-bold group-hover:text-<?= $borderColor ?> transition-colors"><?= htmlspecialchars($ep['titulo']) ?></h3>
                                            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2"><?= htmlspecialchars($ep['desc']) ?></p>
                                        </div>
                                        <div class="flex items-center gap-space-md pt-2">
                                        <span class="font-label-sm text-label-sm text-outline flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">visibility</span> <?= $ep['nota'] ?>
                                        </span>
                                            <button class="font-label-sm text-label-sm text-tertiary hover:underline flex items-center gap-1 ml-auto">
                                                <span class="material-symbols-outlined text-sm">download</span> Descargar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- TAB PERSONAJES -->
                        <div id="tab-content-characters" class="hidden grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-space-md">
                            <?php
                            $personajes = [
                                ['nombre' => 'Sung Jin-Woo', 'rol' => 'MONARCA DE LAS SOMBRAS', 'rolColor' => 'primary', 'rank' => 'SSS-RANK', 'rankColor' => 'secondary-container',
                                    'desc' => 'El único cazador con el poder del Sistema. Puede revivir a los muertos como sus sirvientes de sombra leales.',
                                    'stat' => 'INFINITO / INDESCIFRABLE', 'statColor' => 'tertiary',
                                    'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB6YZK9LVgEKwEqjoiUppDBHVR9FuRknRnAg_dgASb_U3Uz4abwyGW20XcM3c4c-j-Mcypz0bKFYT2w5Tbegy3NO81wSvBtk0MyqSoZwY4fhP80e5pZ4TD-z-39aV-JZSe8wfVQNgnF7wphxCRyc_Ym3xlmPnhMxgAudXhs90QZe77CHug7coYaMJyE6_Gzyj6fljn2E8PZ_VJCbhvz9WkV11YzrG-ei_3U8WycWGl6_q7YM7dTyspE'],
                                ['nombre' => 'Cha Hae-In', 'rol' => 'ESPADA DE LA LUZ', 'rolColor' => 'tertiary', 'rank' => 'S-RANK #9', 'rankColor' => 'surface-container-highest',
                                    'desc' => 'Vice-maestra del Gremio Hunters y la 9ª cazadora de rango S de Corea del Sur.',
                                    'stat' => '84,500 pts', 'statColor' => 'on-surface',
                                    'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCLJ9fVM5DECpSQGsJ-2Q4DH3mkXeHMy2gJ0Q_fEKQmCWk19ghLxkIPOiJrxvDF7_Rbn3aNedy3NjNlfBPDOwkNGk6QrTHnNjk2cauqUj8Q-8diLmk2bXIwUhUgJBo6yRubqMHxnQhQvq-0MPW0inh6ZINh-ZoWAumezjo_5E2pfxCNrTAYgzgeZpyYZvbcpwvDbBImz01eYNxAUNPXjwNNquFqLpQjMVeayftgP-errTvBgToLkQTQ'],
                                ['nombre' => 'Igris el Sanguinario', 'rol' => 'CABALLERO COMANDANTE', 'rolColor' => 'secondary', 'rank' => 'COMANDANTE', 'rankColor' => 'primary-container',
                                    'desc' => 'El primer gran lugarteniente invocado por Jin-woo. Maestro absoluto del combate con espadón a dos manos.',
                                    'stat' => '92,000 pts', 'statColor' => 'secondary',
                                    'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA6EE2SWkGXmF20LV5QVuN5X5cIHZYRauIClJ9t-ptFxMqMir2_yxMyxY4mwXczabTHPL6HO2aYHI3Egys3ZkufpFgVd8r8QkCvGDfKwt9-cbNapKKD3frdRlJmJidch68NxFWnrlQWavpQSLG9FjlZFFMfdr_EbrAte3nKNO2fmUvIKJ9oOSiMhSZBQEza6fM4euDI-h9d9TZ6WV4BoFU4d1UxgoTJ2q3-Uc4j-LQpKrKbZlw-SYfB'],
                            ];
                            foreach ($personajes as $p):
                                ?>
                                <div class="bg-surface-container-low p-space-md rounded-xl shadow-lg flex flex-col gap-space-sm relative overflow-hidden group hover:scale-[1.02] transition-all">
                                    <div class="h-1 w-full bg-<?= $p['rolColor'] ?> absolute top-0 left-0"></div>
                                    <div class="w-full h-44 rounded-lg overflow-hidden bg-surface-container-lowest">
                                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="<?= $p['nombre'] ?>" src="<?= $p['img'] ?>" />
                                    </div>
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h4 class="font-title-lg text-title-lg text-on-surface font-bold"><?= $p['nombre'] ?></h4>
                                            <span class="font-label-sm text-label-sm text-<?= $p['rolColor'] ?>"><?= $p['rol'] ?></span>
                                        </div>
                                        <span class="px-2 py-0.5 rounded bg-<?= $p['rankColor'] ?> text-on-<?= $p['rankColor'] ?> font-label-sm text-label-sm font-bold"><?= $p['rank'] ?></span>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant"><?= $p['desc'] ?></p>
                                    <div class="bg-surface-container p-2 rounded flex justify-between font-label-sm text-label-sm">
                                        <span class="text-outline">Poder Espiritual:</span>
                                        <span class="text-<?= $p['statColor'] ?> font-bold"><?= $p['stat'] ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- TAB RELACIONADOS -->
                        <div id="tab-content-related" class="hidden grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-space-md">
                            <?php
                            $relacionados = [
                                ['titulo' => 'Jujutsu Kaisen: Incidente de Shibuya', 'estudio' => 'MAPPA • 2023', 'nota' => '★ 9.8', 'badge' => 'SPECIAL GRADE', 'badgeColor' => 'secondary-container', 'notaColor' => 'secondary',
                                    'desc' => 'La colisión definitiva de energía maldita en las entrañas del metro de Tokio.',
                                    'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCCL_6Aq0yO7IXyhr1GvY7eGDcbuBLD-sVEocRlusNJ5YgAjvQ07kigGhCMpGUPEIb2UtE9GSX-p3nclYCho2RS6yLgUZp6i9zpsOF4LV6dDYu7u1uv61BAdED2lruv0OB1lgEJkyWiAHVcGezaRvzFAi92UJZmD9B2UaSToTkw2bz6Fy27YDRhhl7ThMO7mP2sFhvPV_7z4Abt9uQZNZEjbLtdww4MDUjIPicdXmZzD9UNydYDx2ou'],
                                ['titulo' => 'Bleach: TYBW - The Conflict', 'estudio' => 'PIERROT • 2024', 'nota' => '★ 9.7', 'badge' => 'YONKO TIER', 'badgeColor' => 'primary-container', 'notaColor' => 'tertiary',
                                    'desc' => 'La guerra milenaria entre Shinigamis y Quincies por la supervivencia de la Sociedad de Almas.',
                                    'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCVXQ9t0DpxFcN_E9XkDhWc5gxuo4fOeh8EwR_n_A-T2RpOZ4dKPvPLVB3xL0ojj9DL090H_-UFanQzImlGoYWpxox7ove117br3o10O-gqdvdsVPyE3DGTIpXsLgbqvOsicalQeDdXSjbFnXta-kSkdGhIY19Wh6FRY7wmiRppFbmd3I9hmxYGkWHd21HjDl_MGl7uRKOcPJPfb0Ao5cD89QfgYKPriNYI90DaIGf5tqnrzn8Q6bRs'],
                                ['titulo' => 'Chainsaw Man: Reze Arc', 'estudio' => 'MAPPA • 2024', 'nota' => '★ 9.6', 'badge' => 'CHAOS S-RANK', 'badgeColor' => 'surface-container-highest', 'notaColor' => 'secondary',
                                    'desc' => 'Pactos diabólicos y detonaciones de pólvora en una danza letal de afecto y aniquilación.',
                                    'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBj0xksDsgyrvElBK65IA1PYi4tKlrirreTAkbpWL1SIDPj22u2QpgwwHLQslA-_K650R0x9piaDXyrNpJPsviNe18wiTUactx306RSgYywf_CmeaVcEO0kTeiU6mO4SYk1ltY1ro5G8MX6-DVt98pwi7USX0AxG2gO_cIkeiru2ZlBSIne-5c9nNDToNxWjHfp-5PQO49GdxGGF7nXSvKn0VFjRmPOT5SSHXywiWAP0YCUuHYPMmuq'],
                            ];
                            foreach ($relacionados as $r):
                                ?>
                                <div class="bg-surface-container-low rounded-xl overflow-hidden shadow-lg group hover:scale-[1.02] transition-all flex flex-col">
                                    <div class="h-48 w-full overflow-hidden bg-surface-container-lowest relative">
                                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" alt="<?= $r['titulo'] ?>" src="<?= $r['img'] ?>" />
                                        <span class="absolute top-2 right-2 <?= $r['badgeColor'] ?> <?= $r['badgeColor'] === 'surface-container-highest' ? 'text-tertiary' : 'text-on-' . $r['badgeColor'] ?> px-2 py-0.5 rounded font-label-sm text-label-sm font-bold"><?= $r['badge'] ?></span>
                                    </div>
                                    <div class="p-space-md flex flex-col gap-1">
                                        <div class="flex items-center justify-between text-outline font-label-sm text-label-sm">
                                            <span><?= $r['estudio'] ?></span>
                                            <span class="text-<?= $r['notaColor'] ?>"><?= $r['nota'] ?></span>
                                        </div>
                                        <h4 class="font-title-md text-title-md text-on-surface font-bold group-hover:text-primary"><?= $r['titulo'] ?></h4>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2"><?= $r['desc'] ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- TAB COMENTARIOS -->
                        <div id="tab-content-comments" class="hidden flex flex-col gap-space-md">
                            <div class="bg-surface-container-low p-space-md rounded-xl shadow-lg flex flex-col gap-space-sm">
                                <div class="flex items-center justify-between">
                                <span class="font-label-md text-label-md text-on-surface uppercase flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary">rate_review</span> Transmitir Frecuencia de Reseña
                                </span>
                                    <div class="flex items-center gap-1 text-secondary">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <span class="material-symbols-outlined text-lg cursor-pointer" style="font-variation-settings: 'FILL' 1;">star</span>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <textarea class="w-full bg-surface-container-lowest text-on-surface p-space-sm rounded font-body-sm text-body-sm placeholder:text-outline focus:outline-none focus:shadow-[0_0_12px_rgba(76,215,246,0.3)]" rows="3" placeholder="Escribe tu análisis sobre la animación de A-1 Pictures, banda sonora de Hiroyuki Sawano y la fidelidad al manhwa..."></textarea>
                                <div class="flex justify-end">
                                    <button class="px-space-md py-2 rounded bg-primary text-on-primary font-label-sm text-label-sm hover:bg-primary-fixed transition-colors" onclick="window.showToast('Reseña publicada en el Grimorio. ¡Gracias por tu aporte!')">PUBLICAR EN EL GRIMORIO</button>
                                </div>
                            </div>

                            <?php
                            $comentarios = [
                                ['avatar' => 'KL', 'avatarColor' => 'primary-container/30', 'textColor' => 'primary',
                                    'nombre' => 'Kaelen_Void', 'badge' => 'REIATSU 98%', 'badgeColor' => 'surface-container-highest', 'badgeTextColor' => 'tertiary',
                                    'tiempo' => 'Hace 2 horas',
                                    'texto' => 'La escena cuando Jin-woo susurra «Arise» y Sawano introduce el riff de bajo distorsionado es historia pura del shonen moderno. La fluidez de las sombras animadas en 3D mezclado con trazo tradicional supera con creces la primera temporada.',
                                    'likes' => '1,420', 'respuestas' => 28],
                                ['avatar' => 'VZ', 'avatarColor' => 'secondary-container/30', 'textColor' => 'secondary',
                                    'nombre' => 'ValKiria_9', 'badge' => 'S-RANK HUNTER', 'badgeColor' => 'secondary-container', 'badgeTextColor' => 'on-secondary-container',
                                    'tiempo' => 'Ayer',
                                    'texto' => 'La dirección artística de Shunsuke Nakashige captura a la perfección las paletas frías y neón azul/morado del webtoon original de Chugong & DUBU (QEPD maestro). Una adaptación con el respeto y presupuesto que merecía esta obra.',
                                    'likes' => '892', 'respuestas' => 9],
                            ];
                            foreach ($comentarios as $c):
                                ?>
                                <div class="bg-surface-container-low p-space-md rounded-xl flex gap-space-md items-start">
                                    <div class="w-10 h-10 rounded-full bg-<?= $c['avatarColor'] ?> flex items-center justify-center text-<?= $c['textColor'] ?> font-bold shrink-0">
                                        <?= $c['avatar'] ?>
                                    </div>
                                    <div class="flex flex-col gap-1 w-full">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <span class="font-title-md text-title-md text-on-surface font-semibold"><?= $c['nombre'] ?></span>
                                                <span class="px-1.5 py-0.2 rounded bg-<?= $c['badgeColor'] ?> text-<?= $c['badgeTextColor'] ?> font-label-sm text-[10px]"><?= $c['badge'] ?></span>
                                            </div>
                                            <span class="font-label-sm text-label-sm text-outline"><?= $c['tiempo'] ?></span>
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant"><?= $c['texto'] ?></p>
                                        <div class="flex items-center gap-space-md pt-1 text-outline font-label-sm text-label-sm">
                                            <button class="flex items-center gap-1 hover:text-primary"><span class="material-symbols-outlined text-sm">thumb_up</span> <?= $c['likes'] ?></button>
                                            <button class="flex items-center gap-1 hover:text-secondary"><span class="material-symbols-outlined text-sm">reply</span> Responder (<?= $c['respuestas'] ?>)</button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== RECOMENDADOS ===== -->
        <section class="w-full px-gutter-lg max-w-7xl mx-auto py-space-lg">
            <div class="flex items-center justify-between mb-space-md">
                <div>
                    <span class="font-label-sm text-label-sm text-tertiary uppercase tracking-widest block">Telemetría de Afinidades Similares</span>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface tracking-wide">RECOMENDADOS PARA TU RANGO</h2>
                </div>
                <a class="font-label-md text-label-md text-primary hover:text-primary-fixed uppercase flex items-center gap-1" href="/catalogo">
                    Explorar Todo el Grimorio <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-space-md">
                <?php
                $recomendados = [
                    ['titulo' => 'Demon Slayer: Entrenamiento Pilar', 'estudio' => 'Ufotable • 8 Episodios', 'badge' => 'PILAR TIER', 'badgeColor' => 'secondary-container', 'nota' => '★ 9.8', 'notaColor' => 'secondary',
                        'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCvbQYyzUlJEDI7ELTmY3A42JAUxA4-RQGCq160xps-5xUTDSTvAYG4NGvMs_oztUEbklPGSLoLl1trTK6F7OP5OpVEohDF9-PufnrOSEOrVCiHeAQhYkLS1MIqMf5iyc1b156JMs5EValXXQoVQ8vbIVvgNEWoxzp3NPlOUE8xeCL-rKFYVtzkr9LYiXOMKFXUOH10jJBez1ghRppuq8YZEtcD1Z8QAALYZzf9iDnGpqeTijQvfNVS'],
                    ['titulo' => "Fate/Stay Night: Heaven's Feel", 'estudio' => 'Ufotable • Trilogía Fílmica', 'badge' => 'CORRUPCIÓN ASTRAL', 'badgeColor' => 'primary-container', 'nota' => '★ 9.9', 'notaColor' => 'primary',
                        'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDWsoryMMGRZPYk52a9rXmIjZkM1ZHPOfCFaw-eHmgZYXNFyOZQr-6uDjXpRoROmrYJHzNXHDch_UTKIKcYsTx-GeE2rup2gY5bL3zqUE6Aavnge0a5h7srL4-25wM1Nhmp-H9vkdO5kiSTVVXOiuxnmQxuVnj9A8q4Vk2BEk0riKWgc1eM8w2A_oX27PvuWzbLU9T7CucI1fybfEQQUKd57Hs_xkWvDCoqcni0XCZyFHsmdNwHjEuv'],
                    ['titulo' => 'Mob Psycho 100: Temporada III', 'estudio' => 'Bones • 12 Episodios', 'badge' => 'PSIQUIATRÍA 100%', 'badgeColor' => 'tertiary-container', 'nota' => '★ 9.7', 'notaColor' => 'tertiary',
                        'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBFrP3X3xSKKp0ohM0IjnSzjJXRHDe42X6oeJunWk6BgMopwsaEQ0Mz3shn48tfNiFxqgKVt7LyQ4y_KFjcCbzvkudLeBuKttEXiNkmYwcANM2J15B-_bBhJUhwg3gFsBI-_9FP0-myXoGIVF5NY-hSja25fAefhpUlVxbBck-ivwHo0-B2KYlSTYP8iV8_NLL6Ae1X_gDD_0C2h_znNjBjLr86FEOCs-JG5muHb7nNCfe2Fd9kwpgw'],
                    ['titulo' => 'Hunter x Hunter: Hormigas Quimera', 'estudio' => 'Madhouse • 61 Episodios', 'badge' => 'NEN MAESTRÍA', 'badgeColor' => 'surface-container-highest', 'nota' => '★ 9.9', 'notaColor' => 'secondary',
                        'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBK5_w1Ub5UiTUw1Kt_uj8mWO1k7uYpu6w31YDOdg28XPnLDo5nMjJX0nhak7l2x5W6Y1k7lHG1ambBD17XmffRoOU0qU6N3gBs6xb-etayh6So-TJOm4KWPMvjFF0ABClLCGY-kGhpz1i3nsrzS4ER_HLDM5wmN6OzKPP-p5474L5UhALeciI8mo_1xYCkIiQutuzUFbNXB5KFcFqW6oD0MRGy22x5QuWptEO-of7ct7meVj6tpILe'],
                ];
                foreach ($recomendados as $r):
                    ?>
                    <div class="bg-surface-container-low rounded-xl overflow-hidden shadow-lg group hover:scale-[1.02] transition-all flex flex-col">
                        <div class="relative h-64 bg-surface-container-lowest overflow-hidden">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="<?= $r['titulo'] ?>" src="<?= $r['img'] ?>" />
                            <div class="absolute top-2 left-2 <?= $r['badgeColor'] ?> text-on-<?= $r['badgeColor'] ?> px-2 py-0.5 rounded font-label-sm text-label-sm"><?= $r['badge'] ?></div>
                            <div class="absolute bottom-2 right-2 bg-surface-container-lowest/80 px-2 py-0.5 rounded font-label-sm text-label-sm text-<?= $r['notaColor'] ?>"><?= $r['nota'] ?></div>
                        </div>
                        <div class="p-space-sm flex flex-col gap-1">
                            <h4 class="font-title-md text-title-md text-on-surface font-bold group-hover:text-primary"><?= $r['titulo'] ?></h4>
                            <span class="font-label-sm text-label-sm text-outline"><?= $r['estudio'] ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

    </div>

    <!-- ===== SCRIPT DE LA FICHA ===== -->
    <script>
        // ===== Tabs =====
        function switchSeriesTab(tabId) {
            const tabs = ['episodes', 'characters', 'related', 'comments'];
            tabs.forEach(id => {
                const content = document.getElementById('tab-content-' + id);
                const btn     = document.getElementById('tab-btn-' + id);
                if (id === tabId) {
                    content.classList.remove('hidden');
                    btn.className = "px-space-md py-2.5 rounded font-label-md text-label-md uppercase transition-all bg-primary-container text-on-primary-container font-bold shadow-[0_0_12px_rgba(160,120,255,0.4)] flex items-center gap-1.5 cursor-pointer shrink-0";
                } else {
                    content.classList.add('hidden');
                    btn.className = "px-space-md py-2.5 rounded font-label-md text-label-md uppercase transition-all text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high flex items-center gap-1.5 cursor-pointer shrink-0";
                }
            });
        }

        // ===== Bookmark =====
        (function initBookmark() {
            const bookmarkBtn   = document.getElementById('btn-bookmark');
            const bookmarkIcon  = document.getElementById('bookmark-icon');
            const bookmarkLabel = document.getElementById('bookmark-label');
            const key = 'auraverse_bookmark_solo_leveling';

            let isSaved = localStorage.getItem(key) === 'true';

            function updateUI() {
                if (isSaved) {
                    bookmarkIcon.textContent = 'bookmark_added';
                    bookmarkIcon.classList.add('text-secondary');
                    bookmarkLabel.textContent = 'EN MI LISTA';
                    bookmarkBtn.classList.add('bg-secondary-container', 'text-on-secondary-container');
                    bookmarkBtn.classList.remove('bg-surface-container-high', 'text-on-surface');
                } else {
                    bookmarkIcon.textContent = 'bookmark_add';
                    bookmarkIcon.classList.remove('text-secondary');
                    bookmarkLabel.textContent = 'AÑADIR A MI LISTA';
                    bookmarkBtn.classList.remove('bg-secondary-container', 'text-on-secondary-container');
                    bookmarkBtn.classList.add('bg-surface-container-high', 'text-on-surface');
                }
            }

            updateUI();

            bookmarkBtn.addEventListener('click', () => {
                isSaved = !isSaved;
                localStorage.setItem(key, isSaved);
                updateUI();
                if (window.showToast) {
                    window.showToast(isSaved ? 'Añadido a Mi Lista' : 'Eliminado de Mi Lista', isSaved ? 'bookmark_added' : 'bookmark_remove', isSaved ? 'secondary' : 'outline');
                }
            });
        })();

        // ===== Compartir =====
        document.getElementById('btn-share').addEventListener('click', () => {
            if (navigator.clipboard) navigator.clipboard.writeText(window.location.href);
            if (window.showToast) {
                window.showToast('¡Enlace dimensional copiado al portapapeles!', 'check_circle', 'tertiary');
            }
        });
    </script>

<?php include __DIR__ . '/frontend.endmain.php'; ?>