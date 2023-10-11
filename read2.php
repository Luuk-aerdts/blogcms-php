<?php
$sql = "SELECT * FROM blogs";
$resultaat = $conn->query($sql);
while($row = $resultaat->fetch_assoc()) {
    echo "<td>" . $row['id'] . "  " . "</td>";
    echo "<td>| </td>";
    echo "<td>" . $row['blognaam'] . "  " . "</td>";
    echo "<a href='verwijder.php?id=" . $row['id'] . "'>verwijder</a>";
    echo "<br>";
}
$conn->close();
?>