<?php
// frontend.watching.php
// Fila "Continuar viendo" con barras de progreso
$watching = [
        [
                'tag' => 'SPECIAL GRADE', 'tagColor' => 'secondary',
                'ep' => 'T3: E14 • Faltan 6 min',
                'titulo' => 'Jujutsu Kaisen: Shinjuku Incursion',
                'sub' => 'Maldición Ilimitada',
                'prog' => 72, 'color' => 'from-primary to-secondary', 'glow' => '#ffb2b7',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBLx1SU38D1w_JFpDQK0zt1uR2TaAWHQdNn5nPE-WVT-lFNoOhvYP4CW0lULPQE-JIBTgDgJp8NK59MhbzxLzgEUXGEuaWjeAafpRbF2qAWLuDEMJTKfUj5PrHIeLzFf1DO2SEYzWXmq7spx2lrJeCLjesHveU85LRPT81D02jak4UwJyWGJItxDDcC7Oc4AlKv5h7LbyxCjyyAjxvTQLFvlc4Mx8hYo5PBxDler7ILiXwCyLgoh0L0'
        ],
        [
                'tag' => 'BANKAI TIER', 'tagColor' => 'tertiary',
                'ep' => 'T2: E21 • Faltan 14 min',
                'titulo' => 'Bleach: Sennen Kessen-hen (Part 3)',
                'sub' => 'Vortex Espiritual',
                'prog' => 38, 'color' => 'from-tertiary to-primary', 'glow' => '#4cd7f6',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBYsd99lTVvZfErU1DV6LkqMhmoz1iF3kgdDi-Nio8PNUOSOIgjVS-h6lYZ8w2HvzygTedYO0QM6znkl8d9E1GlNVmFb2Y2JH91fIPPoQMW55Cof8TXqWnwXOk0gpDttD6aQMJizeIHPGWM1vMOod2Ugw1yFnd6_Ib7NQRVzkNQ4U1_YqwULztIJQaidlsRP82cWCyNwarpFUxWw9Iahhcvbr-qzGhRmlckp-ZxG8eDnTex6FohnrCZ'
        ],
        [
                'tag' => 'HASHIRA LEVEL', 'tagColor' => 'primary',
                'ep' => 'T4: E08 • Faltan 2 min',
                'titulo' => 'Kimetsu no Yaiba: Hashira Training',
                'sub' => 'Castillo Infinito',
                'prog' => 89, 'color' => 'from-primary-container to-secondary', 'glow' => '#d0bcff',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCaBuF1G8mvnJqZHZZR3J7qdcqQhOu6s-lSWhm7FsJuCC4RF2Da4jgRdJyA9PkU7tsR6ayouB8eY2ciLHyME6iWybAjRrOIaZRoed_DfIWm5TWLvcJ-dOqbyaTTe0ulQmNOWAM_xhtJ3_BoOdWQzXRc5-SB8ne9UND6Wm7XpzBWbeDhQrDTpbFIEsaEVwPVeHWbpfdRsspqP7a1I_stOkpBrQ1IpdssCA3w3eHM2XA8AEUHcVWcVylJ'
        ],
        [
                'tag' => 'CHAOS HYBRID', 'tagColor' => 'secondary',
                'ep' => 'Película • Faltan 85 min',
                'titulo' => 'Chainsaw Man: Arco de Reze',
                'sub' => 'Demonio Bomba',
                'prog' => 15, 'color' => 'from-secondary-container to-secondary', 'glow' => '#ffb2b7',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAp_q76dWie-7plwormrEuB-Wq9G-5_rqaDYgxmTKY6qvHiz3xsY6hagI-8V_VmrYMHQG_4p7iwUtIVTf_ZvymVEFOKMeYP4f2pXwwktN3RAXtF4nBHnZhxnsMMczUV5pNO2wjjlZtyA7uLdsAAWo2mr2pHI2rcDXCTit6Up1jBwolLXmsnE8LWzEnoCVp6qkxgXWf748B6GuKmXwoMYiSamNGQ34jmhcXEvkTR87wVEfX-ncjzFlFq'
        ],
];
?>
<!-- ===== FILA: CONTINUAR VIENDO ===== -->
<section class="flex flex-col gap-space-sm">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-space-xs">
            <span class="w-2.5 h-6 bg-primary rounded-sm shadow-[0_0_10px_#d0bcff]"></span>
            <h2 class="font-headline-lg text-headline-lg text-on-surface uppercase tracking-wide">Continuar Viendo</h2>
            <span class="text-tertiary font-label-sm text-label-sm ml-2 bg-surface-container-high px-2 py-0.5 rounded"><?= count($watching) ?> EN COLA</span>
        </div>
        <div class="flex items-center gap-1">
            <button class="p-1 rounded bg-surface-container-high text-on-surface hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-lg">chevron_left</span>
            </button>
            <button class="p-1 rounded bg-surface-container-high text-on-surface hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-lg">chevron_right</span>
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
        <?php foreach ($watching as $w): ?>
            <div class="group relative rounded-xl bg-surface-container-low overflow-hidden shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(244,63,94,0.25)] flex flex-col">
                <div class="relative w-full h-44 overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                         alt="<?= htmlspecialchars($w['titulo']) ?>"
                         src="<?= $w['img'] ?>" />
                    <div class="absolute inset-0 bg-gradient-to-t from-surface-container-low via-transparent to-transparent"></div>

                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-container-lowest/40 backdrop-blur-xs">
                        <div class="w-12 h-12 rounded-full bg-<?= $w['tagColor'] ?> flex items-center justify-center text-on-<?= $w['tagColor'] ?> shadow-[0_0_16px_<?= $w['glow'] ?>] transform scale-75 group-hover:scale-100 transition-transform">
                            <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                        </div>
                    </div>

                    <span class="absolute top-2 left-2 px-2 py-0.5 rounded bg-surface-container-lowest/80 text-<?= $w['tagColor'] ?> font-label-sm text-label-sm font-bold">
                        <?= $w['tag'] ?>
                    </span>
                </div>

                <div class="w-full bg-surface-container-highest/50 h-1 relative">
                    <div class="h-full bg-gradient-to-r <?= $w['color'] ?> rounded-r-full shadow-[0_0_8px_<?= $w['glow'] ?>]" style="width: <?= $w['prog'] ?>%;"></div>
                </div>

                <div class="p-space-sm flex flex-col justify-between flex-grow">
                    <div>
                        <p class="font-label-sm text-label-sm text-outline uppercase tracking-wider"><?= $w['ep'] ?></p>
                        <h3 class="font-title-md text-title-md text-on-surface truncate group-hover:text-primary transition-colors">
                            <?= htmlspecialchars($w['titulo']) ?>
                        </h3>
                    </div>
                    <div class="flex items-center justify-between pt-space-xs text-on-surface-variant font-body-sm text-body-sm">
                        <span class="text-tertiary"><?= $w['sub'] ?></span>
                        <span class="material-symbols-outlined text-base">fullscreen</span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>