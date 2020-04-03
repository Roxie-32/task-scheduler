<?php 
session_start();
require_once 'connection.php';


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed = sha1($password);

    $query = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$hashed}' ";
    $result = mysqli_query($connection, $query);
    if ($result == true) {
        while ($row = mysqli_fetch_array($result)) {

            $_SESSION['id'] = $row['id'];

            header("location:dashboard.php");
        }
    } else {
        echo "Username or password not Correct";
    }
}

?>

<div class="container" style="margin: 10px;">
    <div class="row">
        <div class="col-xs-12">
            <ul class="nav nav-pills pull-right">
                <li><a href="index.php"> <span class="fa fa-user"></span>Sign Up</a></li>
                <li class="active"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>

    </div>
</div>
<br><br>

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3 ">
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
                    <div>
                        <input type="submit" class="btn btn-primary" name="login" value="Login"><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once("footer.php");
