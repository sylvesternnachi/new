<!DOCTYPE html>
<html>
<head>
	<title>GPMS Investment Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/nav.css">
	<script src="../assets/js/jquery-1.11.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/daterangepicker.js"></script>
    <script src="../assets/js/require.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/daterangepicker.css" />


	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Rubik:400,500,700" rel="stylesheet">

<body>

	

	


<div class="nav-side-menu posi">
    <div class="brand">
        <img src="../assets/img/gpms.png"> <br/>
        <h2>GPMS</h2>
    </div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                 <p align="center" style="letter-spacing: 10px; color:#243248">MINISTRY</p>
                  <hr / style="margin-top:-13px;border-color: #233653;">
                <li>
                  <a href="index.php">
                      <i><img src="../assets/img/reception.svg" class="ico" style="width: 25px"></i> Dashbaord
                  </a>
                </li>

                  <li>
                  <a href="requirementrequest.php">
                      <i><img src="../assets/img/259500.svg" class="ico" style="width: 23px"></i> Requirement Request
                  </a>
                </li>

                 <li>
                  <a href="taskrequest.php">
                      <i><img src="../assets/img/259500.svg" class="ico" style="width: 23px"></i> Task Request
                  </a>
                </li>

            

              

                 <li>
                  <a href="profile.php">
                  <i><img src="../assets/img/person.svg" class="ico" style="width: 23px"></i>Profile
                  </a>
                  </li>

                 <li>
                  <a href="#">
                 <i><img src="../assets/img/logout.svg" class="ico" style="width: 23px"></i> Logout
                  </a>
                </li>
            </ul>
     </div>
</div>



		
	<div id="content-box" class="right">

		<div id="header">
			<div class="col-md-6"> <img src="../assets/img/menu-bar.png" style="width: 25px;"></div>
			<div class="col-md-6">
				<p align="right" style="margin-right: 22px;color:#979797; font-size:16px"><img src="../assets/img/user.png" style="width: 35px; padding-right: 1%"> Michael Smith</p>
			</div>
		</div>
		<div id="title-bar">
			<div class="col-md-6">
				<p>Dashboard</p>
			</div>
			<div class="col-md-6 hidden-sm hidden-xs">
				<i><img src="../assets/img/dashboard.svg" class="ico" style="width: 25px; float: right"></i> 
			</div>
		</div>

		<div class="container-fluid">


			<div class="top-bar ">
			
			<div class="col-md-2 hidden-sm hidden-xs">
				<div class="topbox">
					<div class="col-md-3  col-sm-6 col-xs-6">
					<img src="../assets/img/book1.svg" style="width: 35px; margin-top:10px">
					
					</div>
				<div class="col-md-9 col-sm-7 col-xs-6">
					<h1 align="right">14</h1>
					<p align="right">Requirement Request(s)</p>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 hidden-xs">
				<div class="topbox">
					<div class="col-md-3  col-sm-6 col-xs-6">
					<img src="../assets/img/book2.svg" style="width: 35px; margin-top:10px">
					</div>
				<div class="col-md-9 hidden-sm col-xs-6 ">
					<h1 align="right">24</h1>
					<p align="right">New Requirement(s)</p>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 hidden-xs">
				<div class="topbox">
					<div class="col-md-3  col-sm-6 col-xs-6">
					<img src="../assets/img/book3.svg" style="width: 35px; margin-top:10px">
					
					</div>
				<div class="col-md-9 hidden-sm col-xs-6">
					<h1 align="right">80</h1>
					<p align="right">Open Requirement(s)</p>
					</div>
				</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 hidden-xs">
				<div class="topbox">
					<div class="col-md-3  col-sm-6 col-xs-6">
					<img src="../assets/img/book4.svg" style="width: 35px; margin-top:10px">
					
					</div>
				<div class="col-md-9 hidden-sm col-xs-6">
					<h1 align="right">65</h1>
					<p align="right">Tasks Request(s)</p>
					</div>
				</div>
				</div>

				<div class="col-md-2 col-sm-4 hidden-xs">
				<div class="topbox">
					<div class="col-md-3  col-sm-6 col-xs-6">
					<img src="../assets/img/book6.svg" style="width: 45px; margin-top:10px">
					
					</div>
				<div class="col-md-9 hidden-sm col-xs-6">
					<h1 align="right">65</h1>
					<p align="right">New Task(s)</p>
					</div>
				</div>
				</div>

				<div class="col-md-2 col-sm-4 hidden-xs">
				<div class="topbox">
					<div class="col-md-3  col-sm-6 col-xs-6">
					<img src="../assets/img/book5.svg" style="width: 35px; margin-top:10px">
					
					</div>
				<div class="col-md-9 hidden-sm col-xs-6">
					<h1 align="right">65</h1>
					<p align="right">Open Task(s)</p>
					</div>
				</div>
				</div>



				<div class="col-lg-12">
					<div id="table-box">
						<div class="title-box">
						<p style="font-size: 18px;color:#fff">Recent Activity
 <i style="float:right"><img src="../assets/img/settings-icon.svg" style="width:20px"></i></p>

					</div>

					<div style="padding: 2%">
						
						<div class="col-md-6">

						

							<div class="col-md-7">

							

  		
    			</div>
								
						</div>

						

					<table class="table table-striped">
					 <thead style="color:#187CCA"> 
					 	<tr> 
					 		<th>P/N</th> 
					 		<th>Date</th> 
					 		<th>Proposal Name</th>
					 		 <th>Task Requestment</th> 

					 		  <th>Status</th> 
					 		</tr> 
					 </thead>
					  <tbody style="  font-family: 'Rubik', sans-serif; padding: 2%"> 
					  	<tr> 
					  		<td>001</td>
					  		 <td>02/03/2018</td> 
					  		 <td>Farraw Breweries</td> 
					  		 <td> Available of GPRA</td> 
					  		 
					  		<td><button style="background: #45B6AF; border:none; border-radius: 10px; padding: 2% 8%; color:white">Min. for Up</button></td> 
					  	</tr> 
					  

					   </tbody>
					   </table>

					</div>

					</div>
				</div>


			</div>




			

		</div>
			
	
<script type="text/javascript">
	$('#demo').daterangepicker({
    "startDate": "03/17/2018",
    "endDate": "03/23/2018"
}, function(start, end, label) {
  console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
});
</script>



</body>
</html>