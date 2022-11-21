<!DOCTYPE html>
<html lang="en">


<?php include 'head.php';?>
<body>
    <div class="tm-container">
        <div>
        <?php include 'navbar.php'; ?>
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> <!-- Content -->
                    <section class="tm-content tm-contact">
                        <h2 class="mb-4 tm-content-title">Sign up</h2>
                        <form id="contact-form" action="register_save.php" method="POST">
                            <div class="form-group mb-4"s>
                                <input type="text" name="u_uname" class="form-control" placeholder="ชื่อผู้ใช้" required=""/>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" name="u_password" class="form-control" placeholder="รหัสผ่าน" required="" />
                            </div>
                            <div class="form-group mb-4">
                            <input type="text" name="u_fname" class="form-control" placeholder="ชื่อจริง" required=""/>
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="u_lname" class="form-control" placeholder="นามสกุล" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="u_email" class="form-control" placeholder="อีเมล" required="" />
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-big btn-primary">Register</button>
                            </div>
                        </form> 
                    </section>
                </main>
            </div>
        </div>        

        <div class="tm-row">
            <div class="tm-col-left text-center">            
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>            
            </div>        
  <?php 
  include("footer.php");
  ?>

        <div class="tm-bg"> <!-- Diagonal background design -->
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>