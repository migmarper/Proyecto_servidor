<?php
// frontend.videogames.php
// Filas: TOP 10 + SIMULCAST + PELÍCULAS
?>

<!-- ===== ROW: TOP 10 ANIMES ===== -->
<section class="flex flex-col gap-space-md pt-space-md">
    <div class="flex items-end justify-between">
        <div class="flex flex-col">
            <span class="font-label-sm text-label-sm text-tertiary uppercase tracking-widest">METRICA DE AFINIDAD GLOBAL</span>
            <h2 class="font-headline-lg text-headline-lg text-on-surface uppercase tracking-wide flex items-center gap-space-xs">
                TOP 10 ANIMES CON MAYOR AURA
                <span class="px-space-xs py-0.5 text-[10px] rounded bg-secondary-container text-on-secondary font-label-sm">HOY</span>
            </h2>
        </div>
        <span class="font-label-sm text-label-sm text-on-surface-variant">ACTUALIZADO HACE 8 MIN</span>
    </div>

    <!-- Aquí van las tarjetas del TOP 10 -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-space-lg">
        <!-- Pega aquí las 5 tarjetas del TOP 10 que tenías en el HTML original -->
    </div>
</section>

<!-- ===== ROW: SIMULCAST ===== -->
<section class="flex flex-col gap-space-md pt-space-md">
    <div class="flex items-center justify-between">
        <div class="flex flex-col">
            <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-secondary animate-ping"></span>
                <span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-bold">TOKIO EN VIVO // SIMULCAST FEED</span>
            </div>
            <h2 class="font-headline-lg text-headline-lg text-on-surface uppercase tracking-wide">
                ESTRENOS SIMULCAST // TRANSMISIÓN TOKIO - DIRECTO
            </h2>
        </div>
    </div>

    <!-- Aquí van las tarjetas del Simulcast -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
        <!-- Pega aquí las 3 tarjetas del Simulcast -->
    </div>
</section>

<!-- ===== ROW: PELÍCULAS ===== -->
<section class="flex flex-col gap-space-md pt-space-md">
    <div class="flex items-end justify-between">
        <div class="flex flex-col">
            <span class="font-label-sm text-label-sm text-primary uppercase tracking-widest">LARGOMETRAJES DE IMPACTO</span>
            <h2 class="font-headline-lg text-headline-lg text-on-surface uppercase tracking-wide">
                PELÍCULAS ESPIRITUALES // OVAS &amp; FORMATO IMAX
            </h2>
        </div>
        <a class="font-label-md text-label-md text-tertiary hover:underline uppercase tracking-wider flex items-center gap-1" href="/peliculas">
            EXPLORAR ARCHIVO IMAX <span class="material-symbols-outlined text-sm">arrow_forward</span>
        </a>
    </div>

    <!-- Aquí van las tarjetas de películas -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
        <!-- Pega aquí las 4 tarjetas de películas -->
    </div>
</section>