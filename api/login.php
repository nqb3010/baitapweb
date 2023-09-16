<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
if($user == 'admin' && $pass == 'admin'){
    echo 'success';
}else{
    echo 'error';
}
?>