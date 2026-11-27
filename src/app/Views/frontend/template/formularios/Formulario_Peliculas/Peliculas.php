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
                class="font-label-lg text-label-lg uppercase tracking-wider">Catálogo</span></a><a
                class="flex items-center gap-space-sm px-space-md py-space-sm rounded text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all"
                data-path="gestor-de-usuarios" href="#"><span
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
                        data-path="catalogo-de-peliculas" href="#">Películas</a><a
                        class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant hover:text-on-surface px-space-sm py-space-xs transition-colors"
                        data-path="gestor-de-usuarios" href="#">Directorio</a><a
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
    <main class="w-full pt-16 min-h-screen bg-background">
        <div class="flex flex-col w-full">
            <div class="px-space-md sm:px-space-lg lg:px-space-xl py-space-lg max-w-[1720px] mx-auto w-full">
                <!-- Top System Breadcrumb & Page Meta -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md pb-space-lg border-b border-surface-container-highest/60">
                    <div class="flex flex-col gap-space-xs">
                        <div class="flex items-center gap-space-xs font-label-sm text-label-sm text-primary-fixed-dim uppercase tracking-widest">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary-container animate-pulse"></span>
                            <span>// ARCHIVO_CINEMATOGRÁFICO / INGESTA DE TRANSMISIÓN // V9.1</span>
                        </div>
                        <h1 class="font-headline-lg text-headline-lg text-primary font-bold tracking-tight uppercase">
                            NUEVA PELÍCULA <span class="text-secondary">// REGISTRO EN EL CATÁLOGO</span>
                        </h1>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
                            Cargue el stream holográfico y metadatos para la distribución directa en los nodos
                            neuronales del megasector. Verifique integridad de hashes antes de la inyección en red.
                        </p>
                    </div>
                    <!-- Quick Telemetry Micro-Pill -->
                    <div class="flex items-center gap-space-sm bg-surface-container-low p-space-sm rounded-lg shadow-xl">
                        <div class="flex flex-col items-end">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">NODO ENLACE</span>
                            <span class="font-label-md text-label-md text-primary font-bold">ALPHA-SECTOR 07</span>
                        </div>
                        <div class="h-8 w-px bg-surface-container-highest"></div>
                        <div class="flex flex-col">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">BITRATE TOPE</span>
                            <span class="font-label-md text-label-md text-secondary font-bold">144.2 GBPS</span>
                        </div>
                    </div>
                </div>
                <!-- Main Grid: 8 cols Form + 4 cols Dynamic Hologram Card Preview -->
                <div class="grid grid-cols-1 xl:grid-cols-12 gap-space-xl pt-space-xl">
                    <!-- FORM COLUMN (8 cols) -->
                    <div class="xl:col-span-8 flex flex-col gap-space-xl">
                        <!-- Section 1: Main Identification (Title & Synopsys) -->
                        <section
                                class="bg-surface-container-low/70 backdrop-blur-xl p-space-lg rounded-xl flex flex-col gap-space-lg shadow-2xl relative overflow-hidden">
                            <div class="absolute -right-16 -top-16 w-48 h-48 bg-primary-container/5 rounded-full blur-3xl pointer-events-none"></div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-space-xs">
                                    <span class="material-symbols-outlined text-primary-fixed-dim">movie_filter</span>
                                    <h2 class="font-title-md text-title-md text-on-surface uppercase tracking-wide">
                                        Identificación de Transmisión
                                    </h2>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary bg-secondary-container/20 px-space-xs py-0.5 rounded">
              PRIORIDAD_01
            </span>
                            </div>
                            <!-- Title Input -->
                            <div class="flex flex-col gap-space-xs">
                                <div class="flex justify-between items-center">
                                    <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider"
                                           for="movie-title-input">
                                        NOMBRE DE LA PELÍCULA / TÍTULO DEL STREAM
                                    </label>
                                    <span class="font-label-sm text-label-sm text-outline font-mono" id="title-counter">29 / 80 CHARS</span>
                                </div>
                                <div class="relative flex items-center">
                                    <span class="material-symbols-outlined absolute left-space-md text-primary-fixed-dim pointer-events-none">videocam</span>
                                    <input class="w-full pl-12 pr-space-md py-space-sm bg-surface-container-highest text-primary font-headline-sm text-headline-sm rounded-lg focus:outline-none focus:ring-1 focus:ring-primary-container transition-all shadow-inner"
                                           id="movie-title-input" maxlength="80"
                                           placeholder="EJ. CYBERSIN: DESPERTAR BINARIO" type="text"
                                           value="NEURONET: PROTOCOLO SOMBRA"/>
                                </div>
                            </div>
                            <!-- Synopsis Textarea -->
                            <div class="flex flex-col gap-space-xs">
                                <div class="flex justify-between items-center">
                                    <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider"
                                           for="movie-synopsis-input">
                                        DESCRIPCIÓN / SINOPSIS NARRATIVA
                                    </label>
                                    <div class="flex items-center gap-space-sm">
                                        <span class="font-label-sm text-label-sm text-secondary-fixed-dim uppercase">[PARSER MD ACTIVO]</span>
                                        <span class="font-label-sm text-label-sm text-outline font-mono"
                                              id="synopsis-counter">194 / 500 CHARS</span>
                                    </div>
                                </div>
                                <div class="bg-surface-container-highest rounded-lg overflow-hidden flex flex-col shadow-inner">
                                    <!-- Rich formatting micro-toolbar -->
                                    <div class="bg-surface-container-high px-space-sm py-space-xs flex items-center justify-between border-b border-surface-container-highest">
                                        <div class="flex items-center gap-1">
                                            <button class="w-7 h-7 flex items-center justify-center rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-highest transition-colors"
                                                    type="button">
                                                <span class="material-symbols-outlined text-body-md">format_bold</span>
                                            </button>
                                            <button class="w-7 h-7 flex items-center justify-center rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-highest transition-colors"
                                                    type="button">
                                                <span class="material-symbols-outlined text-body-md">format_italic</span>
                                            </button>
                                            <button class="w-7 h-7 flex items-center justify-center rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-highest transition-colors"
                                                    type="button">
                                                <span class="material-symbols-outlined text-body-md">code</span>
                                            </button>
                                            <button class="w-7 h-7 flex items-center justify-center rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-highest transition-colors"
                                                    type="button">
                                                <span class="material-symbols-outlined text-body-md">link</span>
                                            </button>
                                        </div>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">BUFFER TEMPORAL SEGURO</span>
                                    </div>
                                    <textarea
                                            class="w-full p-space-md bg-transparent text-on-surface font-body-md text-body-md focus:outline-none resize-none leading-relaxed"
                                            id="movie-synopsis-input" maxlength="500"
                                            placeholder="Describa la trama narrativa, contexto distópico, eventos clave y sinopsis para los enlaces neuronales de los espectadores..."
                                            rows="4">En las profundidades del Sector 9, un ciber-mercenario intercepta un flujo holográfico prohibido que amenaza con colapsar las redes de la Megaciudad. La resistencia sintética se levanta antes del apagón final.</textarea>
                                </div>
                            </div>
                        </section>
                        <!-- Section 2: Technical Specifications & Tags -->
                        <section
                                class="bg-surface-container-low/70 backdrop-blur-xl p-space-lg rounded-xl flex flex-col gap-space-lg shadow-2xl relative">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-space-xs">
                                    <span class="material-symbols-outlined text-secondary">tune</span>
                                    <h2 class="font-title-md text-title-md text-on-surface uppercase tracking-wide">
                                        Configuración de Transmisión &amp; Metadatos
                                    </h2>
                                </div>
                                <span class="font-label-sm text-label-sm text-primary-fixed-dim bg-primary-container/10 px-space-xs py-0.5 rounded">
              ENLACE MATRIZ
            </span>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-lg">
                                <!-- Category Tag Selectors -->
                                <div class="flex flex-col gap-space-sm">
                                    <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">
                                        GÉNERO / CATEGORÍA CIBERNÉTICA
                                    </label>
                                    <div class="flex flex-wrap gap-space-xs" id="genre-container">
                                        <button class="genre-pill px-space-sm py-1 rounded font-label-md text-label-md transition-all bg-primary-container text-on-primary font-bold shadow-[0_0_12px_rgba(0,240,255,0.4)]"
                                                data-genre="Sci-Fi Distópico" type="button">
                                            Sci-Fi Distópico
                                        </button>
                                        <button class="genre-pill px-space-sm py-1 rounded font-label-md text-label-md transition-all bg-secondary-container text-on-secondary font-bold shadow-[0_0_12px_rgba(157,5,255,0.4)]"
                                                data-genre="Cyber-Thriller" type="button">
                                            Cyber-Thriller
                                        </button>
                                        <button class="genre-pill px-space-sm py-1 rounded font-label-md text-label-md transition-all bg-surface-container-highest text-on-surface-variant hover:text-on-surface"
                                                data-genre="Anime Mecha" type="button">
                                            Anime Mecha
                                        </button>
                                        <button class="genre-pill px-space-sm py-1 rounded font-label-md text-label-md transition-all bg-surface-container-highest text-on-surface-variant hover:text-on-surface"
                                                data-genre="Neo-Noir" type="button">
                                            Neo-Noir
                                        </button>
                                        <button class="genre-pill px-space-sm py-1 rounded font-label-md text-label-md transition-all bg-surface-container-highest text-on-surface-variant hover:text-on-surface"
                                                data-genre="Sintéticos &amp; IA" type="button">
                                            Sintéticos &amp; IA
                                        </button>
                                    </div>
                                </div>
                                <!-- Resolution & Codecs -->
                                <div class="flex flex-col gap-space-sm">
                                    <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">
                                        RESOLUCIÓN / CÓDEC CUÁNTICO
                                    </label>
                                    <div class="flex flex-wrap gap-space-xs" id="codec-container">
                                        <button class="codec-pill px-space-sm py-1 rounded font-label-md text-label-md transition-all bg-primary-container text-on-primary font-bold shadow-[0_0_10px_rgba(0,240,255,0.3)]"
                                                data-codec="4K HDR" type="button">
                                            4K HDR // DOLBY ATMOS
                                        </button>
                                        <button class="codec-pill px-space-sm py-1 rounded font-label-md text-label-md transition-all bg-surface-container-highest text-on-surface-variant hover:text-on-surface"
                                                data-codec="8K VR" type="button">
                                            8K VR HOLOGRAPHIC
                                        </button>
                                        <button class="codec-pill px-space-sm py-1 rounded font-label-md text-label-md transition-all bg-surface-container-highest text-on-surface-variant hover:text-on-surface"
                                                data-codec="Holo-Deck 120fps" type="button">
                                            HOLO-DECK 120FPS
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md pt-space-xs">
                                <!-- Duration -->
                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider"
                                           for="movie-duration-input">
                                        DURACIÓN
                                    </label>
                                    <div class="relative flex items-center">
                                        <span class="material-symbols-outlined absolute left-space-sm text-outline pointer-events-none">timelapse</span>
                                        <input class="w-full pl-10 pr-space-sm py-space-xs bg-surface-container-highest text-on-surface font-label-md text-label-md rounded focus:outline-none focus:ring-1 focus:ring-primary-container"
                                               id="movie-duration-input" type="text" value="2h 15m"/>
                                    </div>
                                </div>
                                <!-- Content Rating -->
                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider"
                                           for="movie-rating-input">
                                        CLASIFICACIÓN SENSORIAL
                                    </label>
                                    <select class="w-full px-space-sm py-space-xs bg-surface-container-highest text-on-surface font-label-md text-label-md rounded focus:outline-none focus:ring-1 focus:ring-primary-container"
                                            id="movie-rating-input">
                                        <option value="NC-17 // PROTOCOLO ROJO">NC-17 // PROTOCOLO ROJO</option>
                                        <option value="PG-13 // SINCRONIZACIÓN SUAVE">PG-13 // SINCRONIZACIÓN SUAVE
                                        </option>
                                        <option value="R-LEVEL // DISTORSIÓN COGNITIVA">R-LEVEL // DISTORSIÓN
                                            COGNITIVA
                                        </option>
                                        <option value="G // RED LIBRE">G // RED LIBRE</option>
                                    </select>
                                </div>
                                <!-- Audio Master -->
                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">
                                        PISTA NEURONAL AUDIO
                                    </label>
                                    <div class="w-full px-space-sm py-space-xs bg-surface-container-highest text-primary font-label-md text-label-md rounded flex items-center justify-between">
                                        <span>DOLBY IMMERSIVE 7.1.4</span>
                                        <span class="w-2 h-2 rounded-full bg-primary-container"></span>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Section 3: Holo-Poster Dropzone & RAW Ingest -->
                        <section
                                class="bg-surface-container-low/70 backdrop-blur-xl p-space-lg rounded-xl flex flex-col gap-space-md shadow-2xl">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-space-xs">
                                    <span class="material-symbols-outlined text-primary-fixed-dim">cloud_upload</span>
                                    <h2 class="font-title-md text-title-md text-on-surface uppercase tracking-wide">
                                        SUBIR HOLO-POSTER // FORMATO RAW AV1
                                    </h2>
                                </div>
                                <span class="font-label-sm text-label-sm text-outline">RATIO 2:3 O 16:9 RECOMENDADO</span>
                            </div>
                            <!-- Drop Area -->
                            <div class="relative group p-space-xl rounded-lg bg-surface-container-high/60 hover:bg-surface-container-highest/80 transition-all flex flex-col items-center justify-center text-center cursor-pointer overflow-hidden shadow-inner">
                                <div class="absolute inset-0 bg-gradient-to-b from-primary-container/5 via-transparent to-secondary-container/5 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>
                                <div class="w-16 h-16 rounded-full bg-surface-container-highest flex items-center justify-center text-primary-fixed-dim group-hover:scale-110 group-hover:bg-primary-container group-hover:text-on-primary transition-all duration-300 shadow-lg mb-space-sm">
                                    <span class="material-symbols-outlined text-headline-md">file_upload</span>
                                </div>
                                <p class="font-headline-sm text-headline-sm text-primary font-bold">
                                    ARRASTRE EL PAQUETE HOLOGRÁFICO
                                </p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant max-w-md mt-1">
                                    Compatible con capas RAW AV1, WebM Ultra, EXR volumétrico y texturas
                                    multiespectrales (Máx. 12.8 GB por streaming chunk).
                                </p>
                                <div class="flex items-center gap-space-md mt-space-md">
<span class="font-label-sm text-label-sm text-secondary bg-secondary-container/20 px-space-sm py-1 rounded">
                SHA-256 VERIFIED
              </span>
                                    <span class="font-label-sm text-label-sm text-primary-fixed-dim bg-primary-container/20 px-space-sm py-1 rounded">
                READY FOR QUANTUM DOCK
              </span>
                                </div>
                            </div>
                        </section>
                        <!-- Actions Bar -->
                        <div class="flex flex-col sm:flex-row items-center justify-between gap-space-md pt-space-xs pb-space-2xl">
                            <button class="w-full sm:w-auto px-space-lg py-space-sm rounded font-label-md text-label-md uppercase tracking-wider text-outline hover:text-on-surface hover:bg-surface-container-high transition-colors"
                                    type="button">
                                CANCELAR PROCESO
                            </button>
                            <div class="flex items-center gap-space-md w-full sm:w-auto justify-end">
                                <button class="w-full sm:w-auto px-space-lg py-space-sm rounded font-label-md text-label-md uppercase tracking-wider bg-surface-container-high text-secondary hover:bg-surface-container-highest transition-all shadow-md"
                                        type="button">
                                    GUARDAR BORRADOR EN CACHÉ
                                </button>
                                <button class="w-full sm:w-auto flex items-center justify-center gap-space-xs px-space-xl py-space-sm rounded bg-primary-container text-on-primary font-label-lg text-label-lg font-bold uppercase tracking-wider hover:scale-[1.02] shadow-[0_0_24px_rgba(0,240,255,0.4)] transition-all"
                                        id="publish-btn" type="button">
                                    <span class="material-symbols-outlined text-body-lg">satellite_alt</span>
                                    <span>TRANSMITIR AHORA</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- SIDE PREVIEW PANEL (4 cols) -->
                    <div class="xl:col-span-4 flex flex-col gap-space-lg">
                        <!-- Live HUD Preview Card Header -->
                        <div class="flex items-center justify-between px-space-xs">
                            <div class="flex items-center gap-space-xs">
                                <span class="w-2 h-2 rounded-full bg-primary-container animate-ping"></span>
                                <span class="font-label-md text-label-md text-primary font-bold uppercase tracking-widest">
              HUD LIVE PREVIEW // TERMINAL
            </span>
                            </div>
                            <span class="font-label-sm text-label-sm text-on-surface-variant font-mono">NODE: FEED_SYNC</span>
                        </div>
                        <!-- Sticky Card Holographic Display -->
                        <div class="sticky top-20 flex flex-col gap-space-md">
                            <div class="relative rounded-xl overflow-hidden bg-surface-container-low shadow-[0_0_35px_rgba(0,0,0,0.8)] group transition-all">
                                <!-- Poster Visual Container (16:10 or 2:3 cinematic representation) -->
                                <div class="relative w-full h-80 overflow-hidden bg-surface-container-highest">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 brightness-90 group-hover:brightness-100"
                                         data-alt="Cinematic high quality cyberpunk movie poster showing an atmospheric neon rainy megalopolis with massive holographic billboards and a silhouette of a synthetic operative looking at digital neural data streams in cyan and deep violet"
                                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCDSUF3EEOPhLlBf6x1r9qDfNl4nfdKkuOO9kbr9q1o-gA_AGMFIF91DjDItqkBxUCFiPathAnpuO_iA6LqtKOYd0dzEoNhRHkqlTtbtFDBFR3QcXg8mTTnREpCXiKYR7I1BgisIeeYrThf5zheJCQxE8BmMGfE1XOFyhrw6Pi6wzaoCLKDV7ETxJhUYi9xREaM0234VenwgvLxkFYEdOX8pV28oN3d3ze9ofh8w8f"/>
                                    <!-- Gradient Scrim for deep readability -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-surface-container-low via-surface-container-low/40 to-transparent"></div>
                                    <!-- Top Status Pills -->
                                    <div class="absolute top-space-md left-space-md right-space-md flex items-center justify-between">
<span class="px-space-xs py-0.5 rounded font-label-sm text-label-sm bg-surface-container-lowest/80 text-primary-fixed-dim backdrop-blur-md"
      id="preview-rating-badge">
                  NC-17 // PROTOCOLO ROJO
                </span>
                                        <div class="flex items-center gap-space-xs">
<span class="px-space-xs py-0.5 rounded font-label-sm text-label-sm bg-secondary-container/80 text-on-secondary backdrop-blur-md font-bold">
                    PRE-RELEASE
                  </span>
                                            <span class="px-space-xs py-0.5 rounded font-label-sm text-label-sm bg-primary-container text-on-primary font-bold">
                    99.8% SYNC
                  </span>
                                        </div>
                                    </div>
                                    <!-- Floating Interactive Play Trigger -->
                                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                                        <div class="w-14 h-14 rounded-full bg-primary-container/20 backdrop-blur-md flex items-center justify-center text-primary-container group-hover:scale-110 group-hover:bg-primary-container group-hover:text-on-primary transition-all duration-300 shadow-[0_0_20px_rgba(0,240,255,0.4)]">
                                            <span class="material-symbols-outlined text-headline-md"
                                                  style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                                        </div>
                                    </div>
                                    <!-- Bottom In-Poster Telemetry bar -->
                                    <div class="absolute bottom-2 left-space-md right-space-md flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
                                        <span class="font-mono text-primary" id="preview-duration">2H 15M</span>
                                        <span class="font-mono text-secondary" id="preview-codec">4K HDR // DOLBY</span>
                                    </div>
                                </div>
                                <!-- Card Body Content -->
                                <div class="p-space-lg flex flex-col gap-space-sm">
                                    <!-- Dynamic Categories -->
                                    <div class="flex flex-wrap gap-1" id="preview-genres-list">
<span class="px-2 py-0.5 rounded bg-primary-container/10 text-primary-fixed-dim font-label-sm text-label-sm uppercase font-mono">
                  Sci-Fi Distópico
                </span>
                                        <span class="px-2 py-0.5 rounded bg-secondary-container/20 text-secondary font-label-sm text-label-sm uppercase font-mono">
                  Cyber-Thriller
                </span>
                                    </div>
                                    <!-- Dynamic Title -->
                                    <h3 class="font-headline-sm text-headline-sm font-bold text-primary tracking-tight leading-snug"
                                        id="preview-title">
                                        NEURONET: PROTOCOLO SOMBRA
                                    </h3>
                                    <!-- Dynamic Synopsis -->
                                    <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3"
                                       id="preview-synopsis">
                                        En las profundidades del Sector 9, un ciber-mercenario intercepta un flujo
                                        holográfico prohibido que amenaza con colapsar las redes de la Megaciudad. La
                                        resistencia sintética se levanta antes del apagón final.
                                    </p>
                                    <!-- Technical HUD Telemetry Strip inside the card -->
                                    <div class="mt-space-sm pt-space-sm border-t border-surface-container-highest/60 flex items-center justify-between">
                                        <div class="flex items-center gap-space-xs">
                                            <span class="material-symbols-outlined text-primary-fixed-dim text-body-md">graphic_eq</span>
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">CANAL NEURAL ESTABLE</span>
                                        </div>
                                        <div class="flex items-center gap-1 font-label-sm text-label-sm text-outline">
                                            <span class="text-secondary font-bold">144.2 Gb/s</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Bottom Accent Light Bar -->
                                <div class="h-1 w-full bg-gradient-to-r from-primary-container via-secondary-container to-primary-container"></div>
                            </div>
                            <!-- Secondary Telemetry / Security Verification Card -->
                            <div class="bg-surface-container-low/80 backdrop-blur-md p-space-md rounded-xl flex flex-col gap-space-xs shadow-lg">
                                <div class="flex justify-between items-center">
                                    <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">COMPATIBILIDAD RED</span>
                                    <span class="font-label-sm text-label-sm text-primary font-bold">ÓPTIMA // 100%</span>
                                </div>
                                <div class="w-full h-1.5 bg-surface-container-highest rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-primary-container to-secondary-container w-full"></div>
                                </div>
                                <div class="flex justify-between items-center pt-1 font-label-sm text-label-sm text-outline font-mono">
                                    <span>LATENCIA: 1.2MS</span>
                                    <span>ENCRIPTACIÓN: AES-GCM-512</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            (function initCyberstreamForm() {
                const titleInput = document.getElementById('movie-title-input');
                const synopsisInput = document.getElementById('movie-synopsis-input');
                const durationInput = document.getElementById('movie-duration-input');
                const ratingSelect = document.getElementById('movie-rating-input');

                const previewTitle = document.getElementById('preview-title');
                const previewSynopsis = document.getElementById('preview-synopsis');
                const previewDuration = document.getElementById('preview-duration');
                const previewRating = document.getElementById('preview-rating-badge');
                const previewCodec = document.getElementById('preview-codec');

                const titleCounter = document.getElementById('title-counter');
                const synopsisCounter = document.getElementById('synopsis-counter');
                const genresList = document.getElementById('preview-genres-list');

                // Title Real-time update
                if (titleInput && previewTitle && titleCounter) {
                    titleInput.addEventListener('input', (e) => {
                        const val = e.target.value;
                        previewTitle.textContent = val.trim() ? val : 'TÍTULO NO ESPECIFICADO';
                        titleCounter.textContent = `${val.length} / 80 CHARS`;
                    });
                }

                // Synopsis Real-time update
                if (synopsisInput && previewSynopsis && synopsisCounter) {
                    synopsisInput.addEventListener('input', (e) => {
                        const val = e.target.value;
                        previewSynopsis.textContent = val.trim() ? val : 'Aún no se ha especificado una sinopsis para esta transmisión holográfica.';
                        synopsisCounter.textContent = `${val.length} / 500 CHARS`;
                    });
                }

                // Duration Real-time update
                if (durationInput && previewDuration) {
                    durationInput.addEventListener('input', (e) => {
                        previewDuration.textContent = e.target.value.toUpperCase();
                    });
                }

                // Rating Real-time update
                if (ratingSelect && previewRating) {
                    ratingSelect.addEventListener('change', (e) => {
                        previewRating.textContent = e.target.value;
                    });
                }

                // Interactive Genre Pills Toggle
                const genrePills = document.querySelectorAll('.genre-pill');
                genrePills.forEach(pill => {
                    pill.addEventListener('click', () => {
                        const isActive = pill.classList.contains('bg-primary-container') || pill.classList.contains('bg-secondary-container');
                        if (isActive) {
                            pill.className = 'genre-pill px-space-sm py-1 rounded font-label-md text-label-md transition-all bg-surface-container-highest text-on-surface-variant hover:text-on-surface';
                        } else {
                            pill.className = 'genre-pill px-space-sm py-1 rounded font-label-md text-label-md transition-all bg-primary-container text-on-primary font-bold shadow-[0_0_12px_rgba(0,240,255,0.4)]';
                        }

                        // Sync preview badges
                        if (genresList) {
                            genresList.innerHTML = '';
                            const activeOnes = document.querySelectorAll('.genre-pill.bg-primary-container, .genre-pill.bg-secondary-container');
                            activeOnes.forEach(a => {
                                const badge = document.createElement('span');
                                badge.className = 'px-2 py-0.5 rounded bg-primary-container/10 text-primary-fixed-dim font-label-sm text-label-sm uppercase font-mono';
                                badge.textContent = a.dataset.genre || a.innerText;
                                genresList.appendChild(badge);
                            });
                        }
                    });
                });

                // Interactive Codec Pills Single Select
                const codecPills = document.querySelectorAll('.codec-pill');
                codecPills.forEach(pill => {
                    pill.addEventListener('click', () => {
                        codecPills.forEach(p => {
                            p.className = 'codec-pill px-space-sm py-1 rounded font-label-md text-label-md transition-all bg-surface-container-highest text-on-surface-variant hover:text-on-surface';
                        });
                        pill.className = 'codec-pill px-space-sm py-1 rounded font-label-md text-label-md transition-all bg-primary-container text-on-primary font-bold shadow-[0_0_10px_rgba(0,240,255,0.3)]';
                        if (previewCodec) {
                            previewCodec.textContent = pill.dataset.codec || pill.innerText;
                        }
                    });
                });

                // Publish button micro-interaction
                const publishBtn = document.getElementById('publish-btn');
                if (publishBtn) {
                    publishBtn.addEventListener('click', () => {
                        const originalText = publishBtn.innerHTML;
                        publishBtn.innerHTML = '<span class="material-symbols-outlined animate-spin text-body-lg">sync</span><span>INYECTANDO TRANSMISIÓN...</span>';
                        publishBtn.classList.add('opacity-80', 'pointer-events-none');
                        setTimeout(() => {
                            publishBtn.innerHTML = '<span class="material-symbols-outlined text-body-lg">check_circle</span><span>TRANSMISIÓN EN VIVO</span>';
                            publishBtn.classList.remove('opacity-80');
                            setTimeout(() => {
                                publishBtn.innerHTML = originalText;
                                publishBtn.classList.remove('pointer-events-none');
                            }, 2400);
                        }, 1600);
                    });
                }
            })();
        </script>
    </main>
</div>
</body>
</html>