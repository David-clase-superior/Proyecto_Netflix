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
            <div class="relative w-full overflow-hidden px-margin-desktop py-space-xl">
                <!-- Ambient cyberpunk background blooms -->
                <div class="pointer-events-none absolute -top-40 -left-20 w-96 h-96 rounded-full bg-secondary-container/15 blur-3xl"></div>
                <div class="pointer-events-none absolute top-1/2 -right-32 w-[30rem] h-[30rem] rounded-full bg-primary-container/10 blur-[100px]"></div>
                <!-- Header & Breadcrumb Context -->
                <div class="relative z-10 flex flex-col gap-space-xs mb-space-xl">
                    <div class="flex items-center gap-space-sm">
                        <span class="inline-flex items-center justify-center w-2 h-2 rounded-full bg-primary-container animate-pulse shadow-[0_0_8px_#00f0ff]"></span>
                        <span class="font-label-sm text-label-sm text-primary tracking-widest uppercase">// DIRECTORIO_USUARIOS / NUEVO REGISTRO // PROTOCOLO DE IDENTIDAD V4.2</span>
                        <span class="font-label-sm text-label-sm text-outline-variant">:: [PORT_ID: 8094-NX]</span>
                    </div>
                    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md mt-space-xs">
                        <div>
                            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight uppercase">
                                REGISTRO DE USUARIO <span class="text-primary-fixed-dim font-light">//</span> <span
                                    class="bg-gradient-to-r from-primary via-primary-fixed-dim to-secondary bg-clip-text text-transparent">ALTA EN MATRIZ</span>
                            </h1>
                            <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-space-xs">
                                Ingrese los parámetros biométricos y de identificación para vincular el nodo a la red
                                Synapse. Todos los paquetes serán cifrados mediante quantum hash v9.
                            </p>
                        </div>
                        <!-- Telemetry Status Pills -->
                        <div class="flex items-center gap-space-xs bg-surface-container-low px-space-md py-space-xs rounded shadow-lg backdrop-blur-md">
                            <div class="flex flex-col text-right">
                                <span class="font-label-sm text-label-sm text-outline">LATENCIA DE RED</span>
                                <span class="font-label-md text-label-md text-primary font-bold">1.4ms SYNAPSE-NET</span>
                            </div>
                            <span class="material-symbols-outlined text-secondary ml-space-xs text-headline-sm">satellite_alt</span>
                        </div>
                    </div>
                </div>
                <!-- Main Grid: Form Workstation & Real-Time Identity HUD -->
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">
                    <!-- LEFT COLUMN: Neural Registry Terminal Form (7 Cols) -->
                    <section
                            class="lg:col-span-7 flex flex-col gap-space-lg bg-surface-container-low/90 backdrop-blur-xl p-space-xl rounded-xl shadow-[0_0_40px_rgba(0,0,0,0.6)]">
                        <!-- Form Header Sub-bar -->
                        <div class="flex items-center justify-between pb-space-sm">
                            <div class="flex items-center gap-space-xs">
                                <span class="material-symbols-outlined text-primary-fixed-dim">terminal</span>
                                <span class="font-label-md text-label-md text-primary uppercase font-bold tracking-wider">ENTRADA_DE_DATOS // BIOMETRÍA</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-outline uppercase">MODO: ESCRITURA_ACTIVA</span>
                        </div>
                        <form class="flex flex-col gap-space-lg"
                              action="/usuarios/crear"
                              method="POST">
                            <!-- Field 1: Full Name / Neural Alias -->
                            <div class="flex flex-col gap-space-xs">
                                <div class="flex items-center justify-between">
                                    <label class="font-label-md text-label-md text-on-surface uppercase tracking-wider flex items-center gap-space-xs"
                                           for="nombreId">
                                        <span class="material-symbols-outlined text-primary-container text-title-md">badge</span>
                                        NOMBRE COMPLETO / ALIAS NEURAL
                                    </label>
                                    <span class="font-label-sm text-label-sm text-primary tracking-widest">[REQUERIDO]</span>
                                </div>
                                <div class="relative flex items-center">
                                    <!-- Nombre -->
                                    <input class="w-full bg-surface-container-highest/60 text-on-surface font-label-md text-label-md px-space-md py-space-sm pl-11 rounded transition-all focus:bg-surface-container-highest focus:outline-none focus:shadow-[0_0_15px_rgba(0,240,255,0.3)] placeholder:text-outline"
                                           id="nombreId"
                                           name="nombre"
                                           placeholder="Cypher-09"
                                           type="text"
                                           required/>
                                    <span class="material-symbols-outlined absolute left-space-sm text-outline-variant pointer-events-none text-body-lg">fingerprint</span>
                                </div>
                            </div>
                            <!-- Contraseña -->
                            <div class="flex flex-col gap-space-xs">
                                <div class="flex items-center justify-between">
                                    <label class="font-label-md text-label-md text-on-surface uppercase tracking-wider flex items-center gap-space-xs"
                                           for="passwordId">
                                        <span class="material-symbols-outlined text-primary-container text-title-md">badge</span>
                                        CONTRASEÑA
                                    </label>
                                    <span class="font-label-sm text-label-sm text-primary tracking-widest">[REQUERIDO]</span>
                                </div>
                                <div class="relative flex items-center">
                                    <!-- Contraseña -->
                                    <input class="w-full bg-surface-container-highest/60 text-on-surface font-label-md text-label-md px-space-md py-space-sm pl-11 rounded transition-all focus:bg-surface-container-highest focus:outline-none focus:shadow-[0_0_15px_rgba(0,240,255,0.3)] placeholder:text-outline"
                                           id="passwordId"
                                           name="password"
                                           placeholder="Cypher-0934"
                                           type="password"
                                           required/>
                                    <span class="material-symbols-outlined absolute left-space-sm text-outline-variant pointer-events-none text-body-lg">fingerprint</span>
                                </div>
                            </div>
                            <!-- Field 2: Edad (Interactive Slider + Digital Readout) -->
                            <div class="flex flex-col gap-space-xs">
                                <div class="flex items-center justify-between">
                                    <label class="font-label-md text-label-md text-on-surface uppercase tracking-wider flex items-center gap-space-xs"
                                           for="edadId">
                                        <span class="material-symbols-outlined text-primary-container text-title-md">badge</span>
                                        EDAD
                                    </label>
                                    <span class="font-label-sm text-label-sm text-primary tracking-widest">[REQUERIDO]</span>
                                </div>
                                <div class="relative flex items-center">
                                    <!-- EDAD -->
                                    <input class="w-full bg-surface-container-highest/60 text-on-surface font-label-md text-label-md px-space-md py-space-sm pl-11 rounded transition-all focus:bg-surface-container-highest focus:outline-none focus:shadow-[0_0_15px_rgba(0,240,255,0.3)] placeholder:text-outline"
                                           id="edadId"
                                           name="edad"
                                           placeholder="18"
                                           type="number"
                                           min="1"
                                           max="120"
                                           required/>
                                    <span class="material-symbols-outlined absolute left-space-sm text-outline-variant pointer-events-none text-body-lg">fingerprint</span>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="flex flex-col gap-space-xs">
                                <div class="flex items-center justify-between">
                                    <label class="font-label-md text-label-md text-on-surface uppercase tracking-wider flex items-center gap-space-xs"
                                           for="emailId">
                                        <span class="material-symbols-outlined text-primary-fixed-dim text-title-md">alternate_email</span>
                                        CORREO ELECTRÓNICO
                                    </label>
                                    <div class="flex items-center gap-1 bg-surface-container-high px-space-xs py-0.5 rounded">
                                        <span class="w-1.5 h-1.5 rounded-full bg-primary-container"></span>
                                        <span class="font-label-sm text-label-sm text-primary uppercase">SINTAXIS CIFRADA OK</span>
                                    </div>
                                </div>
                                <div class="relative flex items-center">
                                    <input class="w-full bg-surface-container-highest/60 text-on-surface font-label-md text-label-md px-space-md py-space-sm pl-11 rounded transition-all focus:bg-surface-container-highest focus:outline-none focus:shadow-[0_0_15px_rgba(0,240,255,0.3)] placeholder:text-outline"
                                           id="emailId"
                                           name="email"
                                           type="email"
                                           placeholder="elena.rostova@deepnet.nexus"
                                           required/>
                                    <span class="material-symbols-outlined absolute left-space-sm text-outline-variant pointer-events-none text-body-lg">lock</span>
                                </div>
                            </div>
                            <!-- Field 4: Fecha de Nacimiento -->
                            <div class="flex flex-col gap-space-xs">
                                <div class="flex items-center justify-between">
                                    <label class="font-label-md text-label-md text-on-surface uppercase tracking-wider flex items-center gap-space-xs"
                                           for="fecha_nacimientoId">
                                        <span class="material-symbols-outlined text-secondary text-title-md">calendar_month</span>
                                        FECHA DE NACIMIENTO
                                    </label>
                                    <span class="font-label-sm text-label-sm text-outline">[FORMATO: AAAA-MM-DD]</span>
                                </div>
                                <div class="relative flex items-center">
                                    <input class="w-full bg-surface-container-highest/60 text-on-surface font-label-md text-label-md px-space-md py-space-sm pl-11 rounded transition-all focus:bg-surface-container-highest focus:outline-none focus:shadow-[0_0_15px_rgba(0,240,255,0.3)] scheme-dark"
                                           id="fecha_nacimientoId"
                                           name="fecha_nacimiento"
                                           type="date"
                                           placeholder="2071-08-14"
                                    />
                                    <span class="material-symbols-outlined absolute left-space-sm text-outline-variant pointer-events-none text-body-lg">schedule</span>
                                </div>
                            </div>
                            <!-- Complementary Cyberpunk Metadata Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                                <!-- Clearance Level Selectable Pills -->
                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-md text-label-md text-on-surface uppercase tracking-wider flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-primary text-title-md">security</span>
                                        NIVEL DE CLEARANCE / RANGO
                                    </label>
                                    <div class="grid grid-cols-3 gap-space-xs" id="clearance-selector">
                                        <button class="clearance-btn bg-surface-container-highest text-primary font-label-md text-label-md py-space-xs rounded hover:bg-surface-bright transition-all text-center"
                                                onclick="selectClearance(this, 'NETRUNNER', '0x4-NR')" type="button">
                                            NETRUNNER
                                        </button>
                                        <button class="clearance-btn bg-primary-container text-on-primary-container font-label-md text-label-md py-space-xs rounded font-bold transition-all text-center shadow-[0_0_12px_rgba(0,240,255,0.4)]"
                                                onclick="selectClearance(this, 'SYS ADMIN', '0x9-ADM')" type="button">
                                            ADMIN
                                        </button>
                                        <button class="clearance-btn bg-surface-container-highest text-on-surface-variant font-label-md text-label-md py-space-xs rounded hover:bg-surface-bright transition-all text-center"
                                                onclick="selectClearance(this, 'SUSCRIPTOR VIP', '0x7-VIP')"
                                                type="button">
                                            VIP
                                        </button>
                                    </div>
                                </div>
                                <!-- Regional Node Selection -->
                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-md text-label-md text-on-surface uppercase tracking-wider flex items-center gap-space-xs"
                                           for="regional-node">
                                        <span class="material-symbols-outlined text-secondary text-title-md">lan</span>
                                        NODO REGIONAL // CLUSTER
                                    </label>
                                    <div class="relative flex items-center">
                                        <select class="w-full bg-surface-container-highest/60 text-on-surface font-label-md text-label-md px-space-md py-space-sm pl-11 rounded appearance-none focus:outline-none focus:shadow-[0_0_15px_rgba(157,5,255,0.3)] transition-all cursor-pointer"
                                                id="regional-node"
                                                onchange="document.getElementById('hud-node').innerText = this.value;">
                                            <option selected="" value="NEO-TOKYO CORE // SECTOR 03">NEO-TOKYO CORE //
                                                SEC 03
                                            </option>
                                            <option value="SECTOR 7-DELTA // ORBITAL">SECTOR 7-DELTA // ORBITAL</option>
                                            <option value="KOWLOON DEEP ARTERY // SUB-09">KOWLOON ARTERY // SUB-09
                                            </option>
                                            <option value="BERLIN MEGAPOLIS // C-HUB">BERLIN MEGAPOLIS // C-HUB</option>
                                        </select>
                                        <span class="material-symbols-outlined absolute left-space-sm text-outline-variant pointer-events-none text-body-lg">hub</span>
                                        <span class="material-symbols-outlined absolute right-space-sm text-outline pointer-events-none text-body-lg">expand_more</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Micro-telemetry bar inside form -->
                            <div class="p-space-sm rounded bg-surface-container-highest/40 flex items-center justify-between gap-space-md">
                                <div class="flex items-center gap-space-xs">
                                    <span class="material-symbols-outlined text-primary-container text-body-lg animate-spin">sync</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">ESTADO DE CANAL NEURAL:</span>
                                    <span class="font-label-sm text-label-sm text-primary font-bold">100% LISTO</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary tracking-widest">HASH: SHA-512//QN</span>
                            </div>
                            <!-- Action Buttons -->
                            <div class="flex flex-col sm:flex-row items-center gap-space-md pt-space-xs">
                                <button class="w-full sm:flex-1 py-space-sm px-space-lg rounded bg-gradient-to-r from-primary-container via-primary-fixed-dim to-secondary-container text-surface-container-lowest font-label-lg text-label-lg uppercase tracking-wider font-bold transition-all transform hover:scale-[1.01] hover:shadow-[0_0_24px_rgba(0,240,255,0.6)] flex items-center justify-center gap-space-xs cursor-pointer"
                                        <onclick="triggerSyncAnimation()" type="submit">
                                    <span class="material-symbols-outlined text-title-md">sensors</span>
                                    <span>GUARDAR // SINCRONIZAR IDENTIDAD</span>
                                </button>
                                <button class="w-full sm:w-auto py-space-sm px-space-lg rounded bg-surface-container-highest/80 hover:bg-surface-container-highest text-outline hover:text-on-surface font-label-lg text-label-lg uppercase tracking-wider transition-all flex items-center justify-center gap-space-xs cursor-pointer shadow-sm"
                                        onclick="resetHud()" type="reset">
                                    <span class="material-symbols-outlined text-title-md">close</span>
                                    <span>CANCELAR</span>
                                </button>
                            </div>
                        </form>
                    </section>
                    <!-- RIGHT COLUMN: Identity Preview HUD / Terminal Card (5 Cols) -->
                    <aside class="lg:col-span-5 flex flex-col gap-space-lg">
                        <!-- Live Neural Badge HUD Simulation -->
                        <div class="relative bg-surface-container-low rounded-xl p-space-lg shadow-[0_0_50px_rgba(0,0,0,0.8)] overflow-hidden">
                            <!-- Holographic Shimmer Effect Background -->
                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-tr from-secondary-container/10 via-transparent to-primary-container/15 opacity-60"></div>
                            <div class="pointer-events-none absolute -bottom-10 -right-10 w-48 h-48 bg-primary-container/10 rounded-full blur-2xl"></div>
                            <!-- HUD Card Top Bracket -->
                            <div class="relative z-10 flex items-center justify-between pb-space-md">
                                <div class="flex items-center gap-space-xs">
                                    <span class="w-2.5 h-2.5 rounded-sm bg-primary-container shadow-[0_0_8px_#00f0ff]"></span>
                                    <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-widest">NEXUS ID // HOLOGRAPHIC CHIP</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="w-1.5 h-1.5 rounded-full bg-secondary-container animate-ping"></span>
                                    <span class="font-label-sm text-label-sm text-secondary font-mono tracking-tighter">SYNAPSE_v4</span>
                                </div>
                            </div>
                            <!-- Holographic Avatar & Key Specs Mosaic -->
                            <div class="relative z-10 flex flex-col sm:flex-row items-center sm:items-start gap-space-md p-space-md rounded bg-surface-container-lowest/80 backdrop-blur-md">
                                <!-- Avatar Frame with cybernetic styling -->
                                <div class="relative group">
                                    <div class="w-28 h-36 rounded overflow-hidden relative shadow-lg bg-surface-container-high">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                             data-alt="Futuristic cyberpunk operative female portrait with subtle glowing cybernetic eye augmentations, dark blue and electric cyan backlighting, volumetric haze, sleek high-collar cyber jacket, hyper-detailed render, sharp focal depth."
                                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEZu3I7aqVq40OzeIYLuMDQrt0nadvoYfzL3ljbOIPh19o_txK1XpBgKpvgwwxWjMA0Laumpcy5bak87bVUt3cYELlX93Tjc3KBXmG7xLDwOxUShyoJkoV7f6uXJFVLOI0uB_SlswRqxfqqc3uVo3Vw-jwM3fwb0ylU5CxvTha-Pe-AvIA8B7terLCuSxJJEaIDPfPBJxjVxKuEn_93Fi4x6f_lmQFz5vHHioDUXYZ"/>
                                        <!-- Holographic scanlines overlay -->
                                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-primary-container/10 to-transparent bg-[length:100%_4px] pointer-events-none opacity-40"></div>
                                    </div>
                                    <span class="absolute -bottom-2 -right-2 px-space-xs py-0.5 rounded bg-surface-container-lowest text-primary-fixed-dim font-label-sm text-label-sm font-bold shadow-md">
                LIVE
              </span>
                                </div>
                                <!-- Subject Metadata Block -->
                                <div class="flex flex-col gap-space-xs flex-1 text-center sm:text-left min-w-0">
                                    <div class="flex flex-col">
                                        <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">SUJETO REGISTRADO</span>
                                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold truncate tracking-tight"
                                              id="hud-card-name">Elena Rostova // Cypher-09</span>
                                    </div>
                                    <div class="flex flex-wrap items-center justify-center sm:justify-start gap-space-xs pt-1">
<span class="px-space-xs py-0.5 rounded bg-secondary-container/30 text-secondary font-label-sm text-label-sm font-bold"
      id="hud-clearance-pill">
                  ADMIN
                </span>
                                        <span class="px-space-xs py-0.5 rounded bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm">
                  SEC-03
                </span>
                                        <span class="px-space-xs py-0.5 rounded bg-surface-container-high text-primary-fixed-dim font-label-sm text-label-sm"
                                              id="hud-age">
                  28 CICLOS
                </span>
                                    </div>
                                    <!-- Neural Hash Signature -->
                                    <div class="flex flex-col pt-space-xs">
                                        <span class="font-label-sm text-label-sm text-outline-variant">FIRMA NEURAL CRIPTOGRÁFICA</span>
                                        <span class="font-label-sm text-label-sm text-primary font-mono select-all"
                                              id="neural-hash-code">0x9F4A882C7B10...B82</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Telemetry and Injection Status Indicator -->
                            <div class="relative z-10 flex flex-col gap-space-sm mt-space-md p-space-md rounded bg-surface-container-high/40">
                                <div class="flex items-center justify-between">
                                    <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">ESTADO DE INYECCIÓN MATRIZ:</span>
                                    <span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider flex items-center gap-1"
                                          id="hud-status-badge">
<span class="w-1.5 h-1.5 rounded-full bg-secondary-container animate-pulse"></span>
                EN ESPERA DE INYECCIÓN
              </span>
                                </div>
                                <!-- Biometric Sincronicity Gauge Bar -->
                                <div class="flex flex-col gap-1">
                                    <div class="flex justify-between font-label-sm text-label-sm text-outline">
                                        <span>AFINIDAD SINÁPTICA</span>
                                        <span class="text-primary-container font-bold"
                                              id="hud-affinity-val">89.4%</span>
                                    </div>
                                    <div class="w-full h-1.5 rounded bg-surface-container-highest overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-secondary to-primary-container transition-all duration-700"
                                             id="hud-affinity-bar" style="width: 89.4%;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Data Clearance Matrix Breakdown -->
                            <div class="relative z-10 grid grid-cols-2 gap-space-xs mt-space-sm">
                                <div class="p-space-sm rounded bg-surface-container-high/60 flex flex-col">
                                    <span class="font-label-sm text-label-sm text-outline">CANAL DE TRANSMISIÓN</span>
                                    <span class="font-label-sm text-label-sm text-on-surface truncate font-mono mt-0.5"
                                          id="hud-email">elena.rostova@deepnet.nexus</span>
                                </div>
                                <div class="p-space-sm rounded bg-surface-container-high/60 flex flex-col">
                                    <span class="font-label-sm text-label-sm text-outline">ORIGEN CRONOLÓGICO</span>
                                    <span class="font-label-sm text-label-sm text-on-surface font-mono mt-0.5"
                                          id="hud-dob">2071-08-14</span>
                                </div>
                                <div class="col-span-2 p-space-sm rounded bg-surface-container-high/60 flex flex-col">
                                    <span class="font-label-sm text-label-sm text-outline">NODO DE RETRANSMISIÓN ASIGNADO</span>
                                    <span class="font-label-sm text-label-sm text-primary font-mono mt-0.5"
                                          id="hud-node">NEO-TOKYO CORE // SEC 03</span>
                                </div>
                            </div>
                        </div>
                        <!-- Telemetry Signal Graphic Panel -->
                        <div class="p-space-md rounded-xl bg-surface-container-low/70 flex flex-col gap-space-sm shadow-md">
                            <div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface uppercase flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary-container text-body-lg">graphic_eq</span>
              RESPUESTA NEURAL EN VIVO
            </span>
                                <span class="font-label-sm text-label-sm text-outline font-mono">CH-01: NORMAL</span>
                            </div>
                            <!-- Waveform inline SVG representation -->
                            <div class="w-full h-14 flex items-center justify-center bg-surface-container-lowest/90 rounded px-space-sm overflow-hidden">
                                <svg class="w-full h-10 text-primary-container" fill="none" stroke="currentColor"
                                     stroke-width="1.5" viewbox="0 0 400 40">
                                    <path d="M0 20 L40 20 L55 5 L65 35 L80 15 L90 25 L100 20 L160 20 L175 2 L190 38 L205 10 L220 28 L235 20 L310 20 L320 8 L330 32 L340 18 L350 20 L400 20"
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div class="flex justify-between items-center text-on-surface-variant font-label-sm text-label-sm pt-space-xs">
                                <span>MEMORIA VOLÁTIL: 16.4 TB</span>
                                <span class="text-primary">ESTABILIDAD: 99.98%</span>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <!-- Inline Logic for Form-to-HUD Dynamic Interaction -->
            <script>
                function selectClearance(button, roleName, hexCode) {
                    document.querySelectorAll('.clearance-btn').forEach(btn => {
                        btn.classList.remove('bg-primary-container', 'text-on-primary-container', 'font-bold', 'shadow-[0_0_12px_rgba(0,240,255,0.4)]');
                        btn.classList.add('bg-surface-container-highest', 'text-on-surface-variant');
                    });
                    button.classList.remove('bg-surface-container-highest', 'text-on-surface-variant');
                    button.classList.add('bg-primary-container', 'text-on-primary-container', 'font-bold', 'shadow-[0_0_12px_rgba(0,240,255,0.4)]');

                    const pill = document.getElementById('hud-clearance-pill');
                    if (pill) {
                        pill.innerText = roleName;
                    }
                    const hashCode = document.getElementById('neural-hash-code');
                    if (hashCode) {
                        hashCode.innerText = hexCode + '::' + Math.random().toString(16).substr(2, 8).toUpperCase() + '...B82';
                    }
                }

                function triggerSyncAnimation() {
                    const statusBadge = document.getElementById('hud-status-badge');
                    const affinityBar = document.getElementById('hud-affinity-bar');
                    const affinityVal = document.getElementById('hud-affinity-val');

                    if (statusBadge) {
                        statusBadge.innerHTML = '<span class="w-1.5 h-1.5 rounded-full bg-primary-container animate-spin"></span> INYECTANDO EN RED...';
                        statusBadge.className = 'font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider flex items-center gap-1';
                    }

                    if (affinityBar && affinityVal) {
                        affinityBar.style.width = '100%';
                        affinityVal.innerText = '100.0%';
                    }

                    setTimeout(() => {
                        if (statusBadge) {
                            statusBadge.innerHTML = '<span class="material-symbols-outlined text-title-md text-primary-container">check_circle</span> NODO SINCRONIZADO // ACTIVO';
                            statusBadge.className = 'font-label-sm text-label-sm text-primary-container font-bold uppercase tracking-wider flex items-center gap-1';
                        }
                    }, 1200);
                }

                function resetHud() {
                    setTimeout(() => {
                        document.getElementById('hud-card-name').innerText = 'Elena Rostova // Cypher-09';
                        document.getElementById('age-readout').innerText = '28';
                        document.getElementById('hud-age').innerText = '28 CICLOS';
                        document.getElementById('hud-email').innerText = 'elena.rostova@deepnet.nexus';
                        document.getElementById('hud-dob').innerText = '2071-08-14';
                        document.getElementById('hud-node').innerText = 'NEO-TOKYO CORE // SEC 03';
                        document.getElementById('hud-status-badge').innerHTML = '<span class="w-1.5 h-1.5 rounded-full bg-secondary-container animate-pulse"></span> EN ESPERA DE INYECCIÓN';
                        document.getElementById('hud-status-badge').className = 'font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider flex items-center gap-1';
                        document.getElementById('hud-affinity-bar').style.width = '89.4%';
                        document.getElementById('hud-affinity-val').innerText = '89.4%';
                    }, 50);
                }
            </script>
        </div>
    </main>
</div>
</body>
</html>
