<?php include 'connection.php';
$sid=$_SESSION['student_id'];
extract($_GET);
?>
<!-- <!DOCTYPE html>
<html>
<head>
    
    <title>Document</title>
</head>
<body>
    <a href="student_add_activities.php">add activities</a>
    <a href="student_download_certificate.php">download certificate</a>
    <a href="student_view_requirements.php">view requirements</a>
    <a href="student_view_exams.php">view exam</a>
    <a href="student_view_notification.php">view notification</a> -->
    

    <!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Attainment an Educational Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8" />
	<meta name="keywords" content="NATIONAL CADET CROPS  Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script> 
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	 <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<!--banner slider  -->
	<link href="css/JiSlider.css" rel="stylesheet">
	<!-- //banner-slider -->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

</head>

<body>
	<!-- header -->
	<section class="w3layouts-header py-2">
		<div class="container">
			  <!-- header -->
        <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                    <h1>
                        <a class="navbar-brand" href="index.html">
                        NCC    
                        </a>
                    </h1>
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item active  mr-3">
                                <a class="nav-link" href="hteacher_home.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                           
							 <li class="nav-item  mr-3">
                                <a class="nav-link" href="student_add_activities.php">ACTIVITIES</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="student_download_certificate.php">CERTIFICATE</a>
                            </li>
                            <!-- <li class="nav-item mr-3">
                                <a class="nav-link" href="STUDENT.php">expences</a> -->
                            <!-- </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="hteacher_add_nxt_year_plan.php">nextyear plan</a>
                            </li> -->
                           
                            <li class="nav-item dropdown mr-3">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    view
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="student_view_exams.php">EXAMS</a>
									 <a class="dropdown-item" href="student_view_notification.php">NOTIFICATION</a>
                                     <a class="dropdown-item" href="student_view_requirements.php">REQUIREMENTS</a>
                                  
                                    
                                     <!-- <a class="dropdown-item" href="admin_view_expences.php">view expences</a>
                                     <a class="dropdown-item" href="admin_view_nextyear_plan.php">next year plans</a>
                                     <a class="dropdown-item" href="admin_view_payment.php">payments</a> -->
                                </div>
                            </li>
                            <li class="nav-item  mr-3">
                                <a class="nav-link" href="index.php">logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
        </header>
        <!-- //header -->
		</div>
	</section>