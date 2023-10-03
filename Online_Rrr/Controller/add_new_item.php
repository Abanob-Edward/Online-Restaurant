<?php

require '../model/connect.php';
if ($con === false) {
    die("connection error");
}
if(isset($_POST['submit_Category']))

{

    $CategoryName   =   filter_var($_POST['CategoryName'], FILTER_SANITIZE_STRING );
    $sql = "INSERT INTO category (Name) VALUES (?) ";
    $stmt = $con->prepare($sql);
    $stmt->execute([$CategoryName]);
   
    header("location:../view/_admin.php");
}
if(isset($_POST['submit_item']))

{
    // change the varible here

    $name   =  filter_var($_POST['itemName'], FILTER_SANITIZE_STRING );

    $size   =  filter_var($_POST['itemSize'], FILTER_SANITIZE_STRING );

    $filename = $_FILES['ItemImg1']["name"];

    $tempname = $_FILES['ItemImg1']["tmp_name"];

    $folder = "../Images/" . $filename;

   // $IMg    =  filter_var($_POST['ItemImg'], FILTER_SANITIZE_STRING );

    $Price  =  filter_var($_POST['ItemPrice'], FILTER_SANITIZE_STRING );

    $CategoryID  =  filter_var($_POST['categore_id'], FILTER_SANITIZE_STRING );

   

    //echo $name ,$size,$filename ,$tempname,$Price,$CategoryID ;

   

    if (move_uploaded_file($tempname, $folder)) {

        $sql = "INSERT INTO item (Name,Size,Image,Price,CategoryID) VALUES (?,?,?,?,?) ";

        $stmt = $con->prepare($sql);

        $stmt->execute([$name,$size,$filename,$Price,$CategoryID]);

       
    header("location:../view/_admin.php");

    } else {

        echo "<h3> Failed to upload image!</h3>";

    }

}

if(isset($_POST['additems']))
{
    $CUstomerID   =  filter_var($_POST['CastId'], FILTER_SANITIZE_STRING );
    intval($CUstomerID);
    $checkbox1=$_POST['itemID'];  
   //get all price form selected item by itemid and  sum 
   $total_Order_Price = 0 ;
   
        try {
            $total_Order_Price ;
            foreach($checkbox1 as $chk0)  
            {  
                $stmt2 = $con->prepare("SELECT Price FROM item WHERE ItemID =?"); 
                 $stmt2->execute([$chk0]);
                 $price =  $stmt2->fetchobject();
                 $total_Order_Price += $price->Price;
            }
    
            $sql = "INSERT INTO orders (CustomerID,TotalPrice) VALUES (?,?) ";
            $stmt = $con->prepare($sql); 
            $stmt->execute([$CUstomerID,$total_Order_Price]);
            //  ordersitem هجيب رقم الاوردر عشان اضيفه ف
            $OrderID = $con->lastInsertId();
               foreach($checkbox1 as $chk1)  
               {  
                
                   $q = "INSERT INTO ordersitem (OrderID,ItemID) VALUES (?,?) ";
                   $stm = $con->prepare($q); 
                   $stm->execute([$OrderID ,$chk1]);
               } 

                 echo "Order Success";

               header("location:../view/user.php");
    
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
       

   }
