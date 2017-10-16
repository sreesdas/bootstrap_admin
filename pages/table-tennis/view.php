<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Annual Sports | TT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
            <li><a href="../badminton/details.html"><i class="fa fa-circle-o"></i> Event Details</a></li>
            <li><a href="../badminton/registration.html"><i class="fa fa-circle-o"></i> Registration </a></li>
            <li><a href="../badminton/view.php"><i class="fa fa-circle-o"></i> View</a></li>
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
            <li><a href="details.html"><i class="fa fa-circle-o"></i> Event Details</a></li>
            <li><a href="registration.html"><i class="fa fa-circle-o"></i> Registration </a></li>
            <li><a href="view.php"><i class="fa fa-circle-o"></i> View</a></li>
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
        Table Tennis
        <small>Participation List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Table Tennis</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	<div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Men's Championship</h3>
            </div>
			<div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Cpf Number</th>
                  <th>Name</th>
                  <th>Singles</th>
                  <th>Doubles</th>
                  <th>Mixed Doubles</th>
                </tr>
                </thead>
                <tbody>
                <?php
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

					$sql = "SELECT NAME, CPF, DOB, MENS_SINGLES_BLW45, MENS_DOUBLES_BLW45, MIXED_DOUBLES FROM tt_tbl 
							where (MENS_SINGLES_BLW45 != '' or MENS_DOUBLES_BLW45 != '')
							UNION
							SELECT NAME,CPF,DOB,MENS_SINGLES_ABV45,MENS_DOUBLES_ABV45,MIXED_DOUBLES FROM tt_tbl 
							WHERE (MENS_SINGLES_ABV45 != '' OR MENS_DOUBLES_ABV45 != '')";
							
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row['CPF'] . "</td>";
						echo "<td>" . $row['NAME'] . "</td>";
						echo "<td>" . $row['MENS_SINGLES_BLW45'] . "</td>";
						echo "<td>" . $row['MENS_DOUBLES_BLW45'] . "</td>";
						echo "<td>" . $row['MIXED_DOUBLES'] . "</td>";
						echo "</tr>";
					}
					}
				?>
                </tfoot>
              </table>
			</div>
		  </div>
		</div>
	</div>
	
	<div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Women's Championship</h3>
            </div>
			<div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Cpf Number</th>
                  <th>Name</th>
                  <th>Date of Birth</th>
                  <th>Singles</th>
                </tr>
                </thead>
                <tbody>
                <?php
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

					$sql = "SELECT NAME, CPF, DOB, WOMENS_SINGLES FROM tt_tbl 
					where PARTICIPANT_NAME = '' AND WOMENS_SINGLES != ''
					UNION
					SELECT PARTICIPANT_NAME, CPF, DOB, WOMENS_SINGLES FROM tt_tbl WHERE
					PARTICIPANT_NAME != '' AND WOMENS_SINGLES != ''";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row['CPF'] . "</td>";
						echo "<td>" . $row['NAME'] . "</td>";
						echo "<td>" . $row['DOB'] . "</td>";
						echo "<td>" . $row['WOMENS_SINGLES'] . "</td>";
						echo "</tr>";
					}
					}
				?>
                </tfoot>
              </table>
			</div>
		  </div>
		</div>
	</div>
			  
			  

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
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>
