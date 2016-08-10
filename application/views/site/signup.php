<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>

        <meta charset="utf-8" />
        <meta name="author" content="Chipolo d.o.o." />
        <meta name="keywords" content="chipolo, čipolo, cheapolo, chipollo, keyfinder, obesek za ključe, obesek za kljuce, bluetooth finder, sticknfind, iphone keyfinder, movement alarm, hipkey, proximity, find, keyfinder, find mode, high tech, technology" />
        <meta name="description" content="Chipolo is a revolutionary new product that helps you keep an eye on your valuables. Whether keeping track of your phone, keys or even your pets, Chipolo will help protect the things you love most. Simply attach it to the item of your choice and you're ready to go. Chipolo - Nothing is lost." />
        <meta name="msapplication-config" content="none" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url(); ?>assets/site/css/app-0a5bff32fc.css" rel="stylesheet" type='text/css' />

        <script type="text/javascript" class="cc-onconsent-analytics">
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-41263747-4', 'auto');
            ga('require', 'ecommerce');
            ga('require', 'linkid', 'linkid.js');
            ga('require', 'displayfeatures');
            ga('require', 'linker');
            ga('send', 'pageview');
        </script>    <script type="text/javascript">
        String.prototype.replaceArray = function (find, replace) {
            var replaceString = this;
            for (var i = 0; i < find.length; i++) {
                replaceString = replaceString.replace(find[i], replace[i]);
            }
            return replaceString;
        };

        var jsTrans = {"auth": {"successful_deauthorized": "You have successfully deauthorized {:provider:} with your account.", "success_provider_added": "You have successfully authorized {:provider:} with your account.", "current_password_invalid": "The current password is invalid", "account_confirmation_delete": "We sent you an email for account delete confirmation.", "error": "Error while processing your request. Please try later."}, "legacy": {"address_unvailable": "Address unavailable", "latitude": "Latitude", "longitude": "Longitude", "no_connected_devices": "No connected devices", "sharing_request": "You have successfully <strong>{:action:}<\/strong> a sharing request for <strong>{:chipolo_name:}<\/strong> from <strong>{:first_name:} {:last_name:}<\/strong>"}, "network": {"settings_updated": "Account settings were updated successfully.", "error": "Ups... we seem to have encountered an error. Please try again.", "chipolo_lost": "Your {:typeString:} was marked as lost. The Chipolo Community will now actively search for it. We will notify you when it's found", "alert_to_device": "We've sent an alert to your device. It will ring for about 10 seconds.", "send_message": "Send message", "message_sent": "Message sent successfully!", "location_update_success": "Location update request was sent successfully. The Chipolos locations will be updated automatically within the next 30 seconds.", "auth_fail_redirect": "Your session has expired. You will be redirected to the Sign in page.", "auth_fail_refresh": "An error occured. Please refresh the page!", "not_available": "not available", "same_day": "[Today at] {:time_format}", "next_day": "[Tomorrow at] {:time_format}", "next_week": "{:long_day_format} [at] {:time_format}", "last_day": "[Yesterday at] {:time_format}", "last_week": "[Last] {:long_day_format} [at] {:time_format}", "last_seen": "Last seen: {:last_seen}", "disconnnected_from_provider_type": "Disconnect from {:provider_type}", "connect_to_provider_type": "Connect with {:provider_type}", "last_known_location": "Last known location:", "with_full_name": "With {:full_name}", "glad_to_find_it": "We are glad you found your {:type}.", "a_few_seconds_ago": "a few seconds ago", "unavailable": "unavailable", "location_unavailable": "Location unavailable.", "updating": "updating..."}};
        </script>

    </head>

    <body class="community-signup">

        <div id="header">
            <div class="container">
                <div class="col-md-6">
                    <a href="/" class="navbar-brand"><img src="<?php echo base_url(); ?>assets/site/img/logo.png" width="45" height="45" class="img-responsive"></a>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="list-inline header-menu">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>shop">Shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
<div id="content">
        <div class="container-fluid">
        <div class="row text-center">

            <div class="col-xs-12 login-header">
    <div class="spacer">
        <h1>Sign up to Chipolo Community</h1>
        <h3>Become part of the world's fastest growing network dedicated to finding lost items.</h3>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p></p>
                    <!--p><a href="#" class="link-emphasized">Learn more</a></p-->
                </div>
            </div>
        </div>

    </div>
</div>

            <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">

                <div class="form-placeholder">
                    <form class="form signin-form"  accept-charset="utf-8" method="post" action="<?php echo base_url() ?>user/create_member" role="form">

                       
                        
                        <div class="form-group ">
                            <input type="text" id="first_name_id" name="fullname" class="form-control" value="" placeholder="Full name">
                                                    </div>
                       
                        <div class="form-group ">
                            <input type="text" id="email_id" name="email" class="form-control" value="" placeholder="E-mail">
                                                    </div>
                        <div class="form-group ">
                            <input type="password" id="password_id" name="password" class="form-control" placeholder="Password">
                                                    </div>
                        <div class="form-group ">
                            <input type="password" id="confirmed_password_id" name="password2" class="form-control" placeholder="Confirm password">
                                                    </div>

                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-blue" id="chipolo_signup" name='signup'>Sign up</button>
                        </div>

                        <div class="form-group row-or">
                            <div class="row">
                                <div class="col-xs-5 row-hr"><hr></div>
                                <div class="col-xs-2 text-center">or</div>
                                <div class="col-xs-5 row-hr"><hr></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="button" class="form-control btn btn-primary social-login" data-provider="facebook"><i class="fa fa-facebook float-left"></i> Sign In with Facebook</button>
                        </div>
                        <div class="form-group">
                            <button type="button" class="form-control btn btn-danger social-login" data-provider="google"><i class="fa fa-google float-left"></i> Sign In with Google</button>
                        </div>
                    </form>

                    <div class="row-or"><hr></div>

                </div>

                <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <p>Already have an account? <a href="<?php echo base_url(); ?>user/login" class="link-emphasized">Sign in</a></p>
                    <p>By registering to the Chipolo Network you agree with our <a class="link-emphasized" href="https://chipolo.net/terms-of-use">Terms and Conditions</a></p>
                </div>

            </div>
        </div>
    </div>
</div>

        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12  text-left ">
                        <ul class="footer-main list-inline">
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>features">Features</a></li>
                            <li><a href="<?php echo base_url(); ?>design">Design</a></li>
                            <li><a href="<?php echo base_url(); ?>app">App</a></li>
                            <li><a href="<?php echo base_url(); ?>network-features">Network</a></li>
                            <li><a href="h<?php echo base_url(); ?>support">Support</a></li>
                            <li><a href="<?php echo base_url(); ?>jobs">Jobs</a></li>
                            <li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12  text-right ">
                        <ul class="footer-social list-inline">
                            <li><a href="<?php echo base_url(); ?>business" target="_blank">Business</a></li>
                            <li><a href="<?php echo base_url(); ?>kickstarter" target="_blank">Kickstarter</a></li>
                            <li><a href="<?php echo base_url(); ?>press" target="_blank">Press</a></li>
                            <li><a href="<?php echo base_url(); ?>privacy-policy" target="_blank">Privacy</a></li>
                            <li><a href="<?php echo base_url(); ?>terms-of-use" target="_blank">Terms</a></li>
                            <li><a href="<?php echo base_url(); ?>contact" target="_blank">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12  text-left ">
                        <ul class="footer-sub list-inline">
                            <li><a href="https://www.facebook.com/ChipoloTM">Facebook</a></li>
                            <li><a href="https://twitter.com/ChipoloTM">Twitter</a></li>
                            <li><a href="http://www.pinterest.com/chipolotm/">Pinterest</a></li>
                            <li><a href="https://instagram.com/chipolo_tm/">Instagram</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12  text-right ">
                        <p class="copyright">&copy; 2016 Chipolo d.o.o., All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>

        <script>
            window.intercomSettings = {
                app_id: "wjjw3w95"
            };
        </script>
        <script>(function () {
        var w = window;var ic = w.Intercom;if (typeof ic === "function") {
            ic('reattach_activator');ic('update', intercomSettings);} else {
            var d = document;var i = function () {
                i.c(arguments)};i.q = [];i.c = function (args) {
                i.q.push(args)
            };
            w.Intercom = i;
            function l() {
                var s = d.createElement('script');s.type = 'text/javascript';
                s.async = true;
                s.src = 'https://widget.intercom.io/widget/wjjw3w95';
                var x = d.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })()</script>

        <script src="<?php echo base_url(); ?>assets/site/js/common-08f5f703e2.js"></script>
        <script type="text/javascript">
            $(function () {
                Auth.initHello('825285417520572', '83947113929-ft7ei0236nl9uh8frb7c063j4cdgnvjl.apps.googleusercontent.com', 'https://app.chipolo.net/google-redirect');

                var battery = Auth.getBatteryLevel();
                $("#login").click(function () {
                    $("#device_uuid").val(Auth.getUUID());
                    $("#battery_level").val(battery);
                });

                $(".social-login").click(function () {
                    if (!Buttons.isButtonOn(this)) {
                        return;
                    }
                    var provider = $(this).attr('data-provider');
                    Auth.loginWithHello(provider, Auth.getUUID(), battery, this);
                });

                $('#button-forgot-password').click(function () {
                    $('#myPasswordReset').modal('show');
                });

                Common.setUpViewport();
                $(window).resize(function () {
                    Common.setUpViewport();
                });

            });
        </script>

        <!-- pass reset modal -->
        <div class="modal fade" id="myPasswordReset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content text-center">
                    <form id="resetPass" class="form signin-form" enctype="multipart/form-data" accept-charset="utf-8" method="post" action="/user/reset-password-request">
                        <input type="hidden" name="_token" value="OJcuGerI159A0vr82G9XHKtq5htp9lm7nMnh3Lct">

                        <div class="modal-body">
                            <div class="row">

                                <h3 class="mb20">Forgot your password?</h3>

                                <hr class="separator">

                                <div class="form-placeholder">

                                    <p class="mt20">Please enter your accounts e-mail:</p>

                                    <div class="row">
                                        <div id="email_reset_id" class="form-group">
                                            <input type="text" id="email" name="email" class="form-control text-center" placeholder="your e-mail">
                                            <div class="text-danger" id="email_error_id" style="display: none;"></div>
                                        </div>
                                    </div>

                                    <p class="no-padding mb20">An e-mail will be sent to the entered address with further details on how to reset and change your password.</p>

                                    <div class="row">
                                        <div class="col-md-12 mb20">
                                            <div id="alert-ok" class="alert alert-success" style="display: none;">An e-mail was sent to the entered address</div>
                                            <div id="alert-no" class="alert alert-danger"  style="display: none;">The entered email is invalid.</div>
                                        </div>
                                    </div>

                                    <div class="row row-big-space no-margin">
                                        <div class="form-group"><button type="button" class="btn btn-gray-button" data-dismiss="modal">Cancel</button></div>
                                        <div class="form-group"><button type="submit" class="btn btn-blue">Reset password</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(function () {
                $("form#resetPass").submit(function (e) {
                    e.preventDefault();
                    Auth.resetPassword($(this));
                });
            });
        </script>
        <style>
            .community-signin, .community-signup {
                background: url(<?php echo base_url(); ?>assets/site/img/background_ny.jpg) 0 0 no-repeat;
                background-size: cover;
            }
        </style>
    </body>
</html>
