document.addEventListener('DOMContentLoaded', function () {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navList = document.querySelector('nav ul');

    hamburgerMenu.addEventListener('click', function () {
        navList.style.display = (navList.style.display === 'flex') ? 'none' : 'flex';
        hamburgerMenu.classList.toggle('active');
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 700) {
            navList.style.display = 'flex';
            hamburgerMenu.classList.remove('active');
        } else {
            if (!hamburgerMenu.classList.contains('active')) {
                // Přidáno podmíněné zobrazení hamburger menu pouze při neaktivním stavu
                navList.style.display = 'none';
            }
        }
    });
});
