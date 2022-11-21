
<?php 
    include("conn.php");
    session_start(); 
?>



<div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <img src="img/icon.png" width="150px" height="150px" alt="...">
                        <div class="media-body">
                            <br> &nbsp;
                            <h1 class="tm-sitename text-uppercase">&nbsp; Rooftop ChangRai</h1>
                            <p class="tm-slogon">Minimal cafe in town, on the 4th floor of Oji BubbleTea</p>
                        </div>        
                    </div>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" 
                            data-toggle="collapse" data-target="#navbar-nav" 
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="product.php">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="gallery.php">Gallery</a>
                                </li>                            
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="contact.php">Contact</a>
                                </li>
                                <?php 
                                

                                if (isset($_SESSION['username_login'])) {
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
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="login.php"><?php echo $u_uname ?></a>
                                </li>
                                <?php }else{ ?>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="login.php">Sign in</a>
                                </li>
                                <?php } ?>
                            </ul>                            
                        </div>  
                        
                

                    </nav>

                </div>
            </div>
            