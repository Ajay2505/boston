
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise Sales | Connect | Boston Living</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $(".hs-button1").click(function(){
    event.preventDefault();
    var companyName = document.getElementById("company-name").value;
            var location = document.getElementById("location").value;
            var pocName = document.getElementById("poc-name").value;
            var email = document.getElementById("email").value;
            var mobile = document.getElementById("number").value;

            if (companyName == "") {
                document.getElementById("name").style.borderColor = "red";
            }
            if (location == "" == "") {
                document.getElementById("move-in").style.borderColor = "red";
            }
            if (pocName == "") {
                document.getElementById("move-out").style.borderColor = "red";
            }
            if (email == "") {
                document.getElementById("email").style.borderColor = "red";
            }
            if (mobile == "") {
                document.getElementById("number").style.borderColor = "red";
            }

            // if (mobile == "") {
            //     document.getElementById("utm_medium").style.borderColor = "red";
            // }
            // if (mobile == "") {
            //     document.getElementById("utm_source").style.borderColor = "red";
            // }
            // if (mobile == "") {
            //     document.getElementById("utm_campaign").style.borderColor = "red";
            // }
            // if (mobile == "") {
            //     document.getElementById("utm_content").style.borderColor = "red";
            // }
            if (companyName == "" && location == "" && pocName == "" && email == "" && mobile == "") {
                document.getElementById("company-name").style.borderColor = "red";
                document.getElementById("location").style.borderColor = "red";
                document.getElementById("poc-name").style.borderColor = "red";
                document.getElementById("email").style.borderColor = "red";
                document.getElementById("number").style.borderColor = "red";

                // document.getElementById("utm_medium").style.borderColor = "red";
                // document.getElementById("utm_source").style.borderColor = "red";
                // document.getElementById("utm_campaign").style.borderColor = "red";
                // document.getElementById("utm_content").style.borderColor = "red";
            }
    let obj = [
                {
                "Attribute": "Company",
                "Value": companyName
                },
                {
                "Attribute": "mx_City",
                "Value": location
                },
                {
                "Attribute": "mx_POC_Name",
                "Value": pocName
                },
                {
                "Attribute": "EmailAddress",
                "Value": email
                },
                {
                "Attribute": "Phone",
                "Value": mobile
                },
                {
                "Attribute": "ProspectID",
                "Value": "xxxxxxxx-d168-xxxx-9f8b-xxxx97xxxxxx"
                },
                {
                "Attribute": "SearchBy",
                "Value": "Phone"
                }
                ];
                    var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u%24r90762783ae2ff654ef80d4140a55cb40&secretKey=1d3e9e5234f49072cd263f51626b6c5b0be694ae",
                    "method": "POST",
                    
                    "headers": {
                        "content-type": "application/json",
                        "cache-control": "no-cache"
                    },
                    "processData": false,
                    "data": JSON.stringify(obj),

                    }
console.log(obj)
            jQuery.ajax({
                    type: "POST",
                    url: "https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u%24r90762783ae2ff654ef80d4140a55cb40&secretKey=1d3e9e5234f49072cd263f51626b6c5b0be694ae",
                    "method": "POST",
                    "headers": {
                        "content-type": "application/json"
                    },
                    data: JSON.stringify(obj), // serializes the form's elements.
                    success: function(data) {
                        //alert(data);
                       // alert('Thank you! Our asset manager will get in touch with you.');
                        // jQuery('.wpcf7-form')[0].reset();
                        window.location = "https://www.bostonliving.com/thank-you.php"
                        // jQuery(".wpcf7-form").reset();
                        // show response from the php script.
                    }
                });
    });
});
</script>
</head>

<body class="connect enterprise">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCZ8TKV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="covid-notice" boston-html="covid-notice.php"></div>

    <!--HEADER-->
    <!--HEADER-->
<header>
    <div class="container">
        <div class="d-flex flex-justify-space-between flex-align-center">
            <div id="logo" class="col col-2">
                <a href="index.php">
                    <img src="assets/images/logo.png" alt="" width="102" height="120" srcset="">
                </a>
            </div>
            <nav class="col col-10">
                <ul id="desktopMenu" class="main-menu text-right">
                    <li class="has-mega-menu"><a href="#" class="_hover">Locations</a>
                        <div class="mega-menu bg-primary py-4r">
                            <div class="container">
                                <div class="d-flex flex-justify-space-between flex-align-center">
                                    <div class="col col-12 col-md-3 _info">
                                        <div class="_title">Our Locations</div>
                                        <p class="mb-0">Find unique places to live and stay across the India</p>
                                    </div>
                                    <div class="col col-12 col-md-9">
                                        <div class="d-flex">
                                            <div class="col col-12 col-md-2">
                                                <a href="kondapur.php">
                                                    <img class="img-responsive lozad" data-src="assets/images/kondapur-menu-400x400.jpeg" alt="" srcset="">
                                                    Hyderabad - Kondapur
                                                </a>
                                            </div>
                                            <div class="col col-12 col-md-2">
                                                <a href="#" class="event-none">
                                                    <img class="img-responsive lozad grayscale" data-src="assets/images/financial-district-menu-400x400.jpeg" alt="" srcset="">
                                                    Hyderabad - Financial District (Coming Soon)
                                                </a>
                                            </div>
                                            <div class="col col-12 col-md-2">
                                                <a href="#" class="event-none">
                                                    <img class="img-responsive lozad grayscale" data-src="assets/images/shamshabad-menu-400x400.jpeg" alt="" srcset="">
                                                    Hyderabad - Samshabad (Coming Soon)
                                                </a>
                                            </div>
                                            <div class="col col-12 col-md-2">
                                                <a href="#" class="event-none">
                                                    <img class="img-responsive lozad grayscale" data-src="assets/images/whitefield-bangalore-menu-400x400.jpeg" alt="" srcset="">
                                                    Bangalore (Coming Soon)
                                                </a>
                                            </div>
                                            <div class="col col-12 col-md-2">
                                                <a href="#" class="event-none">
                                                    <img class="img-responsive lozad grayscale" data-src="assets/images/omr-chennai-menu-400x400.jpeg" alt="" srcset="">
                                                    Chennai (Coming Soon)
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="blog.php" class="_hover">Blog</a></li>
                    <li><a href="career.php" class="_hover">Careers</a></li>
                    <li><a href="gallery.php" class="_hover">Gallery</a></li>
                    <li class="has-mega-menu"><a href="#" class="_hover">Connect</a>
                        <div class="mega-menu bg-primary py-4r">
                            <div class="container">
                                <div class="d-flex flex-justify-space-between flex-align-center">
                                    <div class="col col-12 col-md-4 _info">
                                        <div class="_title">Connect</div>
                                        <p class="mb-0">Message us to provide feedback, explore job openings, partner or to enquire about corporate tie-ups.</p>
                                    </div>
                                    <div class="col col-12 col-md-7 offset-md-1">
                                        <div class="d-flex">
                                            <div class="col col-12 col-md-3">
                                                <a href="reach-out.php">
                                                    <img class="img-responsive lozad" data-src="assets/images/reachout-menu-400x400.jpeg" alt="" srcset="">
                                                    Reach Out
                                                </a>
                                            </div>
                                            <div class="col col-12 col-md-3">
                                                <a href="career.php">
                                                    <img class="img-responsive lozad" data-src="assets/images/careers-menu-400x400.jpeg" alt="" srcset="">
                                                    Careers
                                                </a>
                                            </div>
                                            <div class="col col-12 col-md-3">
                                                <a href="partner-with-us.php">
                                                    <img class="img-responsive lozad" data-src="assets/images/partner-menu-400x400.jpeg" alt="" srcset="">
                                                    Partner With Us
                                                </a>
                                            </div>
                                            <div class="col col-12 col-md-3">
                                                <a href="enterprise-sales.php">
                                                    <img class="img-responsive lozad" data-src="assets/images/enterprisesales-menu-400x400.jpeg" alt="" srcset="">
                                                    Enterprise Sales
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="https://customer.bostonliving.com/" target="_blank" class="_hover">Customer Login</a></li>
                    <li><button class="bl-button" class="bl-button mr-10" onclick="tabDrawer(event,'open')" data-tab="second">Book</button></li>
                </ul>
                <div id="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul id="menu"></ul>
            </nav>
        </div>
    </div>
    <script>
(function() {
  var domainsToDecorate = [
          'bostoliving.com', //add or remove domains (without https or trailing slash)
          'bostonliving.com'
      ],
      queryParams = [
          'utm_medium', //add or remove query parameters you want to transfer
          'utm_source',
          'utm_campaign',
          'something_else'
      ]
  // do not edit anything below this line
  var links = document.querySelectorAll('a'); 

// check if links contain domain from the domainsToDecorate array and then decorates
  for (var linkIndex = 0; linkIndex < links.length; linkIndex++) {
      for (var domainIndex = 0; domainIndex < domainsToDecorate.length; domainIndex++) { 
          if (links[linkIndex].href.indexOf(domainsToDecorate[domainIndex]) > -1 && links[linkIndex].href.indexOf("#") === -1) {
              links[linkIndex].href = decorateUrl(links[linkIndex].href);
          }
      }
  }
// decorates the URL with query params
  function decorateUrl(urlToDecorate) {
      urlToDecorate = (urlToDecorate.indexOf('?') === -1) ? urlToDecorate + '?' : urlToDecorate + '&';
      var collectedQueryParams = [];
      for (var queryIndex = 0; queryIndex < queryParams.length; queryIndex++) {
          if (getQueryParam(queryParams[queryIndex])) {
              collectedQueryParams.push(queryParams[queryIndex] + '=' + getQueryParam(queryParams[queryIndex]))
          }
      }
      return urlToDecorate + collectedQueryParams.join('&');
  }

  // borrowed from https://stackoverflow.com/questions/831030/
  // a function that retrieves the value of a query parameter
  function getQueryParam(name) {
      if (name = (new RegExp('[?&]' + encodeURIComponent(name) + '=([^&]*)')).exec(window.location.search))
          return decodeURIComponent(name[1]);
  }

})();
</script>
    <script>

//         // document.addEventListener('contextmenu', event => event.preventDefault());
// window.addEventListener('load', (event) => {
// jQuery(".owl-dot").attr('aria-label',"slide-dot");
// });
// document.onkeydown = function(e) {
//   if(event.keyCode == 123) {
//      return false;
//   }
//   if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
//      return false;
//   }
//   if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
//      return false;
//   }
//   if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
//      return false;
//   }
//   if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
//      return false;
//   }
//     if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)) {
//      return false;
//   }
// }

</script>
</header>
<!--HEADER END-->    <!--HEADER END-->

    <!--HERO 1-->
    <section class="_hero-1 mb-40">
        <div class="container-fluid">
            <div class="d-flex flex-align-center">
                <div class="col col-12 col-md-6 order-md-2">
                    <img class="lozad img-responsive" data-src="assets/images/connect/enterprise-sales.jpeg" alt="">
                </div>
                <div class="col col-12 col-md-6 _pad">
                    <p>Connect</p>
                    <h2 class="bl-title">Corporate Stays</h2>
                    <p class="mb-40">If you are a corporate, we would love to host your employees. Please let us know some basic details by clicking on connect below and someone from our sales team will contact you soon.</p>
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
                                    <label for="company-name">Your Company Name*</label>
                                    <input type="text" for="company-name" name="company-name" id="company-name" placeholder="Your Company Name" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="location">Location*</label>
                                    <input type="tel" for="location" name="location" id="location" placeholder="Location" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <p style="text-align: center;margin-top:15px;"><b>Who can we contact</b></p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="poc-name">POC Name*</label>
                                    <input type="text" for="poc-name" name="poc-name" id="poc-name" placeholder="POC Name" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="number">Contact Number*</label>
                                    <input type="number" for="number" name="number" id="number" placeholder="Contact Number" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="email">Email Address*</label>
                                    <input type="email" for="email" name="email" id="email" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                <input type="submit" value="SUBMIT" style="width:180px !important" name="submit" class="hs-button1 primary large" data-reactid=".hbspt-forms-0.5.1.0">

                                    <!--<button type="submit" name="submit" value="submit">SUBMIT</button>-->
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
                        <li><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="92faf7fefefdd2f0fde1e6fdfcfefbe4fbfcf5bcf1fdff">[email&#160;protected]</a></li>
                        <li>+91 9154092636</li>

                    </ul>
                    <ul class="footer-social">
                        <li><a href="https://www.facebook.com/107166337346146/" target="_blank" class="fb">facebook</a></li>
                        <li><a href="https://twitter.com/BostonLiving2" target="_blank" class="tweet">twitter</a></li>
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
    <div id="form-drawer"><!--Tab Drawer-->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script>
    $(document).ready(function() {
        $("#form").click(function() {
            event.preventDefault();
            var companyName = document.getElementById("company-name").value;
            var location = document.getElementById("location").value;
            var pocName = document.getElementById("poc-name").value;
            var email = document.getElementById("email").value;
            var mobile = document.getElementById("number").value;

            if (firstname == "") {
                document.getElementById("name").style.borderColor = "red";
            }
            if (moveIn == "" == "") {
                document.getElementById("move-in").style.borderColor = "red";
            }
            if (moveOut == "") {
                document.getElementById("move-out").style.borderColor = "red";
            }
            if (email == "") {
                document.getElementById("email").style.borderColor = "red";
            }
            if (mobile == "") {
                document.getElementById("number").style.borderColor = "red";
            }

            // if (mobile == "") {
            //     document.getElementById("utm_medium").style.borderColor = "red";
            // }
            // if (mobile == "") {
            //     document.getElementById("utm_source").style.borderColor = "red";
            // }
            // if (mobile == "") {
            //     document.getElementById("utm_campaign").style.borderColor = "red";
            // }
            // if (mobile == "") {
            //     document.getElementById("utm_content").style.borderColor = "red";
            // }
            if (companyName == "" && location == "" && pocName == "" && email == "" && mobile == "") {
                document.getElementById("company-name").style.borderColor = "red";
                document.getElementById("location").style.borderColor = "red";
                document.getElementById("poc-name").style.borderColor = "red";
                document.getElementById("email").style.borderColor = "red";
                document.getElementById("number").style.borderColor = "red";

                // document.getElementById("utm_medium").style.borderColor = "red";
                // document.getElementById("utm_source").style.borderColor = "red";
                // document.getElementById("utm_campaign").style.borderColor = "red";
                // document.getElementById("utm_content").style.borderColor = "red";
            }


            let obj = [{
                    "Attribute": "Company",
                    "Value": companyName
                },
                {
                    "Attribute": "mx_City",
                    "Value": location
                },
                {
                    "Attribute": "mx_POC_Name",
                    "Value": pocName
                },
                {
                    "Attribute": "EmailAddress",
                    "Value": email
                },
                {
                    "Attribute": "Phone",
                    "Value": mobile
                },
                {
                    "Attribute": "ProspectID",
                    "Value": "xxxxxxxx-d168-xxxx-9f8b-xxxx97xxxxxx"
                },
                {
                    "Attribute": "SearchBy",
                    "Value": "Phone"
                },
                {
                    "Attribute": "Source",
                    "Value": "Stay for a Few Nights"
                },
                {
                    "Attribute": "mx_utm_medium",
                    "Value": utm_medium
                },
                {
                    "Attribute": "mx_utm_source",
                    "Value": utm_source
                },
                {
                    "Attribute": "mx_utm_campaign",
                    "Value": utm_campaign
                },
                {
                    "Attribute": "mx_utm_content",
                    "Value": utm_content
                }
                // {
                //     "Attribute": "UTM Medium",
                //     "Value": utm_medium
                // },
                // {
                //     "Attribute": "UTM Source",
                //     "Value": utm_source
                // },
                // {
                //     "Attribute": "UTM Campaign",
                //     "Value": utm_campaign
                // },
                // {
                //     "Attribute": "UTM Content",
                //     "Value": utm_content
                // }
            ];
            console.log(obj);
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u%24r90762783ae2ff654ef80d4140a55cb40&secretKey=1d3e9e5234f49072cd263f51626b6c5b0be694ae",
                "method": "POST",

                "headers": {
                    "content-type": "application/json",
                    "cache-control": "no-cache"
                },
                "processData": false,
                "data": JSON.stringify(obj),

            }
            console.log(obj)
            jQuery.ajax({
                type: "POST",
                url: "https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u%24r90762783ae2ff654ef80d4140a55cb40&secretKey=1d3e9e5234f49072cd263f51626b6c5b0be694ae",
                "method": "POST",
                "headers": {
                    "content-type": "application/json"
                },
                data: JSON.stringify(obj), // serializes the form's elements.
                success: function(data) {
                    //alert(data);
                    // alert('Thank you! Our asset manager will get in touch with you.');
                    // jQuery('.wpcf7-form')[0].reset();
                   window.location = "https://www.bostonliving.com/thank-you.php"
                    // jQuery(".wpcf7-form").reset();
                    // show response from the php script.
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#form1").click(function() {
            event.preventDefault();
            var firstname = document.getElementById("name1").value;
            var moveIn = document.getElementById("move-in1").value;
            var email = document.getElementById("email1").value;
            var mobile = document.getElementById("number1").value;
            var utm_medium = document.getElementById("utm_medium").value;
            var utm_source = document.getElementById("utm_source").value;
            var utm_campaign = document.getElementById("utm_campaign").value;
            var utm_content = document.getElementById("utm_content").value;
            // var mobile = document.getElementById("utm_medium").value;
            // var mobile = document.getElementById("utm_source").value;
            // var mobile = document.getElementById("utm_campaign").value;
            // var mobile = document.getElementById("utm_content").value;
            if (firstname == "") {
                document.getElementById("name1").style.borderColor = "red";
            }
            if (moveIn == "" == "") {
                document.getElementById("move-in1").style.borderColor = "red";
            }

            if (email == "") {
                document.getElementById("email1").style.borderColor = "red";
            }
            if (mobile == "") {
                document.getElementById("number1").style.borderColor = "red";
            }

            // if (mobile == "") {
            //     document.getElementById("utm_medium").style.borderColor = "red";
            // }
            // if (mobile == "") {
            //     document.getElementById("utm_source").style.borderColor = "red";
            // }
            // if (mobile == "") {
            //     document.getElementById("utm_campaign").style.borderColor = "red";
            // }
            // if (mobile == "") {
            //     document.getElementById("utm_content").style.borderColor = "red";
            // }
            if (firstname == "" && moveIn == "" && email == "" && mobile == "") {
                document.getElementById("name1").style.borderColor = "red";
                document.getElementById("move-in1").style.borderColor = "red";
                document.getElementById("email1").style.borderColor = "red";
                document.getElementById("number1").style.borderColor = "red";


                // document.getElementById("utm_medium").style.borderColor = "red";
                // document.getElementById("utm_source").style.borderColor = "red";
                // document.getElementById("utm_campaign").style.borderColor = "red";
                // document.getElementById("utm_content").style.borderColor = "red";
            }
 
            let obj = [{
                    "Attribute": "FirstName",
                    "Value": firstname
                },
                {
                    "Attribute": "MoveOut",
                    "Value": moveIn
                },
                {
                    "Attribute": "EmailAddress",
                    "Value": email
                },
                {
                    "Attribute": "Phone",
                    "Value": mobile
                },
                {
                    "Attribute": "ProspectID",
                    "Value": "xxxxxxxx-d168-xxxx-9f8b-xxxx97xxxxxx"
                },
                {
                    "Attribute": "SearchBy",
                    "Value": "Phone"
                },
                {
                    "Attribute": "Source",
                    "Value": "Join the Community"
                },{
                    "Attribute": "mx_utm_medium",
                    "Value": utm_medium
                },
                {
                    "Attribute": "mx_utm_source",
                    "Value": utm_source
                },
                {
                    "Attribute": "mx_utm_campaign",
                    "Value": utm_campaign
                },
                {
                    "Attribute": "mx_utm_content",
                    "Value": utm_content
                }
                // {
                //     "Attribute": "UTM Medium",
                //     "Value": utm_medium
                // },
                // {
                //     "Attribute": "UTM Source",
                //     "Value": utm_source
                // },
                // {
                //     "Attribute": "UTM Campaign",
                //     "Value": utm_campaign
                // },
                // {
                //     "Attribute": "UTM Content",
                //     "Value": utm_content
                // }
            ];
            console.log(obj);
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u%24r90762783ae2ff654ef80d4140a55cb40&secretKey=1d3e9e5234f49072cd263f51626b6c5b0be694ae",
                "method": "POST",

                "headers": {
                    "content-type": "application/json",
                    "cache-control": "no-cache"
                },
                "processData": false,
                "data": JSON.stringify(obj),

            }
            console.log(obj)
            jQuery.ajax({
                type: "POST",
                url: "https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u%24r90762783ae2ff654ef80d4140a55cb40&secretKey=1d3e9e5234f49072cd263f51626b6c5b0be694ae",
                "method": "POST",
                "headers": {
                    "content-type": "application/json"
                },
                data: JSON.stringify(obj), // serializes the form's elements.
                success: function(data) {
                    //alert(data);
                    // alert('Thank you! Our asset manager will get in touch with you.');
                    // jQuery('.wpcf7-form')[0].reset();
                    window.location = "https://www.bostonliving.com/thank-you.php"
                    // jQuery(".wpcf7-form").reset();
                    // show response from the php script.
                }
            });
        });
    });
</script>


<div id="tab-drawer">
    <div class="_content">
        <button onclick="tabDrawer(event,'close')" class="_close">&times;</button>
        <div class="_tabs">
            <div class="_tab-btn">
                <button class="tablinks nights" onclick="tabFunction(event, 'nights')">Stay for a Few Nights</button>
                <button class="tablinks community" onclick="tabFunction(event, 'community')">Join the Community</button>
                <!--<button class="tablinks entreprise" onclick="tabFunction(event, 'entreprise')">Entreprise Sales</button>-->
            </div>

            <div style="display: block;" id="nights" class="_tab-content">
                <p>Experience Hassle Free living at our thoughtfully designed spaces for a few nights. </p>

                <form action="https://bostonliving.com/thank-you.php" class="bl-form" method="POST">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="name">Full Name*</label>
                                <input type="text" for="name" name="name" id="name" placeholder="Full Name" required />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="number">Contact Number*</label>
                                <input type="number" for="number" name="number" id="number" placeholder="Contact Number" required />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="email">Email Address*</label>
                                <input type="email" for="email" name="email" id="email" placeholder="Email Address" required />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="move-in">Move In*</label>
                                <input type="date" for="move-in" name="move-in" id="move-in" placeholder="Move IN" required />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="move-out">Move Out*</label>
                                <input type="date" for="move-out" name="move-out" id="move-out" placeholder="Move OUT" required />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <input type="hidden" for="utm_medium" id="utm_medium" name="utm_medium" value="" />
                                <input type="hidden" for="utm_source" id="utm_source" name="utm_source" value="" />
                                <input type="hidden" for="utm_campaign" id="utm_campaign" name="utm_campaign" value="" />
                                <input type="hidden" for="utm_content" id="utm_content" name="utm_content" value="" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <!-- <input type="submit" value="submit" name="submit"  class="hs-button primary large" data-reactid=".hbspt-forms-0.5.1.0"> -->
                                <button type="submit" name="submit" id="form" value="submit">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <div id="community" class="_tab-content">
                <p>With thoughtfully designed spaces, We are all about fostering a feeling of community through new ideas and new experiences. Fill the form below to join our happy group of residents.</p>

                <form action="https://bostonliving.com/thank-you.php" class="bl-form" method="POST">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="name">Full Name*</label>
                                <input type="text" for="name" name="name" id="name1" placeholder="Full Name" required />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="number">Contact Number*</label>
                                <input type="number" for="number" name="number" id="number1" placeholder="Contact Number" required />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="email">Email Address*</label>
                                <input type="email" for="email" name="email" id="email1" placeholder="Email Address" required />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="move-in">Move In*</label>
                                <input type="date" for="move-in" name="move-in" id="move-in1" placeholder="Move IN" required />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <input type="hidden" for="utm_medium" id="utm_medium" name="utm_medium" value="" />
                                <input type="hidden" for="utm_source" id="utm_source" name="utm_source" value="" />
                                <input type="hidden" for="utm_campaign" id="utm_campaign" name="utm_campaign" value="" />
                                <input type="hidden" for="utm_content" id="utm_content" name="utm_content" value="" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <!-- <input type="submit" value="Submit" name="submit"  class="hs-button1 primary large" data-reactid=".hbspt-forms-0.5.1.0"> -->
                                <button type="submit" name="submit" id="form1" value="submit">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div id="entreprise" class="_tab-content">
                <p>With thoughtfully designed spaces, We are all about fostering a feeling of community through new ideas and new experiences. Fill the form below to join our happy group of residents.</p>

                <form action="#" class="bl-form" method="POST">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="company-name">Your Company Name*</label>
                                <input type="text" for="company-name" name="company-name" id="company-name" placeholder="Your Company Name" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="location">Location*</label>
                                <input type="tel" for="location" name="location" id="location" placeholder="Location" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <p><b>Who can we contact</b></p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="poc-name">POC Name*</label>
                                <input type="text" for="poc-name" name="poc-name" id="poc-name" placeholder="POC Name" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="number">Contact Number*</label>
                                <input type="number" for="number" name="number" id="number" placeholder="Contact Number" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="email">Email Address*</label>
                                <input type="email" for="email" name="email" id="email" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <button class="primary2" type="submit" name="submit" value="submit">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div></div>

    <!--JS-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/app.js"></script>
    <!--FORM-->
    <script src="assets/js/jquery-validate.min.js" defer></script>
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
        jQuery("#enterprise-sales-submit").click(function() {
            jQuery("#enterprise-sales").validate({
                rules: {
                    cname: "required",
                    location: "required",
                    poc: "required",
                    email: "required",
                    phone: "required",
                    cname: {
                        required: true
                    },
                    location: {
                        required: true
                    },
                    poc: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        number: true
                    }
                },
                messages: {
                    email: {
                        required: "Please enter your email",
                        minlength: "Please enter a valid email address"
                    },
                    phone: {
                        required: "Please provide a valid number",
                        minlength: "Phone number must be min 10 characters long",
                        maxlength: "Phone number must not be more than 10 characters long"
                    }
                },
                submitHandler: function(form) {
                    jQuery.ajax({
                        url: jQuery(form).attr('action'),
                        type: 'POST',
                        data: jQuery(form).serialize(),
                        success: function(response) {
                            const form = document.forms['enterprise-sales']
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
                                jQuery(".enterprise-sales-message").fadeIn(400).text(response.responseText);
                            } else {
                                jQuery(".enterprise-sales-message").fadeIn(400).text('Oops! An error occured and your message could not be sent.');
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
</body>

</html>