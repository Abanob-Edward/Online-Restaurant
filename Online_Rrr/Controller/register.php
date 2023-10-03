    <?php
    require '../model/connect.php';

//echo "success";
if(isset($_POST['submit']))
{
    $name   =   filter_var($_POST['name'], FILTER_SANITIZE_STRING );
    $email  =   filter_var($_POST['email'], FILTER_SANITIZE_EMAIL );
    $address  =   filter_var($_POST['address'], FILTER_SANITIZE_EMAIL );
    $phone_num =   filter_var($_POST['Phone'], FILTER_SANITIZE_STRING );
    $password = password_hash(filter_var($_POST['password'], FILTER_SANITIZE_STRING), PASSWORD_DEFAULT );
        
    $sql = "INSERT INTO user (name,email,Address,password,Phone) VALUES (?,?,?,?,?) ";
 
    $stmt = $con->prepare($sql);
    
    $stmt->execute([$name,$email,$address,$password,$phone_num]);

    header("location:../view/Login.php");

   
    $_SESSION['success'] = "Data Inserted";


}

?>