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
    <title>Blogschrijven</title>
</head>
<body>
<div class="form">
    <h1>Schrijf een blog</h1>
    <div>
        <form action="add.php" method="post" name="form1">
            <table width="25%">
                <tr>
                    <td>blognaam</td>
                    <td><input type="text" name="blognaam" id="blognaam"></td>
                </tr>
                <tr>
                    <td>blogbericht</td>
                    <td><textarea name="blogbericht" id="blogbericht"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>
</div>
</body>

</html>