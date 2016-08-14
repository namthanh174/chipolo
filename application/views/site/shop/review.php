

<?php foreach ($this->cart->contents() as $items): ?>
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
                    <li><a href="<?php echo base_url(); ?>shop/customize/<?php echo $items['id'] ?>" class="link-blue">Pick your colors</a></li>
                    <li> > </li>
                    <li><a href="<?php echo base_url(); ?>shop/shipping" class="link-blue">Fill your address</a></li>
                    <li> > </li>
                    <li><strong>Confirm your order</strong></li>
                </ul>
                <hr/>
            </div>
        </div>

        <form class="form-horizontal" method="post" action="" role="form">
            <div class="row parent spacer">

                <div class="col-colorpicker text-center">

                    <div class="picker-container noselect">
                        <?php foreach (json_decode($items['colors']) as $color): ?>
                            <div class="picked">
                                <img src="<?php echo base_url(); ?>assets/site/img/shop/colorpicker/<?php echo $color ?>.png" class="img-responsive">
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>

                <div class="col-details text-center">
                    <div class="pack-subtitle-sm"><?php echo $items['name']; ?></div>
                    <div class="pack-title-sm"><?php echo $items['title']; ?></div>
                    <div class="pack-price-sm"><?php echo $items['price']; ?> USD</div>


                    <div class="pack-buttons noselect">
                        <input type="submit" class="btn shop-btn-continue" value="Continue" name="order-continue" />
                        <a class="shop-btn-back" href="<?php echo base_url(); ?>shop/shipping; ?>">Back</a>
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
                            <td class="text-right" colspan="2"><?php echo $items['price']; ?> USD</td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td class="text-right" colspan="2">0,00 </td>
                        </tr>
                        <tr>
                            <td width="33%" class="no-border">&nbsp;</td>
                            <td width="33%" class="text-right"><strong>TOTAL:</strong></td>
                            <td width="33%" class="border-bottom text-right"><strong><?php echo $items['price']; ?> USD</strong></td>
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
                        <?php
                        echo
                        $items['fullname'] . '<br />' .
                        $items['address_1'] . '<br />' .
                        $items['postal_code'] . ' ' .
                        $items['city'] . ' ' .
                        $items['country_id'] . '<p>E-mail Address:<br/>' .
                        $items['email'] . '</p>
                    <p>Phone Number:<br/>' . $items['phone'] . '</p>';
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
                        <input type="submit" class="btn shop-btn-continue shop-btn-bottom" value="Continue" name="order-continue"/>
                        <a class="shop-btn-back" href="/shop/customize/1">Back</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>	</form>
<?php endforeach; ?>
</div>



<img src="https://p1.zemanta.com/p/58/shipping/" height="1" width="1" border="0" alt="" />






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

</style>


