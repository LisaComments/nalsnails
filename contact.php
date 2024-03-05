<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me - Nal's Nails</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Paytone+One&family=Rowdies:wght@700&family=Rubik+Mono+One&family=Secular+One&display=swap" rel="stylesheet">



</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Navbar -->
    <?php
    include("header.html");
    ?>
    <body>
        <!-- FIRST CONTAINER EVER -->
<div class="container-fluid mt-5 mb-5 box">
    <div class="row">
        <div class="col-lg-6 mx-auto bgsection pinktxt pb-5 rounded-5 shadowy box">
            <div class="col mx-auto box2">
            <h1 class="pt-5 pb-5 d-flex justify-content-center pinkh pinktxt">
                Hit Me Up
            </h1>
            </div>
            <div class="container-fluid">
            <form class="row g-3 needs validation justify-content-center">
                <div class="col-md-5">
                <label for="validationDefault08" class="form-label">First Name*</label>
                <input type="text" class="form-control" id="validationDefault08" required>
                </div>
                <div class="col-md-5">
                <label for="validationDefault09" class="form-label">Last Name*</label>
                <input type="text" class="form-control" id="validationDefault09" required>
                </div>
                <div class="col-md-10">
                <label for="validationDefault10" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="validationDefault10">
                </div>
                <div class="col-md-10">
                <label for="validationDefault11" class="form-label">Phone Number*</label>
                <input type="tel" class="form-control" id="validationDefault11" minlength="12" maxlength="12" required>
                </div>
                <div class="col-md-10">
                    <label for="validationDefault12" class="form-label">Subject*</label>
                    <input type="text" class="form-control" id="validationDefault12" required>
                   </div>               
                <div class="col-md-10 mb-5">
                    <label for="validationDefault13" class="form-label">MESSAGE*</label>
                    <textarea class="form-control" id="Textarea13" rows="8"></textarea>              
                </div>
                <div class="col-10 d-flex justify-content-center">
                    <button type="submit" class="bookbutton btn-lg">SEND MESSAGE</button>
                </div>
            </form>
        </div>
        </div> <!-- END OF MASSIVE COLUMN -->
    </div>
</div> <!-- END OF CONTAINER FLUID -->
        <!-- FOOTER -->
    <?php
    include("footer.html");
    ?>
        
    </body>
    </html>