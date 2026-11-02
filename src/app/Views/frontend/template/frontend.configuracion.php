<?php
$title = 'Configuración | AuraVerse Nexus';
$shellType = 'web_standard';
include __DIR__ . '/frontend.header.php';
?>

    <div class="flex flex-col w-full px-margin-sm md:px-margin lg:px-margin-lg py-space-xl gap-space-lg max-w-4xl mx-auto">
        <div class="flex flex-col gap-space-xs">
            <span class="font-label-sm text-label-sm text-primary uppercase tracking-widest">AJUSTES DE CUENTA</span>
            <h1 class="font-headline-xl text-headline-xl text-on-surface uppercase tracking-wide">CONFIGURACIÓN</h1>
        </div>

        <section class="p-space-lg rounded-xl bg-surface-container-low shadow-md flex flex-col gap-space-md">
            <h2 class="font-headline-md text-headline-md text-on-surface uppercase">Cuenta</h2>
            <div class="flex flex-col gap-space-sm">
                <label class="font-label-md text-label-md text-on-surface-variant">Email</label>
                <input class="px-space-md py-space-sm rounded-lg bg-surface-container-lowest text-on-surface focus:outline-none focus:ring-1 focus:ring-tertiary" value="ren.nexus@aurastream.io" />
            </div>
            <div class="flex flex-col gap-space-sm">
                <label class="font-label-md text-label-md text-on-surface-variant">Nombre de Cazador</label>
                <input class="px-space-md py-space-sm rounded-lg bg-surface-container-lowest text-on-surface focus:outline-none focus:ring-1 focus:ring-tertiary" value="Ryōiki User" />
            </div>
        </section>

        <section class="p-space-lg rounded-xl bg-surface-container-low shadow-md flex flex-col gap-space-md">
            <h2 class="font-headline-md text-headline-md text-on-surface uppercase">Notificaciones</h2>
            <label class="flex items-center gap-space-sm cursor-pointer">
                <input type="checkbox" checked class="w-4 h-4 accent-primary" />
                <span class="font-body-md text-body-md text-on-surface">Recibir alertas de nuevos simulcasts</span>
            </label>
            <label class="flex items-center gap-space-sm cursor-pointer">
                <input type="checkbox" checked class="w-4 h-4 accent-primary" />
                <span class="font-body-md text-body-md text-on-surface">Recibir alertas de duelos programados</span>
            </label>
        </section>

        <button class="self-end px-space-lg py-space-sm rounded-lg bg-primary-container text-on-primary font-label-md text-label-md uppercase tracking-wider hover:opacity-90 transition-opacity">
            Guardar cambios
        </button>
    </div>

<?php include __DIR__ . '/frontend.endmain.php'; ?>