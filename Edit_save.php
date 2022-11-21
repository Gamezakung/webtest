<?php
   session_start();
   include("conn.php");
  $username_login=$_SESSION["username_login"];
  $u_fname=$_POST["u_fname"];
  $u_lname=$_POST["u_lname"];
  $u_email=$_POST["u_email"];

  $sql="update tb_user set u_fname='$u_fname',u_lname='$u_lname',u_email='$u_email' where u_uname='$username_login'";
  $result=mysqli_query($db,$sql);
  
if(!$result){
    //echo " การแก้ไขข้อมูล ผิดพลาด ";
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";

} else {
   //echo " การแก้ไขข้อมูล เรียบร้อยแล้ว";
   echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
?>