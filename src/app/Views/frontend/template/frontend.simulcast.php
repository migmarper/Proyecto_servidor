<?php
// frontend.simulcast.php
// Fila de Simulcast con countdown
$simulcast = [
        [
                'badge' => 'HOY • EPISODIO 38', 'badgeColor' => 'primary',
                'titulo' => 'Spy x Family Season 3', 'sub' => 'Operación Strix: Cruzada en Cruzero',
                'countdown' => 9910, 'timerColor' => 'tertiary',
                'btnHover' => 'hover:bg-primary hover:text-on-primary',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCVCOylXHlp4a1Ruy80OfJm9-lMY4BTNP5aBH8HP8koqA0rjQCXyixy3aLwkcZWspgar6Pj1ekCDKTKxi0InLORdGr1EHti3mO8g4T1Ebj5vx1ZJps2LcQXcsMEj0AQnBhxfHZbid1sVVV-tDrsafFGwK6tzAzNGHFcu3mCBUv87W5f6DGKJzgPzEYKg7O2x-SP8fq0eClkmUlPwQJfrRJNTOTL2fL6KTU1DDwIWnVGBaXlWSHArWMq'
        ],
        [
                'badge' => 'HOY • EPISODIO 19', 'badgeColor' => 'secondary',
                'titulo' => 'Tower of God: Workshop Battle', 'sub' => 'El Retorno del Vigésimo Quinto Baam',
                'countdown' => 15420, 'timerColor' => 'secondary',
                'btnHover' => 'hover:bg-secondary hover:text-on-secondary',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuByA4sAMz8oYBK-FeHyzj-ReFmygzAPKm02zi5CVJ52P_bMAIYNNWWSMOnqbqdabgE4xs_7o4cus7gUNwCQ5aYEG3mORqBTIZWNYUE0YgzRZEEY6-d4ZYSkkRzUB0tIm59sUTh1qsgzG4-ZdvFXIfpY4cXMZd-JegaTOsloK68yEU9-wI1MylvvNJpJvI6rjq8oTf8cn3F6aLXHqLRfk7VauM0EFe4C58DWkGDq1pCciXWD7BMkVew1'
        ],
        [
                'badge' => 'MAÑANA • EPISODIO 159', 'badgeColor' => 'primary',
                'titulo' => 'My Hero Academia Season 7', 'sub' => 'Guerra Definitiva: Gearshift 100%',
                'countdown' => 45000, 'timerColor' => 'primary',
                'btnHover' => 'hover:bg-primary hover:text-on-primary',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB07cXdbldj-_LQ9ZiF-nyONDr7mzMSMpA16Qd1oC-eE9yI4MyZpPrMIrhRfZ-HgHRYI6ue_HAAovPXFvvf3F1Cw47ZVBpAQeQPm5h1YGGTtnM4RaouyEiCe5P9RhuuGozXvZbazyqOMKUDw-bgJrHGlmO3G1_rs_X3D5P6jmM6t4xiV7Niti98-K1UVHKybvhdiJqqvV6X5z6tPDLysa6PCbWE6_Ccgq7XYynDNmE7hec-NXQP7QwO'
        ],
];
?>
<!-- ===== SIMULCAST ===== -->
<section class="flex flex-col gap-space-sm pt-space-md">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-space-xs">
            <span class="w-2.5 h-6 bg-tertiary rounded-sm shadow-[0_0_10px_#4cd7f6]"></span>
            <h2 class="font-headline-lg text-headline-lg text-on-surface uppercase tracking-wide">Transmisiones Simultáneas Simulcast</h2>
            <span class="px-2 py-0.5 rounded bg-tertiary text-on-tertiary font-label-sm text-label-sm font-bold flex items-center gap-1">
                <span class="w-2 h-2 rounded-full bg-on-tertiary animate-ping"></span> DIRECTO TOKIO
            </span>
        </div>
        <a class="font-label-sm text-label-sm text-tertiary hover:underline uppercase tracking-wider flex items-center" href="/catalogo">
            Ver Calendario Semanal <span class="material-symbols-outlined text-sm ml-1">arrow_forward</span>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
        <?php foreach ($simulcast as $s): ?>
            <div class="p-space-md rounded-xl bg-surface-container-low shadow-lg flex flex-col justify-between group hover:bg-surface-container transition-all">
                <div class="flex items-start justify-between gap-space-sm mb-space-sm">
                    <div class="flex items-center gap-space-sm">
                        <div class="w-14 h-14 rounded-lg overflow-hidden shrink-0">
                            <img class="w-full h-full object-cover" alt="<?= htmlspecialchars($s['titulo']) ?>" src="<?= $s['img'] ?>" />
                        </div>
                        <div>
                            <span class="px-2 py-0.5 rounded bg-surface-container-high text-<?= $s['badgeColor'] ?> font-label-sm text-label-sm uppercase"><?= $s['badge'] ?></span>
                            <h3 class="font-title-md text-title-md text-on-surface font-bold group-hover:text-primary transition-colors"><?= htmlspecialchars($s['titulo']) ?></h3>
                            <p class="font-body-sm text-body-sm text-outline"><?= htmlspecialchars($s['sub']) ?></p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between pt-space-sm border-t border-surface-container-highest/60">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-<?= $s['timerColor'] ?> text-lg">timer</span>
                        <span class="font-label-md text-label-md text-<?= $s['timerColor'] ?> tracking-widest countdown-timer" data-seconds="<?= $s['countdown'] ?>">
                            --:--:--
                        </span>
                    </div>
                    <button class="px-3 py-1.5 rounded bg-surface-container-highest text-on-surface <?= $s['btnHover'] ?> font-label-sm text-label-sm uppercase transition-colors flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">notifications</span> Notificar
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<script>
    // Countdown timers
    (function initCountdowns() {
        setInterval(() => {
            document.querySelectorAll('.countdown-timer').forEach(el => {
                let sec = parseInt(el.getAttribute('data-seconds'), 10);
                if (sec > 0) {
                    sec--;
                    el.setAttribute('data-seconds', sec);
                    const h = String(Math.floor(sec / 3600)).padStart(2, '0');
                    const m = String(Math.floor((sec % 3600) / 60)).padStart(2, '0');
                    const s = String(sec % 60).padStart(2, '0');
                    el.textContent = `${h}:${m}:${s}`;
                }
            });
        }, 1000);
    })();
</script>