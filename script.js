document.addEventListener('DOMContentLoaded', function () {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navList = document.querySelector('nav ul');

    hamburgerMenu.addEventListener('click', function () {
        // Přepínání viditelnosti navigačního menu
        navList.style.display = (navList.style.display === 'flex') ? 'none' : 'flex';
    });

    // Přidání event listeneru na změnu velikosti okna
    window.addEventListener('resize', function () {
        // Zobrazit navigační menu pouze pokud šířka obrazovky přesáhne 700px
        if (window.innerWidth > 700) {
            navList.style.display = 'flex';
        } else {
            navList.style.display = 'none';
        }
    });
});
