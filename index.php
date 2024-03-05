<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nal's Nails</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Paytone+One&family=Rowdies:wght@700&family=Rubik+Mono+One&family=Secular+One&display=swap" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--NAVBAR-->
    <?php
    include("header.html");
    ?>
<!-- FIRST CONTAINER EVER -->
    <div class="container-fluid box" style="background-color: #DC30A0;">
        <div class="row">
            <div class="col-lg-10 mx-auto bgsection pinktxt pt-2 box">
                <div class="col mx-auto box2">
                <h1 class="pt-5 pb-5 d-flex justify-content-center pinkh">
                    Hey Girl, Hey!
                </h1>
            </div>
            <div class="container-fluid">
                <div class="row">
                        <div class="col-lg-5 col-sm-12 d-flex justify-content-lg-end justify-content-sm-center box3">
                            <img src="nail4.jpg" class="img-fluid rounded head-image" alt="Manicure">
                        </div>
                        <div class="col-lg-5 col-sm-12 mb-5 mt-5 align-items-center d-flex justify-content-lg-center justify-content-sm-center blab1 box3">
                            Nal's Nails is equipped with state-of-the-art nail detail work that provide precise and efficient manicure services. Simply choose your desired nail shape, polish color, and sit back as the machine trims, files, and polishes your nails to perfection. With Nal's Nails, you can enjoy a quick and convenient manicure experience coming from a dedicated nail technician.                        </div>
                    
                </div><!-- END OF ROW -->
            </div><!-- END OF CONTAINER FLUID -->
            </div> <!-- END OF MASSIVE COLUMN -->
        </div>
    </div> 
    <!-- END OF MASSIVE CONTAINER -->
    <div class="container-fluid position-relative jumbotron jumbodrip box">
        <div class="row">
            <!-- The Bigger 2nd div of the page; setting entire position context to relative so that nested div's are absolute-->
            <div class="col-lg-10 mx-auto box" style="height: 750px;"> <!-- first massive column; where jumbotron was -->
                <!-- Nesting 2 div's in here -->
                <!-- First nested div -->
                <div class="col d-flex box2 align-items-center justify-content-center my" style="height: 250px;">
                    <button type="button" class="bookbutton btn-lg" onclick="location = 'booking.php'">BOOK APPOINTMENT</button>
                </div>
                <!--Second nested div - what if i deleted this filler section/column? 
                <div class="col box2" style="height: 300px;">

                </div> -->
                <!-- <div class="col box2 position-absolute d-flex align-content-center justify-content-center" style="height: 300px;" id="absolutely">
                    hi i'm underlay
                </div> -->
                <div class="col box2" id="nailsdye">
                    <div class="container-fluid box4">
                        <div class="row row-cols-1 d-flex align-content-center justify-content-center">
                            <div class="col d-flex align-content-center justify-content-center">
                                <h2>nails to dye for</h2>
                            </div>
                            <div class="col box2">
                                <!-- <div class="col-8 mx-auto box2"> -->
                                    <!-- carousel -->
                                        <div class="carousel">
                                            <div id="slideBuffer">
                                                <img src="http://104.131.105.180/storage/app/media/carousel/carousel_foreground/earth/1.jpg"/>
                                            </div>
                                            <input type="radio" name="nav" value="1"  id="slide1" checked>
                                            <label for="slide1"></label>
                                            <div class="slide">
                                                <img src="nail1-3.jpg" style="border-radius: 35px;"/>
                                            </div>

                                            <input type="radio" name="nav" value="2" id="slide2">
                                            <label for="slide2"></label>
                                            <div class="slide">
                                                <img src="nail5.jpg" style="border-radius: 35px;"/>
                                            </div>

                                            <input type="radio" name="nav" value="3" id="slide3">
                                            <label for="slide3"></label>
                                            <div class="slide">
                                                <img src="nail6.jpg" style="border-radius: 35px;"/>

                                            </div>

                                        </div>
                                        <!-- end of carousel -->
                                <!-- </div> -->
                                <div class="col-4 mx-auto text-center d-flex align-content-center justify-content-center box2">
                                    Nal's Nails offer a wide range of pretty manicure designs that will enhance the beauty of your nails. From elegant ombre gradients to intricate lace patterns, I can create stunning manicure designs that are sure to turn heads. 
                                </div>
                            </div>
                           <!-- <div class="col-4  text-center d-flex align-content-center justify-content-center box2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </div> 
    </div> <!-- end of 2nd container-->
<!--start of 3rd container 
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto pinktxt box" style="height: 600px;">
            dkjfbjkbdkfjb
        </div>  END OF MASSIVE COLUMN 
    </div>
</div> 
END OF MASSIVE CONTAINER -->
<div class="container-fluid" id="getnaild" style="height: 500px;">
    <div class="row row-cols-1">
        <div class="col-lg-10 mx-auto pinktxt box">
            <div class="col mx-auto">
            <h1 class="d-flex justify-content-center pt-5 pinkh magentatxt">
                Get Nail'd
            </h1>
            <h3 class="d-flex justify-content-center h3size whitetext">Nail Shapes We Offer</h3>
        </div>
        <!--start of the image columns-->
        <div class="row mx-auto p-5">
            <div class="col-3 d-flex justify-content-center box2">
                <img src="emptynail.png" alt="" class="d-block img-fluid rounded-5" style="height: 135px; width: 135px;">
            </div>
            <div class="col-3 d-flex justify-content-center box2">
                <img src="emptynail.png" alt="" class="d-block img-fluid rounded-5" style="height: 135px; width: 135px;">
            </div>
            <div class="col-3 d-flex align-content-center justify-content-center box2">
                <img src="emptynail.png" alt="" class="d-block img-fluid rounded-5" style="height: 135px; width: 135px;">
            </div>
            <div class="col-3 d-flex justify-content-center box2">
                <img src="emptynail.png" alt="" class="d-block img-fluid rounded-5" style="height: 135px; width: 135px;">
            </div>
            <div class="col-3 d-flex justify-content-center pt-3 thindesc box2">
                <p>OVAL</p>
            </div>
            <div class="col-3 d-flex justify-content-center pt-3 thindesc box2">
                <p>ALMOND</p>
            </div>
            <div class="col-3 d-flex justify-content-center pt-3 thindesc box2">
                <p>COFFIN</p>
            </div>
            <div class="col-3 d-flex justify-content-center pt-3 thindesc box2">
                <p>STILETTO</p>
            </div>
        </div>
        </div> <!-- END OF MASSIVE COLUMN -->
    </div>
</div> <!--end of get nail'd section-->

<div class="container-fluid printbg">
    <div class="row">
        <div class="col-lg-10 mx-auto  p-4 d-flex justify-content-center box">
            <div class="col-10 pb-5">
                <h1 class="blktxt pinkh pt-5" style="line-height: 5rem;"><span class="highlight" style="box-shadow: .5em 0 0 #FFD2F3, -.5em 0 0 #FFD2F3;"> Press, Press, Press, Press, Press</span></h1>
                <h3 class="h3size p-3 magentatxt"><span class="highlight" style="box-shadow: .5em 0 0 #FFD2F3, -.5em 0 0 #FFD2F3;">MANI DON'T NEED NO PRESS</span></h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto mt-4 box3">
                                <!-- Bootstrap carousel-->
                                <div class="slideshow-container rounded-5">

                                    <div class="mySlides fs-6">
                                      <q>I absolutely loved my manicure at your salon - Sinal was skilled, the color was perfect, and my nails have never looked prettier!</q>
                                      <p class="author pt-2">JOEY TRIBBIANI</p>
                                    </div>
                                    
                                    <div class="mySlides fs-9">
                                        <q>I am extremely satisfied with my manicure at your salon - the attention to detail and the beautiful nail design exceeded my expectations!</q>
                                        <p class="author pt-2">CARDI B</p>
                                    </div>
                                    
                                    <div class="mySlides fs-8">
                                        <q>The manicure I received at your salon was top-notch - the quality, skill, and creativity of Sinal made it a truly exceptional experience!</q>
                                        <p class="author pt-2">ICE SPICE</p>
                                    </div>
                                    <!--
                                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                                    <a class="next" onclick="plusSlides(1)">❯</a>
                                    -->
                                    <div class="dot-container rounded-bottom-5 pb-3">
                                        <span class="dot" onclick="currentSlide(1)"></span> 
                                        <span class="dot" onclick="currentSlide(2)"></span> 
                                        <span class="dot" onclick="currentSlide(3)"></span> 
                                      </div>
                                    </div>
                                    <!--
                                    <div class="dot-container">
                                      <span class="dot" onclick="currentSlide(1)"></span> 
                                      <span class="dot" onclick="currentSlide(2)"></span> 
                                      <span class="dot" onclick="currentSlide(3)"></span> 
                                    </div>
                                -->
                                    <script>
                                    var slideIndex = 1;
                                    showSlides(slideIndex);
                                    
                                    function plusSlides(n) {
                                      showSlides(slideIndex += n);
                                    }
                                    
                                    function currentSlide(n) {
                                      showSlides(slideIndex = n);
                                    }
                                    
                                    function showSlides(n) {
                                      var i;
                                      var slides = document.getElementsByClassName("mySlides");
                                      var dots = document.getElementsByClassName("dot");
                                      if (n > slides.length) {slideIndex = 1}    
                                      if (n < 1) {slideIndex = slides.length}
                                      for (i = 0; i < slides.length; i++) {
                                          slides[i].style.display = "none";  
                                      }
                                      for (i = 0; i < dots.length; i++) {
                                          dots[i].className = dots[i].className.replace(" active", "");
                                      }
                                      slides[slideIndex-1].style.display = "block";  
                                      dots[slideIndex-1].className += " active";
                                    }
                                    </script>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!--start of footer -->
<!-- FOOTER -->
<?php
    include("footer.html");
?>

</body>
</html>