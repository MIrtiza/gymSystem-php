

<!DOCTYPE HTML>
<html>
<head>
<title>Fees Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="hyper gym" />

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="http://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->


</head> 
<body class="cbp-spmenu-push">

<body>
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.php"><span class="fa fa-area-chart"></span> Hyper<span class="dashboard_text">Gym Shershah</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="#" target="_blank">
                <i class="fa fa-laptop"></i>
                <span>Member</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="add_member.php"><i class="fa fa-angle-right"></i> Add</a></li>
				  <li><a href="delete.php"><i class="fa fa-angle-right"></i> Delete</a></li>
				  <li><a href="update.php"><i class="fa fa-angle-right"></i> Update</a></li>
          <li><a href="index.php"><i class="fa fa-angle-right"></i> All Member</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="fees.php">
                <i class="fa fa-pie-chart"></i>
                <span>Fees</span>
               
                </a>
              </li>
           
              <li class="treeview">
                <a href="paid.php">
                <i class="fa fa-pie-chart"></i>
                <span>Paid</span>
               
                </a>
              </li>
              <li class="treeview">
                <a href="unpaid.php">
                <i class="fa fa-pie-chart"></i>
                <span>Unpaid</span>
               
                </a>
              </li>
              
              
             
     
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
</div>
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start--
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>-->
				
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
		
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span> 
									<div class="user-name">
										<p>Hyper</p>
										<span>@Yasir</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
							
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->

</div>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3 col-md-12">
                <form action="fees.php" method="post">
                    <input type="text" placeholder=" Search" name="searching" id="" style="width:70%; height: 40px; border:none;padding:10px; border-radius: 6px; border-bottom: 1px solid black;">
                    <input type="submit" name="search" value="Search" class="btn btn-primary" id=""style="width:10%; height: 40px;">
                    <?php
                    echo "<div style='display:none;'>";
                    include 'connection/conn.php';
                    if(isset($_POST['search'])){
                      $search = $_POST['searching'];
                      $sql = "select * from users where user_name like '%$search%' OR user_mobile like '%$search%' ";
                      $result = mysqli_query($conn,$sql);
                      while($row=mysqli_fetch_array($result)){
                        $id = $row['uid'];
                        $name = $row['user_name'];
                        $fname = $row['user_father'];
                        $mobile = $row['user_mobile'];
                        $nic = $row['user_nic'];
                        $date = $row['user_adddate'];
                        $photo = $row['user_photo'];

                        $output .='<div>'.$id.''.$name.' '.$fname.' '.$mobile.' '.$nic. ' '.$date.' '.$photo.'</div>';
                      }
                    }
                    echo "</div>";
                    ?>

                  </form>
             
                <br>
		    </div>
<!-- ========================================================= -->

                        <!-- Add Member -->

<!-- ========================================================== -->
		<div class="row-one widgettable">
			<div class="col-md-10 content-top-2 card" style="width: 80%;">
				<div class="agileinfo-cdr">
					<div class="card-header">
                        <h3>Fees Panel</h3>
                    </div>
					
                    <div class="form-body">
                        <form action="fees.php" method="post"> 
                          <div class="col-md-9">
                          <input hidden name="uid" type="text" value="<?=$id?>" />
                             <div class="form-group"> 
                                <label for="">Name</label> 
                                 <input type="text" value="<?php print ("$name");?>" class="form-control" id="name" placeholder="Full Name" disabled > 
                             </div>
                             <div class="form-group" style="display:inline;"> 
                              <label for="">Father Name</label> <br>
                               <input type="text" value="<?php print ("$fname");?>" class="form-control" id="name" placeholder="Full Name" disabled > 
                             </div>
                             
                             
                              <div class="form-group"> 
                                <label for="">Phone Number</label> 
                                 <input type="text" value="<?php print ("$mobile");?>" class="form-control" id="phone" placeholder="Phone Number" disabled> 
                             </div>
                             <div class="form-group"> 
                                <label for="">fees</label> 
                                 <input type="text" name="fees" class="form-control" id="" placeholder="Fees"> 
                             </div>
                            <div class="form-group"> 
                                <label for="">fees Date</label> 
                                 <input type="date" name="date" class="form-control" id="" placeholder="Date"> 
                             </div> 
                             </div>
                            <div class="col-md-3" style=" border: 1px solid black; ">
                                <div class="form-group" > 
                                <br>
                                     <img src="images/<?php echo $photo; ?>" alt="profile" style="display:inline;" width="100%">
                              </div>
                            </div>
                             
                                
                                <button type="submit" name="submit" class="btn btn-default" style="width: 100%;">Submit</button> 
                          </form> 
                    </div>

                    
						
				</div>
      </div>
      
      <div class="col-md-2" >
        <img src="images/body1.jpg" height="595px" width="100%" alt="">
      </div>
			
			
			<div class="clearfix"> </div>
		</div>
				
				
			
	
	<!-- for amcharts js -->
			<script src="js/amcharts.js"></script>
			<script src="js/serial.js"></script>
			<script src="js/export.min.js"></script>
			<link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
			<script src="js/light.js"></script>
	<!-- for amcharts js -->

    <script  src="js/index1.js"></script>
				


</div>
		
		<div class="col_1">
			
			
			<div class="clearfix"> </div>
			
		</div>
		
			</div>
		</div>
	<!--footer-->
	<div class="footer">
	   <p>&copy; 2018 Hyper Gym. All Rights Reserved | Design by <a href="https://www.fb.com/hashsystemic/" target="_blank">Hash Systemic</a></p>		
	</div>
    <!--//footer-->
	</div>
		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>
<?php
//echo// "<div style='display:none;'>";
 include "connection/conn.php";
echo "<div style='display:none;'>";
if(isset($_POST['submit']))
{
    // $feesabu = $_POST['fees'];
    $id = $_POST['uid'];
   
    $fees = $_POST['fees'];
    $date = $_POST['date'];
    

    
   echo $dating = date("Y-m-d", strtotime($date) );
   //$convertDate = date_format($date, 'YYYY-m-d');

}

// $sql5 ="INSERT into testing (testone,testtwo,testthree) VALUES ('$pms_id','$dating','$fees')";
$sql5 = "insert into fees (uid,fees_payment,fees_date) values ($id,'$fees','$dating')";
$result = mysqli_query($conn,$sql5);
var_dump($result);
echo "</div>";
?>
