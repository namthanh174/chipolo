
<link href="<?php echo base_url(); ?>assets/site/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/site/css/chipolo_shop.css" rel="stylesheet" type="text/css"/>
<div class="container">
    <div class="col-xs-6 header-secure">
        <img src="<?php echo base_url(); ?>assets/site/img/shop/comodo_secure.png" class="img-responsive">
    </div>
    <div class="col-xs-6 text-right">
        <ul class="list-inline header-menu">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>shop">Shop</a></li>
        </ul>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1 class="shop-title-sm">Shopping cart</h1>
            <h2 class="shop-subtitle-sm">Please enter your billing and shipping information</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 text-center">
            <ul class="list-inline">
                <li><a href="<?php echo base_url(); ?>shop/customize/<?php echo $product->id ?>" class="link-blue">Pick your colors</a></li>
                <li> > </li>
                <li><strong>Fill your address</strong></li>
                <li> > </li>
                <li>Confirm your order</li>
            </ul>
            <hr/>
        </div>
    </div>

    <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>shop/send_order/<?php echo $product->id ?>" role="form">
        <div class="row parent spacer">

            <div class="col-colorpicker text-center">

                <div class="picker-container noselect">
                    <?php foreach ($colors as $color): ?>
                        <div class="picked">
                            <img src="<?php echo base_url(); ?>assets/site/img/shop/colorpicker/<?php echo $color ?>.png" class="img-responsive">
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>

            <div class="col-details text-center">
                <div class="pack-subtitle-sm"><?php echo $product->sub_title; ?></div>
                <div class="pack-title-sm"><?php echo $product->title; ?></div>
                <div class="pack-price-sm"><?php echo $product->price; ?> USD</div>
                <div class="pack-shipping-sm"> <?php echo $product->free_shipping == 1 ? 'Free Shipping' : '+ Shipping'; ?></div>

                <div class="pack-buttons noselect">
                    <input type="submit" class="btn shop-btn-continue" value="Continue" />
                    <a class="shop-btn-back" href="<?php echo base_url(); ?>shop/shipping/<?php echo $product->id; ?>">Back</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <hr/>
        <div class="row spacer">
            <div id="promo-codes" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <p class="text-center"><strong>Your invoice</strong></p>

                <table class="table table-invoice">
                    <tr>
                        <th width="50">Item</th>
                        <th width="50" class="text-right" colspan="2">Price</th>
                    </tr>
                    <tr>
                        <td>Color Palette</td>
                        <td class="text-right" colspan="2"><?php echo $product->price; ?></td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td class="text-right" colspan="2">0,00 </td>
                    </tr>
                    <tr>
                        <td width="33%" class="no-border">&nbsp;</td>
                        <td width="33%" class="text-right"><strong>TOTAL:</strong></td>
                        <td width="33%" class="border-bottom text-right"><strong><?php echo $product->price; ?></strong></td>
                    </tr>

                </table>

                <div class="text-center mt30">
                    <p class="nomargin text-center"><small>By clicking the Continue button you confirm that you have read, understood and agreed with our <a href="/terms-of-use" class="link-blue">Terms and Conditions</a>.</small></p>
                    <p class="nomargin text-center"><small>The next step will redirect you to our payment provider where you will select your payment method and complete the purchase.</small></p>
                </div>

                <div class="promo-codes mt30">
                    <p>Enter your promo code here:</p>
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
                            <input class="form-control" type="text" name="ignore.code" value="" id="promo-code-input">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 text-right">
                            <a class="btn shop-btn-continue" id="promo-code-btn" href="#">Enter</a>
                        </div>
                    </div>
                    <p class="help-text"><small>Promo codes can be received in Chipolo Newsletter and on our Facebook page as part of special promotions. Be sure to follow us.</small></p>
                </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pl59">
                <strong>Billing address</strong>
                <address>
                    <?php echo 
                            $shipping['fullname']. '<br />'.
                            $shipping['address_1'] . '<br />'. 
                            $shipping['postal_code'].' '.
                            $shipping['city'].' '. 
                            $shipping['country_id'].  '<p>E-mail Address:<br/>'.
                            $shipping['email'].'</p>
                    <p>Phone Number:<br/>'.$shipping['phone'].'</p>';
                      ?>      
                    <p>Package will be shipped to the address above.</p>				</address>

            </div>
            <div class="clearfix"></div>


        </div>

        <hr/>

        <div class="row spacer">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 noselect spacer20">
                Your payment options:		<img src="<?php echo base_url(); ?>assets/site/img/shop/cards/visa.png" class="nomargin" title="Visa" width="45">
                <img src="<?php echo base_url(); ?>assets/site/img/shop/cards/mastercard.png" title="Master Card" width="45">
                <img src="<?php echo base_url(); ?>assets/site/img/shop/cards/amex.png" title="Amex" width="45">
                <img src="<?php echo base_url(); ?>assets/site/img/shop/cards/discover.png" title="Discover" width="45">
                <img src="<?php echo base_url(); ?>assets/site/img/shop/cards/diners.png" title="Diner" width="45">
                <img src="<?php echo base_url(); ?>assets/site/img/shop/cards/paypal.png" title="Paypal" width="45">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 noselect mt10">
                <div class="pack-buttons text-center noselect">
                    <input type="submit" class="btn shop-btn-continue shop-btn-bottom" value="Continue" />
                    <a class="shop-btn-back" href="/shop/customize/1">Back</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>	</form>
</div>



<img src="https://p1.zemanta.com/p/58/shipping/" height="1" width="1" border="0" alt="" />



<div class="shop-common">
    <div class="container">
        <hr/>


        <div class="space80"></div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                <p><img src="<?php echo base_url(); ?>assets/site/img/shop/safety.png" class="img-responsive" width="64"></p>
                <p>
                    <strong>Safety</strong><br/>
                    We use SSL connection for the checkout procedure, so your personal data is safe.					</p>
            </div>

            <div class="clearfix spaced visible-xs"></div>


            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                <p><img src="<?php echo base_url(); ?>assets/site/img/shop/delivery.png" class="img-responsive" width="64"></p>
                <p>
                    <strong>Payment and Delivery</strong><br/>
                    Your order will normally be shipped in three days time from when your order was placed.					</p>
            </div>

            <div class="clearfix spaced visible-xs"></div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                <p><img src="<?php echo base_url(); ?>assets/site/img/shop/packaging.png" class="img-responsive" width="64"></p>
                <p>
                    <strong>Packaging</strong><br/>
                    Each Chipolo is packed individually. The Chipolo box includes one Chipolo, extra battery, a key ring and instructions.					</p>
            </div>
        </div>

        <div class="spaced"></div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <p><img src="<?php echo base_url(); ?>assets/site/img/shop/shipping.png" class="img-responsive" width="64"></p>
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


<img src="https://sp.analytics.yahoo.com/spp.pl?a=10000&.yp=10006654"/>
<img src="https://amplifypixel.outbrain.com/pixel?mid=008e5c3aa9f39d4390777a17f592d8c69e"/>


<script type="text/javascript" src="<?php echo base_url(); ?>assets/site/js/output.min.js"></script>
<!-- Start of chipolo Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed || function (e, t) {
        var n, o, d, i, s, a = [], r = document.createElement("iframe");
        window.zEmbed = function () {
            a.push(arguments)
        }, window.zE = window.zE || window.zEmbed, r.src = "javascript:false", r.title = "", r.role = "presentation", (r.frameElement || r).style.cssText = "display: none", d = document.getElementsByTagName("script"), d = d[d.length - 1], d.parentNode.insertBefore(r, d), i = r.contentWindow, s = i.document;
        try {
            o = s
        } catch (c) {
            n = document.domain, r.src = 'javascript:var d=document.open();d.domain="' + n + '";void(0);', o = s
        }
        o.open()._l = function () {
            var o = this.createElement("script");
            n && (this.domain = n), o.id = "js-iframe-async", o.src = e, this.t = +new Date, this.zendeskHost = t, this.zEQueue = a, this.body.appendChild(o)
        }, o.write('<body onload="document._l();">'), o.close()
    }("https://assets.zendesk.com/embeddable_framework/main.js", "chipolo.zendesk.com"); /*]]>*/</script>
<!-- End of chipolo Zendesk Widget script -->
<style>
    a span.blue {
        color: #63c8ed;
    }
    a span.blue, a span.blue:hover {
        font-weight: 500;
        text-decoration: none !important;
        color: #63c8ed;
    }
    footer, .footer-bottom{
        display: none;
    }
</style>


