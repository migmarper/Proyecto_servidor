<?php
// frontend.endmain.php
?>
</main>

<!-- ===== FOOTER COMÚN ===== -->
<footer class="w-full bg-surface-container-lowest py-space-xl mt-space-xl">
    <div class="w-full px-gutter-lg">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-space-lg mb-space-lg pb-space-lg">
            <div class="flex flex-col gap-space-xs">
                <div class="flex items-center gap-space-xs">
                    <span class="font-headline-lg text-headline-lg text-primary">AURAVERSE</span>
                    <span class="font-headline-lg text-headline-lg text-secondary">NEXUS</span>
                </div>
                <p class="font-body-sm text-body-sm text-outline max-w-md">
                    Plataforma dimensional de streaming shonen, grimorios interactivos y lecturas de manwha calibradas por telemetría astral.
                </p>
            </div>
            <div class="flex flex-col gap-space-xs">
                <span class="font-label-sm text-label-sm uppercase text-outline tracking-widest">Estudios Aliados &amp; Licencias Oficiales</span>
                <div class="flex flex-wrap items-center gap-space-md">
                    <span class="font-headline-md text-headline-md text-on-surface-variant hover:text-primary transition-colors cursor-pointer">MAPPA</span>
                    <span class="font-headline-md text-headline-md text-on-surface-variant hover:text-tertiary transition-colors cursor-pointer">UFOTABLE</span>
                    <span class="font-headline-md text-headline-md text-on-surface-variant hover:text-secondary transition-colors cursor-pointer">BONES</span>
                    <span class="font-headline-md text-headline-md text-on-surface-variant hover:text-primary transition-colors cursor-pointer">TOEI</span>
                    <span class="font-headline-md text-headline-md text-on-surface-variant hover:text-tertiary transition-colors cursor-pointer">WIT</span>
                    <span class="font-headline-md text-headline-md text-on-surface-variant hover:text-secondary transition-colors cursor-pointer">A-1 PICTURES</span>
                </div>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row items-center justify-between gap-space-sm pt-space-md">
            <span class="font-body-sm text-body-sm text-outline">© 2025 AuraVerse Nexus Inc. Todos los universos y esferas espirituales sincronizadas.</span>
            <div class="flex items-center gap-space-md">
                <span class="font-label-sm text-label-sm text-tertiary uppercase">CORE STATUS: LEVEL 4 NORMAL</span>
                <span class="font-label-sm text-label-sm text-primary uppercase">ENERGÍA REIATSU: 99.8%</span>
            </div>
        </div>
    </div>
</footer>

<!-- ===== SCRIPTS COMUNES ===== -->
<script>
    // ===== Cargar datos del usuario desde localStorage =====
    (function loadUserData() {
        try {
            const raw = localStorage.getItem('auraverse_active_user');
            if (!raw) return;
            const user = JSON.parse(raw);
            if (!user) return;

            document.querySelectorAll('[data-user-name]').forEach(el => {
                if (user.name) el.textContent = user.name;
            });
            document.querySelectorAll('[data-user-rank]').forEach(el => {
                if (user.rank) el.textContent = user.rank;
            });
            document.querySelectorAll('[data-user-grade]').forEach(el => {
                if (user.rank) el.textContent = user.rank;
            });
            document.querySelectorAll('[data-user-level]').forEach(el => {
                el.textContent = user.level || 'LV.1 SPIRIT';
            });
            document.querySelectorAll('[data-user-email]').forEach(el => {
                if (user.email) el.textContent = user.email;
            });
        } catch (e) {
            console.warn('Error loading user data', e);
        }
    })();

    // ===== Sistema de toasts global =====
    window.showToast = function(message, icon = 'check_circle', color = 'tertiary') {
        let toast = document.getElementById('global-toast');
        if (!toast) {
            toast = document.createElement('div');
            toast.id = 'global-toast';
            toast.className = 'fixed bottom-6 right-6 z-[100] transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none flex items-center gap-3 px-space-md py-3 rounded-xl bg-surface-container-highest/95 backdrop-blur-md shadow-2xl text-on-surface';
            toast.innerHTML = `<span class="material-symbols-outlined text-${color}" id="global-toast-icon">${icon}</span><span class="font-body-md text-body-md" id="global-toast-text"></span>`;
            document.body.appendChild(toast);
        }
        const iconEl = document.getElementById('global-toast-icon');
        const textEl = document.getElementById('global-toast-text');
        iconEl.textContent = icon;
        iconEl.className = `material-symbols-outlined text-${color}`;
        textEl.textContent = message;

        toast.classList.remove('translate-y-24', 'opacity-0');
        toast.classList.add('translate-y-0', 'opacity-100');
        clearTimeout(window.__toastTimeout);
        window.__toastTimeout = setTimeout(() => {
            toast.classList.remove('translate-y-0', 'opacity-100');
            toast.classList.add('translate-y-24', 'opacity-0');
        }, 3200);
    };

    // ===== Atajo CMD+K para búsqueda =====
    document.addEventListener('keydown', (e) => {
        if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
            e.preventDefault();
            const search = document.querySelector('header input[type="text"]');
            if (search) search.focus();
        }
    });
</script>

</body>
</html>