<?php require_once 'connection.php'; 


if(isset($_POST['login'])){
    $username =$_POST['username'];
    $password =$_POST['password'];
    
        $query ="SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($connection, $query);
            if ($result == true) {
                while ($row = mysqli_fetch_array($result)) {
                    
                    $_SESSION['id'] = $row['id'];    
                    
                    header("location:dashboard.php");
                }
            }else{
                echo "Username or password not Correct";
            }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<div class="container" style="margin: 10px;">
                <div class="row">
                    <div class="col-xs-12">
                            <ul class="nav nav-pills pull-right">
                               
                                <li><a href="index.php"<span class="glyphicon glyphicon-user"></span>>Sign Up</a></li>
                                <li class="active"><span class="glyphicon glyphicon-log-in"></span><a href="#"> Login</a></li>
                                
                            </ul>
                    </div>

                </div><br><br>
                
    <div class="container" >
        <div class="row">
            <div class="col-xs-3 col-xs-offset-4 ">
                <div class="well ">
                <form action="" method="POST">

                <div class="form-group">
                <label for="">Username</label><br>
                <input class="form-control" type="text" name="username"><br>
                </div>

                <div class="form-group">
                <label for="">Password</label><br>
                <input class="form-control" type="password" name="password"><br>
                </div>

                <div >
                <input type="submit" 
                class="btn btn-primary" name="login" value="Login"><br>
                </div>

                </form>

                </div>
            
            </div>
        </div>
       
    </div>
   

</body>
</html>