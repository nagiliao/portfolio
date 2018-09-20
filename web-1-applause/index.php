<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleformenu.css">
    <script src="js/modernizr.js"></script>
    <title>Applause</title>
</head>
    
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component-forBGslider.css" /> 
    
<?php include("php/layout_nav.php") ?>

    <main class="cd-main-content">
        <div class="cd-fixed-bg cd-bg-1">
            <div class="bgoverlay"></div>
            <ul id="cbp-bislideshow" class="cbp-bislideshow">

                <li><img src="img/bg-slider-1.jpg" alt="image01" /></li>
                <li><img src="img/bg-slider-2.jpg" alt="image02" /></li>
                <li><img src="img/bg-slider-3.jpg" alt="image03" /></li>
                <li><img src="img/bg-slider-4.jpg" alt="image04" /></li>
            </ul>
            <div id="cbp-bicontrols" class="cbp-bicontrols">
                <span class="cbp-biprev"></span>
                <span class="cbp-binext"></span>
            </div>

            <h1>全台最大行動原生影音聯播媒體<br>No. 1 Mobile Native Video Ad</h1>
            <div class="btn-pos">
                <div class="btn-developer">
                    <a href="video-fordeveloper.html"></a>
                </div>
                <div class="btn-publisher">
                    <a href="video-forpublisher.html"></a>
                </div>
            </div>
        </div>
        <!-- cd-fixed-bg -->

        <div class="cd-scrolling-bg cd-color-2">
            <div class="cd-container"></div>
            <!-- cd-container -->
        </div>
        <!-- cd-scrolling-bg -->

        <div class="cd-fixed-bg cd-bg-2">

            <img src="img/demo_index_03.png" style="opacity: 0.8;">
        </div>
        <!-- cd-fixed-bg -->

        <div class="cd-sp-scrolling-bg cd-color-3">

            <div class="cd-container">
                <p>Copyright (C) JS ADWAYS MEDIA INC. Rights Reserved.</p>
            </div>
            <!-- cd-container -->
        </div>
    </main>
    <!-- cd-main-content -->
    <script src="js/jquery.1.11.1.js"></script>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script>
    <!--menu Resource jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="js/jquery.imagesloaded.min.js"></script>
    <script src="js/cbpBGSlideshow.min.js"></script>
    <script>
        $(function () {
            cbpBGSlideshow.init();
        });
    </script>
    <!-- Resource jQuery -->
</body>

</html>