<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Boston Living</title>
    <!-- PRELOAD -->
    <link rel="preload" href="assets/fonts/tt-norms-pro-regular.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="assets/fonts/tt-norms-pro-medium.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="assets/fonts/tt-norms-pro-bold.woff" as="font" type="font/woff" crossorigin>
    <!--FAVICON-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <!-- <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5"> -->
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!--CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PCZ8TKV');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body class="logbook">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCZ8TKV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="covid-notice" boston-html="covid-notice.php"></div>

    <!--HEADER-->
    <?php include('header.php') ?>
    <!--HEADER END-->

    <!--Gallery GRID-->


    <section class="gallery">
        <div class="container">

            <div class="portfolio-menu mt-2 mb-4">
                <ul>
                    <li class="btn btn-outline-dark active" data-filter="*">All</li>
                    <li class="btn btn-outline-dark" data-filter=".community">Community</li>
                    <li class="btn btn-outline-dark" data-filter=".banquet">Banquet Hall</li>
                    <li class="btn btn-outline-dark text" data-filter=".cabin-cafe">Cabin cafe - Food truck</li>
                    <li class="btn btn-outline-dark text" data-filter=".comfy-room">Comfy Room</li>
                    <li class="btn btn-outline-dark text" data-filter=".cosy-room">Cosy Room</li>
                    <li class="btn btn-outline-dark text" data-filter=".futsal">Futsal</li>
                    <li class="btn btn-outline-dark text" data-filter=".gym">Gym - Wellness centre</li>
                    <li class="btn btn-outline-dark text" data-filter=".plush-room">Plush Room</li>
                    <li class="btn btn-outline-dark text" data-filter=".zumba">Zumba - Wellness centre</li>
                    <li class="btn btn-outline-dark text" data-filter=".bistro">Bistro</li>
                </ul>
            </div>
            <div class="gallery-item portfolio-item row">
                <div class="item community col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/community-1.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/community-1.jpg" alt="">
                    </a>
                </div>
                <div class="item community col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/community-2.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/community-2.jpg" alt="">
                    </a>
                </div>
                <div class="item community col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/community-3.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/community-3.jpg" alt="">
                    </a>
                </div>
                <div class="item community col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/community-4.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/community-4.jpg" alt="">
                    </a>
                </div>

                <div class="item banquet col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/banquet.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/banquet.jpg" alt="">
                    </a>
                </div>

                <div class="item cabin-cafe col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/cabin-1.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/cabin-1.jpg" alt="">
                    </a>
                </div>
                <div class="item cabin-cafe col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/cabin-2.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/cabin-2.jpg" alt="">
                    </a>
                </div>
                <div class="item cabin-cafe col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/cabin-3.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/cabin-3.jpg" alt="">
                    </a>
                </div>
                <div class="item cabin-cafe col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/cabin-4.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/cabin-4.jpg" alt="">
                    </a>
                </div>

                <div class="item comfy-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/comfy-1.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/comfy-1.jpg" alt="">
                    </a>
                </div>
                <div class="item comfy-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/comfy-2.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/comfy-2.jpg" alt="">
                    </a>
                </div>
                <div class="item comfy-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/comfy-3.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/comfy-3.jpg" alt="">
                    </a>
                </div>

                <div class="item cosy-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/cosy-1.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/cosy-1.jpg" alt="">
                    </a>
                </div>
                <div class="item cosy-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/cosy-2.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/cosy-2.jpg" alt="">
                    </a>
                </div>
                <div class="item cosy-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/cosy-3.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/cosy-3.jpg" alt="">
                    </a>
                </div>
                <div class="item cosy-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/cosy-4.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/cosy-4.jpg" alt="">
                    </a>
                </div>
                <div class="item cosy-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/cosy-5.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/cosy-5.jpg" alt="">
                    </a>
                </div>
                <div class="item cosy-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/cosy-6.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/cosy-6.jpg" alt="">
                    </a>
                </div>

                <div class="item futsal col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/futsal-1.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/futsal-1.jpg" alt="">
                    </a>
                </div>

                <div class="item gym col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/gym-1.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/gym-1.JPG" alt="">
                    </a>
                </div>
                <div class="item gym col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/gym-2.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/gym-2.jpg" alt="">
                    </a>
                </div>

                <div class="item plush-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/plush-1.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/plush-1.jpg" alt="">
                    </a>
                </div>
                <div class="item plush-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/plush-2.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/plush-2.jpg" alt="">
                    </a>
                </div>
                <div class="item plush-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/plush-3.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/plush-3.jpg" alt="">
                    </a>
                </div>
                <div class="item plush-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/plush-4.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/plush-4.jpg" alt="">
                    </a>
                </div>
                <div class="item plush-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/plush-5.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/plush-5.jpg" alt="">
                    </a>
                </div>
                <div class="item plush-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/plush-6.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/plush-6.jpg" alt="">
                    </a>
                </div>
                <div class="item plush-room col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/plush-7.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/plush-7.jpg" alt="">
                    </a>
                </div>

                <div class="item zumba col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/zumba-1.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/zumba-1.jpg" alt="">
                    </a>
                </div>

                <div class="item bistro col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/bistro-1.JPG" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/bistro-1.JPG" alt="">
                    </a>
                </div>
                <div class="item bistro col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/bistro-2.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/bistro-2.jpg" alt="">
                    </a>
                </div>
                <div class="item bistro col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/bistro-3.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/bistro-3.jpg" alt="">
                    </a>
                </div>
                <div class="item bistro col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/bistro-4.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/bistro-4.jpg" alt="">
                    </a>
                </div>
                <div class="item bistro col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/bistro-5.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/bistro-5.jpg" alt="">
                    </a>
                </div>
                <div class="item bistro col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/bistro-6.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/bistro-6.jpg" alt="">
                    </a>
                </div>
                <div class="item bistro col-sm-12 col-md-6 col-lg-3">
                    <a href="./assets/images/gallery/bistro-7.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="./assets/images/gallery/bistro-7.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--FOOTER-->
    <div id="quick-contact">
        <a id="whatsapp" href="https://api.whatsapp.com/send?phone=+919100989114&text=Hi!" target="_blank" class="whatsapp">whatsapp</a>
        <a id="mobile" href="tel:+918530037444" target="_blank" class="telephone">telephone</a>
    </div>
    <div id="footer" class="bg-black has-waves">
        <canvas class="waves black-waves"></canvas>
        <div class="container py-4r">
            <div class="d-flex">
                <div class="col col-12 col-md-4 mb-15">
                    <a href="index.php">
                        <img class="lozad footer-logo" data-src="assets/images/green-circle-logo.png" alt="" width="120" height="120">
                    </a>
                </div>
                <div class="col col-12 col-md-4">
                    <h3 class="bl--title">Contact</h3>
                    <ul>
                        <li>hello@bostonliving.com</li>
                        <li>+91 9154092636, +91 8530037444</li>

                    </ul>
                    <ul class="footer-social">
                        <li><a href="https://www.facebook.com/107166337346146/" target="_blank" class="fb">facebook</a></li>
                        <li><a href="http://twitter.com/BostonLiving2" target="_blank" class="tweet">twitter</a></li>
                        <!-- <li><a href="#" target="_blank" class="ln">linkedin</a></li> -->
                        <li><a href="https://instagram.com/bostonliving_india?utm_medium=copy_link" target="_blank" class="insta">instagram</a></li>
                    </ul>
                </div>
                <div class="col col-12 col-md-4">
                    <h3 class="bl--title">Sitemap</h3>
                    <ul class="_sitemap">
                        <li><a href="./index.php#scrollAmenities">Amenities</a></li>
                        <li><a href="./index.php#scrollLocation">Locations</a></li>
                        <li><a href="#" onclick="tabDrawer(event,'open')" data-tab="first">Reach Us</a></li>
                        <li><a href="./kondapur.php#faq">FAQs</a></li>
                        <li><a href="./privacy-policy.php">Privacy Policy</a></li>
                    </ul>
                    <ul class="_inline _apps">
                        <li class="mr-10">
                            <a href="https://apps.apple.com/us/app/boston-living/id1546720776" target="_blank" class="_hover"><img class="lozad" data-src="assets/images/app-store.png" alt="" width="140" height="42"></a>
                        </li>
                        <li>
                            <a href="https://play.google.com/store/apps/details?id=com.bostonliving.community" target="_blank" class="_hover"><img class="lozad" data-src="assets/images/play-store.png" alt="" width="140" height="42"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="copyright" class="clear container">
            <div class="d-flex flex-justify-center">
                <div class="col col-12">
                    <p>Copyright &copy; <span class="year">%year%</span> Boston Living</p>
                </div>
            </div>
        </div>
    </div>

    <!--FOOTER END-->
    <!-- <div class="bl-cursor"></div> -->
    <div id="form-drawer"><?php include('form-drawer.php') ?></div>

    <!--JS-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/app.js"></script>
    <!--FORM-->
    <script src="assets/js/jquery-validate.min.js" defer></script>
    <script src="assets/js/form-drawer.js" defer></script>
    <script>
        includeHTML();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155657075-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-155657075-1');
    </script>
    <script>
        $('.portfolio-menu ul li').click(function() {
            $('.portfolio-menu ul li').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $('.portfolio-item').isotope({
                filter: selector
            });
            return false;
        });
        $(document).ready(function() {
            var popup_btn = $('.popup-btn');
            popup_btn.magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
</body>

</html>