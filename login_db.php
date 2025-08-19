<?php 
    session_start();
    include('server.php');

    $errors = array();
if (isset($_POST['Login_user'])){
    $username = mysqli_real_escape_string($com, $_POST['username']);
    $password = mysqli_real_escape_string($com, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "username is required");
    }

    if (empty($password)) {
        array_push($errors, "password is required");
    }

    if (cont($errors) == 0 ) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['succes'] = "You are now logged in";
            header("location: index.php");
        }else {
            array_push($errors, "Wrong username/password combination");
            $_SESSION['error'] = "Wrong username or password try again!";
            header("location: login.php");
        }
    }
}
?>