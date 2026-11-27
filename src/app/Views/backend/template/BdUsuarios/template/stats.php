<br><br><br><br><br>
<!-- Header Stats Summary Bar (4 Cyber Metric Cards) -->
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-space-md">
    <!-- Usuarios -->
    <div class="relative overflow-hidden rounded-xl bg-surface-container-low/90 backdrop-blur-xl p-space-md shadow-xl flex flex-col justify-between">
        <div class="flex items-start justify-between">
            <div class="flex flex-col">
                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">USUARIOS REGISTRADOS</span>
                <span class="font-display-hero text-headline-lg font-bold text-primary mt-space-xs tracking-tight">
                    <?= count($usuarios)?>
                </span>
            </div>
            <a href="/usuarios/crear"
               class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-primary-container shadow-inner">
                <span class="material-symbols-outlined">group</span>
            </a>
        </div>
        <div class="flex items-center justify-between pt-space-md mt-space-sm">
            <div class="flex items-center gap-space-xs text-primary font-label-md text-label-md">
                <span class="material-symbols-outlined text-body-sm text-primary-fixed-dim">trending_up</span>
                <span class="font-bold">+12.4%</span>
                <span class="text-on-surface-variant text-label-sm font-normal">vs. ciclo anterior</span>
            </div>
            <span class="font-label-sm text-label-sm text-outline-variant">DB_SYNC 99.8%</span>
        </div>
    </div>
    <!-- Peliculas -->
    <div class="relative overflow-hidden rounded-xl bg-surface-container-low/90 backdrop-blur-xl p-space-md shadow-xl flex flex-col justify-between">
        <div class="flex items-start justify-between">
            <div class="flex flex-col">
                <div class="flex items-center gap-space-xs">
                    <span class="w-2 h-2 rounded-full bg-primary-container animate-ping"></span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">PELICULAS DISPONIBLES.</span>
                </div>
                <span class="font-display-hero text-headline-lg font-bold text-on-surface mt-space-xs tracking-tight">
                    <?= count($peliculas)?>
                </span>
            </div>
            <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-secondary shadow-inner">
                <span class="material-symbols-outlined">sensors</span>
            </div>
        </div>
    </div>
</div>