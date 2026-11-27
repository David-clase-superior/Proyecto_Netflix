 <main class="w-full pt-16 min-h-screen bg-background">
        <div class="flex flex-col w-full">
            <div class="relative w-full px-space-md lg:px-space-xl py-space-lg flex flex-col gap-space-lg">
                <!-- Ambient Neon Aura Decorations -->
                <div class="absolute top-10 left-1/4 w-96 h-48 bg-secondary-container/10 rounded-full blur-3xl pointer-events-none -z-10"></div>
                <div class="absolute top-40 right-10 w-80 h-64 bg-primary-container/10 rounded-full blur-3xl pointer-events-none -z-10"></div>
                <!-- Telemetry Breadcrumb Bar -->
                <div class="flex flex-wrap items-center justify-between gap-space-sm">
                    <div class="flex items-center gap-space-xs">
                        <span class="font-label-sm text-label-sm text-outline-variant uppercase">// NODE_ID:</span>
                        <span class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider">SEC_SECTOR_07</span>
                        <span class="text-outline-variant font-label-sm text-label-sm">/</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">SYNAPSE_IDENTITY_GRID</span>
                        <span class="text-outline-variant font-label-sm text-label-sm">/</span>
                        <span class="font-label-sm text-label-sm text-secondary uppercase font-bold">DIRECTORY_V4.2</span>
                    </div>
                    <div class="flex items-center gap-space-sm">
                        <div class="flex items-center gap-space-xs px-space-sm py-space-xs bg-surface-container-low rounded">
                            <span class="material-symbols-outlined text-primary-fixed-dim text-body-sm">hub</span>
                            <span class="font-label-sm text-label-sm text-on-surface">SYNAPSE LOAD: 42.8%</span>
                        </div>
                        <div class="flex items-center gap-space-xs px-space-sm py-space-xs bg-surface-container-low rounded">
                            <span class="material-symbols-outlined text-secondary text-body-sm">sync</span>
                            <span class="font-label-sm text-label-sm text-secondary-fixed">LIVE_STREAM_OK</span>
                        </div>
                    </div>
                </div>
                <!-- Data Matrix Control Toolbar -->
                <div class="rounded-xl bg-surface-container-low/80 backdrop-blur-xl p-space-md shadow-xl flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-space-md">
                    <!-- Search and Filter Pills -->
                    <div class="flex flex-wrap items-center gap-space-sm flex-1">
                        <!-- Search Input -->
                        <div class="relative flex items-center min-w-[280px] flex-1 max-w-lg">
                            <span class="material-symbols-outlined absolute left-space-sm text-primary-fixed-dim pointer-events-none text-body-md">search</span>
                            <input class="w-full pl-10 pr-space-md py-space-sm bg-surface-container-high text-on-surface placeholder:text-outline font-label-md text-label-md rounded focus:outline-none focus:bg-surface-container-highest transition-all"
                                   id="user-search-input" placeholder="BUSCAR NOMBRE, ID NEURAL, O HASH..."
                                   type="text"/>
                        </div>
                        <!-- Role Filter Dropdown Select -->
                        <div class="relative flex items-center">
                            <span class="material-symbols-outlined absolute left-space-sm text-secondary pointer-events-none text-body-md">badge</span>
                            <select class="pl-10 pr-8 py-space-sm bg-surface-container-high text-on-surface font-label-md text-label-md rounded focus:outline-none focus:bg-surface-container-highest appearance-none cursor-pointer uppercase"
                                    id="role-filter">
                                <option value="ALL">TODOS LOS RANGOS</option>
                                <option value="Admin">ADMINISTRADOR</option>
                                <option value="Netrunner">NETRUNNER</option>
                                <option value="Operador">OPERADOR</option>
                                <option value="VIP">SUSCRIPTOR VIP</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-space-xs text-outline pointer-events-none text-body-sm">arrow_drop_down</span>
                        </div>
                        <!-- Status Filter Tabs -->
                        <div class="flex items-center bg-surface-container-high p-0.5 rounded">
                            <button class="status-filter-btn px-space-sm py-space-xs rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm uppercase transition-all"
                                    data-status="ALL">TODOS
                            </button>
                            <button class="status-filter-btn px-space-sm py-space-xs rounded text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm uppercase transition-all"
                                    data-status="ONLINE">ONLINE
                            </button>
                            <button class="status-filter-btn px-space-sm py-space-xs rounded text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm uppercase transition-all"
                                    data-status="OFFLINE">OFFLINE
                            </button>
                            <button class="status-filter-btn px-space-sm py-space-xs rounded text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm uppercase transition-all"
                                    data-status="SUSPENDED">SUSPENDIDO
                            </button>
                        </div>
                    </div>
                    <!-- Action Actions & New User CTA -->
                    <div class="flex items-center justify-end gap-space-sm">
                        <button class="flex items-center gap-space-xs px-space-md py-space-sm rounded bg-surface-container-high hover:bg-surface-container-highest text-secondary-fixed font-label-sm text-label-sm uppercase transition-all"
                                id="export-btn" title="Exportar Registro del Sistema">
                            <span class="material-symbols-outlined text-body-sm">file_download</span>
                            <span>EXPORTAR CSV // DUMP</span>
                        </button>
                        <button class="flex items-center gap-space-xs px-space-lg py-space-sm rounded bg-primary-container hover:bg-primary-fixed text-on-primary-container font-label-lg text-label-lg uppercase tracking-wider transition-all shadow-[0_0_20px_rgba(0,240,255,0.35)] hover:shadow-[0_0_28px_rgba(0,240,255,0.6)]">
                            <span class="material-symbols-outlined text-title-md">person_add</span>
                            <a href="/usuarios/crear">+ NUEVO USUARIO</a>
                        </button>
                    </div>
                </div>
                <!-- Futuristic Data Grid Matrix -->
                <div class="w-full overflow-hidden rounded-xl bg-surface-container-low/90 backdrop-blur-2xl shadow-2xl flex flex-col">
                    <!-- Table Matrix Header -->
                    <div class="overflow-x-auto w-full">
                        <table class="w-full text-left min-w-[1100px] border-collapse">
                            <thead>
                            <tr class="bg-surface-container-high/90 text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
                                <th class="py-space-md px-space-md w-72">SUJETO / ID NEURAL</th>
                                <th class="py-space-md px-space-md w-44">RANGO / ACCESO</th>
                                <th class="py-space-md px-space-md w-36">FECHA ALTA</th>
                                <th class="py-space-md px-space-md w-56">CONSUMO NEURAL // ANCHO</th>
                                <th class="py-space-md px-space-md w-32">ESTADO MATRIZ</th>
                                <th class="py-space-md px-space-md text-right w-44">TERMINAL ACCIONES</th>
                            </tr>
                            </thead>
                    <!-- Pagination & Telemetry Bottom Bar -->
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-space-md px-space-md py-space-md bg-surface-container-high/90">
                        <div class="flex items-center gap-space-sm">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">MOSTRANDO 1-5 DE 14,892 IDENTIDADES</span>
                            <span class="text-outline-variant font-label-sm text-label-sm">|</span>
                            <span class="font-label-sm text-label-sm text-primary uppercase">RESP_TIME: 1.2ms</span>
                        </div>
                        <div class="flex items-center gap-space-xs">
                            <button class="w-8 h-8 rounded bg-surface-container flex items-center justify-center text-outline hover:text-on-surface hover:bg-surface-container-highest transition-colors">
                                <span class="material-symbols-outlined text-body-md">first_page</span>
                            </button>
                            <button class="w-8 h-8 rounded bg-surface-container flex items-center justify-center text-outline hover:text-on-surface hover:bg-surface-container-highest transition-colors">
                                <span class="material-symbols-outlined text-body-md">chevron_left</span>
                            </button>
                            <button class="w-8 h-8 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm font-bold shadow-[0_0_10px_rgba(0,240,255,0.4)]">
                                01
                            </button>
                            <button class="w-8 h-8 rounded bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-highest font-label-sm text-label-sm transition-colors">
                                02
                            </button>
                            <button class="w-8 h-8 rounded bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-highest font-label-sm text-label-sm transition-colors">
                                03
                            </button>
                            <span class="px-1 text-outline font-label-sm text-label-sm">...</span>
                            <button class="w-8 h-8 rounded bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-highest font-label-sm text-label-sm transition-colors">
                                99
                            </button>
                            <button class="w-8 h-8 rounded bg-surface-container flex items-center justify-center text-outline hover:text-on-surface hover:bg-surface-container-highest transition-colors">
                                <span class="material-symbols-outlined text-body-md">chevron_right</span>
                            </button>
                            <button class="w-8 h-8 rounded bg-surface-container flex items-center justify-center text-outline hover:text-on-surface hover:bg-surface-container-highest transition-colors">
                                <span class="material-symbols-outlined text-body-md">last_page</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Secondary Terminal Diagnostics Drawer -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-space-md">
                    <!-- Diagnostics Box 1 -->
                    <div class="rounded-xl bg-surface-container-low/70 backdrop-blur-md p-space-md flex flex-col justify-between">
                        <div class="flex items-center justify-between mb-space-xs">
                            <span class="font-label-sm text-label-sm text-primary uppercase font-bold">// PROTOCOLO AUTÓNOMO</span>
                            <span class="font-label-sm text-label-sm text-outline-variant">ACTIVE</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Las auditorías criptográficas de credenciales se ejecutan en ciclos de 180 segundos. La tasa
                            de falsos positivos en el firewall es inferior al 0.003%.
                        </p>
                        <div class="mt-space-sm flex items-center justify-between pt-space-xs">
                            <span class="font-label-sm text-label-sm text-secondary uppercase">HASH: SHA256-CYBERNET</span>
                            <span class="font-label-sm text-label-sm text-on-surface">STATUS: VERIFIED</span>
                        </div>
                    </div>
                    <!-- Diagnostics Box 2: Quick Terminal Action -->
                    <div class="rounded-xl bg-surface-container-low/70 backdrop-blur-md p-space-md flex flex-col justify-between">
                        <div class="flex items-center justify-between mb-space-xs">
                            <span class="font-label-sm text-label-sm text-secondary uppercase font-bold">// DUMP DE IDENTIDADES</span>
                            <span class="material-symbols-outlined text-secondary text-body-md">terminal</span>
                        </div>
                        <div class="font-label-sm text-label-sm text-outline p-space-xs bg-surface-container-highest rounded font-mono truncate">
                            &gt; curl -X POST https://api.nexus-cine.io/v4/users/export --bearer ***
                        </div>
                        <div class="mt-space-sm flex items-center justify-between">
                            <span class="font-label-sm text-label-sm text-on-surface-variant">SNAPSHOT GENERADO HOY</span>
                            <button class="font-label-sm text-label-sm text-primary hover:underline uppercase font-bold">
                                DESCARGAR (48MB)
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
 </main>
</div>
</body>
</html>