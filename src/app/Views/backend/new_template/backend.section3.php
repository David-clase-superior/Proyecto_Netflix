<!-- Bottom Section: 2 Columns (Transcoding & Ingest Queue vs Admin Audit Log) -->
<section class="grid grid-cols-1 xl:grid-cols-12 gap-space-md">
    <!-- Left Column: Ingest & Encoding Queue (8 cols on XL) -->
    <div class="xl:col-span-8 p-space-lg rounded-xl bg-surface-container-low shadow-md flex flex-col justify-between">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm mb-space-md">
            <div>
                <span class="font-label-badge text-label-badge text-secondary uppercase tracking-widest">Pipeline de Ingesta & Masterizado</span>
                <h2 class="font-headline-md text-headline-md text-on-surface font-semibold tracking-tight">
                    Último Contenido Procesado & Encode</h2>
            </div>
            <div class="flex items-center gap-space-xs">
                <button class="px-space-sm py-1 rounded bg-surface-container-high text-on-surface-variant hover:text-on-surface font-label-badge text-label-badge"
                        type="button">Ver Cola Completa (18)
                </button>
            </div>
        </div>
        <!-- Content Table -->
        <div class="overflow-x-auto w-full">
            <table class="w-full text-left">
                <thead>
                <tr class="text-outline font-label-badge text-label-badge uppercase tracking-wider">
                    <th class="pb-space-sm font-semibold">Título / Máster</th>
                    <th class="pb-space-sm font-semibold">Tipo</th>
                    <th class="pb-space-sm font-semibold">Códec / Perfil</th>
                    <th class="pb-space-sm font-semibold">Estado</th>
                    <th class="pb-space-sm font-semibold text-right">Acción</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-transparent">
                <!-- Item 1 -->
                <tr class="hover:bg-surface-container/60 transition-colors group">
                    <td class="py-3 pr-space-md">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-12 h-8 rounded bg-surface-container-highest overflow-hidden flex-shrink-0">
                                <img class="w-full h-full object-cover"
                                     data-alt="Cyberpunk futuristic city movie poster banner with glowing blue holographic signs, deep night, cinematic high contrast lighting"
                                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGzhpU7VWTsHgys1lE1kxZPFDa4NmK85ReaqwgMPxu5l1Up4YFDXEwu3wRPE_OLWo3EpNfBxHkxYmlPvSiIsaM0eBJY4PjbQwXj6b4LCmUkzRr4oR1Iuke0U_KwCWV2kKnms8_JCVQcp_UaoULcN-syWHwBFUQ4k4eAwp4yIaUs2A-jIFZcIvUcHx6GXWznRSRfB6-9_QMmU_5IwkCW6lRlhUbpiDf1JfDASFJ7J6yOE3SnKwLpUKk"/>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold truncate">Cyberfall 2099 UHD</span>
                                <span class="text-body-sm font-body-sm text-outline">Master ProRes 4444 • 142 GB</span>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 pr-space-md">
                        <span class="px-2 py-0.5 rounded bg-surface-container-high text-primary font-label-badge text-label-badge uppercase tracking-wider">Película 4K HDR</span>
                    </td>
                    <td class="py-3 pr-space-md">
                        <span class="font-body-sm text-body-sm text-on-surface-variant font-mono">AV1 (10-bit HDR10+)</span>
                    </td>
                    <td class="py-3 pr-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-surface-container-highest text-secondary font-label-badge text-label-badge">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                  Publicado
                </span>
                    </td>
                    <td class="py-3 text-right">
                        <button class="p-1 rounded-full text-outline hover:text-on-surface hover:bg-surface-container-high transition-colors"
                                title="Opciones" type="button">
                            <span class="material-symbols-outlined text-[18px]">more_vert</span>
                        </button>
                    </td>
                </tr>
                <!-- Item 2 -->
                <tr class="hover:bg-surface-container/60 transition-colors group">
                    <td class="py-3 pr-space-md">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-12 h-8 rounded bg-surface-container-highest overflow-hidden flex-shrink-0">
                                <img class="w-full h-full object-cover"
                                     data-alt="Space racing simulator video game key art with high-tech sleek hover craft leaving cyan plasma trails, deep space background"
                                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDLp5QmiTXeqvqsqNydF5uo52O45Hj-xOlGB7bX0-gpBguquy-XzHIVzJp8N9E3iNv0fau8aXKG2fuJ5HFMXSUz6Fu9oC80VjejpAeVmHGplpZflzT5SmL_-t8fy7N-iwBQBryKZi9xeUd69mC3UbN31ln8mr3r6q0xGV34Jtv-RoBM5UjNY-VUj5n6v9tEBmpQ_ouptlEQNjIY4XqbMkTYMroNoqqeR51ZmJmWdngMgPzYLoGHyRQ"/>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold truncate">HyperVelocity Infinite</span>
                                <span class="text-body-sm font-body-sm text-outline">Build v1.4.0 • Cloud Package</span>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 pr-space-md">
                        <span class="px-2 py-0.5 rounded bg-secondary-container/20 text-secondary font-label-badge text-label-badge uppercase tracking-wider">Juego Cloud RTX</span>
                    </td>
                    <td class="py-3 pr-space-md">
                        <span class="font-body-sm text-body-sm text-on-surface-variant font-mono">NVENC HEVC 120fps</span>
                    </td>
                    <td class="py-3 pr-space-md">
                        <div class="flex flex-col gap-1 w-32">
                            <div class="flex justify-between font-label-badge text-label-badge text-primary">
                                <span>Transcodificando</span>
                                <span>84%</span>
                            </div>
                            <div class="w-full h-1.5 rounded-full bg-surface-container-highest overflow-hidden">
                                <div class="h-full bg-primary rounded-full" style="width: 84%"></div>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 text-right">
                        <button class="p-1 rounded-full text-outline hover:text-on-surface hover:bg-surface-container-high transition-colors"
                                title="Detalles del proceso" type="button">
                            <span class="material-symbols-outlined text-[18px]">monitoring</span>
                        </button>
                    </td>
                </tr>
                <!-- Item 3 -->
                <tr class="hover:bg-surface-container/60 transition-colors group">
                    <td class="py-3 pr-space-md">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-12 h-8 rounded bg-surface-container-highest overflow-hidden flex-shrink-0">
                                <img class="w-full h-full object-cover"
                                     data-alt="Atmospheric Nordic noir crime series poster, moody dark blue mist in dense pine forest, cinematic dramatic lighting"
                                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuASFaXffCbH4u3dYlG36djyA7KJ0JfzWRrHGT6qQB6WAKpmndBJeJrbijEQ3TElbunRyKQb_r89-Xj1VJxmjzvgXaxXiZ5t4_oHiNjn7lFvur80WCa7ez9rf8Mmf_9aWtXJXT3DD4qC7oJh8zgyULKZmIz1MMl1gBCkD2g_lpnQFH40GDkxDgxotSNF3EUr2_7ZYFWbxJTfIded0vJYO4sxawXbWE6MT2cDahBBnC2wJ10bjMZJgRxg"/>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold truncate">Sombras del Báltico (T2 E04)</span>
                                <span class="text-body-sm font-body-sm text-outline">Dolby Vision / Atmos Mix</span>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 pr-space-md">
                        <span class="px-2 py-0.5 rounded bg-surface-container-high text-primary font-label-badge text-label-badge uppercase tracking-wider">Serie / Episodio</span>
                    </td>
                    <td class="py-3 pr-space-md">
                        <span class="font-body-sm text-body-sm text-on-surface-variant font-mono">HEVC Main10</span>
                    </td>
                    <td class="py-3 pr-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-surface-container-highest text-tertiary font-label-badge text-label-badge">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                  Revisión QA
                </span>
                    </td>
                    <td class="py-3 text-right">
                        <button class="px-2.5 py-1 rounded bg-surface-container-high text-primary hover:bg-primary hover:text-on-primary font-label-md text-label-md transition-colors"
                                type="button">
                            Aprobar
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- Quick Transcode Diagnostics Bar -->
        <div class="mt-space-md pt-space-xs flex items-center justify-between text-body-sm font-body-sm text-outline">
<span class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-secondary">memory</span>
          Hardware Encoders: 12 Nodos Activos en Cluster de VOD
        </span>
            <button class="text-primary hover:text-primary-fixed font-label-md text-label-md transition-colors"
                    type="button">
                Configurar Perfiles de Códec →
            </button>
        </div>
    </div>
    <!-- Right Column: Recent Admin Activity / Security Audit Log (4 cols on XL) -->
    <div class="xl:col-span-4 p-space-lg rounded-xl bg-surface-container-low shadow-md flex flex-col justify-between">
        <div>
            <div class="flex items-center justify-between mb-space-md">
                <div>
                    <span class="font-label-badge text-label-badge text-secondary uppercase tracking-widest">Seguridad & Auditoría</span>
                    <h2 class="font-headline-md text-headline-md text-on-surface font-semibold tracking-tight">
                        Actividad Administrativa</h2>
                </div>
                <span class="w-2 h-2 rounded-full bg-secondary"></span>
            </div>
            <!-- Activity Timeline -->
            <div class="flex flex-col gap-space-md">
                <!-- Item 1 -->
                <div class="flex items-start gap-space-sm">
                    <div class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-xs flex-shrink-0 shadow-sm">
                        AR
                    </div>
                    <div class="flex flex-col min-w-0">
                        <p class="font-body-sm text-body-sm text-on-surface leading-snug">
                            <strong class="text-primary font-semibold">Alex Rivera</strong> aprobó la
                            versión master de <span
                                class="text-secondary font-medium">Cyberfall 2099 UHD</span>.
                        </p>
                        <span class="font-label-badge text-label-badge text-outline mt-1">Hace 8 minutos • IP: 194.22.8.102</span>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="flex items-start gap-space-sm">
                    <div class="w-8 h-8 rounded-full bg-error-container text-on-error flex items-center justify-center flex-shrink-0 shadow-sm">
                        <span class="material-symbols-outlined text-[16px]">security</span>
                    </div>
                    <div class="flex flex-col min-w-0">
                        <p class="font-body-sm text-body-sm text-on-surface leading-snug">
                            <strong class="text-on-surface font-semibold">Soporte Nivel 3</strong> revocó
                            sesión fraudulenta por token sharing masivo.
                        </p>
                        <span class="font-label-badge text-label-badge text-outline mt-1">Hace 24 minutos • User ID: #98421</span>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="flex items-start gap-space-sm">
                    <div class="w-8 h-8 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center flex-shrink-0 shadow-sm">
                        <span class="material-symbols-outlined text-[16px]">rocket_launch</span>
                    </div>
                    <div class="flex flex-col min-w-0">
                        <p class="font-body-sm text-body-sm text-on-surface leading-snug">
                            <strong class="text-secondary font-semibold">CI/CD Pipeline</strong> desplegó
                            satisfactoriamente el parche de motor <span
                                class="font-mono text-primary text-xs">v2.4.1-blue</span> en producción.
                        </p>
                        <span class="font-label-badge text-label-badge text-outline mt-1">Hace 1 hora • Frankfurt / Madrid</span>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="flex items-start gap-space-sm">
                    <div class="w-8 h-8 rounded-full bg-surface-container-highest text-on-surface flex items-center justify-center font-bold text-xs flex-shrink-0">
                        MC
                    </div>
                    <div class="flex flex-col min-w-0">
                        <p class="font-body-sm text-body-sm text-on-surface leading-snug">
                            <strong class="text-primary font-semibold">Marta Conde</strong> modificó
                            política de geobloqueo para catálogo LATAM.
                        </p>
                        <span class="font-label-badge text-label-badge text-outline mt-1">Hace 2 horas • DRM Policy Core</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Audit Footer Link -->
        <div class="mt-space-lg pt-space-xs flex items-center justify-between">
            <span class="font-label-badge text-label-badge text-outline uppercase tracking-wider">Log Inmutable SHA-256</span>
            <button class="text-primary hover:text-primary-fixed font-label-md text-label-md transition-colors flex items-center gap-1"
                    type="button">
                <span>Ver registro completo</span>
                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </button>
        </div>
    </div>
</section>
