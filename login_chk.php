<?php
  session_start(); 


  error_reporting(0);

  include("conn.php");
  include("head.php");
  
  $u_uname=$_POST["u_uname"];
  $u_password=$_POST["u_password"];


  $sql="select * from tb_user where u_uname='$u_uname'";
  $result=mysqli_query($db,$sql);
  while($row=mysqli_fetch_array($result)){
    $u_uname2=$row["u_uname"];
    $u_password2=$row["u_password"];
    $u_permission=$row["u_permission"];

}
if($u_uname==$u_uname2 and $u_password==$u_password2 and $u_permission=='0'){
  $_SESSION["username_login"]=$u_uname2;
  echo "<hr><h1> รหัสผ่านถูกต้อง </h1>";
  echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}elseif ($u_uname==$u_uname2 and $u_password==$u_password2 and $u_permission=='1') {
  $_SESSION["admin_login"]=$u_name2; 

  ?>

<style>
@import url(//fonts.googleapis.com/css?family=Lato:300:400);

body {
  margin:0px;
  padding: 0px;
}

h1 {
  font-family: 'Lato', sans-serif;
  font-weight:300;
  letter-spacing: 2px;
  font-size:48px;
}
p {
  font-family: 'Lato', sans-serif;
  letter-spacing: 1px;
  font-size:14px;
  color: #333333;
}

.header {
  position:relative;
  text-align:center;
  background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
  color:white;
}
.logo {
  width:50px;
  fill:white;
  padding-right:15px;
  display:inline-block;
  vertical-align: middle;
}

.inner-header {
  height:65vh;
  width:100%;
  margin: 0;
  padding: 0;
}

.flex { /*Flexbox for containers*/
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.waves {
  position:relative;
  width: 100%;
  height:15vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}

.content {
  position:relative;
  height:20vh;
  text-align:center;
  background-color: white;
}

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;
  }
  .content {
    height:30vh;
  }
  h1 {
    font-size:24px;
  }
}




</style>



  <!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header">

<!--Content before waves-->
<div class="inner-header flex">
<!--Just the logo.. Don't mind this-->
<svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
<path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />

</svg>
<h1>Welcome Back <?php echo $u_uname ?></h1>

</div>

<!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>
</div>
</div>
<div class="content flex">
 
</div>
<meta http-equiv='refresh' content='3;url=backend\index.php'>
  <?php 
}else {
  echo "<hr><h1> รหัสผ่านไม่ถูกต้อง </h1>";
  echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
  
?>