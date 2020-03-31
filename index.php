<?php require_once 'connection.php'; 

if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
     if($password == $rpassword){
       
            $query = "INSERT INTO users (email, username, password) 
                VALUES ('$email', '$username', '$password')";
            $result = mysqli_query($connection,$query);
        if ($result == true){
            header("location:login.php");
        }
        
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
                    <div class="col-xs-12 ">
                        
                            <ul class="nav nav-pills pull-right">
                                <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                                <li><a href="login.php" ><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                                
                            </ul>
                    </div>

                </div><br><br>
        
    <div class="container"> 
        <div class="row">
        <div class="col-xs-3 col-xs-offset-4">
                <div class="well">
                <form action="" method="POST">
            <div class="form-group">
                <label for="">E-mail</label><br>
                <input  class="form-control" type="email" name="email"><br>
            </div>
            
            <div class="form-group">
                <label for="">Username</label><br>
                <input  class="form-control" type="text" name="username"><br>
            </div>
            
            <div class="form-group">
                <label for="">Password</label><br>
                <input  class="form-control" type="password" name="password"><br>
            </div>

            <div class="form-group">
                <label for="">Re-type Password</label><br>
                <input class="form-control" type="password" name="rpassword"><br>
            </div>
           
          <div class="form-group">
            <input type="submit" 
            class="btn btn-primary btn-sm" name="signup" value="Signup"><br>
          </div>

            
              
        </form>

                </div>
            
            </div>
        </div>  
    </div>
</body>
</html>