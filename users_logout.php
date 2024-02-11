<?php
session_start();

// Kontrola, zda je uživatel přihlášen
if (isset($_SESSION['user_email'])) {
    // Odstranění všech session proměnných
    session_unset();

    // Zničení session
    session_destroy();

    // Přesměrování na domovskou stránku nebo jakoukoliv jinou stránku podle vašeho výběru
    header("Location: index.php");
    exit();
} else {
    // Pokud uživatel není přihlášen, přesměrování na domovskou stránku nebo jakoukoliv jinou stránku podle vašeho výběru
    header("Location: index.php");
    exit();
}
?>
