<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Annual Sports | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ONGC Annual</b>Sports</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="../../index.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Badminton</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="details.html"><i class="fa fa-circle-o"></i> Event Details</a></li>
            <li><a href="registration.html"><i class="fa fa-circle-o"></i> Registration </a></li>
            <li><a href="view.php"><i class="fa fa-circle-o"></i> View</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Table Tennis</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/table-tennis/details.html"><i class="fa fa-circle-o"></i> Event Details</a></li>
            <li><a href="pages/table-tennis/registration.html"><i class="fa fa-circle-o"></i> Registration </a></li>
            <li><a href="pages/table-tennis/view.php"><i class="fa fa-circle-o"></i> View</a></li>
          </ul>
        </li>
		<li>
          <a href="../../index.html">
            <i class="fa fa-folder"></i> <span>Football</span>
			<span class="pull-right-container">
              <small class="label pull-right bg-green">coming soon</small>
            </span>
          </a>
        </li>
		
		<li>
          <a href="../../index.html">
            <i class="fa fa-folder"></i> <span>Cricket</span>
			<span class="pull-right-container">
              <small class="label pull-right bg-green">coming soon</small>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Badminton
        <small>Registration</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Registration</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
	<?php 

	$cpf = isset($_POST['cpf'])? $_POST['cpf'] : '';
	$name = isset($_POST['name'])? $_POST['name'] : '';
	
	//$mesa45 = isset($_POST['mesa45'])? $_POST['mesa45'] : '';
	//$mesb45 = isset($_POST['mesb45'])? $_POST['mesb45'] : '';
	$mesa45 = isset($_POST['mesa45'])? 'Participating' : '';
	$mesb45 = isset($_POST['mesb45'])? 'Participating' : '';
	$meda45 = isset($_POST['meda45'])? $_POST['mensPartner'] : '';
	$medb45 = isset($_POST['medb45'])? $_POST['mensPartner'] : '';
	
	$mida45 = isset($_POST['mida45'])? $_POST['mixedPartner'] : '';
	$midb45 = isset($_POST['midb45'])? $_POST['mixedPartner'] : '';
	
	//$wosa45 = isset($_POST['wosa45'])? $_POST['wosa45'] : '';
	//$wosb45 = isset($_POST['wosb45'])? $_POST['wosb45'] : '';
	
	$wosa45 = isset($_POST['wosa45'])? 'Participating' : '';
	$wosb45 = isset($_POST['wosb45'])? 'Participating' : '';
	$woda45 = isset($_POST['woda45'])? $_POST['womensPartner'] : '';
	$wodb45 = isset($_POST['wodb45'])? $_POST['womensPartner'] : '';
	
	//$kidb8	= isset($_POST['kidb8'])? $_POST['kidb8'] : '';
	//$bb12	= isset($_POST['bb12'])? $_POST['bb12'] : '';
	//$bb16	= isset($_POST['bb16'])? $_POST['bb16'] : '';
	//$gb12	= isset($_POST['gb12'])? $_POST['gb12'] : '';
	//$gb16	= isset($_POST['gb16'])? $_POST['gb16'] : '';
	
	$kidb8	= isset($_POST['kidb8'])? 'Participating' : '';
	$bb12	= isset($_POST['bb12'])? 'Participating' : '';
	$bb16	= isset($_POST['bb16'])? 'Participating' : '';
	$gb12	= isset($_POST['gb12'])? 'Participating' : '';
	$gb16	= isset($_POST['gb16'])? 'Participating' : '';
	
	$dob = isset($_POST['dob'])? $_POST['dob'] : '';
	$ts = strtotime($dob);
	$formatted_dob = date('Y-m-d', $ts);
	
	$regfor = isset($_POST['regFor'])? $_POST['regFor'] : '';
	$participant = isset($_POST['participant'])? $_POST['participant'] : '';
	
	$mens_partner = isset($_POST['mensPartner'])? $_POST['mensPartner'] : '';
	$womens_partner = isset($_POST['womensPartner'])? $_POST['womensPartner'] : '';
	$mixed_partner = isset($_POST['mixedPartner'])? $_POST['mixedPartner'] : '';
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "annual_sports";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO badminton_tbl VALUES($cpf,'$name','$regfor','$participant','$formatted_dob','$mesa45','$meda45',
																							'$mesb45','$medb45',
																							'$wosa45','$woda45',
																							'$wosb45','$wodb45',
																							'$mida45','$midb45',
																							'$kidb8','$bb12','$bb16',
																							'$gb12','$gb16',
																							 now())";

	if ($conn->query($sql) === TRUE) {
		echo "<h2>Registration Successful!</h2>";
		echo '<a href="../../index.php">Go Home</a>';
	} else {
		echo "ERROR: " . $sql . "<br>" . $conn->error;
		echo "<h4>Either you have already been registered or there's some issue with the server.</h4>";
		echo '<h4>Please contact <a href="tel:+918259950403"><b>admin</b></a></h4>';
	}

	$conn->close();
	
	
	?>
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2017 <a href="https://adminlte.io">Infocom Services</a>.</strong>
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../../bower_components/raphael/raphael.min.js"></script>
<script src="../../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../bower_components/moment/min/moment.min.js"></script>
<script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script>

    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
	
	
	$('#meda45').click(function(){
		$('#mens-partner').toggle();
	});
	$('#medb45').click(function(){
		$('#mens-partner').toggle();
	});
	
	$('#woda45').click(function(){
		$('#womens-partner').toggle();
	});
	$('#wodb45').click(function(){
		$('#womens-partner').toggle();
	});
	
	$('#mida45').click(function(){
		$('#mixed-partner').toggle();
	});
	$('#midb45').click(function(){
		$('#mixed-partner').toggle();
	});
	
</script>

</body>
</html>
