
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

    <form class="form-horizontal" method="post" action="<?php echo base_url()?>shop/review/<?php echo $product->id; ?>" role="form">
        <div class="row parent spacer">

            <div class="col-colorpicker text-center">

                <div class="picker-container noselect">
                    <?php foreach($colors as $color): ?>
                        <div class="picked">
                            <img src="<?php echo base_url(); ?>assets/site/img/shop/colorpicker/<?php echo $color ?>.png" class="img-responsive">
                        </div>
                    <input type="hidden" name="colors[]" value="<?php set_value($color); ?>" />
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
                    <a class="shop-btn-back" href="<?php echo base_url(); ?>shop/customize/<?php echo $product->id; ?>">Back</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <hr/>
        <input type="hidden" name="total" value="<?php set_value($product->price); ?>"/>
        <div id="details" class="row spacer">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12"><h3>Billing address</h3></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>

        <div class="form-group">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">E-mail Address</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="email" name="email" class="form-control" placeholder="Your E-mail address" value="hhdghds@gmail.com">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <p class="help-block error-block">
                </p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">First and last name</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="full_name" class="form-control" placeholder="Your full name" value="dsjdjds" maxlength="35"/>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <p class="help-block error-block">
                    * This field is required!				    				</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">Address</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="address1" class="form-control" placeholder="Street address and house number" value="123 str" maxlength="35">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <p class="help-block error-block">
                    * This field is required!				    				</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">&nbsp;</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="address2" class="form-control" placeholder="Aapartment no., building, company name, etc." value="" maxlength="35">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <p class="help-block error-block">
                    * This field is required!				    				</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">Postal code</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="zip" class="form-control" placeholder="Postal code" value="12131313" maxlength="15">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <p class="help-block" >
                </p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">City</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="city" class="form-control" placeholder="City" value="newkkd" maxlength="35">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <p class="help-block error-block">
                    * This field is required!				    				</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">Country</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <select name="country_code" class="form-control" data-validate="required">
                    <option value=""> -- Please, select your country. -- </option>
                    <option value="af"selected="selected">Afghanistan</option>
                    <option value="ax">Åland Islands</option>
                    <option value="al">Albania</option>
                    <option value="dz">Algeria</option>
                    <option value="as">American Samoa</option>
                    <option value="ad">Andorra</option>
                    <option value="ao">Angola</option>
                    <option value="ai">Anguilla</option>
                    <option value="ag">Antigua and Barbuda</option>
                    <option value="ar">Argentina</option>
                    <option value="am">Armenia</option>
                    <option value="aw">Aruba</option>
                    <option value="au">Australia</option>
                    <option value="at">Austria</option>
                    <option value="az">Azerbaijan</option>
                    <option value="bs">Bahamas</option>
                    <option value="bh">Bahrain</option>
                    <option value="bd">Bangladesh</option>
                    <option value="bb">Barbados</option>
                    <option value="by">Belarus</option>
                    <option value="be">Belgium</option>
                    <option value="bz">Belize</option>
                    <option value="bj">Benin</option>
                    <option value="bm">Bermuda</option>
                    <option value="bt">Bhutan</option>
                    <option value="bo">Bolivia</option>
                    <option value="ba">Bosnia and Herzegovina</option>
                    <option value="bw">Botswana</option>
                    <option value="bv">Bouvet Island</option>
                    <option value="br">Brazil</option>
                    <option value="io">British Indian Ocean Territory</option>
                    <option value="bn">Brunei Darussalam</option>
                    <option value="bg">Bulgaria</option>
                    <option value="bf">Burkina Faso</option>
                    <option value="bi">Burundi</option>
                    <option value="kh">Cambodia</option>
                    <option value="cm">Cameroon</option>
                    <option value="ca">Canada</option>
                    <option value="cv">Cape Verde</option>
                    <option value="ky">Cayman Islands</option>
                    <option value="cf">Central African Republic</option>
                    <option value="td">Chad</option>
                    <option value="cl">Chile</option>
                    <option value="cn">China</option>
                    <option value="cx">Christmas Island</option>
                    <option value="cc">Cocos (Keeling) Islands</option>
                    <option value="co">Colombia</option>
                    <option value="km">Comoros</option>
                    <option value="cg">Congo</option>
                    <option value="cd">Congo, the Democratic Republic of the</option>
                    <option value="ck">Cook Islands</option>
                    <option value="cr">Costa Rica</option>
                    <option value="ci">Côte d'Ivoire</option>
                    <option value="hr">Croatia</option>
                    <option value="cu">Cuba</option>
                    <option value="cy">Cyprus</option>
                    <option value="cz">Czech Republic</option>
                    <option value="dk">Denmark</option>
                    <option value="dj">Djibouti</option>
                    <option value="dm">Dominica</option>
                    <option value="do">Dominican Republic</option>
                    <option value="ec">Ecuador</option>
                    <option value="eg">Egypt</option>
                    <option value="sv">El Salvador</option>
                    <option value="gq">Equatorial Guinea</option>
                    <option value="er">Eritrea</option>
                    <option value="ee">Estonia</option>
                    <option value="et">Ethiopia</option>
                    <option value="fk">Falkland Islands (Malvinas)</option>
                    <option value="fo">Faroe Islands</option>
                    <option value="fj">Fiji</option>
                    <option value="fi">Finland</option>
                    <option value="fr">France</option>
                    <option value="gf">French Guiana</option>
                    <option value="pf">French Polynesia</option>
                    <option value="tf">French Southern Territories</option>
                    <option value="ga">Gabon</option>
                    <option value="gm">Gambia</option>
                    <option value="ge">Georgia</option>
                    <option value="de">Germany</option>
                    <option value="gh">Ghana</option>
                    <option value="gi">Gibraltar</option>
                    <option value="gr">Greece</option>
                    <option value="gl">Greenland</option>
                    <option value="gd">Grenada</option>
                    <option value="gp">Guadeloupe</option>
                    <option value="gu">Guam</option>
                    <option value="gt">Guatemala</option>
                    <option value="gn">Guinea</option>
                    <option value="gw">Guinea-Bissau</option>
                    <option value="gy">Guyana</option>
                    <option value="ht">Haiti</option>
                    <option value="hm">Heard Island and McDonald Islands</option>
                    <option value="hn">Honduras</option>
                    <option value="hk">Hong Kong</option>
                    <option value="hu">Hungary</option>
                    <option value="is">Iceland</option>
                    <option value="in">India</option>
                    <option value="id">Indonesia</option>
                    <option value="ir">Iran, Islamic Republic of</option>
                    <option value="iq">Iraq</option>
                    <option value="ie">Ireland</option>
                    <option value="il">Israel</option>
                    <option value="it">Italy</option>
                    <option value="jm">Jamaica</option>
                    <option value="jp">Japan</option>
                    <option value="jo">Jordan</option>
                    <option value="kz">Kazakhstan</option>
                    <option value="ke">Kenya</option>
                    <option value="ki">Kiribati</option>
                    <option value="kp">Korea, Democratic People's Republic of</option>
                    <option value="kr">Korea, Republic of</option>
                    <option value="kw">Kuwait</option>
                    <option value="kg">Kyrgyzstan</option>
                    <option value="la">Lao People's Democratic Republic</option>
                    <option value="lv">Latvia</option>
                    <option value="lb">Lebanon</option>
                    <option value="ls">Lesotho</option>
                    <option value="lr">Liberia</option>
                    <option value="ly">Libyan Arab Jamahiriya</option>
                    <option value="li">Liechtenstein</option>
                    <option value="lt">Lithuania</option>
                    <option value="lu">Luxembourg</option>
                    <option value="mo">Macao</option>
                    <option value="mk">Macedonia, the former Yugoslav Republic of</option>
                    <option value="mg">Madagascar</option>
                    <option value="mw">Malawi</option>
                    <option value="my">Malaysia</option>
                    <option value="mv">Maldives</option>
                    <option value="ml">Mali</option>
                    <option value="mt">Malta</option>
                    <option value="mh">Marshall Islands</option>
                    <option value="mq">Martinique</option>
                    <option value="mr">Mauritania</option>
                    <option value="mu">Mauritius</option>
                    <option value="yt">Mayotte</option>
                    <option value="mx">Mexico</option>
                    <option value="fm">Micronesia, Federated States of</option>
                    <option value="md">Moldova</option>
                    <option value="mc">Monaco</option>
                    <option value="mn">Mongolia</option>
                    <option value="me">Montenegro</option>
                    <option value="ms">Montserrat</option>
                    <option value="ma">Morocco</option>
                    <option value="mz">Mozambique</option>
                    <option value="mm">Myanmar</option>
                    <option value="na">Namibia</option>
                    <option value="nr">Nauru</option>
                    <option value="np">Nepal</option>
                    <option value="nl">Netherlands</option>
                    <option value="an">Netherlands Antilles</option>
                    <option value="nc">New Caledonia</option>
                    <option value="nz">New Zealand</option>
                    <option value="ni">Nicaragua</option>
                    <option value="ne">Niger</option>
                    <option value="ng">Nigeria</option>
                    <option value="nu">Niue</option>
                    <option value="nf">Norfolk Island</option>
                    <option value="mp">Northern Mariana Islands</option>
                    <option value="no">Norway</option>
                    <option value="om">Oman</option>
                    <option value="pk">Pakistan</option>
                    <option value="pw">Palau</option>
                    <option value="ps">Palestinian Territory, Occupied</option>
                    <option value="pa">Panama</option>
                    <option value="pg">Papua New Guinea</option>
                    <option value="py">Paraguay</option>
                    <option value="pe">Peru</option>
                    <option value="ph">Philippines</option>
                    <option value="pn">Pitcairn</option>
                    <option value="pl">Poland</option>
                    <option value="pt">Portugal</option>
                    <option value="pr">Puerto Rico</option>
                    <option value="qa">Qatar</option>
                    <option value="re">Réunion</option>
                    <option value="ro">Romania</option>
                    <option value="rw">Rwanda</option>
                    <option value="sh">Saint Helena</option>
                    <option value="kn">Saint Kitts and Nevis</option>
                    <option value="lc">Saint Lucia</option>
                    <option value="pm">Saint Pierre and Miquelon</option>
                    <option value="vc">Saint Vincent and the Grenadines</option>
                    <option value="ws">Samoa</option>
                    <option value="sm">San Marino</option>
                    <option value="st">Sao Tome and Principe</option>
                    <option value="sa">Saudi Arabia</option>
                    <option value="sn">Senegal</option>
                    <option value="rs">Serbia</option>
                    <option value="sc">Seychelles</option>
                    <option value="sl">Sierra Leone</option>
                    <option value="sg">Singapore</option>
                    <option value="sk">Slovakia</option>
                    <option value="si">Slovenia</option>
                    <option value="sb">Solomon Islands</option>
                    <option value="so">Somalia</option>
                    <option value="za">South Africa</option>
                    <option value="gs">South Georgia and the South Sandwich Islands</option>
                    <option value="es">Spain</option>
                    <option value="lk">Sri Lanka</option>
                    <option value="sd">Sudan</option>
                    <option value="sr">Suriname</option>
                    <option value="sj">Svalbard and Jan Mayen</option>
                    <option value="sz">Swaziland</option>
                    <option value="se">Sweden</option>
                    <option value="ch">Switzerland</option>
                    <option value="sy">Syrian Arab Republic</option>
                    <option value="tw">Taiwan, Province of China</option>
                    <option value="tj">Tajikistan</option>
                    <option value="tz">Tanzania, United Republic of</option>
                    <option value="th">Thailand</option>
                    <option value="tl">Timor-Leste</option>
                    <option value="tg">Togo</option>
                    <option value="tk">Tokelau</option>
                    <option value="to">Tonga</option>
                    <option value="tt">Trinidad and Tobago</option>
                    <option value="tn">Tunisia</option>
                    <option value="tr">Turkey</option>
                    <option value="tm">Turkmenistan</option>
                    <option value="tc">Turks and Caicos Islands</option>
                    <option value="tv">Tuvalu</option>
                    <option value="ug">Uganda</option>
                    <option value="ua">Ukraine</option>
                    <option value="ae">United Arab Emirates</option>
                    <option value="gb">United Kingdom</option>
                    <option value="us">United States</option>
                    <option value="um">United States Minor Outlying Islands</option>
                    <option value="uy">Uruguay</option>
                    <option value="uz">Uzbekistan</option>
                    <option value="vu">Vanuatu</option>
                    <option value="ve">Venezuela</option>
                    <option value="vn">Viet Nam</option>
                    <option value="vg">Virgin Islands, British</option>
                    <option value="vi">Virgin Islands, U.S.</option>
                    <option value="wf">Wallis and Futuna</option>
                    <option value="eh">Western Sahara</option>
                    <option value="ye">Yemen</option>
                    <option value="zm">Zambia</option>
                    <option value="zw">Zimbabwe</option>
                </select>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <p class="help-block">* This field is required!</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">State / province</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="state" class="form-control states" placeholder="State / region / province." value="vnh" maxlength="35">
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
                    * This field is required!				    				</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">Phone Number</label>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="phone" class="form-control" placeholder="Phone number (eg. +38641321123)" value="+38641321123">
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
                    <input type="checkbox" name="subscribe" value="1" checked="checked">I would like to subscribe to the Chipolo newsletter.				</label>
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

        <div class="shipping-differs mb40">
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
                        * This field is required!					    					</p>
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
                        * This field is required!					    					</p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">Address</label>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <input type="text" name="shp_address1" class="form-control" placeholder="Street address 1" value="" maxlength="35">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <p class="help-block error-block">
                        * This field is required!					    					</p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></label>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <input type="text" name="shp_address2" class="form-control not-required" placeholder="Street address 2 (apartment, building, company name)" value="" maxlength="35">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <p class="help-block error-block">
                        * This field is required!					    					</p>
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
                        * This field is required!					    					</p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12  text-right">Country</label>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <select name="shp_country_code" class="form-control" data-validate="required" data-required-message="* This field is required!">
                        <option value=""> -- Please, select your country. -- </option>
                        <option value="af">Afghanistan</option>
                        <option value="ax">Åland Islands</option>
                        <option value="al">Albania</option>
                        <option value="dz">Algeria</option>
                        <option value="as">American Samoa</option>
                        <option value="ad">Andorra</option>
                        <option value="ao">Angola</option>
                        <option value="ai">Anguilla</option>
                        <option value="ag">Antigua and Barbuda</option>
                        <option value="ar">Argentina</option>
                        <option value="am">Armenia</option>
                        <option value="aw">Aruba</option>
                        <option value="au">Australia</option>
                        <option value="at">Austria</option>
                        <option value="az">Azerbaijan</option>
                        <option value="bs">Bahamas</option>
                        <option value="bh">Bahrain</option>
                        <option value="bd">Bangladesh</option>
                        <option value="bb">Barbados</option>
                        <option value="by">Belarus</option>
                        <option value="be">Belgium</option>
                        <option value="bz">Belize</option>
                        <option value="bj">Benin</option>
                        <option value="bm">Bermuda</option>
                        <option value="bt">Bhutan</option>
                        <option value="bo">Bolivia</option>
                        <option value="ba">Bosnia and Herzegovina</option>
                        <option value="bw">Botswana</option>
                        <option value="bv">Bouvet Island</option>
                        <option value="br">Brazil</option>
                        <option value="io">British Indian Ocean Territory</option>
                        <option value="bn">Brunei Darussalam</option>
                        <option value="bg">Bulgaria</option>
                        <option value="bf">Burkina Faso</option>
                        <option value="bi">Burundi</option>
                        <option value="kh">Cambodia</option>
                        <option value="cm">Cameroon</option>
                        <option value="ca">Canada</option>
                        <option value="cv">Cape Verde</option>
                        <option value="ky">Cayman Islands</option>
                        <option value="cf">Central African Republic</option>
                        <option value="td">Chad</option>
                        <option value="cl">Chile</option>
                        <option value="cn">China</option>
                        <option value="cx">Christmas Island</option>
                        <option value="cc">Cocos (Keeling) Islands</option>
                        <option value="co">Colombia</option>
                        <option value="km">Comoros</option>
                        <option value="cg">Congo</option>
                        <option value="cd">Congo, the Democratic Republic of the</option>
                        <option value="ck">Cook Islands</option>
                        <option value="cr">Costa Rica</option>
                        <option value="ci">Côte d'Ivoire</option>
                        <option value="hr">Croatia</option>
                        <option value="cu">Cuba</option>
                        <option value="cy">Cyprus</option>
                        <option value="cz">Czech Republic</option>
                        <option value="dk">Denmark</option>
                        <option value="dj">Djibouti</option>
                        <option value="dm">Dominica</option>
                        <option value="do">Dominican Republic</option>
                        <option value="ec">Ecuador</option>
                        <option value="eg">Egypt</option>
                        <option value="sv">El Salvador</option>
                        <option value="gq">Equatorial Guinea</option>
                        <option value="er">Eritrea</option>
                        <option value="ee">Estonia</option>
                        <option value="et">Ethiopia</option>
                        <option value="fk">Falkland Islands (Malvinas)</option>
                        <option value="fo">Faroe Islands</option>
                        <option value="fj">Fiji</option>
                        <option value="fi">Finland</option>
                        <option value="fr">France</option>
                        <option value="gf">French Guiana</option>
                        <option value="pf">French Polynesia</option>
                        <option value="tf">French Southern Territories</option>
                        <option value="ga">Gabon</option>
                        <option value="gm">Gambia</option>
                        <option value="ge">Georgia</option>
                        <option value="de">Germany</option>
                        <option value="gh">Ghana</option>
                        <option value="gi">Gibraltar</option>
                        <option value="gr">Greece</option>
                        <option value="gl">Greenland</option>
                        <option value="gd">Grenada</option>
                        <option value="gp">Guadeloupe</option>
                        <option value="gu">Guam</option>
                        <option value="gt">Guatemala</option>
                        <option value="gn">Guinea</option>
                        <option value="gw">Guinea-Bissau</option>
                        <option value="gy">Guyana</option>
                        <option value="ht">Haiti</option>
                        <option value="hm">Heard Island and McDonald Islands</option>
                        <option value="hn">Honduras</option>
                        <option value="hk">Hong Kong</option>
                        <option value="hu">Hungary</option>
                        <option value="is">Iceland</option>
                        <option value="in">India</option>
                        <option value="id">Indonesia</option>
                        <option value="ir">Iran, Islamic Republic of</option>
                        <option value="iq">Iraq</option>
                        <option value="ie">Ireland</option>
                        <option value="il">Israel</option>
                        <option value="it">Italy</option>
                        <option value="jm">Jamaica</option>
                        <option value="jp">Japan</option>
                        <option value="jo">Jordan</option>
                        <option value="kz">Kazakhstan</option>
                        <option value="ke">Kenya</option>
                        <option value="ki">Kiribati</option>
                        <option value="kp">Korea, Democratic People's Republic of</option>
                        <option value="kr">Korea, Republic of</option>
                        <option value="kw">Kuwait</option>
                        <option value="kg">Kyrgyzstan</option>
                        <option value="la">Lao People's Democratic Republic</option>
                        <option value="lv">Latvia</option>
                        <option value="lb">Lebanon</option>
                        <option value="ls">Lesotho</option>
                        <option value="lr">Liberia</option>
                        <option value="ly">Libyan Arab Jamahiriya</option>
                        <option value="li">Liechtenstein</option>
                        <option value="lt">Lithuania</option>
                        <option value="lu">Luxembourg</option>
                        <option value="mo">Macao</option>
                        <option value="mk">Macedonia, the former Yugoslav Republic of</option>
                        <option value="mg">Madagascar</option>
                        <option value="mw">Malawi</option>
                        <option value="my">Malaysia</option>
                        <option value="mv">Maldives</option>
                        <option value="ml">Mali</option>
                        <option value="mt">Malta</option>
                        <option value="mh">Marshall Islands</option>
                        <option value="mq">Martinique</option>
                        <option value="mr">Mauritania</option>
                        <option value="mu">Mauritius</option>
                        <option value="yt">Mayotte</option>
                        <option value="mx">Mexico</option>
                        <option value="fm">Micronesia, Federated States of</option>
                        <option value="md">Moldova</option>
                        <option value="mc">Monaco</option>
                        <option value="mn">Mongolia</option>
                        <option value="me">Montenegro</option>
                        <option value="ms">Montserrat</option>
                        <option value="ma">Morocco</option>
                        <option value="mz">Mozambique</option>
                        <option value="mm">Myanmar</option>
                        <option value="na">Namibia</option>
                        <option value="nr">Nauru</option>
                        <option value="np">Nepal</option>
                        <option value="nl">Netherlands</option>
                        <option value="an">Netherlands Antilles</option>
                        <option value="nc">New Caledonia</option>
                        <option value="nz">New Zealand</option>
                        <option value="ni">Nicaragua</option>
                        <option value="ne">Niger</option>
                        <option value="ng">Nigeria</option>
                        <option value="nu">Niue</option>
                        <option value="nf">Norfolk Island</option>
                        <option value="mp">Northern Mariana Islands</option>
                        <option value="no">Norway</option>
                        <option value="om">Oman</option>
                        <option value="pk">Pakistan</option>
                        <option value="pw">Palau</option>
                        <option value="ps">Palestinian Territory, Occupied</option>
                        <option value="pa">Panama</option>
                        <option value="pg">Papua New Guinea</option>
                        <option value="py">Paraguay</option>
                        <option value="pe">Peru</option>
                        <option value="ph">Philippines</option>
                        <option value="pn">Pitcairn</option>
                        <option value="pl">Poland</option>
                        <option value="pt">Portugal</option>
                        <option value="pr">Puerto Rico</option>
                        <option value="qa">Qatar</option>
                        <option value="re">Réunion</option>
                        <option value="ro">Romania</option>
                        <option value="rw">Rwanda</option>
                        <option value="sh">Saint Helena</option>
                        <option value="kn">Saint Kitts and Nevis</option>
                        <option value="lc">Saint Lucia</option>
                        <option value="pm">Saint Pierre and Miquelon</option>
                        <option value="vc">Saint Vincent and the Grenadines</option>
                        <option value="ws">Samoa</option>
                        <option value="sm">San Marino</option>
                        <option value="st">Sao Tome and Principe</option>
                        <option value="sa">Saudi Arabia</option>
                        <option value="sn">Senegal</option>
                        <option value="rs">Serbia</option>
                        <option value="sc">Seychelles</option>
                        <option value="sl">Sierra Leone</option>
                        <option value="sg">Singapore</option>
                        <option value="sk">Slovakia</option>
                        <option value="si">Slovenia</option>
                        <option value="sb">Solomon Islands</option>
                        <option value="so">Somalia</option>
                        <option value="za">South Africa</option>
                        <option value="gs">South Georgia and the South Sandwich Islands</option>
                        <option value="es">Spain</option>
                        <option value="lk">Sri Lanka</option>
                        <option value="sd">Sudan</option>
                        <option value="sr">Suriname</option>
                        <option value="sj">Svalbard and Jan Mayen</option>
                        <option value="sz">Swaziland</option>
                        <option value="se">Sweden</option>
                        <option value="ch">Switzerland</option>
                        <option value="sy">Syrian Arab Republic</option>
                        <option value="tw">Taiwan, Province of China</option>
                        <option value="tj">Tajikistan</option>
                        <option value="tz">Tanzania, United Republic of</option>
                        <option value="th">Thailand</option>
                        <option value="tl">Timor-Leste</option>
                        <option value="tg">Togo</option>
                        <option value="tk">Tokelau</option>
                        <option value="to">Tonga</option>
                        <option value="tt">Trinidad and Tobago</option>
                        <option value="tn">Tunisia</option>
                        <option value="tr">Turkey</option>
                        <option value="tm">Turkmenistan</option>
                        <option value="tc">Turks and Caicos Islands</option>
                        <option value="tv">Tuvalu</option>
                        <option value="ug">Uganda</option>
                        <option value="ua">Ukraine</option>
                        <option value="ae">United Arab Emirates</option>
                        <option value="gb">United Kingdom</option>
                        <option value="us">United States</option>
                        <option value="um">United States Minor Outlying Islands</option>
                        <option value="uy">Uruguay</option>
                        <option value="uz">Uzbekistan</option>
                        <option value="vu">Vanuatu</option>
                        <option value="ve">Venezuela</option>
                        <option value="vn">Viet Nam</option>
                        <option value="vg">Virgin Islands, British</option>
                        <option value="vi">Virgin Islands, U.S.</option>
                        <option value="wf">Wallis and Futuna</option>
                        <option value="eh">Western Sahara</option>
                        <option value="ye">Yemen</option>
                        <option value="zm">Zambia</option>
                        <option value="zw">Zimbabwe</option>
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
                        * This field is required!					    					</p>
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

<script>
    $(document).ready(function ()
    {

        orderForm.shippingCheck();
        orderForm.requiredCheck();
        $(".shipping-differs-toggle").click(function (e) {
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

        $("form :input").change(function () {
            orderForm.requiredCheck();
        });


        var country_code = $('form select[name=country_code]');
        if (country_code.val() == 'us') {
            orderForm.showStates(country_code, '.states', 'state');
        }
        country_code.on('change', function () {
            orderForm.showStates(this, '.states', 'state');
        });

        var shp_country_code = $('form select[name=shp_country_code]');
        if (shp_country_code.val() == 'us') {
            orderForm.showStates(shp_country_code, '.shp_states', 'shp_state');
        }
        shp_country_code.on('change', function () {
            orderForm.showStates(this, '.shp_states', 'shp_state');
        });


        $('#fvc').flexVerticalCenter({cssAttribute: 'padding-top', parentSelector: '.parent'});
    });

    var orderForm = {
        shippingCheck: function () {
            if ($("input[name=shipping_differs]").val() == 1) {
                $(".shipping-differs").show();
            } else {
                $(".shipping-differs").hide();
            }
        },
        requiredCheck: function ()
        {
            $('input[type=submit]').removeClass('disabled');
            var required = ['email', 'full_name', 'address1', 'zip', 'city', 'phone'];
            $.each(required, function (i, val) {
                var input = $('input[name=' + val + ']');
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
        showStates: function (el, selector, name) {
            $('' + selector).css({display: 'none'});

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


