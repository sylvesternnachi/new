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
				<p>My Profile</p>
			</div>
			<div class="col-md-6 hidden-sm hidden-xs">
				<i><img src="assets/img/person.svg" class="ico" style="width: 25px; float: right"></i> 
			</div>
		</div>

		<div class="container-fluid">

		<div class="top-bar">
      
      <div class="col-md-4 hidden-sm col-xs-12">
        <div class="topbox fade">
          <div class="col-md-5  col-sm-6 col-xs-6">
          <img src="assets/img/ppp.svg" style="width: 55px;">
          <br/>
          <img src="assets/img/rec1.svg" style="width: 65px;">
          </div>
        <div class="col-md-7 col-sm-7 col-xs-6">
          <h1 align="right">124</h1>
          <p align="right">PPP to Project</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="topbox fade">
          <div class="col-md-5  col-sm-6 col-xs-6">
          <img src="assets/img/mne.svg" style="width: 60px;">
          <br/>
          <img src="assets/img/rec3.svg" style="width: 60px;">
          </div>
        <div class="col-md-7  hidden-sm col-xs-6 ">
          <h1 align="right">124</h1>
          <p align="right">Monitor & Evaluation</p>
          </div>
        </div>
      </div>
      
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="topbox all shadow">
          <div class="col-md-4  col-sm-6 col-xs-6">
          <img src="assets/img/person.svg" style="width: 65px; ">
          <br/>
          <img src="assets/img/rec3white.svg" style="width: 65px; ">
          </div>
        <div class="col-md-7  hidden-sm col-xs-6">
          <h1 align="right">1</h1>
          <p align="right">My Profile</p>
          </div>
        </div>
        </div>

				<div class="col-lg-12">
					<div id="table-box">
						<div class="title-box" style="background:#1F69F5; border-radius: 10px 10px 0px 0px">
						<p style="font-size: 18px;color:#fff"><i><img src="assets/img/person.svg" style="width:20px"></i> My Profile <i style="float:right"><img src="assets/img/settings-icon.svg" style="width:20px; fill: white"></i></p>

					</div>

					<div style="padding:2%;width: 100%; float: left">

				<form style="font-family:arial" class="form">

					<div class="col-md-6">

				<div class="form-group">

    					<label for="name" class="control-label">Name </label>
    					
    					<input name="name" type="text" value="Suleman Kazeem" class="form-box">
    					
    			</div>

    			<div class="form-group">

    					<label for="name" class="control-label">Email </label>
    					
    					<input name="name" type="text" value="sulmain.kazeem@techadvance.ng" class="form-box">
    					
    			</div>

    		

    		


    		</div>

    		<div class="col-md-6">

    			<div class="form-group">

    					<label for="name" class="control-label">Password </label>
    					
    					<input name="name" type="password" value="" class="form-box">
    					
    			</div>

    			<div class="form-group">

    					<label for="name" class="control-label">Confirm  Password </label>
    					
    					<input name="name" type="password" value="" class="form-box">
    					
    			</div>

    		

    		</div>

    		

    		<button type="submit" class="submit-b">Update Profile</button>

							</form>

					</div>

					</div>
				</div>


			</div>




			

		</div>
			
	




</body>
</html>