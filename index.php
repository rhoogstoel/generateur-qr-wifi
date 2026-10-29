<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de QR Code Wi-Fi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Générateur de QR Code Wi-Fi</h2>
<?php


// formulaire pour renseigner ssid + mot de passe
echo "<form action='connexion.php' method='post'>
    <label for='ssid'>Nom du réseau : </label>
    <input type='text' name='ssid' id='ssid' class='identifiant'>
    <label for='password'>Mot de passe : </label>
    <input type='text' name='password' id='password' class='identifiant'>
    <input type='submit' name='ok' value='Valider' id='ok' class='rebond'>
    </form>";

// cas d'erreur : si nos données rentrées dans le formulaire sont incomplètes
if (isset($_GET['erreur']) && $_GET['erreur'] === '1') {
        echo "<p>Erreur : Le nom du réseau ne peut pas être vide";
}
?>
</body>
</html>