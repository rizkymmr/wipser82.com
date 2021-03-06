<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kost Wisper 82</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()."assets/vendor/bootstrap/css/bootstrap.min.css" ?>" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url()."assets/css/clean-blog.min.css" ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()."vendor/font-awesome/css/font-awesome.min.css" ?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	
	<!-- Custom Table -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/csstabel/css/component.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/csstabel/css/demo.css">
	<script src="jquery-2.1.4.js"></script>
	<style>
      	#map {
        height: 500px;
      	}
	</style>
	
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url()."Login/index";?>">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below.  FP-Kotak/assets/img/home-bg.jpg-->
    <header class="intro-header" style="background-image: url('<?php echo base_url('assets/img/home-bg.jpg'); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Kost Wisma Permai I 82</h1>
                        <hr class="small">
                        <span class="subheading">Selamat Datang</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container" align="center">
        <div class="row">	
			<h1 style="text-align">Our Location<h1>
			<div id="map"></div>
			<script>
			var map;
			function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: -7.273894, lng: 112.794686},
			zoom: 18
			});
		
			var marker = new google.maps.Marker({
			position: {lat: -7.273894, lng: 112.794686},
			map: map,
			title: 'Kost Wisma Permai I no 82',
			});
			}
	  
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3JrwVdgdvRsB5edSw-tDqTsNADDSwIzg&callback=initMap"
			async defer></script>
			</div>
		</div>
	</div>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p class="copyright text-muted">Copyright &copy; Kost Wisma Permai Nomor 82<br>wismapermaii.82@gmail.com</p>
		<a href="<?php echo base_url()."Crud/mail";?>">Contact us via email!</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url()."assets/vendor/jquery/jquery.min.js" ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()."assets/vendor/bootstrap/js/bootstrap.min.js" ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url()."assets/js/jqBootstrapValidation.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/contact_me.js" ?>"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url()."assets/js/clean-blog.min.js" ?>"></script>

</body>

</html>
