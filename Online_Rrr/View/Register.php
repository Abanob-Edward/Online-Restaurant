

<?php $title = 'Register';
$ico = '../Images/F_img/ico/register.ico';
 ?>
<?php  include('LayOut/header.php');  ?> 
<link href="../Content/css/log_reg.css" rel="stylesheet">
<body>

<?php  include('LayOut/navbar.php');  ?> 

<div class="container-xxl  p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->



            <div class="container-xxl py-5  hero-header mb-5">
                
        </div>
        

<section class="form-02-main ">
        <div class="container">
            <div class="row ">
            <div class="col-12 ">
              
                <?php if(isset($_SESSION['success'])): ?> 
                <?php  endif; ?>
            </div>
            <!-- 
                $q = "INSERT INTO `customar` (`NAME`,`email`,`Address`,`PASSWORD`,`phone_num`) VALUES 
             -->  
                <div class="col-md-12 ">
                    <div class="_lk_de">
                        <div class="form-03-main">
                                        <!-- <div class="logo wow bounceInDown " data-wow-delay="0.6s">
                                            <img src="~/img/Log_reg/login.gif" />
                                        </div> -->
                                      <form action="../Controller/register.php" method="POST">
                                        <div class="form-group p-10  wow bounceInLeft " data-wow-delay="0.1s">
                                        <input type="text" class="form-control fa" name="name" placeholder="&#xf007; Your Name ">
                                        </div>

                                        <div class="form-group p-10 wow bounceInRight " data-wow-delay="0.2s">
                                        
                                            <input type="text" class="form-control fa" name="email" placeholder="&#xf0e0; Your Email">
                                        </div>
                                        <div class="form-group  wow bounceInRight " data-wow-delay="0.2s">
                                        
                                            <input type="text" class="form-control fas" name="address" placeholder="&#xf2c1; Your Address">
                                        </div>

                                        <div class="form-group wow bounceInRight " data-wow-delay="0.2s">
                                        
                                            <input type="text" class="form-control fa" name="phone_num" placeholder="&#xf095; Your Mobile">
                                        </div>
                                        <div class="form-group  wow bounceInRight " data-wow-delay="0.2s">
                                        
                                            <input type="password" class="form-control fas" name="password" placeholder="&#xf084; Your Password">
                                        </div>

                                        <div class="checkbox form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="">
                                                <label class="form-check-label text-light" for="">
                                                Remember me
                                                </label>
                                            </div>
                                           
                                        </div>


                                        <div class="form-group p-0 wow wobble " data-wow-delay="0.6s">
                                            <div class="_btn_04 ">
                                          
                                                <input type="submit" name="submit" value="Sign up" class="btn_log" />
                                            </div>
                                        </div>
                                    

                                        <div class="form-group text-light nm_lk wow lightSpeedIn " data-wow-delay="0.6s"><p>Or Login With</p></div>

                                        <div class="form-group p-0">
                                            <div class="_social_04 p-0">
                                                <ol>
                                                    <li class="wow hinge " data-wow-delay="0.1s"><i class="fab fa-facebook " ></i></li>
                                                    <li class="wow hinge " data-wow-delay="0.2s"><i class="fab fa-twitter "></i></li>
                                                    <li class="wow hinge " data-wow-delay="0.3s"><i class="fab fa-google"></i></li>
                                                   
                                                </ol>
                                            </div>
                                        </div>
                            </form>
                        </div>
                    </div>               
                </div>
            </div>
        </div>


    </section>


            

<?php  include('LayOut/footer.php');  ?> 