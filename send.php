<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="assets/images/favicon.png" sizes="32x32" type="image/png">
    <title>Wahion Yoha</title>

    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/fancybox.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.circliful.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="assets/css/colors/color.css" title="color" />
    <link rel="alternate stylesheet" href="assets/css/colors/color2.css" title="color2" />
    <link rel="alternate stylesheet" href="assets/css/colors/color3.css" title="color3" />
    <link rel="alternate stylesheet" href="assets/css/colors/color4.css" title="color4" />
</head>

<body>
    <main>
        <div class="pageloader-wrap">
            <div class="loader">
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__ball"></div>
            </div>
        </div><!-- Pageloader Wrap -->
        <div class="sidepanel">
            <span><i class="fa fa-cog fa-spin"></i></span>
            <div class="color-picker">
                <h3>Choose Your Color</h3>
                <a class="color applied" onclick="setActiveStyleSheet('color'); return false;"></a>
                <a class="color2" onclick="setActiveStyleSheet('color2'); return false;"></a>
                <a class="color3" onclick="setActiveStyleSheet('color3'); return false;"></a>
                <a class="color4" onclick="setActiveStyleSheet('color4'); return false;"></a>
            </div><!-- Color Picker -->
        </div><!-- Side Panel -->
        <header class="style1">
            <div class="container">
                <div class="logo"><a href="index.html" title="Logo"><img src="assets/images/logo.png"
                            alt="logo.png"></a></div>
                <nav>
                    <div>
                        <a class="thm-btn brd-rd40" href="#contact" title="">Contact Us</a>
                        <ul>
                            <li><a href="" title="">Home</a></li>
                            <li><a href="#about" title="">About</a></li>
                            <li><a href="#courses" title="">courses</a></li>
                            <li><a href="#services" title="">services</a></li>
                            <li><a href="#offers" title="">offers</a></li>
                            <li><a href="#clients" title="">clients</a></li>
                            <li><a href="#contact" title="">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header><!-- Header -->
        <div class="rspn-hdr">
            <div class="lg-mn">
                <div class="logo"><a href="index.html" title="Logo"><img src="assets/images/logo2.png"
                            alt="logo2.png"></a></div>

                <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                <ul>
                    <li><a href="" title="">Home</a></li>
                    <li><a href="#about" title="">About</a></li>
                    <li><a href="#courses" title="">courses</a></li>
                    <li><a href="#services" title="">services</a></li>
                    <li><a href="#offers" title="">offers</a></li>
                    <li><a href="#clients" title="">clients</a></li>
                    <li><a href="#contact" title="">Contact</a></li>
                </ul>
            </div>
        </div>

        <style>
        footer {
            position: absolute;
            width: 100%;
            bottom: 0;
        }
        </style>

        <!-- /menubar -->
        <main id="main" style="margin-top: 150px; text-align: center;">
            <section id="about">
                <div class="container">
                    <header class="section-header">
                        <h3>
                            <?php
                            $email= "info@quranteacheracademy.com";

                            if (!empty($_POST)){

                                if(empty($_POST['name']) or empty($_POST['tel']) or empty($_POST['email']) or  empty($_POST['message'])){
                                    echo("لم تقم بتعبئة جميع الخانات <br>");

                                }
                                $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                                if(!preg_match($regex, $_POST['email'])){
                                    echo("بريد خاطئ");

                                }
                                else{
                                    $message  = "الاسم :\n{$_POST["name"]}\n";
                                    $message .= "التليفون :\n{$_POST["tel"]}\n";
                                    $message .= "الرسالة :\n{$_POST["message"]}\n";
                                    $message .= "أي بي :\n{$_SERVER['REMOTE_ADDR']}\n";
                                    $message = stripslashes($message);
                                    $message = wordwrap($message, 70);
                                    mail($email,"Quran Teacher Academy (new)",$message,"From: {$_POST["name"]} <{$_POST["tel"]}>");

                                    echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت، شكرا لك");
                                }
                            }
                            ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>

        <!-- footer -->
        <footer class="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="copyright">
                            <p>All rights reserved © <span>2020</span><br /> design and development by <a
                                    href="http://advertizeragency.com/" target="_blank"
                                    class="transition">Advertizer</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer -->

        <!-- scripts -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
</body>

</html>