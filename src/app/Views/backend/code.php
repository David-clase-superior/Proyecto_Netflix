<?php
    include_once "app/Views/backend/gestion_template/backend.gestion.header.php";
    include_once "app/Views/backend/gestion_template/backend.gestion.aside.php";
    include_once "app/Views/backend/gestion_template/backend.gestion.header2.php";
?>

<main class="w-full pt-16 px-space-lg flex-1 bg-surface">
    <div class="flex flex-col w-full pb-space-xl">
        <!-- Top Breadcrumb & Status Bar -->
        <div class="flex flex-wrap items-center justify-between gap-space-md py-space-md">
            <div class="flex flex-col gap-space-xs">
                <div class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md">
                    <a class="hover:text-primary transition-colors" href="#">Gestión de Catálogo</a>
                    <span class="material-symbols-outlined text-[14px] text-outline">chevron_right</span>
                    <span class="hover:text-primary transition-colors">Nueva Ingesta</span>
                    <span class="material-symbols-outlined text-[14px] text-outline">chevron_right</span>
                    <span class="text-primary font-label-md">Película</span>
                </div>
                <div class="flex items-center gap-space-sm mt-1">
                    <h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">Inserta una nueva
                        película</h1>
                    <span class="px-space-sm py-0.5 rounded-full bg-surface-container-high text-secondary font-label-badge text-label-badge uppercase tracking-widest shadow-sm">
          Pipeline de Masterizado &amp; CMS
        </span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
                    Completa la ficha técnica, metadatos y portada en alta resolución para procesar el máster de
                    emisión y sincronizar con los nodos de la CDN perimetral de StreamBlue.
                </p>
            </div>
            <!-- Top Action Buttons -->
            <div class="flex items-center gap-space-sm self-start sm:self-auto">
                <button class="flex items-center gap-space-xs px-space-md py-space-sm rounded-lg bg-surface-container text-on-surface-variant font-label-md text-label-md hover:bg-surface-container-high hover:text-on-surface transition-all shadow-sm"
                        type="button">
                    <span class="material-symbols-outlined text-[18px]">close</span>
                    <span>Descartar cambios</span>
                </button>
                <button class="flex items-center gap-space-xs px-space-md py-space-sm rounded-lg bg-surface-container-high text-primary font-label-md text-label-md hover:bg-primary/20 transition-all shadow-sm"
                        type="button">
                    <span class="material-symbols-outlined text-[18px]">bookmark</span>
                    <span>Guardar borrador</span>
                </button>
            </div>
        </div>
        <!-- Form & Preview Split Layout -->
        <form action="/movie" class="grid grid-cols-1 lg:grid-cols-12 gap-gutter mt-space-md items-start"
              enctype="multipart/form-data" id="movieForm" method="POST">
            <!-- LEFT COLUMN: Main Ingestion Form (7 cols) -->
            <div class="lg:col-span-7 flex flex-col gap-space-lg">
                <!-- Module 1: Main Title & Master Audio -->
                <div class="bg-surface-container-low rounded-xl p-space-lg flex flex-col gap-space-md shadow-md">
                    <div class="flex items-center justify-between pb-space-xs">
                        <div class="flex items-center gap-space-sm">
<span class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[20px]">movie</span>
</span>
                            <div>
                                <label class="font-headline-sm text-headline-sm text-on-surface" for="inputTitulo">Título de la película</label>

                                <p class="font-body-sm text-body-sm text-on-surface-variant">Nombre canónico
                                    registrado para interfaces y reproductor</p>
                            </div>
                        </div>
                        <span class="font-label-badge text-label-badge text-outline uppercase tracking-wider"
                              id="titleCharCount">0 / 120</span>
                    </div>
                    <div class="relative flex flex-col sm:flex-row gap-space-sm">
                        <div class="relative flex-1">
                            <input class="w-full bg-surface-container-lowest text-on-surface placeholder:text-outline font-body-md text-body-md rounded-lg px-space-md py-space-sm outline-none focus:ring-2 focus:ring-primary shadow-inner"
                                   id="inputTitulo" maxlength="120" name="titulo"
                                   placeholder="p. ej. Cyberfall 2099: Edición Definitiva" required="" type="text"/>
                        </div>
                        <div class="sm:w-44 flex-shrink-0">
                            <select class="w-full bg-surface-container text-on-surface font-label-md text-label-md rounded-lg px-space-md py-space-sm outline-none focus:ring-2 focus:ring-primary appearance-none cursor-pointer"
                                    name="idioma_master">
                                <option value="es-ES">Español (Castellano)</option>
                                <option value="es-MX">Español (Latinoamérica)</option>
                                <option value="en-US">English (Original Master)</option>
                                <option value="ja-JP">Japonés (Doblaje VO)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Module 2: Duration & Content Rating -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <!-- Duration Input -->
                    <div class="bg-surface-container-low rounded-xl p-space-lg flex flex-col justify-between gap-space-md shadow-md">
                        <div class="flex items-start justify-between">
                            <div>
                                <label class="font-headline-sm text-headline-sm text-on-surface"
                                       for="inputDuracion">Duración</label>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Minutos exactos de
                                    metraje</p>
                            </div>
                            <span class="px-space-sm py-1 rounded bg-secondary-container/20 text-secondary font-label-md text-label-md"
                                  id="runtimeFormatted">
              2h 18m
            </span>
                        </div>
                        <div class="relative flex items-center">
                            <input class="w-full bg-surface-container-lowest text-on-surface font-headline-md text-headline-md rounded-lg pl-space-md pr-16 py-space-sm outline-none focus:ring-2 focus:ring-primary shadow-inner"
                                   id="inputDuracion" max="999" min="1" name="duracion" required="" type="number"
                                   value="138"/>
                            <span class="absolute right-space-md font-label-badge text-label-badge uppercase tracking-wider text-outline">MIN</span>
                        </div>
                        <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
                            <span class="material-symbols-outlined text-[16px] text-primary">schedule</span>
                            <span>Incluye créditos de cierre y máster 24fps</span>
                        </div>
                    </div>
                    <!-- Rating / Age Category Select -->
                    <div class="bg-surface-container-low rounded-xl p-space-lg flex flex-col justify-between gap-space-md shadow-md">
                        <div class="flex items-start justify-between">
                            <div>
                                <label class="font-headline-sm text-headline-sm text-on-surface"
                                       for="optionCategoria">Clasificación</label>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Control parental y
                                    filtro legal</p>
                            </div>
                            <span class="px-2 py-0.5 rounded font-label-badge text-label-badge font-bold bg-primary-container text-on-primary-container"
                                  id="ratingBadgePreview">
              +18
            </span>
                        </div>
                        <div class="relative">
                            <select class="w-full bg-surface-container-lowest text-on-surface font-label-md text-label-md rounded-lg px-space-md py-space-sm outline-none focus:ring-2 focus:ring-primary appearance-none cursor-pointer shadow-inner"
                                    id="optionCategoria" name="genero">
                                <option data-badge="TP"
                                        data-color="bg-secondary-container text-on-secondary-container"
                                        value="Todos los públicos">Todos los públicos (TP)
                                </option>
                                <option data-badge="+12"
                                        data-color="bg-tertiary-container text-on-tertiary-container" value="+12">
                                    +12 (Adolescentes)
                                </option>
                                <option data-badge="+18" data-color="bg-primary-container text-on-primary-container"
                                        selected="" value="+18">+18 (Adultos / Restringido)
                                </option>
                            </select>
                            <span class="material-symbols-outlined absolute right-space-md top-1/2 -translate-y-1/2 text-outline pointer-events-none">unfold_more</span>
                        </div>
                        <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
                            <span class="material-symbols-outlined text-[16px] text-secondary">verified_user</span>
                            <span>Certificado ICAA / MPAA compatible</span>
                        </div>
                    </div>
                </div>
                <!-- Module 3: Genres Checkboxes as Interactive Chips -->
                <div class="bg-surface-container-low rounded-xl p-space-lg flex flex-col gap-space-md shadow-md">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface">Géneros
                                cinematográficos</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Selecciona las etiquetas
                                para el motor de recomendación algorítmica</p>
                        </div>
                        <span class="font-label-badge text-label-badge text-secondary uppercase tracking-wider">Multi-selección</span>
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-space-sm">
                        <!-- Comedia -->
                        <label class="group relative flex items-center gap-space-sm p-space-sm rounded-lg bg-surface-container cursor-pointer transition-all hover:bg-surface-container-high has-[:checked]:bg-primary-container/20 has-[:checked]:text-primary">
                            <input class="genre-checkbox h-4 w-4 rounded accent-primary bg-surface-container-lowest"
                                   id="inputGeneroComedia" name="genero[]" type="checkbox" value="Comedia"/>
                            <span class="material-symbols-outlined text-[18px] text-outline group-hover:text-primary transition-colors">sentiment_very_satisfied</span>
                            <span class="font-label-md text-label-md text-on-surface select-none">Comedia</span>
                        </label>
                        <!-- Drama -->
                        <label class="group relative flex items-center gap-space-sm p-space-sm rounded-lg bg-surface-container cursor-pointer transition-all hover:bg-surface-container-high has-[:checked]:bg-primary-container/20 has-[:checked]:text-primary">
                            <input class="genre-checkbox h-4 w-4 rounded accent-primary bg-surface-container-lowest"
                                   id="inputGeneroDrama" name="genero[]" type="checkbox" value="Drama"/>
                            <span class="material-symbols-outlined text-[18px] text-outline group-hover:text-primary transition-colors">theater_comedy</span>
                            <span class="font-label-md text-label-md text-on-surface select-none">Drama</span>
                        </label>
                        <!-- Terror -->
                        <label class="group relative flex items-center gap-space-sm p-space-sm rounded-lg bg-surface-container cursor-pointer transition-all hover:bg-surface-container-high has-[:checked]:bg-primary-container/20 has-[:checked]:text-primary">
                            <input checked=""
                                   class="genre-checkbox h-4 w-4 rounded accent-primary bg-surface-container-lowest"
                                   id="inputGeneroTerror" name="genero[]" type="checkbox" value="Terror"/>
                            <span class="material-symbols-outlined text-[18px] text-outline group-hover:text-primary transition-colors">psychology_alt</span>
                            <span class="font-label-md text-label-md text-on-surface select-none">Terror</span>
                        </label>
                        <!-- Complementary Genres -->
                        <label class="group relative flex items-center gap-space-sm p-space-sm rounded-lg bg-surface-container cursor-pointer transition-all hover:bg-surface-container-high has-[:checked]:bg-primary-container/20 has-[:checked]:text-primary">
                            <input checked=""
                                   class="genre-checkbox h-4 w-4 rounded accent-primary bg-surface-container-lowest"
                                   id="inputGeneroSciFi" name="genero[]" type="checkbox" value="Ciencia Ficción"/>
                            <span class="material-symbols-outlined text-[18px] text-outline group-hover:text-primary transition-colors">rocket_launch</span>
                            <span class="font-label-md text-label-md text-on-surface select-none">Ciencia Ficción</span>
                        </label>
                        <label class="group relative flex items-center gap-space-sm p-space-sm rounded-lg bg-surface-container cursor-pointer transition-all hover:bg-surface-container-high has-[:checked]:bg-primary-container/20 has-[:checked]:text-primary">
                            <input class="genre-checkbox h-4 w-4 rounded accent-primary bg-surface-container-lowest"
                                   id="inputGeneroAccion" name="genero[]" type="checkbox" value="Acción"/>
                            <span class="material-symbols-outlined text-[18px] text-outline group-hover:text-primary transition-colors">flash_on</span>
                            <span class="font-label-md text-label-md text-on-surface select-none">Acción</span>
                        </label>
                        <label class="group relative flex items-center gap-space-sm p-space-sm rounded-lg bg-surface-container cursor-pointer transition-all hover:bg-surface-container-high has-[:checked]:bg-primary-container/20 has-[:checked]:text-primary">
                            <input class="genre-checkbox h-4 w-4 rounded accent-primary bg-surface-container-lowest"
                                   id="inputGeneroSuspense" name="genero[]" type="checkbox" value="Suspense"/>
                            <span class="material-symbols-outlined text-[18px] text-outline group-hover:text-primary transition-colors">visibility</span>
                            <span class="font-label-md text-label-md text-on-surface select-none">Suspense</span>
                        </label>
                    </div>
                </div>
                <!-- Module 4: Description & Synopsis Textarea -->
                <div class="bg-surface-container-low rounded-xl p-space-lg flex flex-col gap-space-md shadow-md">
                    <div class="flex items-center justify-between">
                        <div>
                            <label class="font-headline-sm text-headline-sm text-on-surface" for="inputDescripcion">Descripción
                                de la película</label>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Sinopsis promocional
                                mostrada en el carrusel y ficha del usuario</p>
                        </div>
                        <span class="font-label-badge text-label-badge text-outline uppercase tracking-wider"
                              id="descWordCount">38 palabras</span>
                    </div>
                    <!-- Mini Toolbar -->
                    <div class="flex items-center gap-space-xs bg-surface-container px-space-sm py-1 rounded-t-lg">
                        <button class="p-1 rounded text-outline hover:text-on-surface hover:bg-surface-container-high"
                                title="Negrita" type="button">
                            <span class="material-symbols-outlined text-[16px]">format_bold</span>
                        </button>
                        <button class="p-1 rounded text-outline hover:text-on-surface hover:bg-surface-container-high"
                                title="Cursiva" type="button">
                            <span class="material-symbols-outlined text-[16px]">format_italic</span>
                        </button>
                        <button class="p-1 rounded text-outline hover:text-on-surface hover:bg-surface-container-high"
                                title="Cita" type="button">
                            <span class="material-symbols-outlined text-[16px]">format_quote</span>
                        </button>
                        <div class="h-4 w-px bg-outline-variant mx-space-xs"></div>
                        <button class="flex items-center gap-space-xs text-secondary font-label-badge text-label-badge uppercase tracking-wider px-space-xs py-0.5 rounded hover:bg-surface-container-high"
                                id="btnAIAssist" type="button">
                            <span class="material-symbols-outlined text-[14px]">auto_awesome</span>
                            <span>Optimizar con IA</span>
                        </button>
                    </div>
                    <textarea
                            class="w-full bg-surface-container-lowest text-on-surface placeholder:text-outline font-body-md text-body-md rounded-b-lg p-space-md outline-none focus:ring-2 focus:ring-primary shadow-inner resize-y -mt-space-md"
                            id="inputDescripcion" name="descripcion"
                            placeholder="Escribe la sinopsis del largometraje..." required="" rows="4">En una metrópolis dominada por megacorporaciones de cómputo cuántico, un programador rebelde descubre una anomalía en la red neuronal global que amenaza con alterar permanentemente la percepción colectiva del tiempo y la memoria.</textarea>
                </div>
                <!-- Module 5: Cover Artwork Upload (Drag & Drop) -->
                <div class="bg-surface-container-low rounded-xl p-space-lg flex flex-col gap-space-md shadow-md">
                    <div class="flex items-center justify-between">
                        <div>
                            <label class="font-headline-sm text-headline-sm text-on-surface" for="inputPortada">Inserta
                                la portada</label>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Key visual ratio 2:3
                                vertical (Mínimo recomendado: 2160 × 3240 px)</p>
                        </div>
                        <span class="px-space-sm py-0.5 rounded bg-surface-container text-outline font-label-badge text-label-badge uppercase">Máx. 50 MB</span>
                    </div>
                    <!-- Drag & Drop Zone -->
                    <div class="group relative rounded-xl bg-surface-container-lowest p-space-xl flex flex-col items-center justify-center text-center transition-all cursor-pointer hover:bg-surface-container-high/60"
                         id="dropZone">
                        <input accept="image/png, image/jpeg, image/webp"
                               class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
                               id="inputPortada" name="portada" type="file"/>
                        <div class="w-14 h-14 rounded-full bg-surface-container-high group-hover:bg-primary/20 flex items-center justify-center text-primary transition-transform group-hover:scale-110 mb-space-sm">
                            <span class="material-symbols-outlined text-[28px]">cloud_upload</span>
                        </div>
                        <span class="font-headline-sm text-headline-sm text-on-surface mb-1">Arrastra tu carátula aquí o pulsa para examinar</span>
                        <p class="font-body-sm text-body-sm text-on-surface-variant max-w-sm mb-space-sm">
                            Formatos admitidos: ProRes Poster, WebP Ultra, JPEG 2000, PNG (RGB 10-bit Color
                            Profile).
                        </p>
                        <div class="flex items-center gap-space-sm">
<span class="inline-flex items-center gap-1 font-label-badge text-label-badge text-secondary bg-secondary-container/10 px-space-sm py-0.5 rounded">
<span class="material-symbols-outlined text-[12px]">check_circle</span> 4K Ultra HD
            </span>
                            <span class="inline-flex items-center gap-1 font-label-badge text-label-badge text-outline bg-surface-container px-space-sm py-0.5 rounded">
<span class="material-symbols-outlined text-[12px]">photo_size_select_actual</span> 2:3 Standard
            </span>
                        </div>
                    </div>
                    <!-- File Upload Progress Status (Simulated) -->
                    <div class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container">
                        <div class="flex items-center gap-space-sm">
                            <span class="material-symbols-outlined text-secondary text-[20px]">image</span>
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-on-surface" id="fileNameDisplay">cyberfall_official_master_2160x3240.webp</span>
                                <span class="font-body-sm text-body-sm text-outline">18.4 MB • Comprobado con hash SHA-256</span>
                            </div>
                        </div>
                        <span class="font-label-badge text-label-badge text-secondary uppercase bg-secondary-container/20 px-space-sm py-0.5 rounded">Validado</span>
                    </div>
                </div>
                <!-- Action Buttons Row -->
                <div class="flex flex-col sm:flex-row items-center justify-between gap-space-md pt-space-sm">
                    <button class="w-full sm:w-auto flex items-center justify-center gap-space-xs px-space-lg py-space-sm rounded-lg bg-surface-container-high text-on-surface font-label-lg text-label-lg hover:bg-surface-bright transition-all shadow-sm"
                            type="button">
                        <span class="material-symbols-outlined text-[20px]">event</span>
                        <span>Programar estreno</span>
                    </button>
                    <button class="w-full sm:w-auto flex items-center justify-center gap-space-sm px-space-xl py-space-sm rounded-lg bg-gradient-to-r from-primary-container to-secondary font-label-lg text-label-lg text-on-primary-fixed font-bold hover:opacity-95 shadow-[0_4px_24px_rgba(77,142,255,0.4)] transition-all transform hover:-translate-y-0.5"
                            type="submit">
                        <span class="material-symbols-outlined text-[20px]">publish</span>
                        <span>Publicar película en Catálogo</span>
                    </button>
                </div>
            </div>
            <!-- RIGHT COLUMN: Live Front-end Card Preview & CDN Specs (5 cols) -->
            <div class="lg:col-span-5 flex flex-col gap-space-lg sticky top-20">
                <!-- Section Tag -->
                <div class="flex items-center justify-between px-space-xs">
<span class="font-label-badge text-label-badge text-secondary uppercase tracking-widest flex items-center gap-space-xs">
<span class="h-2 w-2 rounded-full bg-secondary animate-pulse"></span>
          Previsualización Dinámica en Vivo
        </span>
                    <span class="font-body-sm text-body-sm text-outline">Modo Suscriptor 4K HDR</span>
                </div>
                <!-- STREAMBLUE APP POSTER CARD (Live reactive replica) -->
                <div class="relative w-full max-w-sm mx-auto group rounded-xl overflow-hidden bg-surface-container-lowest shadow-2xl transition-transform duration-300">
                    <!-- Poster Image Container (2:3 Aspect Ratio) -->
                    <div class="relative aspect-[2/3] w-full overflow-hidden bg-surface-container-highest">
                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                             data-alt="Cinematic high contrast vertical movie poster of a futuristic cyberpunk city bathed in deep navy blue, vibrant neon cyan and cobalt light with an enigmatic hooded figure looking over a towering hologram skyline in 8k octane render."
                             id="previewPosterImg"
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-hCcm5lD_GbKjEuJ8gpEgNKodIozAKYO-2OIq3f2YfMxWhxSAEK327vs_DTlI-TA95ssZUy5WnCAdbExtRQYKPGjVimgdz61H9H9k91WRfU67QhWRgmyYVTnQEAZSROtsbfPAcVAaby7fuwNFG-wN7t5M_Meq8x9BYq5MFitF9YXc7cseProljgccqRh9QDUQfOFlUYO1K51ZlVE_kjLAaq6I9VAKLJoV3XlJB-TejiWVP7wmvZS_"/>
                        <!-- Gradient Scrim for atmospheric depth -->
                        <div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest via-surface-container-lowest/40 to-transparent"></div>
                        <!-- Top Chips (Quality & Live Tag) -->
                        <div class="absolute top-space-md left-space-md right-space-md flex items-center justify-between pointer-events-none">
<span class="px-space-sm py-0.5 rounded bg-surface-container-lowest/80 backdrop-blur-md text-secondary font-label-badge text-label-badge tracking-wider uppercase shadow-sm">
              Original
            </span>
                            <div class="flex items-center gap-1">
<span class="px-1.5 py-0.5 rounded bg-surface-container-lowest/80 backdrop-blur-md text-on-surface font-label-badge text-label-badge">
                4K HDR
              </span>
                                <span class="px-1.5 py-0.5 rounded bg-surface-container-lowest/80 backdrop-blur-md text-on-surface font-label-badge text-label-badge">
                ATMOS
              </span>
                            </div>
                        </div>
                        <!-- Dynamic Floating Action Controls overlay (Mock Netflix/StreamBlue hover) -->
                        <div class="absolute bottom-space-lg left-space-md right-space-md flex flex-col gap-space-sm z-20">
                            <!-- Genre Pills (Dynamic) -->
                            <div class="flex flex-wrap items-center gap-1 mb-1" id="previewGenreChips">
                                <span class="px-2 py-0.5 rounded-full bg-secondary/15 text-secondary font-label-badge text-label-badge">Terror</span>
                                <span class="px-2 py-0.5 rounded-full bg-secondary/15 text-secondary font-label-badge text-label-badge">Ciencia Ficción</span>
                            </div>
                            <!-- Title Preview -->
                            <h2 class="font-headline-md text-headline-md text-on-surface font-bold leading-tight drop-shadow-md"
                                id="previewTitulo">
                                Cyberfall 2099: Edición Definitiva
                            </h2>
                            <!-- Metadata Row (Duration, Rating, Match) -->
                            <div class="flex items-center gap-space-sm font-label-md text-label-md text-on-surface-variant">
                                <span class="text-secondary font-bold">98% Coincidencia</span>
                                <span class="px-1.5 py-0.5 rounded bg-primary-container text-on-primary-container font-label-badge text-label-badge font-bold"
                                      id="previewRating">
                +18
              </span>
                                <span class="text-on-surface font-body-sm text-body-sm"
                                      id="previewDuration">2h 18m</span>
                                <span class="px-1 py-0.5 rounded bg-surface-container text-outline font-label-badge text-label-badge">HD</span>
                            </div>
                            <!-- Synopsis Preview (Line-clamped) -->
                            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1"
                               id="previewSinopsis">
                                En una metrópolis dominada por megacorporaciones de cómputo cuántico, un programador
                                rebelde descubre una anomalía en la red neuronal global...
                            </p>
                            <!-- Buttons Mock -->
                            <div class="flex items-center gap-space-sm pt-space-xs">
                                <button class="flex-1 flex items-center justify-center gap-space-xs py-2 px-space-md rounded-full bg-on-surface text-surface-container-lowest font-label-md text-label-md font-bold shadow-lg hover:bg-primary transition-colors"
                                        type="button">
                                        <span class="material-symbols-outlined text-[20px]"
                                              style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                                    <span>Reproducir</span>
                                </button>
                                <button class="w-9 h-9 rounded-full bg-surface-container-high/80 backdrop-blur-md text-on-surface flex items-center justify-center hover:bg-surface-bright transition-colors shadow"
                                        type="button">
                                    <span class="material-symbols-outlined text-[18px]">add</span>
                                </button>
                                <button class="w-9 h-9 rounded-full bg-surface-container-high/80 backdrop-blur-md text-on-surface flex items-center justify-center hover:bg-surface-bright transition-colors shadow"
                                        type="button">
                                    <span class="material-symbols-outlined text-[18px]">thumb_up</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cloud Ingestion & Edge CDN Status Module -->
                <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col gap-space-sm shadow-md">
                    <div class="flex items-center justify-between pb-space-xs">
<span class="font-label-md text-label-md text-on-surface flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[18px]">hub</span>
<span>Ruta de Transcodificación &amp; CDN</span>
</span>
                        <span class="h-2 w-2 rounded-full bg-secondary"></span>
                    </div>
                    <div class="grid grid-cols-2 gap-space-sm text-body-sm">
                        <div class="p-space-sm rounded-lg bg-surface-container-lowest flex flex-col">
                            <span class="font-label-badge text-label-badge text-outline uppercase">Perfil AV1 / HEVC</span>
                            <span class="font-label-md text-label-md text-on-surface mt-0.5">Dual Multibitrate 2160p</span>
                        </div>
                        <div class="p-space-sm rounded-lg bg-surface-container-lowest flex flex-col">
                            <span class="font-label-badge text-label-badge text-outline uppercase">Master Audio</span>
                            <span class="font-label-md text-label-md text-on-surface mt-0.5">E-AC-3 JOC + Spatial</span>
                        </div>
                    </div>
                    <div class="p-space-sm rounded-lg bg-surface-container-lowest flex items-center justify-between">
                        <div class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-secondary text-[18px]">cloud_sync</span>
                            <span class="font-body-sm text-body-sm text-on-surface">Sincronización Perimetral (12 Zonas)</span>
                        </div>
                        <span class="font-label-badge text-label-badge text-primary uppercase">Listo al enviar</span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        // Real-time synchronization between form fields and Live Preview Card
        const titleInput = document.getElementById('inputTitulo');
        const previewTitle = document.getElementById('previewTitulo');
        const titleCharCount = document.getElementById('titleCharCount');

        const duracionInput = document.getElementById('inputDuracion');
        const runtimeFormatted = document.getElementById('runtimeFormatted');
        const previewDuration = document.getElementById('previewDuration');

        const descTextarea = document.getElementById('inputDescripcion');
        const previewSinopsis = document.getElementById('previewSinopsis');
        const descWordCount = document.getElementById('descWordCount');

        const categoriaSelect = document.getElementById('optionCategoria');
        const previewRating = document.getElementById('previewRating');
        const ratingBadgePreview = document.getElementById('ratingBadgePreview');

        const genreCheckboxes = document.querySelectorAll('.genre-checkbox');
        const previewGenreContainer = document.getElementById('previewGenreChips');

        const fileInput = document.getElementById('inputPortada');
        const fileNameDisplay = document.getElementById('fileNameDisplay');
        const previewPosterImg = document.getElementById('previewPosterImg');

        // Title sync
        if (titleInput && previewTitle) {
            titleInput.addEventListener('input', (e) => {
                const val = e.target.value.trim();
                previewTitle.textContent = val || 'Título de la película';
                titleCharCount.textContent = `${e.target.value.length} / 120`;
            });
        }

        // Duration formatting (minutes -> h m)
        function formatMinutes(min) {
            const total = parseInt(min, 10);
            if (isNaN(total) || total <= 0) return '0 min';
            const hours = Math.floor(total / 60);
            const remainder = total % 60;
            if (hours > 0) {
                return remainder > 0 ? `${hours}h ${remainder}m` : `${hours}h`;
            }
            return `${remainder}m`;
        }

        if (duracionInput && previewDuration && runtimeFormatted) {
            duracionInput.addEventListener('input', (e) => {
                const formatted = formatMinutes(e.target.value);
                runtimeFormatted.textContent = formatted;
                previewDuration.textContent = formatted;
            });
        }

        // Description sync
        if (descTextarea && previewSinopsis) {
            descTextarea.addEventListener('input', (e) => {
                const text = e.target.value;
                previewSinopsis.textContent = text || 'Sin descripción disponible...';
                const words = text.trim() ? text.trim().split(/\s+/).length : 0;
                descWordCount.textContent = `${words} palabras`;
            });
        }

        // Age category sync
        if (categoriaSelect && previewRating && ratingBadgePreview) {
            categoriaSelect.addEventListener('change', (e) => {
                const selected = e.target.options[e.target.selectedIndex];
                const badge = selected.getAttribute('data-badge') || selected.value;
                const color = selected.getAttribute('data-color') || 'bg-primary-container text-on-primary-container';

                previewRating.textContent = badge;
                ratingBadgePreview.textContent = badge;
                previewRating.className = `px-1.5 py-0.5 rounded font-label-badge text-label-badge font-bold ${color}`;
                ratingBadgePreview.className = `px-2 py-0.5 rounded font-label-badge text-label-badge font-bold ${color}`;
            });
        }

        // Genres chips sync
        function updateGenreChips() {
            if (!previewGenreContainer) return;
            previewGenreContainer.innerHTML = '';
            const selected = Array.from(genreCheckboxes).filter(cb => cb.checked);
            if (selected.length === 0) {
                const emptySpan = document.createElement('span');
                emptySpan.className = 'px-2 py-0.5 rounded-full bg-surface-container text-outline font-label-badge text-label-badge';
                emptySpan.textContent = 'Sin géneros';
                previewGenreContainer.appendChild(emptySpan);
                return;
            }
            selected.slice(0, 3).forEach(cb => {
                const chip = document.createElement('span');
                chip.className = 'px-2 py-0.5 rounded-full bg-secondary/15 text-secondary font-label-badge text-label-badge';
                chip.textContent = cb.value;
                previewGenreContainer.appendChild(chip);
            });
        }

        genreCheckboxes.forEach(cb => cb.addEventListener('change', updateGenreChips));

        // Local image file preview
        if (fileInput) {
            fileInput.addEventListener('change', (e) => {
                const file = e.target.files && e.target.files[0];
                if (file) {
                    fileNameDisplay.textContent = file.name;
                    const reader = new FileReader();
                    reader.onload = (event) => {
                        if (previewPosterImg) {
                            previewPosterImg.src = event.target.result;
                        }
                    };
                    reader.readAsDataURL(file);
                }
            });
        }
    </script>
</main>
</div>
</body>
</html>