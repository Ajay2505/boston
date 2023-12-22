<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Inner Page | Logbook | Boston Living</title>
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
    <link rel="stylesheet" href="assets/css/style.min.css">
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

<body class="blog">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCZ8TKV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="covid-notice" boston-html="covid-notice.php"></div>

    <!--HEADER-->
    <?php include('header.php') ?>
    <!--HEADER END-->

    <!--Content-->
    <section>
        <div class="container py-4r">
            <div class="_banner">
                <h2 class="bl-title">When you travel to a new city, the place that you chose to stay decides your liking for the city in many ways. I made the right choice.</h2>
                <div class="_img">
                    <img data-src="assets/temp/blog-img.jpeg" alt="" class="img-responsive lozad">
                </div>
            </div>
            <div class="d-flex _content">
                <div class="col col-12 col-md-6 offset-md-2">
                    <p>Boston Living has been my home away from home for the past several months. I chose to stay here for the amenities that are provided, the well equipped gym, the 24/7 security that is available, it's central location making travel to any part of Hyderabad easy and finally the ever smiling and friendly staff that assist us whenever there is a requirement. The community activities that they organize to create a bond among the people that stay here is worth mentioning. Just loving my stay at Boston Living and looking forward to many more months of my stay here!</p>
                    <p class="_name">Lalitha Janarthanan</p>
                    <p class="_byline">by Boston Living</p>
                    <p class="_date">26th March 2021</p>
                    <div class="_social-share">
                        <p class="_text">Share Article</p>
                        <div class="_icons">
                            <a href="#">Facebook</a>
                            <a href="#">Mail</a>
                            <a href="#">Twitter</a>
                        </div>
                    </div>
                    <button class="bl-button _hover" onclick="tabDrawer(event,'open')" data-tab="second">Join the Flock</button>
                </div>
            </div>
        </div>
    </section>
    <!--Content END-->

    <!--Newsletter-->
    <section class="container-fluid newsletter">
        <div class="container py-4r">
            <div class="d-flex">
            </div>
        </div>
    </section>
    <!--Newsletter END-->

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
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/app.js"></script>
    <!--GSAP-->
    <script src="assets/js/jquery-ui.min.js" defer></script>
    <script src="assets/gsap/gsap.min.js" defer></script>
    <script src="assets/gsap/ScrollTrigger.min.js" defer></script>
    <!--FORM-->
    <script src="assets/js/jquery-validate.min.js" defer></script>
    <script src="assets/js/form-drawer.js" defer></script>
    <script>
        includeHTML();
        gsap.to("._banner ._img", {
            y: 200,
            ease: "none",
            scrollTrigger: {
                trigger: "section _banner",
                scrub: true
            },
        });
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
</body>

</html>