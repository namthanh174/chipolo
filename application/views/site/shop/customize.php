<link href="<?php echo base_url();?>assets/site/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/site/css/chipolo_shop.css" rel="stylesheet" type="text/css"/>

<div class="fp-banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <a href="https://chipolo.net/shop/customize/4">
                    <img src="<?php echo base_url();?>assets/site/img/banners/family_pack_eur.jpg" class="img-responsive" nopin="nopin">
                </a>
            </div>
        </div>
    </div>
</div>



<div class="container" id="shop-title">
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1 class="shop-title">Welcome to the Chipolo Shop</h1>
            <h2 class="shop-subtitle-sm">Select your package</h2>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1 class="shop-title-sm">Shopping cart</h1>
            <h2 class="shop-subtitle-sm">Select the color(s) or go back to <a class="link-blue" href="/shop">Shop</a> to select a different package</h2>
        </div>
    </div>

    <div class="row progress-links">
        <div class="col-xs-12 text-center">
            <ul class="list-inline">
                <li><strong>Pick your colors</strong></li>
                <li> &gt; </li>
                <li>Fill your address</li>
                <li> &gt; </li>
                <li>Confirm your order</li>
            </ul>
            <hr>
        </div>
    </div>

    <form action="/shop/customize/3" method="post">
        <div class="row spacer">
            
                        <div class="col-colorpicker text-center">
                <div class="picker-container noselect">
                                        <div class="pick picker-0 active" data-index="0">
                        <input id="color-0" type="hidden" name="colors[]" value="" class="hidden-selection" autocomplete="off">
                        <img src="<?php echo base_url();?>assets/site/img/shop/colorpicker/_blank.png" class="img-responsive">
                    </div>
                                        <div class="pick picker-1" data-index="1">
                        <input id="color-1" type="hidden" name="colors[]" value="" class="hidden-selection" autocomplete="off">
                        <img src="<?php echo base_url();?>assets/site/img/shop/colorpicker/_blank.png" class="img-responsive">
                    </div>
                                        <div class="pick picker-2" data-index="2">
                        <input id="color-2" type="hidden" name="colors[]" value="" class="hidden-selection" autocomplete="off">
                        <img src="<?php echo base_url();?>assets/site/img/shop/colorpicker/_blank.png" class="img-responsive">
                    </div>
                                    </div>

                <p class="color-name">Available in 9 fun colors.</p>
                <p class="picker-help-block" style="display:none;"> * Please, select a color!</p>

                <div class="shop-selector noselect">
                    <a data-color-key="pink" data-color-name="Bubblegum Pink" data-color-hex="#F44CA3" href="#" style="background-color: #F44CA3" class="color-btn"></a>
                    <a data-color-key="red" data-color-name="Cherry Red" data-color-hex="#DB0504" href="#" style="background-color: #DB0504" class="color-btn"></a>
                    <a data-color-key="orange" data-color-name="Sunset Orange" data-color-hex="#FE8400" href="#" style="background-color: #FE8400" class="color-btn"></a>
                    <a data-color-key="yellow" data-color-name="Sunflower Yellow" data-color-hex="#FFD901" href="#" style="background-color: #FFD901" class="color-btn"></a>
                    <a data-color-key="green" data-color-name="Lime Green" data-color-hex="#AFD90E" href="#" style="background-color: #AFD90E" class="color-btn"></a>
                    <a data-color-key="blue" data-color-name="Deep Sky Blue" data-color-hex="#0097CF" href="#" style="background-color: #0097CF" class="color-btn"></a>
                    <a data-color-key="purple" data-color-name="Sapphire Purple" data-color-hex="#8E32B2" href="#" style="background-color: #8E32B2" class="color-btn"></a>
                    <a data-color-key="black" data-color-name="Jet Black" data-color-hex="#000000" href="#" style="background-color: #000000" class="color-btn"></a>
                    <a data-color-key="white" data-color-name="Arctic White" data-color-hex="#DBDBDB" href="#" style="background-color: #DBDBDB" class="color-btn"></a>
                </div>
            </div>
            
                        <div class="col-details text-center">
                <div class="pack-subtitle-sm"><?php echo $product->sub_title;?></div>
                <div class="pack-title-sm"><?php echo $product->title;?></div>
                <div class="pack-price-sm"><?php echo $product->price;?></div>
                                <div class="pack-shipping-sm"><?php echo $product->free_shipping == 1 ? 'Free Shipping' : '+ Shipping';?></div>
                
                <div class="pack-buttons noselect">
                    <input type="submit" class="btn shop-btn-continue disabled" value="Continue">
                    <a class="shop-btn-back" href="/shop">Back</a>
                </div>
            </div>
            <div class="clearfix"></div>
                    </div>

        <hr>

        <div class="row spacer noselect">
                        <div class="col-carousel">
                <div id="carousel-gallery" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                                                <div class="item">
                            <img src="<?php echo base_url();?>assets/site/img/shop/gallery/f_pink_1.jpg" class="img-responsive" data-i="1">
                        </div>
                                                <div class="item">
                            <img src="<?php echo base_url();?>assets/site/img/shop/gallery/f_pink_2.jpg" class="img-responsive" data-i="2">
                        </div>
                                                <div class="item">
                            <img src="<?php echo base_url();?>assets/site/img/shop/gallery/f_pink_3.jpg" class="img-responsive" data-i="3">
                        </div>
                                                <div class="item active">
                            <img src="<?php echo base_url();?>assets/site/img/shop/gallery/f_pink_4.jpg" class="img-responsive" data-i="4">
                        </div>
                                                <div class="item">
                            <img src="<?php echo base_url();?>assets/site/img/shop/gallery/f_pink_5.jpg" class="img-responsive" data-i="5">
                        </div>
                                                <div class="item">
                            <img src="<?php echo base_url();?>assets/site/img/shop/gallery/f_pink_6.jpg" class="img-responsive" data-i="6">
                        </div>
                                            </div>
                </div>
            </div>
            <div class="col-thumbs">
                <div class="thumbs-up" data-target="#carousel-gallery" data-slide="prev"></div>
                <div id="scroller" class="mThumbnailScroller _mTS_1 mTS-none auto-mTS-x-hover-50-none">
                    <div id="mTS_1" class="mTSWrapper mTS_vertical"><ul class="overview mTSContainer" id="mTS_1_container" style="position: relative; left: 0px; top: 0px;">
                                                <li data-target="#carousel-gallery" data-slide-to="0" data-slide-index="0" class="thumb thumb-0 active mTSThumbContainer">
                            <img src="<?php echo base_url();?>assets/site/img/shop/gallery/thumbs/t_pink_1.jpg" class="img-repsonsive mTSThumb">
                        </li>
                                                <li data-target="#carousel-gallery" data-slide-to="1" data-slide-index="1" class="thumb thumb-1 mTSThumbContainer">
                            <img src="<?php echo base_url();?>assets/site/img/shop/gallery/thumbs/t_pink_2.jpg" class="img-repsonsive mTSThumb">
                        </li>
                                                <li data-target="#carousel-gallery" data-slide-to="2" data-slide-index="2" class="thumb thumb-2 mTSThumbContainer">
                            <img src="<?php echo base_url();?>assets/site/img/shop/gallery/thumbs/t_pink_3.jpg" class="img-repsonsive mTSThumb">
                        </li>
                                                <li data-target="#carousel-gallery" data-slide-to="3" data-slide-index="3" class="thumb thumb-3 mTSThumbContainer">
                            <img src="<?php echo base_url();?>assets/site/img/shop/gallery/thumbs/t_pink_4.jpg" class="img-repsonsive mTSThumb">
                        </li>
                                                <li data-target="#carousel-gallery" data-slide-to="4" data-slide-index="4" class="thumb thumb-4 mTSThumbContainer">
                            <img src="<?php echo base_url();?>assets/site/img/shop/gallery/thumbs/t_pink_5.jpg" class="img-repsonsive mTSThumb">
                        </li>
                                                <li data-target="#carousel-gallery" data-slide-to="5" data-slide-index="5" class="thumb thumb-5 mTSThumbContainer">
                            <img src="<?php echo base_url();?>assets/site/img/shop/gallery/thumbs/t_pink_6.jpg" class="img-repsonsive mTSThumb">
                        </li>
                                            </ul><a href="#" id="mTS_1_buttonUp" class="mTSButton mTSButtonUp mTS-hidden"><span class="mTSButtonIconContainer"><svg version="1.1" viewBox="0 0 24 24" preserveAspectRatio="xMinYMin meet" class="mTSButtonIcon"><g><line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""></line></g><path d="M20.561 9.439l-7.5-7.5c-0.586-0.586-1.535-0.586-2.121 0l-7.5 7.5c-0.586 0.586-0.586 1.536 0 2.121s1.536 0.586 2.121 0l4.939-4.939v14.379c0 0.828 0.672 1.5 1.5 1.5s1.5-0.672 1.5-1.5v-14.379l4.939 4.939c0.293 0.293 0.677 0.439 1.061 0.439s0.768-0.146 1.061-0.439c0.586-0.586 0.586-1.535 0-2.121z"></path></svg></span></a><a href="#" id="mTS_1_buttonDown" class="mTSButton mTSButtonDown"><span class="mTSButtonIconContainer"><svg version="1.1" viewBox="0 0 24 24" preserveAspectRatio="xMinYMin meet" class="mTSButtonIcon"><g><line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""></line></g><path d="M3.439 14.561l7.5 7.5c0.586 0.586 1.536 0.586 2.121 0l7.5-7.5c0.586-0.586 0.586-1.536 0-2.121s-1.536-0.586-2.121 0l-4.939 4.939v-14.379c0-0.828-0.672-1.5-1.5-1.5s-1.5 0.672-1.5 1.5v14.379l-4.939-4.939c-0.293-0.293-0.677-0.439-1.061-0.439s-0.768 0.146-1.061 0.439c-0.586 0.586-0.586 1.536 0 2.121z"></path></svg></span></a></div>
                </div>
                <div class="thumbs-down" data-target="#carousel-gallery" data-slide="next"></div>
            </div>
            <div class="clearfix"></div>
                    </div>

        <hr>

        <div class="row spacer">
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 noselect spacer20">
        Your payment options:       <img src="<?php echo base_url();?>assets/site/img/shop/cards/visa.png" class="nomargin" title="Visa" width="45">
        <img src="<?php echo base_url();?>assets/site/img/shop/cards/mastercard.png" title="Master Card" width="45">
        <img src="<?php echo base_url();?>assets/site/img/shop/cards/amex.png" title="Amex" width="45">
        <img src="<?php echo base_url();?>assets/site/img/shop/cards/discover.png" title="Discover" width="45">
        <img src="<?php echo base_url();?>assets/site/img/shop/cards/diners.png" title="Diner" width="45">
        <img src="<?php echo base_url();?>assets/site/img/shop/cards/paypal.png" title="Paypal" width="45">
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 noselect mt10">
        <div class="pack-buttons text-center noselect">
            <input type="submit" class="btn shop-btn-continue shop-btn-bottom disabled" value="Continue">
            <a class="shop-btn-back" href="/shop">Back</a>
        </div>
    </div>
    <div class="clearfix"></div>
</div>  </form>
</div>

<img src="https://p1.zemanta.com/p/58/shop/" height="1" width="1" border="0" alt="" />

<style>
    .fp-banner {
        background: #F0F0F0;
    }
    .pack-buy-button span {
        font-size: 24px;
        font-weight: 500;
        text-transform: uppercase;
    }
    /* St patrick */
    .st_patrick {
        background: #F8F8F8;
        margin: 0 0 60px 0;
    }
    .special-limited {
        margin: 0;
        font-size: 20px;
        font-weight: 400;
    }
    .special-counter {
        color: #3D8320;
        font-size: 18px;
        margin: 3px 0 15px 0;
    }
    .special-left p,
    .special-right p {
        font-weight: 400;
        margin: 0;
        font-size: 13px;
        padding: 0 40px;
    }
    .special-right .pack-buy-button span {
        margin: 3px 0;
    }
    /* / St patrick */
    footer, .footer-bottom{
        display: none;
    }
</style>


<div class="shop-common">
    <div class="container">
        <hr/>


        <div class="space80"></div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                <p><img src="<?php echo base_url();?>assets/site/img/shop/safety.png" class="img-responsive" width="64"></p>
                <p>
                    <strong>Safety</strong><br/>
                    We use SSL connection for the checkout procedure, so your personal data is safe.					</p>
            </div>

            <div class="clearfix spaced visible-xs"></div>


            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                <p><img src="<?php echo base_url();?>assets/site/img/shop/delivery.png" class="img-responsive" width="64"></p>
                <p>
                    <strong>Payment and Delivery</strong><br/>
                    Your order will normally be shipped in three days time from when your order was placed.					</p>
            </div>

            <div class="clearfix spaced visible-xs"></div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                <p><img src="<?php echo base_url();?>assets/site/img/shop/packaging.png" class="img-responsive" width="64"></p>
                <p>
                    <strong>Packaging</strong><br/>
                    Each Chipolo is packed individually. The Chipolo box includes one Chipolo, extra battery, a key ring and instructions.					</p>
            </div>
        </div>

        <div class="spaced"></div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <p><img src="<?php echo base_url();?>assets/site/img/shop/shipping.png" class="img-responsive" width="64"></p>
                <p>
                    <strong>International Shipping</strong><br/>
                    Your Chipolo(s) will ship in 1-2 business days DHL Express overseas. All orders are shipped with delivery signature required.<br/>You are responsible for all duties and custom taxes when picking up your Chipolo(s).					</p>

            </div>
        </div>

        <div class="space80"></div>

        <hr/>



        <div class="row space8040">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p class="currency-text">Prices not in your currency? Choose your territory:</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                <ul class="list-inline currency-list">
                    <li class="text-center">
                        <a href="/shop/currency/eur" class="currency active"><span>&#8364;</span></a>
                        <a href="/shop/currency/eur"><p>Europe</p></a>
                    </li>
                    <li class="text-center">
                        <a href="/shop/currency/gbp" class="currency">&#163;</a>
                        <a href="/shop/currency/gbp"><p>UK</p></a>
                    </li>
                    <li class="text-center">
                        <a href="/shop/currency/usd" class="currency">&#36;</a>
                        <a href="/shop/currency/usd"><p>USA</p></a>
                    </li>
                    <li class="text-center">
                        <a href="/shop/currency/jpy" class="currency">&#165;</a>
                        <a href="/shop/currency/jpy"><p>Japan</p></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url();?>assets/site/js/jquery_1.11.0.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/site/js/owl2/owl.carousel.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
    $("#scroller").mThumbnailScroller({
            axis: 'y',
        type: 'click-thumb',
        });
    // update gallery colors if first chipolo has color on page load
    var inputs = $(".hidden-selection");
    $.each(inputs, function(index, input) {
        var el = $(input);
        if (el.val() != "") {
            var color = el.val();
            updateGalleryColors(color);
            return false;
        }
    });
    $(".pick").click(function() {
        var index = $(this).data('index');
        $('.pick').removeClass("active");
        $(this).addClass("active");
        var color = $(this).find('.hidden-selection').val();
        if (color != '') {
            updateGalleryColors(color);
        }
    });
    $(".color-btn").click(function(e) {
        e.preventDefault();
        $('.pick').removeClass("error");
        //$(".picker-help-block").slideUp();
        var color = $(this).data('color-key');
        var color_hex = $(this).data('color-hex');
        var color_name = $(this).data('color-name');
        $('.color-name').text(color_name).css('color', color_hex);
        var src = '/assets/site/img/shop/colorpicker/' + color + '.png';
        var img = $('.pick.active').find('img').attr('src', src);
        $('.pick.active').find('input').val(color);
        // move to the next blank chipolo
        var inputs = $(".hidden-selection");
        $.each(inputs, function(index, input) {
            var el = $(input);
            if (el.val() == "") {
                var index = $(this).data('index');
                $('.pick').removeClass("active error");
                el.parent().addClass("active");
                return false;
            }
        });
        updateGalleryColors(color);
        checkValidation();
    });
    checkValidation();
    $(".thumbs-up").click(function() {
        var active = $('.thumb.active');
        var index = active.data('slide-index');
        active.removeClass('active');
        if (index == 0) {
            index = 5;
        } else {
            index--;
        }
        var current = $('.thumb-'+index);
        current.addClass("active");
        if (index != 0) {
            var pos = parseInt(current.position().top + (current.height()/2)- ($(".mTSWrapper").height()/2)) + 4;
            $('#scroller').mThumbnailScroller("scrollTo", pos, { speed: 15, easing: 'easeOutStrong'});
        }
    });
    $(".thumbs-down").click(function() {
        var active = $('.thumb.active');
        var index = active.data('slide-index');
        active.removeClass('active');
        if (index == 5) {
            index = 0;
        } else {
            index++;
        }
        var current = $('.thumb-'+index);
        current.addClass("active");
        if (index == 0) {
            $('#scroller').mThumbnailScroller("scrollTo", 'top', { speed: 15, easing: 'easeOutStrong'});
        } else {
            var pos = parseInt(current.position().top + (current.height()/2)- ($(".mTSWrapper").height()/2)) + 4;
            $('#scroller').mThumbnailScroller("scrollTo", pos, { speed: 15, easing: 'easeOutStrong'});
        }
    });
    $(".thumb").click(function() {
        $('.thumb.active').removeClass('active');
        $(this).addClass('active');
        if ($(this).data('slide-index') != 0) {
            var pos = parseInt($(this).position().top + ($(this).height()/2)- ($(".mTSWrapper").height()/2)) + 4;
            $('#scroller').mThumbnailScroller("scrollTo", pos, { speed: 15, easing: 'easeOutStrong'});
        }
    });
    $("form").submit(function() {
        if (checkValidation()) {
            return true;
        }
        var inputs = $(".hidden-selection");
        $.each(inputs, function(index, input) {
            var el = $(input);
            if (el.val() == "") {
                var index = $(this).data('index');
                $('.pick').removeClass("active");
                el.parent().addClass("active error");
                return false;
            }
        });
        $(".color-name").css('color', '#e74c3c').text("* Please select a color!");
        $('html, body').animate({
            scrollTop: $(".progress-links").offset().top
        }, 500);
        return false;
    });
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
    });
});
checkValidation = function()
{
    var valid = true;
    var inputs = $(".hidden-selection");
    $.each(inputs, function(index, input) {
        var el = $(input);
        if (el.val() == "") {
            valid = false;
        }
    });
    if (!valid) {
        $("input[type=submit]").addClass("disabled");
    } else {
        $("input[type=submit]").removeClass("disabled");
    }
    return valid;
};
updateGalleryColors = function(color)
{
    var images = $('#carousel-gallery .item img');
    images.each(function(i,img) {
        var j = $(img).attr("data-i");
        $(img).attr('src', '/assets/site/img/shop/gallery/f_'+color+'_'+(j)+'.jpg');
    });
    var thumbs = $('.thumb img');
    thumbs.each(function(i,img) {
        $(img).attr('src', '/assets/site/img/shop/gallery/thumbs/t_'+color+'_'+(i+1)+'.jpg');
    });
};
</script>
<script type="text/javascript" src="<?php echo base_url();?>assets/site/js/jquery.scroller.min.js"></script>