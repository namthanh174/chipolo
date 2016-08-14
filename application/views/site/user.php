<!DOCTYPE html>
<html>
    <head>
        <title>Chipolo Community</title>

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

    <body class="chipolo-community">


        <div id="content">
            <div class="container-fluid app">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 column-left border-right menu-part">

                    <nav class="navbar-collapse navbar-fixed-top" role="navigation">
                        <div>
                            <div class="navbar-header">
                                <a id="list-group-signout" href="<?php echo base_url(); ?>user/signout" class="visible-xs-inline-block">
                                    <div class="float-left"><img src="<?php echo base_url(); ?>assets/site/img/icons/signout.png" class="hovers"></div>
                                </a>
                                <a id="list-group-settings" href="#" class="visible-xs-inline-block list-settings">
                                    <div class="float-left"><div><img src="<?php echo base_url(); ?>assets/site/img/icons/settings.png" class="hovers"></div></div>
                                </a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-chipolo-app">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar b1"></span>
                                    <span class="icon-bar b2"></span>
                                    <span class="icon-bar b3"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbar-chipolo-app">
                                <ul class="nav">
                                    <div class="list-group list-group-top">
                                        <a id="list-group-logo" href="<?php echo base_url(); ?>" target="_blank" class="list-group-item">
                                            <div class="float-left float-left-first"><img src="<?php echo base_url(); ?>assets/site/img/logo.png"></div>
                                            <div class="float-left"><h4 class="list-group-item-heading">Chipolo Site</h4></div>
                                        </a>
                                        <div id="my-belongings-container" class="test">
                                            <div id="my-belongings">
                                                <a id="list-group-no-belongings" href="#" class="list-group-item hidden">
                                                    <div class="float-left float-left-first"><img src="<?php echo base_url(); ?>assets/site/img/icons/questionmark.png" class="hovers"></div>
                                                    <div class="float-left width-limited">
                                                        <h4 class="list-group-item-heading">No devices yet?</h4>
                                                        <p class="list-group-item-text">Connect a device to this account to keep track of it here by signing in to our mobile app.</p>
                                                    </div>
                                                    <div class="clear"></div>
                                                </a>

                                                <a id="list-group-shop" href="<?php echo base_url(); ?>shop" target="_blank" class="list-group-item">
                                                    <div class="float-left float-left-first"><img src="<?php echo base_url(); ?>assets/site/img/icons/shop.png" class="hovers"></div>
                                                    <div class="float-left"><h4 class="list-group-item-heading">Buy a Chipolo</h4></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div id="list-group-bottom" class="list-group list-group-bottom list-group-fixed hidden-xs">
                        <a id="list-group-settings" href="#" class="list-group-item list-settings">
                            <div class="float-left float-left-first">
                                <div>
                                    <img src="<?php echo base_url(); ?>assets/site/img/icons/settings.png" class="hovers">
                                </div>
                            </div>
                            <div class="float-left">
                                <h4 class="list-group-item-heading">Account Settings</h4>
                                <p id="list-group-item-user" class="list-group-item-text">
                                    <span id="settings-user-full-name"></span>
                                    <small id="settings-user-email"></small>
                                </p>
                            </div>
                        </a>
                        <a id="list-group-signout" href="<?php echo base_url(); ?>user/signout" class="list-group-item">
                            <div class="float-left float-left-first"><img src="<?php echo base_url(); ?>assets/site/img/icons/signout.png" class="hovers"></div>
                            <div class="float-left"><h4 class="list-group-item-heading">Sign Out</h4></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12 column-right canvas-container">
                    <div id="map-canvas"></div>
                </div>

            </div>
        </div>


        <script src="<?php echo base_url(); ?>assets/site/js/common-08f5f703e2.js"></script>
        <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyDFgx_wCb6OqDOELQkkaU4IKjdsdL-HWDw&libraries=geometry"></script>
        <script src="<?php echo base_url(); ?>assets/site/js/app-a5656adc06.js"></script>

        <script type="text/javascript">
            $(function () {

                $('#list-group-signout').click(function () {
                    Intercom('shutdown');
                });

                $('[data-toggle="popover"]').popover();
                Auth.initHello('825285417520572', '83947113929-ft7ei0236nl9uh8frb7c063j4cdgnvjl.apps.googleusercontent.com', 'https://app.chipolo.net/google-redirect');

                Network.init(348337, 365435, {"colors": [{"name": "gray", "hex": "a0a0a0"}, {"name": "white", "hex": "dcdcdc"}, {"name": "black", "hex": "6f6f6f"}, {"name": "purple", "hex": "b476cb"}, {"name": "blue", "hex": "45b4dc"}, {"name": "green", "hex": "96B42E"}, {"name": "yellow", "hex": "fee060"}, {"name": "orange", "hex": "ffab51"}, {"name": "red", "hex": "F05050"}, {"name": "pink", "hex": "f77dbc"}, {"name": "calypso_red", "hex": "ea3532"}, {"name": "calypso_cream", "hey": "d8cdbc"}, {"name": "calypso_green", "hex": "b9cb80"}, {"name": "calypso_silver", "hex": "94a3af"}, {"name": "calypso_black", "hex": "212327"}, {"name": "calypso_orange", "hex": "B83521"}, {"name": "calypso_gray", "hex": "B1A09D"}, {"name": "calypso_white", "hex": "EEECF2"}]}, 'AIzaSyDFgx_wCb6OqDOELQkkaU4IKjdsdL-HWDw');

                $('.list-settings').click(function () {
                    Network.setUpAccountSettings();
                    Modals.showAccountSettings();
                });

                $('#list-group-no-belongings').click(function () {
                    Modals.alertNoBelongings(false);
                });

                $(document).on('click', '.type-device', function (e) {
                    e.preventDefault();
                    Network.setUpDeviceModal(this);
                    Modals.showDeviceModal();
                });

                $(document).on('click', '.type-chipolo', function (e) {
                    e.preventDefault();
                    Network.setUpChipoloModal(this);
                    Modals.showChipoloModal();
                });

                $('#btn-account-settings-save').click(function (e) {
                    e.preventDefault();
                    Network.saveAccountSettings();
                });

                $("#button-get-a-free-chipolo").click(function (e) {
                    e.preventDefault();
                    Modals.showGetFreeChipoloModal();
                });

                $(window).resize(function () {
                    Network.setUpScroller(false);
                });

                $(".social-login").click(function (e) {
                    if (!Buttons.isButtonOn(this)) {
                        return;
                    }

                    e.preventDefault();
                    e.stopPropagation();

                    var provider = $(this).attr('data-provider');

                    if ($(this).hasClass('btn-' + provider + '-connected')) {
                        Auth.disconnectFromHello(provider, this);

                        if (_.size(Network.auth) == 1) {
                            for (var provider_id in Network.auth) {
                                if (Network.auth[provider_id].type != 'chipolo') {
                                    $('#account-social-' + Network.auth[provider_id].type).attr('disabled', 'disabled');
                                }
                            }
                        }

                    } else {
                        Auth.connectWithHello(provider, this);
                    }
                });

                $("#button-change-password").click(function () {
                    $("#modalChangePassword").modal('show');
                });

                $("#button-delete-account").click(function () {
                    // disable account deletion if chipolos present
                    if (_.isEmpty(Network.chipolos)) {
                        // ok to delete
                        // console.log('empty');
                        $('#modalDeleteAccount #btn-modal-delete-account').attr('disabled', false);
                        $('#modalDeleteAccount #modal-body').html('If you delete your account you will not be able to track your devices and Chipolos again.');

                    } else {
                        // not ok, remove chipolos notification
                        $('#modalDeleteAccount #btn-modal-delete-account').attr('disabled', true);
                        $('#modalDeleteAccount #modal-body').html('You still seem to have Chipolos connected to your account. Please make sure, that you remove all Chipolos from your account before deleting it.<br/><br/><a class="link-blue" href="https://chipolo.net/support#category-4/faq-89" target="_blank">More information</a>');
                    }

                    $("#modalDeleteAccount").modal('show');
                });

                $("#mc-is-lost").change(function () {
                    var val = 0;
                    if ($(this).attr('checked') == 'checked') {
                        val = 1;
                    }
                    var chipolo_id = $("#modalChipolo").attr('data-active-chipolo');
                    Network.markAsLost(chipolo_id, val, 'chipolo');
                });

                $("#md-is-lost").change(function () {
                    var val = 0;
                    if ($(this).attr('checked') == 'checked') {
                        val = 1;
                    }
                    var device_id = $("#modalDevice").attr('data-active-device');
                    Network.markAsLost(device_id, val, 'device');
                });

                // open the send message form (device modal)
                $('#md-message-button').click(function (e) {
                    e.preventDefault();

                    var btn = $(this);

                    var messageContainer = $('#message-container');

                    if (messageContainer.hasClass('active')) {
                        btn.removeClass('active');
                        messageContainer.removeClass('active').slideUp();
                        $("#modalDevice").css('marginTop', '+=136px');
                    } else {
                        btn.addClass('active');
                        messageContainer.addClass('active').slideDown();
                        $("#modalDevice").css('marginTop', '-=136px');
                    }

                });

                // send a push message with text
                $('#md-send-message').click(function (e) {
                    e.preventDefault();

                    var device_id = $("#modalDevice").attr('data-active-device');
                    var message = $('#md-message-text').val();

                    Network.sendPushNotification(device_id, 'message', message);
                });

                // send a refresh location silent push message
                $('#md-device-refresh-location, #mc-device-refresh-location').click(function (e) {
                    e.preventDefault();

                    var btn = $(this);

                    Network.sendPushNotificationToAllDevices(btn);
                });

                // send an alert silent push message (device modal)
                $('#md-alert-button').click(function (e) {
                    e.preventDefault();

                    var btn = $(this);
                    btn.addClass('active').attr('disabled', 'disabled').html('<i class="fa fa-spinner fa-spin"></i>');

                    setTimeout(function () {
                        btn.removeClass('active').attr('disabled', false).text('Ring this device');
                    }, 5000);

                    var device_id = $("#modalDevice").attr('data-active-device');
                    var message = $('#md-message-text').val();

                    Network.sendPushNotification(device_id, 'alert', false);
                });

                // close the send message forms (device modal)
                $('#md-cancel-message').click(function (e) {
                    e.preventDefault();

                    var btn = $(this);
                    btn.removeClass('active');

                    $('#message-container').removeClass('active').slideUp();
                    $("#modalDevice").css('marginTop', '+=136px');
                });

                // delete account button clicked
                $("#btn-modal-delete-account").click(function (e) {
                    e.preventDefault();
                    Auth.deleteAccount();
                });

                // change password button clicked
                $('#btn-modal-change-password').click(function (e) {
                    e.preventDefault();
                    Auth.changePassword();
                });

                Clustering.setUpEventForClusters();

                // update user state every 30 seconds ...
                setInterval(function () {
                    Network.updateState();
                }, 30000);

            });

            /**
             * Saasquatch Refferal
             */
            var _sqh = _sqh || [];
            _sqh.push(['init', {
                    tenant_alias: 'ap8ice3riqxv4',
                    payment_provider_id: null,
                    account_id: 'jackhappy2007@gmail.com',
                    user_id: 'jackhappy2007@gmail.com',
                    // account_status: 'PAID',
                    email: 'jackhappy2007@gmail.com',
                    first_name: 'vo van',
                    last_name: 'Thanh',
                    mode: 'EMBED',
                    checksum: 'Sbrb69sm1t+EIks+QoAQgDyrkRijeCxySRxhTh+eduU='
                }]);
            (function () {
                function l() {
                    var s = document.createElement("script");
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = location.protocol + "//d2rcp9ak152ke1.cloudfront.net/assets/javascripts/squatch.min.js";
                    var t = document.getElementsByTagName("script")[0];
                    t.parentNode.insertBefore(s, t)
                }
                if (window.attachEvent) {
                    window.attachEvent("onload", l)
                } else {
                    window.addEventListener("load", l, false)
                }
            })();

            /**
             * Intercom.io
             */
            window.intercomSettings = {
                app_id: 'wjjw3w95',
                user_id: '348337',
                name: 'vo van Thanh', // Full name
                email: 'jackhappy2007@gmail.com', // Email address
                created_at: '1470498960', // Signup date as a Unix timestamp
                user_hash: '9ff851728a8848664eee38f19d311b29e4196d7bb5c6db1b7e29f1c4baaad7c5'
            };
            (function () {
                var w = window;
                var ic = w.Intercom;
                if (typeof ic === "function") {
                    ic('reattach_activator');
                    ic('update', intercomSettings);
                } else {
                    var d = document;
                    var i = function () {
                        i.c(arguments)
                    };
                    i.q = [];
                    i.c = function (args) {
                        i.q.push(args)
                    };
                    w.Intercom = i;
                    function l() {
                        var s = d.createElement('script');
                        s.type = 'text/javascript';
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
            })()
        </script>


        <div class="modal fade" id="modalDevice" tabindex="-1" role="dialog" aria-labelledby="modalDevice" data-active-device="">
            <div class="modal-dialog modal-device" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close-modal" data-dismiss="modal" aria-label="Close">
                            <img src="<?php echo base_url(); ?>assets/site/img/close.jpg" width="10" height="10">
                        </button>

                        <h4 class="modal-title" id="md-name"></h4>
                        <span class="battery-level"><span id="md-battery-level" class="battery-percentage">50</span>% <i id="md-battery-icon" class="fa fa-battery-4"></i></span>
                    </div>
                    <div class="modal-body">
                        <div id="md-map"><div class="google-map-canvas"></div></div>

                        <hr class="separator">

                        <div class="space-provider" id="location-container">
                            <div class="row">
                                <div class="col-md-3 text-center device-action">
                                    <a href="#" id="md-device-refresh-location" title="Refresh location">
                                        <img src="<?php echo base_url(); ?>assets/site/img/icons/refresh.png">
                                    </a>
                                </div>
                                <div class="col-md-6 text-center">
                                    <small id="md-connected-to">Last known location:</small>
                                    <small id="md-last-seen" class="last-seen"></small>
                                    <small id="md-location" class="location"></small>
                                    <small id="md-last-updated" class="last-updated">Updated: <span class="time"></span></small>
                                </div>
                                <div class="col-md-3 text-center device-action">
                                    <a href="#" id="md-show-directions" title="Get directions" target="_blank">
                                        <img src="<?php echo base_url(); ?>assets/site/img/icons/map.png">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <hr class="separator">

                        <div class="space-provider" id="button-container">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <button id="md-alert-button" type="button" class="btn btn-blue-button">Ring this device</button>
                                    <p><small><span class="md-device-name">iPad Air 2</span> will start to ring if it&#039;s connected to internet.</small></p>
                                </div>
                                <div class="col-md-6 text-center">
                                    <button id="md-message-button" type="button" class="btn btn-blue-button">Send message</button>
                                    <p><small>This Message will be shown on <span class="md-device-name">iPad Air 2</span>.</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="space-provider" id="message-container" style="display:none;">
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea id="md-message-text" name="message" class="form-control" maxlength="140" rows="3">Help! I have lost this device and I&#039;m looking for it. Please call me ...</textarea>
                                    <p class="text-center"><small>You can enter up to 140 characters.</small></p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                                    <button type="button" class="btn btn-gray-button" id="md-cancel-message">Cancel</button>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                    <button type="button" class="btn btn-blue-button" id="md-send-message">Send</button>
                                </div>
                            </div>
                        </div>

                        <div class="space-provider" id="message-ok-container" style="display: none;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="message-ok" class="text-center"></div>
                                </div>
                            </div>
                        </div>

                        <div class="space-provider" id="message-fail-container" style="display: none;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="message-fail" class="text-center"></div>
                                </div>
                            </div>
                        </div>

                        <hr class="separator">

                        <div class="space-provider is-lost-container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p>
                                        <label id="is-lost-label">
                                            <input id="md-is-lost" type="checkbox" name="is_lost" value="1"> Notify when found
                                        </label>
                                    </p>
                                    <div class="space-provider" id="found-ok-container" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="found-ok" class="text-center">
                                                    You marked Chipolo as lost
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-provider" id="found-fail-container" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="found-fail" class="text-center">
                                                    Something went wrong ...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-center"><small>Once you mark device <strong>AS LOST</strong>, you will be notified via a push notification and email when it's location is updated.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    <div class="modal fade" id="modalChipolo" tabindex="-1" role="dialog" aria-labelledby="modalChipolo">
            <div class="modal-dialog modal-chipolo" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close-modal" data-dismiss="modal" aria-label="Close">
                            <img src="<?php echo base_url(); ?>assets/site/img/close.jpg" width="10" height="10">
                        </button>

                        <h4 class="modal-title" id="mc-name">iPad Air 2</h4>
                        <span id="mc-battery-level" class="battery-level"><i id="mc-battery" class="fa fa-battery-1" title="The battery of this Chipolo is low. In order for your Chipolo to work change it as soon as possible."></i></span>
                    </div>
                    <div class="modal-body">
                        <div id="mc-map"><div class="google-map-canvas"></div></div>

                        <hr class="separator">

                        <div class="space-provider" id="location-container">
                            <div class="row">
                                <div class="col-md-3 text-center device-action">
                                    <a href="#" id="mc-device-refresh-location" title="Refresh location">
                                        <img src="<?php echo base_url(); ?>assets/site/img/icons/refresh.png">
                                    </a>
                                </div>
                                <div class="col-md-6 text-center">
                                    <small id="mc-connected-to">Last known location:</small>
                                    <small id="mc-last-seen" class="last-seen">Yesterday 14:30</small>
                                    <small id="mc-location" class="location">Neža 13<br>Trbovlje</small>
                                    <small id="mc-last-updated" class="last-updated">Updated: <span class="time">Just now</span></small>
                                </div>
                                <div class="col-md-3 text-center device-action">
                                    <a href="#" id="mc-show-directions" title="Get Directions" target="_blank">
                                        <img src="<?php echo base_url(); ?>assets/site/img/icons/map.png">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <hr class="separator">

                        <div class="space-provider is-lost-container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p>
                                        <label id="is-lost-label">
                                            <input id="mc-is-lost" type="checkbox" name="is_lost" value="1"> Notify when found
                                        </label>
                                    </p>
                                    <p class="text-center"><small>Once you mark device <strong>AS LOST</strong>, you will be notified via a push notification and email when it's location is updated.</small></p>
                                </div>
                            </div>
                        </div>

                        <hr class="separator">

                        <div class="space-provider chipolo-info">
                            <div class="row">
                                <div class="col-md-4 text-center">Activated: <span id="mc-activated"></span></div>
                                <div class="col-md-4 text-center">Serial number: <span id="mc-serial"></span></div>
                                <!--div class="col-md-4 text-center">HW ver.: <span id="mc-hw"></span></div-->
                                <div class="col-md-4 text-center">FW ver.: <span id="mc-fw"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    <div class="modal fade" id="modalNotification" tabindex="-1" role="dialog" aria-labelledby="modalNotification">
            <div class="modal-dialog modal-notification" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-center">
                            <p id="modal-notification-message">modals.delete_account.email</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    <div class="modal fade" id="modalDeleteAccount" tabindex="-1" role="dialog" aria-labelledby="modalDeleteAccount">
            <div class="modal-dialog modal-delete-account" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close-modal" data-dismiss="modal" aria-label="Close">
                            <img src="<?php echo base_url(); ?>assets/site/img/close.jpg" width="10" height="10">
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Delete account?</h4>
                    </div>
                    <div class="modal-body">
                        <div class="space-provider">
                            <div class="row row-small-space text-center">
                                <div class="col-md-12">
                                    <p id="modal-body">If you delete your account you will not be able to track your devices and Chipolos again.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row row-big-space modal-buttons">
                            <div class="col-md-6 col-sm-6 col-xs-6"><button type="button" class="btn btn-gray-button" data-dismiss="modal">Cancel</button></div>
                            <div class="col-md-6 col-sm-6 col-xs-6"><button type="button" class="btn btn-red-button" id="btn-modal-delete-account">Delete account</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    <div class="modal fade" id="modalChangePassword" tabindex="-1" role="dialog" aria-labelledby="modalChangePassword">
            <div class="modal-dialog modal-change-password" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close-modal" data-dismiss="modal" aria-label="Close">
                            <img src="<?php echo base_url(); ?>assets/site/img/close.jpg" width="10" height="10">
                        </button>

                        <h4 class="modal-title" id="myModalLabel">Change password</h4>
                    </div>
                    <div class="modal-body">
                        <div class="space-provider">
                            <div class="row row-small-space">
                                <div class="col-md-5 col-sm-12 col-xs-12">Current password</div>
                                <div id="reset-current-password-placeholder" class="col-md-7 col-sm-12 col-xs-12">
                                    <input type="password" name="current_password" id="reset-current-password" value="" class="form-control">
                                    <div class="text-danger hidden"></div>
                                </div>
                            </div>

                            <div class="row row-small-space">
                                <div class="col-md-5 col-sm-12 col-xs-12">New password</div>
                                <div id="reset-password-placeholder" class="col-md-7 col-sm-12 col-xs-12">
                                    <input type="password" name="password" id="reset-new-password" value="" class="form-control">
                                    <div class="text-danger hidden"></div>
                                </div>
                            </div>

                            <div class="row row-small-space">
                                <div class="col-md-5 col-sm-12 col-xs-12"><label for="confirmed_password">Type it again</label></div>
                                <div id="reset-confirmed-password-placeholder" class="col-md-7 col-sm-12 col-xs-12">
                                    <input type="password" name="confirmed_password" id="reset-confirmed-password" value="" class="form-control">
                                    <div class="text-danger hidden"></div>
                                </div>
                            </div>

                            <div id="change-password-response-message" class="row row-small-space" style="display: none;">
                                <div class="col-md-12">
                                    <div class="alert alert-success text-center">
                                        Your changes were saved successfully!
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="separator">

                        <div class="row row-big-space">
                            <div class="col-md-6 col-sm-6 col-xs-6"><button type="button" class="btn btn-gray-button" data-dismiss="modal">Cancel</button></div>
                            <div class="col-md-6 col-sm-6 col-xs-6"><button type="button" class="btn btn-red-button" id="btn-modal-change-password">Change</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalNoBelongings" tabindex="-1" role="dialog" aria-labelledby="modalNoDeviceNoChipolo">
            <div class="modal-dialog modal-account-settings" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close-modal" data-dismiss="modal" aria-label="Close">
                            <img src="<?php echo base_url(); ?>assets/site/img/close.jpg" width="10" height="10">
                        </button>

                        <div class="row">
                            <div class="col-md-14 text-center"><h3>Welcome!</h3></div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center mb20">
                                <p>You have no devices connected to this account.</p>
                                <p>To use the Find Phone feature, please download<br/>the Chipolo App on your smartphone.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a href="https://itunes.apple.com/app/chipolo-nothing-is-lost/id651447811?mt=8" target="_blank"><img src="<?php echo base_url(); ?>assets/site/img/ico_app_store.png" width="135px"></a>
                                <a href="https://play.google.com/store/apps/details?id=chipolo.net.v3" target="_blank"><img src="<?php echo base_url(); ?>assets/site/img/ico_google_play.png" width="112px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    <div class="modal fade" id="modalAccountSettings" tabindex="-1" role="dialog" aria-labelledby="modalAccountSettings">
            <div class="modal-dialog modal-account-settings" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close-modal" data-dismiss="modal" aria-label="Close">
                            <img src="<?php echo base_url(); ?>assets/site/img/close.jpg" width="10" height="10">
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Account settings</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row tabs">
                            <div class="col-md-4 col-sm-12 col-xs-12 tab tab-current" id="tab-account-info" data-tab="account-tab">Account info</div>
                            <div class="col-md-4 col-sm-12 col-xs-12 tab" id="tab-notifications" data-tab="notifications-tab">Notifications</div>
                            <div class="col-md-4 col-sm-12 col-xs-12 tab" id="tab-social-networks" data-tab="socials-tab">Social Networks</div>
                        </div>

                        <hr class="separator">

                        <div class="chipolo-tab-content" id="account-tab">
                            <div class="space-provider">
                                <div class="row row-small-space-exact-height">
                                    <div class="col-md-4 col-sm-12 col-xs-12"><label>E-mail</label></div>
                                    <div class="col-md-8 col-sm-12 col-xs-12" id="account-email"><label></label></div>
                                </div>

                                <div class="row row-small-space">
                                    <div class="col-md-4 col-sm-12 col-xs-12"><label for="first_name">First name</label></div>
                                    <div id="account-first-name-placeholder" class="col-md-8 col-sm-12 col-xs-12">
                                        <input id="account-first-name" type="text" name="first_name" id="first_name" value="" class="form-control">
                                        <div class="text-danger hidden"></div>
                                    </div>
                                </div>

                                <div class="row row-small-space">
                                    <div class="col-md-4 col-sm-12 col-xs-12"><label for="last_name">Last name</label></div>
                                    <div id="account-last-name-placeholder" class="col-md-8 col-sm-12 col-xs-12">
                                        <input id="account-last-name" type="text" name="last_name" id="last_name" value="" class="form-control">
                                        <div class="text-danger hidden"></div>
                                    </div>
                                </div>

                                <div class="row row-small-space">
                                    <div class="col-md-4 col-sm-12 col-xs-12"><label for="account-gender">Gender</label></div>
                                    <div id="account-gender-placeholder" class="col-md-8 col-sm-12 col-xs-12" style="text-align: left !important;">
                                        <select id="account-gender" name="gender" class="form-control">
                                            <option value="">I&#039;d rather not say</option>
                                            <option value="m">Male</option>
                                            <option value="f">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row row-small-space">
                                    <div class="col-md-4 col-sm-12 col-xs-12"><label for="account-language">Language</label></div>
                                    <div id="account-languages-placeholder" class="col-md-8 col-sm-12 col-xs-12" style="text-align: left !important;">
                                        <select id="account-language" name="ui_language" class="form-control">
                                            <option value="en">English</option>
                                            <option value="fr">French</option>
                                            <option value="de">German</option>
                                            <option value="es">Spanish</option>
                                            <option value="it">Italian</option>
                                            <option value="ja">Japanese</option>
                                            <option value="nl">Dutch</option>
                                        </select>
                                    </div>
                                </div>

                                <div id="account-response-message" class="row row-small-space" style="display: none;">
                                    <div class="col-md-12">
                                        <div class="alert alert-success text-center">
                                            Your changes were saved successfully!
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="separator">

                            <div class="row row-big-space">
                                <div class="col-md-4 col-sm-12 col-xs-12"><label>Free Chipolo</label></div>
                                <div class="col-md-8 col-sm-12 col-xs-12"><a href="#" class="btn btn-blue-button" id="button-get-a-free-chipolo">Get a Free Chipolo</a></div>
                            </div>

                            <hr class="separator">

                            <div class="row row-big-space">
                                <div class="col-md-4 col-sm-12 col-xs-12"><label>Password</label></div>
                                <div class="col-md-8 col-sm-12 col-xs-12"><a href="#" class="btn btn-red-button" id="button-change-password">Change password</a></div>
                            </div>

                            <hr class="separator">

                            <div class="row row-big-space">
                                <div class="col-md-4 col-sm-12 col-xs-12"><label>Account</label></div>
                                <div class="col-md-8 col-sm-12 col-xs-12"><a href="#" class="btn btn-red-button" id="button-delete-account">Delete account</a></div>
                            </div>
                        </div>

                        <div class="chipolo-tab-content hidden" id="notifications-tab">
                            <div class="space-provider">
                                <div class="row">
                                    <div class="col-md-12 mt20 mb20"><p>We&#039;ll always let you know about important changes, but you pick what else you want to hear about.</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="send_sharing_notifications" id="account-notifications-sharing" value="1"> Sharing
                                            </label>
                                            <a href="#" data-toggle="popover" title="Sharing" data-trigger="focus" data-content="By default you will receive an e-mail when someone wants to share a Chipolo or a device with you. You may disable those e-mail notifications here."><i class="fa fa-question-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="send_community_search_notifications" id="account-notifications-community-search" value="1"> Community search
                                            </label>
                                            <a href="#" data-toggle="popover" title="Community search" data-trigger="focus" data-content="If your Chipolo or device is &#039;Marked as Lost&#039; you will receive an e-mail once the Chipolo Community finds it. You may disable those e-mail notification here."><i class="fa fa-question-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="send_device_message_notifications" id="account-notifications-device-message" value="1"> Device messages
                                            </label>
                                            <a href="#" data-toggle="popover" title="Device messages" data-trigger="focus" data-content="When you send a message to a shared device, we will send you an e-mail confirming that the message was delivered successfully. You may disable those e-mail notifications here."><i class="fa fa-question-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="send_app_health_notifications" id="account-notifications-app-health" value="1"> App health notifications
                                            </label>
                                            <a href="#" data-toggle="popover" title="App health notifications" data-trigger="focus" data-content="We monitor the activity of our app. If it stops communicating with our servers your Chipolos might not be tracked properly. We will inform you in case of such event. You may disable those e-mail notifications here."><i class="fa fa-question-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div id="account-notifications-response-message" class="row row-small-space" style="display: none;">
                                    <div class="col-md-12">
                                        <div class="alert alert-success text-center">
                                            Your changes were saved successfully!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chipolo-tab-content hidden" id="socials-tab">
                            <div class="space-provider">
                                <div class="row">
                                    <div class="col-md-12 mt20 mb20"><p>Connect Chipolo account with your other social networks and help our community grow. The bigger the community, the faster you will find your lost things and devices. You can turn off this feature at anytime.</p></div>
                                </div>
                                <div class="row row-small-space">
                                    <div class="col-md-3 col-sm-12 col-xs-12"><label>Facebook</label></div>
                                    <div class="col-md-9 col-sm-12 col-xs-12"><a href="#" class="btn btn-facebook social-login" id="account-social-facebook" data-provider="facebook">Connect with Facebook</a></div>
                                </div>
                                <div class="row row-small-space">
                                    <div class="col-md-3 col-sm-12 col-xs-12"><label>Google</label></div>
                                    <div class="col-md-9 col-sm-12 col-xs-12"><a href="#" class="btn btn-google social-login" id="account-social-google" data-provider="google">Connect with Google</a></div>
                                </div>
                                <div id="account-social-response-message" class="row row-small-space" style="display: none;">
                                    <div class="col-md-12">
                                        <div class="alert alert-success text-center">
                                            Your changes were saved successfully!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="separator">
                        <div class="row row-big-space">
                            <div class="col-md-6 col-sm-6 col-xs-6"><button type="button" class="btn btn-gray-button" data-dismiss="modal">Cancel</button></div>
                            <div class="col-md-6 col-sm-6 col-xs-6"><button type="button" class="btn btn-red-button" id="btn-account-settings-save">Done</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalGetFreeChipolo" tabindex="-1" role="dialog" aria-labelledby="modalGetFreeChipolo">
            <div class="modal-dialog modal-change-password" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close-modal" data-dismiss="modal" aria-label="Close">
                            <img src="<?php echo base_url(); ?>assets/site/img/close.jpg" width="10" height="10">
                        </button>

                        <h4 class="modal-title" id="myModalLabel">Get a Free Chipolo</h4>
                    </div>
                    <div class="modal-body">
                        <div id="squatch-container">
                            <div id="squatchembed"></div>
                        </div>

                        <hr class="separator">

                        <div class="row row-big-space">
                            <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-3 col-sm-offset-3 col-offset-xs-3"><button type="button" class="btn btn-gray-button" data-dismiss="modal">Close</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </body>
</html> 

