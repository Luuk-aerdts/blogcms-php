<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    include "header.html";
}
else {
    include "admin_header.html";
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="button.css">
    <style>
        body{ text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welkom op de back-end van het blogcms.</h1>
    <p>
        <h3>Snelle handelingen</h3>
        <a href="blogschrijven.php" class="btn btn-primary">Blog schrijven</a><br><br>
        <a href="bewerken.php" class="btn btn-primary">Blog bewerken</a><br><br>
        <a href="verwijder.php" class="btn btn-primary">Blog verwijderen</a><br><br>
        <a href="reset-password.php" class="btn btn-primary">Reset wachtwoord</a><br><br>
        <a href="loguit.php" class="btn btn-primary">Uitloggen</a>
    </p>
</body>
</html>