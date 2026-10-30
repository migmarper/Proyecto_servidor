<?php
$title     = 'Panel de Control | AuraVerse Nexus';
$shellType = 'web_dashboard';
include_once __DIR__ . "/../../functions/file-management.php";
include "app/Views/backend/new_template/backend.head.php";
include "app/Views/backend/new_template/backend.aside.php";
?>

    <main class="relative pt-16 bg-surface min-h-screen px-gutter-lg py-space-lg">

        <!-- ==================== VISTA DASHBOARD ==================== -->
        <div id="view-dashboard" class="flex flex-col w-full gap-space-lg">

            <!-- Toolbar -->
            <div class="flex flex-col xl:flex-row xl:items-center justify-between gap-space-md bg-surface-container-low/90 backdrop-blur-md p-space-md rounded-xl shadow-xl border-l-4 border-l-primary relative overflow-hidden">
                <div class="absolute -right-8 -bottom-10 select-none pointer-events-none opacity-5 font-headline-xl text-[140px] text-on-surface">霊圧</div>
                <div class="flex flex-col sm:flex-row sm:items-center gap-space-md z-10">
                    <div class="flex items-center gap-2">
                        <span class="px-2.5 py-1 rounded bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold tracking-widest uppercase shadow-[0_0_12px_rgba(181,0,54,0.4)]">S-CLASS ACCESS</span>
                        <span class="font-label-md text-label-md text-tertiary tracking-wider font-semibold">// REIRYOKU CONSOLE V4.9</span>
                    </div>
                    <div class="relative flex-1 sm:w-80">
                        <span class="material-symbols-outlined absolute left-3 top-2.5 text-outline text-lg">terminal</span>
                        <input class="w-full bg-surface-container-lowest text-on-surface text-body-sm font-body-sm pl-9 pr-3 py-1.5 rounded focus:outline-none focus:ring-1 focus:ring-tertiary placeholder:text-outline/60 transition-all" id="sys-grep-input" placeholder="/grep registros, uid, protocolos..." type="text"/>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-space-xs z-10">
                    <button class="flex items-center gap-1.5 px-3 py-1.5 rounded bg-surface-container-high hover:bg-surface-container-highest text-on-surface hover:text-tertiary text-label-sm font-label-sm uppercase tracking-wider transition-colors" id="btn-recalibrate">
                        <span class="material-symbols-outlined text-sm text-tertiary">sync</span>
                        <span>Recalibrar</span>
                    </button>
                    <button class="flex items-center gap-1.5 px-3 py-1.5 rounded bg-surface-container-high hover:bg-surface-container-highest text-on-surface hover:text-primary text-label-sm font-label-sm uppercase tracking-wider transition-colors" id="btn-export-csv">
                        <span class="material-symbols-outlined text-sm text-primary">download</span>
                        <span>Exportar CSV</span>
                    </button>
                    <button class="flex items-center gap-1.5 px-3.5 py-1.5 rounded bg-primary-container text-on-primary-container hover:brightness-110 text-label-sm font-label-sm uppercase tracking-wider shadow-[0_0_14px_rgba(160,120,255,0.45)] transition-all" id="btn-force-refresh">
                        <span class="material-symbols-outlined text-sm">bolt</span>
                        <span>Refrescar Aura</span>
                    </button>
                </div>
            </div>

            <!-- KPIs -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-space-md">
                <div class="bg-surface-container-low p-space-md rounded-xl shadow-lg relative overflow-hidden group hover:shadow-[0_8px_24px_rgba(160,120,255,0.15)] transition-all">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary to-primary-container"></div>
                    <div class="flex items-start justify-between">
                        <div>
                            <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider block mb-1">Usuarios Cazadores Activos</span>
                            <div class="font-headline-lg text-[38px] leading-tight text-on-surface tracking-wide">
                                <span data-target="148892" id="kpi-users">0</span>
                            </div>
                        </div>
                        <div class="w-10 h-10 rounded bg-primary-container/20 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">group</span>
                        </div>
                    </div>
                    <div class="mt-space-md flex items-center justify-between pt-space-xs">
                        <div class="flex items-center text-tertiary font-label-sm text-label-sm font-bold gap-0.5">
                            <span class="material-symbols-outlined text-sm">arrow_upward</span>
                            <span>+12.4%</span>
                            <span class="text-outline font-normal ml-1">vs ciclo ant.</span>
                        </div>
                        <svg class="w-24 h-7 overflow-visible" viewbox="0 0 100 30">
                            <path class="text-primary" d="M0,24 Q15,22 30,14 T60,18 T85,6 L100,2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"></path>
                            <circle class="fill-primary" cx="100" cy="2" r="2.5"></circle>
                        </svg>
                    </div>
                </div>

                <div class="bg-surface-container-low p-space-md rounded-xl shadow-lg relative overflow-hidden group hover:shadow-[0_8px_24px_rgba(76,215,246,0.15)] transition-all">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-tertiary to-tertiary-container"></div>
                    <div class="flex items-start justify-between">
                        <div>
                            <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider block mb-1">Series &amp; Obras Totales</span>
                            <div class="font-headline-lg text-[38px] leading-tight text-on-surface tracking-wide flex items-baseline gap-1">
                                <span data-target="1480" id="kpi-series">0</span>
                                <span class="text-tertiary text-title-md font-title-md">OBRAS</span>
                            </div>
                        </div>
                        <div class="w-10 h-10 rounded bg-tertiary-container/20 flex items-center justify-center text-tertiary">
                            <span class="material-symbols-outlined">auto_stories</span>
                        </div>
                    </div>
                    <div class="mt-space-md flex items-center justify-between pt-space-xs">
                        <div class="flex items-center text-tertiary font-label-sm text-label-sm font-bold gap-0.5">
                            <span class="material-symbols-outlined text-sm">add</span>
                            <span>24 indexadas</span>
                            <span class="text-outline font-normal ml-1">esta semana</span>
                        </div>
                        <svg class="w-24 h-7 overflow-visible" viewbox="0 0 100 30">
                            <path class="text-tertiary" d="M0,20 Q25,24 45,12 T75,10 T100,4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"></path>
                            <circle class="fill-tertiary" cx="100" cy="4" r="2.5"></circle>
                        </svg>
                    </div>
                </div>

                <div class="bg-surface-container-low p-space-md rounded-xl shadow-lg relative overflow-hidden group hover:shadow-[0_8px_24px_rgba(255,178,183,0.15)] transition-all">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-secondary-container"></div>
                    <div class="flex items-start justify-between">
                        <div>
                            <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider block mb-1">Capítulos Vistos Hoy</span>
                            <div class="font-headline-lg text-[38px] leading-tight text-on-surface tracking-wide">
                                <span data-target="842105" id="kpi-streams">0</span>
                            </div>
                        </div>
                        <div class="w-10 h-10 rounded bg-secondary-container/20 flex items-center justify-center text-secondary">
                            <span class="material-symbols-outlined">play_circle</span>
                        </div>
                    </div>
                    <div class="mt-space-md flex items-center justify-between pt-space-xs">
                        <div class="flex items-center text-secondary-fixed font-label-sm text-label-sm font-bold gap-0.5">
                            <span class="material-symbols-outlined text-sm">trending_up</span>
                            <span>5.6 prom.</span>
                            <span class="text-outline font-normal ml-1">por cazador</span>
                        </div>
                        <svg class="w-24 h-7 overflow-visible" viewbox="0 0 100 30">
                            <path class="text-secondary" d="M0,26 Q20,18 40,22 T70,8 T100,5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"></path>
                            <circle class="fill-secondary" cx="100" cy="5" r="2.5"></circle>
                        </svg>
                    </div>
                </div>

                <div class="bg-surface-container-low p-space-md rounded-xl shadow-lg relative overflow-hidden group hover:shadow-[0_8px_24px_rgba(208,188,255,0.15)] transition-all">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary to-secondary"></div>
                    <div class="flex items-start justify-between">
                        <div>
                            <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider block mb-1">Ingresos Mensuales</span>
                            <div class="font-headline-lg text-[38px] leading-tight text-on-surface tracking-wide flex items-baseline gap-1">
                                <span data-target="384950" id="kpi-revenue">0</span>
                                <span class="text-primary text-title-md font-title-md">€</span>
                            </div>
                        </div>
                        <div class="w-10 h-10 rounded bg-surface-container-high flex items-center justify-center text-primary-fixed">
                            <span class="material-symbols-outlined">account_balance_wallet</span>
                        </div>
                    </div>
                    <div class="mt-space-md flex items-center justify-between pt-space-xs">
                        <div class="flex items-center text-tertiary font-label-sm text-label-sm font-bold gap-0.5">
                            <span class="material-symbols-outlined text-sm">arrow_upward</span>
                            <span>+18.2%</span>
                            <span class="text-outline font-normal ml-1">vs mes anterior</span>
                        </div>
                        <svg class="w-24 h-7 overflow-visible" viewbox="0 0 100 30">
                            <path class="text-tertiary" d="M0,25 Q30,28 50,15 T80,12 T100,2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"></path>
                            <circle class="fill-tertiary" cx="100" cy="2" r="2.5"></circle>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Gráficos -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
                <div class="lg:col-span-8 bg-surface-container-low p-space-md rounded-xl shadow-lg relative flex flex-col justify-between">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm mb-space-md">
                        <div>
                            <div class="flex items-center gap-2">
                                <h2 class="font-headline-md text-headline-md text-on-surface tracking-wider">FLUJO DE TELEMETRÍA (ÚLTIMAS 24H)</h2>
                                <span class="px-2 py-0.5 rounded bg-surface-container-highest text-tertiary font-label-sm text-[10px] animate-pulse">STREAM VIVO</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-outline">Densidad cuántica de consumo sincrónico por formato de contenido</p>
                        </div>
                        <div class="flex items-center gap-space-sm flex-wrap">
                            <div class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface"><span class="w-2.5 h-2.5 rounded-full bg-primary"></span><span>Anime</span></div>
                            <div class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface"><span class="w-2.5 h-2.5 rounded-full bg-tertiary"></span><span>Manga</span></div>
                            <div class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface"><span class="w-2.5 h-2.5 rounded-full bg-secondary"></span><span>Manhwa</span></div>
                        </div>
                    </div>
                    <div class="relative w-full h-72 sm:h-80 select-none" id="telemetry-chart-container">
                        <svg class="w-full h-full overflow-visible" id="telemetry-svg" preserveaspectratio="none" viewbox="0 0 760 260">
                            <defs>
                                <lineargradient id="anime-grad" x1="0" x2="0" y1="0" y2="1">
                                    <stop offset="0%" stop-color="#d0bcff" stop-opacity="0.35"></stop>
                                    <stop offset="100%" stop-color="#d0bcff" stop-opacity="0.0"></stop>
                                </lineargradient>
                            </defs>
                            <g class="text-outline-variant/30 stroke-current" stroke-dasharray="3,3" stroke-width="1">
                                <line x1="40" x2="750" y1="20" y2="20"></line>
                                <line x1="40" x2="750" y1="75" y2="75"></line>
                                <line x1="40" x2="750" y1="130" y2="130"></line>
                                <line x1="40" x2="750" y1="185" y2="185"></line>
                                <line x1="40" x2="750" y1="230" y2="230"></line>
                            </g>
                            <g class="font-label-sm text-[10px] fill-outline select-none">
                                <text x="5" y="24">100K</text><text x="12" y="79">75K</text>
                                <text x="12" y="134">50K</text><text x="12" y="189">25K</text>
                                <text x="22" y="234">0K</text>
                            </g>
                            <path d="M 40,230 L 40,110 Q 150,150 260,85 T 480,45 T 620,70 T 750,30 L 750,230 Z" fill="url(#anime-grad)"></path>
                            <path d="M 40,110 Q 150,150 260,85 T 480,45 T 620,70 T 750,30" fill="none" stroke="#d0bcff" stroke-linecap="round" stroke-width="2.5"></path>
                            <path d="M 40,140 Q 150,165 260,110 T 480,95 T 620,115 T 750,65" fill="none" stroke="#4cd7f6" stroke-linecap="round" stroke-width="2"></path>
                            <path d="M 40,180 Q 150,195 260,160 T 480,140 T 620,155 T 750,120" fill="none" stroke="#ffb2b7" stroke-dasharray="4,2" stroke-linecap="round" stroke-width="2"></path>
                            <g class="font-label-sm text-[10px] fill-outline select-none text-center">
                                <text x="30" y="250">00:00</text><text x="145" y="250">04:00</text>
                                <text x="265" y="250">08:00</text><text x="385" y="250">12:00</text>
                                <text x="500" y="250">16:00</text><text x="620" y="250">20:00</text>
                                <text class="fill-tertiary font-bold" x="720" y="250">AHORA</text>
                            </g>
                        </svg>
                    </div>
                </div>

                <div class="lg:col-span-4 bg-surface-container-low p-space-md rounded-xl shadow-lg flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-space-xs">
                            <h2 class="font-headline-md text-headline-md text-on-surface tracking-wider">DISTRIBUCIÓN REIRYOKU</h2>
                            <span class="material-symbols-outlined text-outline text-lg">pie_chart</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-outline">Segmentación de tiempo de inmersión por categoría</p>
                    </div>
                    <div class="relative flex items-center justify-center my-space-md">
                        <svg class="w-48 h-48 -rotate-90 transform" viewbox="0 0 100 100">
                            <circle cx="50" cy="50" fill="none" r="38" stroke="#201e29" stroke-width="12"></circle>
                            <circle cx="50" cy="50" fill="none" r="38" stroke="#d0bcff" stroke-dasharray="90.7 148.0" stroke-dashoffset="0" stroke-width="12"></circle>
                            <circle cx="50" cy="50" fill="none" r="38" stroke="#a078ff" stroke-dasharray="64.5 174.2" stroke-dashoffset="-90.7" stroke-width="12"></circle>
                            <circle cx="50" cy="50" fill="none" r="38" stroke="#4cd7f6" stroke-dasharray="50.1 188.6" stroke-dashoffset="-155.2" stroke-width="12"></circle>
                            <circle cx="50" cy="50" fill="none" r="38" stroke="#ffb2b7" stroke-dasharray="33.4 205.3" stroke-dashoffset="-205.3" stroke-width="12"></circle>
                        </svg>
                        <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none text-center">
                            <span class="font-headline-md text-[34px] leading-tight text-on-surface">100%</span>
                            <span class="font-label-sm text-[10px] text-tertiary tracking-widest uppercase">SINCRONÍA</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-space-xs font-label-sm text-label-sm">
                        <div class="p-2 rounded bg-surface-container flex items-center justify-between">
                            <div class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-primary"></span><span class="text-on-surface">Series</span></div>
                            <span class="text-primary font-bold">38%</span>
                        </div>
                        <div class="p-2 rounded bg-surface-container flex items-center justify-between">
                            <div class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-primary-container"></span><span class="text-on-surface">Películas</span></div>
                            <span class="text-primary-container font-bold">27%</span>
                        </div>
                        <div class="p-2 rounded bg-surface-container flex items-center justify-between">
                            <div class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-tertiary"></span><span class="text-on-surface">Manga</span></div>
                            <span class="text-tertiary font-bold">21%</span>
                        </div>
                        <div class="p-2 rounded bg-surface-container flex items-center justify-between">
                            <div class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-secondary"></span><span class="text-on-surface">Manhwa</span></div>
                            <span class="text-secondary font-bold">14%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Terminal + Estado del sistema -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
                <div class="lg:col-span-7 bg-surface-container-low p-space-md rounded-xl shadow-lg">
                    <div class="flex items-center justify-between mb-space-sm border-b border-surface-container-highest pb-space-xs">
                        <h3 class="font-headline-md text-headline-md text-on-surface tracking-wider">TERMINAL DE ACTIVIDAD EN TIEMPO REAL</h3>
                        <span class="font-label-sm text-[10px] text-tertiary uppercase tracking-wider font-semibold">FEED VIVO // 3000MS</span>
                    </div>
                    <div class="bg-surface-container-lowest p-space-sm rounded font-label-sm text-[12px] h-64 overflow-hidden">
                        <ul class="space-y-1.5" id="live-log-container">
                            <li class="flex items-center gap-2 text-tertiary">
                                <span class="text-outline text-[10px]">14:22:01</span>
                                <span class="font-bold text-primary">⚡ [STREAM]</span>
                                <span class="text-on-surface">Cazador <span class="text-tertiary">Kaelen#8901</span> conectó a Servidor Tokio-04</span>
                            </li>
                            <li class="flex items-center gap-2 text-secondary-fixed">
                                <span class="text-outline text-[10px]">14:21:58</span>
                                <span class="font-bold text-secondary">✨ [MANGA]</span>
                                <span class="text-on-surface">Nuevo volumen 23 indexado en <span class="text-secondary-fixed">Chainsaw Man</span></span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="lg:col-span-5 flex flex-col gap-space-sm justify-between">
                    <div class="bg-surface-container-low p-space-md rounded-xl shadow-lg flex items-center justify-between">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-12 h-12 rounded bg-tertiary/10 flex items-center justify-center text-tertiary">
                                <span class="material-symbols-outlined text-2xl">dns</span>
                            </div>
                            <div>
                                <span class="font-label-sm text-label-sm text-outline uppercase block">Estado del Servidor</span>
                                <div class="font-title-lg text-title-lg text-on-surface font-bold">ÓPTIMO (99.98%)</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-surface-container-low p-space-md rounded-xl shadow-lg flex items-center justify-between">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-12 h-12 rounded bg-primary/10 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-2xl">speed</span>
                            </div>
                            <div>
                                <span class="font-label-sm text-label-sm text-outline uppercase block">Latencia Cuántica Media</span>
                                <div class="font-title-lg text-title-lg text-on-surface font-bold">12 ms</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-surface-container-low p-space-md rounded-xl shadow-lg flex items-center justify-between">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-12 h-12 rounded bg-secondary/10 flex items-center justify-center text-secondary">
                                <span class="material-symbols-outlined text-2xl">shield_moon</span>
                            </div>
                            <div>
                                <span class="font-label-sm text-label-sm text-outline uppercase block">Tasa de Errores (7 Días)</span>
                                <div class="font-title-lg text-title-lg text-on-surface font-bold">0.001%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabla de animes -->
            <div class="bg-surface-container-low p-space-md rounded-xl shadow-xl flex flex-col gap-space-md">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm border-b border-surface-container-highest pb-space-sm">
                    <div>
                        <div class="flex items-center gap-2">
                            <h2 class="font-headline-md text-headline-md text-on-surface tracking-wider">ANIMES REGISTRADOS</h2>
                            <span class="px-2 py-0.5 rounded bg-primary-container text-on-primary-container font-label-sm text-[10px] font-bold">NEXUS DB</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-outline">Obras indexadas desde el panel de administración</p>
                    </div>
                </div>

                <div class="w-full overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                        <tr class="font-label-sm text-label-sm text-outline uppercase tracking-wider border-b border-surface-container-highest">
                            <th class="py-3 px-3">Portada</th>
                            <th class="py-3 px-3">Título</th>
                            <th class="py-3 px-3">Duración</th>
                            <th class="py-3 px-3">Géneros</th>
                            <th class="py-3 px-3">Fecha</th>
                            <th class="py-3 px-3 text-right">Acciones</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-surface-container-highest text-body-sm font-body-sm">
                        <?php
                        $animes = getAnimes();
                        if (empty($animes)): ?>
                            <tr>
                                <td colspan="6" class="py-6 px-3 text-center text-outline italic">No hay animes registrados todavía.</td>
                            </tr>
                        <?php else: foreach ($animes as $a): ?>
                            <tr class="hover:bg-surface-container transition-colors">
                                <td class="py-3 px-3">
                                    <?php if (!empty($a['portada'])): ?>
                                        <img src="<?= htmlspecialchars(str_replace(FILES_DIRECTORY, '/files', $a['portada'])) ?>"
                                             alt="portada" class="w-10 h-14 object-cover rounded shadow" />
                                    <?php else: ?>
                                        <div class="w-10 h-14 rounded bg-surface-container-high flex items-center justify-center">
                                            <span class="material-symbols-outlined text-outline">image</span>
                                        </div>
                                    <?php endif; ?>
                                </td>
                                <td class="py-3 px-3 font-title-md text-on-surface font-bold"><?= htmlspecialchars($a['titulo']) ?></td>
                                <td class="py-3 px-3 text-on-surface-variant"><?= htmlspecialchars($a['duracion']) ?> min</td>
                                <td class="py-3 px-3">
                                    <?php foreach (($a['generos'] ?? []) as $g): ?>
                                        <span class="inline-block px-2 py-0.5 rounded bg-surface-container-high text-tertiary text-[10px] font-bold uppercase mr-1"><?= htmlspecialchars($g) ?></span>
                                    <?php endforeach; ?>
                                </td>
                                <td class="py-3 px-3 text-on-surface-variant font-label-sm text-[11px]"><?= htmlspecialchars($a['fecha']) ?></td>
                                <td class="py-3 px-3 text-right">
                                    <div class="flex items-center justify-end gap-1">
                                        <button type="button"
                                                class="btn-edit-anime p-1.5 rounded hover:bg-surface-container-highest text-primary transition-colors"
                                                data-id="<?= htmlspecialchars($a['id']) ?>"
                                                data-titulo="<?= htmlspecialchars($a['titulo']) ?>"
                                                data-duracion="<?= htmlspecialchars($a['duracion']) ?>"
                                                data-descripcion="<?= htmlspecialchars($a['descripcion']) ?>"
                                                data-generos="<?= htmlspecialchars(implode(',', $a['generos'] ?? [])) ?>"
                                                title="Editar">
                                            <span class="material-symbols-outlined text-lg">edit</span>
                                        </button>
                                        <form method="POST" action="/borrar-anime" class="inline" onsubmit="return confirm('¿Borrar este anime?');">
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($a['id']) ?>" />
                                            <button type="submit" class="p-1.5 rounded hover:bg-surface-container-highest text-error transition-colors" title="Borrar">
                                                <span class="material-symbols-outlined text-lg">delete</span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div><!-- /#view-dashboard -->

        <!-- ==================== VISTA NUEVOS AÑADIDOS ==================== -->
        <div id="view-nuevos" class="hidden flex-col w-full gap-space-lg">
            <div class="bg-surface-container-low p-space-md rounded-xl shadow-xl border-l-4 border-l-primary relative overflow-hidden">
                <div class="absolute -right-8 -bottom-10 select-none pointer-events-none opacity-5 font-headline-xl text-[140px] text-on-surface">新作</div>
                <div class="flex items-center justify-between z-10 relative">
                    <div>
                        <div class="flex items-center gap-2">
                            <h2 class="font-headline-md text-headline-md text-on-surface tracking-wider">NUEVOS AÑADIDOS</h2>
                            <span class="px-2 py-0.5 rounded bg-tertiary-container text-on-tertiary-container font-label-sm text-[10px] font-bold">FEED RECIENTE</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-outline">Últimas obras indexadas en el Nexus</p>
                    </div>
                    <button type="button" id="btn-volver-dashboard" class="flex items-center gap-1.5 px-3 py-1.5 rounded bg-surface-container-high hover:bg-surface-container-highest text-on-surface text-label-sm font-label-sm uppercase tracking-wider">
                        <span class="material-symbols-outlined text-sm text-tertiary">arrow_back</span>
                        <span>Volver</span>
                    </button>
                </div>
            </div>

            <?php
            $animesNew = getAnimes();
            usort($animesNew, fn($a, $b) => strcmp($b['fecha'], $a['fecha']));
            ?>

            <?php if (empty($animesNew)): ?>
                <div class="bg-surface-container-low p-space-xl rounded-xl shadow-lg text-center">
                    <span class="material-symbols-outlined text-outline text-6xl">movie</span>
                    <p class="font-title-md text-title-md text-outline mt-4">Aún no hay animes añadidos.</p>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-space-md">
                    <?php foreach ($animesNew as $a): ?>
                        <div class="bg-surface-container-low rounded-xl shadow-lg overflow-hidden group hover:shadow-[0_8px_24px_rgba(160,120,255,0.25)] transition-all flex flex-col">
                            <div class="relative aspect-[3/4] overflow-hidden bg-surface-container-lowest">
                                <?php if (!empty($a['portada']) && file_exists($a['portada'])): ?>
                                    <img src="<?= htmlspecialchars(str_replace(FILES_DIRECTORY, '/files', $a['portada'])) ?>"
                                         alt="<?= htmlspecialchars($a['titulo']) ?>"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                                <?php else: ?>
                                    <div class="w-full h-full flex items-center justify-center">
                                        <span class="material-symbols-outlined text-outline text-6xl">image</span>
                                    </div>
                                <?php endif; ?>

                                <?php
                                $dias = (time() - strtotime($a['fecha'])) / 86400;
                                if ($dias < 7):
                                    ?>
                                    <span class="absolute top-2 left-2 px-2 py-0.5 rounded bg-tertiary text-on-tertiary font-label-sm text-[10px] font-bold tracking-wider shadow-lg">NUEVO</span>
                                <?php endif; ?>

                                <span class="absolute bottom-2 right-2 px-2 py-0.5 rounded bg-black/70 text-on-surface font-label-sm text-[10px] font-bold backdrop-blur-sm">
                                <?= htmlspecialchars($a['duracion']) ?> min
                            </span>
                            </div>

                            <div class="p-space-md flex flex-col gap-2 flex-1">
                                <h3 class="font-headline-md text-headline-md text-on-surface tracking-wide leading-tight line-clamp-2">
                                    <?= htmlspecialchars($a['titulo']) ?>
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3">
                                    <?= htmlspecialchars($a['descripcion'] ?: 'Sin descripción disponible.') ?>
                                </p>
                                <div class="flex flex-wrap gap-1 mt-auto pt-2">
                                    <?php foreach (($a['generos'] ?? []) as $g): ?>
                                        <span class="px-2 py-0.5 rounded bg-surface-container-high text-tertiary font-label-sm text-[10px] font-bold uppercase">
                                        <?= htmlspecialchars($g) ?>
                                    </span>
                                    <?php endforeach; ?>
                                </div>
                                <div class="text-outline font-label-sm text-[10px] pt-2 border-t border-outline-variant/30 flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[12px]">calendar_today</span>
                                    <?= htmlspecialchars($a['fecha']) ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div><!-- /#view-nuevos -->

        <!-- Modal Añadir Anime -->
        <div id="modal-add-anime" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/70 backdrop-blur-sm p-4">
            <div class="bg-surface-container-low rounded-xl shadow-2xl border-l-4 border-l-primary w-full max-w-2xl max-h-[90vh] overflow-y-auto p-space-lg relative">
                <button id="btn-close-add-anime" class="absolute top-4 right-4 p-2 rounded-full bg-surface-container-high hover:bg-surface-container-highest text-on-surface">
                    <span class="material-symbols-outlined">close</span>
                </button>

                <h2 class="font-headline-lg text-headline-lg text-on-surface tracking-wide mb-space-md">AÑADIR ANIME / SERIE</h2>

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
                        <textarea name="descripcion" rows="4"
                                  class="w-full bg-surface-container-lowest text-on-surface px-3 py-2 rounded focus:outline-none focus:ring-1 focus:ring-tertiary"></textarea>
                    </div>
                    <div>
                        <label class="font-label-sm text-label-sm text-outline uppercase block mb-1">Portada</label>
                        <input type="file" name="portada" accept="image/*"
                               class="w-full bg-surface-container-lowest text-on-surface px-3 py-2 rounded" />
                    </div>
                    <div>
                        <label class="font-label-sm text-label-sm text-outline uppercase block mb-1">Géneros</label>
                        <label class="inline-flex items-center gap-2 mr-4"><input type="checkbox" name="genero[]" value="comedia"> Comedia</label>
                        <label class="inline-flex items-center gap-2 mr-4"><input type="checkbox" name="genero[]" value="drama"> Drama</label>
                        <label class="inline-flex items-center gap-2"><input type="checkbox" name="genero[]" value="terror"> Terror</label>
                    </div>
                    <div class="flex justify-end gap-space-sm pt-space-md border-t border-outline-variant/40">
                        <button type="button" id="btn-cancel-add-anime" class="px-4 py-2 rounded bg-surface-container-high text-on-surface font-label-md uppercase">Cancelar</button>
                        <button type="submit" class="px-4 py-2 rounded bg-primary-container text-on-primary-container font-label-md uppercase">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Editar Anime -->
        <div id="modal-edit-anime" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/70 backdrop-blur-sm p-4">
            <div class="bg-surface-container-low rounded-xl shadow-2xl border-l-4 border-l-tertiary w-full max-w-2xl max-h-[90vh] overflow-y-auto p-space-lg relative">
                <button id="btn-close-edit-anime" class="absolute top-4 right-4 p-2 rounded-full bg-surface-container-high hover:bg-surface-container-highest text-on-surface">
                    <span class="material-symbols-outlined">close</span>
                </button>

                <h2 class="font-headline-lg text-headline-lg text-on-surface tracking-wide mb-space-md">EDITAR ANIME / SERIE</h2>

                <form method="POST" action="/editar-anime" enctype="multipart/form-data" class="flex flex-col gap-space-md">
                    <input type="hidden" name="id" id="edit-id" />

                    <div>
                        <label class="font-label-sm text-label-sm text-outline uppercase block mb-1">Título</label>
                        <input type="text" name="titulo" id="edit-titulo" required
                               class="w-full bg-surface-container-lowest text-on-surface px-3 py-2 rounded focus:outline-none focus:ring-1 focus:ring-tertiary" />
                    </div>
                    <div>
                        <label class="font-label-sm text-label-sm text-outline uppercase block mb-1">Duración</label>
                        <input type="number" name="duracion" id="edit-duracion"
                               class="w-full bg-surface-container-lowest text-on-surface px-3 py-2 rounded focus:outline-none focus:ring-1 focus:ring-tertiary" />
                    </div>
                    <div>
                        <label class="font-label-sm text-label-sm text-outline uppercase block mb-1">Descripción</label>
                        <textarea name="descripcion" id="edit-descripcion" rows="4"
                                  class="w-full bg-surface-container-lowest text-on-surface px-3 py-2 rounded focus:outline-none focus:ring-1 focus:ring-tertiary"></textarea>
                    </div>
                    <div>
                        <label class="font-label-sm text-label-sm text-outline uppercase block mb-1">Portada (dejar vacío para mantener la actual)</label>
                        <input type="file" name="portada" accept="image/*"
                               class="w-full bg-surface-container-lowest text-on-surface px-3 py-2 rounded" />
                    </div>
                    <div>
                        <label class="font-label-sm text-label-sm text-outline uppercase block mb-1">Géneros</label>
                        <label class="inline-flex items-center gap-2 mr-4"><input type="checkbox" name="genero[]" value="comedia" class="edit-genero"> Comedia</label>
                        <label class="inline-flex items-center gap-2 mr-4"><input type="checkbox" name="genero[]" value="drama"   class="edit-genero"> Drama</label>
                        <label class="inline-flex items-center gap-2"><input type="checkbox" name="genero[]" value="terror"  class="edit-genero"> Terror</label>
                    </div>
                    <div class="flex justify-end gap-space-sm pt-space-md border-t border-outline-variant/40">
                        <button type="button" id="btn-cancel-edit-anime" class="px-4 py-2 rounded bg-surface-container-high text-on-surface font-label-md uppercase">Cancelar</button>
                        <button type="submit" class="px-4 py-2 rounded bg-tertiary-container text-on-tertiary-container font-label-md uppercase">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            // ===== Contadores KPI =====
            (function initAdminDashboard() {
                function animateCountUp(el, duration = 1600) {
                    const target = parseInt(el.getAttribute('data-target'), 10);
                    if (isNaN(target)) return;
                    const startTime = performance.now();
                    function update(currentTime) {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        const easeOut = 1 - Math.pow(1 - progress, 3);
                        const currentVal = Math.floor(easeOut * target);
                        el.textContent = currentVal.toLocaleString('es-ES');
                        if (progress < 1) requestAnimationFrame(update);
                        else el.textContent = target.toLocaleString('es-ES');
                    }
                    requestAnimationFrame(update);
                }
                ['kpi-users', 'kpi-series', 'kpi-streams', 'kpi-revenue'].forEach(id => {
                    const elem = document.getElementById(id);
                    if (elem) animateCountUp(elem);
                });
                setInterval(() => {
                    const usersEl = document.getElementById('kpi-users');
                    if (usersEl) {
                        const base = parseInt(usersEl.getAttribute('data-target'), 10);
                        const delta = Math.floor(Math.random() * 9) - 4;
                        usersEl.setAttribute('data-target', base + delta);
                        usersEl.textContent = (base + delta).toLocaleString('es-ES');
                    }
                    const streamsEl = document.getElementById('kpi-streams');
                    if (streamsEl) {
                        const baseS = parseInt(streamsEl.getAttribute('data-target'), 10);
                        const deltaS = Math.floor(Math.random() * 25) + 3;
                        streamsEl.setAttribute('data-target', baseS + deltaS);
                        streamsEl.textContent = (baseS + deltaS).toLocaleString('es-ES');
                    }
                }, 4000);
            })();

            // ===== Modal Añadir =====
            (function initModalAddAnime() {
                const modal = document.getElementById('modal-add-anime');
                const open  = document.getElementById('btn-open-add-anime');
                const close = document.getElementById('btn-close-add-anime');
                const cancel= document.getElementById('btn-cancel-add-anime');
                if (open && modal) open.addEventListener('click', (e) => {
                    e.preventDefault();
                    modal.classList.remove('hidden'); modal.classList.add('flex');
                });
                [close, cancel].forEach(b => b && b.addEventListener('click', () => {
                    modal.classList.add('hidden'); modal.classList.remove('flex');
                }));
                if (modal) modal.addEventListener('click', (e) => {
                    if (e.target === modal) { modal.classList.add('hidden'); modal.classList.remove('flex'); }
                });
            })();

            // ===== Modal Editar =====
            (function initModalEditAnime() {
                const modal = document.getElementById('modal-edit-anime');
                const close = document.getElementById('btn-close-edit-anime');
                const cancel= document.getElementById('btn-cancel-edit-anime');

                document.querySelectorAll('.btn-edit-anime').forEach(btn => {
                    btn.addEventListener('click', () => {
                        document.getElementById('edit-id').value          = btn.dataset.id;
                        document.getElementById('edit-titulo').value      = btn.dataset.titulo;
                        document.getElementById('edit-duracion').value    = btn.dataset.duracion;
                        document.getElementById('edit-descripcion').value = btn.dataset.descripcion;

                        const generos = (btn.dataset.generos || '').split(',').filter(Boolean);
                        document.querySelectorAll('.edit-genero').forEach(cb => {
                            cb.checked = generos.includes(cb.value);
                        });

                        modal.classList.remove('hidden'); modal.classList.add('flex');
                    });
                });

                [close, cancel].forEach(b => b && b.addEventListener('click', () => {
                    modal.classList.add('hidden'); modal.classList.remove('flex');
                }));
                if (modal) modal.addEventListener('click', (e) => {
                    if (e.target === modal) { modal.classList.add('hidden'); modal.classList.remove('flex'); }
                });
            })();

            // ===== Cambio de vista: Dashboard <-> Nuevos Añadidos =====
            (function initViewSwitcher() {
                const viewDash   = document.getElementById('view-dashboard');
                const viewNuevos = document.getElementById('view-nuevos');
                const btnNuevos  = document.getElementById('btn-view-nuevos');
                const btnVolver  = document.getElementById('btn-volver-dashboard');

                if (btnNuevos && viewNuevos && viewDash) {
                    btnNuevos.addEventListener('click', (e) => {
                        e.preventDefault();
                        viewDash.classList.add('hidden');
                        viewNuevos.classList.remove('hidden');
                        viewNuevos.classList.add('flex');
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    });
                }

                if (btnVolver && viewNuevos && viewDash) {
                    btnVolver.addEventListener('click', () => {
                        viewNuevos.classList.add('hidden');
                        viewNuevos.classList.remove('flex');
                        viewDash.classList.remove('hidden');
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    });
                }
            })();
        </script>

    </main>

<?php include "app/Views/backend/new_template/backend.footer.php"; ?>