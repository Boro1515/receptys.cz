<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location: login_form.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Administrace</title>
</head>
<body>
    <header>
        <div class="header-container-register">
            <div class="main-contact">
                <img src="../img/email-icon.png" alt="email"><span class="mail">testoviny@firma.cz</span>
            </div>
            <div class="log">
                <a class="login" href="user_dashboard.php">Můj účet</a>
                <a class="register" href="index.php">Odhlásit</a>
            </div>
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
    
    <body>
        <h2 class="welcome-dashboard">Vítejte <?= $_SESSION['user_email']; ?>!</h2><br>
        <h2 class="welcome-dashboard">Vaše oblíbené recepty</h2>
    </body>
    
    <footer class="footer-login-page">
        <p>© 2023 Boro`s websites, All Right Reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
