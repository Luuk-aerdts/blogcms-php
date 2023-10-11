<?php
include "db.php";
$sql = "SELECT * FROM blogs";
$resultaat = $conn->query($sql);
while($row = $resultaat->fetch_assoc()) {
    echo "<td>" . $row['blognaam'] . "  " . "</td>";
    echo "<a href='edit.php?id=" . $row['id'] . "'>edit</a>";
    echo "<br>";
    
}
$conn->close();
?>