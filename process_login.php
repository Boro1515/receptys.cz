<?php
session_start();
?>
<?php
// Připojení k databázi - nahraď údaje dle svého prostředí
$servername = "md392.wedos.net";
$username = "a336498_users";
$password = "DataPasta15!";
$dbname = "d336498_users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola připojení
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Získání dat z formuláře
$email = $_POST['email'];
$password = $_POST['password'];

// Ověření přihlašovacích údajů
$sql = "SELECT * FROM pasta_users WHERE users_email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['users_password'])) {
        // Přihlášení úspěšné - nastavte session s emailem uživatele
        session_start();
        $_SESSION['user_email'] = $email;

        header("Location: user_dashboard.php");
    } else {
        echo "Neplatné heslo";
    }
} else {
    echo "Uživatel s tímto emailem neexistuje";
}

$conn->close();
?>
