<?php
echo "<div style='display:none;'>";
session_start();
if($_SESSION['username'] == null){
header("location: login.php");
}
echo "</div>";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Paid</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="hyper gym" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

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
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>


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

		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
								<!-- ==================================   search-box =============================--
								
				<div class="search-box" style="margin-left: 30px;">
                        <form class="input" action="paid.php" method="post">
                            <input class="" placeholder="Search Users" type="text" name="searching"  style="width:400px; height: 40px; border: none;padding: 10px; border-bottom: 1px solid black; background: rgba(246, 248, 248, 0.836); " />
														<input type="submit" name="search" id="">
                        </form>
                    </div><!--//end-search-box-->
                
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

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	
        	
        	
        	<div class="clearfix"> </div>
		</div>
        <!-- =========================================================== -->
                        <!-- main -->
        <!-- ============================================================ -->
		<div class="row-one widgettable">
			<div class="col-md-12 content-top-2 card">
				<div class="agileinfo-cdr">
					
					
                    <div class="panel-body widget-shadow">
						<h4>Paid Users</h4>
						<table class="table">
							<thead>
								<tr>
																	<th>#</th>
																	<th>Name</th>
                                  <th>Father Name</th>
                                  <th>Mobile</th>
																	<th>NIC</th>
																	<th>Fees Date</th>
                                  <th>Payment</th>
                                  <th>photo</th>

                                  
								</tr>
							</thead>
							<tbody>
								<?php
                                    include 'connection/conn.php';
                                   

									if(isset($_POST['search'])){
									 $Search = $_POST['searching'];
										//$sql = "SELECT * FROM `users` WHERE CONCAT(`uid`,`user_name`,`user_father`,`user_mobile`,`user_nic`) like '%$Search%'";
                                       // $sql = "select * from users where uid != (SELECT uid FROM fees WHERE MONTH(fees_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH))";
                                       $sql = "SELECT * FROM `users` WHERE uid IN ( SELECT fees.uid,fees.fees_date,fees.fees_payment from fees INNER JOIN users ON fees.uid= users.uid WHERE year(fees_date) = YEAR(CURRENT_DATE) AND month(fees_date) = month(CURRENT_DATE) AND day(fees_date) >= 01)";
                                       $result = mysqli_query($conn,$sql);
										while($row=mysqli_fetch_array($result))
										{
											echo '
											<tr>
	
											<th scope="row">'.$row["uid"].'</th>
											<td>'.$row["user_name"].'</td>
											<td>'.$row["user_father"].'</td>
											<td>'.$row["user_mobile"].'</td>
											<td>'.$row["user_nic"].'</td>
                                            <td>'.$row["fees_date"].'</td>
                                            <td>'.$row["fees_payment"].'</td>
                                            
										
											<td> <img src="images/'.$row["user_photo"].'" width="50px"height="50px" /> </td>
										</tr>
											';
										}
									}
									else{
                                        // $sql2 = "select * from users where uid != (SELECT uid FROM fees WHERE MONTH(fees_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH))";
                                        // $ids= array();
                                        // $result2 = mysqli_query($conn,$sql2);
                                        // while($row=mysqli_fetch_assoc($result2))
                                        // {
                                        //     $ids[] = $row["uid"];
                                        // }
                                        // for($i=0;$i<sizeof($ids); $i++){
                                        //     $query = "INSERT into fees (uid,fees_date,fees_payment) VALUES ($ids[$i],DATE_SUB(CURRENT_DATE,INTERVAL 1 Month),0)";
                                        //     $resulInsert = mysqli_query($conn,$query);
                                        // }
                                        // $query_mine = "SELECT users.uid,users.user_name,users.user_father,users.user_mobile, fees.adddate FROM `users` INNER JOIN fees ON users.uid = fees.uid WHERE `uid` NOT IN ( SELECT fees.uid  from fees INNER JOIN users ON fees.uid= users.uid WHERE year(fees_adddate) = YEAR(CURRENT_DATE) AND month(fees_adddate) = month(CURRENT_DATE) AND day(fees_adddate) >= 01)";
                                        // $resul_mine = mysqli_query($conn,$query_mine);


										$sql = "SELECT users.uid, users.user_name, users.user_father,users.user_mobile,users.user_nic,users.user_photo,fees.fees_payment,fees.fees_date FROM `users` join fees on users.uid=fees.uid WHERE fees.fees_payment != 0 and users.uid IN ( SELECT fees.uid from fees INNER JOIN users ON fees.uid= users.uid WHERE year(fees_date) = YEAR(CURRENT_DATE) AND month(fees_date) = month(CURRENT_DATE) AND day(fees_date) >= 01)";
										$result = mysqli_query($conn,$sql);
										while($row=mysqli_fetch_array($result))
										{
											echo '
											<tr>
	
											<th scope="row">'.$row["uid"].'</th>
											<td>'.$row["user_name"].'</td>
											<td>'.$row["user_father"].'</td>
											<td>'.$row["user_mobile"].'</td>
											<td>'.$row["user_nic"].'</td>
                                            <td>'.$row["fees_date"].'</td>
                                            <td>'.$row["fees_payment"].'</td>
										
											<td> <img src="images/'.$row["user_photo"].'" width="50px" height="50px" /> </td>
										</tr>
											';
										}
									}
									


								
								?>
							
								
							</tbody>
						</table>
					</div>
						
				</div>
			</div>
			<!-- <div class="col-md-3 stat">
				
				
				
			</div> -->
			
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
	<!-- new added graphs chart js-->
	
    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>

	<!-- new added graphs chart js-->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
	
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
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
	<!-- //for index page weekly sales java script -->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>