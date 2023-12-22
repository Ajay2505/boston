/** bl-cursor 
jQuery(document).on("mousemove",function(event){
var mouse_x = event.pageX - jQuery(".bl-cursor").width()/2;
var mouse_y = event.pageY - jQuery(".bl-cursor").height()/2;
jQuery(".bl-cursor").css({"top":mouse_y,"left":mouse_x});
jQuery("._hover").hover(function(){jQuery(".bl-cursor").addClass("active")},function(){jQuery(".bl-cursor").removeClass("active")});
});
*/
/** url hash scroll */
if (window.location.hash) {
  var hash = window.location.hash,
    articlesW = 0;
  if (jQuery("body").hasClass("home")) {
    articlesW = jQuery("._articles").outerWidth();
  }
  if (jQuery(hash).length) {
    jQuery("html, body").animate(
      {
        scrollTop: jQuery(hash).offset().top + articlesW,
      },
      900,
      "swing"
    );
  }
  console.log(jQuery("._articles").width());
}
jQuery(document).ready(function () {
  /** marquee text */
  var mqchild = jQuery(".running-text");
  mqchild.each(function (index) {
    var childLength = jQuery(this).find(".marquee-child.one").width();
    jQuery(this).width(childLength);
  });

  /** header clone */
  jQuery("#menuToggle").on("click", function () {
    jQuery(this).toggleClass("active");
    jQuery("#menu").toggleClass("active");
    jQuery("#menu")
      .html(jQuery("#desktopMenu > li").clone())
      .find(".mega-menu,.sub-menu")
      .fadeOut(100, function () {
        jQuery(this).parents("li").addClass("_toggle");
      });
  });

  /** header mobile toggle */
  jQuery("#menu").on("click", "._toggle > a", function (event) {
    event.preventDefault();
    jQuery(this).toggleClass("expand").next().slideToggle(400);
  });

  /** newsletter form */
  const scriptURL =
    "https://script.google.com/macros/s/AKfycbye9-hjT7hucp-bdbvHBo_q9Qgaf_YxvCKD7ZVUfOtOatxskVoFmbe1juXMQbaBbH01sw/exec";
  jQuery("#newsletter-submit").click(function () {
    jQuery("#newsletter-form").validate({
      rules: {
        nemail: "required",
        nemail: {
          required: true,
          email: true,
        },
      },
      messages: {
        email: {
          required: "Please enter your email",
          minlength: "Please enter a valid email address",
        },
      },
      submitHandler: function (form) {
        jQuery.ajax({
          url: jQuery(form).attr("action"),
          type: "POST",
          data: jQuery(form).serialize(),
          success: function (response) {
            const form = document.forms["newsletter-form"];

            fetch(scriptURL, { method: "POST", body: new FormData(form) });

            jQuery(".newsletter-message").fadeIn(400).text(response);
          },
          error: function (response) {
            if (response.responseText !== "") {
              jQuery(".newsletter-message")
                .fadeIn(400)
                .text(response.responseText);
            } else {
              jQuery(".newsletter-message")
                .fadeIn(400)
                .text(
                  "Oops! An error occured and your message could not be sent."
                );
            }
          },
        });
      },
    });
  });
});
