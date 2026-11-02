// Abrir/cerrar modal añadir anime
const modalAddAnime = document.getElementById('modal-add-anime');
const btnOpenAddAnime = document.getElementById('btn-open-add-anime');
const btnCloseAddAnime = document.getElementById('btn-close-add-anime');
const btnCancelAddAnime = document.getElementById('btn-cancel-add-anime');

if (btnOpenAddAnime && modalAddAnime) {
    btnOpenAddAnime.addEventListener('click', (e) => {
        e.preventDefault();
        modalAddAnime.classList.remove('hidden');
        modalAddAnime.classList.add('flex');
    });
}
[btnCloseAddAnime, btnCancelAddAnime].forEach(btn => {
    if (btn) btn.addEventListener('click', () => {
        modalAddAnime.classList.add('hidden');
        modalAddAnime.classList.remove('flex');
    });
});