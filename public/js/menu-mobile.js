document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('menuMobileBtn');
    const menu = document.getElementById('menuLateralMobile');
    const closeBtn = document.getElementById('closeMenuMobile');

    if (menuBtn && menu && closeBtn) {
        menuBtn.addEventListener('click', function() {
            menu.classList.add('open');
        });
        closeBtn.addEventListener('click', function() {
            menu.classList.remove('open');
        });
        // Fecha o menu ao clicar fora dele
        document.addEventListener('click', function(e) {
            if (menu.classList.contains('open') && !menu.contains(e.target) && e.target !== menuBtn) {
                menu.classList.remove('open');
            }
        });
    }
});
