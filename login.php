<!DOCTYPE html>
<html lang="en">
<script> 

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>
<style>
.modal-content {
    background-color: transparent !important;
    border: 0px !important
}

.modal-header {
    border: 0px !important
}
</style>
<?php include 'head.php';?>
<body>
    <div class="tm-container">
        <div>
        <?php include 'navbar.php'; ?>
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> <!-- Content -->
                    <section class="tm-content tm-contact">

                        <?php if (isset($_SESSION['username_login'])) {
                                    $username_login=$_SESSION["username_login"];
                                    $sql="select * from tb_user where u_uname='$username_login'";
                                    $result=mysqli_query($db,$sql);
                                    while($row=mysqli_fetch_assoc($result)){
                                        $u_uname=$row["u_uname"];
                                        $u_password=$row["u_password"];
                                        $u_fname=$row["u_fname"];
                                        $u_lname=$row["u_lname"];
                                        $u_email=$row["u_email"];
                                    }    
                                ?>
                         <h1 class="mb-4 tm-content-title">Setting Information &nbsp;<i class="fa fa-cog fa-spin" style="font-size:24px"></i></h1>
                         <h2 class="mb-4 tm-content-title">ชื้อผู้ใช้ : <?php echo $u_uname ?> </h2>
                         <h2 class="mb-4 tm-content-title">ชื้อจริง : <?php echo $u_fname?> &nbsp; <?php echo $u_lname?> </h2>
                         <h2 class="mb-4 tm-content-title">อีเมล : <?php echo $u_email ?> </h2>
                         <p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Editmodal">
                        Edit Profile
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ChangePassword">
                        Chang Password
                        </button></p>
                        <a href="logout.php" class="btn btn-primary">Logout</a>

                           <?php }else{?>     
                        <h2 class="mb-4 tm-content-title">Sign in</h2>
                        <form id="contact-form" action="login_chk.php" method="POST">
                            <div class="form-group mb-4"s>
                                <input type="text" name="u_uname" class="form-control" placeholder="ชื่อผู้ใช้" required=""/>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" name="u_password" class="form-control" placeholder="รหัสผ่าน" required="" />
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-big btn-primary">Login</button>
                            </div>
                        </form>
                        <br><br><br><br>
                        <div class="text-right">
                        <p>ถ้ายังไม่ได้สมัคสมาชิค&nbsp;&nbsp;
                                <a href="register.php"><button type="submit" class="btn btn-big btn-primary">Sign up</button></a></p>
                            </div>
                        <?php }?>  
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

    
<!-- Modal ChangePassword-->
<div class="modal fade" id="ChangePassword" tabindex="-1" aria-labelledby="ChangePassword" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form method="POST" action="password_save.php" >
      <div class="modal-header">
        <h5 class="modal-title" id="EditmodelLabel"> Change Password</h5>

      </div>
      <div class="modal-body">
                    <div class="mb-3 mt-3">
                        <label for="u_fname" class="form-label">รหัสผ่านเก่า</label>
                        <input type="text" class="form-control" id="u_passwordold" name="u_passwordold" placeholder="" required="" ><br>
                    <div class="mb-5">
                        <label for="u_lname" class="form-label">รหัสผ่านใหม่</label>
                        <input type="text" class="form-control" id="u_passwordnew" name="u_passwordnew" placeholder="" required="" >
                    </div>

                    <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Sunmit</button>
          </div>
      </div>
    </div>
      </div>

      </form>
    </div>
  </div>
</div>
  

                                       <!-- Modal profile edit-->
<div class="modal fade" id="Editmodal" tabindex="-1" aria-labelledby="Editmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form method="POST" action="Edit_save.php" >
      <div class="modal-header">
        <h5 class="modal-title" id="EditmodelLabel"> Edit Profile</h5>
       
      </div>
      <div class="modal-body">
                    <div class="mb-3 mt-3">
                        <label for="u_fname" class="form-label">ชื่อจริง</label>
                        <input type="text" class="form-control" id="u_fname" name="u_fname" placeholder="" required="" ><br>
                    <div class="mb-5">
                        <label for="u_lname" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" id="u_lname" name="u_lname" placeholder="" required="" >
                    </div>
                    <div class="mb-5">
                        <label for="u_email" class="form-label">อีเมล</label>
                        <input type="email" class="form-control" id="u_email" name="u_email" placeholder="" required="" >
                    </div>
                    <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Sunmit</button>
          </div>
      </div>
    </div>
      </div>

      </form>
    </div>
  </div>
</div>









    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>