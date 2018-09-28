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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/landing.css">
    <!-- jQuery library -->
</head>

<body>
<?php
include 'header-nav.html';
?>

	
	<br><br><br><br>
       <section class="section2" style="margin: 20px">

   <div>

<div class="col-xs-12 mtop10 text" style="text-align: left;">We have a liberal return and refund policy as detailed below:</div>
<br />
<div class="col-xs-12 mtop10 text"><strong>Can I claim a refund if I do not want to continue the Robotics program ?</strong></div>
<div class="col-xs-12 mtop10 text">Yes sure! You can cancel the order any time and claim refund for the boxes not yet shipped. Your balance amount from the remaining baoxes will be refunded to your account within 7 business days after deducting for the delivered boxes.<span> </span></div>
<div class="col-xs-12 mtop10 text"><br />
<p><strong>How long will the refund take ?<br /></strong>We process the refund on the date of request itself. The same should get credited in your account within 7 business days. </p>
</div>
   </div>
</section>


	<?php
include 'footer.html';
?>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
    document.getElementById('juniorProgramButton').style.display = 'none';
    document.getElementById('seniorProgramButton').style.display = 'none';
    const url = new URL(window.location.href);
    const productType = url.searchParams.get("productId");
    //jp 1 for junior program & sp1 for sr. program

    renderCorrectBuyButton = function() {
        if (productType === 'jp1') {
            document.getElementById('juniorProgramButton').style.display = 'block';
            document.getElementById('seniorProgramButton').style.display = 'none';
            document.getElementById('productPrice').innerHTML = '4,990 INR';
            document.getElementById('finalPrice').innerHTML = '4,990 INR';
            document.getElementById('programNameByType').innerHTML = 'Junior Robotics Program - 3 Boxes';

        } else {
            document.getElementById('juniorProgramButton').style.display = 'none';
            document.getElementById('seniorProgramButton').style.display = 'block';
            document.getElementById('productPrice').innerHTML = '8,990 INR';
            document.getElementById('finalPrice').innerHTML = '8,990 INR';
            document.getElementById('programNameByType').innerHTML = '4,990 INR';
            document.getElementById('programNameByType').innerHTML = 'Senior Robotics Program - 3 Boxes';


        }
    }
    renderCorrectBuyButton()
    </script>
    <script>
    window.onscroll = function() { myFunction() };
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
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
    <!--    <script src="https://d2xwmjc4uy2hr5.cloudfront.net/im-embed/im-embed.min.js"></script>
 -->
    <script src="https://js.instamojo.com/v1/button.js"></script>
</body>

</html>