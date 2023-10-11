<?php
if (!isset($_SESSION['loggedin'])) {
    header("location: login.php");
}
include "db.php";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM blogs WHERE id=$id";

        $result = $conn->query($sql);

        if ($result === true) {
            echo "Blog succesvol verwijderd";
        } else {
            echo "We kunnen de blog niet verwijderen";
        }
    }
?>