<?php require_once('session.php'); ?>
<?php require_once("connection.php"); ?>
<?php
$specialid = $_GET['specialid'];
$query = "DELETE FROM data WHERE id = $specialid";
$result = mysqli_query($connection, $query);
if ($result) {

    header("location: dashboard.php");
} else {
    die(mysqli_error($result));
}

?>