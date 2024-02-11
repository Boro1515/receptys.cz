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
        <div class="header-container-register">
            <div class="main-contact">
                <img src="img/email-icon.png" alt="email"><span class="mail">testoviny@firma.cz</span>
            </div>
            
            <?php
            if (isset($_SESSION['user_email'])) {
                // Pokud je uživatel přihlášen, zobrazí se odkazy pro přihlášeného uživatele
                echo '<div class="log">
                        <a class="login" href="user_dashboard.php">Můj účet</a>
                        <a class="register" href="logout.php">Odhlásit</a>
                      </div>';
            } else {
                // Pokud uživatel není přihlášen, zobrazí se standardní odkazy pro přihlášení/registraci
                echo '<div class="log">
                        <a class="login" href="login_form.html">Přihlásit</a>
                        <a class="register" href="registration_form.html">Registrovat</a>
                      </div>';
            }
            ?>
        </div>
        <nav>
            <div class="hamburger-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul>
                <li><a href="index.php">Domů</a></li>
                <li><a href="#">Špagety</a></li>
                <li><a href="#">Tagliatelle</a></li>
                <li><a href="#">Fusilli</a></li>
                <li><a href="#">Penne</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <div class="flex-img-detail">
            <article>
                <div class="img-title"><h2 class="img-detail-title">Špagety s boloňskou omáčkou</h2></div>
                <div class="flex-box-img"><img class="img-detail" src="img/spagety.jpg" alt=""></div>
            </article>
        </div>
        <aside class="left">
            <h2 class="raw-detail-title">Suroviny</h2>
            <ul class="raw-all-text">
                <li class="raw-text">Špagety</li>
                <li class="raw-text">Cibule</li>
                <li class="raw-text">Česnek</li>
                <li class="raw-text">Protlak</li>
                <li class="raw-text">Mleté maso</li>
            </ul>
        </aside>
        <aside class="right">
            <h2 class="raw-detail-title">Postup</h2>
            <ol>
                <li class="process-text">Začneme Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis facere possimus
                    dicta, nemo ullam dolore at repellendus enim fugiat veniam! Saepe numquam iusto nisi soluta architecto et, obcaecati ipsa qui.</li>
                <li class="process-text">Začneme Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis facere possimus
                    dicta, nemo ullam dolore at repellendus enim fugiat veniam! Saepe numquam iusto nisi soluta architecto et, obcaecati ipsa qui.</li>
                <li class="process-text">Začneme Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis facere possimus
                    dicta, nemo ullam dolore at repellendus enim fugiat veniam! Saepe numquam iusto nisi soluta architecto et, obcaecati ipsa qui.</li>
                <li class="process-text">Začneme Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis facere possimus
                    dicta, nemo ullam dolore at repellendus enim fugiat veniam! Saepe numquam iusto nisi soluta architecto et, obcaecati ipsa qui.</li>
                <li class="process-text">Začneme Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis facere possimus
                    dicta, nemo ullam dolore at repellendus enim fugiat veniam! Saepe numquam iusto nisi soluta architecto et, obcaecati ipsa qui.</li>    
            </ol>
        </aside>
    </main>

    <footer class="footer-recipe-detail">
        <p>© 2023 Boro`s websites, All Right Reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>