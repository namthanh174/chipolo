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

    <form action="/shop/shipping" method="post" name="frm-shipping" role="form" class="form-horizontal">
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
        <div id="details" class="row spacer">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12"><h3>Billing address</h3></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>

        <div class="form-group <?php echo isset($checkRequiredEmail) ? $checkRequiredEmail : '';?>">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">E-mail Address</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="email" name="email" class="form-control" placeholder="Your E-mail address" value="">
            </div>
            <?php if (isset($checkRequiredEmail)) :?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <p class="help-block error-block" style="display:block">* This field is required!</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group <?php echo isset($checkRequiredFullName) ? $checkRequiredFullName : '';?>">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">First and last name</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="full_name" class="form-control" placeholder="Your full name" value="" maxlength="35"/>
            </div>
            <?php if (isset($checkRequiredFullName)) :?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <p class="help-block error-block" style="display:block">* This field is required!</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group <?php echo isset($checkRequiredAddress1) ? $checkRequiredAddress1 : '';?>">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">Address</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="address1" class="form-control" placeholder="Street address and house number" value="" maxlength="35">
            </div>
            <?php if (isset($checkRequiredAddress1)) :?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <p class="help-block error-block" style="display:block">* This field is required!</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">&nbsp;</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="address2" class="form-control" placeholder="Aapartment no., building, company name, etc." value="" maxlength="35">
            </div>
        </div>

        <div class="form-group <?php echo isset($checkRequiredZip) ? $checkRequiredZip : '';?>">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">Postal code</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="zip" class="form-control" placeholder="Postal code" value="" maxlength="15">
            </div>
            <?php if (isset($checkRequiredZip)) :?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <p class="help-block error-block" style="display:block">* This field is required!</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group <?php echo isset($checkRequiredCity) ? $checkRequiredCity : '';?>">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">City</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="city" class="form-control" placeholder="City" value="" maxlength="35">
            </div>
            <?php if (isset($checkRequiredCity)) :?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <p class="help-block error-block" style="display:block">* This field is required!</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">Country</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <select name="country_code" class="form-control country_code" data-validate="required">
                    <option value=""> -- Please, select your country. -- </option>
                    <?php foreach ($countries as $item):?>
                        <option value="<?php echo strtolower($item['country_code']);?>"><?php echo $item['country_name'];?></option>
                    <?php endforeach; ?>    
                </select>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <p class="help-block">* This field is required!</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">State / province</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="state" class="form-control states" placeholder="State / region / province." value="" maxlength="35">
                <select class="form-control states" style="display: none">
                    <option value="AL" >Alabama</option>
                    <option value="AK" >Alaska</option>
                    <option value="AZ" >Arizona</option>
                    <option value="AR" >Arkansas</option>
                    <option value="CA" >California</option>
                    <option value="CO" >Colorado</option>
                    <option value="CT" >Connecticut</option>
                    <option value="DE" >Delaware</option>
                    <option value="FL" >Florida</option>
                    <option value="GA" >Georgia</option>
                    <option value="HI" >Hawaii</option>
                    <option value="ID" >Idaho</option>
                    <option value="IL" >Illinois</option>
                    <option value="IN" >Indiana</option>
                    <option value="IA" >Iowa</option>
                    <option value="KS" >Kansas</option>
                    <option value="KY" >Kentucky</option>
                    <option value="LA" >Louisiana</option>
                    <option value="ME" >Maine</option>
                    <option value="MD" >Maryland</option>
                    <option value="MA" >Massachusetts</option>
                    <option value="MI" >Michigan</option>
                    <option value="MN" >Minnesota</option>
                    <option value="MS" >Mississippi</option>
                    <option value="MO" >Missouri</option>
                    <option value="MT" >Montana</option>
                    <option value="NE" >Nebraska</option>
                    <option value="NV" >Nevada</option>
                    <option value="NH" >New Hampshire</option>
                    <option value="NJ" >New Jersey</option>
                    <option value="NM" >New Mexico</option>
                    <option value="NY" >New York</option>
                    <option value="NC" >North Carolina</option>
                    <option value="ND" >North Dakota</option>
                    <option value="OH" >Ohio</option>
                    <option value="OK" >Oklahoma</option>
                    <option value="OR" >Oregon</option>
                    <option value="PA" >Pennsylvania</option>
                    <option value="RI" >Rhode Island</option>
                    <option value="SC" >South Carolina</option>
                    <option value="SD" >South Dakota</option>
                    <option value="TN" >Tennessee</option>
                    <option value="TX" >Texas</option>
                    <option value="UT" >Utah</option>
                    <option value="VT" >Vermont</option>
                    <option value="VA" >Virginia</option>
                    <option value="WA" >Washington</option>
                    <option value="WV" >West Virginia</option>
                    <option value="WI" >Wisconsin</option>
                    <option value="WY" >Wyoming</option>
                    <option value="DC" >Washington DC</option>
                </select>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <p class="help-block error-block">
                    * This field is required!                                   </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">Phone Number</label>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <input type="text" name="phone" class="form-control" placeholder="Phone number (eg. +38641321123)" value="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <p class="help-block">
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></label>
                <div class="col-xs-9">
                    <label>
                        <input type="checkbox" name="subscribe" value="1" checked="checked">I would like to subscribe to the Chipolo newsletter.                </label>
                    </div>
                </div>

                <div class="form-group spacer">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center text-lg">
                        <p class="nomargin shipping-differs-text">Billing address is the same as shipping address</p>
                        <strong><a href="#" class="link-blue shipping-differs-toggle">Use a different shipping address</a></strong>
                        <input type="hidden" name="shipping_differs" value="0">
                    </div>
                </div>

                <div class="shipping-differs mb40" style="display: none;">
                    <div class="row spacer">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12"><h3>E-mail Address</h3></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">E-mail Address</label>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <input type="email" name="shp_email" class="form-control" placeholder="Recievers email" value="" maxlength="50">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <p class="help-block">
                                * This field is required!                                           </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="form-group">
                            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">First and last name</label>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <input type="text" name="shp_full_name" class="form-control" placeholder="Recievers full name" value="" maxlength="35">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <p class="help-block error-block">
                                    * This field is required!                                           </p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">Address</label>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                    <input type="text" name="shp_address1" class="form-control" placeholder="Street address 1" value="" maxlength="35">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <p class="help-block error-block">
                                        * This field is required!                                           </p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></label>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <input type="text" name="shp_address2" class="form-control not-required" placeholder="Street address 2 (apartment, building, company name)" value="" maxlength="35">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <p class="help-block error-block">
                                            * This field is required!                                           </p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">Postal code</label>
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                            <input type="text" name="shp_zip" class="form-control" placeholder="Postal code or Zip number" value="" maxlength="15">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <p class="help-block">
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">City</label>
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                            <input type="text" name="shp_city" class="form-control" placeholder="City" value="" maxlength="35">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <p class="help-block error-block">
                                                * This field is required!                                           </p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">Country</label>
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                <select name="shp_country_code" class="form-control country_code" data-validate="required" data-required-message="* This field is required!">
                                                    <option value=""> -- Please, select your country. -- </option>
                                                    <?php foreach ($countries as $item):?>
                                                        <option value="<?php echo strtolower($item['country_code']);?>"><?php echo $item['country_name'];?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <p class="help-block">* This field is required!</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">State / province</label>
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                <input type="text" name="shp_state" class="shp_states form-control not-required" placeholder="State / region / province." value="" maxlength="35">
                                                <select class="form-control shp_states" style="display: none">
                                                    <option value="AL" >Alabama</option>
                                                    <option value="AK" >Alaska</option>
                                                    <option value="AZ" >Arizona</option>
                                                    <option value="AR" >Arkansas</option>
                                                    <option value="CA" >California</option>
                                                    <option value="CO" >Colorado</option>
                                                    <option value="CT" >Connecticut</option>
                                                    <option value="DE" >Delaware</option>
                                                    <option value="FL" >Florida</option>
                                                    <option value="GA" >Georgia</option>
                                                    <option value="HI" >Hawaii</option>
                                                    <option value="ID" >Idaho</option>
                                                    <option value="IL" >Illinois</option>
                                                    <option value="IN" >Indiana</option>
                                                    <option value="IA" >Iowa</option>
                                                    <option value="KS" >Kansas</option>
                                                    <option value="KY" >Kentucky</option>
                                                    <option value="LA" >Louisiana</option>
                                                    <option value="ME" >Maine</option>
                                                    <option value="MD" >Maryland</option>
                                                    <option value="MA" >Massachusetts</option>
                                                    <option value="MI" >Michigan</option>
                                                    <option value="MN" >Minnesota</option>
                                                    <option value="MS" >Mississippi</option>
                                                    <option value="MO" >Missouri</option>
                                                    <option value="MT" >Montana</option>
                                                    <option value="NE" >Nebraska</option>
                                                    <option value="NV" >Nevada</option>
                                                    <option value="NH" >New Hampshire</option>
                                                    <option value="NJ" >New Jersey</option>
                                                    <option value="NM" >New Mexico</option>
                                                    <option value="NY" >New York</option>
                                                    <option value="NC" >North Carolina</option>
                                                    <option value="ND" >North Dakota</option>
                                                    <option value="OH" >Ohio</option>
                                                    <option value="OK" >Oklahoma</option>
                                                    <option value="OR" >Oregon</option>
                                                    <option value="PA" >Pennsylvania</option>
                                                    <option value="RI" >Rhode Island</option>
                                                    <option value="SC" >South Carolina</option>
                                                    <option value="SD" >South Dakota</option>
                                                    <option value="TN" >Tennessee</option>
                                                    <option value="TX" >Texas</option>
                                                    <option value="UT" >Utah</option>
                                                    <option value="VT" >Vermont</option>
                                                    <option value="VA" >Virginia</option>
                                                    <option value="WA" >Washington</option>
                                                    <option value="WV" >West Virginia</option>
                                                    <option value="WI" >Wisconsin</option>
                                                    <option value="WY" >Wyoming</option>
                                                    <option value="DC" >Washington DC</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <p class="help-block error-block">
                                                    * This field is required!                                           </p>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">Phone Number</label>
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                    <input type="text" name="shp_phone" class="form-control" placeholder="Recipients phone number" value="">
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <p class="help-block">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                <p class="text-center"><small>*Shipping costs depend on the delivery address and will be calculated on the next step.</small></p>
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
                                            </div>

                                        </form>
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
<script>
$(document).ready(function()
{
    $( ".country_code" ).change(function() {
      $.ajax({
          type: "POST",
          url: '/shop/load-state/',
          data: "country_id=123",
          success: function (data) {
            alert(data);
          }
        });
    });
    orderForm.shippingCheck();
    orderForm.requiredCheck();
    $(".shipping-differs-toggle").click(function(e) {
        if ($(this).hasClass("active")) {
            $(".shipping-differs-text").text("Shipping address is the same as billing address");
            $(this).text("Use a different shipping address");
            $("input[name=shipping_differs]").val(0);
            $(this).removeClass("active")
        } else {
            $(".shipping-differs-text").text("Shipping address is different than billing address");
            $(this).text("Use billing address for shipping");
            $("input[name=shipping_differs]").val(1);
            $(this).addClass("active")
        }
        e.preventDefault();
        orderForm.shippingCheck();
    });

$("form :input").change(function() {
    orderForm.requiredCheck();
});

var country_code = $('form select[name=country_code]');
if (country_code.val() == 'us') {
    orderForm.showStates(country_code, '.states', 'state');
}
country_code.on('change', function() {
    orderForm.showStates(this, '.states', 'state');
});

var shp_country_code = $('form select[name=shp_country_code]');
if (shp_country_code.val() == 'us') {
    orderForm.showStates(shp_country_code, '.shp_states', 'shp_state');
}
shp_country_code.on('change', function() {
    orderForm.showStates(this, '.shp_states', 'shp_state');
});


$('#fvc').flexVerticalCenter({ cssAttribute: 'padding-top', parentSelector: '.parent' });
});

var orderForm = {
    shippingCheck: function() {
        if ($("input[name=shipping_differs]").val()  == 1) {
            $(".shipping-differs").show();
        } else {
            $(".shipping-differs").hide();
        }
    },
    requiredCheck: function()
    {
        $('input[type=submit]').removeClass('disabled');
        var required = ['email','full_name','address1','zip','city','phone'];
        $.each(required, function(i,val) {
            var input = $('input[name='+val+']');
            if (input.val().trim() == '') {
                $('input[type=submit]').addClass('disabled');
                return false;
            }
        });
        if ($('select[name=country_code]').val().trim() == '') {
            $('input[type=submit]').addClass('disabled');
            return false;
        }
    },
    showStates: function(el, selector, name) {
        $('' + selector).css({ display: 'none'});

        if ($(el).val() == 'us') {

            $('select' + selector).attr({
                name: name
            });
            $('select' + selector).css({
                display: 'block'
            })
            $('input' + selector).removeAttr('name');

        } else {
            $('select' + selector).removeAttr('name');
            $('input' + selector).attr({
                name: name
            });
            $('input' + selector).css({
                display: 'block'
            });
        }
    }
}
</script>