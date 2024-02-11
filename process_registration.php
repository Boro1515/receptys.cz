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
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Vložení dat do databáze
$sql = "INSERT INTO pasta_users (users_email, users_password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: after_registration.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
