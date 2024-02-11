<?php
session_start();
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Těstovinové recepty</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="header-container">
            <div class="main-contact">
                <img src="img/email-icon.png" alt="email"><span class="mail">testoviny@firma.cz</span>
            </div>

            <?php
            if (isset($_SESSION['user_email'])) {
                // Pokud je uživatel přihlášen, zobrazí se odkazy pro přihlášeného uživatele
                echo '<div class="log">
                        <a class="login" href="user_dashboard.php">Můj účet</a>
                        <a class="register" href="users_logout.php">Odhlásit</a>
                      </div>';
            } else {
                // Pokud uživatel není přihlášen, zobrazí se standardní odkazy pro přihlášení/registraci
                echo '<div>
                        <a class="login" href="login_form.html">Přihlásit</a>
                        <a class="register" href="registration_form.html">Registrovat</a>
                      </div>';
            }
            ?>
        </div>
    </header>

        <div><img class="main-img" src="img/pasta.jpg" alt="Těstoviny"></div>
        <nav>
            <div class="hamburger-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul>
                <li><a href="index.php" class="active">Domů</a></li>
                <li><a href="#">Špagety</a></li>
                <li><a href="#">Tagliatelle</a></li>
                <li><a href="#">Fusilli</a></li>
                <li><a href="#">Penne</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="top-section">
            <h1 class="top-title">Nejoblíbenější recepty</h1>
            <div class="top-section-section">
                <a class="recipe-detail-click" href="recipe_detail.php">
                    <article class="top-article">
                        <img class="pasta-picture" src="img/tagliatelle.jpg" alt="špagety">
                        <h1 class="top-article-title">Nadpis receptu</h1>
                        <p>Popis receptu a Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quam! Est libero fsss</p>
                    </article>
                </a>
                <a class="recipe-detail-click" href="recipe_detail.php">
                    <article class="top-article">
                        <img class="pasta-picture" src="img/spagety.jpg" alt="špagety">
                        <h1 class="top-article-title">Nadpis receptu</h1>
                        <p>Popis receptu a Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quam! Est libero fsss</p>
                    </article>
                </a>
                <a class="recipe-detail-click" href="recipe_detail.php">
                    <article class="top-article">
                        <img class="pasta-picture" src="img/tagliatelle.jpg" alt="špagety">
                        <h1 class="top-article-title">Nadpis receptu</h1>
                        <p>Popis receptu a Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quam! Est libero fsss</p>
                    </article>
                </a>
                <a class="recipe-detail-click" href="recipe_detail.php">
                    <article class="top-article">
                        <img class="pasta-picture" src="img/spagety.jpg" alt="špagety">
                        <h1 class="top-article-title">Nadpis receptu</h1>
                        <p>Popis receptu a Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quam! Est libero fsss</p>
                    </article>
                </a>
            </div>
        </section>

        <section class="classic-section">
            <h1 class="top-title">Ostatní recepty</h1>
            <div class="top-section-section">
                <a class="recipe-detail-click" href="recipe_detail.php">
                    <article class="top-article">
                        <img class="pasta-picture" src="img/penne-2.jpg" alt="špagety">
                        <h1 class="top-article-title">Nadpis receptu</h1>
                        <p>Popis receptu a Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quam! Est libero fsss</p>
                    </article>
                </a>
                <a class="recipe-detail-click" href="recipe_detail.php">
                    <article class="top-article">
                        <img class="pasta-picture" src="img/penne.jpg" alt="špagety">
                        <h1 class="top-article-title">Nadpis receptu</h1>
                        <p>Popis receptu a Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quam! Est libero fsss</p>
                    </article>
                </a>
                <a class="recipe-detail-click" href="recipe_detail.php">
                    <article class="top-article">
                        <img class="pasta-picture" src="img/penne-2.jpg" alt="špagety">
                        <h1 class="top-article-title">Nadpis receptu</h1>
                        <p>Popis receptu a Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quam! Est libero fsss</p>
                    </article>
                </a>
                <a class="recipe-detail-click" href="recipe_detail.php">
                    <article class="top-article">
                        <img class="pasta-picture" src="img/penne.jpg" alt="špagety">
                        <h1 class="top-article-title">Nadpis receptu</h1>
                        <p>Popis receptu a Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quam! Est libero fsss</p>
                    </article>
                </a>
            </div>
        </section>
        <div class="next-recept">
            <p><a href="#">Další recepty</a></p>
        </div>
    </main>

    <footer>
        <p>© 2023 Boro`s websites, All Right Reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>