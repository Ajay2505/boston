<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career | Connect | Boston Living</title>
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
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
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

<body class="connect career">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCZ8TKV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="covid-notice" boston-html="covid-notice.php"></div>

    <!--HEADER-->
    <?php include('header.php') ?>
    <!--HEADER END-->

    <!--HERO 1-->
    <section class="_hero-1 mb-40">
        <div class="container-fluid">
            <div class="d-flex flex-align-center">
                <div class="col col-12 col-md-6 order-md-2">
                    <img class="lozad img-responsive" data-src="assets/images/connect/career.jpeg" alt="">
                </div>
                <div class="col col-12 col-md-6 _pad">
                    <p>Connect</p>
                    <h2 class="bl-title">Careers</h2>
                    <p class="mb-40">We are always looking to hire passionate folks who will make us better as a team. If you are looking for a lot of ownership in your work and want to make a dent in the rental space in India, look no further. Fill the form by clicking on connect below. </a></p>
                    <button class="bl-button _black" onclick="scrollBtn()">Connect</button>
                </div>
            </div>
        </div>
    </section>
    <!--HERO 1 END-->

    <!--FORM-->
    <section id="scrollConnect">
        <div class="container py-4r">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <form action="" class="bl-form" method="POST">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label>First Name*</label>
                                    <input type="text" name="first-name" id="first-name" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label>Last Name*</label>
                                    <input type="text" name="last-name" id="last-name" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label>Email Address*</label>
                                    <input type="email" name="email" id="email" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label>Phone Number*</label>
                                    <input type="number" name="number" id="number" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label>Alternate Phone Number</label>
                                    <input type="number" name="number" id="number" placeholder="Alternate Phone Number">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label>Tell Us About Yourself</label>
                                    <textarea name="message" id="contactMessage" class="form-control" placeholder="Message" cols="20" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label>What Skills Can You Bring On Board - That Will Make Us Better</label>
                                    <textarea name="message" id="contactMessage" class="form-control" placeholder="Message" cols="20" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label>Why Do You Want To Join Us?</label>
                                    <textarea name="message" id="contactMessage" class="form-control" placeholder="Message" cols="20" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group file-input">
                                    <label>Attachment (Please attach your latest CV / Resume)</label>
                                    <input type="file" id="myfile" name="myfile">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <button type="submit" name="submit" value="submit">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--FORM END-->

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





    <script>

    </script>

    <!--FOOTER END-->
    <!-- <div class="bl-cursor"></div> -->
    <div id="form-drawer"><?php include('form-drawer.php') ?></div>

    <!--JS-->
    < script src="assets/js/jquery.min.js">
        </script>
        <script src="assets/js/functions.js"></script>
        <script src="assets/js/app.js"></script>
        <!--FORM-->
        <script src="assets/js/jquery-validate.min.js" defer></script>
        <script src="assets/js/additional-methods.min.js" defer></script>
        <script src="assets/js/form-drawer.js" defer></script>

        <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbye9-hjT7hucp-bdbvHBo_q9Qgaf_YxvCKD7ZVUfOtOatxskVoFmbe1juXMQbaBbH01sw/exec';
            includeHTML();

            function scrollBtn() {
                var element = document.querySelector("#scrollConnect");
                element.scrollIntoView({
                    behavior: "smooth"
                });
            }
            //form submit
            jQuery("#career-form-submit").click(function() {
                jQuery("#career-form").validate({
                    rules: {
                        fname: "required",
                        lname: "required",
                        email: "required",
                        phone1: "required",
                        resume: "required",
                        fname: {
                            required: true
                        },
                        lname: {
                            required: true
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        phone1: {
                            required: true,
                            minlength: 10,
                            maxlength: 10,
                            number: true
                        },
                        resume: {
                            required: true,
                            accept: "application/pdf"
                        }
                    },
                    messages: {
                        email: {
                            required: "Please enter your email",
                            minlength: "Please enter a valid email address"
                        },
                        phone1: {
                            required: "Please provide a valid number",
                            minlength: "Phone number must be min 10 characters long",
                            maxlength: "Phone number must not be more than 10 characters long"
                        },
                        resume: {
                            required: "Only PDF format is accepted"
                        }
                    },
                    submitHandler: function(form) {
                        jQuery.ajax({
                            url: jQuery(form).attr('action'),
                            type: 'POST',
                            data: new FormData(form),
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                const form = document.forms['career-form']


                                fetch(scriptURL, {
                                    method: 'POST',
                                    body: new FormData(form)
                                })

                                setTimeout(function() {
                                    window.location.href = "thank-you.php"; //will redirect to your blog page (an ex: blog.html)
                                }, 2000); //will call the function after 2 secs.
                            },
                            error: function(response) {
                                if (response.responseText !== '') {
                                    jQuery(".career-form-message").fadeIn(400).text(response.responseText);
                                } else {
                                    jQuery(".career-form-message").fadeIn(400).text('Oops! An error occured and your message could not be sent.');
                                }
                            }
                        });
                    }
                });
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
        <!-- Google Code -->
</body>

</html>