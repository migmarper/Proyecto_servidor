<?php
$title     = $title     ?? 'Panel de Control | AuraVerse Nexus';
$shellType = $shellType ?? 'web_dashboard';
?>
<!DOCTYPE html>
<html class="dark" lang="es">
<head>
    <style>
        #line-clamp-2 { -webkit-line-clamp: 2; }
        #line-clamp-3 { -webkit-line-clamp: 3; }
    </style>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="<?= htmlspecialchars($shellType) ?>" name="shell-type" />
    <title><?= htmlspecialchars($title) ?></title>

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;600;700&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-error-container":"#ffdad6","outline":"#958ea0","primary-container":"#a078ff",
                        "inverse-primary":"#6d3bd7","surface-container-low":"#1c1a25","on-surface-variant":"#cbc3d7",
                        "on-error":"#690005","on-background":"#e5e0f0","error":"#ffb4ab",
                        "on-primary-fixed-variant":"#5516be","error-container":"#93000a","surface-container-highest":"#35333f",
                        "surface-container-lowest":"#0e0d17","background":"#13121d","on-tertiary-fixed-variant":"#004e5c",
                        "surface":"#13121d","inverse-surface":"#e5e0f0","secondary":"#ffb2b7","surface-variant":"#35333f",
                        "surface-container-high":"#2a2934","on-secondary-fixed":"#40000d","on-tertiary-container":"#002f38",
                        "surface-container":"#201e29","tertiary":"#4cd7f6","on-secondary-fixed-variant":"#92002a",
                        "tertiary-fixed-dim":"#4cd7f6","on-primary-fixed":"#23005c","secondary-fixed":"#ffdadb",
                        "on-surface":"#e5e0f0","secondary-container":"#b50036","on-secondary":"#67001b",
                        "inverse-on-surface":"#312f3b","secondary-fixed-dim":"#ffb2b7","tertiary-fixed":"#acedff",
                        "primary-fixed":"#e9ddff","on-tertiary":"#003640","on-primary-container":"#340080",
                        "outline-variant":"#494454","tertiary-container":"#009eb9","on-primary":"#3c0091",
                        "primary-fixed-dim":"#d0bcff","on-tertiary-fixed":"#001f26","surface-bright":"#3a3844",
                        "surface-tint":"#d0bcff","on-secondary-container":"#ffc2c4","surface-dim":"#13121d",
                        "primary":"#d0bcff"
                    },
                    borderRadius: { "DEFAULT":"0.125rem","lg":"0.25rem","xl":"0.5rem","full":"0.75rem" },
                    spacing: {
                        "space-md":"1rem","space-lg":"1.5rem","gutter-sm":"1rem","space-sm":"0.5rem",
                        "space-xs":"0.25rem","space-xl":"2.5rem","margin-lg":"4rem","margin-sm":"1rem",
                        "gutter-lg":"2rem","margin":"2rem","gutter":"1.5rem"
                    },
                    fontFamily: {
                        "body-sm":["Montserrat"],"label-sm":["Space Grotesk"],"body-lg":["Montserrat"],
                        "headline-lg":["Bebas Neue"],"label-lg":["Space Grotesk"],"label-md":["Space Grotesk"],
                        "display-hero":["Bebas Neue"],"headline-xl":["Bebas Neue"],"display-hero-mobile":["Bebas Neue"],
                        "title-md":["Montserrat"],"title-lg":["Montserrat"],"headline-xl-mobile":["Bebas Neue"],
                        "body-md":["Montserrat"],"headline-md":["Bebas Neue"]
                    },
                    fontSize: {
                        "body-sm":["12px",{"lineHeight":"18px","fontWeight":"400"}],
                        "label-sm":["10px",{"lineHeight":"14px","letterSpacing":"0.08em","fontWeight":"600"}],
                        "body-lg":["16px",{"lineHeight":"26px","fontWeight":"400"}],
                        "headline-lg":["32px",{"lineHeight":"36px","letterSpacing":"0.03em","fontWeight":"400"}],
                        "label-lg":["14px",{"lineHeight":"18px","letterSpacing":"0.08em","fontWeight":"700"}],
                        "label-md":["12px",{"lineHeight":"16px","letterSpacing":"0.06em","fontWeight":"600"}],
                        "display-hero":["72px",{"lineHeight":"72px","letterSpacing":"0.05em","fontWeight":"400"}],
                        "headline-xl":["48px",{"lineHeight":"52px","letterSpacing":"0.04em","fontWeight":"400"}],
                        "display-hero-mobile":["44px",{"lineHeight":"48px","letterSpacing":"0.05em","fontWeight":"400"}],
                        "title-md":["16px",{"lineHeight":"24px","fontWeight":"600"}],
                        "title-lg":["20px",{"lineHeight":"28px","fontWeight":"700"}],
                        "headline-xl-mobile":["34px",{"lineHeight":"38px","letterSpacing":"0.03em","fontWeight":"400"}],
                        "body-md":["14px",{"lineHeight":"22px","fontWeight":"400"}],
                        "headline-md":["24px",{"lineHeight":"28px","letterSpacing":"0.02em","fontWeight":"400"}]
                    }
                }
            }
        };
    </script>
</head>