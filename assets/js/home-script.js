const winWidth = winW = jQuery(window).width(),
exploreBox = document.querySelector('.explore'),
articleBox = document.querySelector('._articles');
/** Waves */
createWaves('grey-waves', '#efeeef');

jQuery(document).ready(function(){
    /** Slick Slides */
    jQuery('._location-slides').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        variableWidth: false,
        dots: false,
        infinite: false
    });
    /** run shape animation */
    shapeAnimation();
    if(!isMobile){
        horizontalScroll();
        /** four hover boxes */
        var shades = jQuery('.testimonial .shades');
        function shadeboxes(){
            var activeBoxHeight,activeBoxWidth;
            shades.each(function(){
                if(jQuery(this).hasClass('active')){
                    jQuery(this).width( winWidth/2 );
                    setTimeout(() => {
                        activeBoxHeight = jQuery(this).height();
                        activeBoxWidth = jQuery(this).find('.box').width();
                        shades.height(activeBoxHeight).find('.box').width(activeBoxWidth);
                    }, 750);
                }else{
                    jQuery(this).width( (winWidth/2)/3 );
                }
            });
        }
        shadeboxes();
        shades.hover(function(){
            shades.removeClass('active');
            jQuery(this).addClass('active');
            shadeboxes();
        });
    }

});

/** Shape Animation */
shapeAnimation = () => {
    const tl = gsap.timeline({ repeat:-1, defaults: {duration: 0.8}}),
        shape1 = document.querySelector(".bl-shape1"),
        trail1 = document.querySelector(".bl-shape1-trail1"),
        trail2 = document.querySelector(".bl-shape1-trail2"),
        allshape = document.querySelector(".mask-images-drag"),
        maskImg = document.querySelectorAll(".mask-img-item");

    tl.to(maskImg[0], 0, {autoAlpha:1})
    .to(shape1, {morphSVG:".bl-shape2"})
    .to(allshape, {y:'-20px'}, "-=0.8")
    .to(trail1, {morphSVG:".bl-shape2-trail1"}, "-=0.8")
    .to(trail2, {morphSVG:".bl-shape2-trail2"}, "-=0.8")
    .to(maskImg[0], 1, {autoAlpha:0}, "+=0.4")

    .to(maskImg[1], 0, {autoAlpha:1})
    .to(shape1, {morphSVG:".bl-shape3"})
    .to(allshape, {y:'0px'}, "-=0.8")
    .to(trail1, {morphSVG:".bl-shape3-trail1"}, "-=0.8")
    .to(trail2, {morphSVG:".bl-shape3-trail2"}, "-=0.8")
    .to(maskImg[1], 1, {autoAlpha:0}, "+=0.4")

    .to(maskImg[2], 0, {autoAlpha:1})
    .to(shape1, {morphSVG:shape1})
    .to(allshape, {y:'20px'}, "-=0.8")
    .to(trail1, {morphSVG:trail1}, "-=0.8")
    .to(trail2, {morphSVG:trail2}, "-=0.8")
    .to(maskImg[2], 1, {autoAlpha:0}, "+=0.4");

    tl.play();

    tl.to(maskImg[3], 0, {autoAlpha:1})
    .to(shape1, {morphSVG:".bl-shape2"})
    .to(allshape, {y:'20px'}, "-=0.8")
    .to(trail1, {morphSVG:trail1}, "-=0.8")
    .to(trail2, {morphSVG:trail2}, "-=0.8")
    .to(maskImg[3], 1, {autoAlpha:0}, "+=0.4");
    
    tl.to(maskImg[4], 0, {autoAlpha:1})
    .to(shape1, {morphSVG:".bl-shape3"})
    .to(allshape, {y:'20px'}, "-=0.8")
    .to(trail1, {morphSVG:trail1}, "-=0.8")
    .to(trail2, {morphSVG:trail2}, "-=0.8")
    .to(maskImg[4], 1, {autoAlpha:0}, "+=0.4");

    tl.play();
}

/** Horizontal Scroll */
function horizontalScroll(){
    let container = document.querySelector("._articles");
    gsap.to(container, {
    x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
    ease: "none",
    scrollTrigger: {
        trigger: container,
        invalidateOnRefresh: true,
        pin: true,
        toggleClass: 'active',
        scrub: 1,
        end: () => "+=" + container.offsetWidth
    }
    });
}