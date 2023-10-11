<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header("location: login.php");
    include "header.html";
}
else {
    include "admin_header.html";
}
include "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="center.css">
    <title>Bewerken</title>
</head>
<body>
<div class="form">
<h1>Bewerk een blog</h1>
<br>
    <?php
    include "read3.php";
    ?>
</div>
</body>
</html>