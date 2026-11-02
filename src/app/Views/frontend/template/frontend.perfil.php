<?php
// frontend.perfil.php
$title     = 'Mi Perfil | AuraVerse Nexus';
$shellType = 'web_standard';

include __DIR__ . '/frontend.header.php';
?>

    <div class="w-full px-gutter-sm sm:px-gutter md:px-gutter-lg py-space-md">

        <!-- Top bar -->
        <div class="w-full flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-space-md bg-surface-container-low/90 backdrop-blur-xl p-space-md rounded-xl shadow-xl mb-space-lg">
            <div class="flex items-center gap-space-md">
                <div class="relative shrink-0">
                    <div class="absolute -inset-1 rounded-full bg-gradient-to-r from-primary via-tertiary to-secondary opacity-75 blur-sm animate-pulse"></div>
                    <img class="relative w-14 h-14 rounded-full object-cover shadow-md" data-user-avatar
                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6aL9xGZ0wn5q4tJiBM8ayA6FQb8hDvULGp2PFsxI1Rgeo4J-eo38m-kwupp1et3ITWmlpCW8oVwQWrxaly_NTVFzo9eblYCOECRF7EFzFDx6AhW8oXxi7bXohklPab9RHn9VkQDuIO9WBw_H8JWMwcA9BTE9N-9_n7Pa2Fz-nrqF9iKI0cqUY2j_8ZmVyldYt_6e8MRWdQyqeRZXAKoHm9cpxJOhf7dlKmPmXi5KUQwK9tuAhMwJg" />
                    <span class="absolute -bottom-1 -right-1 px-1.5 py-0.5 rounded bg-secondary-container text-on-secondary-container font-label-sm text-[9px] uppercase tracking-wider shadow" data-user-rank>SSS-RANK</span>
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center gap-space-xs flex-wrap">
                        <span class="font-title-lg text-title-lg text-on-surface tracking-wide" data-user-name>Ren // Cazador de Sombras</span>
                        <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container-highest text-tertiary">MONARCA VINCULADO</span>
                    </div>
                    <span class="font-body-sm text-body-sm text-outline" data-user-email>ren.nexus@aurastream.io</span>
                </div>
            </div>

            <div class="flex flex-wrap items-center gap-space-xs sm:gap-space-sm">
                <button class="flex items-center gap-1.5 px-space-md py-2 rounded bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider hover:opacity-90 transition-all shadow-[0_0_16px_rgba(208,188,255,0.35)]" onclick="openModal('modal-edit-profile')">
                    <span class="material-symbols-outlined text-base">tune</span>
                    <span>Editar Perfil</span>
                </button>
                <button class="flex items-center gap-1.5 px-space-md py-2 rounded bg-surface-container-high hover:bg-surface-container-highest text-secondary font-label-md text-label-md uppercase tracking-wider transition-all" onclick="openModal('modal-my-list')">
                    <span class="material-symbols-outlined text-base">bookmarks</span>
                    <span>Mi Lista</span>
                </button>
                <button class="flex items-center gap-1.5 px-space-md py-2 rounded bg-surface-container-high hover:bg-surface-container-highest text-tertiary font-label-md text-label-md uppercase tracking-wider transition-all" onclick="openModal('modal-history')">
                    <span class="material-symbols-outlined text-base">history_toggle_off</span>
                    <span>Historial Astral</span>
                </button>
            </div>
        </div>

        <!-- Banner -->
        <div class="relative w-full rounded-2xl overflow-hidden bg-surface-container-low shadow-xl mb-space-lg">
            <div class="w-full h-56 sm:h-72 bg-cover bg-center relative" id="profile-banner-bg"
                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDZSiVzolsmiHIbKPBK-41c6tdiHzTSAilCOZHOZgv3OBzb68XrTGhTI4NrGc7yYrER3oyeFJod3vUi6EldpzfXMr8V8MOW67qh5WFZubZraysNpshR5sRTbIuLoZsS3qpPC8wjRA5pkgqS4WZ21QkygQxrHm-BZH3MYTGV0kPGmPOxCRj-obPNN8WaWWakrimd_ffLAijWBZUxLq0hz7SgF3AZBMO0CfnJccJwO7e3Id5Zb1p_Rhtv')">
                <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/60 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-surface-container-lowest/80 via-transparent to-transparent"></div>
                <div class="absolute top-4 right-4">
                    <button class="px-3 py-1.5 rounded-full bg-surface-container-lowest/70 backdrop-blur-md text-tertiary hover:bg-surface-container-lowest transition-all font-label-sm text-label-sm flex items-center gap-1 shadow">
                        <span class="material-symbols-outlined text-sm">palette</span>
                        <span>Cambiar Aura Banner</span>
                    </button>
                </div>
                <div class="absolute right-8 bottom-4 select-none opacity-20 pointer-events-none">
                    <span class="font-headline-xl text-headline-xl text-primary tracking-widest">影の君主</span>
                </div>
            </div>

            <div class="p-space-lg -mt-16 relative flex flex-col sm:flex-row items-start sm:items-end justify-between gap-space-md">
                <div class="flex flex-col sm:flex-row items-start sm:items-end gap-space-md">
                    <div class="relative">
                        <div class="absolute -inset-2 rounded-2xl bg-gradient-to-tr from-primary to-secondary blur-lg opacity-80 animate-pulse"></div>
                        <img class="relative w-28 h-28 sm:w-32 sm:h-32 rounded-2xl object-cover shadow-2xl" data-user-avatar
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwlkAvkGeA07pi1Q_HLC_eDTYdUKIp1CcDeRme1pY_o0L9RbDzanpsnhHY9Tt4y2F_VM9X_SLMmv32BYjOWDehxKDZryw1iLZ69VjPKDdX8IQTVUe5AI0Ni1Vamt1nhrQlwLc6HCGJwL97BLyJQZqGJr2Uu1dJaYy9xMXJEA-8wByJ6uZRApDRV4HWxJM6lP5XCdJSRmayILQqf2Stgp6IG6T7KM-iZWsEB2EKjLxlgte0DJtC25Jm" />
                        <div class="absolute -bottom-2 -right-2 p-1.5 rounded-lg bg-surface-container-lowest text-primary shadow-md">
                            <span class="material-symbols-outlined text-base">verified</span>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center gap-2 flex-wrap">
                            <h2 class="font-headline-lg text-headline-lg text-on-surface" data-user-name>Ren // Cazador de Sombras</h2>
                            <span class="px-2.5 py-0.5 rounded bg-secondary-container text-on-secondary-container font-label-md text-label-md font-bold uppercase tracking-wider" data-user-rank>SSS-RANK</span>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-xl mt-1" data-user-bio>Cazador de Rango SSS afín a las sombras y al vacío cósmico. Guardián del Grimorio prohibido y explorador de simulcasts hiperdimensionales.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-gutter-sm mb-space-lg">
            <div class="bg-surface-container-low/90 backdrop-blur-xl p-space-lg rounded-xl relative overflow-hidden shadow-lg">
                <div class="flex items-center justify-between text-outline mb-space-sm">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider">Horas de Streaming</span>
                    <span class="material-symbols-outlined text-primary text-xl">play_circle</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <span class="font-display-hero text-headline-xl text-primary">342</span>
                    <span class="font-label-md text-label-md text-outline">HRS</span>
                </div>
                <div class="w-full bg-surface-container-highest h-1.5 rounded-full mt-space-sm overflow-hidden">
                    <div class="bg-primary h-full w-4/5 rounded-full shadow-[0_0_8px_#d0bcff]"></div>
                </div>
            </div>
            <div class="bg-surface-container-low/90 backdrop-blur-xl p-space-lg rounded-xl relative overflow-hidden shadow-lg">
                <div class="flex items-center justify-between text-outline mb-space-sm">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider">Mangas &amp; Manhwas</span>
                    <span class="material-symbols-outlined text-secondary text-xl">menu_book</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <span class="font-display-hero text-headline-xl text-secondary">86</span>
                    <span class="font-label-md text-label-md text-outline">TOMOS</span>
                </div>
                <div class="w-full bg-surface-container-highest h-1.5 rounded-full mt-space-sm overflow-hidden">
                    <div class="bg-secondary h-full w-[65%] rounded-full shadow-[0_0_8px_#ffb2b7]"></div>
                </div>
            </div>
            <div class="bg-surface-container-low/90 backdrop-blur-xl p-space-lg rounded-xl relative overflow-hidden shadow-lg">
                <div class="flex items-center justify-between text-outline mb-space-sm">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider">Series Completadas</span>
                    <span class="material-symbols-outlined text-tertiary text-xl">military_tech</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <span class="font-display-hero text-headline-xl text-tertiary">14</span>
                    <span class="font-label-md text-label-md text-outline">SAGAS</span>
                </div>
                <div class="w-full bg-surface-container-highest h-1.5 rounded-full mt-space-sm overflow-hidden">
                    <div class="bg-tertiary h-full w-[90%] rounded-full shadow-[0_0_8px_#4cd7f6]"></div>
                </div>
            </div>
        </div>

        <!-- Badges -->
        <div class="bg-surface-container-low/90 backdrop-blur-xl p-space-lg rounded-xl shadow-lg flex flex-col gap-space-md">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-secondary text-2xl">workspace_premium</span>
                    <h3 class="font-headline-md text-headline-md text-on-surface">Badges de Logros Desbloqueados</h3>
                </div>
                <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">3 / 12 Trascendentes</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter-sm">
                <div class="bg-surface-container-high/70 hover:bg-surface-container-high p-space-md rounded-xl flex items-center gap-space-md transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-primary-container/20 flex items-center justify-center shrink-0 shadow-[0_0_12px_rgba(208,188,255,0.3)]">
                        <span class="material-symbols-outlined text-2xl text-primary group-hover:scale-125 transition-transform">dark_mode</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-title-md text-title-md text-on-surface group-hover:text-primary transition-colors">Monarca de Sombras</span>
                        <span class="font-body-sm text-body-sm text-outline">Alcanzar el rango SSS con más de 300 hrs de oscuridad.</span>
                    </div>
                </div>
                <div class="bg-surface-container-high/70 hover:bg-surface-container-high p-space-md rounded-xl flex items-center gap-space-md transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-tertiary-container/20 flex items-center justify-center shrink-0 shadow-[0_0_12px_rgba(76,215,246,0.3)]">
                        <span class="material-symbols-outlined text-2xl text-tertiary group-hover:scale-125 transition-transform">bolt</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-title-md text-title-md text-on-surface group-hover:text-tertiary transition-colors">Pionero Simulcast</span>
                        <span class="font-body-sm text-body-sm text-outline">Ver 5 estrenos mundiales a menos de 5 min del lanzamiento.</span>
                    </div>
                </div>
                <div class="bg-surface-container-high/70 hover:bg-surface-container-high p-space-md rounded-xl flex items-center gap-space-md transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-secondary-container/20 flex items-center justify-center shrink-0 shadow-[0_0_12px_rgba(255,178,183,0.3)]">
                        <span class="material-symbols-outlined text-2xl text-secondary group-hover:scale-125 transition-transform">psychology</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-title-md text-title-md text-on-surface group-hover:text-secondary transition-colors">Reiatsu Trascendente</span>
                        <span class="font-body-sm text-body-sm text-outline">Capacidad espiritual al 98.4% sin desestabilizar el grimorio.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== MODAL: EDITAR PERFIL ===== -->
    <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-surface-container-lowest/85 backdrop-blur-xl hidden" id="modal-edit-profile">
        <div class="w-full max-w-2xl bg-surface-container-low rounded-2xl shadow-[0_0_50px_rgba(208,188,255,0.2)] overflow-hidden flex flex-col max-h-[90vh]">
            <div class="flex items-center justify-between px-space-lg py-space-md bg-surface-container-high/80">
                <div class="flex items-center gap-space-sm">
                    <span class="material-symbols-outlined text-primary text-2xl">manage_accounts</span>
                    <div>
                        <h3 class="font-headline-md text-headline-md text-on-surface">Ajustes de Cazador // Editar Perfil</h3>
                        <p class="font-body-sm text-body-sm text-outline">Sincroniza tus frecuencias astrales y credenciales</p>
                    </div>
                </div>
                <button class="p-1 rounded-full text-outline hover:text-on-surface hover:bg-surface-container-highest transition-all" onclick="closeModal('modal-edit-profile')">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <form class="p-space-lg flex flex-col gap-space-md overflow-y-auto" id="form-edit-profile" onsubmit="handleSaveProfile(event)">
                <div class="flex flex-col gap-1">
                    <label class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface">Nombre de Usuario</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-3 text-outline text-lg">badge</span>
                        <input id="input-username" type="text" required class="w-full bg-surface-container-lowest text-on-surface pl-10 pr-4 py-2.5 rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary transition-all font-body-md text-body-md" />
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface">Email</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-3 text-outline text-lg">alternate_email</span>
                        <input id="input-email" type="email" required class="w-full bg-surface-container-lowest text-on-surface pl-10 pr-4 py-2.5 rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary transition-all font-body-md text-body-md" />
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface">Biografía Astral</label>
                    <textarea id="input-bio" required rows="3" class="w-full bg-surface-container-lowest text-on-surface p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary transition-all font-body-md text-body-md"></textarea>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface">Rango Espiritual</label>
                    <select id="select-rank" class="w-full bg-surface-container-lowest text-on-surface px-4 py-2.5 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body-md text-body-md cursor-pointer">
                        <option value="MONARCA">MONARCA (Soberano de las Sombras)</option>
                        <option value="SSS-RANK">SSS-RANK (Trascendencia Absoluta)</option>
                        <option value="S-RANK">S-RANK (Clase Especial Nacional)</option>
                        <option value="A-RANK">A-RANK (Líder de Asalto)</option>
                    </select>
                </div>
                <div class="flex flex-col gap-2">
                    <label class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface">Sintonía de Color</label>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                        <label class="flex items-center gap-2 p-2.5 rounded-lg bg-surface-container-highest cursor-pointer hover:bg-surface-bright transition-all">
                            <input type="radio" name="accent-color" value="purple" checked class="accent-primary" />
                            <span class="w-3.5 h-3.5 rounded-full bg-[#d0bcff] shadow-[0_0_8px_#d0bcff]"></span>
                            <span class="font-label-sm text-label-sm text-on-surface">Púrpura</span>
                        </label>
                        <label class="flex items-center gap-2 p-2.5 rounded-lg bg-surface-container-highest cursor-pointer hover:bg-surface-bright transition-all">
                            <input type="radio" name="accent-color" value="rose" class="accent-secondary" />
                            <span class="w-3.5 h-3.5 rounded-full bg-[#ffb2b7] shadow-[0_0_8px_#ffb2b7]"></span>
                            <span class="font-label-sm text-label-sm text-on-surface">Rosa</span>
                        </label>
                        <label class="flex items-center gap-2 p-2.5 rounded-lg bg-surface-container-highest cursor-pointer hover:bg-surface-bright transition-all">
                            <input type="radio" name="accent-color" value="cyan" class="accent-tertiary" />
                            <span class="w-3.5 h-3.5 rounded-full bg-[#4cd7f6] shadow-[0_0_8px_#4cd7f6]"></span>
                            <span class="font-label-sm text-label-sm text-on-surface">Cian</span>
                        </label>
                        <label class="flex items-center gap-2 p-2.5 rounded-lg bg-surface-container-highest cursor-pointer hover:bg-surface-bright transition-all">
                            <input type="radio" name="accent-color" value="green" />
                            <span class="w-3.5 h-3.5 rounded-full bg-[#4ade80] shadow-[0_0_8px_#4ade80]"></span>
                            <span class="font-label-sm text-label-sm text-on-surface">Verde</span>
                        </label>
                    </div>
                </div>
                <div class="flex items-center justify-end gap-space-md pt-space-sm">
                    <button type="button" class="px-space-md py-2.5 rounded font-label-md text-label-md uppercase tracking-wider text-outline hover:text-on-surface hover:bg-surface-container-high transition-all" onclick="closeModal('modal-edit-profile')">Cancelar</button>
                    <button type="submit" class="flex items-center gap-2 px-space-lg py-2.5 rounded bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider hover:opacity-90 transition-all shadow-[0_0_20px_rgba(208,188,255,0.4)]">
                        <span class="material-symbols-outlined text-base">save</span>
                        <span>Guardar Cambios</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- ===== MODAL: MI LISTA ===== -->
    <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-surface-container-lowest/85 backdrop-blur-xl hidden" id="modal-my-list">
        <div class="w-full max-w-4xl bg-surface-container-low rounded-2xl shadow-[0_0_50px_rgba(255,178,183,0.2)] overflow-hidden flex flex-col max-h-[90vh]">
            <div class="flex items-center justify-between px-space-lg py-space-md bg-surface-container-high/80">
                <div class="flex items-center gap-space-sm">
                    <span class="material-symbols-outlined text-secondary text-2xl">bookmarks</span>
                    <div>
                        <h3 class="font-headline-md text-headline-md text-on-surface">Mi Lista</h3>
                        <p class="font-body-sm text-body-sm text-outline">Obras guardadas (<span id="modal-fav-count">0</span>)</p>
                    </div>
                </div>
                <button class="p-1 rounded-full text-outline hover:text-on-surface hover:bg-surface-container-highest transition-all" onclick="closeModal('modal-my-list')">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <div class="p-space-lg overflow-y-auto">
                <div id="fav-list-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-gutter-sm"></div>
                <div id="fav-empty-state" class="flex flex-col items-center justify-center py-space-xl text-center">
                    <span class="material-symbols-outlined text-6xl text-outline mb-2">bookmark_border</span>
                    <p class="font-headline-md text-headline-md text-on-surface">Tu lista está vacía</p>
                    <p class="font-body-md text-body-md text-outline">Añade series del catálogo para verlas aquí.</p>
                </div>
            </div>

            <div class="px-space-lg py-space-md bg-surface-container-high flex items-center justify-between">
                <span class="font-body-sm text-body-sm text-outline">Sincronizado con la base central</span>
                <button class="px-4 py-2 rounded bg-surface-container-highest text-on-surface font-label-md text-label-md uppercase" onclick="closeModal('modal-my-list')">Cerrar</button>
            </div>
        </div>
    </div>

    <!-- ===== MODAL: HISTORIAL ===== -->
    <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-surface-container-lowest/85 backdrop-blur-xl hidden" id="modal-history">
        <div class="w-full max-w-3xl bg-surface-container-low rounded-2xl shadow-[0_0_50px_rgba(76,215,246,0.2)] overflow-hidden flex flex-col max-h-[90vh]">
            <div class="flex items-center justify-between px-space-lg py-space-md bg-surface-container-high/80">
                <div class="flex items-center gap-space-sm">
                    <span class="material-symbols-outlined text-tertiary text-2xl">history_toggle_off</span>
                    <div>
                        <h3 class="font-headline-md text-headline-md text-on-surface">Historial de Reproducción</h3>
                        <p class="font-body-sm text-body-sm text-outline">Registros temporales y capítulos en progreso</p>
                    </div>
                </div>
                <button class="p-1 rounded-full text-outline hover:text-on-surface hover:bg-surface-container-highest transition-all" onclick="closeModal('modal-history')">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <div class="p-space-lg overflow-y-auto flex flex-col gap-space-md">
                <?php
                $historial = [
                        ['titulo' => 'Chainsaw Man - Ep. 8', 'detalle' => 'Visto hoy a las 14:32 // Quedan 7 min', 'prog' => 75, 'color' => 'tertiary', 'btnText' => 'Continuar Ep. 8', 'btnColor' => 'tertiary',
                                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCqhK70QZV3X881moNS7Mf_hA4H5fzpHED8mA_JpsMuanDOkPVKKKIq-FZgsChTJxPq0x5ACsn6XMGaP-S-iGqFj_XuyTiKFRnm89J_qAVFhrpEUue4q0FTAhwrP6zlDLcKiDJuCyUlDkgDauE0WxVz6ZTZzjs_gVaOCTrFluxnn3irjZ5612E7VzMP-sWFJDeu5UxTw9A7DiYeNYhiYFPb6nVIeRpmQvSlvj37yjwk1sSv2-IMRQBV'],
                        ['titulo' => 'Solo Leveling - Ep. 12', 'detalle' => 'Visto ayer // Completado al 100%', 'prog' => 100, 'color' => 'primary', 'btnText' => 'Repetir Ep. 12', 'btnColor' => 'surface-container-highest',
                                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCehRku3Et-Uor7UFkjG9rUGgkjNlsmim_6SxRJagMcEsLuj1N9tw_EbnwWacWpMgRkwqr5zgaasOP-RrClas7K5ctMA_YRrLKDNaZ28gKJ3nlgqBueUelM9j92Lnud5-8nG38VNFXyIz400IjDZojB2L_qSnBUqLigrTKbakeERJ9Y4CxL_vNFnlpiwZjEn7gXVZqvFv5e9hkxB6_JmxW9aaIJxExpYpMkHFhqDMSTc8A1awEBVjQZ'],
                        ['titulo' => 'Jujutsu Kaisen S2 - Ep. 19', 'detalle' => 'Visto hace 3 días // Quedan 14 min', 'prog' => 40, 'color' => 'secondary', 'btnText' => 'Continuar Ep. 19', 'btnColor' => 'secondary',
                                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCbSQaIc-6aCJwtX9FRXALIxbzy5X9hNDT1_KePUdJaR_mhAHZCMqUszc3LwRZMmalyZrK-2g53EW_2RXRMivaWW35gQD_ZPGESjZXotexEz79everhijYErkfa1_Piw2bLrrqX7RsetZQLOoHxB22-92HuBNQYcNR9fmk__OUVfOC83KVAmIpdvJxYoVqNr7lX2jhZQ29ijJGLYDHnYxp_TtBv4XfBI2fnqc8e0jQgR2flFyBTLTEM'],
                ];
                foreach ($historial as $h):
                    ?>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-space-md p-space-md rounded-xl bg-surface-container-high/60 hover:bg-surface-container-high transition-all">
                        <div class="flex items-center gap-space-md">
                            <div class="relative w-24 h-14 rounded-lg overflow-hidden shrink-0">
                                <img class="w-full h-full object-cover" alt="<?= $h['titulo'] ?>" src="<?= $h['img'] ?>" />
                            </div>
                            <div class="flex flex-col">
                                <span class="font-title-md text-title-md text-on-surface"><?= $h['titulo'] ?></span>
                                <span class="font-body-sm text-body-sm text-outline"><?= $h['detalle'] ?></span>
                                <div class="w-36 sm:w-48 h-1.5 rounded-full bg-surface-container-highest overflow-hidden mt-1.5">
                                    <div class="h-full bg-<?= $h['color'] ?> rounded-full shadow-[0_0_6px_currentColor]" style="width: <?= $h['prog'] ?>%;"></div>
                                </div>
                            </div>
                        </div>
                        <button class="flex items-center gap-1.5 px-3 py-1.5 rounded bg-<?= $h['btnColor'] ?> text-on-<?= $h['btnColor'] ?> font-label-sm text-label-sm uppercase font-bold tracking-wider hover:opacity-90 shrink-0">
                            <span class="material-symbols-outlined text-sm">play_arrow</span>
                            <span><?= $h['btnText'] ?></span>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="px-space-lg py-space-md bg-surface-container-high flex items-center justify-between">
                <button class="text-error hover:underline font-label-sm text-label-sm uppercase flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">delete_sweep</span>
                    <span>Limpiar Historial</span>
                </button>
                <button class="px-4 py-2 rounded bg-surface-container-highest text-on-surface font-label-md text-label-md uppercase" onclick="closeModal('modal-history')">Cerrar</button>
            </div>
        </div>
    </div>

    <!-- ===== SCRIPT DEL PERFIL ===== -->
    <script>
        // ===== Modales =====
        function openModal(id) {
            const modal = document.getElementById(id);
            if (modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }
        function closeModal(id) {
            const modal = document.getElementById(id);
            if (modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }
        }
        window.openModal  = openModal;
        window.closeModal = closeModal;

        // ===== Cargar datos guardados =====
        (function loadProfile() {
            try {
                const raw = localStorage.getItem('auraverse_hunter_profile');
                if (!raw) return;
                const p = JSON.parse(raw);

                document.getElementById('input-username').value = p.username || '';
                document.getElementById('input-email').value    = p.email    || '';
                document.getElementById('input-bio').value      = p.bio      || '';
                document.getElementById('select-rank').value    = p.rank     || 'S-RANK';

                document.querySelectorAll('[data-user-name]').forEach(el => el.textContent = p.username || '');
                document.querySelectorAll('[data-user-email]').forEach(el => el.textContent = p.email || '');
                document.querySelectorAll('[data-user-bio]').forEach(el => el.textContent = p.bio || '');
                document.querySelectorAll('[data-user-rank]').forEach(el => el.textContent = p.rank || '');
            } catch (e) {}
        })();

        // ===== Guardar perfil =====
        window.handleSaveProfile = function(e) {
            e.preventDefault();
            const data = {
                username: document.getElementById('input-username').value.trim(),
                email:    document.getElementById('input-email').value.trim(),
                bio:      document.getElementById('input-bio').value.trim(),
                rank:     document.getElementById('select-rank').value,
                accent:   document.querySelector('input[name="accent-color"]:checked')?.value || 'purple'
            };
            localStorage.setItem('auraverse_hunter_profile', JSON.stringify(data));

            // Actualizar UI
            document.querySelectorAll('[data-user-name]').forEach(el => el.textContent = data.username);
            document.querySelectorAll('[data-user-email]').forEach(el => el.textContent = data.email);
            document.querySelectorAll('[data-user-bio]').forEach(el => el.textContent = data.bio);
            document.querySelectorAll('[data-user-rank]').forEach(el => el.textContent = data.rank);

            closeModal('modal-edit-profile');
            if (window.showToast) window.showToast('Perfil actualizado con éxito', 'check_circle', 'tertiary');
        };

        // ===== Mi Lista (lee bookmarks del localStorage) =====
        (function loadFavs() {
            const grid = document.getElementById('fav-list-grid');
            const empty = document.getElementById('fav-empty-state');
            let saved = [];
            try { saved = JSON.parse(localStorage.getItem('auraverse_grimoire_bookmarks')) || []; } catch (e) {}

            // También añade el bookmark del hero
            if (localStorage.getItem('auranexus_saved_solo_leveling') === 'true') {
                saved.push('Solo Leveling: Arise');
            }

            document.getElementById('modal-fav-count').textContent = saved.length;

            if (saved.length === 0) {
                if (empty) empty.classList.remove('hidden');
                return;
            }

            empty?.classList.add('hidden');
            saved.forEach((titulo, i) => {
                const div = document.createElement('div');
                div.className = 'flex flex-col bg-surface-container rounded-xl overflow-hidden shadow-lg group relative';
                div.innerHTML = `
                <div class="relative h-56 overflow-hidden bg-surface-container-highest flex items-center justify-center">
                    <span class="material-symbols-outlined text-6xl text-outline opacity-30">bookmark</span>
                    <button class="absolute top-2 right-2 p-1.5 rounded-full bg-error-container text-on-error-container hover:bg-error transition-all" title="Eliminar">
                        <span class="material-symbols-outlined text-sm">delete</span>
                    </button>
                </div>
                <div class="p-space-md flex flex-col gap-1">
                    <h5 class="font-title-md text-title-md text-on-surface truncate">${titulo}</h5>
                    <div class="flex items-center justify-between text-outline font-body-sm text-body-sm">
                        <span>En tu lista</span>
                        <span class="text-tertiary">★ 9.9</span>
                    </div>
                </div>
            `;
                div.querySelector('button').addEventListener('click', () => {
                    const key = 'auraverse_grimoire_bookmarks';
                    let list = JSON.parse(localStorage.getItem(key) || '[]');
                    list = list.filter(t => t !== titulo);
                    localStorage.setItem(key, JSON.stringify(list));
                    div.remove();
                    const c = document.getElementById('modal-fav-count');
                    c.textContent = parseInt(c.textContent) - 1;
                    if (window.showToast) window.showToast(`"${titulo}" eliminado`, 'delete', 'error');
                });
                grid.appendChild(div);
            });
        })();
    </script>

<?php include __DIR__ . '/frontend.endmain.php'; ?>