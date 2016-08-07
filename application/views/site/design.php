


<div class="main">
    <div class="slide design-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="slide-content text-left">
                        <h1>Brilliant design.<br/>Pushed even further.</h1>
                        <p>The new Chipolo takes everything that made the previous generation beautiful, and advance it to a new level. It’s about the size of a coin and just 5mm thin. The smooth plastic design makes Chipolo feel as good as it looks. It comes in colors so fun, it’s hard to choose just one.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide design-colorful">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="slide-content">
                        <div class="color-wrap">
                            <p class="lead">For the colorful.</p>
                            <p class="landing-text">Color is more than just a hue. It expresses a feeling. Declares an alligance. Color reveals your personality. The Chipolo in nine fun colors does just that. It's not just for the lovers of color. It's for everyone.</p>

                            <img src="assets/site/img/03_design/colors/pink.png" class="img-responsive cp-picker" id="cp-pink" data-pin-no-hover="true">
                            <img src="assets/site/img/03_design/colors/red.png" class="img-responsive cp-picker" id="cp-red" data-pin-no-hover="true">
                            <img src="assets/site/img/03_design/colors/orange.png" class="img-responsive cp-picker" id="cp-orange" data-pin-no-hover="true">
                            <img src="assets/site/img/03_design/colors/yellow.png" class="img-responsive cp-picker" id="cp-yellow" data-pin-no-hover="true">
                            <img src="assets/site/img/03_design/colors/green.png" class="img-responsive cp-picker" id="cp-green" data-pin-no-hover="true">
                            <img src="assets/site/img/03_design/colors/blue.png" class="img-responsive cp-picker active" id="cp-blue" data-pin-no-hover="true">
                            <img src="assets/site/img/03_design/colors/purple.png" class="img-responsive cp-picker" id="cp-purple" data-pin-no-hover="true">
                            <img src="assets/site/img/03_design/colors/black.png" class="img-responsive cp-picker" id="cp-black" data-pin-no-hover="true">
                            <img src="assets/site/img/03_design/colors/white.png" class="img-responsive cp-picker" id="cp-white" data-pin-no-hover="true">

                            <div class="color-buttons">
                                <div id="color-name" class="text-center" style="color: #38abdb; margin-bottom: 20px; ">Deep Sky Blue</div>
                                <div class="btn-chipolo" data-color="pink" style="background-color: #eb64b0;"></div>
                                <div class="btn-chipolo" data-color="red" style="background-color: #ee3441;"></div>
                                <div class="btn-chipolo" data-color="orange" style="background-color: #fd8c25;"></div>
                                <div class="btn-chipolo" data-color="yellow" style="background-color: #fbc52d;"></div>
                                <div class="btn-chipolo" data-color="green" style="background-color: #adcd29;"></div>
                                <div class="btn-chipolo" data-color="blue" style="background-color: #38abdb;"></div>
                                <div class="btn-chipolo" data-color="purple" style="background-color: #783f97;"></div>
                                <div class="btn-chipolo" data-color="black" style="background-color: #4f4f4f;"></div>
                                <div class="btn-chipolo" data-color="white" style="background-color: #f1f1f1;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/site/js/jquery.color.js"></script>
        <script>
            $(function () {
                var color_names = {"pink": {"color": "#eb64b0", "name": "Bubblegum Pink"}, "red": {"color": "#ee3441", "name": "Cherry Red"}, "orange": {"color": "#fd8c25", "name": "Sunset Orange"}, "yellow": {"color": "#fbc52d", "name": "Sunflower Yellow"}, "green": {"color": "#adcd29", "name": "Lime Green"}, "blue": {"color": "#38abdb", "name": "Deep Sky Blue"}, "purple": {"color": "#783f97", "name": "Sapphire Purple"}, "black": {"color": "#4f4f4f", "name": "Jet Black"}, "white": {"color": "#ababab", "name": "Arctic White"}};
                $(".btn-chipolo").click(function (e) {
                    e.preventDefault();
                    var color = $(this).data("color");
                    if ($("#cp-" + color).hasClass("active")) {
                        return false;
                    }

                    $("#color-name").text(color_names[color]['name']);
                    $("#color-name").css({color: color_names[color]['color']});

                    $(".cp-picker.active").stop();
                    $("#cp-" + color).stop();

                    $(".cp-picker.active").animate({opacity: 0}, {duration: 800, queue: false, complete: function () {
                            $(this).removeClass("active");
                        }
                    });
                    $("#cp-" + color).animate({opacity: 1}, {duration: 500, queue: false, complete: function () {
                            $(this).addClass("active");
                        }
                    });
                });
            });
        </script>
    </div>

    <div class="slide design-swhw">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="slide-content text-left">
                        <h1 class="text-white">The Chipolo app and the Chipolo - a beautiful example of software and hardware designed together.</h1>
                        <p class="text-white">From the clean, toughtfully redesigned app, to the color-matched backgrounds- color is everywhere in the Chipolo app. So using it feels not just more delightful, but also more personal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <style>
            #gallery-features-app { padding-top: 110px; }
            .owl-wrapper-outer { position: relative; }
            .owl-buttons { position: relative; }

            .owl-theme .owl-controls .owl-buttons div { background: none; display: none;}
            .owl-prev { float: left; }
            .owl-next { float: right; }

            #carousel-titles {
                margin-bottom: 60px;
                font-size: 18px;
            }

            #carousel-titles span { cursor: pointer; }
            #carousel-titles span.active { color: #63c8ed; }
            .gallery-item {
                padding: 0 20%;
            }

        </style>
        <div id="gallery-features-app" class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="carousel-titles" class="text-center">
                    <span id="c-1" data-item-id="1" class="">Ring</span> 			    							    <span id="c-2" data-item-id="2" class="">Shake & Find</span> 			    							    <span id="c-3" data-item-id="3" class="">Last seen</span> 			    							    <span id="c-4" data-item-id="4" class="">Community</span> 			    							    <span id="c-5" data-item-id="5" class="">Full-screen Map.</span> 			    							    <span id="c-6" data-item-id="6" class="">Sharing</span> 			    							    <span id="c-7" data-item-id="7" class="">List view</span> 			    							    <span id="c-8" data-item-id="8" class="">Selfie</span> 			    							</div>
                <div id="carousel-gallery2">
                    <div class="gallery-item text-center">
                        <img src="assets/site/img/03_design/gallery/01_Ring_2500.jpg" nopin="nopin" class="img-responsive"/>
                        <div class="caption text-center">
                            <h3>Ring your things.</h3>
                            <p>Ring your lost keys or wallet just like you'd call a lost phone.</p>
                        </div>
                    </div>
                    <div class="gallery-item text-center">
                        <img src="assets/site/img/03_design/gallery/02_Shake_find_2500.jpg" nopin="nopin" class="img-responsive"/>
                        <div class="caption text-center">
                            <h3>Find your phone. Near or Far.</h3>
                            <p>Shake your Chipolo to make your lost phone ring or use the Web app to ring it - even if it's on silent.</p>
                        </div>
                    </div>
                    <div class="gallery-item text-center">
                        <img src="assets/site/img/03_design/gallery/03_Last_seen_2500.jpg" nopin="nopin" class="img-responsive"/>
                        <div class="caption text-center">
                            <h3>See where you had it.</h3>
                            <p>When your item is left behind, you will receive a notification and the Chipolo app automatically records the last time and place it saw your item.</p>
                        </div>
                    </div>
                    <div class="gallery-item text-center">
                        <img src="assets/site/img/03_design/gallery/04_Community_2500.jpg" nopin="nopin" class="img-responsive"/>
                        <div class="caption text-center">
                            <h3>Ask others to help.</h3>
                            <p>Expand your search using all Chipolo apps in our huge community. When you search for your Chipolo, you aren't just searching with your phone, but with everyone's phone running the app.</p>
                        </div>
                    </div>
                    <div class="gallery-item text-center">
                        <img src="assets/site/img/03_design/gallery/05_Map_5000.jpg" nopin="nopin" class="img-responsive"/>
                        <div class="caption text-center">
                            <h3>Full-screen Map.</h3>
                            <p>You can see all your Chipolos on a full screen map.</p>
                        </div>
                    </div>
                    <div class="gallery-item text-center">
                        <img src="assets/site/img/03_design/gallery/06_Sharing_2500.jpg" nopin="nopin" class="img-responsive"/>
                        <div class="caption text-center">
                            <h3>Share One to One - Or One to Many.</h3>
                            <p>With the Chipolo Network, you can share, say, the Chipolo that is attached to your car keys with a specific person or multiple people.</p>
                        </div>
                    </div>
                    <div class="gallery-item text-center">
                        <img src="assets/site/img/03_design/gallery/07_List_view_2500.jpg" nopin="nopin" class="img-responsive"/>
                        <div class="caption text-center">
                            <h3>The More the Merrier</h3>
                            <p>You can add up to 9 Chipolos to one account.*<br><br><small>On Android you can have up to 4 Chipolos per account.</small></p>
                        </div>
                    </div>
                    <div class="gallery-item text-center">
                        <img src="assets/site/img/03_design/gallery/08_Selfie_2500.jpg" nopin="nopin" class="img-responsive"/>
                        <div class="caption text-center">
                            <h3>Take a Selfie with a style.</h3>
                            <p>Just set the smartphone in the best position and shake the Chipolo. It will count down with a sound until the app will take an amazing photo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $("#carousel-gallery2").owlCarousel({
                    'autoPlay': true,
                    'singleItem': true,
                    'pagination': false,
                    'navigation': true,
                    'autoHeight': false,
                    'itemsDesktop': false,
                    'stopOnHover': true,
                    'rewindNav': true,
                    'responsive': true,
                    'mouseDrag': false,
                    'touchDrag': false,
                    'addClassActive': true,
                    'navigationText': ['<img src="assets/site/img/arrow_left_dark.png">', '<img src="assets/site/img/arrow_right_dark.png">'],
                    'afterInit': function () {
                        setTimeout(function () {
                            var cHeight = $("#carousel-gallery2").height();
                            $(".owl-buttons").css('top', -(cHeight / 1.5));
                            $(".owl-theme .owl-controls .owl-buttons div").fadeIn();
                        }, 500);
                    },
                    'afterMove': function () {
                        var owl = $("#carousel-gallery2").data('owlCarousel');
                        $('#carousel-titles span').removeClass('active');
                        $('#c-' + (owl.currentItem + 1)).addClass('active');
                    }
                });
                $('#carousel-titles span').click(function () {
                    var owl = $("#carousel-gallery2").data('owlCarousel');
                    $('#carousel-titles span').removeClass('active');
                    $(this).addClass('active');
                    var index = $(this).attr('data-item-id');
                    owl.goTo(index - 1);
                });
            });
        </script>
    </div>

    <div class="slide design-battery">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="slide-content text-left">
                        <h1>Long battery life.</h1>
                        <p>We designed the Chipolo so that the battery could easily be replaced. With so many features packed in so little space, it has an incredible battery life of up to 6 months. You can track your items everyday. And with every Chipolo box comes an extra battery so you are covered for 1 year.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide design-reviews">
        <div class="container">
            <link rel="stylesheet" href="assets/site/js/owl/owl.carousel.css">
            <link rel="stylesheet" href="assets/site/js/owl/owl.theme.css">
            <style>
                #carousel-gallery { padding: 60px 0 0 0; }

                .owl-wrapper-outer { position: relative; }
                .owl-buttons { position: relative; }

                .owl-theme .owl-controls .owl-buttons div { background: none; display: none;}
                .owl-prev { float: left; }
                .owl-next { float: right; }

                .design-reviews {
                    background-color: #F0F0F0;
                    font-size: 18px;
                }
                .caption { padding: 0 130px; }
                a, a:link, a:active, a:hover { text-decoration: none; }
                a i, a i:hover { text-decoration: none; }
                #carousel-gallery p { xmargin: 30px 0; }
            </style>

            
            <script src="assets/site/js/owl/owl.carousel.js" type="text/javascript"></script>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="carousel-gallery">
                        <div class="text-center">
                            <a href="http://geeko.lesoir.be/2015/11/23/test-chipolo-un-tag-nfc-pour-retrouver-ses-cles-et-capturer-le-selfie-parfait/" target="_blank">
                                <img src="assets/site/img/01_firstpage/geeko.png" nopin="nopin" class="img-responsive"/>
                                <div class="caption text-center">
                                    <h3>"Being stylish and trendy, the tag is incredible thanks to the very precise mobile app."</h3>
                                    <p><i>Etienne Froment, Geeko, Le Soir</i></p>
                                </div>
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="http://www.androidpit.es/chipolo-analisis" target="_blank">
                                <img src="assets/site/img/01_firstpage/androidpit.png" nopin="nopin" class="img-responsive"/>
                                <div class="caption text-center">
                                    <h3>"Why is Chipolo genious? It is discreet and stylish, available in nine colors. It has matte texture which is a perfect fit to your items."</h3>
                                    <p><i>Luis Ortega, Androidpit</i></p>
                                </div>
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="http://www.thetestpit.com/2015/11/review-chipolo-20.html" target="_blank">
                                <img src="assets/site/img/01_firstpage/thetestpit.png" nopin="nopin" class="img-responsive"/>
                                <div class="caption text-center">
                                    <h3>"It's pretty too, and feels nice to both hold and to have it dangling away on what ever item you're most precious about. Well done guys."</h3>
                                    <p><i>The Test Pit</i></p>
                                </div>
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="http://www.gadgetgear.nl/2015/11/test-chipolo-sleutelhanger/" target="_blank">
                                <img src="assets/site/img/01_firstpage/gadgetgear.png" nopin="nopin" class="img-responsive"/>
                                <div class="caption text-center">
                                    <h3>"The pendant is almost as thin as the button cell battery which powers the unit. This allows you to easily hang a Chipolo to your bags, keys, or put it in a pocket."</h3>
                                    <p><i>Gadgetgear</i></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $("#carousel-gallery").owlCarousel({
                    'autoPlay': true, 'singleItem': true,
                    'pagination': false, 'navigation': true,
                    'autoHeight': false, 'itemsDesktop': false,
                    'stopOnHover': true, 'rewindNav': true,
                    'responsive': true, 'mouseDrag': false,
                    'touchDrag': false, 'addClassActive': true,
                    'navigationText': ['<img src="assets/site/img/arrow_left_dark.png">', '<img src="assets/site/img/arrow_right_dark.png">'],
                    'afterInit': function () {
                        setTimeout(function () {
                            var cHeight = $("#carousel-gallery").height();
                            $("#carousel-gallery .owl-buttons").css('top', -(cHeight / 1.5));
                            $("#carousel-gallery .owl-theme .owl-controls .owl-buttons div").fadeIn();
                        }, 500);
                    }
                });
            });
        </script>
    </div>

    <script src="assets/site/js/notify.min.js"></script>
    <script src="assets/site/js/jquery_effects.min.js"></script>
    <script src="assets/site/js/waypoints.min.js"></script>
    <div id="specs" class="slide design-specs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 spaced">
                    <h1>There's innovation in every nanometer.</h1>
                    <p>Thanks to the integrated Bluetooth 4.0 Low Energy connection, the Chipolo is completely wireless and has a long battery life. It even has an integrated temperature sensor and with a built-in accelerometer it is reasonably called a smart item finder.</p>
                </div>
            </div>
            <div class="row row-bluetooth">
                <div class="embed-responsive embed-responsive-16by9">
                    <div class="vc">
                        <video id="vidco" width="1920" height="1040" class="embed-responsive-item" style="background-color: #fff;">
                            <source src="assets/site/img/03_design/video/Chipollo_Animacija_Final_1920x1040_2015.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <div class="row row-specs">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="circle" id="dim">0 mm</div>
                    <p class="xl">Dimensions:</p>
                    <p>Diameter: 35 mm (1.37 inches)<br/>Thickness: 5 mm (0.2 inches)</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="circle" id="rng">0 m</div>
                    <p class="xl">Range:</p>
                    <p>Approximately 60 meters<br/>(200 feet) within line of sight</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="circle" id="bat">0 mo</div>
                    <p class="xl">Battery:</p>
                    <p>Battery can be replaced<br/>Type CR2025<br/>Lasts up to 6 months</p>
                </div>
            </div>
        </div>
        <script>
            $(function () {
                var animated = false;
                $('#specs').waypoint(function () {
                    var vid = document.getElementById("vidco");
                    if (!animated) {
                        animated = true;
                        vid.play();
                        valueAnimation(0, 36, "#dim", " mm");
                        valueAnimation(0, 61, "#rng", " m");
                        valueAnimation(0, 7, "#bat", " mo");
                    }
                }, {offset: '25%'});

                function valueAnimation(start, stop, element, append_text)
                {
                    $({value: start}).delay(1000).animate({value: stop}, {
                        duration: 2000,
                        easing: 'easeOutCirc',
                        step: function () {
                            $(element).text(parseInt(this.value) + append_text);
                        }
                    });
                }
            });
        </script>
    </div>

    <div class="slide design-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-21">
                    <div class="slide-content text-right">
                        <h1>What's in the box?</h1>
                        <p>1 Chipolo<br/>Extra battery<br/>Key ring<br/>Documentation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<img src="https://p1.zemanta.com/p/58/design/" height="1" width="1" border="0" alt="" />	

<style>
    .footer{
        display:none;
    }

    .design-header  {
        padding: 140px 0;
        background: url(assets/site/img/03_design/1_beautiful_design_1900.jpg) no-repeat center center;
    }

    .design-swhw {
        padding: 140px 0;
        background: url(assets/site/img/03_design/02_Beautiful_design_1900.jpg) no-repeat center center;
    }

    .design-battery {
        padding: 140px 0 220px 0;
        background: url(assets/site/img/03_design/05_Battery_1900.jpg) no-repeat center center;
    }

    .design-box {
        padding: 220px 0;
        background: url(assets/site/img/03_design/3_box_1900.jpg) no-repeat center center;
    }

    .design-bumper {
        padding: 140px 0;
        background: url(assets/site/img/03_design/4_bumper_1900.jpg) no-repeat center center;
    }

</style>