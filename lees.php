<link rel="stylesheet" href="index.css">
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    include "header.html";
}
else {
    include "admin_header.html";
}
include "db.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} 
$sql = "SELECT `blognaam` , `blogbericht` FROM blogs WHERE id=$id";
$resultaat = $conn->query($sql);
while($row = $resultaat->fetch_assoc()) {
    echo "<h1 class='titel'>" . $row['blognaam'] . "  " . "</h1>";
    echo "<br>";
    echo "<p class='bericht'>" . $row['blogbericht'] . "  " . "</p>";
    echo "<br>";
    
}
$conn->close();
?>