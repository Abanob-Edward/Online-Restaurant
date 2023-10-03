<?php
require '../model/connect.php';

if ($con === false) {
    die("connection error");
}
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

// echo $email ;
// echo "<br/>";
// echo $password ;
// echo "<br/>";
$sql = "SELECT * FROM user WHERE Email=? ";
$stmt = $con->prepare($sql);
$stmt->execute([$email]);

$data =$stmt->fetchobject();
$check_password = password_verify($password,$data->Password);
  //  var_dump($data);
    if (isset($data) and $check_password === true) {
        if($data->user_Role == "user"){
            // echo "is user";
            $_SESSION["email"] = $email;
            $_SESSION["CUstomerID"] = strval($data->ID);
            $_SESSION["UserName"] = strval($data->Name);
            $_SESSION["password"] = $password;
            $_SESSION["role"] = 'user';
            header("location:../view/index.php");
        }elseif($data->user_Role == "admin"){
          //  echo "is admin";
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            $_SESSION["role"] = 'admin';
            header("location:../view/_admin.php");
        }
        
      }else{
        echo '<script>alert("Email OR Password Incorrecr")</script>';
        header("location:../view/Login.php");

       // echo "Email OR Password Incorrecr ^_^";
      }
   
}
?>