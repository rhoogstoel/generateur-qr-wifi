<?php
if (!isset($_POST['ssid'], $_POST['password'])) {
    header('Location: index.php');
    exit;
}

$ssid = htmlspecialchars(trim($_POST['ssid'])); // les deux fonctions assurent la conformité du ssid
$password = htmlspecialchars(trim($_POST['password'])); // les deux fonctions assurent la conformité du password

// cas où textfield du nom du réseau vide
if (empty($ssid)) {
    header('Location: index.php?erreur=1');
    exit;
}
$codewifi = "WIFI:T:WPA;S:".$ssid.";P:".$password.";;"; // forme standard d'un QR Code Wi-Fi
$lienQr = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=" . urlencode($codewifi); // utilisation de l'API
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre QR Code Wi-Fi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>QR Code Wi-Fi pour : <?php echo $ssid; ?></h2>
    <img src="<?php echo $lienQr; ?>" alt="QR Code Wi-Fi" id="qrcode" class="rebond">
    <p><a href="index.php">Générer un autre code</a></p>
</body>
</html>