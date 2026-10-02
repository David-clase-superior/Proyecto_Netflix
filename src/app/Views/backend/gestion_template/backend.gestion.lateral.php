<!-- Quick Inspection Floating Panel -->
<div class="lg:col-span-4 sticky top-20 flex flex-col gap-space-md">
    <div class="bg-surface-container-low p-space-lg rounded-2xl flex flex-col gap-space-md shadow-xl relative overflow-hidden">
        <!-- Ambient lighting accent inside inspector -->
        <div class="absolute -top-16 -right-16 w-44 h-44 rounded-full bg-primary/10 blur-3xl pointer-events-none"></div>
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-space-xs">
                <span class="material-symbols-outlined text-secondary text-[20px]">view_in_ar</span>
                <span class="font-label-badge text-label-badge uppercase tracking-wider text-secondary">Inspector de Título</span>
            </div>
            <div class="flex items-center gap-1">
                <span class="font-label-badge text-label-badge bg-surface-container-high px-2 py-0.5 rounded text-on-surface">Bundle v4.2</span>
            </div>
        </div>
        <!-- Hero Image & Poster Header -->
        <div class="relative w-full h-48 rounded-xl overflow-hidden bg-surface-container-high shadow-inner">
            <img class="w-full h-full object-cover"
                 data-alt="Wide cinematic banner showing Astronaut Zero standing over an extraterrestrial crater under an immense electric blue nebula galaxy, vivid cyan reflections and dark atmosphere"
                 src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrJum1wOvT5Bp02nyGYCab_v5yzse47qCQVTffDs2F3sE9dQ_sf0E0BIxxf-UwWNzrM071ISWGA9GINizCr0wDSLHFaPplfL5rtKXQxpn7joUF2KhWKkMdm0oTAUk1jInMcapU3o3vWIrI-AnH-JNn1vvkFImSnwDXB_b92Bo_49_lAoq6RxMOiXPT_EDTq-SvYy7_xFlU2tENOZoJzMK1v5f4rxqw-9-T1nHrKOGP8nNbVrt-qHqy"/>
            <div class="absolute inset-0 bg-gradient-to-t from-surface-container-low via-transparent to-transparent"></div>
            <div class="absolute bottom-space-sm left-space-md right-space-md flex items-end justify-between">
                <div class="flex flex-col">
                    <span class="font-label-badge text-label-badge text-secondary uppercase font-bold tracking-widest">Selected asset</span>
                    <span class="font-headline-md text-headline-md text-on-surface leading-tight drop-shadow">Astronaut Zero: Odyssey</span>
                </div>
                <span class="px-space-xs py-0.5 rounded bg-surface-container-lowest/80 text-secondary font-label-badge text-label-badge">RTX Cluster</span>
            </div>
        </div>
        <!-- Cloud Streaming Toggle Box -->
        <div class="p-space-md bg-surface-container rounded-xl flex items-center justify-between gap-space-md">
            <div class="flex flex-col">
                <span class="font-label-md text-label-md text-on-surface">Habilitar Cloud Streaming</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant">Instancias GPU listas en Edge Nodes</span>
            </div>
            <label class="relative inline-flex items-center cursor-pointer">
                <input checked="" class="sr-only peer" type="checkbox"/>
                <div class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-secondary"></div>
            </label>
        </div>
        <!-- Streaming & Latency Diagnostics Telemetry -->
        <div class="grid grid-cols-2 gap-space-sm">
            <div class="p-space-sm bg-surface-container rounded-lg flex flex-col">
                <span class="font-body-sm text-body-sm text-outline">Latencia Media P95</span>
                <span class="font-headline-md text-headline-md text-secondary mt-1">11.4 ms</span>
                <span class="font-label-badge text-label-badge text-on-surface-variant mt-0.5">Europa Central CDN</span>
            </div>
            <div class="p-space-sm bg-surface-container rounded-lg flex flex-col">
                <span class="font-body-sm text-body-sm text-outline">Bitrate Óptimo</span>
                <span class="font-headline-md text-headline-md text-primary mt-1">45 Mbps</span>
                <span class="font-label-badge text-label-badge text-on-surface-variant mt-0.5">HEVC Main10 / 120 FPS</span>
            </div>
        </div>
        <!-- Edge Cache Allocation Visual Bar -->
        <div class="p-space-md bg-surface-container rounded-xl flex flex-col gap-space-xs">
            <div class="flex justify-between items-center">
                <span class="font-label-md text-label-md text-on-surface">Caché en Edge Nodes</span>
                <span class="font-label-md text-label-md text-secondary">64.2 GB / 70 GB (91%)</span>
            </div>
            <div class="w-full h-2 rounded-full bg-surface-container-highest overflow-hidden">
                <div class="h-full bg-gradient-to-r from-primary to-secondary rounded-full"
                     style="width: 91%;"></div>
            </div>
            <div class="flex items-center justify-between text-outline font-label-badge text-label-badge mt-1">
                <span>96/102 PoPs Globales sincronizados</span>
                <span class="text-secondary flex items-center gap-0.5"><span
                        class="w-1.5 h-1.5 rounded-full bg-secondary"></span>OK</span>
            </div>
        </div>
        <!-- Metadata Spec Details Accordion-like list -->
        <div class="flex flex-col divide-y divide-transparent gap-space-xs">
            <div class="flex items-center justify-between py-1">
                <span class="font-body-sm text-body-sm text-outline">Identificador Global</span>
                <span class="font-label-md text-label-md text-on-surface">urn:streamblue:asset:sb9041</span>
            </div>
            <div class="flex items-center justify-between py-1">
                <span class="font-body-sm text-body-sm text-outline">Motor de Ejecución</span>
                <span class="font-label-md text-label-md text-on-surface">Unreal Engine 5.4</span>
            </div>
            <div class="flex items-center justify-between py-1">
                <span class="font-body-sm text-body-sm text-outline">Perfil de Controles</span>
                <span class="font-label-md text-label-md text-on-surface">DualSense, Xbox, Touch Virtual</span>
            </div>
            <div class="flex items-center justify-between py-1">
                <span class="font-body-sm text-body-sm text-outline">Regiones Autorizadas</span>
                <span class="font-label-md text-label-md text-on-surface">Global (Excl. CN, RU)</span>
            </div>
        </div>
        <!-- Action Stack -->
        <div class="flex flex-col gap-space-xs mt-space-xs">
            <button class="w-full py-space-sm px-space-md rounded-xl bg-gradient-to-r from-secondary-container to-primary text-on-secondary font-label-lg text-label-lg font-bold flex items-center justify-center gap-space-xs hover:opacity-95 transition-all shadow-lg shadow-secondary-container/20"
                    type="button">
                <span class="material-symbols-outlined text-[20px]">sports_esports</span>
                <span>Lanzar Sesión de Test en Vivo</span>
            </button>
            <div class="grid grid-cols-2 gap-space-xs">
                <button class="py-space-xs px-space-sm rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center justify-center gap-1 transition-colors"
                        type="button">
                    <span class="material-symbols-outlined text-[16px]">edit_note</span>
                    <span>Editar Ficha</span>
                </button>
                <button class="py-space-xs px-space-sm rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center justify-center gap-1 transition-colors"
                        type="button">
                    <span class="material-symbols-outlined text-[16px]">history</span>
                    <span>Registro Logs</span>
                </button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</main>
</div>
</body>
</html>