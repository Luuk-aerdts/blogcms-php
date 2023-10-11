<html>
<head>
    <title>Add Data</title>
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION['loggedin'])) {
        include "header.html";
    }
    else {
        include "admin_header.html";
    }
    include_once("db.php");

    if (isset($_POST['Submit'])) {
        $blognaam = $_POST['blognaam'];
        $blogbericht = $_POST['blogbericht'];

        if (empty($blognaam) || empty($blogbericht)) {
            if (empty($blognaam)) {
                echo "<font color='red'>blognaam veld is leeg.</font><br/>";
            }

            if (empty($blogbericht)) {
                echo "<font color='red'>blogbericht veld is leeg.</font><br/>";
            }

            echo "<br/><a href='javascript:self.history.back();'>Ga terug</a>";
        } else {

            $result = mysqli_query($conn, "INSERT INTO `blogs`(`blognaam`, `blogbericht`) VALUES ('$blognaam', '$blogbericht')");
            if($result){
            echo "<font color='green'>Uw blog is toegevoegd succesvol!.";
            echo "<br/><a href='index.php'>Resultaat bekijken</a>";
            }
        }
    }
    ?>
</body>

</html>