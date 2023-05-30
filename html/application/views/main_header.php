<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Induk Hotel by Colorlib.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

	<link rel="stylesheet" href="/~team3/my/css/bootstrap.min.css">
    <link rel="stylesheet" href="/~team3/my/css/animate.css">
    <link rel="stylesheet" href="/~team3/my/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/~team3/my/css/aos.css">
    <link rel="stylesheet" href="/~team3/my/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/~team3/my/css/jquery.timepicker.css">
    <link rel="stylesheet" href="/~team3/my/css/fancybox.min.css">

    <link rel="stylesheet" href="/~team3/my/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/~team3/my/fonts/fontawesome/css/font-awesome.min.css">


	<script src="/~team3/my/js/jquery-3.5.1.min.js"></script>
	<script src="/~team3/my/js/moment-with-locales.min.js"></script>
	<script src="/~team3/my/js/bootstrap-datetimepicker.js"></script>
	<link	href="/~team3/my/css/bootstrap-datetimepicker.css" rel="stylesheet">
	<link	href="/~team3/my/css/fontawesome-all.min.css" rel="stylesheet">

    <!-- Theme Style -->
    <link rel="stylesheet" href="/~team3/my/css/style.css">
	
	

	<!----

	<script src="/~team3/my/js/moment-with-locales.min.js"></script>
	<script src="/~team3/my/js/bootstrap-datetimepicker.js"></script>
	<link  href="/~team3/my/css/bootstrap-datetimepicker.css" rel="stylesheet">

	<link  href="/~team3/my/css/fontawesome-all.min.css" rel="stylesheet">
	---->



  </head>
  <body>

    <header class="site-header js-site-header"style="background-color: rgba( 0, 0, 0, 0.1 );">
      <div class="container-fluid" >
        <div class="row align-items-center">
          <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="/~team3/main">Induk Hotel</a></div>
          <div class="col-6 col-lg-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar" style="overflow-y:hidden">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6 mx-auto">
                      <ul class="list-unstyled menu">
                        <li class="active"><a href="/~team3/main">Home</a></li>
                        <li><a href="/~team3/room">Rooms</a></li>
                        <li><a href="/~team3/about">About</a></li>
							<?
								if ($this->session->userdata("uid"))
									echo("<li><a href='/~team3/reservation'>Reservation</a></li>");
								else
									echo("<li><a href='/~team3/login'>Reservation</a></li>");
							?>


						<div class='dropdown-divider'></div>

						<li>



						<?
							if (!$this->session->userdata("uid"))
								echo("<a href='/~team3/login'>Login</a>
									<li><a href='/~team3/login/add'>Sign up</a></li>");
							else
							{
								$uid=$this->session->userdata("uid");
								$no=$this->session->userdata("no");
								echo("<a href='/~team3/mypage/view/no/$no'>$uid</a><a href='/~team3/login/logout'>Logout</a>");
							}
						?>
						<?
							$no=$this->session->userdata("no");
							if ($this->session->userdata("uid"))
								echo("<li><a href='/~team3/mypage/view/no/$no'>Mypage</a></li>");
						?>
						</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>


            </div>
          </div>
        </div>
      </div>
    </header>
