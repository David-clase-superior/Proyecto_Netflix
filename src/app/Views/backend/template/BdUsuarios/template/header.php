<!DOCTYPE html>

<html class="dark" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="web_dashboard" name="shell-type"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&amp;family=Space+Grotesk:wght@500;600;700&amp;family=Space+Mono:wght@400;700&amp;display=swap"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
          rel="stylesheet"/>
    <style>@layer base {
            html, body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main > :first-child {
                margin-top: 0 !important;
            }

            main > :last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }</style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">tailwind.config = {
            darkMode: "class", theme: {
                extend: {
                    "colors": {
                        "inverse-surface": "#e4e1ed",
                        "secondary-fixed-dim": "#dfb7ff",
                        "surface-container-highest": "#34343d",
                        "surface-container-high": "#292932",
                        "on-error": "#690005",
                        "on-error-container": "#ffdad6",
                        "primary-fixed": "#7df4ff",
                        "background": "#13131b",
                        "primary-fixed-dim": "#00dbe9",
                        "secondary-fixed": "#f1daff",
                        "on-secondary-fixed-variant": "#6b00b0",
                        "on-secondary-container": "#f7e6ff",
                        "outline": "#849495",
                        "on-secondary-fixed": "#2d004f",
                        "on-surface": "#e4e1ed",
                        "tertiary": "#fff3f3",
                        "outline-variant": "#3b494b",
                        "on-tertiary-fixed": "#40000f",
                        "surface-container-lowest": "#0d0d16",
                        "inverse-primary": "#006970",
                        "inverse-on-surface": "#302f39",
                        "surface-tint": "#00dbe9",
                        "tertiary-fixed-dim": "#ffb2b8",
                        "surface-dim": "#13131b",
                        "primary": "#dbfcff",
                        "on-tertiary": "#67001d",
                        "primary-container": "#00f0ff",
                        "surface-container-low": "#1b1b23",
                        "on-background": "#e4e1ed",
                        "secondary": "#dfb7ff",
                        "secondary-container": "#9d05ff",
                        "on-primary": "#00363a",
                        "on-tertiary-container": "#be003d",
                        "tertiary-container": "#ffcdd0",
                        "on-surface-variant": "#b9cacb",
                        "on-tertiary-fixed-variant": "#91002d",
                        "error": "#ffb4ab",
                        "on-primary-container": "#006970",
                        "surface-variant": "#34343d",
                        "surface": "#13131b",
                        "tertiary-fixed": "#ffdadb",
                        "on-primary-fixed": "#002022",
                        "on-secondary": "#4b007e",
                        "surface-bright": "#393842",
                        "surface-container": "#1f1f27",
                        "on-primary-fixed-variant": "#004f54",
                        "error-container": "#93000a"
                    },
                    "borderRadius": {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
                    "spacing": {
                        "space-xl": "2.5rem",
                        "space-md": "1rem",
                        "margin": "2rem",
                        "margin-desktop": "4rem",
                        "space-2xl": "4rem",
                        "margin-mobile": "1.25rem",
                        "space-xs": "0.25rem",
                        "gutter": "1.5rem",
                        "gutter-desktop": "2rem",
                        "gutter-mobile": "1rem",
                        "space-lg": "1.5rem",
                        "space-sm": "0.5rem"
                    },
                    "fontFamily": {
                        "label-sm": ["Space Mono"],
                        "headline-lg-mobile": ["Space Grotesk"],
                        "headline-md": ["Space Grotesk"],
                        "headline-lg": ["Space Grotesk"],
                        "title-md": ["Geist"],
                        "body-md": ["Geist"],
                        "display-hero": ["Space Grotesk"],
                        "display-hero-mobile": ["Space Grotesk"],
                        "headline-sm": ["Space Grotesk"],
                        "body-lg": ["Geist"],
                        "label-lg": ["Space Mono"],
                        "body-sm": ["Geist"],
                        "label-md": ["Space Mono"]
                    },
                    "fontSize": {
                        "label-sm": ["9px", {"lineHeight": "12px", "letterSpacing": "0.12em", "fontWeight": "500"}],
                        "headline-lg-mobile": ["28px", {
                            "lineHeight": "34px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-md": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "headline-lg": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                        "title-md": ["16px", {"lineHeight": "24px", "fontWeight": "600"}],
                        "body-md": ["14px", {"lineHeight": "22px", "fontWeight": "400"}],
                        "display-hero": ["64px", {"lineHeight": "72px", "letterSpacing": "-0.03em", "fontWeight": "700"}],
                        "display-hero-mobile": ["36px", {
                            "lineHeight": "44px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "500"}],
                        "body-lg": ["16px", {"lineHeight": "26px", "fontWeight": "400"}],
                        "label-lg": ["13px", {"lineHeight": "18px", "letterSpacing": "0.08em", "fontWeight": "700"}],
                        "body-sm": ["12px", {"lineHeight": "18px", "fontWeight": "400"}],
                        "label-md": ["11px", {"lineHeight": "16px", "letterSpacing": "0.1em", "fontWeight": "500"}]
                    }
                }
            }
        }</script>
</head>
<body class="bg-background font-body-md text-on-surface antialiased selection:bg-primary-container selection:text-on-primary-container">
<aside class="fixed left-0 top-0 h-full w-72 bg-surface-container-lowest/90 backdrop-blur-2xl z-50 flex flex-col justify-between p-space-md shadow-[0_0_30px_rgba(0,0,0,0.8)]">
    <div class="flex flex-col gap-space-lg">
        <div class="flex items-center gap-space-sm px-space-xs pt-space-xs"><img alt="CYBERSTREAM Emblem"
                                                                                 class="h-8 w-auto object-contain"
                                                                                 src="https://lh3.googleusercontent.com/aida/ALJJyrDM-OlqSxEk3kRYj_ALlXRxy2vIldJHUQXUWthUQTCqFDj2PifVk7OIbAqPgJut8oabpzAQVSjzPtTezxK3C6J4n6xJmpQuTingNi2rOAeOBqR_xjA25yjOt23LxNbtidI7I8wGNfv8ptiGAwHh5yZEMHjFTRhA8f5KptfkZXXntrtBwNt5Ui3G6uA7mcRlc6Zhi7Ino4wdoNyqNb_YXh1zEBCKSDHKORCIrtszSUMC8g"/>
            <div class="flex flex-col"><span
                    class="font-headline-sm text-headline-sm font-bold tracking-tight text-primary uppercase">NEXUS CINE</span><span
                    class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">// NET OS v4.09</span>
            </div>
        </div>
        <div class="flex items-center gap-space-xs px-space-sm py-space-xs rounded bg-surface-container-high/60 backdrop-blur-md">
            <span class="w-2 h-2 rounded-full bg-primary-container animate-pulse"></span><span
                class="font-label-sm text-label-sm text-on-surface-variant uppercase">TELEMETRY: DOCK LOCKED</span>
        </div>
        <nav class="flex flex-col gap-space-xs"
             data-active-classes="bg-primary-container text-on-primary-container font-bold"><a
                class="flex items-center gap-space-sm px-space-md py-space-sm rounded text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all"
                data-path="catalogo-de-peliculas" href="#"><span
                    class="material-symbols-outlined text-primary-fixed-dim">movie</span><span
                    class="font-label-lg text-label-lg uppercase tracking-wider">Catálogo</span></a><a aria-current="page"
                                                                                                       class="flex items-center gap-space-sm px-space-md py-space-sm rounded transition-all bg-primary-container text-on-primary-container font-bold"
                                                                                                       data-path="gestor-de-usuarios"
                                                                                                       href="#"><span
                    class="material-symbols-outlined text-secondary">group</span><span
                    class="font-label-lg text-label-lg uppercase tracking-wider">Usuarios</span></a><a
                class="flex items-center gap-space-sm px-space-md py-space-sm rounded text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all"
                data-path="portal-de-acceso" href="#"><span
                    class="material-symbols-outlined text-outline">lock_open</span><span
                    class="font-label-lg text-label-lg uppercase tracking-wider">Acceso / Auth</span></a></nav>
    </div>
    <div class="flex flex-col gap-space-xs p-space-sm rounded bg-surface-container-low/80 backdrop-blur-sm">
        <div class="flex justify-between items-center"><span
                class="font-label-sm text-label-sm text-on-surface-variant uppercase">CLUSTER CORES</span><span
                class="font-label-sm text-label-sm text-primary font-bold">ONLINE</span></div>
        <div class="w-full h-1 bg-surface-container-highest rounded overflow-hidden">
            <div class="h-full w-4/5 bg-secondary-container"></div>
        </div>
        <span class="font-label-sm text-label-sm text-outline-variant pt-space-xs">ENC_KEY: 0x9D05FF_CYBER</span></div>
</aside>
<div class="pl-72">
    <header class="fixed top-0 left-72 right-0 z-40 bg-surface-container-lowest/80 backdrop-blur-xl">
        <div class="h-16 w-full px-space-lg flex items-center justify-between gap-space-md">
            <div class="flex items-center gap-space-lg flex-1">
                <div class="relative flex items-center w-full max-w-md"><span
                        class="material-symbols-outlined absolute left-space-sm text-primary-fixed-dim pointer-events-none text-body-lg">search</span><input
                        class="w-full pl-10 pr-space-md py-space-xs bg-surface-container-high/70 text-on-surface placeholder:text-outline font-label-md text-label-md rounded focus:outline-none focus:bg-surface-container-highest transition-all"
                        placeholder="INICIAR BÚSQUEDA HOLOGRÁFICA..." type="text"/></div>
                <nav class="hidden xl:flex items-center gap-space-md"
                     data-active-classes="bg-surface-container-highest text-primary-container font-bold rounded"><a
                        class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant hover:text-on-surface px-space-sm py-space-xs transition-colors"
                        data-path="catalogo-de-peliculas" href="#">Películas</a><a aria-current="page"
                                                                                   class="uppercase tracking-wider px-space-sm py-space-xs transition-colors bg-surface-container-highest text-primary-container font-bold rounded"
                                                                                   data-path="gestor-de-usuarios"
                                                                                   href="#">Directorio</a><a
                        class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant hover:text-on-surface px-space-sm py-space-xs transition-colors"
                        data-path="portal-de-acceso" href="#">Terminal Login</a></nav>
            </div>
            <div class="flex items-center gap-space-md">
                <div class="hidden sm:flex items-center gap-space-xs px-space-sm py-space-xs rounded bg-surface-container-high/80">
                    <span class="w-2 h-2 rounded-full bg-primary-container animate-ping"></span><span
                        class="font-label-md text-label-md text-primary font-bold uppercase tracking-wider">NET: ONLINE 99.9%</span>
                </div>
                <div class="flex items-center gap-space-xs">
                    <button class="w-9 h-9 flex items-center justify-center rounded bg-surface-container-high text-on-surface-variant hover:bg-surface-container-highest hover:text-on-surface transition-colors">
                        <span class="material-symbols-outlined text-body-lg">notifications</span></button>
                    <button class="w-9 h-9 flex items-center justify-center rounded bg-surface-container-high text-on-surface-variant hover:bg-surface-container-highest hover:text-on-surface transition-colors">
                        <span class="material-symbols-outlined text-body-lg">terminal</span></button>
                </div>
                <div class="flex items-center gap-space-sm pl-space-xs">
                    <div class="flex flex-col text-right hidden md:block"><span
                            class="font-label-md text-label-md font-bold text-on-surface uppercase">OPERADOR_01</span><span
                            class="font-label-sm text-label-sm text-secondary uppercase">SYS_ADMIN</span></div>
                    <img alt="Profile" class="w-8 h-8 rounded-full object-cover"
                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-sAJodFdk-5yEkKoVdLDo9-AesBqGk8WGchyEP365h_MhY4k0wzD048pW6DhOIt3OykkK6Y9oiXRBxF4jF7nIwvY2faukzZtOhgwLgpXQhf3InFzRiYI-8HieztfEKh21wrMpCA9zQxnrXPJwJ7zk9m6aZn0Fr-2PQg5mB8wX3bb7Yum4pYk2nEtTIfIWvtZXxXOu8aj1I_HAPg3A8VSZY9jhUd1_puQxxnbhDZtu"/>
                </div>
            </div>
        </div>
    </header>
