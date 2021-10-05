
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ADBliv</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Settings CSS -->
    <link rel="stylesheet" href="/revslider/css/settings.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/css/responsive.css">
</head>
<body>
<!-- loading -->
<div id="loading">
    <div id="loading-center">
        <img src="/images/loader.gif" alt="loder">
    </div>
</div>
<!-- loading End -->
<!-- Header -->
@include('include.header')
<!-- Header END -->

<!-- Main Content -->


@yield('content')


<!-- Main Content END -->
@include('include.footer')

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/js/jquery-min.js" ></script>
<!-- popper  -->
<script src="/js/popper.min.js"></script>
<!--  bootstrap -->
<script src="/js/bootstrap.min.js" ></script>
<!-- Modernizr JavaScript -->
<script src="/js/modernizr.js"></script>
<!-- Appear JavaScript -->
<script src="/js/appear.min.js"></script>
<!-- Megamenu  -->
<script src="/js/mega_menu.min.js"></script>
<!-- Timeline JavaScript -->
<script src="/js/timeline.js"></script>
<!-- Wow -->
<script src="/js/wow.min.js"></script>
<!-- scrollme -->
<script src="/js/jquery.scrollme.min.js"></script>
<!-- countdown JavaScript -->
<script src="/js/countdown.js"></script>
<!-- waypoints JavaScript -->
<script src="/js/waypoints.min.js"></script>
<!-- Counterup JavaScript -->
<script src="/js/jquery.counterup.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope JavaScript -->
<script src="/js/isotope.pkgd.min.js"></script>
<!-- Progressbar JavaScript -->
<script src="/js/circle-progress.min.js"></script>
<!-- Canvas JavaScript -->
<script src="/js/canvasjs.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="/revslider/js/jquery.themepunch.tools.min.js"></script>
<script src="/revslider/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="/revslider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/revslider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/revslider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/revslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/revslider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/revslider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/revslider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/revslider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/revslider/js/extensions/revolution.extension.video.min.js"></script>
<!-- Retina JavaScript -->
<script src="/js/retina.min.js"></script>
<!-- Custom JavaScript -->
<script src="/js/custom.js"></script>
<script>
    var tpj=jQuery;

    var revapi3;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_3_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_3_1");
        }else{
            revapi3 = tpj("#rev_slider_3_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"//localhost/revslider-standalone/revslider-standalone//revslider/public//revslider/assets/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    onHoverStop:"off",
                },
                visibilityLevels:[1240,1024,778,480],
                gridwidth:1366,
                gridheight:790,
                lazyType:"none",
                parallax: {
                    type:"mouse",
                    origo:"enterpoint",
                    speed:400,
                    levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
                    type:"mouse",
                    disable_onmobile:"on"
                },
                shadow:0,
                spinner:"spinner0",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    }); /*ready*/
</script>
</body>
</html>
