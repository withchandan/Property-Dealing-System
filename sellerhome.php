<DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<!-- HEAD SECTION -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Govind Tours N Travels provides full travel support" />
    <meta name="author" content="Govind Tours N Travels" />
	<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Propety Dealing System</title>
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--BOOTSTRAP MAIN STYLES -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--FONTAWESOME MAIN STYLE -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLE -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="sellerhome.php">Property Dealing System</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
					<li><a href="sellerprofile.php">Profile</a></li>
					<li><a href="myproperty.php">My Property</a></li>
                    <li><a href="address_details.php">Post Property</a></li>
					<li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">

      <?php  session_start();
        $link = mysqli_connect("localhost", "root", "", "pg_db") or die("ERROR");

        if(isset($_SESSION['seller']))
        {
              $email=$_SESSION['seller'];
              $sql="select fname, lname from tb_seller where s_email='$email'";
              $data=mysqli_query($link, $sql);
              $fname="Ramlal";
              $lanem="";
              if($data)
              {
                if (mysqli_num_rows($data) == 1)
                {
                   $row = mysqli_fetch_array($data);
                   $fname= $row['fname'];
                   $lname= $row['lname'];

                 }
                 else {
                   ?>

                               <script> alert("NO record"); </script>
                   <?php
                 }
               }
          }
	       else
	       {
		          ?>
              <script type="text/javascript">location.href='login.php';</script>
              <?php
	        }

?>




		<div class="row main-low-margin text-center">
            <div class="space-bottom"></div>
            <div class="col-md-12 col-sm-12 ">
                <h1 style="color: black">Welcome</h1>
              <p><?php echo $fname." ".$lname; ?></p>

            </div>
            <div class="space-bottom"></div>
		</div>
    </div>
    <div class="space-bottom"></div>
    <div id="footer">
        <div class="navbar" >
            <div class="container">
                <div class="col-md-4">
                    Group No - 4
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4" align="right">
                    Design for MIS </a>
                </div>
            </div>
        </div>
    </div>
    <!--END FOOTER SECTION -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY LIBRARY -->
    <script src="assets/js/jquery.js"></script>
    <!-- CORE BOOTSTRAP LIBRARY -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--  Google Analytics  -->

</body>
</html>
