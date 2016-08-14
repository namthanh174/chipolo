<link href="assets/site/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/site/css/chipolo_shop.css" rel="stylesheet" type="text/css"/>

<div class="fp-banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <a href="https://chipolo.net/shop/customize/4">
                    <img src="assets/site/img/banners/family_pack_eur.jpg" class="img-responsive" nopin="nopin">
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
    <div id="package-start">
        <div class="row">
            <?php foreach ($products as $product): ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center noselect">


                <div class="pack" data-item-id="1">
                    <a href="/shop/customize/1" class="pack-link">


                        <div class="pack-image">
                            <img src="assets/site/img/shop/<?php echo $product['image_key'];?>.png" class="img-responsive">
                            <div class="pack-image-overlay">
                                <img src="assets/site/img/shop/hover_7.png" class="img-responsive">
                            </div>
                        </div>

                        <div class="pack-subtitle"><?php echo $product['sub_title'];?></div>
                        <div class="pack-title"><?php echo $product['title'];?></div>

                        <div class="pack-buy-button"><span>Buy</span></div>
                        <div class="pack-price"><?php echo $product['price'];?> USD</div>

                        <div class="pack-shipping"><?php echo $product['free_shipping'] == 1 ? 'Free Shipping' : '+ Shipping';?> </div>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
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

<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq)
            return;
        n = f.fbq = function () {
            n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq)
            f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    fbq('init', '1674123929470730');
    fbq('track', "PageView");
</script>

<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('#fvc1').flexVerticalCenter({cssAttribute: 'padding-top', parentSelector: '.parent'});
            $('#fvc2').flexVerticalCenter({cssAttribute: 'padding-top', parentSelector: '.parent'});
        }, 100);
    });
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1674123929470730&ev=PageView&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->

<div class="shop-common">
    <div class="container">
        <hr/>


        <div class="space80"></div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                <p><img src="assets/site/img/shop/safety.png" class="img-responsive" width="64"></p>
                <p>
                    <strong>Safety</strong><br/>
                    We use SSL connection for the checkout procedure, so your personal data is safe.					</p>
            </div>

            <div class="clearfix spaced visible-xs"></div>


            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                <p><img src="assets/site/img/shop/delivery.png" class="img-responsive" width="64"></p>
                <p>
                    <strong>Payment and Delivery</strong><br/>
                    Your order will normally be shipped in three days time from when your order was placed.					</p>
            </div>

            <div class="clearfix spaced visible-xs"></div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                <p><img src="assets/site/img/shop/packaging.png" class="img-responsive" width="64"></p>
                <p>
                    <strong>Packaging</strong><br/>
                    Each Chipolo is packed individually. The Chipolo box includes one Chipolo, extra battery, a key ring and instructions.					</p>
            </div>
        </div>

        <div class="spaced"></div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <p><img src="assets/site/img/shop/shipping.png" class="img-responsive" width="64"></p>
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
<script src="assets/site/js/jquery_1.11.0.js" type="text/javascript"></script>