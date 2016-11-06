<script type="text/javascript" src="js/jquery.js"></script>
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "test1");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    $logged=1;
    
}else $logged=0;
if(isset($_GET['req'])){
    if($_GET['req']=='login'){
        echo<<<_script
        <script>
            $("#log").show();
            $("#log").text("Please login to continue");
        </script>
_script;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
    <div class="col-lg-12" id="log" style="background: #555;padding: 5px;display: none;">
        
    </div>
       <header id="header">      

        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                    	<h1></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li class=""><a href="#services">Services</a></li>
                        <li class=""><a href="#why">Why Us</a></li> 
                        <li><a href="#help">Help Desk</a></li>                    
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>We </h1>
                        <p>iGot{c}ode is a platform to deliver fast and quality home services at revolutionary prices and Get Work Done.</p>
                        <a href="#" id="pop" class="btn btn-common">LOGIN | SIGN UP</a>
                    </div>
                    
                    <img src="images/img_people.png" class="slider-house" alt="IMG">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
            <center><h1>Services</h1></center>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/plum.png" class="serv_ico" id="plum" alt="" style="cursor:pointer;">
                        </div>
                        <h2>Plumber</h2>
                        <p>Installing, Repairing and Maintaining pipes, fixtures and other plumbing.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/elec.png" alt="" class="serv_ico" id="elec" style="cursor:pointer;">
                        </div>
                        <h2>Electrician</h2>
                        <p>Install, Inspect and Fix wiring, light and control systems.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms" >
                        <img src="images/carp.png" alt="" class="serv_ico" id="elec" style="cursor:pointer;">
                        </div>
                        <h2>Carpenter</h2>
                        <p>Construct, Install and Fix structures and fixtures.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="1200ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/maid.png" alt="" class="serv_ico" id="maid" style="cursor :pointer;">
                        </div>
                        <h2>Housework</h2>
                        <p>Responsible for domestic jobs ranging from cleaning to running the house.</p>
                        </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="1200ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/spa.png" alt="" class="serv_ico" id="spa" style="cursor:pointer;">
                        </div>
                        <h2>Spa</h2>
                        <p>Administers professional massage and body treatments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
           <div class="container">
            <div class="row">
                <div class="action take-tour">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1 class="title">WHY US</h1>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->

<section id="features">
    <div class="container">
        <div class="row">
            <div class="single-features">
                <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <img src="images/man1.png" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                    <h2>Value for Money</h2>
                    <P>Get the best bid in the market for your job, won't be too hard on your pockets.</P>
                </div>
            </div>
            <div class="single-features">
                <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    
                    <h2>Zero Hassles</h2>
                    <P>Pay very safely and securely via PayPal and release payment when 100% satisfiedq.</P>
                </div>
                <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                    <img src="images/man2.png" class="img-responsive" alt="">
                </div>
            </div>
            <div class="single-features">
                <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <img src="images/man3.png" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                    <h2>Quick and Effective </h2>
                    <P>Receive competetive listings for your job from professionals with experience.</P>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#features-->

<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                    <p><img src="images/home/clients.png" class="img-responsive" alt=""></p>
                    <h1 class="title">Happy Clients</h1>
                    <p>1000+ Happy costumers</p>
                </div>
                <blockquote>Excellent and prompt service with pretty good professional base.</blockquote>
                 <h3><a href="#">- Shiney Ahuja</a></h3>
                 <blockquote>Cannot even imagine how i'd get my work done without iGot{c}ode.</blockquote>
                            <h3><a href="">- Shaktimaan</a></h3>
            </div>
        </div>
    </div>
</section>
<!--/#clients-->

<footer id="footer" style="background: none !important; ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="images/home/under.png" class="img-responsive inline" alt="">
            </div>
            
            <div class="col-md-3 col-sm-6 col-md-offset-2">
                <div class="contact-info bottom">
                    <h2>Contacts</h2>
                    <address>
                        E-mail: <a href="mailto:someone@example.com">email@igotcode.com</a> <br> 
                        Phone: +91 6969696969 <br>  
                    </address>

                    <h2>Address</h2>
                    <address>
                        IIT Mandi, <br> 
                        Mandi, HP <br> 
                        India <br> 
                    </address>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 ">
                <div class="contact-form bottom">
                    <h2>Send a message</h2>
                    <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                        </div>                        
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="copyright-text text-center">
                    <p>&copy; iGot{C}ode 2016. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->


<div id="logged"></div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>   
<script type="text/javascript">
       $("#pop").on("click",function(){
        $("#logged").load("log.php");
    });
</script>
</body>
</html>
