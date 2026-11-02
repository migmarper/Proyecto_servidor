<?php
// frontend.banner.php
// Hero cinematográfico del home
?>
<!-- ===== HERO BANNER CINEMÁTICO ===== -->
<section class="relative w-full -mt-20 pt-24 min-h-[92vh] flex items-center overflow-hidden">

    <!-- Imagen de fondo + scrims -->
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover object-center filter brightness-[0.78] contrast-125 scale-105 transition-transform duration-1000"
             alt="Solo Leveling Hero"
             src="https://lh3.googleusercontent.com/aida-public/AB6AXuDaiPgVgtvbP78xfE1Qs2RR64MyNW-hrSewp8ngBKbkRf2Y8hBwHJJawz_YWWN4M98E2Qplj883TF6gv_VCpZy48n13EE8C3c11zXsjRcNk08qWMTrNQBU9LGVd733aZa4UCNBE1pLSQt8ouaqHiIyI_W_eY8AqKWrRW_xvFhQ8wBhK5nAxFHuS2BMQhl8twgL8K8GxsqRFGAjLlec0lNLY0xu3lFOrZSGNqMDz-4_TXTZuCFXAJJm5" />
        <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/60 to-surface/30"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/70 to-transparent"></div>
    </div>

    <!-- Kanji watermark -->
    <div class="absolute right-6 top-1/4 select-none pointer-events-none opacity-5 font-headline-xl text-[240px] leading-none text-tertiary z-0">
        霊圧
    </div>

    <!-- Contenido del hero -->
    <div class="relative z-10 w-full px-gutter-lg py-space-xl flex flex-col justify-end max-w-7xl">

        <!-- Badges -->
        <div class="flex flex-wrap items-center gap-space-sm mb-space-md">
            <span class="px-2.5 py-1 rounded bg-secondary-container/90 text-on-secondary-container font-label-sm text-label-sm tracking-widest uppercase shadow-[0_0_12px_rgba(244,63,94,0.4)] flex items-center gap-1.5">
                <span class="w-1.5 h-1.5 rounded-full bg-secondary animate-ping"></span>
                ORIGINAL AURAVERSE
            </span>
            <span class="px-2.5 py-1 rounded bg-surface-container-high/80 backdrop-blur-md text-tertiary font-label-sm text-label-sm uppercase tracking-wider shadow-sm">
                4K UHD 120FPS
            </span>
            <span class="px-2.5 py-1 rounded bg-surface-container-high/80 backdrop-blur-md text-primary font-label-sm text-label-sm uppercase tracking-wider">
                DOLBY ATMOS 7.1
            </span>
            <span class="px-2 py-0.5 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm font-bold tracking-widest">
                S-RANK MONARCH
            </span>
            <span class="px-2 py-0.5 rounded bg-surface-container-lowest text-outline font-label-sm text-label-sm uppercase">
                TEMPORADA 2
            </span>
        </div>

        <!-- Títulos -->
        <div class="mb-space-md max-w-3xl">
            <div class="flex items-center gap-space-xs font-label-md text-label-md uppercase tracking-[0.25em] text-tertiary mb-space-xs">
                <span>神・SHADOW MONARCH DOMAIN</span>
                <span class="text-outline">/</span>
                <span class="text-secondary font-bold">EPISODIO 24 EN ESTRENO</span>
            </div>
            <h1 class="font-display-hero text-display-hero text-on-surface uppercase tracking-wide leading-none drop-shadow-[0_8px_24px_rgba(0,0,0,0.8)]">
                SOLO LEVELING: ARISE
            </h1>
            <p class="font-headline-lg text-headline-lg text-primary-fixed-dim uppercase tracking-wider -mt-1 drop-shadow-md">
                SHADOW MONARCH REAWAKENING
            </p>
        </div>

        <!-- Sinopsis -->
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mb-space-lg leading-relaxed drop-shadow">
            Tras quebrar los límites del Sistema de Doble Calabozo, Sung Jin-woo reclama el trono absoluto de las sombras. Con el despertar del dragón astral Beru y la invasión de los Monarcas Supremos a Seúl, la balanza de la aniquilación universal se redefine en 120 cuadros de pura devastación.
        </p>

        <!-- Botones -->
        <?php include __DIR__ . '/frontend.buttons.php'; ?>

    </div>
</section>