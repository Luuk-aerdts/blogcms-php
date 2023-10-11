<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
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
    <link rel="stylesheet" href="index.css">
    <title>BLOG CMS</title>
</head>
<body>
    <h1 class="titel">Geschreven blogs</h1>
    <br>
    <div class="blogs">
    <?php
    include "read.php";
    ?>
    </div>
</body>
</html>