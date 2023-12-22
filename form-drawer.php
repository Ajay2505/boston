<!--Tab Drawer-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script>
    $(document).ready(function() {
        $("#form").click(function() {
            event.preventDefault();
            var firstname = document.getElementById("name").value;
            var moveIn = document.getElementById("move-in").value;
            var moveOut = document.getElementById("move-out").value;
            var email = document.getElementById("email").value;
            var mobile = document.getElementById("number").value;
            var utm_medium = document.getElementById("utm_medium").value;
            var utm_source = document.getElementById("utm_source").value;
            var utm_campaign = document.getElementById("utm_campaign").value;
            var utm_content = document.getElementById("utm_content").value;

            // var mobile = document.getElementById("utm_medium").value;
            // var mobile = document.getElementById("utm_source").value;
            // var mobile = document.getElementById("utm_campaign").value;
            // var mobile = document.getElementById("utm_content").value;

            if (firstname == "") {
                document.getElementById("name").style.borderColor = "red";
            }
            if (moveIn == "") {
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
            if (firstname == "" && moveIn == "" && moveOut == "" && email == "" && mobile == "") {
                document.getElementById("name").style.borderColor = "red";
                document.getElementById("move-in").style.borderColor = "red";
                document.getElementById("move-out").style.borderColor = "red";
                document.getElementById("email").style.borderColor = "red";
                document.getElementById("number").style.borderColor = "red";

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
                    "Attribute": "MoveIn",
                    "Value": moveOut
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
                    "Value": "Stay for a Few Nights"
                },
                {
                    "Attribute": "utm_medium",
                    "Value": utm_medium
                },
                {
                    "Attribute": "utm_source",
                    "Value": utm_source
                },
                {
                    "Attribute": "utm_campaign",
                    "Value": utm_campaign
                },
                {
                    "Attribute": "utm_content",
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
                   window.location.href = "https://dev.thewebgeek.me/boston-living/thank-you.php"
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
            if (moveIn == "") {
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
                    "Attribute": "utm_medium",
                    "Value": utm_medium
                },
                {
                    "Attribute": "utm_source",
                    "Value": utm_source
                },
                {
                    "Attribute": "utm_campaign",
                    "Value": utm_campaign
                },
                {
                    "Attribute": "utm_content",
                    "Value": utm_content
                },
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
                    window.location.href = "https://dev.thewebgeek.me/boston-living/thank-you.php"
                    // jQuery(".wpcf7-form").reset();
                    // show response from the php script.
                }
            });
        });
    });
</script>

<?php
/*$utm_medium = "";
$utm_source = "";
$utm_campaign = "";
$utm_content = "";
if (isset($_REQUEST['utm_medium'])) {
    $utm_medium = $_REQUEST['utm_medium'];
    setcookie('utm_medium', $_REQUEST['utm_medium'], strtotime('+7 day'), "/");
} else {
    $utm_medium = $_COOKIE['utm_medium'];
}

if (isset($_REQUEST['utm_source'])) {
    $utm_source = $_REQUEST['utm_source'];
    setcookie('utm_source', $_REQUEST['utm_source'], strtotime('+7 day'), "/");
} else {
    $utm_source = $_COOKIE['utm_source'];
}

if (isset($_REQUEST['utm_campaign'])) {
    $utm_campaign = $_REQUEST['utm_campaign'];
    setcookie('utm_campaign', $_REQUEST['utm_campaign'], strtotime('+7 day'), "/");
} else {
    $utm_campaign = $_COOKIE['utm_campaign'];
}

if (isset($_REQUEST['utm_content'])) {
    $utm_content = $_REQUEST['utm_content'];
    setcookie('utm_content', $_REQUEST['utm_content'], strtotime('+7 day'), "/");
} else {
    $utm_content = $_COOKIE['utm_content'];
}*/
?>

<div id="tab-drawer">
    <div class="_content">
        <button onclick="tabDrawer(event,'close')" class="_close">&times;</button>
        <div class="_tabs">
            <div class="_tab-btn">
                <button class="tablinks nights" onclick="tabFunction(event, 'nights')">Stay for a Few Nights</button>
                <button class="tablinks community" onclick="tabFunction(event, 'community')">Join the Community</button>
                <button class="tablinks entreprise" onclick="tabFunction(event, 'entreprise')">Corporate Stays</button>
            </div>

            <div style="display: block;" id="nights" class="_tab-content">
                <p>Experience Hassle Free living at our thoughtfully designed spaces for a few nights. </p>

                <form action="https://dev.thewebgeek.me/boston-living/thank-you.php" class="bl-form" method="POST">
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
                                <input type="hidden" for="utm_medium" id="utm_medium" name="utm_medium" value="<?php echo $utm_medium; ?>" />
                                <input type="hidden" for="utm_source" id="utm_source" name="utm_source" value="<?php echo $utm_source; ?>" />
                                <input type="hidden" for="utm_campaign" id="utm_campaign" name="utm_campaign" value="<?php echo $utm_campaign; ?>" />
                                <input type="hidden" for="utm_content" id="utm_content" name="utm_content" value="<?php echo $utm_content; ?>" />
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

                <form action="https://dev.thewebgeek.me/boston-living/thank-you.php" class="bl-form" method="POST">
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
                                <input type="hidden" for="utm_medium" id="utm_medium" name="utm_medium" value="<?php echo $utm_medium; ?>" />
                                <input type="hidden" for="utm_source" id="utm_source" name="utm_source" value="<?php echo $utm_source; ?>" />
                                <input type="hidden" for="utm_campaign" id="utm_campaign" name="utm_campaign" value="<?php echo $utm_campaign; ?>" />
                                <input type="hidden" for="utm_content" id="utm_content" name="utm_content" value="<?php echo $utm_content; ?>" />
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

                <form  action="https://dev.thewebgeek.me/boston-living/thank-you.php" class="bl-form" method="POST">
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
</div>