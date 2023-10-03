<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Fast Order</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="menu.php" class="nav-item nav-link">Menu</a>
                        <a href="User.php" class="nav-item nav-link">Orders</a>

                       <!--  <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.html" class="dropdown-item">Booking</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                
                            </div>
                        </div> -->
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <?php if(!isset($_SESSION['email'])): ?> 
                    <a href="login.php" class="nav-item nav-link p-2"><i class="fas fa-sign-in-alt" tabindex="0" data-toggle="tooltip" title="Login" style="font-size:25px"></i></a>
                    <a href="register.php" class="nav-item nav-link p-2"><i class="fas fa-user-plus" tabindex="0" data-toggle="tooltip" title="Registration" style="font-size:25px"></i></a>
                    <?php else: ?>
                    <a href="../Controller/logout.php" class="nav-item nav-link p-2"><i class="fas fa-sign-out-alt" tabindex="0" data-toggle="tooltip" title="Log Out" style="font-size:25px"></i></a>           
                    <?php endif; ?>
                </div>
            </nav>

            
        <!-- Navbar & Hero End -->


        <!-- Navbar End -->