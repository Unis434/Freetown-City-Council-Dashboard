<?php 
	include('functions.php');
	include_once("config.php");

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	$pin=$_REQUEST['pin'];
$query = "SELECT * FROM taxpayer WHERE pin='".$pin."'"; 
$result = mysqli_query($mysqli, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     
  <title>
    FCC DASHBOARD
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  

    <style type="text/css">
            	.row{
		    margin-top:40px;
		    padding: 0 10px;
		}
		.clickable{
		    cursor: pointer;   
		}

		.panel-heading div {
			margin-top: -18px;
			font-size: 15px;
		}
		.panel-heading div span{
			margin-left:5px;
		}
		.panel-body{
			display: none;
		}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="black" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo.png">
          </div>
        </a>
        <a href="/" class="simple-text logo-normal">
          FCC DASHBOARD
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
            <li>
            <a href="/">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
           
       <?php 
	if (isAdmin()) { ?>
	    
	       <li>
            <a href="create_user.php">
              <i class="nc-icon nc-circle-10"></i>
              <p>Add Users</p>
            </a>
          </li>
	
<?php  	}
?>


          <?php 
	if (isAdmin()) { ?>
	    
        <li>
                  
            <a href="view_users.php">
              <i class="nc-icon nc-zoom-split"></i>
              <p>Edit Users</p>
            </a>
          </li>
	
<?php  	}
?>
          
    
          
          <li>
            <a href="add_record.php">
              <i class="nc-icon nc-paper"></i>
              <p>Add Record</p>
            </a>
          </li>
          <li>
               <li class="active ">
            <a href="view_records.php">
              <i class="nc-icon nc-zoom-split"></i>
              <p>Edit Record</p>
            </a>
          </li>
          </li>

          <li>
            <a href="index.php?logout='1'">
              <i class="nc-icon nc-simple-remove"></i>
              <p>LOGOUT</p>
            </a>
          </li>

          <li>
            <a href="/">
              <img src="../assets/img/logo.png">

            </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">FREETOWN CITY COUNCIL DASHBOARD</a>
            
<strong><?php echo "Welcome " . $_SESSION['user']['username']; 
?></strong>

<strong>
	<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
	</strong>


          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                
                
                
              
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://fcc.medal-media.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">View Profile</a>
                  <a class="dropdown-item" href="#">Notification</a>
                  <a class="dropdown-item" href="index.php?logout='1'">Logout</a>
                </div>
              </li>
                         </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
     
     
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Edit Records</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    
<div class="form">
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$pin=$_REQUEST['pin'];
$name =$_REQUEST['name'];
$address =$_REQUEST['address'];
$ward =$_REQUEST['ward'];
$amount =$_REQUEST['amount'];
$validity =$_REQUEST['validity'];
$submittedby = $_SESSION["username"];
$update="update taxpayer set
name ='".$name."', address='".$address."',
ward ='".$ward."', amount ='".$amount."', validity ='".$validity."' where pin='".$pin."'";
mysqli_query($mysqli, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view_records.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
     <form role="form" name="form" method="post" action="">
         
         <div class="form-group">
			                <input type="hidden" name="new" value="1" >
			    					</div>
			
			    			
			    					<div class="form-group">
			                <input type="hidden" name="pin" id="first_name" class="form-control input-sm" placeholder="PIN" value="<?php echo $row['pin'];?>" >
			    					</div>
			    					
			    						<div class="form-group">
			                <input type="text" name="name" id="first_name" class="form-control input-sm" placeholder="Name" required value="<?php echo $row['name'];?>" >
			    					</div>
			

			    			<div class="form-group">
			    			<input type="text" name="address" id="first_name" class="form-control input-sm" placeholder="Address" required value="<?php echo $row['address'];?>" >
			    			</div>
			    			
			    				<div class="form-group">
			    			<input type="text" name="ward" id="first_name" class="form-control input-sm" placeholder="Ward" required value="<?php echo $row['ward'];?>" >
			    			</div>
			    			
			    					<div class="form-group">
			    			<input type="text" name="amount" id="first_name" class="form-control input-sm" placeholder="Amount" required value="<?php echo $row['amount'];?>" >
			    			</div>
			    			
			    							<div class="form-group">
			                <input type="date" name="validity" id="validity-date" class="form-control input-sm" required value="<?php echo $row['validity'];?>">
			    					</div>
			    			
			
		
		    			<input type="submit" value="Update" class="btn btn-info btn-block">
			    		
			    		</form>
<?php } ?>
    
          </div>
           </div>
          
          
            <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Medal Media
              </span>
            </div>
          </div>
        </div>
      </footer>

     
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
