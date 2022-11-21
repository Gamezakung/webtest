<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';?>
<body>
    <div class="tm-container">        
        <div>
        <?php include 'navbar.php'; ?>
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right">
                    <section class="tm-content tm-about">
                        <h1 class="mb-5 tm-content-title">Product</h1>
                        <p>เครื่องดื่มทางร้างมีให้เลือกสันเยอะ และ มีอาหารให้ทานคู่ด้วย </p>
                        <hr class="mb-4">
                        <div class="media my-3">
                        <img src="img/menu1.jpg" width="250" height="200" alt="Image" class="tm-service-img">
                            <div class="media-body">
                                <p>ผัดกระเพรา เมนูยอดหิตของคนไทย ราคา 45  บาท</p>
                            </div> 
                        </div>
                        <div class="media my-3">
                        <img src="img/menu2.jpg" width="250" height="200" alt="Image" class="tm-service-img">
                            <div class="media-body">
                                <p>สลัดแซลม่อน มูนูเคลไม่สูงกินได้เยอะ ราคา 80 บาท</p>
                            </div> 
                        </div>
                        <div class="media my-3">
                        <img src="img/menu3.jpg" width="250" height="200" alt="Image" class="tm-service-img">
                            <div class="media-body">
                                <p>พาสต้าทำมือ ราคา 120 บาท</p>
                            </div> 
                        </div>
                        <div class="media my-3">
                            <div class="media-body">
                            <p class="tm-5">ดูเมนูอื่นเพิ่มเติม &nbsp;&nbsp;<a href="#" class="btn btn-primary" target="_blnaks"><i class='fas fa-angle-double-right' style='font-size:24px'></i></a></p>
                            </div> 
                        </div>                        
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

        <!-- Diagonal background design -->
        <div class="tm-bg">
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