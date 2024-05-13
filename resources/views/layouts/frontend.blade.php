<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Event</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/fav.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="/assets/fonts/flaticon.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/off-canvas.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="/assets/css/rsmenu-main.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">

    <style>
        .rs-banner.main-home .content-wrap .prelements-heading .title-inner .title {
            font-size: 34px;
            font-weight: 900;
            text-transform: uppercase;
            line-height: 32px;
            letter-spacing: 1px;
            color: #FFFFFF;
            margin: 0px 0px 92px 0px;

        }

        .rs-banner.main-home .content-wrap .conference-title {
            position: relative;
            z-index: 2;
            font-size: 30px;
            font-weight: 700;
            text-transform: uppercase;
            line-height: 32px;
            letter-spacing: 1px;
            color: #ffffff;
            margin: 0px 0px 80px 0px;
        }




        .university-name {
            margin-top: 230px;
        }




        .countdown-section {
            background: rgba(0, 0, 0, 0.5);
            bottom: 0px;
            position: absolute;
            width: 100%;

        }
        .text-center {
            text-align: center;
        }
        .countdown-header {
            font-family: "Montserrat", sans-serif;
            font-size: 1.125rem;
            font-weight: 700;
        }
        .counter-div {
            display: flex;
            flex-direction: row;
            gap: 24px;
            justify-content: center;
            padding: 24px 0;
        }
        .counter-element {
            width: fit-content;
            display: flex;
            flex-direction: column;
        }
        .number-div {
            background-color:#FA0368;
            border-radius: 10px;
            width: 80px;
            padding: 12px 0;
            font-family: "Montserrat", sans-serif;
            font-size: 1.125rem;
            font-weight: 700;
            color: white;
        }
        .element-text {
            font-family: "Montserrat", sans-serif;
            font-size: 0.75rem;
            font-weight: 700;
            color: white;
        }
        .counter-animate {
            animation: slideInFromTop 0.5s ease-in-out;
        }
        .show {
            opacity: 1;
        }
        @media screen and (max-width: 450px) {
            .number-div {
                width: 60px;
            }
            .counter-div {
                gap: 5px;
            }
            .et-desktop {
                display: none;
            }


            .university-name {
                margin-top: 0px;
            }
            .rs-banner.main-home .content-wrap {
                padding: -70px 0 20px !important;

            }
            .counter-div {

                padding: 3px 0px 0px 0px;
            }

            .rs-banner.main-home .content-wrap .prelements-heading .title-inner .title {
                font-size: 28px;

            }

            .rs-banner.main-home .content-wrap .conference-title {
                font-size: 25px;
                margin: 150px 0px 80px 0px;
            }
        }
        @media screen and (min-width: 451px) {
            .et-mobile {
                display: none;
            }
        }

        @keyframes slideInFromTop {
            from {
                transform: translateY(-80%);
                opacity: 0;
            }
            to {
                transform: translateY(0%);
                opacity: 1;
            }
        }



    </style>

</head>
<body class="defult-home">

<div class="offwrap"></div>

<!--Preloader start here-->
<div id="pre-load">
    <div id="loader" class="loader">
        <div class="loader-container">
            <div class='loader-icon'><img src="/assets/images/fav.png" alt="Evenio - Events & Conference"></div>
        </div>
    </div>
</div>
<!--Preloader area end here-->


@yield('content')





<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer style1" style="background-color: #0a53be">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 md-mb-10">
                    <div class="footer-logo mb-40 md-mb-20">
                        <a href="/"><img src="/assets/images/logo-light2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 pl-45 md-pl-15">
                            <h3 class="footer-title">Address</h3>
                            <div class="textwidget">2096 New Market, New<br> Road
                                North Carolina, USA
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 md-mb-10 pl-90 md-pl-15">
                            <h3 class="footer-title">Call Us</h3>
                            <div class="textwidget">
                                <a href="mailto:support@reactheme.com">support@reactheme.com</a><br>
                                <a href="tel:(+880)155-69569">(+880)155-69569</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 pl-115 md-pl-15">
                            <h3 class="footer-title">Follow Us</h3>
                            <ul class="footer-social">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">

                <div class="col-lg-8 mx-auto">
                    <div class="copyright text-lg-start text-center ">
                        <p>© {{date('Y')}} event, All Rights Reserved. Developed By<a href=""> webAid Soltutions</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->


<!-- Search Modal Start -->
<div class="modal fade search-modal" id="searchModal" tabindex="-1">
    <button type="button" class="close" data-bs-dismiss="modal">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                        <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

<!-- modernizr js -->
<script src="/assets/js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="/assets/js/jquery.min.js"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="/assets/js/bootstrap.min.js"></script>
<!-- op nav js -->
<script src="/assets/js/jquery.nav.js"></script>
<!-- isotope.pkgd.min js -->
<script src="/assets/js/isotope.pkgd.min.js"></script>
<!-- owl.carousel js -->
<script src="/assets/js/owl.carousel.min.js"></script>
<!-- wow js -->
<script src="/assets/js/wow.min.js"></script>
<!-- Time Circle js -->
<script src="/assets/js/time-circle.js"></script>
<!-- Skill bar js -->
<script src="/assets/js/skill.bars.jquery.js"></script>
<!-- imagesloaded js -->
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- waypoints.min js -->
<script src="/assets/js/waypoints.min.js"></script>
<!-- counterup.min js -->
<script src="/assets/js/jquery.counterup.min.js"></script>
<!-- magnific popup js -->
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<!-- contact form js -->
<script src="/assets/js/contact.form.js"></script>
<!-- main js -->
<script src="/assets/js/main.js"></script>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 31, 2024 23:59:59").getTime();

    // Update the countdown every 1 second
    var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the countdown date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes, and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + " days " + hours + " hour "
            + minutes + " minute " + seconds + " seconds ";

        // If the countdown is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);



    function timingCalc(endtime) {
        "use strict";

        var timeTotal = Date.parse(endtime) - Date.now(),
            timeSeconds = Math.floor((timeTotal / 1000) % 60),
            timeMinutes = Math.floor((timeTotal / 1000 / 60) % 60),
            timeHours = Math.floor((timeTotal / (1000 * 60 * 60)) % 24),
            timeDays = Math.floor(timeTotal / (1000 * 60 * 60 * 24));

        return {
            total: timeTotal,
            seconds: timeSeconds,
            minutes: timeMinutes,
            hours: timeHours,
            days: timeDays
        };
    }

    function animateCounter(selector, targetValue) {
        var $element = $(selector);
        var currentValue = parseInt($element.text(), 10);

        if (currentValue === targetValue) {
            return;
        }

        $element.addClass("counter-animate");
        $element.text(targetValue);

        setTimeout(function () {
            $element.addClass("show");
        }, 10);

        setTimeout(function () {
            $element.removeClass("counter-animate show");
        }, 500);
    }

    function startCalc(endtime) {
        var timeTotal = timingCalc(endtime);

        animateCounter(".days", timeTotal.days);
        animateCounter(".hours", timeTotal.hours);
        animateCounter(".minutes", timeTotal.minutes);
        animateCounter(".seconds", timeTotal.seconds);

        if (timeTotal.total <= 0) {
            clearInterval(timingNow);
        }
    }

    var DeadLine = new Date(Date.parse("25 Dec 2024 00:00:00 GMT"));

    setInterval(function () {
        startCalc(DeadLine);
    }, 1000);

</script>
</body>
</html>
