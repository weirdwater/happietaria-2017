(function() {
    const header = document.getElementById('header');
    const newsBar = document.getElementById('newsBar');

    (function manageStickyHeader() {
        const newsBarBottomPosition = newsBar.getBoundingClientRect().bottom;

        header.dataset.fixed = newsBarBottomPosition < 0;
        window.requestAnimationFrame(manageStickyHeader);
    })();
})();