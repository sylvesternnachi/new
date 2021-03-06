<!DOCTYPE html>
<html>
<head>
	<title>GPMS Investment Dashboard</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="assets/css/nav.css">
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Rubik:400,500,700" rel="stylesheet">

<body>

	

	



<div class="nav-side-menu posi">
    <div class="brand">
    		<img src="assets/img/gpms.png"> <br/>
    		<h2>GPMS</h2>
    </div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                 <p align="center" style="letter-spacing: 10px; color:#243248">NAVIGATION</p>
                  <hr / style="margin-top:-13px;border-color: #233653;">
                <li>
                  <a href="index.php">
                  		<i><img src="assets/img/dashboard.svg" class="ico" style="width: 25px"></i> Dashboard
                  </a>
                </li>

                  <li>
                  <a href="addproposal.php">
                  		<i><img src="assets/img/add.svg" class="ico" style="width: 23px"></i> Add Proposal
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed">
                  <a href="#"><i> <img src="assets/img/259500.svg" style="width: 23px"></i></i> All Proposals <span class="arrow" style="color:#2347FD"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li><a href="newproposal.php">New Proposal</a></li>
                    <li><a href="acceptedproposal.php">Accepted Proposal</a></li>
                    <li><a href="rejectedproposal.php">Rejected Proposal</a></li>
                   
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="pppproject.php"><i><img src="assets/img/document-naz.svg" style="width: 23px"></i> Project to PPP </a>
                </li>  

                 <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="me.php"><i><img src="assets/img/mene.svg" style="width: 23px"></i>M&E </a>
                </li> 
                

              

                 <li>
                  <a href="profile.php">
                  <i><img src="assets/img/person.svg" class="ico" style="width: 23px"></i>Profile
                  </a>
                  </li>

                 <li>
                  <a href="#">
                 <i><img src="assets/img/logout.svg" class="ico" style="width: 23px"></i> Logout
                  </a>
                </li>
            </ul>
     </div>
</div>




		
	<div id="content-box" class="right">

		<div id="header">
			<div class="col-md-6"> <img src="assets/img/menu-bar.png" style="width: 25px;"></div>
			<div class="col-md-6">
				<p align="right" style="margin-right: 22px;color:#979797; font-size:16px"><img src="assets/img/user.png" style="width: 35px; padding-right: 1%"> Michael Smith</p>
			</div>
		</div>
		<div id="title-bar">
			<div class="col-md-6">
				<p>New Proposal</p>
			</div>
			<div class="col-md-6 hidden-sm hidden-xs">
				<i><img src="assets/img/dashboard.svg" class="ico" style="width: 25px; float: right"></i> 
			</div>
		</div>

		<div class="container-fluid">

		<div class="top-bar">
			
			<div class="col-md-3 hidden-sm col-xs-12">
				<div class="topbox fade">
					<div class="col-md-5 col-sm-5 col-xs-6">
					<img src="assets/img/mask1.svg" style="width: 65px;">
					<br/>
					<img src="assets/img/rec1.svg" style="width: 65px;">
					</div>
				<div class="col-md-7 col-sm-7 col-xs-6">
					<h1 align="right">124</h1>
					<p align="right">All proposal(s)</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12">
				<div class="topbox fade">
					<div class="col-md-5  col-sm-6 col-xs-6">
					<img src="assets/img/mask1.svg" style="width: 65px;">
					<br/>
					<img src="assets/img/rec1.svg" style="width: 65px;">
					</div>
				<div class="col-md-7  hidden-sm col-xs-6 ">
					<h1 align="right">124</h1>
					<p align="right">New proposal(s)</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12">
				<div class="topbox shadow all ">
					<div class="col-md-4  col-sm-6 col-xs-6">
					<img src="assets/img/mask2white.svg" style="width: 45px;">
					<br/>
					<img src="assets/img/rec3white.svg" style="width: 65px; ">
					</div>
				<div class="col-md-7  hidden-sm col-xs-6">
					<h1 align="right">80</h1>
					<p align="right">Accepted</p>
					</div>
				</div>
				</div>
			
			<div class="col-md-3 col-sm-4 col-xs-12">
				<div class="topbox fade">
					<div class="col-md-4  col-sm-6 col-xs-6">
					<img src="assets/img/mask3.svg" style="width: 45px; ">
					<br/>
					<img src="assets/img/rec3.svg" style="width: 65px; ">
					</div>
				<div class="col-md-7  hidden-sm col-xs-6">
					<h1 align="right">12</h1>
					<p align="right">Rejected</p>
					</div>
				</div>
				</div>
			</div>

			<div class="col-lg-12">
			<div id="details-box">

					<div class="col-lg-7" style="padding: 0px;">
						<h3>P/1 Central Mall - Shoprite</h3>

						<div class="des-box" style="margin-bottom:3%">
								Project Narractive
						</div>

						

					</div>

					<div class="col-lg-5" style="padding-top: 3%">

						<p align="right">Sector: <select style="background: #D7E8F3; border:none; padding: 1.5%"><option>Business</option></select></p>
						<p align="right">Upload(s): <a href="#">Shopright_proposal.pdf</a></p>
						<p align="right">Status:</p> 
						<button style="background:#20D157;float:right; color:white; border:none;padding: 2% 8%;border-radius: 10px; ">Push to PPP</button>
						<div class="stat-box" > 

							<img src="assets/img/checkbox.svg" style="width:18px; float:left"> 
							<p style="color:#20D157" align="right">Accepted</p> </div>



					</div>

					<div class="col-lg-12" style="clear: both">

						<p style="font-weight: bold">Contact Details</p>
						<div class="col-md-4">
							<div class="contact-d-box">
								<img src="assets/img/name.svg" style="width: 12px;">
								Friday Suleman
							</div>
						</div>
						<div class="col-md-3">
							<div class="contact-d-box">
								<img src="assets/img/phone.svg" style="width: 12px;" style="float: left">
								2348083921031
							</div>
						</div>
						<div class="col-md-5">
							<div class="contact-d-box">
								<img src="assets/img/email.svg" style="width: 12px;">
								grace.samuel@gmail.com
							</div>
						</div>
					</div>



			</div>
			</div>

				<div class="col-lg-12">
					<div id="table-box">
						<div class="title-box">
						<p style="font-size: 18px;color:#fff">Requirement <i style="float:right"><img src="assets/img/settings-icon.svg" style="width:20px"></i></p>

					</div>

					<div style="padding: 2%">
						<div class="col-md-2 hidden-sm hidden-xs"></div>
						<div class="col-md-4" style="padding: 0px; margin-bottom: 4%">
							<input type="text" class="form-box" name="" placeholder="Add Requirement">
						</div>
						<div class="col-md-3  col-sm-4">
							<select class="form-box" style="padding: 2%;  margin-bottom: 4%">
								<option>select MDA</option>
							</select>
								
						</div>
						<div class="col-md-3 col-sm-4" style=" margin-bottom: 4%">
							<button type="submit" style="border:none; border-radius: 20px; background: #FE9924; padding: 2.5% 10%; color:white">Submit</button>
								
						</div>

					<table class="table table-striped">
					 <thead style="color:#187CCA"> 
					 	<tr> 
					 		<th>S/N</th> 
					 		<th>Date</th> 
					 		<th>Ministry</th>
					 		 <th>Requirements</th> 
					 		 <th>Feedback</th> 
					 		  <th>Day Count</th> 
					 		</tr> 
					 </thead>
					  <tbody style="  font-family: 'Rubik', sans-serif; padding: 2%"> 
					  	<tr> 
					  		<td>001</td>
					  		 <td>02/03/2018</td> 
					  		 <td>Min. of health</td> 
					  		 <td>10000 Available of GPRA</td> 
					  		 <td>Business</td> 
					  		 <td>
					  		 	<a href="#">
					  		 	<button style="background: #45B6AF; border:none; border-radius: 40px; padding: 5% 12%; color:white">view</button></a>
					  		 </td> 
					  	</tr> 
					  	<tr> 
					  		<td>002</td>
					  		 <td>02/03/2018</td> 
					  		 <td>Min. of health</td> 
					  		 <td>10000 Available of GPRA</td> 
					  		 <td>Business</td> 
					  		 <td><a href="#">
					  		 	<button style="background: #45B6AF; border:none; border-radius: 40px; padding: 5% 12%; color:white">view</button> </a></td> 
					   </tr> 

					   <tr> 
					   <td>003</td>
					   	  <td>02/03/2018</td> 
					  		 <td>Min. of health</td> 
					  		 <td>10000 Available of GPRA</td> 
					  		  <td>Business</td> 
					  		 <td><a href="#">
					  		 	<button style="background: #45B6AF; border:none; border-radius: 40px; padding: 5% 12%; color:white">view</button></a></td> 
					   	</tr> 

					   	<tr> 
					   <td>004</td>
					   	  <td>02/03/2018</td> 
					  		 <td>Min. of health</td> 
					  		 <td>10000 Available of GPRA</td> 
					  		  <td>Business</td> 
					  		 <td><a href="#"><button style="background: #45B6AF; border:none; border-radius: 40px; padding: 5% 12%; color:white">view</button></a></td> 
					   	</tr> 

					   	<tr> 
					   <td>005</td>
					   	  <td>02/03/2018</td> 
					  		 <td>Min. of health</td> 
					  		 <td>10000 Available of GPRA</td> 
					  		 <td>Business</td> 
					  		 <td><a href="#"><button style="background: #45B6AF; border:none; border-radius: 40px; padding: 5% 12%; color:white">view</button></a></td> 
					   	</tr> 

					   </tbody>
					   </table>

					</div>

					</div>
				</div>


			</div>




			

		</div>
			
	




</body>
</html>