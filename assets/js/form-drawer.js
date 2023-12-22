jQuery(document).ready(function(){
    //night form
    const scriptURL = 'https://script.google.com/macros/s/AKfycbye9-hjT7hucp-bdbvHBo_q9Qgaf_YxvCKD7ZVUfOtOatxskVoFmbe1juXMQbaBbH01sw/exec';
    jQuery("#form-drawer").click("#night-form-submit", function(){
        jQuery("#night-form").validate({
            rules: {
                fullname: "required",
                email: "required",
                phone: "required",
                // locations: "required",
                arrival: "required",
                departure: "required",
                fullname: {
                    required: true
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
                },
                // locations: {
                //     required: true
                // },
                arrival: {
                    required: true
                },
                departure: {
                    required: true
                }
            },
            messages: {
                fullname: "Please enter your full name",
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
const form = document.forms['night-form']

  fetch(scriptURL, { method: 'POST', body: new FormData(form)})

setTimeout(function () {
   window.location.href = "thank-you.html"; //will redirect to your blog page (an ex: blog.html)
}, 2000); //will call the function after 2 secs.
                },
                    error: function(response){
                        if (response.responseText !== '') {
                            jQuery(".night-form-message").fadeIn(400).text(response.responseText);
                        } else {
                            jQuery(".night-form-message").fadeIn(400).text('Oops! An error occured and your message could not be sent.');
                        }
                    }  
                });
            }
        });
    });
    //community form
    jQuery("#form-drawer").click("#community-form-submit", function(){
        jQuery("#community-form").validate({
            rules: {
                fullname: "required",
                email: "required",
                phone: "required",
                // locations: "required",
                arrival: "required",
                fullname: {
                    required: true
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
                },
                // locations: {
                //     required: true
                // },
                arrival: {
                    required: true
                }
            },
            messages: {
                fullname: "Please enter your full name",
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

const form = document.forms['community-form']


  fetch(scriptURL, { method: 'POST', body: new FormData(form)})

setTimeout(function () {
   window.location.href = "thank-you.html"; //will redirect to your blog page (an ex: blog.html)
}, 2000); //will call the function after 2 secs.
                    },
                    error: function(response){
                        if (response.responseText !== '') {
                            jQuery(".community-form-message").fadeIn(400).text(response.responseText);
                        } else {
                            jQuery(".community-form-message").fadeIn(400).text('Oops! An error occured and your message could not be sent.');
                        }
                    }  
                });
            }
        });
    });
});