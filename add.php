<?php require_once('session.php'); ?>

<?php require_once 'connection.php';


if (isset($_POST['create'])) {
    $userid   = $_SESSION['userid']; //this session can be accessed anywhere s long as someone is logged in
    $taskdesc = $_POST['taskdesc'];
    $tasktime = $_POST['tasktime'];
    $taskdate = $_POST['taskdate'];




    $query = "INSERT INTO data (userid, taskdesc, tasktime, taskdate)
                      VALUES ('{$userid}', '{$taskdesc}', '{$tasktime}','{$taskdate}') ";

    $result = mysqli_query($connection, $query);

    if ($result == true) {
        header("location: dashboard.php");
    }
}

?>
<!-- TODO: Add the link to logout|Dashboard here. page too blank -->
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="well" style="margin-top: 10px" ;>
                <h3>Add New Task</h3>
                <form action="" method="post">
                    <!-- <div class="form-group">
                        <input class="form-control" type="hidden" name="userid" value="<?php echo $_SESSION['id'] ?>" required><br>
                    </div> --> 
                    <!-- Above field isn't needed -->
                    <div class="form-group">
                        <label for="">Task Description</label><br>
                        <textarea class="form-control" type="text" cols="30" rows="5" name="taskdesc"></textarea><br>
                    </div>

                    <div class="form-group">
                        <label for="">Time</label><br>
                        <input class="form-control" type="time" name="tasktime"><br><br>
                    </div>

                    <div class="form-group">
                        <label for="">Date</label><br>
                        <input class="form-control" type="date" name="taskdate"><br><br>
                    </div>

                    <div class="form-group">

                        <button class="btn btn-primary " type="submit" name="create"><span class="glyphicon glyphicon-edit">Add</span></button>
                    </div>



                </form>

            </div>

        </div>

    </div>
</div>