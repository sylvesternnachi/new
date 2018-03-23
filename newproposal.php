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
					<div class="col-md-5  col-sm-6 col-xs-6">
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
				<div class="topbox all shadow">
					<div class="col-md-5  col-sm-6 col-xs-6">
					<img src="assets/img/mask1white.svg" style="width: 65px;">
					<br/>
					<img src="assets/img/rec3white.svg" style="width: 65px;">
					</div>
				<div class="col-md-7  hidden-sm col-xs-6 ">
					<h1 align="right">124</h1>
					<p align="right">New proposal(s)</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12">
				<div class="topbox fade">
					<div class="col-md-4  col-sm-6 col-xs-6">
					<img src="assets/img/mask2.svg" style="width: 45px;">
					<br/>
					<img src="assets/img/rec2.svg" style="width: 65px; ">
					</div>
				<div class="col-md-7  hidden-sm col-xs-6">
					<h1 align="right">80</h1>
					<p align="right">Accepted</p>
					</div>
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

				<div class="col-lg-12">
					<div id="table-box">
						<div class="title-box">
						<p style="font-size: 18px;color:#fff">New Proposal <i style="float:right"><img src="assets/img/settings-icon.svg" style="width:20px"></i></p>

					</div>

					<div style="padding: 2%">
						<div class="col-md-6" style="padding: 0px">
						<a href="#"><img src="assets/img/pdfreader.svg" style="width: 215px; float: left; margin-left:-6%; margin-top:-30px"></a>
						<a href="#"><img src="assets/img/excelreader.svg" style="width: 215px; margin-left: -10%;margin-top:-30px"></a>
						</div>
						<div class="col-md-6">

							<div class="col-md-4">
								<select style="float: left; border-radius: 5px;padding: 5%" class="form-box2">
  									<option>Work</option>
  								</select>	
							</div>

							<div class="col-md-7">

							<div class="form-group">    					
    					<div class="input-group">
    <div class="input-group-addon" style="background: white;">
      <img src="assets/img/search.svg" style="width: 15px">
    </div>
   <input type="text" class="form-box2" placeholder="Search">
  </div>	
</div>

  		
    			</div>
								
						</div>

					<table class="table table-striped">
					 <thead style="color:#187CCA"> 
					 	<tr> 
					 		<th>P/N</th> 
					 		<th>Date</th> 
					 		<th>Proposal Name</th>
					 		 <th>Private Promoter</th> 
					 		 <th>Sector</th> 
					 		  <th>Action</th> 
					 		</tr> 
					 </thead>
					  <tbody style="  font-family: 'Rubik', sans-serif; padding: 2%"> 
					  	<tr> 
					  		<td>001</td>
					  		 <td>02/03/2018</td> 
					  		 <td>Farraw Breweries</td> 
					  		 <td>10000 Available of GPRA</td> 
					  		 <td>Business</td> 
					  		 <td>
					  		 	<a href="newproposal-details.php">
					  		 	<button style="background: #45B6AF; border:none; border-radius: 40px; padding: 5% 12%; color:white">view</button></a>
					  		 </td> 
					  	</tr> 
					  	<tr> 
					  		<td>002</td>
					  		 <td>02/03/2018</td> 
					  		 <td>Farraw Breweries</td> 
					  		 <td>10000 Available of GPRA</td> 
					  		 <td>Business</td> 
					  		 <td><a href="newproposal-details.php">
					  		 	<button style="background: #45B6AF; border:none; border-radius: 40px; padding: 5% 12%; color:white">view</button> </a></td> 
					   </tr> 

					   <tr> 
					   <td>003</td>
					   	  <td>02/03/2018</td> 
					  		 <td>Farraw Breweries</td> 
					  		 <td>10000 Available of GPRA</td> 
					  		  <td>Business</td> 
					  		 <td><a href="newproposal-details.php">
					  		 	<button style="background: #45B6AF; border:none; border-radius: 40px; padding: 5% 12%; color:white">view</button></a></td> 
					   	</tr> 

					   	<tr> 
					   <td>004</td>
					   	  <td>02/03/2018</td> 
					  		 <td>Farraw Breweries</td> 
					  		 <td>10000 Available of GPRA</td> 
					  		  <td>Business</td> 
					  		 <td><a href="newproposal-details.php"><button style="background: #45B6AF; border:none; border-radius: 40px; padding: 5% 12%; color:white">view</button></a></td> 
					   	</tr> 

					   	<tr> 
					   <td>005</td>
					   	  <td>02/03/2018</td> 
					  		 <td>Farraw Breweries</td> 
					  		 <td>10000 Available of GPRA</td> 
					  		 <td>Business</td> 
					  		 <td><a href="newproposal-details.php"><button style="background: #45B6AF; border:none; border-radius: 40px; padding: 5% 12%; color:white">view</button></a></td> 
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