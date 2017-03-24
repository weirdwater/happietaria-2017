(function() {
    const header = document.getElementById('header'),
        newsBar = document.getElementById('newsBar'),
        stickyHeader = document.getElementById('stickyHeader'),
        menuToggle = stickyHeader.querySelector('#menuToggle');

    const strCloseMenu = 'Sluit menu',
        strOpenMenu = 'Open menu';

    (function manageStickyHeader() {
        const newsBarBottomPosition = newsBar.getBoundingClientRect().bottom;

        header.dataset.fixed = newsBarBottomPosition < 0;
        window.requestAnimationFrame(manageStickyHeader);
    })();

    function manageMenuToggle() {
        const menuIsOpen = stickyHeader.dataset.open;
        switch(menuIsOpen) {
            case 'true':
                // close menu
                stickyHeader.dataset.open = false;
                menuToggle.innerText = strOpenMenu;
                break;
            default:
                // open menu
                stickyHeader.dataset.open = true;
                menuToggle.innerText = strCloseMenu;
        }
    }

    menuToggle.addEventListener('click', manageMenuToggle);

})();