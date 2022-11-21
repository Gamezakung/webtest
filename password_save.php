<?php
   session_start();
   include("conn.php");
   include("head.php");
   $username_login=$_SESSION["username_login"];
   $u_passwordold=$_POST["u_passwordold"];
   $u_passwordnew=$_POST["u_passwordnew"];
 
   $sql="select * from tb_user where u_uname='$username_login' and u_password='$u_passwordold'";
   $result=mysqli_query($db,$sql);
   $row=mysqli_fetch_assoc($result);
   @$pass=$row["u_password"];
   if($u_passwordold==$pass){
      $sql="update tb_user set u_password='$u_passwordnew' where u_uname='$username_login'";
      $result=mysqli_query($db,$sql);  
      if(!$result){
         //echo " การแก้ไขข้อมูล ผิดพลาด ";
         echo "<meta http-equiv='refresh' content='0;url=index.php'>";
      } else {
   ?>
   <style>
body {
   background-image: url("img/bg.jpg");
   height: 100%;
   background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body>
<div class="container p-5 my-5 border">
  <h1>Password is Changed now <div class="spinner-border"></div></h1>
  <p>รหัสผ่านได้ทำการเปรียนแล้ว รอสักครู่ เพิ่อกลับหน้าหลัก </p>
</div>
</body>
<?php 

   echo "<meta http-equiv='refresh' content='3;url=index.php'>";
      }  
   } else {
      ?>
   <style>
body {
   background-image: url("img/bg.jpg");
   height: 100%;
   background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body>
<div class="container p-5 my-5 border">
  <h1>Password is Cannot Changed <div class="spinner-border"></div></h1>
  <p>รหัสผ่านเดิมไม่ถูกต้อง กรุณาตรวจสอบอีกครั้ง  </p>
</div>
</body>
<?php 
      echo "<meta http-equiv='refresh' content='3;url=index.php'>";
   }
   ?>