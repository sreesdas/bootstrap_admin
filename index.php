<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Annual Sports | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b> ONGC Annual</b>Sports</span>
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
          <a href="index.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
		<li>
          <a href="pages/annual_gift/index.html">
            <i class="fa fa-gift"></i> <span>Officer's Club</span>
			<span class="pull-right-container">
              <small class="label pull-right bg-red">new</small>
            </span>
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
            <li><a href="pages/badminton/details.html"><i class="fa fa-circle-o"></i> Event Details</a></li>
            <li><a href="pages/badminton/registration.html"><i class="fa fa-circle-o"></i> Registration </a></li>
            <li><a href="pages/badminton/view.php"><i class="fa fa-circle-o"></i> View</a></li>
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
          <a href="index.html">
            <i class="fa fa-folder"></i> <span>Football</span>
			<span class="pull-right-container">
              <small class="label pull-right bg-green">coming soon</small>
            </span>
          </a>
        </li>
		
		<li>
          <a href="index.html">
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
        Annual Sports
        <small>Event Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 id="bd_reg" >0</h3>

              <p> Badminton Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="pages/badminton/registration.html" class="small-box-footer">
              Register Now <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3 id="tt_reg">0</h3>

              <p>TT Registrations</p>
            </div>
            <div class="icon">
              <i class="fa fa-area-chart"></i>
            </div>
            <a href="pages/table-tennis/registration.html" class="small-box-footer">
              Register Now <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3 id="noEvents">20+</h3>

              <p>Events</p>
            </div>
            <div class="icon">
              <i class="fa fa-futbol-o"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="push-menu" role="button">
              View Events <i class="fa fa-arrow-circle-right"></i>
            </a>

          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3 id="part">0</h3>

              <p>Participants</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="pages/badminton/view.php" class="small-box-footer">
              View All <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
	  
	  <div class="row">
		<div class="col-md-8">
		  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Registered Users</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
			  
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

					$sql = "select * from  badminton_tbl ORDER BY REGN_TIME DESC LIMIT 5 ";

					$result = $conn->query($sql);

					$list = [];
					if ($result->num_rows > 0) {
					// output data of each row
						while($row = $result->fetch_assoc()) {
							$arr = array("name" => $row['NAME']);
							$partner = '';
							if($row['MEN_DOUBLES_ABV45'] != ''){
								$partner = $row['MEN_DOUBLES_ABV45'];
								$type = 'Men\'s';
							}
							else if($row['MEN_DOUBLES_BLW45'] != ''){
								$partner = $row['MEN_DOUBLES_BLW45'];
								$type = 'Men\'s';
							}
							else if($row['MIXED_DOUBLES_BLW45'] != ''){
								$partner = $row['MIXED_DOUBLES_BLW45'];
								$type = 'Mixed\'s';
							}
							else if($row['WOMEN_DOUBLES_BLW45'] != ''){
								$partner = $row['WOMEN_DOUBLES_BLW45'];
								$type = 'Women\'s';
							}
							else if($row['WOMEN_DOUBLES_ABV45'] != ''){
								$partner = $row['WOMEN_DOUBLES_ABV45'];
								$type = 'Women\'s';
							}
							if($partner != ''){
								echo '<li class="item">
										  <div class="product-img">
											<img src="logo.png" alt="Product Image">
										  </div>
										  <div class="product-info">
											<a href="javascript:void(0)" class="product-title">'.$row['NAME'].'</a>
											<span class="product-description">'. $type .' doubles partnering with '.$partner.'</span>
										  </div>
										</li>';
							}
							
						}
					}
				
				?>
			  
                

              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="pages/badminton/view.php" class="uppercase">View All Registrations</a>
            </div>
            <!-- /.box-footer -->
          </div>

		</div>
		<div class="col-md-4">

			<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
			<div class="panel box box-success">
			  <div class="box-header with-border">
				<h4 class="box-title">
				  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
					Event Coordinators
				  </a>
				</h4>
			  </div>
			  <div id="collapseOne" class="panel-collapse collapse in">
				<div class="box-body" style="font-size:15px">
					<dl>
						<dt>Sports Coordinator</dt>
						<dd>Kuldeep Rohilla</dd>
						<br />
						<dt>Badminton</dt>
						<dd>Ajab Singh, Krishnamachari M</dd>
						<br />
						<dt>Table Tennis</dt>
						<dd>Antram Negi, Rajinder Badana</dd>
						<br />
						<dt>Athletics</dt>
						<dd>Hans Humar, Rupa Barua</dd>
					  </dl>
				</div>
			  </div>
			</div>
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
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
  
  $(document).ready(function(){
    $.ajax({url: "php/get_fp_data.php", success: function(result){
		var obj = jQuery.parseJSON(result);
        $("#bd_reg").html(obj.bad);
		$("#tt_reg").html(obj.tt);
		$("#noEvents").html(obj.events);
		$("#part").html(obj.tt++ + obj.bad++);
	}});
  });
  
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
      //Random default events
      events    : [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954' //red
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
</body>
</html>
