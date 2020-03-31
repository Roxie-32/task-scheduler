<?php require_once 'connection.php';

 //echo $_SESSION['id'];

    if (isset($_POST['create'])) {
        $userid   = $_POST['userid'];
        $taskdesc = $_POST['taskdesc'];
        $tasktime = $_POST['tasktime'];
        $taskdate = $_POST['taskdate'];

        
        
        
            $query = "INSERT INTO data (userid, taskdesc, tasktime, taskdate)
                      VALUES ('$userid', '$taskdesc', '$tasktime','$taskdate') ";

             $result = mysqli_query($connection, $query);

                if($result == true){
                    header("location: dashboard.php");
                }

    }

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
        <body>
      
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 col-xs-offset-4">
                        <div class="well" style="margin-top: 10px"; >
                            <h3>Add New Task</h3>
                        <form action="" method="post" >
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="userid" value="<?php echo $_SESSION['id']?>" required><br>
                        </div>
                        <div class="form-group">
                            <label for="">Task Description</label><br>
                            <textarea class="form-control" type="text"cols="30" rows="5" name="taskdesc"></textarea><br>
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
                            
                                <button  class="btn btn-primary " type="submit" 
                                name="create"><span class="glyphicon glyphicon-edit">Add</span></button>
                        </div>
            


            </form>

                        </div>
                   
                    </div>

                </div>
            </div>
           
        </body>
    </html>