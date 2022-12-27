<?php
extract($_POST);

//SQL Database Connection
include("ConnectSQL.php");

$insert = "INSERT INTO [ContactDetails]
      ([NAME], [PHONE NO], [EMAIL ID], [SUBJECT], [MESSAGE]) 
      VALUES ('$Name','$Phone','$Sender','$Subject','$Message')";
      $result = sqlsrv_query($conn, $insert);

// echo("CONNECTED");
// Email SMTP Server

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'farmplanningportal@gmail.com';                     //SMTP username
    $mail->Password   = 'qcweafavexkrwbnk';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('farmplanningportal@gmail.com', 'No Reply');
    $mail->addAddress($Sender, $Name);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Our Team Contact You Shortly!';
    $mail->Body = "

    <!doctype html>
<html lang='en'>
<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <title>E-Farm Planning</title>
    <!-- web fonts -->
    <!-- web fonts -->
    <link href='//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap' rel='stylesheet'>
    <link href='//fonts.googleapis.com/css?family=Hind&display=swap' rel='stylesheet'>
   <!-- //web fonts -->
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel='stylesheet' href='assets/css/style-starter.css'>
</head>
<body>


<!-- Top Menu 1 -->
<section class='w3l-top-menu-1'>
	<div class='top-hd'>
		<div class='container'>
	<header class='row top-menu-top'>
		<div class='accounts col-md-9 col-6'>
				<li class='top_li'><span class='fa fa-phone'></span><a href='tel:+91 96655 89755'>+91 96655 89755</a> </li>
				<li class='top_li1'><span class='fa fa-envelope-o'></span> <a href='mailto:education-mail@support.rdg.in' class='mail'> info@rdg.in</a>	</li>
		</div>
		<div class='social-top col-md-3 col-6'>
			<div class='main-social-head'>
				<a href='#facebook' class='facebook'><span class='fa fa-facebook'></span></a>
				<a href='#twitter' class='twitter'><span class='fa fa-twitter'></span></a>
				<a href='#instagram' class='instagram'><span class='fa fa-instagram'></span></a>
			</div>
		</div>
	</header>
</div>
</div>
</section>
<!-- //Top Menu 1 -->
<section class='w3l-bootstrap-header'>
<nav class='navbar navbar-expand-lg navbar-light py-lg-2 py-2'>
    <div class='container'>
    <a class='navbar-brand' href='index.html'><span class=''>E-Farm</span>  Planning</a>
    <!-- if logo is image enable this   
    <a class='navbar-brand' href='#index.html'>
        <img src='image-path' alt='Your logo' title='Your logo' style='height:35px;' />
    </a> -->
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
        aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon fa fa-bars'></span>
    </button>

    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav mx-auto mt-2'>
        <li class='nav-item'>
            <a class='nav-link' href='index.html'>Home</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='about.html'>About</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='services.html'>Services</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='contact.html'>Contact</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='Order.html'>Order</a>
        </li>
        </ul>
        <form action='#' class='form-inline position-relative my-2 my-lg-0'>
        <input class='form-control search' type='search' placeholder='Search here...' aria-label='Search' required=''>
        <button class='btn btn-search position-absolute' type='submit'><span class='fa fa-search' aria-hidden='true'></span></button>
        </form>
    </div>
    </div>
</nav>
</section>

<br>
<br>
<div class='banner-info-bg mx-auto text-center'>
        <h3>Our Team Contact You Shortly!</h3>
        <a class='btn btn-secondary btn-theme2 mt-md-5 mt-4' href='index.html'>Explore More</a>
        </div>
<br>
<br>

<!-- grids block 5 -->
<section class='w3l-footer-29-main'>
    <div class='footer-29'>
        <div class='container'>
            <div class='d-grid grid-col-4 footer-top-29'>
                <div class='footer-list-29 footer-1'>
                    <h6 class='footer-title-29'>Contact Us</h6>
                    <ul>
                        <li><p><span class='fa fa-map-marker'></span> Shivaji Nagar, Main building, Sangola, Solapur, 413309 IN.</p></li>
                        <li><a href='tel:+91 96655 89755'><span class='fa fa-phone'></span> +91 96655 89755</a></li>
                        <li><a href='to:corporate-mail@support.rdg.in' class='mail'><span class='fa fa-envelope-open-o'></span> farmer-mail@support.rdg.in</a></li>
                    </ul>
                    <div class='main-social-footer-29'>
                        <a href='#facebook' class='facebook'><span class='fa fa-facebook'></span></a>
                        <a href='#twitter' class='twitter'><span class='fa fa-twitter'></span></a>
                        <a href='#instagram' class='instagram'><span class='fa fa-instagram'></span></a>
                        <a href='#google-plus' class='google-plus'><span class='fa fa-google-plus'></span></a>
                        <a href='#linkedin' class='linkedin'><span class='fa fa-linkedin'></span></a>
                    </div>
                </div>
                <div class='footer-list-29 footer-2'>
                    <ul>
                        <h6 class='footer-title-29'>Featured Links</h6>
                        <li><a href='contact.html'>Our People</a></li>
                        <li><a href='contact.html'>Latest Media</a></li>
                        <li><a href='contact.html'>Our Branches</a></li>
                        <li><a href='contact.html'>Organisations</a></li>
                        <li><a href='contact.html'>Help</a></li>
                    </ul>
                </div>
                <div class='footer-list-29 footer-3'>
                    <h6 class='footer-title-29'>Newsletter </h6>
                    <p class='mb-3'>Get in your inbox the latest News and</p>
            <form action='#' class='subscribe' method='post'>
            <input type='email' name='email' placeholder='Email' required=''>
            <button><span class='fa fa-envelope-o'></span></button>
            </form>
            <p>Subscribe and get our weekly newsletter</p>
            <p>We'll never share your email address</p>
                </div>
                <div class='footer-list-29 footer-4'>
                    <ul>
                        <h6 class='footer-title-29'>Quick Links</h6>
                        <li><a href='index.html'>Home</a></li>
                        <li><a href='about.html'>About</a></li>
                        <li><a href='services.html'>Services</a></li>
                        <li><a href='contact.html'>Contact</a></li>
                        <li><a href='Order.html'>Order</a></li>
                    </ul>
                </div>
            </div>
            <div class='d-grid grid-col-2 bottom-copies'>
                <p class='copy-footer-29'>© 2023 E-Farmming. All rights reserved | Designed by <a href='https://www.linkedin.com/in/rohit-gend'>ROHIT</a></p>
                <ul class='list-btm-29'>
                        <li><a href='#link'>Privacy policy</a></li>
                        <li><a href='#link'>Terms of service</a></li>
                        
                    </ul>
            </div>
        </div>
    </div>
    <!-- move top -->
    <button onclick='topFunction()' id='movetop' title='Go to top'>
    <span class='fa fa-angle-up'></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById('movetop').style.display = 'block';
        } else {
        document.getElementById('movetop').style.display = 'none';
        }
    }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    </script>
<!-- /move top -->
</section>
<script src='assets/js/jquery-3.3.1.min.js'></script>
  <!-- //footer-28 block -->
</section>
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
    })
    });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src='https://code.jquery.com/jquery-3.4.1.slim.min.js'
    integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'>
</script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'    integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'>
</script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'
    integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'>
</script>

<!-- Template JavaScript -->
<script src='assets/js/all.js'></script>
<!-- Smooth scrolling -->
<!-- <script src='assets/js/smoothscroll.js'></script> -->
<script src='assets/js/owl.carousel.js'></script>

<!-- script for -->
<script>
    $(document).ready(function () {
        $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
            0: {
            items: 1,
            nav: false
            },
            480: {
            items: 1,
            nav: false
            },
            667: {
            items: 1,
            nav: true
        },
        1000: {
            items: 1,
            nav: true
            }
        }
    })
    })
</script>
<!-- //script -->
</body>
</html>
<!-- // grids block 5 -->
    ";
    // 'Name : '.$Name. ',Email : '.$Sender. ',Phone Number : '.$Phone;                                     //'This is the HTML message body <b>in bold!</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: {$mail->ErrorInfo}';
    }
?>

<!-- HTML PAGE  -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>E-Farm Planning</title>
    <!-- web fonts -->
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
   <!-- //web fonts -->
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>

<!-- Top Menu 1 -->
<section class="w3l-top-menu-1">
	<div class="top-hd">
		<div class="container">
	<header class="row top-menu-top">
		<div class="accounts col-md-9 col-6">
				<li class="top_li"><span class="fa fa-phone"></span><a href="tel:+91 96655 89755">+91 96655 89755</a> </li>
				<li class="top_li1"><span class="fa fa-envelope-o"></span> <a href="mailto:education-mail@support.rdg.in" class="mail"> info@rdg.in</a>	</li>
		</div>
		<div class="social-top col-md-3 col-6">
			<div class="main-social-head">
				<a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
				<a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
				<a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
			</div>
		</div>
	</header>
</div>
</div>
</section>

<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <a class="navbar-brand" href="index.html"><span class="">E-Farm</span>  Planning</a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mt-2">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Order.html">Order</a>
          </li>
        </ul>
        <form action="#" class="form-inline position-relative my-2 my-lg-0">
          <input class="form-control search" type="search" placeholder="Search here..." aria-label="Search" required="">
          <button class="btn btn-search position-absolute" type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
        </form>
      </div>
    </div>
  </nav>
</section>
<br>
<br>
<div class="banner-info-bg mx-auto text-center">
        <h3>Our Team Contact You Shortly!</h3>
        <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="index.html">Explore More</a>
        </div>
<br>
<br>

<!-- grids block 5 -->
<section class="w3l-footer-29-main">
<div class="footer-29">
    <div class="container">
        <div class="d-grid grid-col-4 footer-top-29">
        <div class="footer-list-29 footer-1">
          <h6 class="footer-title-29">Contact Us</h6>
          <ul>
          <li><p><span class="fa fa-map-marker"></span> Shivaji Nagar, Main building, Sangola, Solapur, 413309 IN.</p></li>
          <li><a href="tel:+91 96655 89755"><span class="fa fa-phone"></span> +91 96655 89755</a></li>
          <li><a href="to:corporate-mail@support.rdg.in" class="mail"><span class="fa fa-envelope-open-o"></span> farmer-mail@support.rdg.in</a></li>
          </ul>
          <div class="main-social-footer-29">
                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                        <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                        <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
          </div>
        </div>
                <div class="footer-list-29 footer-2">
                    <ul>
                        <h6 class="footer-title-29">Featured Links</h6>
                        <li><a href="contact.html">Our People</a></li>
                        <li><a href="contact.html">Latest Media</a></li>
                        <li><a href="contact.html">Our Branches</a></li>
                        <li><a href="contact.html">Organisations</a></li>
                        <li><a href="contact.html">Help</a></li>
                    </ul>
                </div>
                <div class="footer-list-29 footer-3">
                    <h6 class="footer-title-29">Newsletter </h6>
                    <p class="mb-3">Get in your inbox the latest News and</p>
            <form action="#" class="subscribe" method="post">
              <input type="email" name="email" placeholder="Email" required="">
              <button><span class="fa fa-envelope-o"></span></button>
            </form>
            <p>Subscribe and get our weekly newsletter</p>
            <p>We'll never share your email address</p>
                </div>
                <div class="footer-list-29 footer-4">
                    <ul>
                        <h6 class="footer-title-29">Quick Links</h6>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="Order.html">Order</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-grid grid-col-2 bottom-copies">
                <p class="copy-footer-29">© 2023 E-Farmming. All rights reserved | Designed by <a href="https://www.linkedin.com/in/rohit-gend">ROHIT</a></p>
                <ul class="list-btm-29">
                  <li><a href="#link">Privacy policy</a></li>
                  <li><a href="#link">Terms of service</a></li>
                </ul>
            </div>
        </div>
</div>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };
  
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }
  
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- //footer-28 block -->
  </section>
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  
  <!-- Template JavaScript -->
  <script src="assets/js/all.js"></script>
  <!-- Smooth scrolling -->
  <!-- <script src="assets/js/smoothscroll.js"></script> -->
  <script src="assets/js/owl.carousel.js"></script>
  
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  
  </body>
  
  </html>
  <!-- // grids block 5 -->