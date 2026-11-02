<?php
// frontend.peliculas.php
// Películas anime
$peliculas = [
        [
                'badge' => '2h 35m • KHARA', 'badgeColor' => 'primary',
                'titulo' => 'Evangelion: 3.0+1.0 Thrice Upon a Time', 'sub' => 'Dirección: Hideaki Anno • Shinji Ikari',
                'hover' => 'text-primary',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBN6Aqt_2chqUmAT6Sn5E3IVk8xLMo9o0wYBnEd3TB862hlP6pVgJ7XxN_LhFDr5XHYoGVORhW4yg4bzgQHe5zpLK6IuWAa2XrgnLhU_Cs522lTWM7BzjfLjtAOSZYHYJAlmhLyP1L3hPo8vwzaXDX-pCt9QPSM8mpv7XBTnJnBaR6nKgKGU2BO0xv0N3hHSAzh6ZM3h3ZlREWeXsxfuyb92GMyGADw5Ipb3PMwVl6vqQbWRj-yd09y'
        ],
        [
                'badge' => '1h 45m • MAPPA', 'badgeColor' => 'secondary',
                'titulo' => 'Jujutsu Kaisen 0: Maldición del Amor', 'sub' => 'El despertar de Yuta Okkotsu • Rika',
                'hover' => 'text-secondary',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBux1eEWMG-JK7owwtEcjPba-S2Lfu8VMMfgeATgJz29nwlR9P1_tLozXK0nHScLoK_sTQO2orpto7vb4r12I8kBVnGblE7HwbVGV1oXqq9dJ8jFUPIMGR8A_rtteHK-AZl2AfjG693bYG6Q8Dd7Heg7sXRscTklet6GwqK0e-O8RsCCOaPLpZgNNwSu811KaEYdDTlWdwcuiejGukzbcBDh6oCJ9YLQYK7Vg6mzLyTuy7Dh-1qeFfq'
        ],
        [
                'badge' => '2h 02m • COMIX WAVE', 'badgeColor' => 'tertiary',
                'titulo' => 'Suzume no Tojimari', 'sub' => 'Dirección: Makoto Shinkai • Puertas Astrales',
                'hover' => 'text-tertiary',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAEwUOOcm82hB71o9s5yR0RghQRx6olZsX3uhbficCCsBISIdMCTp-3-t5nWVQG01KiBIgZ2GsIt1JrtVg5b2qpS8Qsg_6Xtw-4Ea-UuJzXIzTkYbnCJ80X2DVUnJkoetjdCauE_RY9ksaAj1dvhCrt3kX7CXiFmRshore5VjYL0ZipYu5194_O5stEgNqRzBl6-JfzBQ0Z_fue_sUgGl5rTlgdt2D2ErAn3i7rfeFSgfvj6pbFIzHu'
        ],
        [
                'badge' => '1h 57m • UFOTABLE', 'badgeColor' => 'secondary',
                'titulo' => 'Kimetsu no Yaiba: Mugen Ressha-hen', 'sub' => 'Rengoku Kyojuro • Récord Histórico',
                'hover' => 'text-secondary',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAofJnPLJJ0gjkP4GhIG3Ew7q6v4iOCk0lzONFW4f3KlahGqaL59mBztj8MqUJW1fbWPCVuhn_bs-J0hNdH7qVfAn-NAYWgeT1D_gOuqvsqJKo2gH9FgH_85Yu4gzxjt8sPUydilLRi7YTxHsWpKs5WkCYkqjIkn7PXJZ_2DSZ_sZH3tRUP0S2-SDBnNuVdcyKM8R_tsdHi8rCEVhaVRCysOi8zRDiImXhh7-tWqNMWRc0GfsFxjIfa'
        ],
];
?>
<!-- ===== PELÍCULAS ===== -->
<section class="flex flex-col gap-space-sm pt-space-md mb-space-xl">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-space-xs">
            <span class="w-2.5 h-6 bg-secondary rounded-sm shadow-[0_0_10px_#ffb2b7]"></span>
            <h2 class="font-headline-lg text-headline-lg text-on-surface uppercase tracking-wide">Grandes Producciones Cinematográficas</h2>
            <span class="text-secondary font-label-sm text-label-sm ml-2 bg-secondary-container/20 px-2 py-0.5 rounded">AUDIO LOSSLESS 5.1 / 7.1</span>
        </div>
        <div class="flex items-center gap-1">
            <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Cine Japonés Selección Oficial</span>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
        <?php foreach ($peliculas as $p): ?>
            <div class="group relative rounded-xl bg-surface-container-low overflow-hidden shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(160,120,255,0.3)]">
                <div class="w-full aspect-[16/9] relative overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                         alt="<?= htmlspecialchars($p['titulo']) ?>"
                         src="<?= $p['img'] ?>" />
                    <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                    <span class="absolute bottom-2 left-2 px-2 py-0.5 rounded bg-surface-container-lowest/80 text-<?= $p['badgeColor'] ?> font-label-sm text-[10px]">
                        <?= $p['badge'] ?>
                    </span>
                </div>
                <div class="p-space-sm">
                    <h4 class="font-title-md text-title-md text-on-surface font-bold truncate group-hover:<?= $p['hover'] ?> transition-colors">
                        <?= htmlspecialchars($p['titulo']) ?>
                    </h4>
                    <p class="font-body-sm text-body-sm text-outline"><?= $p['sub'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>