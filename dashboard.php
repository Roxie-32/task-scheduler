<?php require_once('session.php'); ?>
<?php require_once 'connection.php';
$userid = $_SESSION['id'];

?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="pull-right" style="margin:10px;">
                <a href="add.php" class="btn btn-primary" style="font-family:'Times New Roman', Times, serif">
                    <span class="glyphicon glyphicon-edit"></span>
                    Add A task
                </a>
                <a href="delall.php" class="btn btn-danger" style="font-family:'Times New Roman', Times, serif">
                    <span class="glyphicon glyphicon-trash"></span>
                    Delete all Tasks
                </a>
                <a href="logout.php" class="btn btn-default" style="font-family:'Times New Roman', Times, serif">
                    <span class="glyphicon glyphicon-log-out"></span>
                    Logout
                </a>
            </div>
        </div>

    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 style="text-align: center;
                        font-family:courier;">
                        <strong><span class="glyphicon glyphicon-tasks"></span>MY TASKS</strong>
                        </h2>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Task Description</th>
                                <th>Task Time</th>
                                <th>Task Date</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM  data WHERE userid = '$userid' ";
                            $result = mysqli_query($connection, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['taskdesc']; ?></td>
                                    <td><?php echo $row['tasktime']; ?></td>
                                    <td><?php echo $row['taskdate']; ?></td>
                                    <td><a class="btn btn-danger btn-xs" href="del.php?specialid= <?php echo $row['id']; ?>">
                                            <span class="glyphicon glyphicon-trash"></span> Delete</a></td><br>


                                </tr>

                            <?php
                            }

                            ?>

                        </tbody>

                    </table>

                </div>

                <div class="panel-footer">

                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once("footer.php");
