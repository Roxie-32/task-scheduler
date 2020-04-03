<?php require_once('session.php'); ?>
<?php require_once("connection.php"); ?>
<?php $userid = $_SESSION['id'];
$query = "DELETE FROM  DATA WHERE userid =$userid";

$result = mysqli_query($connection, $query);

if (!$result) {
    die(mysqli_error($result));
} else {
    header("location: dashboard.php");
}
?>
