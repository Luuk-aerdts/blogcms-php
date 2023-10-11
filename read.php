<?php

include "db.php";
$sql = "SELECT * FROM blogs";
$resultaat = $conn->query($sql);
while($row = $resultaat->fetch_assoc()) {
    echo "<td>" . $row['blognaam'] . "  " . "<a href='lees.php?id=" . $row['id'] . "'>lees</a></td>";
    echo "<br>";
}
$conn->close();
?>


