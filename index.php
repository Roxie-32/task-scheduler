<?php require_once 'connection.php';

if (isset($_GET['status'])) {
    $message = "Email has already been taken";
}

if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    if ($password == $rpassword) {
        //encrypt password before saving
        $hashed = sha1($password); 
        //
        //check if the email exists in the db already and return a message if it exists
        $findEmail = mysqli_query($connection, "SELECT * FROM users where email = '{$email}' ");
        if (mysqli_num_rows($findEmail) > 0) {
            header("location:index.php?status=0");
            exit;
        }
        //
        $query = "INSERT INTO users (email, username, password) 
                VALUES ('{$email}', '{$username}', '{$hashed}')";
        //adding the {} brackets inside the quotes in the above query is important because it is the standard way to put variables into strings in php
        //to avoid issues in the future always try to put it
        //Note: we are saving the hashed password instead
        $result = mysqli_query($connection, $query);
        if ($result == true) {
            header("location:login.php");
            exit; // always add this after redirecting
        }
    }
}

?>

<div class="container" style="margin: 10px;">
    <div class="row">
        <div class="col-xs-12 ">

            <ul class="nav nav-pills pull-right">
                <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>

            </ul>
        </div>

    </div>
</div><br><br>

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="well">
                <?php if (isset($message)) { ?>
                    <span class="label label-danger"><?php echo $message?></span>
                <?php } ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="">E-mail</label><br>
                        <input class="form-control" type="email" name="email"><br>
                    </div>

                    <div class="form-group">
                        <label for="">Username</label><br>
                        <input class="form-control" type="text" name="username"><br>
                    </div>

                    <div class="form-group">
                        <label for="">Password</label><br>
                        <input class="form-control" type="password" name="password"><br>
                    </div>

                    <div class="form-group">
                        <label for="">Re-type Password</label><br>
                        <input class="form-control" type="password" name="rpassword"><br>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-sm" name="signup" value="Signup"><br>
                    </div>



                </form>

            </div>

        </div>
    </div>
</div>