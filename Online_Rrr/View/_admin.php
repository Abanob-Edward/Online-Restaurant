<?php
session_start();
$ico = '../Images/F_img/ico/admin.ico';
include '../model/connect.php';

if(!isset($_SESSION["email"]) or !isset($_SESSION["password"]))
{
	header("location:login.php");
}elseif(isset($_SESSION["email"]) and isset($_SESSION["password"]))
{
	if($_SESSION["role"] == 'user'){
		
		header("location:login.php");
	}elseif($_SESSION["role"] == 'admin'){
		echo '<script>alert("You are admin")</script>';

	}
}
?>

<?php $title = 'Admin'; ?>
<?php  include('LayOut/header.php');  ?> 
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">ADD +</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Admin</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


<!-- Contact Start -->
<div class="container-fluid py-5  ">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Add new Category</h1>
            <div class="row align-items-center">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-secondary mb-4 p-5 rounded " >

                          <form action="../Controller/add_new_item.php" method="POST" >
                        
                                <div class="form-group p-2 rounded   ">
                                    <input type="text" class="form-control " name="CategoryName" placeholder="Category Name">
                                    
                                        <small  class="form-text  text-light">You must add the type of food carefully</small>
                                </div>
                                

                                <div class="form-group p-2 center">
                                    <input type="submit" name="submit_Category" class="btn btn-block btn-primary form-group-lg "  value="Add New Category">
                                </div>
                        
                            </form>
                           </div>
                </div>
                <div class="col-lg-5 mb-2 ">
                    <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4 rounded-circle " style="height: 435px;">
                        <img src="../images/F_img/3.jpg" alt="" style="height: 200px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->





<!-- Contact Start -->
<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase text-center mb-5">Add new Item</h1>
            <div class="row align-items-center">
                <div class="col-lg-7 mb-2 ">
                    <div class="contact-form bg-secondary mb-4 p-5 rounded " >
                        
                   
               
                    <form action="../Controller/add_new_item.php" method="POST"enctype="multipart/form-data">
                        <div class="form-group p-2 rounded">
                            <input type="text" class="form-control" name="itemName" placeholder="Item Name">
                        </div>
						<div class="form-group p-2 rounded">
                            <input type="text" class="form-control" name="itemSize" placeholder="Item Size">
                        </div>
						<div class="form-group p-2 rounded">
						<input type="file" class="form-control" name="ItemImg1" >
                        </div>
						<div class="form-group p-2 rounded">
                            <input type="text" class="form-control" name="ItemPrice" placeholder="Item Price">
                        </div>
						<div class="form-group p-2 rounded">
						<?php

                           

                            $stmt = $con->prepare("SELECT * From category");

                            $stmt->execute();

                            ?>

                            <select name="categore_id" class="form-control"  >

                           			 <!-- <option>Select Cetigory<option> -->

                                <?php foreach($stmt->fetchAll() as $row): ?>

                                        <option value="<?php echo $row['CategoryID']?>" > <?php echo $row['Name']?> </option>

                                <?php endforeach; ?>

                            </select>	

                        </div>
						<div class="form-group p-2 rounded">
                            <input type="submit" name="submit_item" class="btn btn-block btn-primary"  value="Add New Category">
                        </div>
					</form>
				
			</div>	

                    
                </div>
                <div class="col-lg-5 mb-2">
                    <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4 rounded-circle" style="height: 435px;">
                        <img src="../images/F_img/1.webp" alt=""style="height: 200px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


	

<a class="btn btn-warning" href="../controller/logout.php">Logout</a>
<?php  include('LayOut/footer.php');  ?> 
</body>
</html>