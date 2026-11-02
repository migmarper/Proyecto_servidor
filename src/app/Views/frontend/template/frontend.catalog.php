<?php
// frontend.catalog.php
// Página CATÁLOGO / GRIMORIO

$title     = 'Catálogo | AuraVerse Nexus';
$shellType = 'web_standard';

include __DIR__ . '/frontend.header.php';

// ===== Array de obras (16 títulos) =====
$obras = [
        [
                'id' => 'jujutsu', 'titulo' => 'Jujutsu Kaisen', 'estudio' => 'MAPPA', 'anio' => '2024',
                'nota' => '9.8', 'caps' => '47 Episodios', 'tipo' => 'ENERGÍA MALDITA',
                'badge1' => '4K HDR', 'badge1Color' => 'tertiary',
                'badge2' => 'SSS-RANK', 'badge2Color' => 'secondary-container',
                'sinopsis' => 'Arco de Shibuya & Incidente de Culling Game. Combate de hechicería con expansión de dominio.',
                'color' => 'primary', 'btnText' => 'TRANSMITIR', 'btnIcon' => 'play_arrow',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAOr2sT0N7li1EyqQ1w8T1s4W4jUDSExQxjhFCqicUCMn7ZfiowhUkfUDn5_Gc9f4s0FbVOwZbdq8nTvwhxYa8sE4YEFufcRrkP0iomSTdBKaWVO25QB0pKOQjFz53vmC-46emcaZ6h2HDTnQ5nfNCewp9J0kprz9OQJ_rMUR6fqpSontiqQNfpJfCFxct4GSPyA0bAdLhgr8omIjcjUXMZomSY0UUiyWHvAdbqImcRa_nZilriNA5C'
        ],
        [
                'id' => 'solo-leveling', 'titulo' => 'Solo Leveling: Arise', 'estudio' => 'A-1 PICTURES', 'anio' => '2025',
                'nota' => '9.9', 'caps' => 'Temporada 2 • Simulcast', 'tipo' => 'MONARCA SOMBRA',
                'badge1' => 'MANHWA / ANIME', 'badge1Color' => 'tertiary-container',
                'badge2' => 'SSS-RANK', 'badge2Color' => 'secondary-container',
                'sinopsis' => 'El monarca de las sombras comanda legiones astrales tras la apertura de las puertas dimensionales.',
                'color' => 'tertiary', 'btnText' => 'DESPERTAR', 'btnIcon' => 'play_arrow',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAIA2kMqFGfA9eaKmtOx1Xf4swJC0_emmluSQCstrheFcsr-9N3OC7x8-rOu-BhZic9JpDzrIr7fzALDpgJvLDjlZU2OoAvwaFB2QX1gBT0k6wk4hhnC2nEf1K_fEPIXHiWRqNBizlCpqih2FMVTmT0L7AhVSNF_PQqUIOdxu-oMnAHoMRxW8VhvvtoQeop0u6YW__MtrDRllN5NX0htv988Df6iIlZPILUF2OJ6ZUnnD30_W8wVVR6'
        ],
        [
                'id' => 'chainsaw', 'titulo' => 'Chainsaw Man', 'estudio' => 'MAPPA', 'anio' => '2024',
                'nota' => '9.4', 'caps' => '12 Eps + Película', 'tipo' => 'PACTO DEMONÍACO',
                'badge1' => 'PELÍCULA REZE', 'badge1Color' => 'secondary',
                'badge2' => 'S-TIER', 'badge2Color' => 'surface-container-highest',
                'sinopsis' => 'Pactos con demonios viscerales en la división de seguridad pública liderada por Makima.',
                'color' => 'secondary', 'btnText' => 'ACTIVAR', 'btnIcon' => 'play_arrow',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD7wiD-sx6FRMLUJtU2S2W-y8363A1lOOuIH1HP56-UbhEH34uPbnfKdoI4TigF5yQu60umFrlonMqyATIR6CLaxk3kz_l7TIFLwhzmFslx48CXyXwvaCq_zviExCwnWnu_awS1XCpSu_tEX9hQAojzRhLMOHdvwyStlzxkthJc14Iw54N6EyswMWZdUNhILJwNH0OxqTOmyXn2jneAvYopIGoDPIRY-5uqYc2JZp3j_vIZqxtprQvf'
        ],
        [
                'id' => 'bleach', 'titulo' => 'Bleach: Blood War', 'estudio' => 'PIERROT FILMS', 'anio' => '2024',
                'nota' => '9.7', 'caps' => 'Parte 3: The Conflict', 'tipo' => 'REIATSU TRANSCENDENTE',
                'badge1' => 'SIMULCAST', 'badge1Color' => 'primary',
                'badge2' => 'SSS-RANK', 'badge2Color' => 'secondary-container',
                'sinopsis' => 'Guerra milenaria entre Segadores de Almas y el Imperio Wandenreich de Yhwach.',
                'color' => 'primary', 'btnText' => 'BANKAI', 'btnIcon' => 'play_arrow',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAwkIsJzjJEQ9k6RRbwbyQMHNtR8WofOP9WgKaSLugxDG0h8kpugEElIzdKBF-5ysX2P9CAJJyuBbDwAG7Jej9VRKtQVTKG3C36lVYVOeQRNh51BiXlVSgeA8jfKHqrarBYi4q0SYlj2Obypd0Mix4iu5wkA4LXN_BDtnh4sUpGq8iLUGVWN76i9QbXDXRZZ_850pX1H4TBWds3QZzHIv9Z3p-V8GcybOE5it-zNdLZ9yfYU-ZcGVLQ'
        ],
        [
                'id' => 'demon-slayer', 'titulo' => 'Demon Slayer: Infinity Castle', 'estudio' => 'UFOTABLE', 'anio' => '2024',
                'nota' => '9.6', 'caps' => '55 Episodios', 'tipo' => 'RESPIRACIÓN SOLAR',
                'badge1' => 'TRILOGÍA CINE', 'badge1Color' => 'tertiary',
                'badge2' => 'SSS-RANK', 'badge2Color' => 'secondary-container',
                'sinopsis' => 'La batalla cumbre en el Castillo Infinito contra Muzan Kibutsuji y las Lunas Superiores.',
                'color' => 'tertiary', 'btnText' => 'RESPIRACIÓN', 'btnIcon' => 'play_arrow',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD02lIEOxIbflI5K0y0ytv3bRgK4-wSBuYoqBb23xb_nuXTKa4aSTSUWAH2dnoOevw1B3pmeYLUG-fHRMIpJfj16IozXMaQLQVsjaDPZXSQQs_VTCHCUseqgqlaarJAgSs-qem23yGZDXEVwl2NZobwkFNWBhrGUAFf4gKWKWoIa61Yvt8oiFAHD5mvRpHmfnUddNPjQQp4K6GvX4VlUuFR5zAAPskEinLI-RBjutlExF-iFjhmitah'
        ],
        [
                'id' => 'aot', 'titulo' => 'Attack on Titan', 'estudio' => 'MAPPA / WIT', 'anio' => '2023',
                'nota' => '9.8', 'caps' => '89 Episodios', 'tipo' => 'TITÁN FUNDADOR',
                'badge1' => 'FINALIZADO', 'badge1Color' => 'on-surface',
                'badge2' => 'SSS-RANK', 'badge2Color' => 'secondary-container',
                'sinopsis' => 'La marcha del Retumbar de la Tierra y la lucha definitiva por el destino de la humanidad.',
                'color' => 'primary', 'btnText' => 'RETUMBAR', 'btnIcon' => 'play_arrow',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuARCvVsf59VmDoxOS2NM0AyHfZOZOBGosrstdYtNXQkvrBtg3QU3MkGsHmfiBUv16VitTxoY3-hR4AOyfHFb2y3xR2NF_qSh8SamlUycRlel7pRpmlvGOJ55yPLZ8S4jFpySQIL6yh8eHPt3cWAWLPYR2ZrtnElwdSSXC4b503n2krL9cK6euHETKrIL1V2KGuInf6GfnbZR8cJgoT4E7EJDej9bRGcOInVrX3dDzugLSY8Ze0fBUAv'
        ],
        [
                'id' => 'frieren', 'titulo' => "Frieren: Beyond Journey's End", 'estudio' => 'MADHOUSE', 'anio' => '2024',
                'nota' => '9.9', 'caps' => '28 Episodios', 'tipo' => 'MANÁ PRIMORDIAL',
                'badge1' => '4K HDR', 'badge1Color' => 'tertiary',
                'badge2' => 'SSS-RANK', 'badge2Color' => 'secondary-container',
                'sinopsis' => 'Reflexión sobre el tiempo y magia arcana tras derrotar al Rey Demonio junto a nuevos aprendices.',
                'color' => 'tertiary', 'btnText' => 'CONJURAR', 'btnIcon' => 'play_arrow',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBj2CkSgH8FEhAW6EM89dYp10l-Cv8wgnYMmHz5b80secpHdbqIQL2xkzFoYW3fkajdT57Tg-yAkNrs8qjq-KDPvVjhC5i2ra-natSaq1cGeiIQF5bvFu0jPTVfFGV8yLHeOV6zP6YnOd6yHqBuidiM1Zkd4GbK31IxBq0rzAePJS9y0jWsE2wKxguqcwcAlrNLwcuta1GWodkfbRjdd0q1bG4lk3SQkDI6bHsr66cUSTqBQ1oueuaG'
        ],
        [
                'id' => 'berserk', 'titulo' => 'Berserk (Edición Máxima)', 'estudio' => 'KENTARO MIURA', 'anio' => 'Seinen',
                'nota' => '9.9', 'caps' => '374 Capítulos', 'tipo' => 'ARMADURA BERSERKER',
                'badge1' => 'MANGA CLÁSICO', 'badge1Color' => 'secondary',
                'badge2' => 'SPECIAL', 'badge2Color' => 'secondary-container',
                'sinopsis' => 'La trágica odisea del espadachín negro marcada por la marca del sacrificio y la mano de Dios.',
                'color' => 'secondary', 'btnText' => 'LEER TOMO', 'btnIcon' => 'menu_book',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDVKe4J8x06Cehp64Z-gwzNS99zvoZpFmE72CyKLHw2LDYqBA-WUGyw-bXR6uJeV6dJiZmihj8xUQx1y7dqImCD3WEeYn3kb1Q2nM-sJxauwBAu2I-WVD6PO9Ta6IIvUmTBzaJEg-CDu4c8PH-9PBOBQBvT72BOdqG-AR8HDqW71Me5e1mYe6CQ85SyUkEJzDG8WFG80p7T4GqBSOMPukTZyPkwnUHTGcuiZQfUJ348tqhJlzHTSSQU'
        ],
        [
                'id' => 'tbate', 'titulo' => 'The Beginning After The End', 'estudio' => 'TAPAS MEDIA', 'anio' => '2025',
                'nota' => '9.3', 'caps' => 'Temporada 6', 'tipo' => 'AETHER CORE',
                'badge1' => 'WEBTOON', 'badge1Color' => 'tertiary-container',
                'badge2' => 'S-TIER', 'badge2Color' => 'surface-container-highest',
                'sinopsis' => 'Reencarnado como Arthur Leywin, domina los núcleos elementales para enfrentar deidades asura.',
                'color' => 'tertiary', 'btnText' => 'LEER MANHWA', 'btnIcon' => 'menu_book',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCkmfpj-9dQ2FndxzqxzCPtkFnIeh5h2WhlxJT7UToQ1j3vU4PbO4nKI5_MEnroN3A__3QZe33pbEzOBzR9dE_afqowp5_0xilBEY_W0T6msRghgIPqWuAotysKa-m7RJORNXOO_yTM9_1zaw-yXxr2RMxw1jQJo8_NKfnh_jnRHbyd4wJZBlEFnKJRHHez9a81MrvcYq_ibsxlrd5gVI77t52midyvMAtWJ2jdNO_IlTmgTTRoBlev'
        ],
        [
                'id' => 'tog', 'titulo' => 'Tower of God: Workshop Battle', 'estudio' => 'ANSWER STUDIO', 'anio' => '2024',
                'nota' => '8.9', 'caps' => '26 Episodios', 'tipo' => 'SHINSU NEGRO',
                'badge1' => 'TEMPORADA 2', 'badge1Color' => 'tertiary',
                'badge2' => 'S-TIER', 'badge2Color' => 'surface-container-highest',
                'sinopsis' => '¿Qué deseas? Dinero, gloria o la cima de la torre. La ascensión de los irregulares continúa.',
                'color' => 'tertiary', 'btnText' => 'ASCENDER', 'btnIcon' => 'play_arrow',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDhnBGJpxZpWJBR5PjEEmUVCRQ6KZZ68PGJDJa3DSGhr1WlMdzPIKKqVxic860oPFsUJLn14h1x2TJTEoIcGnmF293OKaSLL9RLohxCtmVxAkF6-wI86tUd7BnVa64En5fqZ_u7fBvOSVjLKZlZavb7lEVbyo0u8Xs0fdAk6IRq2L6xmelQRVOFxL0hmjkDY2SfAQESDubS243y7HKtnyY4LBT17J5NX43n3awrWwxU_WuC30j8YRZi'
        ],
        [
                'id' => 'opm', 'titulo' => 'One Punch Man: Garou Climax', 'estudio' => 'J.C.STAFF', 'anio' => '2025',
                'nota' => '9.5', 'caps' => 'Próxima Emisión', 'tipo' => 'FUERZA ABSOLUTA',
                'badge1' => 'TEMPORADA 3', 'badge1Color' => 'secondary',
                'badge2' => 'SSS-RANK', 'badge2Color' => 'secondary-container',
                'sinopsis' => 'El límite humano ha sido quebrado. Enfrentamiento cósmico entre el cazador de héroes y Saitama.',
                'color' => 'secondary', 'btnText' => 'IMPACTO', 'btnIcon' => 'play_arrow',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCoGX4eXwKrTwsGaT-vVPqfCPWVUp4lVyYWJ5VTXA330hm7FAmVBJowwLDaaCs2VoJAvoCBVx9pNSeSSdTOdel5gCIWgXieLw3Sj-xFV1YiCvAdDXP_3HBlt8Bzg4Ffy9xItf8vh7qbdIxst4LBk6TKPsq0ZEH6Rq-sSDne4a4_nWF1WjNCSthctJpt7V8LUfsKXsjSSQDpFVCm8Xex5FT5dvHy1rN1TTdXeFs0xUoxUPSddQD99CcN'
        ],
        [
                'id' => 'vinland', 'titulo' => 'Vinland Saga', 'estudio' => 'MAPPA', 'anio' => '2023',
                'nota' => '9.7', 'caps' => '48 Episodios', 'tipo' => 'ESPÍRITU LIBRE',
                'badge1' => 'SEINEN MASTERPIECE', 'badge1Color' => 'on-surface',
                'badge2' => 'SSS-RANK', 'badge2Color' => 'secondary-container',
                'sinopsis' => '"No tengo enemigos". La transición de un niño guerrero hacia la búsqueda de una tierra sin esclavos ni espadas.',
                'color' => 'primary', 'btnText' => 'REINO DE PAZ', 'btnIcon' => 'play_arrow',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBIG7_hZW00pGaY0AOWXULV45KtrL8u-FQ4mWAGEVzm-RkBgeFK9hXsPoM6Sxxx4C2AFIU1EnCa4wDpQqHMXWWDCMHLJK3PzcjUirtWgEey0ff2rkjon2j1k_MCYo0KAhtn94Jt4DMYg1bPF0qWsrOouwEINJO7EwBHHKzSeN9HMU_lW-VQhfBWzUPWcJVxDn9WB7woCwqMz_xVDjCFJUmJB_igK3eyTxdWlP53BtNHLCBQTHzHUuwZ'
        ],
        [
                'id' => 'vagabond', 'titulo' => 'Vagabond', 'estudio' => 'TAKEHIKO INOUE', 'anio' => 'Seinen',
                'nota' => '9.9', 'caps' => '327 Capítulos', 'tipo' => 'FILO VACÍO',
                'badge1' => 'MANGA CLÁSICO', 'badge1Color' => 'tertiary',
                'badge2' => 'SPECIAL', 'badge2Color' => 'secondary-container',
                'sinopsis' => 'La senda del maestro de la espada bajo el cielo de Edo. Filosofía, tinta y cortes letales.',
                'color' => 'tertiary', 'btnText' => 'LEER SUMI-E', 'btnIcon' => 'menu_book',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBtiO7ay1oZCaDoeWBLf8JWq2MGAexVmdV-rHxG832HZZZWkRgF3Recn9zmUyIpVfNLJqiqNvtarC9G1ug5PbBSeiDDemvb_qWkWYlrVwRYusPpgdBWRqjMQnAPrJ8DN_4aIlTbA7cdwbD0Lp3LhYHVqrjUDnFzOKKJUJj-hXcE--xnbwX-E5CkDFUXRdKmk3L0oxGNOU2l3y2k6eUMz25HRpnusW6pp3Ao6CrCHeB92c9vMu6s-7rT'
        ],
        [
                'id' => 'hxh', 'titulo' => 'Hunter x Hunter', 'estudio' => 'MADHOUSE', 'anio' => 'Clásico',
                'nota' => '9.8', 'caps' => '148 Episodios', 'tipo' => 'NEN DE TRANSFORMACIÓN',
                'badge1' => 'SHONEN TITÁN', 'badge1Color' => 'primary',
                'badge2' => 'SSS-RANK', 'badge2Color' => 'secondary-container',
                'sinopsis' => 'El sistema de Nen definitivo y el sobrecogedor arco de las Hormigas Quimera.',
                'color' => 'primary', 'btnText' => 'NEN ACTIVO', 'btnIcon' => 'play_arrow',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuANDVqjNUn2-P5EgxHPddrNi8QQAAjx0cu48L3LrJ-Aw8YUyHb4vpZSQ9epzkdLHEMDZ0khbB0q3eoF6IHCHTgEaHUiz1Q58G0EINpSU4CgXpEBsAFSMIUDpDJPmgKoN8MRZITZqcZDIfhAt-kzOLdKxKTQRLAEzeaM47hiLAas6dV2t5-KIE4TFKVuW5vRD-r0ss9bTr6VhVhD8y-Z0RyTW7UgMjpnAO5n4XpqrLeko67jbX0Qzgfo'
        ],
        [
                'id' => 'tokyo-ghoul', 'titulo' => 'Tokyo Ghoul', 'estudio' => 'PIERROT', 'anio' => 'Remaster',
                'nota' => '8.8', 'caps' => '48 Eps + OVAs', 'tipo' => 'KAGUNE RINKAKU',
                'badge1' => 'DARK FANTASY', 'badge1Color' => 'secondary',
                'badge2' => 'S-TIER', 'badge2Color' => 'surface-container-highest',
                'sinopsis' => '¿Quién es el monstruo en un mundo donde conviven humanos y ghouls hambrientos de carne?',
                'color' => 'secondary', 'btnText' => 'DESPIERTA', 'btnIcon' => 'play_arrow',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDAKj8aznUoj9G_3Qlxj5qgjCbgl1OuaxTRwQTgTRI-IAGNzSm1dCAJkdT2Zje5k6TssqvVbjjQCLOER3gvUg6oKkak118U30SQa_QP6zrLB3dHvOe4P6rlZzT0hsd8O3jsQzG2dJUkI-WwbMYZf8VOcW50nw-k2fezm9JeMNDn6uadJxIeLKTPb-afVyfnOGf2mNqM7YOP3OkQ7MJBaNaopIae850QviIowClJzpxWF9wPbhWJCNKu'
        ],
        [
                'id' => 'spy-family', 'titulo' => 'Spy x Family', 'estudio' => 'WIT x CLOVERWORKS', 'anio' => '2024',
                'nota' => '9.1', 'caps' => '37 Eps + Película', 'tipo' => 'ESPIONAJE PSÍQUICO',
                'badge1' => '4K SIMULCAST', 'badge1Color' => 'tertiary',
                'badge2' => 'S-TIER', 'badge2Color' => 'surface-container-highest',
                'sinopsis' => 'Un espía de élite, una asesina letal y una niña telépata ocultan sus identidades como una familia feliz.',
                'color' => 'tertiary', 'btnText' => 'OPERACIÓN STRIX', 'btnIcon' => 'play_arrow',
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAg1KJFG2u1mors3K_DW-lmwWzatA3UghLXirCHVlBGUkHnrPUOx8iY39kdEmpKdHuR-1vMV9ZuR3MFG0kBNRSrBqV3MDNmfv8zHXK7hquYaiYFFezFRCZbYryL9KSYrLjm5yjZ_Lgpggvigiyfs8X0RED0xRRk7b_gkMjND2fQRv0S_0qMfJLHyBjr1-qqQpEMuBfCMbBczDshbxxVGQMqbQVlCb4D1Nx_CH7Ruj5fa19yRRfq1yg7'
        ],
];
?>
    <main class="w-full pt-20 bg-surface min-h-[calc(100vh-200px)]">
        <div class="flex flex-col w-full">

            <!-- Orbes ambientales -->
            <div class="relative w-full overflow-hidden">
                <div class="absolute -top-40 left-1/4 w-[650px] h-[650px] bg-primary-container/10 rounded-full blur-[140px] pointer-events-none"></div>
                <div class="absolute top-96 right-10 w-[500px] h-[500px] bg-tertiary/10 rounded-full blur-[130px] pointer-events-none"></div>
                <div class="absolute top-[1600px] left-[-100px] w-[600px] h-[600px] bg-secondary-container/15 rounded-full blur-[160px] pointer-events-none"></div>

                <div class="w-full px-4 sm:px-gutter md:px-margin-lg py-space-lg flex flex-col gap-space-xl relative z-10">

                    <!-- ===== 1. HEADER DEL CATÁLOGO ===== -->
                    <section class="flex flex-col gap-space-lg">
                        <div class="flex flex-wrap items-center justify-between gap-space-sm">
                            <div class="flex items-center gap-space-xs font-label-sm text-label-sm text-outline uppercase tracking-widest">
                                <span class="hover:text-primary transition-colors cursor-pointer">Santuario</span>
                                <span class="material-symbols-outlined text-sm">chevron_right</span>
                                <span class="text-tertiary">Grimorio Dimensional</span>
                                <span class="material-symbols-outlined text-sm">chevron_right</span>
                                <span class="text-on-surface">Catálogo Maestro</span>
                            </div>
                            <div class="flex items-center gap-space-md">
                                <div class="flex items-center gap-1.5 px-3 py-1 rounded bg-surface-container-high shadow-inner">
                                    <span class="w-2 h-2 rounded-full bg-tertiary animate-pulse shadow-[0_0_8px_#4cd7f6]"></span>
                                    <span class="font-label-sm text-label-sm text-tertiary font-bold tracking-wider">ASTRAL SYNC ONLINE</span>
                                </div>
                                <div class="hidden md:flex items-center gap-2 px-3 py-1 rounded bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm">
                                    <span class="text-outline">ARCHIVOS TOTALES:</span>
                                    <span class="text-primary font-bold">1,480 MANIFIESTOS</span>
                                </div>
                            </div>
                        </div>

                        <!-- Hero título -->
                        <div class="relative bg-surface-container-low rounded-xl p-6 sm:p-10 overflow-hidden shadow-2xl">
                            <div class="absolute right-4 -bottom-10 select-none pointer-events-none font-headline-xl text-[160px] md:text-[220px] text-white/[0.02] tracking-tighter leading-none">魔導書</div>
                            <div class="relative z-10 flex flex-col gap-space-sm max-w-4xl">
                                <div class="flex items-center gap-space-xs">
                                    <span class="px-2.5 py-0.5 rounded bg-secondary-container text-secondary-fixed font-label-sm text-label-sm uppercase tracking-wider shadow-[0_0_12px_rgba(181,0,54,0.4)]">Grimorio Arcano v4.2</span>
                                    <span class="text-outline text-xs">•</span>
                                    <span class="font-label-sm text-label-sm text-primary tracking-widest uppercase">Base de Datos Shinigami &amp; Cazadores</span>
                                </div>
                                <h1 class="font-display-hero text-headline-xl sm:text-display-hero text-on-surface tracking-wide uppercase leading-tight">
                                    GRIMORIO &amp; CATÁLOGO MULTIVERSAL <span class="text-primary">霊圧</span>
                                </h1>
                                <p class="font-body-lg text-body-md sm:text-body-lg text-on-surface-variant max-w-2xl">
                                    Filtra por afinidad espiritual, linajes prohibidos, formatos astrales y clasificaciones de combate hiperdimensionales para invocar tu siguiente epopeya.
                                </p>
                            </div>
                            <div class="relative z-10 mt-6 pt-6 flex flex-wrap items-center gap-space-md">
                                <div class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-primary text-base">bolt</span>
                                    <span>LATENCIA REIATSU: 12ms</span>
                                </div>
                                <div class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-secondary text-base">security</span>
                                    <span>NIVEL DE PROTOCOLO: CLASE ESPECIAL</span>
                                </div>
                                <div class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-tertiary text-base">stream</span>
                                    <span>SERVIDORES SIMULCAST: 24 ACTIVOS</span>
                                </div>
                            </div>
                        </div>

                        <!-- Buscador + filtros -->
                        <div class="bg-surface-container-high rounded-xl p-3 sm:p-4 shadow-xl flex flex-col md:flex-row items-stretch gap-space-md">
                            <div class="relative flex-1 flex items-center bg-surface-container-lowest rounded-lg px-4 py-3">
                                <span class="material-symbols-outlined text-primary text-2xl mr-3">search</span>
                                <input id="nexus-search-input" type="text" class="w-full bg-transparent text-on-surface placeholder:text-outline font-body-md text-body-md focus:outline-none" placeholder="Buscar por título, técnica maldita, espada espiritual o protagonista..." />
                                <div class="hidden sm:flex items-center gap-1.5 ml-2">
                                    <kbd class="px-2 py-0.5 rounded bg-surface-container text-tertiary font-label-sm text-label-sm font-bold shadow-sm">/grep</kbd>
                                </div>
                            </div>
                            <div class="flex items-center gap-space-sm shrink-0">
                                <button id="toggle-filter-btn" class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-space-md py-3 rounded bg-surface-container hover:bg-surface-container-highest text-on-surface font-label-md text-label-md transition-all shadow-md">
                                    <span class="material-symbols-outlined text-tertiary text-lg">tune</span>
                                    <span>FILTROS MATRICIALES</span>
                                    <span class="w-5 h-5 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm flex items-center justify-center">6</span>
                                </button>
                                <button id="clear-filter-btn" class="px-space-md py-3 rounded bg-surface-container-lowest hover:bg-surface-container text-outline hover:text-on-surface font-label-md text-label-md transition-all">RESETEAR</button>
                            </div>
                        </div>

                        <!-- Panel de filtros -->
                        <div id="filter-matrix-panel" class="bg-surface-container-low rounded-xl p-6 sm:p-8 flex flex-col gap-space-lg shadow-2xl transition-all duration-300">
                            <div class="flex flex-col lg:flex-row gap-space-lg justify-between">
                                <div class="flex flex-col gap-2.5">
                                    <label class="font-label-sm text-label-sm text-outline uppercase tracking-wider flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-sm text-primary">view_carousel</span> Formato Manifestado
                                    </label>
                                    <div class="flex flex-wrap gap-2">
                                        <button class="filter-chip px-3 py-1.5 rounded font-label-md text-label-md bg-primary-container text-on-primary-container shadow-[0_0_12px_rgba(160,120,255,0.4)]">Todas</button>
                                        <button class="filter-chip px-3 py-1.5 rounded font-label-md text-label-md bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors">Anime Series</button>
                                        <button class="filter-chip px-3 py-1.5 rounded font-label-md text-label-md bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors">Películas / OVAs</button>
                                        <button class="filter-chip px-3 py-1.5 rounded font-label-md text-label-md bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors">Manga</button>
                                        <button class="filter-chip px-3 py-1.5 rounded font-label-md text-label-md bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors">Manhwa</button>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2.5">
                                    <label class="font-label-sm text-label-sm text-outline uppercase tracking-wider flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-sm text-secondary">military_tech</span> Rango &amp; Puntuación
                                    </label>
                                    <div class="flex flex-wrap gap-2">
                                        <button class="filter-chip px-3 py-1.5 rounded font-label-md text-label-md bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors">Todas</button>
                                        <button class="filter-chip px-3 py-1.5 rounded font-label-md text-label-md bg-secondary-container text-on-secondary-container shadow-[0_0_14px_rgba(244,63,94,0.4)]">★ 9.0+ (SSS-Rank)</button>
                                        <button class="filter-chip px-3 py-1.5 rounded font-label-md text-label-md bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors">★ 8.0+ (S-Rank)</button>
                                        <button class="filter-chip px-3 py-1.5 rounded font-label-md text-label-md bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors">Special Grade</button>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-lg pt-4 bg-surface-container-lowest/40 p-4 rounded-xl">
                                <div class="flex flex-col gap-2">
                                    <span class="font-label-sm text-label-sm text-tertiary uppercase tracking-wider">Afinidad &amp; Género</span>
                                    <div class="flex flex-wrap gap-1.5">
                                        <button class="genre-tag px-2.5 py-1 rounded bg-surface-container-highest text-tertiary font-label-sm text-label-sm">Shonen</button>
                                        <button class="genre-tag px-2.5 py-1 rounded bg-surface-container text-on-surface-variant hover:text-primary font-label-sm text-label-sm">Acción</button>
                                        <button class="genre-tag px-2.5 py-1 rounded bg-surface-container text-on-surface-variant hover:text-primary font-label-sm text-label-sm">Sobrenatural</button>
                                        <button class="genre-tag px-2.5 py-1 rounded bg-surface-container text-on-surface-variant hover:text-primary font-label-sm text-label-sm">Seinen</button>
                                        <button class="genre-tag px-2.5 py-1 rounded bg-surface-container text-on-surface-variant hover:text-primary font-label-sm text-label-sm">Isekai</button>
                                        <button class="genre-tag px-2.5 py-1 rounded bg-surface-container text-on-surface-variant hover:text-primary font-label-sm text-label-sm">Cyberpunk</button>
                                        <button class="genre-tag px-2.5 py-1 rounded bg-surface-container text-on-surface-variant hover:text-primary font-label-sm text-label-sm">Mecha</button>
                                        <button class="genre-tag px-2.5 py-1 rounded bg-surface-container text-on-surface-variant hover:text-primary font-label-sm text-label-sm">Romance</button>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span class="font-label-sm text-label-sm text-primary uppercase tracking-wider">Estudio Forjador</span>
                                    <div class="flex flex-col gap-1.5">
                                        <label class="flex items-center gap-2 font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface cursor-pointer">
                                            <input type="checkbox" checked class="w-3.5 h-3.5 rounded bg-surface-container-lowest accent-primary" />
                                            <span>MAPPA (Jujutsu / Chainsaw)</span>
                                        </label>
                                        <label class="flex items-center gap-2 font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface cursor-pointer">
                                            <input type="checkbox" checked class="w-3.5 h-3.5 rounded bg-surface-container-lowest accent-primary" />
                                            <span>Ufotable (Demon Slayer)</span>
                                        </label>
                                        <label class="flex items-center gap-2 font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface cursor-pointer">
                                            <input type="checkbox" class="w-3.5 h-3.5 rounded bg-surface-container-lowest accent-primary" />
                                            <span>Bones Studio</span>
                                        </label>
                                        <label class="flex items-center gap-2 font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface cursor-pointer">
                                            <input type="checkbox" class="w-3.5 h-3.5 rounded bg-surface-container-lowest accent-primary" />
                                            <span>Wit Studio / Madhouse</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Estado Astral</span>
                                    <div class="flex flex-col gap-2">
                                        <button class="flex items-center justify-between px-3 py-1.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm">
                                    <span class="flex items-center gap-2">
                                        <span class="w-2 h-2 rounded-full bg-secondary animate-ping"></span> Simulcast Japón (En Vivo)
                                    </span>
                                            <span class="font-bold text-secondary">314</span>
                                        </button>
                                        <button class="flex items-center justify-between px-3 py-1.5 rounded bg-surface-container text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-label-sm text-label-sm">
                                            <span>En Emisión Regular</span><span>520</span>
                                        </button>
                                        <button class="flex items-center justify-between px-3 py-1.5 rounded bg-surface-container text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-label-sm text-label-sm">
                                            <span>Saga Finalizada</span><span>646</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Ciclo Temporal</span>
                                    <div class="grid grid-cols-2 gap-2">
                                        <button class="px-2 py-1.5 rounded bg-surface-container-high text-primary font-label-sm text-label-sm">2025 Era</button>
                                        <button class="px-2 py-1.5 rounded bg-surface-container text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm">2024</button>
                                        <button class="px-2 py-1.5 rounded bg-surface-container text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm">2023</button>
                                        <button class="px-2 py-1.5 rounded bg-surface-container text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm">Retro Clásicos</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- ===== 2. BARRA DE ESTADO ===== -->
                    <section class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-space-md bg-surface-container-lowest/80 px-5 py-3 rounded-lg shadow-sm">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-tertiary text-xl">auto_stories</span>
                            <span class="font-label-md text-label-md text-on-surface uppercase tracking-wide">
                        Mostrando <span class="text-primary font-bold"><?= count($obras) ?></span> de <span class="text-on-surface font-bold">1,480</span> Obras Registradas
                    </span>
                        </div>
                        <div class="flex items-center gap-space-sm w-full sm:w-auto justify-end">
                            <span class="font-label-sm text-label-sm text-outline uppercase">Ordenar por:</span>
                            <div class="relative">
                                <select class="bg-surface-container-high text-on-surface font-label-sm text-label-sm px-3 py-1.5 rounded focus:outline-none cursor-pointer pr-7 appearance-none shadow-inner">
                                    <option>Puntuación Astral (Mayor a Menor)</option>
                                    <option>Recientes / Transmisión en Vivo</option>
                                    <option>Popularidad de Combate</option>
                                    <option>Alfabético (A → Z)</option>
                                </select>
                                <span class="material-symbols-outlined text-outline text-sm absolute right-2 top-2 pointer-events-none">arrow_drop_down</span>
                            </div>
                        </div>
                    </section>

                    <!-- ===== 3. GRID DE OBRAS ===== -->
                    <section id="grimoire-grid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-space-lg">
                        <?php foreach ($obras as $o): ?>
                            <article class="group relative flex flex-col bg-surface-container-low rounded-xl overflow-hidden shadow-xl hover:shadow-[0_0_24px_rgba(160,120,255,0.25)] transition-all duration-300">
                                <div class="h-1 w-full bg-gradient-to-r from-<?= $o['color'] ?> to-<?= $o['color'] ?>-container"></div>
                                <div class="relative w-full aspect-[3/4] overflow-hidden bg-surface-container-lowest">
                                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                         alt="<?= htmlspecialchars($o['titulo']) ?>"
                                         src="<?= $o['img'] ?>" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-surface-container-low via-surface-container-low/20 to-transparent"></div>

                                    <div class="absolute top-3 left-3 flex flex-col gap-1.5 items-start">
                                        <span class="px-2 py-0.5 rounded bg-<?= $o['badge1Color'] ?> text-on-<?= $o['badge1Color'] ?> font-label-sm text-label-sm font-bold shadow-md"><?= $o['badge1'] ?></span>
                                        <span class="px-2 py-0.5 rounded bg-<?= $o['badge2Color'] ?> text-on-<?= $o['badge2Color'] ?> font-label-sm text-label-sm font-bold shadow-[0_0_10px_rgba(181,0,54,0.5)]"><?= $o['badge2'] ?></span>
                                    </div>

                                    <button class="bookmark-btn absolute top-3 right-3 p-2 rounded-full bg-surface-container-lowest/80 backdrop-blur-md text-on-surface hover:text-secondary hover:bg-surface-container transition-all"
                                            data-title="<?= htmlspecialchars($o['titulo']) ?>">
                                        <span class="material-symbols-outlined text-lg">bookmark_border</span>
                                    </button>

                                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-container-lowest/60 backdrop-blur-sm">
                                        <a href="/serie" class="px-4 py-2 rounded bg-primary text-on-primary font-label-md text-label-md flex items-center gap-2 shadow-[0_0_16px_rgba(76,215,246,0.6)] transform translate-y-2 group-hover:translate-y-0 transition-transform">
                                            <span class="material-symbols-outlined text-lg"><?= $o['btnIcon'] ?></span>
                                            <?= $o['btnText'] ?>
                                        </a>
                                    </div>
                                </div>

                                <div class="p-4 flex flex-col gap-2 flex-1 justify-between">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center justify-between">
                                            <span class="font-label-sm text-label-sm text-<?= $o['color'] ?> uppercase"><?= $o['estudio'] ?> • <?= $o['anio'] ?></span>
                                            <span class="flex items-center gap-1 font-label-sm text-label-sm text-secondary font-bold">★ <?= $o['nota'] ?></span>
                                        </div>
                                        <h3 class="font-title-md text-title-md text-on-surface font-bold line-clamp-1 group-hover:text-primary transition-colors"><?= htmlspecialchars($o['titulo']) ?></h3>
                                        <p class="font-body-sm text-body-sm text-outline line-clamp-2"><?= htmlspecialchars($o['sinopsis']) ?></p>
                                    </div>
                                    <div class="flex items-center justify-between pt-2">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant"><?= $o['caps'] ?></span>
                                        <span class="px-2 py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-<?= $o['color'] ?>"><?= $o['tipo'] ?></span>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </section>

                    <!-- ===== 4. DIRECTORIO A-Z ===== -->
                    <section class="mt-space-xl flex flex-col gap-space-md bg-surface-container-low rounded-xl p-6 sm:p-8 shadow-2xl relative overflow-hidden">
                        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-space-sm pb-4 border-b border-surface-container-highest">
                            <div class="flex items-center gap-space-sm">
                        <span class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-2xl">sort_by_alpha</span>
                        </span>
                                <div>
                                    <h2 class="font-headline-md text-headline-md text-on-surface tracking-wide uppercase">Directorio Alfabético A-Z</h2>
                                    <p class="font-body-sm text-body-sm text-outline">Índice completo por letra inicial y sincronización de afinidad elemental</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="font-label-sm text-label-sm text-tertiary">GLOSARIO DIMENSIONAL ACTIVADO</span>
                            </div>
                        </div>

                        <div id="az-bar" class="flex flex-wrap items-center justify-center gap-1.5 sm:gap-2 py-2">
                            <?php
                            $letras = ['ALL', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '#'];
                            foreach ($letras as $i => $l):
                                $active = $i === 0;
                                ?>
                                <button class="az-btn <?= $active ? 'px-3 py-1.5 rounded font-label-md text-label-md bg-primary-container text-on-primary-container shadow-[0_0_10px_rgba(160,120,255,0.4)]' : 'w-8 h-8 rounded font-label-md text-label-md bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors' ?>" data-letter="<?= $l ?>">
                                    <?= $l ?>
                                </button>
                            <?php endforeach; ?>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-md pt-4">
                            <?php
                            $directorio = [
                                    ['titulo' => 'Attack on Titan (Shingeki)', 'sub' => 'Afinidad: Ígnea / Titán • 89 Caps', 'nota' => '★ 9.8', 'color' => 'secondary'],
                                    ['titulo' => 'Berserk (Golden Age / Black)', 'sub' => 'Afinidad: Vacío / Abisal • 374 Caps', 'nota' => '★ 9.9', 'color' => 'primary'],
                                    ['titulo' => 'Bleach: Thousand-Year Blood War', 'sub' => 'Afinidad: Rayo / Reiatsu • 392 Caps', 'nota' => '★ 9.7', 'color' => 'tertiary'],
                                    ['titulo' => 'Chainsaw Man: Reze Arc', 'sub' => 'Afinidad: Sangre / Pólvora • 180 Caps', 'nota' => '★ 9.4', 'color' => 'secondary'],
                                    ['titulo' => 'Demon Slayer (Kimetsu)', 'sub' => 'Afinidad: Solar / Fluvial • 55 Caps', 'nota' => '★ 9.6', 'color' => 'tertiary'],
                                    ['titulo' => 'Jujutsu Kaisen: Culling Game', 'sub' => 'Afinidad: Maldición / Astral • 271 Caps', 'nota' => '★ 9.8', 'color' => 'primary'],
                            ];
                            foreach ($directorio as $d):
                                ?>
                                <div class="p-3 rounded-lg bg-surface-container hover:bg-surface-container-high transition-all flex items-center justify-between cursor-pointer group">
                                    <div class="flex items-center gap-3">
                                        <span class="w-2.5 h-2.5 rounded-full bg-<?= $d['color'] ?> shadow-[0_0_8px_currentColor]"></span>
                                        <div>
                                            <h4 class="font-title-md text-title-md text-on-surface group-hover:text-primary transition-colors"><?= $d['titulo'] ?></h4>
                                            <span class="font-label-sm text-label-sm text-outline"><?= $d['sub'] ?></span>
                                        </div>
                                    </div>
                                    <span class="px-2 py-0.5 rounded bg-surface-container-highest text-<?= $d['color'] ?> font-label-sm text-label-sm"><?= $d['nota'] ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>

                    <!-- ===== 5. PAGINACIÓN ===== -->
                    <section class="flex flex-col sm:flex-row items-center justify-between gap-space-lg pt-4 pb-8">
                        <div class="flex items-center gap-2">
                            <span class="font-body-sm text-body-sm text-outline">Página <strong class="text-on-surface">1</strong> de <strong>48</strong> bloques dimensionales</span>
                        </div>
                        <div class="flex items-center gap-1.5 sm:gap-2">
                            <button class="px-3 py-1.5 rounded bg-surface-container hover:bg-surface-container-high text-outline hover:text-on-surface font-label-sm text-label-sm flex items-center gap-1 transition-colors">
                                <span class="material-symbols-outlined text-sm">arrow_back</span>
                                <span class="hidden sm:inline">Anterior</span>
                            </button>
                            <button class="w-8 h-8 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm font-bold shadow-[0_0_12px_rgba(160,120,255,0.4)]">1</button>
                            <button class="w-8 h-8 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors">2</button>
                            <button class="w-8 h-8 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors">3</button>
                            <span class="px-1 text-outline font-label-sm text-label-sm">...</span>
                            <button class="w-8 h-8 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors">48</button>
                            <button class="px-3 py-1.5 rounded bg-surface-container hover:bg-surface-container-high text-outline hover:text-on-surface font-label-sm text-label-sm flex items-center gap-1 transition-colors">
                                <span class="hidden sm:inline">Siguiente</span>
                                <span class="material-symbols-outlined text-sm">arrow_forward</span>
                            </button>
                        </div>
                        <div class="hidden lg:flex items-center gap-3">
                            <div class="flex items-center gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                                <span class="w-2 h-2 rounded-full bg-tertiary"></span>
                                <span>GRIMORIO SINCRONIZADO: OK</span>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </main>

    <!-- ===== SCRIPT INTERACTIVO ===== -->
    <script>
        (function initGrimoireCatalog() {
            // 1. Bookmarks con localStorage
            const storageKey = 'auraverse_grimoire_bookmarks';
            let savedBookmarks = [];
            try {
                savedBookmarks = JSON.parse(localStorage.getItem(storageKey)) || [];
            } catch (e) {
                savedBookmarks = [];
            }

            function updateBookmarkIcons() {
                document.querySelectorAll('.bookmark-btn').forEach(btn => {
                    const title = btn.getAttribute('data-title');
                    const icon  = btn.querySelector('.material-symbols-outlined');
                    if (savedBookmarks.includes(title)) {
                        btn.classList.add('bg-secondary-container', 'text-on-secondary-container');
                        btn.classList.remove('bg-surface-container-lowest/80', 'text-on-surface');
                        if (icon) {
                            icon.textContent = 'bookmark';
                            icon.style.fontVariationSettings = "'FILL' 1";
                        }
                    } else {
                        btn.classList.remove('bg-secondary-container', 'text-on-secondary-container');
                        btn.classList.add('bg-surface-container-lowest/80', 'text-on-surface');
                        if (icon) {
                            icon.textContent = 'bookmark_border';
                            icon.style.fontVariationSettings = "'FILL' 0";
                        }
                    }
                });
            }

            document.querySelectorAll('.bookmark-btn').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    const title = btn.getAttribute('data-title');
                    if (!title) return;

                    if (savedBookmarks.includes(title)) {
                        savedBookmarks = savedBookmarks.filter(t => t !== title);
                    } else {
                        savedBookmarks.push(title);
                    }
                    localStorage.setItem(storageKey, JSON.stringify(savedBookmarks));
                    updateBookmarkIcons();
                });
            });

            // 2. Géneros toggle
            document.querySelectorAll('.genre-tag').forEach(btn => {
                btn.addEventListener('click', () => {
                    btn.classList.toggle('bg-surface-container-highest');
                    btn.classList.toggle('text-tertiary');
                    btn.classList.toggle('bg-surface-container');
                    btn.classList.toggle('text-on-surface-variant');
                });
            });

            // 3. Filtros de formato
            const formatButtons = document.querySelectorAll('[data-filter-type="format"]');
            formatButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    formatButtons.forEach(b => {
                        b.classList.remove('bg-primary-container', 'text-on-primary-container', 'shadow-[0_0_12px_rgba(160,120,255,0.4)]');
                        b.classList.add('bg-surface-container', 'text-on-surface-variant');
                    });
                    btn.classList.add('bg-primary-container', 'text-on-primary-container', 'shadow-[0_0_12px_rgba(160,120,255,0.4)]');
                    btn.classList.remove('bg-surface-container', 'text-on-surface-variant');
                });
            });

            // 4. Búsqueda instantánea
            const searchInput = document.getElementById('nexus-search-input');
            const cards = document.querySelectorAll('#grimoire-grid article');
            if (searchInput) {
                searchInput.addEventListener('input', (e) => {
                    const query = e.target.value.toLowerCase().trim();
                    cards.forEach(card => {
                        const text = card.textContent.toLowerCase();
                        card.style.display = text.includes(query) ? 'flex' : 'none';
                    });
                });
            }

            // 5. Toggle panel filtros
            const toggleFilterBtn = document.getElementById('toggle-filter-btn');
            const filterPanel = document.getElementById('filter-matrix-panel');
            if (toggleFilterBtn && filterPanel) {
                toggleFilterBtn.addEventListener('click', () => {
                    filterPanel.classList.toggle('hidden');
                });
            }

            // 6. Reset
            const clearBtn = document.getElementById('clear-filter-btn');
            if (clearBtn) {
                clearBtn.addEventListener('click', () => {
                    if (searchInput) searchInput.value = '';
                    cards.forEach(c => c.style.display = 'flex');
                    document.querySelectorAll('.genre-tag').forEach(b => {
                        b.classList.remove('bg-surface-container-highest', 'text-tertiary');
                        b.classList.add('bg-surface-container', 'text-on-surface-variant');
                    });
                });
            }

            // 7. A-Z bar
            const azBtns = document.querySelectorAll('.az-btn');
            azBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    azBtns.forEach(b => {
                        b.className = 'az-btn w-8 h-8 rounded font-label-md text-label-md bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors';
                        if (b.getAttribute('data-letter') === 'ALL') {
                            b.className = 'az-btn px-3 py-1.5 rounded font-label-md text-label-md bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors';
                        }
                    });
                    btn.className = 'az-btn px-3 py-1.5 rounded font-label-md text-label-md bg-primary-container text-on-primary-container shadow-[0_0_10px_rgba(160,120,255,0.4)]';
                });
            });

            updateBookmarkIcons();
        })();
    </script>

<?php include __DIR__ . '/frontend.endmain.php'; ?>