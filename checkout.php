<!DOCTYPE html>
<html>

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122292479-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122292479-1');
</script>
    <title>elementolabs</title>
    <link rel="stylesheet" type="text/css" href="css/checkout.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/landing.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- jQuery library -->

<!-- End of Async Drift Code -->
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '135229380623582'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=135229380623582&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

</head>

<body>
<?php
include 'header-nav.html';
?>

<section class="checkout1" id="checkoutContainer">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <h4>Call us for assistance</h4>
                    <button class="btn-elemento-transparent"><img src="images/call.png" alt="call"> <span>+91 97739 04934</span></button>
                </div>
                <div class="col-md-12" id="countrySelectionContainer" style="text-align: -webkit-center;padding-bottom: 20px;">
                    <span><label for="select">Select your country</label></span>
                    <span>
                            <form style="display: inline-block;">
                           <select name="country" class="custom-select countries order-alpha limit-pop-1000000 presel-byip " id="countryId" onchange="onCountryReselect()">
                                <option value="">Select Country</option>
                            </select>
                        </form></span>
                </div>
            </div>
            <div class="row" id="next-form">

                <div class="row">
                    <div class="col-md-12">
                        <form name="submit-to-google-sheet" id="shippingForm">
                            <span class="shipping">Shipping Details</span>
                            <br>
                            <br>
                            <div class="form-group half">
                                <input type="text" placeholder="First Name" name="f_name" id="f_name" class="fname">
                            </div>

                            <div class="form-group half">
                                <input type="text" placeholder="Last name (optional)" name="l_name" id="l_name" class="lname" >
                            </div>
                            <div class="form-group half optional-field">
                                <input type="text" placeholder="Phone Number" name="number" id="number" class="number" onkeypress="return isNumberKey(event)" maxlength="10">
                            </div>
                            <div class="form-group half">
                                <input type="email" placeholder="Email Address" name="e_mail" id="e_mail" class="email">
                            </div>
                            <div class="form-group optional-field">
                                <input type="text" placeholder="Address" name="address" id="address" class="full-length">
                            </div>
                            <div class="form-group optional-field">
                                <input type="text" placeholder="Apartment, suite, etc. (optional)" class="full-length" id="op_address">
                            </div>
                            <div class="form-group optional-field">
                                <input type="text" placeholder="City" name="city" id="city" class="full-length">
                            </div>
                            <div class="form-group optional-field">
                                <input type="text" placeholder="State" name="state" id="state" class="full-length">
                            </div>
                            <div class="form-group half optional-field">
                                <input type="number" placeholder="Zip Code" name="zipCode" id="zipCode" class="zcode" maxlength="6">
                            </div>

                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row" style="visibility: hidden;">
                                <div class="col-md-6">
                                    <p class="cc">Have a Coupon Code?</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="coupon">
                                        <span>Coupon Applied!</span>
                                        <p>Coupon Code</p>
                                        <input type="text" placeholder="Coupon Code" name="coupon_name" id="coupon_name" class="coupan">
                                        <div class="add-coupon"><i class="material-icons">check</i></div>
                                        <div class="subs-coupon"><i class="material-icons">clear</i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="col-md-4">
            <p>Call us for assistance +91 97739 04934</p>
            <div class="card">
                <div class="chkimg">
                    <img src="images/cart.png">
                </div>
                <span>
                     <p>Product</p>
                     <p id="programNameByType"></p><br>
                  </span>
                <div class="cart" id="cart">

                    <hr>
                    <table>
                        <tr>
                            <th>Price</th>
                            <th></th>
                            <th id="currencyCode"></th>
                            <th id="productPrice"></th>
                        </tr>
                        <tr>
                            <th>Shipping</th>
                            <th></th>
                            <th id="shippingPrice">FREE</th>
                        </tr>
                        <tr>
                            <th>You Pay</th>
                            <th></th>
                            <th id="currencyCode2"></th>
                            <th id="finalPrice"></th>

                        </tr>
                    </table>
                    <div id="juniorProgramButton" class="paymentButtonMargin indian-pg" onclick="postFormDataToGoogle()">
                        <a href="https://www.instamojo.com/elemento/elemento-labs-junior-robotics-program/?embed=form" rel="im-checkout" data-behaviour="remote" data-text="Proceed To Pay" data-style="flat"></a>
                    </div>
                    <div id="seniorProgramButton" class="paymentButtonMargin indian-pg" onclick="postFormDataToGoogle()">
                        <a href="https://www.instamojo.com/elemento/elemento-3-month-program/?embed=form" class="btn btn-buy" rel="im-checkout" data-behaviour="remote" data-text="Proceed to Pay" type="sumbit" data-style="flat"></a>
                    </div>
                    <div id="foreignCheckoutButton">
                        <form action='https://www.2checkout.com/checkout/purchase' method='post' id="pgParams">
                            <input type='hidden' name='sid' value='203687042' />
                            <input type='hidden' name='mode' value='2CO' />
                            <input type='hidden' name='li_0_type' value='product' />
                            <input type='hidden' name='li_0_name' value='Elemento Labs' />
                            <input type='hidden' name='li_0_price' value='' id="li_0_price" />
                            <input type='hidden' name='li_0_tangible' value='Y' />
                            <input type='hidden' name='li_1_type' value='shipping' />
                            <input type='hidden' name='li_1_name' value='Express Shipping' />
                            <input type='hidden' name='li_1_price' value='' id="li_1_price" />
                            <input type='hidden' name='card_holder_name' value='' id="card_holder_name" />
                            <input type='hidden' name='street_address' value='' id="street_address" />
                            <input type='hidden' name='street_address2' value='' id="street_address2" />
                            <input type='hidden' name='city' value='' id="li_city" />
                            <input type='hidden' name='state' value='' id="li_state" />
                            <input type='hidden' name='zip' value='' id="zip" />
                            <input type='hidden' name='country' value='' id="country" />
                            <input type='hidden' name='currency_code' value='' id="currency_code" />

                            <input type='hidden' name='ship_name' value='' id="ship_name" />
                            <input type='hidden' name='ship_street_address' value='' id="ship_street_address" />
                            <input type='hidden' name='ship_street_address2' value='' id="ship_street_address2" />
                            <input type='hidden' name='ship_city' value='' id="ship_city" />
                            <input type='hidden' name='ship_state' value='' id="ship_state" />
                            <input type='hidden' name='ship_zip' value='' id="ship_zip" />
                            <input type='hidden' name='ship_country' value='' id="ship_country"/>
                            <input type='hidden' name='email' value='' id="email"/>
                            <input type='hidden' name='phone' value='' id="phone"/>
                            <input name='submit' type='submit' value='Checkout' style="width: 100%;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    outline: none;
    text-decoration: none;
    cursor: pointer;
    text-align: center;
    display: block;
                            transition: 0.3s;
                            background: #00e6ac !important;
                            color: #fff !important;
                            text-shadow: none;
                            border-radius: 1.5em;
                            padding: 0.6em 1em;" id="foreignCheckout" />
                        </form>
                    </div>
                </div>
            </div>
        </aside>
        <div class="shiping" id="shiping" style="visibility: hidden;">
            <button id="ship-details" class="btn-elemento-light-blue">ENTER SHIPPING DETAILS</button>
        </div>
    </div>
</section>
<div class="proceed mobile-only" style="text-align: -webkit-center;">
    <div id="juniorProgramButtonM" class="paymentButtonMargin" onclick="postFormDataToGoogle()">
        <a href="https://www.instamojo.com/elemento/elemento-labs-junior-robotics-program/?embed=form" rel="im-checkout" data-behaviour="remote" data-text="Proceed To Pay" data-style="flat"></a>
    </div>
    <div id="seniorProgramButtonM" class="paymentButtonMargin" onclick="postFormDataToGoogle()">
        <a href="https://www.instamojo.com/elemento/elemento-3-month-program/?embed=form" class="btn btn-buy" rel="im-checkout" data-behaviour="remote" data-text="Proceed to Pay" type="sumbit" data-style="flat"></a>
    </div>
</div>



<?php
include 'footer.html';
?>
<!--<script src="js/jquery-3.3.1.slim.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!--<script type="text/javascript">-->
    <!--$('.add-coupon').on('click', function() {-->
        <!--if ($(this).val() == '') {-->
            <!--$('.coupon span').addClass('has-success').removeClass('has-warning');-->
            <!--$('.coupon p').addClass('has-success').removeClass('has-warning');-->
            <!--$('table .discount').addClass('has-success').removeClass('has-warning');-->
            <!--$('.coupon .subs-coupon').addClass('has-success').removeClass('has-warning');-->
        <!--}-->
    <!--});-->
<!--</script>-->
<!--<script src="js/jquery-3.3.1.slim.min.js"></script>-->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="https://geodata.solutions/includes/countrystate.js"></script>
<script>
    let pricingObj = {}
    const uri = new URL(window.location.href);
    const product = uri.searchParams.get("productId");
    const UrlBasedOnProductType = (product === 'junior-robotics') ? 'pricing_jr.json' : 'pricing_sr.json';
    $.ajax({
        //The URL to process the request
        'url' : UrlBasedOnProductType,
        'mimeType': "application/json",
        //The type of request, also known as the "method" in HTML forms
        //Can be 'GET' or 'POST'
        'type' : 'GET',
        //Any post-data/get-data parameters
        //The response from the server
        'success' : function(data) {
            console.log(data);
            pricingObj = data;
            //You can use any jQuery/JavaScript here!!!
        }
    });

    let currentCurrenyObj = {};
    let currentCountry = ''
    let checkout2CountryCode = ''
    function ipLookUp () {
        $.getJSON('https://ipapi.co/json/', function(response) {
           // httpGetAsync('pricing_jr.json');
            const ipObj = response;
            currentCountry = ipObj.country;
            renderPricing();
            checkOptionalFieldstoRender(response.country)
        });
    }
    ipLookUp();
    function checkOptionalFieldstoRender(code) {
        let coll=document.getElementsByClassName('optional-field');
        let indianPgBtn = document.getElementsByClassName('indian-pg');
        renderPaymentButton(code);
        if(code.toLowerCase() !== 'in') {
            for(let i=0, len=coll.length; i<len; i++)
            {
                coll[i].style["display"] = "block";
            }
        }
        else {
            for(let i=0, len=coll.length; i<len; i++)
            {
                coll[i].style["display"] = "none";
            }
        }
    }
    function onCountryReselect() {
        var countryCode = $('#countryId option:selected').attr('countryId');
        checkOptionalFieldstoRender(countryCode);
        renderPaymentButton(countryCode);
        for(let i=0; i < pricingObj.length; i++) {
            if(pricingObj[i].countryId === countryCode) {
                currentCurrenyObj = pricingObj[i];
                break;
            }
            else {
                currentCurrenyObj = pricingObj[0];
            }
        }
        document.getElementById('productPrice').innerHTML = currentCurrenyObj.sp;
        document.getElementById('finalPrice').innerHTML = currentCurrenyObj.fp;
        document.getElementById('shippingPrice').innerHTML = currentCurrenyObj.ship;
        document.getElementById('currencyCode').innerHTML = currentCurrenyObj.currency;
        document.getElementById('currencyCode2').innerHTML = currentCurrenyObj.currency;
        checkout2CountryCode = currentCurrenyObj.checkoutID;

    }

    function renderPricing() {
        for(let i=0; i < pricingObj.length; i++) {
            if(pricingObj[i].countryId === currentCountry) {
                currentCurrenyObj = pricingObj[i];
                break;
            }
            else {
                currentCurrenyObj = pricingObj[0];
            }
        }
        document.getElementById('productPrice').innerHTML = currentCurrenyObj.sp;
        document.getElementById('finalPrice').innerHTML = currentCurrenyObj.fp;
        document.getElementById('currencyCode').innerHTML = currentCurrenyObj.currency;
        document.getElementById('currencyCode2').innerHTML = currentCurrenyObj.currency;
        document.getElementById('shippingPrice').innerHTML = currentCurrenyObj.ship;
        checkout2CountryCode = currentCurrenyObj.checkoutID;

    }

</script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    document.getElementById('juniorProgramButton').style.display = 'none';
    document.getElementById('juniorProgramButtonM').style.display = 'none';

    document.getElementById('seniorProgramButton').style.display = 'none';
    document.getElementById('seniorProgramButtonM').style.display = 'none';

    document.getElementById('foreignCheckoutButton').style.display = 'none';

    const url = new URL(window.location.href);
    const productType = url.searchParams.get("productId");
    //jp 1 for junior program & sp1 for sr. program



    renderForeignCheckoutButton = function() {
        document.getElementById('foreignCheckoutButton').style.display = 'block';
        document.getElementById('seniorProgramButton').style.display = 'none';
        document.getElementById('seniorProgramButtonM').style.display = 'none';
        document.getElementById('juniorProgramButton').style.display = 'none';
        document.getElementById('juniorProgramButtonM').style.display = 'none';
    };

    renderCorrectBuyButton = function() {
        document.getElementById('foreignCheckoutButton').style.display = 'none';
        if (productType === 'junior-robotics') {
            document.getElementById('juniorProgramButton').style.display = 'block';
            document.getElementById('juniorProgramButtonM').style.display = 'block';

            document.getElementById('seniorProgramButton').style.display = 'none';
            document.getElementById('seniorProgramButtonM').style.display = 'none';

            // document.getElementById('productPrice').innerHTML = '4,990 INR';
            // document.getElementById('finalPrice').innerHTML = '4,990 INR';
            document.getElementById('programNameByType').innerHTML = 'Junior Robotics Program - 3 Boxes';

        } else {
            document.getElementById('juniorProgramButton').style.display = 'none';
            document.getElementById('juniorProgramButtonM').style.display = 'none';

            document.getElementById('seniorProgramButton').style.display = 'block';
            document.getElementById('seniorProgramButtonM').style.display = 'block';

            document.getElementById('productPrice').innerHTML = '8990';
            document.getElementById('finalPrice').innerHTML = '8990';
            document.getElementById('programNameByType').innerHTML = '4990';
            document.getElementById('programNameByType').innerHTML = 'Senior Robotics Program - 3 Boxes';


        }
    }
    renderPaymentButton = function(code) {
        if(code.toLowerCase() === 'in') {
            renderCorrectBuyButton()
        }
        else {
            renderForeignCheckoutButton()
        }
    }
</script>
<script>
    function postFormDataToGoogle() {
        console.log('click captured');
        
        const scriptURL = 'https://script.google.com/macros/s/AKfycbyyp5crdakS3eyep6-mbilNxRs_M_5DwaLUjbRg6NVzRwaHsfQ/exec';
        const form = document.forms['submit-to-google-sheet'];
        fetch(scriptURL, { method: 'POST', body: new FormData(form) })
            .then(response => console.log('Success!', response))
            .catch(error => console.error('Error!', error.message))
    }
</script>
<script>
    window.onscroll = function() { myFunction() };
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    var checkoutContainer = document.getElementById("checkoutContainer");

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
            checkoutContainer.classList.add("checkoutContainerPadding")
        } else {
            navbar.classList.remove("sticky");
            checkoutContainer.classList.remove("checkoutContainerPadding");
        }
    }

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    function alphaOnly(event) {
        var key = event.keyCode;
        return ((key >= 65 && key <= 90) || key >= 97 && key <= 122);
    };
</script>
<script src="https://js.instamojo.com/v1/checkout.js"></script>
<script src="https://js.instamojo.com/v1/button.js"></script>
<script type="text/javascript">
    function showDiv(elem) {
        if (elem.value == 1)
            document.getElementById('cart').style.display = "block";
        document.getElementById('shiping').style.display = "block";
    }
    $(function() {
        // $('#next-form').hide();
        // $('#cart').hide();
        $('#next-form').show();
        $('#cart').show();
        $('.desktop').change(function() {
            if ($('.desktop').val() == 1) {
                $('#next-form').show();
                $('#cart').show();
            } else {
                $('#next-form').hide();
                $('#cart').hide();
            }
        });
    });
    $(function() {
        //$('#next-form').hide();

        // $('#shiping').hide();
        // $('#cart').hide();
        $('#cart').show();
        $('#shiping').show();
        $("#next-form").show();
        $(".proceed").show();
        $('.mobile').change(function() {
            if ($('.mobile').val() == 1) {
                $('#cart').show();
                $('#shiping').show();
            } else {
                $('#shiping').hide();
                $('#cart').hide();
            }
        });
    });
    $("#shiping").click(function() {
        $("#next-form").show();
        $(".proceed").show();
    });
</script>
<script type="text/javascript">
    (function($) {
        var $window = $(window),
            $html = $('.select-country');

        function resize() {
            if ($window.width() < 514) {
                return $html.addClass('mobile').removeClass('desktop');
            }
            $html.removeClass('mobile').addClass('desktop');
        }
        $window
            .resize(resize)
            .trigger('resize');
    })(jQuery);
</script>
<script type="text/javascript">
    $(function(){
        $('#foreignCheckout').click(function(){
            document.getElementById('li_0_price').value = document.getElementById('productPrice').innerHTML;
            document.getElementById('card_holder_name').value = document.getElementById('f_name').value;
            document.getElementById('street_address').value = document.getElementById('address').value;
            document.getElementById('street_address2').value = document.getElementById('op_address').value;
            document.getElementById('li_city').value = document.getElementById('city').value;
            document.getElementById('li_state').value = document.getElementById('state').value;
            document.getElementById('zip').value = document.getElementById('zipCode').value;
            document.getElementById('email').value = document.getElementById('e_mail').value;
            document.getElementById('phone').value = document.getElementById('number').value;
            document.getElementById('li_1_price').value = document.getElementById('shippingPrice').innerHTML;
            document.getElementById('country').value = checkout2CountryCode;
            document.getElementById('currency_code').value = document.getElementById('currencyCode').innerHTML;


            document.getElementById('ship_name').value = document.getElementById('f_name').value;
            document.getElementById('ship_street_address').value = document.getElementById('address').value;
            document.getElementById('ship_street_address2').value = document.getElementById('op_address').value;
            document.getElementById('ship_city').value = document.getElementById('city').value;
            document.getElementById('ship_state').value = document.getElementById('state').value;
            document.getElementById('ship_zip').value = document.getElementById('zipCode').value;
            document.getElementById('ship_country').value = checkout2CountryCode;

        });
    });
</script>

<script src="https://www.2checkout.com/static/checkout/javascript/direct.min.js"></script>
</body>

</html>
