<?php
// frontend.buttons.php
// Botones de acción del hero
?>
<!-- ===== BOTONES DE ACCIÓN + TELEMETRÍA ===== -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-lg pt-space-xs">

    <div class="flex flex-wrap items-center gap-space-md">

        <!-- Botón Reproducir -->
        <button class="px-space-lg py-3 rounded bg-primary text-on-primary font-label-lg text-label-lg tracking-wider uppercase flex items-center gap-space-xs shadow-[0_0_24px_rgba(160,120,255,0.45)] hover:shadow-[0_0_32px_rgba(76,215,246,0.65)] hover:bg-primary-fixed transition-all group"
                id="hero-play-btn"
                onclick="window.location.href='/serie'">
            <span class="material-symbols-outlined text-2xl group-hover:scale-110 transition-transform" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
            <span>Reproducir Ep. 1</span>
        </button>

        <!-- Botón Mi Lista (toggle con localStorage) -->
        <button class="px-space-md py-3 rounded bg-surface-container-high/90 backdrop-blur-md text-on-surface font-label-lg text-label-lg uppercase tracking-wider flex items-center gap-space-xs shadow-md hover:bg-surface-container-highest transition-all"
                id="hero-list-btn"
                onclick="toggleMyList(this)">
            <span class="material-symbols-outlined text-xl text-secondary" id="hero-list-icon">bookmark_add</span>
            <span id="hero-list-label">Mi Lista</span>
        </button>

        <!-- Botón Detalles -->
        <button class="px-space-md py-3 rounded bg-surface-container-lowest/80 backdrop-blur-md text-outline hover:text-on-surface font-label-lg text-label-lg uppercase tracking-wider flex items-center gap-space-xs shadow-sm transition-colors"
                onclick="openModalDetails()">
            <span class="material-symbols-outlined text-xl">info</span>
            <span>Detalles</span>
        </button>
    </div>

    <!-- Telemetría live -->
    <div class="flex items-center gap-space-md p-space-sm rounded bg-surface-container-low/70 backdrop-blur-xl shadow-lg border-l-2 border-tertiary">
        <div class="flex flex-col">
            <div class="flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
                <span class="font-label-sm text-label-sm text-tertiary uppercase font-bold tracking-widest">SERVIDOR TOKIO-NEO #04</span>
            </div>
            <span class="font-body-sm text-body-sm text-outline">Latencia: 0.8ms • Reiatsu Astral: 99.8%</span>
        </div>
        <div class="w-12 h-8 flex items-end gap-0.5">
            <div class="w-1.5 h-3 bg-primary rounded-t-sm"></div>
            <div class="w-1.5 h-6 bg-tertiary rounded-t-sm animate-pulse"></div>
            <div class="w-1.5 h-8 bg-secondary rounded-t-sm"></div>
            <div class="w-1.5 h-5 bg-primary-container rounded-t-sm"></div>
        </div>
    </div>
</div>

<!-- ===== MODAL DE DETALLES DEL HERO ===== -->
<div class="fixed inset-0 z-50 bg-surface-container-lowest/80 backdrop-blur-md opacity-0 pointer-events-none transition-opacity duration-300 flex items-center justify-center p-4"
     id="details-modal">
    <div class="bg-surface-container-low max-w-2xl w-full p-space-lg rounded-2xl shadow-[0_0_50px_rgba(160,120,255,0.2)] flex flex-col gap-space-md border-t-2 border-primary">
        <div class="flex items-start justify-between">
            <div>
                <span class="px-2 py-0.5 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm uppercase">FICHA TÉCNICA ASTRAL</span>
                <h3 class="font-headline-lg text-headline-lg text-primary mt-1">SOLO LEVELING: ARISE</h3>
            </div>
            <button class="p-1 rounded-full bg-surface-container-high text-on-surface hover:text-error transition-colors" onclick="closeModalDetails()">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <p class="font-body-md text-body-md text-on-surface-variant">
            Producido por A-1 Pictures en colaboración con D&amp;C Media. Optimizado para visualización con alto rango dinámico (HDR10+) y perfiles de sonido envolvente Dolby Atmos canal 7.1.
        </p>
        <div class="flex flex-col gap-space-xs pt-space-xs">
            <div>
                <div class="flex justify-between font-label-sm text-label-sm uppercase text-outline mb-1">
                    <span>Presión de Reiatsu / Maná</span>
                    <span class="text-primary font-bold">98,900 / 100,000 MP</span>
                </div>
                <div class="w-full bg-surface-container-highest h-2 rounded-full overflow-hidden">
                    <div class="bg-primary h-full rounded-full shadow-[0_0_8px_#d0bcff]" style="width: 98%;"></div>
                </div>
            </div>
            <div>
                <div class="flex justify-between font-label-sm text-label-sm uppercase text-outline mb-1">
                    <span>Tasa de Animación Clímax (Sakuga)</span>
                    <span class="text-tertiary font-bold">120 FPS REALES</span>
                </div>
                <div class="w-full bg-surface-container-highest h-2 rounded-full overflow-hidden">
                    <div class="bg-tertiary h-full rounded-full shadow-[0_0_8px_#4cd7f6]" style="width: 95%;"></div>
                </div>
            </div>
            <div>
                <div class="flex justify-between font-label-sm text-label-sm uppercase text-outline mb-1">
                    <span>Índice de Amenaza Mundial</span>
                    <span class="text-secondary font-bold">CALAMITY CLASS (GLOBAL)</span>
                </div>
                <div class="w-full bg-surface-container-highest h-2 rounded-full overflow-hidden">
                    <div class="bg-secondary h-full rounded-full shadow-[0_0_8px_#ffb2b7]" style="width: 100%;"></div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-end gap-space-sm pt-space-sm">
            <button class="px-4 py-2 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm uppercase" onclick="closeModalDetails()">Cerrar</button>
            <button class="px-5 py-2 rounded bg-primary text-on-primary font-label-sm text-label-sm uppercase shadow-[0_0_15px_#a078ff]" onclick="closeModalDetails()">Comenzar Streaming</button>
        </div>
    </div>
</div>

<script>
    // ===== Toggle Mi Lista con localStorage =====
    window.toggleMyList = function(btn) {
        const label = document.getElementById('hero-list-label');
        const icon  = document.getElementById('hero-list-icon');
        const key   = 'auranexus_saved_solo_leveling';
        const isSaved = localStorage.getItem(key) === 'true';

        if (isSaved) {
            localStorage.setItem(key, 'false');
            label.textContent = 'Mi Lista';
            icon.textContent  = 'bookmark_add';
            btn.classList.remove('bg-secondary-container', 'text-on-secondary-container');
            btn.classList.add('bg-surface-container-high/90', 'text-on-surface');
        } else {
            localStorage.setItem(key, 'true');
            label.textContent = 'Guardado';
            icon.textContent  = 'bookmark_added';
            btn.classList.remove('bg-surface-container-high/90', 'text-on-surface');
            btn.classList.add('bg-secondary-container', 'text-on-secondary-container');
        }
    };

    // Inicializar estado
    (function initHeroState() {
        if (localStorage.getItem('auranexus_saved_solo_leveling') === 'true') {
            const btn   = document.getElementById('hero-list-btn');
            const label = document.getElementById('hero-list-label');
            const icon  = document.getElementById('hero-list-icon');
            if (btn && label && icon) {
                label.textContent = 'Guardado';
                icon.textContent  = 'bookmark_added';
                btn.classList.remove('bg-surface-container-high/90', 'text-on-surface');
                btn.classList.add('bg-secondary-container', 'text-on-secondary-container');
            }
        }
    })();

    // ===== Modal de detalles =====
    window.openModalDetails = function() {
        const modal = document.getElementById('details-modal');
        if (modal) {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100', 'pointer-events-auto');
        }
    };
    window.closeModalDetails = function() {
        const modal = document.getElementById('details-modal');
        if (modal) {
            modal.classList.add('opacity-0', 'pointer-events-none');
            modal.classList.remove('opacity-100', 'pointer-events-auto');
        }
    };
</script>