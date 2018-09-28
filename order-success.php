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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/success.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
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
  
  
    <section class="success">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <img src="images/ic-order-success.png" alt="Thank-You">
                        <h2>Order Placed</h2>
                        <p>Yay! We have received your order successfully.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="callback">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2>Need help?</h2>
                    <p>For any query regarding your order Call us at : <span><a href="tel:977-390-4934">+91 97739 04934</a></span></p>
                </div>
                <div class="col-4">
                    <button class="btn-elemento-transparent"><img src="images/ic-callback-white.png"> <span><a href="tel:977-390-4934">+91 97739 04934</a></span></button>
                </div>
                <div class="col-4">
                    <span>OR</span>
                </div>
                <div class="col-4">
                    <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn-elemento-light-blue"><img src="images/ic-callback-white.png"> <span>REQUEST A CALLBACK</span></button>
                </div>
            </div>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <section class="form-info">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">We are here to help <i data-dismiss="modal" class="material-icons">close</i></h5>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-text">Please enter your details below. An Elemento teacher will call you and answer your questions.</h5>
                                    <form action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name*">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="MobileNumber*">
                                        </div>
                                        <h4 class="card-text">Pick a Callback time</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="button" class="form-control" value="9AM-11AM">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="button" class="form-control" value="11AM-1PM">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="button" class="form-control" value="1PM-3PM">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="button" class="form-control" value="3PM-5PM">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="button" class="form-control" value="5PM-8PM">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="button" class="form-control btn btn.primary" value="CALL ME">
                                                </div>
                                            </div>
                                    </form>
                                    </div>
                                </div>
                        </section>
                        </div>
                    </div>
                </div>
            </div>
    </section>
   
   <?php
include 'footer.html';
?>
   
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $('.add-coupon').on('click', function() {
        if ($(this).val() == '') {
            $('.coupon span').addClass('has-success').removeClass('has-warning');
            $('.coupon p').addClass('has-success').removeClass('has-warning');
            $('table .discount').addClass('has-success').removeClass('has-warning');
            $('.coupon .subs-coupon').addClass('has-success').removeClass('has-warning');
        }
    });
    </script>
    <script type="text/javascript">
    $('.subs-coupon').on('click', function() {
        if ($(this).val() == '') {
            $('form span').removeClass('has-success').addClass('has-warning');
            $('form strong').addClass('has-success').removeClass('has-warning');
            $('form .subs-coupon').addClass('has-success').removeClass('has-warning');
        }
    });
    </script>
    <script type="text/javascript">
    function showDiv(elem) {
        if (elem.value == 1)
            document.getElementById('next-form').style.display = "block";
        document.getElementById('cart').style.display = "block";
    }
    </script>
</body>

</html>
