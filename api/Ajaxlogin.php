<?php
include_once '../config.php';
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
$stmt = $dbh->prepare("SELECT * FROM users WHERE username = :user AND password = :pass");
$stmt->bindParam(':user', $user);
$stmt->bindParam(':pass', $pass);
$stmt->execute();
$result = $stmt->fetch();
if($result){
    // alert message
    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://pushmore.io/webhook/rW4swyfARYCm4WbGPdjxD5Ns',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>"$user login success",
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/plain'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
    echo 'success';
    exit;
} else {
    // alert message
    echo 'fail';
    exit;
}

?>