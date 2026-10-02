<!-- Central Visualizations: Bandwidth Analytics & Cloud Node Infrastructure -->
<section class="grid grid-cols-1 xl:grid-cols-12 gap-space-md">
    <!-- Big Real-time Bandwidth & Streaming Chart (7 cols on XL) -->
    <div class="xl:col-span-7 p-space-lg rounded-xl bg-surface-container-low shadow-md flex flex-col justify-between">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm mb-space-md">
            <div>
                <span class="font-label-badge text-label-badge text-secondary uppercase tracking-widest">Telemetría de Red CDN</span>
                <h2 class="font-headline-md text-headline-md text-on-surface font-semibold tracking-tight">
                    Tráfico de Ancho de Banda & Sesiones 24h</h2>
            </div>
            <div class="flex items-center gap-space-sm text-body-sm font-body-sm">
                <div class="flex items-center gap-1.5">
                    <span class="w-3 h-3 rounded bg-primary"></span>
                    <span class="text-on-surface-variant">Throughput (Tbps)</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <span class="w-3 h-3 rounded bg-secondary"></span>
                    <span class="text-on-surface-variant">Cloud Gaming FPS</span>
                </div>
            </div>
        </div>
        <!-- Inline SVG Interactive Telemetry Chart -->
        <div class="relative w-full h-64 flex flex-col justify-end pt-4">
            <!-- Background Grid Lines -->
            <div class="absolute inset-0 flex flex-col justify-between pointer-events-none opacity-20">
                <div class="w-full h-px bg-outline"></div>
                <div class="w-full h-px bg-outline"></div>
                <div class="w-full h-px bg-outline"></div>
                <div class="w-full h-px bg-outline"></div>
            </div>
            <svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewbox="0 0 700 220">
                <defs>
                    <lineargradient id="primaryGlow" x1="0" x2="0" y1="0" y2="1">
                        <stop offset="0%" stop-color="#adc6ff" stop-opacity="0.35"></stop>
                        <stop offset="100%" stop-color="#adc6ff" stop-opacity="0.0"></stop>
                    </lineargradient>
                    <lineargradient id="secondaryGlow" x1="0" x2="0" y1="0" y2="1">
                        <stop offset="0%" stop-color="#4cd7f6" stop-opacity="0.25"></stop>
                        <stop offset="100%" stop-color="#4cd7f6" stop-opacity="0.0"></stop>
                    </lineargradient>
                </defs>
                <!-- Area 1 (Bandwidth) -->
                <polygon fill="url(#primaryGlow)"
                         points="0,170 50,155 100,162 160,130 220,140 280,95 340,110 400,65 470,70 540,35 610,48 700,20 700,220 0,220"></polygon>
                <polyline fill="none"
                          points="0,170 50,155 100,162 160,130 220,140 280,95 340,110 400,65 470,70 540,35 610,48 700,20"
                          stroke="#adc6ff" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="3"></polyline>
                <!-- Area 2 (Cloud Gaming Streams) -->
                <polygon fill="url(#secondaryGlow)"
                         points="0,195 50,190 100,185 160,160 220,165 280,130 340,145 400,105 470,110 540,75 610,80 700,55 700,220 0,220"></polygon>
                <polyline fill="none"
                          points="0,195 50,190 100,185 160,160 220,165 280,130 340,145 400,105 470,110 540,75 610,80 700,55"
                          stroke="#4cd7f6" stroke-dasharray="4 2" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2.5"></polyline>
                <!-- Highlight Marker -->
                <circle class="animate-pulse" cx="540" cy="35" fill="#4cd7f6" r="5"></circle>
                <line stroke="#4cd7f6" stroke-dasharray="2 2" stroke-opacity="0.4" stroke-width="1.5"
                      x1="540" x2="540" y1="35" y2="220"></line>
            </svg>
            <!-- Peak Indicator Floating Chip -->
            <div class="absolute top-2 left-[74%] transform -translate-x-1/2 px-2.5 py-1 rounded bg-surface-container-highest text-secondary shadow-lg font-label-badge text-label-badge flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                Pico: 48.6 Tbps @ 21:00 UTC
            </div>
        </div>
        <!-- X-axis Timeline Labels -->
        <div class="flex justify-between items-center text-outline font-label-badge text-label-badge pt-space-sm">
            <span>00:00</span>
            <span>04:00</span>
            <span>08:00</span>
            <span>12:00</span>
            <span>16:00</span>
            <span>20:00</span>
            <span class="text-secondary font-bold">24:00 (Ahora)</span>
        </div>
        <!-- Bottom Mini Telemetry Strips -->
        <div class="grid grid-cols-3 gap-space-sm mt-space-md pt-space-sm bg-surface-container rounded-lg p-space-sm">
            <div class="flex flex-col">
                <span class="text-outline font-label-badge text-label-badge">TRÁFICO TOTAL HOY</span>
                <span class="font-headline-sm text-headline-sm text-on-surface">612.4 Petabytes</span>
            </div>
            <div class="flex flex-col">
                <span class="text-outline font-label-badge text-label-badge">BITRATE PROMEDIO 4K</span>
                <span class="font-headline-sm text-headline-sm text-primary">24.8 Mbps AV1</span>
            </div>
            <div class="flex flex-col">
                <span class="text-outline font-label-badge text-label-badge">FRAME-DROP RATE</span>
                <span class="font-headline-sm text-headline-sm text-secondary">0.002% (Ultra Low)</span>
            </div>
        </div>
    </div>
    <!-- Edge Nodes & Cloud Gaming Infrastructure (5 cols on XL) -->
    <div class="xl:col-span-5 p-space-lg rounded-xl bg-surface-container-low shadow-md flex flex-col justify-between">
        <div class="flex items-center justify-between mb-space-md">
            <div>
                <span class="font-label-badge text-label-badge text-secondary uppercase tracking-widest">Topología de Edge Compute</span>
                <h2 class="font-headline-md text-headline-md text-on-surface font-semibold tracking-tight">
                    Nodos de Streaming & Nube</h2>
            </div>
            <button class="px-space-sm py-1 rounded bg-surface-container-high text-primary hover:text-primary-fixed font-label-badge text-label-badge tracking-wider uppercase transition-colors"
                    type="button">
                Topology Map
            </button>
        </div>
        <!-- Node List -->
        <div class="flex flex-col gap-space-sm flex-1 justify-center">
            <!-- Node 1: Frankfurt -->
            <div class="p-space-sm rounded-lg bg-surface-container flex items-center justify-between hover:bg-surface-container-high transition-colors">
                <div class="flex items-center gap-space-sm min-w-0">
                    <div class="w-8 h-8 rounded-lg bg-primary-container/20 text-primary flex items-center justify-center font-bold text-xs">
                        EU
                    </div>
                    <div class="flex flex-col min-w-0">
                        <span class="font-label-lg text-label-lg text-on-surface truncate font-semibold">Frankfurt (fra-01)</span>
                        <span class="font-body-sm text-body-sm text-outline flex items-center gap-1">
                RTX L40S Cluster • 96 GPUs
              </span>
                    </div>
                </div>
                <div class="flex items-center gap-space-md">
                    <div class="text-right">
                        <span class="font-label-badge text-label-badge px-2 py-0.5 rounded bg-surface-container-highest text-secondary">7ms</span>
                        <div class="text-[11px] text-on-surface-variant font-medium mt-0.5">82% Carga</div>
                    </div>
                    <button class="p-1.5 rounded-full hover:bg-surface-container-highest text-outline hover:text-on-surface transition-colors"
                            title="Gestionar clúster" type="button">
                        <span class="material-symbols-outlined text-[18px]">tune</span>
                    </button>
                </div>
            </div>
            <!-- Node 2: Madrid -->
            <div class="p-space-sm rounded-lg bg-surface-container flex items-center justify-between hover:bg-surface-container-high transition-colors">
                <div class="flex items-center gap-space-sm min-w-0">
                    <div class="w-8 h-8 rounded-lg bg-secondary-container/20 text-secondary flex items-center justify-center font-bold text-xs">
                        ES
                    </div>
                    <div class="flex flex-col min-w-0">
                        <span class="font-label-lg text-label-lg text-on-surface truncate font-semibold">Madrid (mad-02)</span>
                        <span class="font-body-sm text-body-sm text-outline flex items-center gap-1">
                Edge Caching VOD • NVMe SAN
              </span>
                    </div>
                </div>
                <div class="flex items-center gap-space-md">
                    <div class="text-right">
                        <span class="font-label-badge text-label-badge px-2 py-0.5 rounded bg-surface-container-highest text-secondary">4ms</span>
                        <div class="text-[11px] text-on-surface-variant font-medium mt-0.5">54% Carga</div>
                    </div>
                    <button class="p-1.5 rounded-full hover:bg-surface-container-highest text-outline hover:text-on-surface transition-colors"
                            title="Gestionar clúster" type="button">
                        <span class="material-symbols-outlined text-[18px]">tune</span>
                    </button>
                </div>
            </div>
            <!-- Node 3: Virginia -->
            <div class="p-space-sm rounded-lg bg-surface-container flex items-center justify-between hover:bg-surface-container-high transition-colors">
                <div class="flex items-center gap-space-sm min-w-0">
                    <div class="w-8 h-8 rounded-lg bg-primary-container/20 text-primary flex items-center justify-center font-bold text-xs">
                        US
                    </div>
                    <div class="flex flex-col min-w-0">
                        <span class="font-label-lg text-label-lg text-on-surface truncate font-semibold">Virginia (iad-04)</span>
                        <span class="font-body-sm text-body-sm text-outline flex items-center gap-1">
                Cloud Gaming Hub East • 128 GPUs
              </span>
                    </div>
                </div>
                <div class="flex items-center gap-space-md">
                    <div class="text-right">
                        <span class="font-label-badge text-label-badge px-2 py-0.5 rounded bg-surface-container-highest text-secondary">19ms</span>
                        <div class="text-[11px] text-on-surface-variant font-medium mt-0.5">76% Carga</div>
                    </div>
                    <button class="p-1.5 rounded-full hover:bg-surface-container-highest text-outline hover:text-on-surface transition-colors"
                            title="Gestionar clúster" type="button">
                        <span class="material-symbols-outlined text-[18px]">tune</span>
                    </button>
                </div>
            </div>
            <!-- Node 4: São Paulo -->
            <div class="p-space-sm rounded-lg bg-surface-container flex items-center justify-between hover:bg-surface-container-high transition-colors">
                <div class="flex items-center gap-space-sm min-w-0">
                    <div class="w-8 h-8 rounded-lg bg-surface-container-highest text-outline flex items-center justify-center font-bold text-xs">
                        SA
                    </div>
                    <div class="flex flex-col min-w-0">
                        <span class="font-label-lg text-label-lg text-on-surface truncate font-semibold">São Paulo (gru-01)</span>
                        <span class="font-body-sm text-body-sm text-outline flex items-center gap-1">
                VOD CDN Relay • Latam Edge
              </span>
                    </div>
                </div>
                <div class="flex items-center gap-space-md">
                    <div class="text-right">
                        <span class="font-label-badge text-label-badge px-2 py-0.5 rounded bg-surface-container-highest text-secondary">31ms</span>
                        <div class="text-[11px] text-on-surface-variant font-medium mt-0.5">41% Carga</div>
                    </div>
                    <button class="p-1.5 rounded-full hover:bg-surface-container-highest text-outline hover:text-on-surface transition-colors"
                            title="Gestionar clúster" type="button">
                        <span class="material-symbols-outlined text-[18px]">tune</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Action Footer for Clústeres -->
        <div class="mt-space-md pt-space-xs flex items-center justify-between">
            <span class="font-label-badge text-label-badge text-outline uppercase tracking-wider">4 Regiones Activas • 0 Incidentes</span>
            <button class="flex items-center gap-1 text-primary hover:text-primary-fixed font-label-md text-label-md transition-colors"
                    type="button">
                <span>Gestionar todos los clústeres</span>
                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
            </button>
        </div>
    </div>
</section>
