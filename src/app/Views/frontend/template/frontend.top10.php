<?php
// frontend.top10.php
// Top 5 con números gigantes estilo Netflix
$top5 = [
        [
                'rank' => 1, 'titulo' => 'Solo Leveling II', 'sub' => 'Sombra Imperial • 99.4% Match',
                'tier' => 'SSS-TIER', 'tierColor' => 'primary-container', 'tierText' => 'on-primary-container',
                'hover' => 'text-primary/40',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBwlabmhb-Zstp0W_y-ZdA5CLJEovrrpnUfeww_CQdElvxbv3-t15Cfhb39MmmikRcWDqYRUesvMOB5z_ojW3ybfvrbbnlbmXGKnEDkVJDsyszCE3tQy8fApmi8t6D6NUjCOT81WQAWxRE9rgwo03OZ4lg62wsJjbpZpAwwiBLaB-f2oVGOrWK-Znj0rOmY-aaiGaRbSPnxDU8D7CzC2yC7ua8iLTybtV3cClXeRze-biq8eNUhc9Ed'
        ],
        [
                'rank' => 2, 'titulo' => 'Jujutsu Kaisen', 'sub' => 'Incidente Shinjuku • 98.7%',
                'tier' => 'SPECIAL GRADE', 'tierColor' => 'secondary-container', 'tierText' => 'on-secondary-container',
                'hover' => 'text-secondary/40',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDYbrHuMd4uGem143pjmEUAl81osN8nONwE0LKhQToxfGRGC9TlNw5Qv5zyG61rC3X5DjOqtMx4nXoh3PjbAiC0Jq-jV7BEGCgA7S_dBaU5wo4Y4pu82LEVKdFIR0MEumsCiNoQ14KTtGqqgazRRvMtCYMi4DWuTkNH2xSLp1ACG-8B7sC3NgXdrl-Du1WrabnSoQd-d8ahTVdWWXqo4QY6wZr4n4_nlfKLlVylbuBYKIRkg0iGB9cb'
        ],
        [
                'rank' => 3, 'titulo' => 'Frieren', 'sub' => 'Hacia el Fin del Viaje • 97.9%',
                'tier' => 'FIRST-CLASS', 'tierColor' => 'tertiary-container', 'tierText' => 'on-tertiary',
                'hover' => 'text-tertiary/40',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCHMqS425zNjf-34xuYUHBiquzuuMTbRa5m-GKFweJl7gwFpIh1NcTTcLy5nuKqI6r6qk8wZDnycINRRzxketOCy2nx0KReXpjY4TqWDgAelLxUgDcYu078i9d70PVu9dLaQd-yrq6EOgLrJUGODLQnHVj_xTYs_nLDg1S8q2OlN1DQ0eXxij0HgMLs_4Mc037hE6TKQ4xA3JDXdnD0qEzZD0aXBclfJNOw0qBc-cfNnu3K3W3v2My7'
        ],
        [
                'rank' => 4, 'titulo' => 'Shingeki no Kyojin', 'sub' => 'The Final Chapters • 96.5%',
                'tier' => 'TITAN PRIMIGENIO', 'tierColor' => 'surface-container-highest', 'tierText' => 'on-surface',
                'hover' => 'text-primary/40',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBb10om0BlC8S6hgwtER57n3gXQlkOK-jH-w_1bPmpceqsDk27m8Gr5Bz7QEzAfQ55Pll86PwoxcpwGb2VU4RQ1OBEwflIfqghxjG8S10DIGRU6tlYhPFntVjJtc78EPMpt8Rut3I7Xqo3SiT1ZmQOCilNjmAkPqUBCP_Jn5izwqXbk0Lss8e3ihv7_uglvAtFynzmkYpASmEIuLsmG8oF06ZMOtiv2g0KhI5QjXVLRC1QrYoamrVe_'
        ],
        [
                'rank' => 5, 'titulo' => 'Chainsaw Man', 'sub' => 'Seguridad Pública • 95.8%',
                'tier' => 'DEVIL HUNTER', 'tierColor' => 'secondary-container', 'tierText' => 'on-secondary',
                'hover' => 'text-secondary/40',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAX7jq7UPkHP2LLpWB9jMhLXUrePqN8viUBEzOpDcwJ60A3cXTtI6Amr4Z89_IA_cPZF7QTDNrfU7jgu9MeZ6yCbq1mlI2Ipkd8DcupbOvC66A-2ilmgWqfQeTkOe1ER-cEfiz-9DnGb2nOlmJq_1uwj1UMVeRyNhqqRDY5eof_rZe-OHFkaoQtKAldbJ4n2xuEr5DiMhyprlQp9CXkdt9y4YVM5EwQp8IQQWVNZAnKrn56KYsIGC5Q'
        ],
];
?>
<!-- ===== TOP 5 AURA GLOBAL ===== -->
<section class="flex flex-col gap-space-sm pt-space-md">
    <div class="flex items-baseline justify-between">
        <div class="flex items-center gap-space-xs">
            <span class="w-2.5 h-6 bg-secondary rounded-sm shadow-[0_0_10px_#ffb2b7]"></span>
            <h2 class="font-headline-lg text-headline-lg text-on-surface uppercase tracking-wide">Top 5 Aura Global en Transmisión</h2>
            <span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest ml-2 bg-secondary-container/20 px-2 py-0.5 rounded">VOTACIÓN EN TIEMPO REAL</span>
        </div>
        <span class="font-body-sm text-body-sm text-outline hidden sm:inline">Actualizado cada 15 min por telemetría astral</span>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-space-md pt-2">
        <?php foreach ($top5 as $item): ?>
            <div class="relative flex items-center group cursor-pointer">
                <span class="font-headline-lg text-[140px] leading-none text-surface-container-highest/60 select-none absolute -left-4 bottom-0 -z-0 group-hover:<?= $item['hover'] ?> transition-colors">
                    <?= $item['rank'] ?>
                </span>
                <div class="relative z-10 ml-12 w-full aspect-[2/3] rounded-xl overflow-hidden bg-surface-container-low shadow-xl transition-all duration-300 group-hover:-translate-y-2 group-hover:shadow-[0_12px_36px_rgba(160,120,255,0.35)] flex flex-col justify-end p-space-sm">
                    <img class="absolute inset-0 w-full h-full object-cover" alt="<?= htmlspecialchars($item['titulo']) ?>" src="<?= $item['img'] ?>" />
                    <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                    <div class="relative z-10">
                        <span class="px-1.5 py-0.5 rounded bg-<?= $item['tierColor'] ?> text-<?= $item['tierText'] ?> font-label-sm text-[10px] font-bold"><?= $item['tier'] ?></span>
                        <h4 class="font-headline-md text-headline-md text-on-surface uppercase leading-none mt-1 group-hover:text-primary"><?= htmlspecialchars($item['titulo']) ?></h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant truncate"><?= $item['sub'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>