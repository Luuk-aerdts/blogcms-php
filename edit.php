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

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
?>

<?php
if (isset($_POST['submit'])) {
    $blognaam = $_POST['blognaam'];
    $blogbericht = $_POST['blogbericht'];

    $query = "UPDATE `blogs` SET `blognaam`= '$blognaam',`blogbericht`= '$blogbericht' WHERE `id` = $id";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("query failed" . mysqli_error($conn));
    } 
    else {
        header("Location: index.php");
    }
}
?>

<?php
    $query = "SELECT `blognaam` , `blogbericht` FROM blogs WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("query failed " . mysqli_error($conn));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}
?>

<form action="edit.php?id=<?php echo $id; ?>" method="post" name="form2">
    <table width="25%">
        <tr>
            <td>blognaam</td>
            <td><input type="text" name="blognaam" id="blognaam" value="<?php echo $row['blognaam'] ?>"></td>
        </tr>
        <tr>
            <td>blogbericht</td>
            <td><textarea name="blogbericht" id="blogbericht"><?php echo $row['blogbericht'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Update"></td>
        </tr>
    </table>
</form>
