<?php
$user = $_POST['username'];
$pass = $_POST['password'];
if($user == 'admin' && $pass == 'admin'){
    echo 'success';
    // redirect to home page
    header("Location: /home.html");
}else{
    // alert message
    echo "<script>alert('Invalid Username or Password')</script>";
    header("Location: /login.html");

}
?>