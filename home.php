<?php
if(!isset($_SESSION['user'])){
    header('Location: index.php');
    echo "Bạn chưa đăng nhập";
    exit;
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
    
</body>
</html>