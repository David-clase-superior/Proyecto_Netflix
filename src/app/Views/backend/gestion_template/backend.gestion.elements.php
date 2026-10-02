<!-- Main Content Workspace: Data Table + Quick Inspect Panel -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
    <!-- Catalog Grid / Table -->
    <div class="lg:col-span-8 flex flex-col gap-space-md">
        <!-- Mass action toolbar -->
        <div class="flex items-center justify-between px-space-md py-space-xs bg-surface-container-low rounded-lg">
            <div class="flex items-center gap-space-sm">
                <label class="flex items-center gap-space-xs cursor-pointer">
                    <input class="w-4 h-4 rounded bg-surface-container-highest text-primary accent-primary focus:ring-0 cursor-pointer"
                           type="checkbox"/>
                    <span class="font-label-md text-label-md text-on-surface-variant">Seleccionar página (6 elementos)</span>
                </label>
                <span class="font-label-badge text-label-badge text-outline">|</span>
                <span class="font-label-badge text-label-badge text-primary uppercase font-bold">2 seleccionados</span>
            </div>
            <div class="flex items-center gap-space-xs">
                <button class="px-space-sm py-space-xs rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center gap-1 transition-colors"
                        type="button">
                    <span class="material-symbols-outlined text-[16px] text-secondary">cloud_done</span>
                    <span>Replicar a CDN Edge</span>
                </button>
                <button class="px-space-sm py-space-xs rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center gap-1 transition-colors"
                        type="button">
                    <span class="material-symbols-outlined text-[16px] text-error">block</span>
                    <span>Despublicar</span>
                </button>
            </div>
        </div>