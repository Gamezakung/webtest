<html>
<?php
  include("conn.php");
  include("head.php");
        $u_uname=$_POST["u_uname"];
        $u_password=$_POST["u_password"];
        $u_email=$_POST["u_email"];
        $u_fname=$_POST["u_fname"];
        $u_lname=$_POST["u_lname"];
        $u_permission = 0 ;
     
        $sql="INSERT INTO tb_user VALUES('','$u_uname','$u_password','$u_fname','$u_lname','$u_email','$u_permission')";
        $result=mysqli_query($db,$sql);
        if(!$result){
?>
<style>
body {
   background-image: url("img/bg2.jpg");
   height: 100%;
   background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body>
<div class="container p-5 my-5 border">
  <h1>Register not Success<div class="spinner-border"></div></h1>
  <p>สมัคสมาชิกไม่สำเร็จ กรุณารอสักครู่ </p>
</div>
<meta http-equiv='refresh' content='3;url=index.php'>
</body>




  <?php  }else{ ?>

    <style>
body {
   background-image: url("img/bg2.jpg");
   height: 100%;
   background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body>
<div class="container p-5 my-5 border">
  <h1>Register Success<div class="spinner-border"></div></h1>
  <p>สมัคสมาชิกเสร็จสิ้น กรุณารอสักครู่ </p>
</div>
<meta http-equiv='refresh' content='3;url=index.php'>
</body>




    <?php  }?>

</html>
