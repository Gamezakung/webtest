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
                    <section class="tm-content">
                        <div class="media my-3 mb-5 tm-service-media tm-service-media-img-l">
                            <img src="img/view1.jpg" width="250" height="250" alt="Image" class="tm-service-img">
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">ภาพยามตะวันใกล้จะตกดิน</h2>
                                <p>วันที่ 3 กันยายน 2565</p>
                            </div> 
                        </div>
                        <div class="media my-3 mb-5 tm-service-media">                            
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">ท้องฟ้ายามเช้า บน ดาดฟ้าร้าน</h2>
                                <p>วันที่ 5 สิงหาคม 2565</p>
                            </div> 
                            <img src="img/view2.jpg" width="250" height="250"alt="Image" class="tm-service-img-r">
                        </div>
                        <p class="tm-5">ดูรูปเพิ่มเติม  &nbsp;&nbsp;<a href="#" class="btn btn-primary" target="_blnaks"><i class='fas fa-angle-double-right' style='font-size:24px'></i></a></p>
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