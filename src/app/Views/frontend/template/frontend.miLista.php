<?php
$title = 'Mi Lista | AuraVerse Nexus';
$shellType = 'web_standard';
include __DIR__ . '/frontend.header.php';
?>

    <div class="flex flex-col w-full px-margin-sm md:px-margin lg:px-margin-lg py-space-xl gap-space-lg">
        <div class="flex flex-col gap-space-xs">
            <span class="font-label-sm text-label-sm text-tertiary uppercase tracking-widest">GUARDADOS POR TI</span>
            <h1 class="font-headline-xl text-headline-xl text-on-surface uppercase tracking-wide">MI LISTA // GUARDADOS</h1>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-space-md">
            <?php for ($i = 1; $i <= 8; $i++): ?>
                <div class="rounded-xl overflow-hidden bg-surface-container-low hover:bg-surface-container transition-all shadow-md flex flex-col">
                    <div class="relative aspect-[3/4] bg-surface-container-highest flex items-center justify-center">
                        <span class="material-symbols-outlined text-6xl text-outline opacity-30">bookmark</span>
                    </div>
                    <div class="p-space-sm flex flex-col gap-1">
                        <span class="font-title-md text-title-md text-on-surface">Título guardado #<?= $i ?></span>
                        <span class="font-label-sm text-label-sm text-outline">EP. 12 / SSS-RANK</span>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

<?php include __DIR__ . '/frontend.endmain.php'; ?>