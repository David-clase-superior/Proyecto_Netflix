<!DOCTYPE html>

<html class="dark" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="web_standard" name="shell-type"/>
    <title>StreamBlue</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
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
                        "error-container": "#93000a",
                        "secondary": "#4cd7f6",
                        "secondary-fixed": "#acedff",
                        "tertiary-fixed-dim": "#bdc2ff",
                        "surface-dim": "#0f131d",
                        "on-primary": "#002e6a",
                        "surface-bright": "#353944",
                        "surface-container-highest": "#31353f",
                        "background": "#0f131d",
                        "on-surface-variant": "#c2c6d6",
                        "on-tertiary-fixed": "#000767",
                        "on-primary-container": "#00285d",
                        "primary": "#adc6ff",
                        "tertiary": "#bdc2ff",
                        "on-secondary-container": "#00424e",
                        "primary-fixed-dim": "#adc6ff",
                        "error": "#ffb4ab",
                        "on-background": "#dfe2f0",
                        "tertiary-container": "#7c87f3",
                        "on-error-container": "#ffdad6",
                        "surface-container": "#1b2029",
                        "on-primary-fixed-variant": "#004395",
                        "on-secondary-fixed": "#001f26",
                        "on-primary-fixed": "#001a42",
                        "on-tertiary": "#131e8c",
                        "primary-fixed": "#d8e2ff",
                        "secondary-container": "#03b5d3",
                        "surface-container-low": "#171c25",
                        "primary-container": "#4d8eff",
                        "surface-container-lowest": "#0a0e17",
                        "secondary-fixed-dim": "#4cd7f6",
                        "on-surface": "#dfe2f0",
                        "tertiary-fixed": "#e0e0ff",
                        "on-secondary-fixed-variant": "#004e5c",
                        "surface-variant": "#31353f",
                        "on-error": "#690005",
                        "on-tertiary-fixed-variant": "#2f3aa3",
                        "outline": "#8c909f",
                        "surface-tint": "#adc6ff",
                        "inverse-surface": "#dfe2f0",
                        "surface": "#0f131d",
                        "surface-container-high": "#262a34",
                        "on-tertiary-container": "#081486",
                        "inverse-on-surface": "#2c303b",
                        "inverse-primary": "#005ac2",
                        "outline-variant": "#424754",
                        "on-secondary": "#003640"
                    },
                    "borderRadius": {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                    "spacing": {
                        "gutter-mobile": "0.75rem",
                        "space-sm": "0.5rem",
                        "space-md": "1rem",
                        "space-xl": "2.5rem",
                        "margin": "3.5rem",
                        "space-lg": "1.5rem",
                        "gutter": "1.25rem",
                        "space-xs": "0.25rem",
                        "margin-mobile": "1.25rem"
                    },
                    "fontFamily": {
                        "display-hero-mobile": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-sm": ["Inter"],
                        "headline-xl-mobile": ["Inter"],
                        "label-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-xl": ["Inter"],
                        "body-sm": ["Inter"],
                        "label-badge": ["Inter"],
                        "display-hero": ["Inter"],
                        "label-lg": ["Inter"]
                    },
                    "fontSize": {
                        "display-hero-mobile": ["32px", {
                            "lineHeight": "38px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "800"
                        }],
                        "headline-lg": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "headline-sm": ["16px", {"lineHeight": "24px", "fontWeight": "600"}],
                        "headline-xl-mobile": ["26px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.015em",
                            "fontWeight": "700"
                        }],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "headline-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "headline-xl": ["36px", {"lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-sm": ["12px", {"lineHeight": "16px", "fontWeight": "400"}],
                        "label-badge": ["10px", {"lineHeight": "12px", "letterSpacing": "0.05em", "fontWeight": "700"}],
                        "display-hero": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "800"}],
                        "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600"}]
                    }
                }
            }
        };</script>
</head>
<body class="bg-surface text-on-surface font-body-md text-body-md min-h-screen selection:bg-secondary-container selection:text-on-secondary-container">
<header class="fixed top-0 left-0 right-0 z-50 bg-surface-container-lowest/80 backdrop-blur-xl shadow-[0_4px_30px_rgba(3,181,211,0.06)]">
    <div class="h-16 w-full px-margin-mobile lg:px-margin flex items-center justify-between gap-gutter">
        <div class="flex items-center gap-space-lg">
            <div class="flex items-center gap-space-sm"><img alt="StreamBlue Brand Logo"
                                                             class="h-8 w-auto object-contain"
                                                             src="https://lh3.googleusercontent.com/aida/AEtjO1XG2ogkVN0q-K2KPnFJ0TEyZRbGZC4vEzZmGyovjEJd6n2Gg4pl949I33leFOR5DFL2JGwceCjQV1bM3uubJh2tGLQb_pJSa6IJJ1ocH-x5lqkb76rINGDsyJxMJKKru7z-yYaLhxSX2b7djj-M7ttzl2hDP4G0FjBqi3oL6RIKMNbB7O0wEvgpGE81yqCv4MMcrdL0BoS9Blh9TSTM6EfjTik6RNj16LCYXbBV4ccBUdcdiMdgKHwWoss"/><span
                    class="font-headline-sm text-headline-sm text-primary tracking-wider uppercase hidden sm:inline-block">StreamBlue</span>
            </div>
            <nav class="hidden xl:flex items-center gap-space-md"
                 data-active-classes="bg-primary-container text-on-primary-container font-headline-sm rounded-lg px-space-sm py-space-xs">
                <a aria-current="page"
                   class="transition-colors bg-primary-container text-on-primary-container font-headline-sm rounded-lg px-space-sm py-space-xs"
                   data-path="inicio" href="#">Inicio</a><a
                    class="text-on-surface-variant hover:text-on-surface transition-colors font-label-lg text-label-lg"
                    data-path="peliculas" href="#">Películas</a><a
                    class="text-on-surface-variant hover:text-on-surface transition-colors font-label-lg text-label-lg"
                    data-path="series" href="#">Series</a><a
                    class="relative text-on-surface-variant hover:text-on-surface transition-colors font-label-lg text-label-lg flex items-center gap-space-xs"
                    data-path="videojuegos" href="#">Videojuegos<span
                        class="px-1.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-badge text-label-badge uppercase tracking-wider">Nuevo</span></a><a
                    class="text-on-surface-variant hover:text-on-surface transition-colors font-label-lg text-label-lg"
                    data-path="mi-lista" href="#">Mi Lista</a><a
                    class="text-on-surface-variant hover:text-on-surface transition-colors font-label-lg text-label-lg"
                    data-path="novedades-populares" href="#">Novedades populares</a></nav>
        </div>
        <div class="flex items-center gap-space-md">
            <div class="relative hidden md:flex items-center"><span
                    class="material-symbols-outlined absolute left-space-sm text-outline text-[18px]">search</span><input
                    class="w-48 lg:w-64 pl-9 pr-space-sm py-1.5 bg-surface-container-high text-on-surface placeholder:text-outline rounded-full text-body-sm font-body-sm outline-none focus:ring-1 focus:ring-secondary transition-all"
                    placeholder="Títulos, géneros, juegos..." type="search"/></div>
            <button class="relative p-space-xs text-on-surface-variant hover:text-on-surface transition-colors flex items-center justify-center"
                    type="button"><span class="material-symbols-outlined text-[22px]">notifications</span><span
                    class="absolute top-0.5 right-0.5 w-2 h-2 rounded-full bg-secondary"></span></button>
            <div class="flex items-center gap-space-sm pl-space-xs">
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span
                        class="material-symbols-outlined text-on-primary text-[18px]">person</span></div>
                <span class="hidden lg:inline-block font-label-md text-label-md text-on-surface">Alex Rivera</span><span
                    class="material-symbols-outlined text-outline text-[18px]">arrow_drop_down</span></div>
        </div>
    </div>
</header>
