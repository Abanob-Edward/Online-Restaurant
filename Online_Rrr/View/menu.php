<?php
session_start();
$ico = '../Images/F_img/ico/menu.ico';

if(isset($_SESSION["email"]) and isset($_SESSION["password"])){
    echo '<script>alert("You can make an Order")</script>';
}else{
    echo '<script>alert("You should Sign In")</script>';
    header("location:login.php");

}
?>
<?php $title = 'menu'; ?>
<?php  include('LayOut/header.php'); 
include '../model/connect.php'; ?> 
<body>

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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->







<?php
$stmt = $con->prepare("SELECT * From category");
$stmt->execute();
?>


<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
			</div>
			
			<div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
						<?php foreach($stmt->fetchAll() as $row) : ?>
						<?php 
						
							$stmt1 = $con->prepare("SELECT * FROM item WHERE CategoryID =?");
							$stmt1->execute([$row['CategoryID']]);	?>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3"  href="#<?php echo $row['Name']?>">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    
                                    <h6 class="mt-n1 mb-0"><?php echo $row['Name']?></h6>
                                </div>
                            </a>
                        </li>
						<?php endforeach ;?>
                    </ul>
					</div>


</div>


<?php
$stmt = $con->prepare("SELECT * From category");
$stmt->execute();
?>
<?php foreach($stmt->fetchAll() as $row) : ?>
  <?php 
  
	$stmt1 = $con->prepare("SELECT * FROM item WHERE CategoryID =?");
	$stmt1->execute([$row['CategoryID']]);	?>






        <!-- Menu Start -->
        <form action="../Controller/add_new_item.php" method="post" enctype="multipart/form-data"> 
            <div class="container-xxl py-5" id="<?php echo $row['Name']?>">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                        <h1 class="mb-5">Most Popular Items</h1>
                    </div>
                    <div class="tab-class text-center wow fadeInUp"  data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#<?php echo $row['Name']?>">
                                    <i class="fa fa-utensils fa-2x text-primary"></i>
                                    <div class="ps-3">
                                    <button type="button"   class="btn_category" onclick="HideDiv('<?php echo $row['Name']?>')" >
                                    <h4 class="mt-n1 mb-0"><?php echo $row['Name']?></h4>
                                    </button>
                                        
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="content" id="_<?php echo $row['Name']?>">
                            <div class="tab-content ">
                                <div id="<?php echo $row['Name']?>" class="tab-pane fade show p-0 active">
                                    <div class="row g-4">
                                    <?php foreach($stmt1->fetchAll() as $row1) : ?>
                                        <div class="col-lg-6">
                                        
                                            <div class="d-flex align-items-center">

                                                <img class="img-fluid flex-shrink-0 rounded-circle" src="../Images/<?php echo $row1['Image']?>" alt="" style="width: 100px; height:100px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><input type="checkbox" name="itemID[]" value="<?php echo $row1['ItemID']?>"> </span>
                                                    <input type="hidden" id="CastId" name="CastId" value="<?php echo $_SESSION["CUstomerID"] ?>">
                                                
                                                        <span><?php echo $row1['Name']?></span>
                                                        <span><?php echo $row1['Size']?></span>
                                                        
                                                        <span class="text-primary"><?php echo $row1['Price']?>EGP</span>
                                                    </h5>
                                                    <small class=""><span>Name:</span><span><?php echo $row1['Name']?></span><span> || </span> <span>Size:</span> <span><?php echo $row1['Size']?></span></small>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    <?php endforeach ;?>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- Menu End -->
            <?php endforeach ;?>
            <div class="d-flex justify-content-center">

            <input type="submit"  class="btn_ORder fas" value="Order &#xf07a;" name="additems">
                </div>
        </form> 
                             
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php  include('LayOut/footer.php');  ?> 

<script>
function HideDiv(id_){
    var x = document.getElementById("_"+id_);
    var y = document.getElementById("C"+id_);

    if (x.style.display === "none") {
    x.style.display = "block";
    } else {
     x.style.display = "none";
     }

}
</script>
<!-- <a  class="btn btn-warning" href="../controller/logout.php">Logout</a> -->
