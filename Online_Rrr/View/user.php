<?php $ico = '../Images/F_img/ico/user.ico'; ?>

<?php
session_start();
if(isset($_SESSION["email"]) and isset($_SESSION["password"])){

}else{
    echo '<script>alert("You should Sign In")</script>';
    header("location:login.php");
}

$title = 'Orders'; 

require '../model/connect.php';

if ($con === false) {
    die("connection error");
}
$CustomerID = $_SESSION["CUstomerID"];
intval($CustomerID);


$stmt = $con->prepare("SELECT * From  orders WHERE CustomerID =?");
$stmt->execute([$CustomerID]);

?>
<?php  include('LayOut/header.php');  ?>
<?php  include('LayOut/navbar.php');  ?> 

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
		


            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
				<h1 class="display-3 text-white mb-3 animated slideInDown">All Orders</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Orders</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


  
<div class="container-xl py-5 rounded mb-5">
<div>
				<h1><?php echo $_SESSION["UserName"] ?></h1>
				</div>
<?php foreach($stmt->fetchAll() as $row) : ?>
			<div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">ALL Orders</h5>
                    <h1 class="mb-5">Order Number <?php echo $row['OrderID'];?></h1>
                </div>
			</div>
			<div class="bg-dark text-light rounded p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4">
                        <h1 class="display-4 fs-4 text-light mb-0">Order Number <?php echo $row['OrderID'];?> </h1>
						
                    </div>
					<div class="col-lg-4">
                        <h1 class="display-4  fs-4 text-light mb-0">
	
						<?php
			$stmt1 = $con->prepare("SELECT * From  ordersitem WHERE OrderID =?");
			$stmt1->execute([$row['OrderID']]);

					foreach($stmt1->fetchAll() as $row1){



							$stmt2 = $con->prepare("SELECT * From  item WHERE ItemID  =?");
							$stmt2->execute([$row1['ItemID']]);
							foreach($stmt2->fetchAll() as $row2){

								echo $row2['Name'];
								echo " ... ";
								echo $row2['Size'];
								
								
							}
							echo "<br/>";
					}
			?>

						</h1>
                    </div>





                    <div class="col-lg-4 text-lg-end">
                        <div class="d-inline-flex align-items-center text-start">
                            <div class="ms-4">
                                <p class="fs-4 fw-bold mb-0">
								<?php
			$stmt1 = $con->prepare("SELECT * From  ordersitem WHERE OrderID =?");
			$stmt1->execute([$row['OrderID']]);

					foreach($stmt1->fetchAll() as $row1){



							$stmt2 = $con->prepare("SELECT * From  item WHERE ItemID  =?");
							$stmt2->execute([$row1['ItemID']]);
							foreach($stmt2->fetchAll() as $row2){
								echo $row2['Price'];
								
							}
							echo "<br/>";
					}
			?>


								</p>
                                <p class="fs-4 fw-bold mb-0">Total Price : <?php echo $row['TotalPrice'];?>EGP </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			<?php endforeach ;?>
            <a class="btn btn-primary py-3 px-5 mt-2" style="float: right;border-radius: 30px;" href="menu.php">New Order</a>
</div>
<?php  include('LayOut/footer.php');  ?> 
