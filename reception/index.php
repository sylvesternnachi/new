<!DOCTYPE html>
<html>
<head>
	<title>GPMS Investment Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/nav.css">
	<script src="../assets/js/jquery-1.11.1.min.js"></script>
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
                 <p align="center" style="letter-spacing: 10px; color:#243248">RECEPTION</p>
                  <hr / style="margin-top:-13px;border-color: #233653;">
                <li>
                  <a href="index.php">
                      <i><img src="../assets/img/reception.svg" class="ico" style="width: 25px"></i> Reception Form
                  </a>
                </li>

                  <li>
                  <a href="receivedproposal.php">
                      <i><img src="../assets/img/259500.svg" class="ico" style="width: 23px"></i> Receive Proposals
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
				<p>Reception</p>
			</div>
			<div class="col-md-6 hidden-sm hidden-xs">
				<i><img src="../assets/img/reception.svg" class="ico" style="width: 25px; float: right"></i> 
			</div>
		</div>

		<div class="container-fluid">


				<div class="col-lg-12">
					<div id="table-box">
						<div class="title-box" style="background:#1F69F5; border-radius: 10px 10px 0px 0px">
						<p style="font-size: 18px;color:#fff"><i><img src="../assets/img/add.svg" style="width:20px"></i> Reception <i style="float:right"><img src="../assets/img/settings-icon.svg" style="width:20px; fill: white"></i></p>

					</div>

					<div style="padding:2%;width: 100%; float: left">

				<form style="font-family:arial" class="form">

					<div class="col-md-6">

				

    			<div class="form-group">

    					<label for="name" class="control-label">Tracking Number: </label>
    					
    					<input name="name" type="text" value="" placeholder="This is automatically generated" class="form-box">
    					
    			</div>

    			<div class="form-group">

    					<label for="name" class="control-label">Date: </label>
    					
    					<input name="name" id="d-date" type="text" placeholder="Select Date" class="form-box">
    					
    			</div>

    			<div class="form-group">

    					<label for="name" class="control-label">Contact Person Name: </label>
    					
    					<input name="name" type="text" value="" class="form-box">
    					
    			</div>

          <div class="form-group">

              <label for="name" class="control-label">Email: </label>
              
              <input name="name" type="text" value="" class="form-box">
              
          </div>



    		</div>

    		<div class="col-md-6">

    		

    			<div class="form-group">

    					<label for="name" class="control-label">Name </label>
    					
    					<input name="name" type="text" value="" class="form-box">
    					
    			</div>

    			<div class="form-group">

    					<label for="name" class="control-label">Company </label>
    					
    					<input name="name" type="text" value="" class="form-box">
    					
    			</div>

    			<div class="form-group">

    					<label for="name" class="control-label">Telephone: </label>
    					
    					<input name="name" type="text" value="" class="form-box">
    					
    			</div>

          <div class="form-group">

              <label for="name" class="control-label">Others: </label>
              
              <input name="name" type="text" value="" class="form-box">
              
          </div>

    		</div>

    	

    		<button type="submit" class="submit-b">Submit</button>

							</form>

					</div>

					</div>
				</div>


			</div>




			

		</div>
			
	


      <script type="text/javascript">
        
            $(document).ready(function(){
                $('#d-date').daterangepicker({
          singleDatePicker: true
                  });

            });
      </script>

</body>
</html>