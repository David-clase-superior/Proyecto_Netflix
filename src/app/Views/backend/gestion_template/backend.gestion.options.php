<!-- Filter Control Dock -->
<div class="bg-surface-container-low p-space-md rounded-xl flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-space-md shadow-sm">
    <div class="relative flex-1 min-w-[280px]">
        <span class="material-symbols-outlined absolute left-space-md top-1/2 -translate-y-1/2 text-outline text-[20px]">filter_list</span>
        <input class="w-full bg-surface-container text-on-surface placeholder:text-outline font-body-sm text-body-sm rounded-lg pl-10 pr-space-md py-space-xs border-0 outline-none focus:ring-1 focus:ring-secondary transition-all"
               placeholder="Buscar por título, ID único (#SB-XXXX), director, estudio o motor gráfico..."
               type="text"/>
    </div>
    <div class="flex flex-wrap items-center gap-space-sm">
        <div class="flex items-center gap-space-xs bg-surface-container px-space-sm py-space-xs rounded-lg">
            <span class="font-label-badge text-label-badge text-outline uppercase pl-space-xs">Tipo</span>
            <select class="bg-transparent text-on-surface font-label-md text-label-md border-0 outline-none cursor-pointer pr-space-sm">
                <option class="bg-surface-container-high text-on-surface" value="all">Todos los tipos
                </option>
                <option class="bg-surface-container-high text-on-surface" value="cloud-gaming">
                    Videojuegos Cloud
                </option>
                <option class="bg-surface-container-high text-on-surface" value="movies">Películas
                </option>
                <option class="bg-surface-container-high text-on-surface" value="series">Series &
                    Documentales
                </option>
            </select>
        </div>
        <div class="flex items-center gap-space-xs bg-surface-container px-space-sm py-space-xs rounded-lg">
            <span class="font-label-badge text-label-badge text-outline uppercase pl-space-xs">Calidad</span>
            <select class="bg-transparent text-on-surface font-label-md text-label-md border-0 outline-none cursor-pointer pr-space-sm">
                <option class="bg-surface-container-high text-on-surface" value="all">Cualquier
                    formato
                </option>
                <option class="bg-surface-container-high text-on-surface" value="4k">4K UHD + HDR
                </option>
                <option class="bg-surface-container-high text-on-surface" value="dolby">Dolby Vision /
                    Atmos
                </option>
                <option class="bg-surface-container-high text-on-surface" value="120fps">Cloud Gaming
                    120 FPS
                </option>
                <option class="bg-surface-container-high text-on-surface" value="1080p">1080p
                    CineMaster
                </option>
            </select>
        </div>
        <div class="flex items-center gap-space-xs bg-surface-container px-space-sm py-space-xs rounded-lg">
            <span class="font-label-badge text-label-badge text-outline uppercase pl-space-xs">Estado</span>
            <select class="bg-transparent text-on-surface font-label-md text-label-md border-0 outline-none cursor-pointer pr-space-sm">
                <option class="bg-surface-container-high text-on-surface" value="all">Todos los
                    estados
                </option>
                <option class="bg-surface-container-high text-on-surface" value="published">Publicado
                </option>
                <option class="bg-surface-container-high text-on-surface" value="processing">
                    Transcodificando
                </option>
                <option class="bg-surface-container-high text-on-surface" value="draft">Borrador
                </option>
                <option class="bg-surface-container-high text-on-surface" value="scheduled">Programado
                </option>
            </select>
        </div>
        <button class="p-space-xs rounded-lg bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors"
                title="Restablecer filtros" type="button">
            <span class="material-symbols-outlined text-[20px]">restart_alt</span>
        </button>
    </div>
</div>