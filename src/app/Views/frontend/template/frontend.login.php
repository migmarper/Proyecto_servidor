<?php
// frontend.login.php
$title     = 'Iniciar Sesión | AuraVerse Nexus';
$shellType = 'web_blank';
?>
<!DOCTYPE html>
<html class="dark" lang="es">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="<?= htmlspecialchars($shellType) ?>" name="shell-type" />
    <title><?= htmlspecialchars($title) ?></title>

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;600;700&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#d0bcff", "primary-container": "#a078ff", "secondary": "#ffb2b7",
                        "secondary-container": "#b50036", "tertiary": "#4cd7f6", "tertiary-container": "#009eb9",
                        "background": "#13121d", "surface": "#13121d", "surface-container-lowest": "#0e0d17",
                        "surface-container-low": "#1c1a25", "surface-container": "#201e29", "surface-container-high": "#2a2934",
                        "surface-container-highest": "#35333f", "surface-variant": "#35333f",
                        "on-surface": "#e5e0f0", "on-surface-variant": "#cbc3d7", "outline": "#958ea0",
                        "outline-variant": "#494454", "error": "#ffb4ab", "error-container": "#93000a"
                    },
                    borderRadius: { DEFAULT: "0.125rem", lg: "0.25rem", xl: "0.5rem", full: "0.75rem" },
                    spacing: {
                        "space-md": "1rem", "space-lg": "1.5rem", "gutter-sm": "1rem",
                        "space-sm": "0.5rem", "space-xs": "0.25rem", "space-xl": "2.5rem",
                        "margin-lg": "4rem", "margin-sm": "1rem", "gutter-lg": "2rem",
                        "margin": "2rem", "gutter": "1.5rem"
                    },
                    fontFamily: {
                        "body-sm": ["Montserrat"], "label-sm": ["Space Grotesk"], "body-lg": ["Montserrat"],
                        "headline-lg": ["Bebas Neue"], "label-lg": ["Space Grotesk"], "label-md": ["Space Grotesk"],
                        "display-hero": ["Bebas Neue"], "headline-xl": ["Bebas Neue"], "display-hero-mobile": ["Bebas Neue"],
                        "title-md": ["Montserrat"], "title-lg": ["Montserrat"], "headline-xl-mobile": ["Bebas Neue"],
                        "body-md": ["Montserrat"], "headline-md": ["Bebas Neue"]
                    },
                    fontSize: {
                        "body-sm": ["12px", { lineHeight: "18px", fontWeight: "400" }],
                        "label-sm": ["10px", { lineHeight: "14px", letterSpacing: "0.08em", fontWeight: "600" }],
                        "body-lg": ["16px", { lineHeight: "26px", fontWeight: "400" }],
                        "headline-lg": ["32px", { lineHeight: "36px", letterSpacing: "0.03em", fontWeight: "400" }],
                        "label-lg": ["14px", { lineHeight: "18px", letterSpacing: "0.08em", fontWeight: "700" }],
                        "label-md": ["12px", { lineHeight: "16px", letterSpacing: "0.06em", fontWeight: "600" }],
                        "display-hero": ["72px", { lineHeight: "72px", letterSpacing: "0.05em", fontWeight: "400" }],
                        "headline-xl": ["48px", { lineHeight: "52px", letterSpacing: "0.04em", fontWeight: "400" }],
                        "display-hero-mobile": ["44px", { lineHeight: "48px", letterSpacing: "0.05em", fontWeight: "400" }],
                        "title-md": ["16px", { lineHeight: "24px", fontWeight: "600" }],
                        "title-lg": ["20px", { lineHeight: "28px", fontWeight: "700" }],
                        "headline-xl-mobile": ["34px", { lineHeight: "38px", letterSpacing: "0.03em", fontWeight: "400" }],
                        "body-md": ["14px", { lineHeight: "22px", fontWeight: "400" }],
                        "headline-md": ["24px", { lineHeight: "28px", letterSpacing: "0.02em", fontWeight: "400" }]
                    }
                }
            }
        };
    </script>
    <style>
        @layer base { html, body { margin: 0; padding: 0; } body { overscroll-behavior: none; } }
        ::-webkit-scrollbar { display: none; }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface min-h-screen relative overflow-x-hidden selection:bg-primary-container selection:text-on-primary-container">

<div class="fixed inset-0 pointer-events-none select-none flex items-center justify-center opacity-[0.03] text-[35vw] font-bold text-primary z-0 leading-none overflow-hidden">霊圧</div>

<main class="relative z-10 w-full min-h-screen flex items-center justify-center p-gutter">
    <div class="flex flex-col w-full relative items-center justify-center py-6 px-3 sm:px-6">

        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[700px] h-[400px] bg-primary-container/10 rounded-full blur-[140px] pointer-events-none -z-10"></div>
        <div class="absolute -bottom-24 -left-20 w-[450px] h-[350px] bg-tertiary-container/15 rounded-full blur-[120px] pointer-events-none -z-10"></div>
        <div class="absolute top-1/3 -right-20 w-[380px] h-[380px] bg-secondary-container/15 rounded-full blur-[120px] pointer-events-none -z-10"></div>

        <!-- Header strip -->
        <div class="w-full max-w-2xl flex flex-wrap items-center justify-between gap-2 mb-4 px-2 select-none">
            <div class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm tracking-widest uppercase">
                <span class="inline-block w-2 h-2 rounded-full bg-tertiary shadow-[0_0_8px_#4cd7f6] animate-pulse"></span>
                <span>NODO TOKYO-NEO #04 EN LÍNEA</span>
                <span class="text-outline-variant hidden sm:inline">//</span>
                <span class="text-outline hidden sm:inline">Cifrado Neural 512-bit</span>
            </div>
            <div class="flex items-center gap-2 text-outline font-label-sm text-label-sm">
                <span class="material-symbols-outlined text-[14px] text-tertiary">lock</span>
                <span>CANAL SEGURO QUANTUM-V3</span>
            </div>
        </div>

        <!-- Card -->
        <div class="w-full max-w-2xl bg-surface-container-low/90 backdrop-blur-2xl rounded-xl shadow-[0_16px_48px_-8px_rgba(0,0,0,0.8),0_0_24px_rgba(160,120,255,0.12)] p-6 sm:p-10 relative overflow-hidden">
            <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-primary via-secondary to-tertiary shadow-[0_0_12px_#d0bcff]"></div>

            <div class="flex flex-col items-center text-center mb-8 relative">
                <div class="relative mb-3 flex items-center justify-center">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-xl bg-surface-container flex items-center justify-center p-2 shadow-lg relative group">
                        <div class="absolute -inset-1 rounded-xl bg-gradient-to-r from-primary-container to-secondary-container opacity-40 blur-md group-hover:opacity-75 transition duration-500"></div>
                        <img alt="AuraVerse Logo" class="relative z-10 w-full h-full object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1X6v5UC87i97oheiR5ftynVxG96mNtzc4QvUJB4Gw4HmAQfw63e5STdLaU6uKD5dgDM8ljrGEkn2RFa_E8JZmoHJbM-6PPn9YasvDHIncWHX0nfgSoDUh382bnYQEzVNh8Bqvx8xS8onqTz7LHDjA5imbo0ssZnEYSUVTrTAcSPHIxiaFzP6h6qZL7DUqQxlR3L6-MX5O9kmWzkUqCCiJwY0g6Q64FQ-296tT89tLNpmyZx7VR9trzJhA" />
                    </div>
                </div>
                <div class="inline-flex items-center gap-2 px-3 py-0.5 rounded-full bg-surface-container-high/80 text-primary font-label-sm text-label-sm uppercase tracking-widest mb-2">
                    <span class="material-symbols-outlined text-[13px] text-primary">bolt</span>
                    AuraVerse Protocol v4.9
                </div>
                <h1 class="font-display-hero text-headline-xl sm:text-display-hero text-on-surface tracking-wider leading-none m-0">
                    INICIAR SESIÓN EN EL VÍNCULO
                </h1>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-lg mt-2 leading-relaxed">
                    Sincroniza tu Reiatsu para desbloquear transmisiones 4K a 120 FPS y duelos en el coliseo multiversal.
                </p>
            </div>

            <!-- Perfiles -->
            <section class="mb-8">
                <div class="flex items-center justify-between mb-3">
                        <span class="font-label-md text-label-md text-on-surface uppercase tracking-wider flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px] text-primary">fingerprint</span>
                            Perfiles de Enlace Rápido (1-Clic)
                        </span>
                    <button class="font-label-sm text-label-sm text-tertiary hover:text-tertiary-fixed transition flex items-center gap-1 uppercase tracking-wider cursor-pointer" id="btnOpenNewProfile" type="button">
                        <span class="material-symbols-outlined text-[14px]">add_circle</span>
                        Nuevo Perfil
                    </button>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3" id="profilesContainer">
                    <!-- Perfiles por defecto -->
                    <?php
                    $perfiles = [
                            ['id' => 'ren', 'nombre' => 'Ren', 'rol' => 'Cazador Sombras', 'rank' => 'S-RANK', 'rankColor' => 'primary-container/20 text-primary', 'nivel' => 'Lv.99', 'energia' => 'Reiatsu Violeta', 'dot' => 'primary',
                                    'img' => 'https://lh3.googleusercontent.com/aida/AEtjO1UX0C4_1xLnglUswC9RhF2Ttcbaisz8wV2wfFMbpjpv8no2W5-rmAZcVjhmkndb-UVgSUSX1rSZialQhRw-fRHQs6wOcaDRkLoVp6nOi-fkIj4M3adYmyv2V8o8oTeJe7jHZu37j1mgxKuEkQrG89fp0JGd_C_anGXMrDcmVMzbRqNNp0BKtM8MckqRrjQ_pNd84pMk9lwLd_dtJcNFGW4MSpKO8fBQmv3Ap3LurvXuca535_YthyhQS8o'],
                            ['id' => 'kaede', 'nombre' => 'Kaede', 'rol' => 'Berserk Carmesí', 'rank' => 'SSS-TIER', 'rankColor' => 'secondary-container/20 text-secondary', 'nivel' => 'Lv.84', 'energia' => 'Cursed Flame', 'dot' => 'secondary',
                                    'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB87PW3AL3puBYVRYnLrDRIcV3zz3m-vP3gMkx-5zFnGRmxeJm4oB_0nCJBmcDggd5EMdoA7uEaqZqOOqkesBScZDci9dEHI1LZLqLqwdvb3txv-hqbbVwCjoNrO8kfD43u8k-HofLTAxuIHCj6_3SQ0VG776RVZ4O3YmKrst9pViQSX0xzdUdWmib5XsYBLXzyByuswlInoGHAUh2DezZCGHJ5cHOpy5ru_whHBgt4M_K1sVtjpMHp'],
                            ['id' => 'valeria', 'nombre' => 'Valeria', 'rol' => 'Frost Archon', 'rank' => 'FROST', 'rankColor' => 'tertiary-container/30 text-tertiary', 'nivel' => 'Lv.91', 'energia' => 'Absolute Zero', 'dot' => 'tertiary',
                                    'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCIK9fsPAWP5hq2ql5VmRPsXGGIOm2rZcoK_pcuI9Zzks68osm-7SMxzKu8-Ma1_Hz21cb2z34DWzWeAQH6qotJN5kx5cvBGfl_MqVnSjJHtFG3zGbyQN5UEPUZ1AgSqlAfhvybDtM3x8vWQe28bjW4IMx5EgfCLsgpWo_6ovlIqR7oFdOuhfVh5GupJ-rmZ3blBTTcDYjO7P3K_oIu8xtN3wbMgMHNeiXD19RQR2-BuuFF6tY-rgr2'],
                    ];
                    foreach ($perfiles as $p):
                        ?>
                        <button type="button"
                                class="profile-card group text-left p-3 rounded-lg bg-surface-container hover:bg-surface-container-high transition-all duration-300 flex items-center gap-3 relative overflow-hidden cursor-pointer shadow-md"
                                data-profile-name="<?= $p['nombre'] ?>"
                                data-profile-energy="<?= $p['energia'] ?>"
                                data-profile-rank="<?= $p['rank'] ?>">
                            <div class="w-12 h-12 rounded-lg relative flex-shrink-0 overflow-hidden shadow-[0_0_12px_currentColor]">
                                <img alt="<?= $p['nombre'] ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-300" src="<?= $p['img'] ?>" />
                                <span class="absolute bottom-0 right-0 w-3 h-3 bg-<?= $p['dot'] ?> rounded-full"></span>
                            </div>
                            <div class="min-w-0 flex-1">
                                <div class="font-title-md text-title-md text-on-surface truncate group-hover:text-<?= $p['dot'] ?> transition leading-tight"><?= $p['nombre'] ?></div>
                                <div class="font-label-sm text-label-sm text-on-surface-variant truncate"><?= $p['rol'] ?></div>
                                <div class="flex items-center gap-1.5 mt-1">
                                    <span class="px-1.5 py-0.2 rounded bg-<?= $p['rankColor'] ?> font-label-sm text-[9px] uppercase tracking-wider"><?= $p['rank'] ?></span>
                                    <span class="font-label-sm text-[10px] text-outline"><?= $p['nivel'] ?></span>
                                </div>
                            </div>
                            <span class="material-symbols-outlined text-outline group-hover:text-<?= $p['dot'] ?> group-hover:translate-x-0.5 transition text-[20px]">login</span>
                        </button>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- Separador -->
            <div class="relative flex items-center justify-center my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full h-[1px] bg-gradient-to-r from-transparent via-outline-variant to-transparent"></div>
                </div>
                <div class="relative px-4 bg-surface-container-low text-outline font-label-sm text-label-sm uppercase tracking-widest flex items-center gap-2">
                    <span class="text-tertiary">❖</span>
                    <span>O ACCEDE CON CREDENCIALES</span>
                    <span class="text-primary">❖</span>
                </div>
            </div>

            <!-- Form -->
            <form class="space-y-5" id="traditionalLoginForm" onsubmit="event.preventDefault(); window.executeLogin('Cazador Autenticado', 'S-TIER', 'Frecuencia de Red');">
                <div class="space-y-1.5">
                    <label class="block font-label-sm text-label-sm text-on-surface uppercase tracking-wider" for="hunterId">Email o ID de Cazador</label>
                    <div class="relative flex items-center rounded-lg bg-surface-container-lowest focus-within:shadow-[0_0_12px_rgba(76,215,246,0.35)] transition">
                        <span class="material-symbols-outlined absolute left-3.5 text-outline text-[20px] pointer-events-none">alternate_email</span>
                        <input id="hunterId" type="text" required class="w-full pl-11 pr-4 py-3 bg-transparent text-on-surface font-body-md text-body-md placeholder:text-outline-variant focus:outline-none" placeholder="cazador@auraverse.io o #REI-8849" />
                    </div>
                </div>
                <div class="space-y-1.5">
                    <div class="flex items-center justify-between">
                        <label class="block font-label-sm text-label-sm text-on-surface uppercase tracking-wider" for="spiritualKey">Contraseña o Clave Espiritual</label>
                        <a class="font-label-sm text-label-sm text-tertiary hover:underline" href="javascript:void(0)" onclick="window.showToast?.('Se ha enviado una sonda de recuperación astral.')">¿Olvidaste tu código de alma?</a>
                    </div>
                    <div class="relative flex items-center rounded-lg bg-surface-container-lowest focus-within:shadow-[0_0_12px_rgba(208,188,255,0.35)] transition">
                        <span class="material-symbols-outlined absolute left-3.5 text-outline text-[20px] pointer-events-none">key</span>
                        <input id="spiritualKey" type="password" required class="w-full pl-11 pr-12 py-3 bg-transparent text-on-surface font-body-md text-body-md placeholder:text-outline-variant focus:outline-none" placeholder="••••••••••••••••" />
                        <button type="button" class="absolute right-3.5 text-outline hover:text-on-surface transition flex items-center justify-center p-1 cursor-pointer" id="togglePasswordBtn">
                            <span class="material-symbols-outlined text-[20px]" id="passwordEyeIcon">visibility</span>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between pt-1">
                    <label class="flex items-center gap-2.5 cursor-pointer select-none">
                        <input type="checkbox" checked class="w-4 h-4 rounded bg-surface-container-lowest accent-primary cursor-pointer" />
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Recordarme en este dispositivo cuántico</span>
                    </label>
                    <span class="font-label-sm text-[11px] text-outline flex items-center gap-1">
                            <span class="material-symbols-outlined text-[13px] text-tertiary">verified_user</span>
                            Reiatsu Shield ACTIVO
                        </span>
                </div>
                <div class="pt-2">
                    <button type="submit" class="w-full relative group overflow-hidden rounded-lg p-0.5 font-headline-md text-headline-md tracking-wider uppercase text-surface-container-lowest cursor-pointer transition transform active:scale-[0.99] shadow-[0_0_20px_rgba(208,188,255,0.3)]">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary via-secondary to-tertiary group-hover:opacity-90 transition duration-300"></div>
                        <div class="relative py-3.5 px-6 rounded-md flex items-center justify-center gap-3 bg-gradient-to-r from-primary via-secondary to-tertiary text-on-primary-fixed">
                            <span class="material-symbols-outlined text-[24px]">power_settings_new</span>
                            <span>INICIAR SESIÓN // CONECTAR AURA</span>
                            <span class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition duration-300">arrow_forward</span>
                        </div>
                    </button>
                </div>
            </form>

            <!-- Bottom CTA -->
            <div class="mt-8 pt-6 border-t border-outline-variant/30 flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
                <div class="space-y-0.5">
                    <div class="font-title-md text-title-md text-on-surface">¿Primera vez en AuraVerse?</div>
                    <div class="font-body-sm text-body-sm text-on-surface-variant">Suscríbete ahora — 30 días de prueba con Reiatsu Ilimitado.</div>
                </div>
                <button type="button" class="px-4 py-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-primary font-label-md text-label-md uppercase tracking-wider transition whitespace-nowrap cursor-pointer shadow-sm" onclick="window.showToast?.('Redirigiendo a creación de contrato espiritual...')">
                    Crear Cuenta
                </button>
            </div>
        </div>

        <!-- Meta footer -->
        <div class="w-full max-w-2xl mt-6 px-2 flex flex-col sm:flex-row items-center justify-between gap-3 text-outline font-label-sm text-label-sm">
            <div class="flex items-center gap-4">
                <a class="hover:text-on-surface transition" href="#">Términos de Enlace</a>
                <span>•</span>
                <a class="hover:text-on-surface transition" href="#">Privacidad Cuántica</a>
                <span>•</span>
                <a class="hover:text-on-surface transition" href="#">Protocolo Anti-Hollow</a>
            </div>
            <div class="relative inline-flex items-center gap-1.5 text-on-surface-variant bg-surface-container px-2.5 py-1 rounded-md">
                <span class="material-symbols-outlined text-[15px] text-tertiary">translate</span>
                <select class="bg-transparent text-on-surface-variant font-label-sm text-label-sm uppercase focus:outline-none cursor-pointer">
                    <option class="bg-surface-container-high text-on-surface">Español (Latam)</option>
                    <option class="bg-surface-container-high text-on-surface">Español (Castellano)</option>
                    <option class="bg-surface-container-high text-on-surface">日本語 (Japanese)</option>
                </select>
            </div>
        </div>

        <!-- Modal Nuevo Perfil -->
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-surface-container-lowest/80 backdrop-blur-md hidden opacity-0 transition-opacity duration-300" id="newProfileModal">
            <div class="w-full max-w-md bg-surface-container-low rounded-xl p-6 relative shadow-[0_0_36px_rgba(160,120,255,0.25)]">
                <div class="flex items-center justify-between pb-3 mb-4 border-b border-outline-variant/30">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[22px]">badge</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface uppercase tracking-wide">Forjar Nuevo Perfil</h2>
                    </div>
                    <button type="button" class="text-outline hover:text-on-surface p-1 rounded-md transition cursor-pointer" id="btnCloseModal">
                        <span class="material-symbols-outlined text-[20px]">close</span>
                    </button>
                </div>
                <form class="space-y-4" id="newProfileForm">
                    <div>
                        <label class="block font-label-sm text-label-sm text-on-surface uppercase mb-1" for="newProfileName">Nombre de Cazador</label>
                        <input id="newProfileName" type="text" required class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container-lowest text-on-surface font-body-md text-body-md placeholder:text-outline-variant focus:outline-none focus:shadow-[0_0_10px_rgba(76,215,246,0.3)]" placeholder="Ej: Dante Kurogane" />
                    </div>
                    <div>
                        <label class="block font-label-sm text-label-sm text-on-surface uppercase mb-1" for="newProfileEmail">Email Astral</label>
                        <input id="newProfileEmail" type="email" required class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container-lowest text-on-surface font-body-md text-body-md placeholder:text-outline-variant focus:outline-none focus:shadow-[0_0_10px_rgba(76,215,246,0.3)]" placeholder="dante@astralgate.org" />
                    </div>
                    <div>
                        <label class="block font-label-sm text-label-sm text-on-surface uppercase mb-1.5">Aura de Resonancia</label>
                        <div class="flex items-center gap-3">
                            <label class="flex items-center gap-1.5 cursor-pointer">
                                <input type="radio" name="auraColor" value="violet" checked class="accent-primary" />
                                <span class="inline-block w-4 h-4 rounded-full bg-primary shadow-[0_0_8px_#d0bcff]"></span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Violeta</span>
                            </label>
                            <label class="flex items-center gap-1.5 cursor-pointer">
                                <input type="radio" name="auraColor" value="rose" class="accent-secondary" />
                                <span class="inline-block w-4 h-4 rounded-full bg-secondary shadow-[0_0_8px_#ffb2b7]"></span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Carmín</span>
                            </label>
                            <label class="flex items-center gap-1.5 cursor-pointer">
                                <input type="radio" name="auraColor" value="cyan" class="accent-tertiary" />
                                <span class="inline-block w-4 h-4 rounded-full bg-tertiary shadow-[0_0_8px_#4cd7f6]"></span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Cian</span>
                            </label>
                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-3 pt-3 border-t border-outline-variant/30">
                        <button type="button" class="px-4 py-2 rounded-lg bg-surface-container text-on-surface font-label-sm text-label-sm uppercase tracking-wider cursor-pointer" id="btnCancelModal">Cancelar</button>
                        <button type="submit" class="px-5 py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md font-bold uppercase tracking-wider shadow-[0_0_12px_rgba(208,188,255,0.4)] cursor-pointer">Guardar Perfil</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Overlay de sync -->
        <div class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-surface-container-lowest/95 backdrop-blur-xl hidden opacity-0 transition-opacity duration-300" id="syncOverlay">
            <div class="relative w-28 h-28 flex items-center justify-center mb-6">
                <div class="absolute inset-0 rounded-full border-4 border-primary-container/20 border-t-primary animate-spin"></div>
                <div class="absolute inset-2 rounded-full border-4 border-tertiary-container/20 border-b-tertiary animate-spin" style="animation-direction: reverse; animation-duration: 1.5s;"></div>
                <span class="material-symbols-outlined text-primary text-[44px] animate-pulse">electric_bolt</span>
            </div>
            <div class="font-headline-lg text-headline-lg text-on-surface tracking-wider text-center uppercase" id="syncUserName">SINCRONIZANDO REIATSU...</div>
            <div class="font-label-sm text-label-sm text-tertiary tracking-widest uppercase mt-2" id="syncUserMeta">ESTABLECIENDO ENLACE CON SHINJUKU MATRIX</div>
            <div class="w-64 h-1.5 bg-surface-container-highest rounded-full overflow-hidden mt-6 relative">
                <div class="h-full bg-gradient-to-r from-primary via-secondary to-tertiary w-0 transition-all duration-1000 ease-out shadow-[0_0_10px_#4cd7f6]" id="syncProgressBar"></div>
            </div>
        </div>

    </div>
</main>

<script>
    // ===== Toast simple =====
    window.showToast = function(message) {
        const toast = document.createElement('div');
        toast.className = 'fixed bottom-6 right-6 z-[100] flex items-center gap-3 px-space-md py-3 rounded-xl bg-surface-container-highest/95 backdrop-blur-md shadow-2xl text-on-surface';
        toast.innerHTML = '<span class="material-symbols-outlined text-tertiary">check_circle</span><span class="font-body-md text-body-md">' + message + '</span>';
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 3200);
    };

    (function () {
        const togglePasswordBtn = document.getElementById('togglePasswordBtn');
        const passwordInput = document.getElementById('spiritualKey');
        const passwordEyeIcon = document.getElementById('passwordEyeIcon');
        const btnOpenNewProfile = document.getElementById('btnOpenNewProfile');
        const btnCloseModal = document.getElementById('btnCloseModal');
        const btnCancelModal = document.getElementById('btnCancelModal');
        const newProfileModal = document.getElementById('newProfileModal');
        const newProfileForm = document.getElementById('newProfileForm');
        const profilesContainer = document.getElementById('profilesContainer');
        const syncOverlay = document.getElementById('syncOverlay');
        const syncUserName = document.getElementById('syncUserName');
        const syncUserMeta = document.getElementById('syncUserMeta');
        const syncProgressBar = document.getElementById('syncProgressBar');

        // Password toggle
        togglePasswordBtn?.addEventListener('click', () => {
            const isPassword = passwordInput.getAttribute('type') === 'password';
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
            passwordEyeIcon.textContent = isPassword ? 'visibility_off' : 'visibility';
        });

        // Login simulate
        window.executeLogin = function(name, rank, energy) {
            syncUserName.textContent = 'SINCRONIZANDO // ' + name.toUpperCase();
            syncUserMeta.textContent = 'VÍNCULO ASTRAL: [' + rank + '] • ENERGÍA: ' + energy;
            syncOverlay.classList.remove('hidden');
            setTimeout(() => {
                syncOverlay.classList.remove('opacity-0');
                syncProgressBar.style.width = '100%';
            }, 50);

            // Guardar en localStorage
            localStorage.setItem('auraverse_active_user', JSON.stringify({
                name: name, rank: rank, energy: energy, timestamp: Date.now()
            }));

            setTimeout(() => {
                syncUserMeta.textContent = 'CONEXIÓN ESTABLECIDA • BIENVENIDO AL COLISEO';
                setTimeout(() => {
                    window.location.href = '/';
                }, 800);
            }, 1400);
        };

        // Bind profiles
        function bindProfileCards() {
            document.querySelectorAll('.profile-card').forEach(card => {
                card.onclick = function () {
                    const name   = this.getAttribute('data-profile-name') || 'Cazador';
                    const rank   = this.getAttribute('data-profile-rank') || 'A-TIER';
                    const energy = this.getAttribute('data-profile-energy') || 'Reiatsu';
                    window.executeLogin(name, rank, energy);
                };
            });
        }
        bindProfileCards();

        // Modal
        function openModal() {
            newProfileModal.classList.remove('hidden');
            setTimeout(() => newProfileModal.classList.remove('opacity-0'), 20);
        }
        function closeModal() {
            newProfileModal.classList.add('opacity-0');
            setTimeout(() => newProfileModal.classList.add('hidden'), 300);
        }

        btnOpenNewProfile?.addEventListener('click', openModal);
        btnCloseModal?.addEventListener('click', closeModal);
        btnCancelModal?.addEventListener('click', closeModal);

        // Perfiles custom
        const LOCAL_KEY = 'auraverse_custom_profiles';

        function renderProfileItem(p) {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'profile-card group text-left p-3 rounded-lg bg-surface-container hover:bg-surface-container-high transition-all duration-300 flex items-center gap-3 relative overflow-hidden cursor-pointer shadow-md';
            btn.setAttribute('data-profile-name', p.name);
            btn.setAttribute('data-profile-rank', p.rank);
            btn.setAttribute('data-profile-energy', p.energy);

            const colorMap = {
                violet: { dot: 'bg-primary', tag: 'bg-primary-container/20 text-primary', hover: 'group-hover:text-primary' },
                rose:   { dot: 'bg-secondary', tag: 'bg-secondary-container/20 text-secondary', hover: 'group-hover:text-secondary' },
                cyan:   { dot: 'bg-tertiary', tag: 'bg-tertiary-container/30 text-tertiary', hover: 'group-hover:text-tertiary' }
            };
            const c = colorMap[p.auraColor] || colorMap.violet;

            btn.innerHTML = `
                    <div class="w-12 h-12 rounded-lg relative flex-shrink-0 overflow-hidden bg-surface-container-highest flex items-center justify-center">
                        <span class="material-symbols-outlined text-[24px] text-on-surface">shield_person</span>
                        <span class="absolute bottom-0 right-0 w-3 h-3 ${c.dot} rounded-full"></span>
                    </div>
                    <div class="min-w-0 flex-1">
                        <div class="font-title-md text-title-md text-on-surface truncate ${c.hover} transition leading-tight">${p.name}</div>
                        <div class="font-label-sm text-label-sm text-on-surface-variant truncate">Cazador Personalizado</div>
                        <div class="flex items-center gap-1.5 mt-1">
                            <span class="px-1.5 py-0.2 rounded ${c.tag} font-label-sm text-[9px] uppercase tracking-wider">${p.rank}</span>
                            <span class="font-label-sm text-[10px] text-outline">Lv.75</span>
                        </div>
                    </div>
                    <span class="material-symbols-outlined text-outline ${c.hover} group-hover:translate-x-0.5 transition text-[20px]">login</span>
                `;

            profilesContainer.appendChild(btn);
            bindProfileCards();
        }

        newProfileForm?.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = document.getElementById('newProfileName').value.trim() || 'Nuevo Cazador';
            const email = document.getElementById('newProfileEmail').value.trim();
            const auraInput = document.querySelector('input[name="auraColor"]:checked');

            const newProfile = {
                name: name, email: email, rank: 'A-RANK',
                energy: 'Reiatsu Personal',
                auraColor: auraInput ? auraInput.value : 'violet'
            };

            try {
                const list = JSON.parse(localStorage.getItem(LOCAL_KEY) || '[]');
                list.push(newProfile);
                localStorage.setItem(LOCAL_KEY, JSON.stringify(list));
            } catch (err) {}

            renderProfileItem(newProfile);
            closeModal();
            newProfileForm.reset();
            window.showToast('Perfil creado con éxito');
        });

        // Cargar perfiles custom
        try {
            const stored = localStorage.getItem(LOCAL_KEY);
            if (stored) {
                JSON.parse(stored).forEach(renderProfileItem);
            }
        } catch (e) {}
    })();
</script>
</body>
</html>