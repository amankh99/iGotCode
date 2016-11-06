<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "test1");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    $uid=$_SESSION['uid'];
    $type=$_SESSION['type'];
    $logged=1;
}else {
    $logged=0;
    //header("location:index.php?req=login");
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
    <link href="css/simple-sidebar.css" rel="stylesheet">
    
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
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav" >
                    <li >
                        <a href="#"><span class="glyphicon glyphicon-home"></span></a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-hourglass"></a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-saved"></a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-cog"></a>
                    </li>
                </ul>
            </div>

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
                           <h1><img src="images/logo.png" alt="logo"></h1>
                       </a>

                   </div>
                   <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="logout.php">Log Out</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="home-slider">
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    
    <?php
    echo $type;
    if($type=='consumer'){

        ?>
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
                    <div class="row" id="plumD" style="display: none;background: #0250A7;margin-top: 28%;">
                        <div class="col-lg-10" id="plumD" class="file" >
                            <form name="plumD" method="post" action="#">
                                <span>Heading:</span><input type="text" name="head" style="padding: 2px;" ><br>
                                <span>Describe the problem:</span><textarea type="text" name="cont" style="padding: 2px;" ></textarea>
                                <input type="submit" id="plum_sub" value="File">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                                <img src="images/carp.png" alt="" class="serv_ico" id="carp" style="cursor:pointer;">
                            </div>
                            <h2>Carpenter</h2>
                            <p>Construct, Install and Fix structures and fixtures.</p>
                        </div>
                    </div>
                    <div class="row" id="carpD" style="display: none;background: #5F3A16;margin-top: 28%;">
                        <div class="col-lg-10" id="plumD" class="file" >
                            <form name="plumD" method="post" action="#">
                                <span>Heading:</span><input type="text" name="head" style="padding: 2px;" ><br>
                                <span>Describe the problem:</span><textarea type="text" name="cont" style="padding: 2px;" ></textarea>
                                <input type="submit" id="plum_sub" value="File">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms" >
                                <img src="images/elec.png" alt="" class="serv_ico" id="elec" style="cursor:pointer;">
                            </div>
                            <h2>Electrician</h2>
                            <p>Install, Inspect and Fix wiring, light and control systems.</p>
                        </div>
                    </div>
                    <div class="row" id="elecD" style="display: none;background: #02B1AC;margin-top: 28%;">
                        <div class="col-lg-10" id="plumD" class="file"  >
                            <form name="plumD" method="post" action="#">
                                <span>Heading:</span><input type="text" name="head" style="padding: 2px;" ><br>
                                <span>Describe the problem:</span><textarea name="cont" style="padding: 2px;" ></textarea>
                                <input type="submit" id="plum_sub" value="File">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="1200ms">
                                <img src="images/maid.png" alt="" class="serv_ico" id="maid" style="cursor :pointer;">
                            </div>
                            <h2>Housework</h2>
                            <p>Responsible for domestic jobs ranging from cleaning to running the house.</p>
                        </div>
                    </div>
                    <div class="row" id="maidD" style="display: none;background: #FF6A02;margin-top: 28%;">
                        <div class="col-lg-10" id="plumD" class="file" >
                            <form name="plumD" method="post" action="#">
                                <span>Heading:</span><input type="text" name="head" style="padding: 2px;" ><br>
                                <span>Describe the problem:</span><textarea type="text" name="cont" style="padding: 2px;" ></textarea>
                                <input type="submit" id="plum_sub" value="File">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="1500ms">
                                <img src="images/spa.png" alt="" class="serv_ico" id="spa" style="cursor:pointer;">
                            </div>
                            <h2>Spa</h2>
                            <p>Administers professional massage and body treatments.</p>
                        </div>
                    </div>
                    <div class="row" id="spaD" style="display: none;background: #4D4D4D;margin-top: 28%;">
                        <div class="col-lg-10" id="plumD" class="file" >
                            <form name="plumD" method="post" action="#">
                                <span>Heading:</span><input type="text" name="head" style="padding: 2px;" ><br>
                                <span>Describe the problem:</span><textarea type="text" name="cont" style="padding: 2px;" ></textarea>
                                <input type="submit" id="plum_sub" value="File">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


<section id="pending" class="responsive" style="margin-left: 20%;">
    <div class="vertical-center">
     <div class="container">
        <div class="row">
            <div class="action take-tour">
                <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <h1 class="title">Requested services</h1>
                    <select>
                        <option>Ascending in date</option>
                        <option>Descending in date</option>
                    </select>
                </div>

            </div>
        </div>
    </div>
</div>
</section>
        <br><br>
<section id="features">
    <div class="container">
        <div class="row">
            <?php
            $sql="select * from svcs where filer='". $uid."' and status='0'";
            $res=mysqli_query($sql,$conn);
            if(mysqli_num_rows($res)){
            while ($rows= mysqli_fetch_array($res)) {

                $head=$rows['head'];
                $cont=$rows['cont'];
                $date_Req=$rows['date_req'];
                $date_Svc=$rows['date_svc'];
                $id=$rows['sid'];
                $query="select*from bid where sid='".$id."'";
                $result=mysqli_query($query);
                
                ?>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/<?php echo "$serv"; ?>.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <?php
                        echo<<<_html
                        <h2>$head</h2>
                        <P>Statement : $cont</P>
                        <P>Date Requested : $date_Req</P>
                        <P>Service Date : $date_Svc</P>
                        <P>Service ID : $id</P>
                        <p>Requested Bids : </p>
_html;

                            while ($row=mysqli_fetch_array($result)) {
                                echo "Bid : " .$row['bid']." By : " . $row['recv'] . " <input type='submit' id='final' value='Hire'>";
                            }
                        ?>
                    </div>
                </div>
                <?php }} else echo "No requested services found." ?>
            </div>
        </div>
    </div>
</section>



        <section id="pending" class="responsive" style="margin-left: 20%;">
    <div class="vertical-center">
     <div class="container">
        <div class="row">
            <div class="action take-tour">
                <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <h1 class="title">Pending services</h1>
                    <select>
                        <option>Ascending in date</option>
                        <option>Descending in date</option>
                    </select>
                </div>

            </div>
        </div>
    </div>
</div>
</section>
        <br><br>
<section id="features">
    <div class="container">
        <div class="row">
            <?php
            $sql="select * from svcs where filer='". $uid."' and status='1'";
            $res=mysqli_query($sql,$conn);
            if(mysqli_num_rows($res)){
            while ($rows= mysqli_fetch_array($res)) {
                $head=$rows['head'];
                $cont=$rows['cont'];
                $date_Req=$rows['date_req'];
                $date_Svc=$rows['date_svc'];
                $id=$rows['sid'];

                ?>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/<?php echo "$serv"; ?>.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                    <?php
                    echo<<<html
                        <h2>$head</h2>
                        <P>Statement : $cont</P>
                        <P>Date Requested : $date_Req</P>
                        <P>Service Date : $date_Svc</P>
                        <P>Service ID : $id</P>
                    </div>
                </div>
html;
                 }}else echo "No Pending services found." ?>
            </div>
        </div>
    </div>
</section>
<!--/#features-->

<section id="complete" class="responsive" style="margin-left: 20%;">
    <div class="vertical-center">
     <div class="container">
        <div class="row">
            <div class="action take-tour">
                <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <h1 class="title">Completed services</h1>
                    <select>
                        <option>Ascending in date</option>
                        <option>Descending in date</option>
                    </select>
                </div>

            </div>
        </div>
    </div>
</div>
</section>
<section id="features">
    <div class="container">
        <div class="row">
            <?php
            $sql="select * from svcs where filer='". $uid."' and status='2'";
            $res=mysqli_query($sql,$conn);
            if(mysqli_num_rows($res)){
            while ($rows= mysqli_fetch_array($res)) {
                $head=$rows['head'];
                $cont=$rows['cont'];
                $date_Req=$rows['date_req'];
                $date_Svc=$rows['date_svc'];
                $sid=$rows['sid'];
                $recv = $rows['recv'];
                $serv = $rows['service'];

                ?>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/<?php echo "$serv"; ?>.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                    <?php
                    echo<<<_html
                        <h2>$head</h2>
                        <P>Statement : $cont</P>
                        <P>Date Requested : $date_Req</P>
                        <P>Service Date : $date_Svc</P>
                        <P>Service ID : $sid</P>
_html;
?>
                        <p>Receiver : <a href="home.php?u=$recv">$recv</a></p>
                        <h2 style="display: inline;">Give feedback</h2><span>&nbsp;&nbsp;&nbsp;It helps us to improve our services.</span>
                    </div>
                </div>
                <?php }} else echo "No completed request found."; ?>
            </div>
        </div>
    </div>
</section>
        <?php
    }
    else {

        ?>
        <section id="pending" class="responsive" style="margin-left: 20%;">
            <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Services unsolved</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->
    <br><br>
    <section id="features">
        <div class="container">
            <div class="row">
                <?php
                $sql="select * from svcs where type='". $type."' and status='0'";
                $res=mysqli_query($sql,$conn);
                if(mysqli_num_rows($res)){
                while ($rows=mysqli_fetch_array($res)) {

                    $filer=$rows['filer'];
                    $head=$rows['head'];
                    $cont=$rows['cont'];
                    $date_Req=$rows['date_req'];
                    $id=$rows['sid'];
                    $query="select min(bid)'min',recv from bid where sid='" .$id. "'";
                    $result=mysqli_query($query,$conn);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <div class="single-features">
                        <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/<?php echo $type; ?>.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <?php
                        echo<<<_html
                            <h2>$head</h2>
                            <P>Statement : $cont</P>
                            <P>Date Requested : $date_Req</P>

                            <p>Minimun Bid : $row[0]  By:$row[1]</p>
_html;
?>
                            Bid your price :<input type="number" id="myBid" name="mybid" placeholder="Bid your price"><input type="submit" value="Bid" id="bidder">
                            <script type="text/javascript">
                                $("#bidder").on("click",function(){
                                    $.post("bid.php",{"recv" :  <?php echo $username?>,"filer":<?php echo $filer?>,"sid":<?php echo $id ?>,"bid":$("#myBid").val(),"type" : $type},function(data){
                                        $("#logR").text(data);
                                        if(data == "Logged in! Redirecting...."){
                                            window.location.replace("home.php");
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <?php }} else echo "No unsolved services found." ?>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>

<!--/#services-->


<!--/#action-->



<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="images/home/under.png" class="img-responsive inline" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="testimonial bottom">
                    <h2>Testimonial</h2>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img src="images/home/profile1.png" alt=""></a>
                        </div>
                        <div class="media-body">
                            <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                            <h3><a href="#">- Jhon Kalis</a></h3>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img src="images/home/profile2.png" alt=""></a>
                        </div>
                        <div class="media-body">
                            <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                            <h3><a href="">- Abraham Josef</a></h3>
                        </div>
                    </div>   
                </div> 
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="contact-info bottom">
                    <h2>Contacts</h2>
                    <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                        Phone: +1 (123) 456 7890 <br> 
                        Fax: +1 (123) 456 7891 <br> 
                    </address>

                    <h2>Address</h2>
                    <address>
                        Unit C2, St.Vincent's Trading Est., <br> 
                        Feeder Road, <br> 
                        Bristol, BS2 0UY <br> 
                        United Kingdom <br> 
                    </address>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
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
                    <p>&copy; Your Company 2016. All Rights Reserved.</p>
                    <p>Crafted by <a target="_blank" href="http://designscrazed.org/">Allie</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->

<script type="text/javascript" src="js/jquery.js"></script>
<div id="logged"></div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
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
