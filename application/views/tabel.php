<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Penghuni</title>

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
                        <a href="<?php echo base_url()."login/do_logout";?>">Logout</a>
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
                        <span class="subheading">Halaman Penghuni</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <h2 style="text-align: center">
                        Data Inventaris Kost
                    </h2>
					<div style="overflow-x:auto;">
					<table align= "center">
					<tr>
						<th style="text-align: center">No</th>
						<th style="text-align: center">Barang</th>
						<th style="text-align: center">Jumlah</th>
						<th style="text-align: center">Status</th>
						<th style="text-align: center">Foto</th>
						<th style="text-align: center">Action</th>
					</tr>
					<?php foreach($data as $d){ ?>
					<tr>
						<td style="text-align: center"><?php echo $d['id']; ?></td>
						<td style="text-align: center"><?php echo $d['nama_barang']; ?></td>
						<td style="text-align: center; width: 80px"><?php echo $d['jumlah']; ?></td>
						<td style="text-align: center; width: 80px"><?php echo $d['status']; ?></td>
						<td align="center" style="height: 125px; width: 125px "><img src="<?php echo base_url("/upload/".$d['foto']).".jpg"; ?>" width="100" height="100"></td>
						<td style="text-align: center; width: 125px">
							<a href="<?php echo base_url()."index.php/crud/edit_data/".$d['id']; ?>">Edit</a><br><br>
							<a href="<?php echo base_url()."index.php/crud/do_delete/".$d['id']; ?>">Delete</a>
						</td>
					</tr>
					<?php }?>
					</table>
					</div>
					<h3 style="text-align: center">
						<a href ="<?php echo base_url()."index.php/crud/add_data"; ?>">Tambah Data</a>
					</h3>
                </div>
                <hr>
                <div class="col-md-12 container">
					<p style="text-align: center; font-size: 17px">
						Tolong Saling Mengingatkan Sesama Perihal Kebersihan dan Keamanan Kost<br>
                        Jangan Lupa Selalu Kunci Pagar dan Matikan Lampu Kamar Ketika Hendak Meninggalkan Kost<br>
                        -Pak Budi-
					</p>
                </div>
            </div>
        </div>
    </div>
	<br>
    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p class="copyright text-muted">Copyright &copy; Kost Wisma Permai Nomor 82<br>wismapermaii.82@gmail.com</p>
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
