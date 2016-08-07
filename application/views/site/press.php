<div class="main">
    <div class="slide press-header">
        <div class="container">
            <link rel="stylesheet" href="assets/site/js/owl/owl.carousel.css">
            <link rel="stylesheet" href="assets/site/js/owl/owl.theme.css">
            <style>
                #gallery-features-app { padding-top: 110px; }
                .owl-wrapper-outer { position: relative; }
                .owl-buttons { position: relative; }

                .owl-theme .owl-controls .owl-buttons div { background: none; display: none;}
                .owl-prev { float: left; }
                .owl-next { float: right; }

                .press-header {
                    background-color: #F0F0F0;
                    padding: 120px 0 0 0;
                    font-size: 18px;
                }
                .caption { padding: 0 130px; }
                a, a:hover { color: #63c8ed; text-decoration: none; }
                a i, a i:hover { color: #63c8ed; text-decoration: none; }
                #carousel-gallery p { margin: 30px 0; }
            </style>

            <script src="assets/site/js/owl/owl.carousel.js"></script>
            <div id="gallery-press" class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="carousel-gallery">
                        <div class="text-center">
                            <img src="assets/site/img/01_firstpage/logo_imore_on.png" nopin="nopin" class="img-responsive"/>
                            <div class="caption text-center">
                                <h1>"A worthy little gadget"</h1>
                                <p><i>Serenity Caldwell, iMore</i></p>
                                <p>… I love being able to quickly find my keys or my phone around the house, and I'm tempted to get a few more Chipolos for other important things I don't want to lose — my bookbag, for one …</p>
                                <p><a href="http://www.imore.com/never-lose-your-keys-or-phone-again-chipolo" target="_blank">Read more <i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="text-center">
                            <img src="assets/site/img/01_firstpage/logo_reuters_on.png" nopin="nopin" class="img-responsive"/>
                            <div class="caption text-center">
                                <h1>"In Japan, some of our Chipolo users are attaching them to their kids..."</h1>
                                <p><i>Natasha Baker, Reuters</i></p>
                                <p>"In Japan, some of our Chipolo users are attaching them to their kids so that when their kids are in the playground they will be notified if they go out of range," said Tadej Jevsevar, a co-founder of Chipolo, which is based in Slovenia.<br><br>If someone loses the smartphone, shaking the Chipolo tag can help them find it by making the phone ring, even if it is in silent mode, according to Jevsevar.</p>
                                <p><a href="http://www.reuters.com/article/2014/07/29/apps-lost-idUSL2N0Q411X20140729" target="_blank">Read more <i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="text-center">
                            <img src="assets/site/img/press/loadout.png" nopin="nopin" class="img-responsive"/>
                            <div class="caption text-center">
                                <h1>"...spend less than £20 on a Chipolo. You won’t regret it."</h1>
                                <p><i>Sarah Bennett, The Loadout</i></p>
                                <p>"The Slovenian manufacturer claims that the Chipolo has a 60 metre range and having given it a run for its money, I’d have to agree that it does.</p>
                                <p><a href="http://the-loadout.com/2015/04/chipolo/" target="_blank">Read more <i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="text-center">
                            <img src="assets/site/img/press/today.png" nopin="nopin" class="img-responsive"/>
                            <div class="caption text-center">
                                <h1>Kevin O’Connor, Today</h1>
                                <p><i>"You can attach it to anything..."</i></p>
                                <p><a href="http://www.today.com/video/today/56293015" target="_blank">press-play_videos <i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $("#carousel-gallery").owlCarousel({
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
                            var cHeight = $("#carousel-gallery").height();
                            $(".owl-buttons").css('top', -(cHeight / 1.5));
                            $(".owl-theme .owl-controls .owl-buttons div").fadeIn();
                        }, 500);
                    }
                });
            });
        </script>
    </div>

    <div class="slide press-chipolo">
        <div class="container">
            <div class="row">
                <div class="col-xs-7">
                    <div class="text-left">
                        <h1>Press Kit</h1>
                        <p>Chipolo is a gadget, perfect for anyone who wants to live a life without always looking for their wallet, keys or any other thing. It is a revolutionary way to find your things. Simply attach this beautiful Bluetooth device to anything and find it with your smartphone.</p>
                        <p>You can also use Chipolo to find your phone. And if you ever want to control your smartphone's camera for taking a selfie, use Chipolo as a remote control and take the best photo ever.</p>
                        <a class="fwb" href="https://www.dropbox.com/sh/v44zm48cefsvd6p/AACMavUBZlAqcyZykzZRtMwJa?dl=0" target="_blank"><span class="blue">Product images, Logos, Brochures and other information is available here <i class="fa fa-play"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <hr/>
            </div>
        </div>
    </div>

    <div class="slide press-media-link">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-12">
                    <h1>Press & Media Inquiry</h1>
                    <p>If you'd like to post a story, news article or blog about Chipolo, please fill out the form below and we'll provide all the necessary information.</p>
                </div>
            </div>


            <form role="form" method="post" action="/press">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="spaced"></div>
                        Fields marked with <span class="text-danger">*</span> are mandatory.					<div class="spaced"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="form-group">
                            <div class="control-group">
                                <label>First Name<span class="text-danger">*</span>:</label>
                                <input type="text" name="first_name" class="form-control" value="">
                                <p class="help-block" style="display:none;">This field is required!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="form-group">
                            <div class="control-group">
                                <label>Last Name<span class="text-danger">*</span>:</label>
                                <input type="text" name="last_name" class="form-control"  value="">
                                <p class="help-block" style="display:none;">This field is required!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="form-group">
                            <div class="control-group">
                                <label>E-mail Address<span class="text-danger">*</span>:</label>
                                <input type="text" name="email" class="form-control" value="">
                                <p class="help-block" style="display:none;">This field is required!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="form-group">
                            <div class="control-group">
                                <label>Phone Number<span class="text-danger">*</span>:</label>
                                <input type="text" name="phone" class="form-control" value="">
                                <p class="help-block" style="display:none;">This field is required!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="form-group">
                            <div class="control-group">
                                <label>Media name / Organization<span class="text-danger">*</span>:</label>
                                <input type="text" name="media_name" class="form-control" value="">
                                <p class="help-block" style="display:none;">This field is required!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="form-group">
                            <div class="control-group">
                                <label>Media Type / Outlet<span class="text-danger">*</span>:</label>
                                <select name="media_type" class="form-control">	
                                    <option value="0">-- Please select one --</option>
                                    <option value="Television">Televison</option>
                                    <option value="Printed Magazine">Printed Magazine</option>
                                    <option value="Online Magazine">Online Magazine</option>
                                    <option value="Newspaper">Newspaper</option>
                                    <option value="Blog">Blog</option>
                                    <option value="Radio">Radio</option>
                                    <option value="Other">Other</option></select>
                                </select>
                                <p class="help-block" style="display:none;">This field is required!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="form-group">
                            <div class="control-group">
                                <label>Website<span class="text-danger">*</span>:</label>
                                <input type="text" name="website" class="form-control" value="">
                                <p class="help-block" style="display:none;">This field is required!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="form-group">
                            <div class="control-group">
                                <label>Estimated number of monthly users / visitors<span class="text-danger">*</span>:</label>
                                <input type="text" name="no_of_users" class="form-control" value="">
                                <p class="help-block" style="display:none;">This field is required!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group control-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Message<span class="text-danger">*</span>:</label>
                            <textarea name="message" class="form-control" rows="8" placeholder="Please enter the details of your inquiry along a with short introduction about yourself and the media you work for."></textarea>
                            <p class="help-block" style="display:none;">This field is required!</p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="spaced"></div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-landing btn-blue"/>
                </div>
            </form>

            <div class="spaced"></div>
            <div class="row"><div class="col-lg-12"><address><strong>Chipolo d.o.o.</strong><br/>Gabrsko 12<br/>SI-1420 Trbovlje</br>Slovenia<br/><br/><i class='fa fa-phone'></i> +386 (0)3 56 60 566</div></div>
        </div>
    </div>

    <style>
        .press-chipolo .container {
            background: url(assets/site/img/press/Chipolo.jpg) no-repeat center right;
        }
        .footer, footer { display: none; }
    </style>
</div>
