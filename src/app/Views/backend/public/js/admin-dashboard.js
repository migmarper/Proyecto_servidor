(function initAdminDashboard() {
    function animateCountUp(el, duration = 1600) {
        const target = parseInt(el.getAttribute('data-target'), 10);
        if (isNaN(target)) return;
        const startTime = performance.now();

        function update(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const easeOut = 1 - Math.pow(1 - progress, 3);
            const currentVal = Math.floor(easeOut * target);
            el.textContent = currentVal.toLocaleString('es-ES');
            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                el.textContent = target.toLocaleString('es-ES');
            }
        }
        requestAnimationFrame(update);
    }

    ['kpi-users', 'kpi-series', 'kpi-streams', 'kpi-revenue'].forEach(id => {
        const elem = document.getElementById(id);
        if (elem) animateCountUp(elem);
    });

    setInterval(() => {
        const usersEl = document.getElementById('kpi-users');
        if (usersEl) {
            const base = parseInt(usersEl.getAttribute('data-target'), 10);
            const delta = Math.floor(Math.random() * 9) - 4;
            const updated = base + delta;
            usersEl.setAttribute('data-target', updated);
            usersEl.textContent = updated.toLocaleString('es-ES');
        }
        const streamsEl = document.getElementById('kpi-streams');
        if (streamsEl) {
            const baseS = parseInt(streamsEl.getAttribute('data-target'), 10);
            const deltaS = Math.floor(Math.random() * 25) + 3;
            const updatedS = baseS + deltaS;
            streamsEl.setAttribute('data-target', updatedS);
            streamsEl.textContent = updatedS.toLocaleString('es-ES');
        }
        const latEl = document.getElementById('system-latency');
        if (latEl) latEl.textContent = Math.floor(Math.random() * 3) + 11;
    }, 4000);
})();
