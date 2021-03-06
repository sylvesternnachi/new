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
				<p>Receieved Proposal</p>
			</div>
			<div class="col-md-6 hidden-sm hidden-xs">
				<i><img src="../assets/img/dashboard.svg" class="ico" style="width: 25px; float: right"></i> 
			</div>
		</div>

		<div class="container-fluid">


				<div class="col-lg-12">
					<div id="table-box">
						<div class="title-box">
						<p style="font-size: 18px;color:#fff">Receieved Proposal
 <i style="float:right"><img src="../assets/img/settings-icon.svg" style="width:20px"></i></p>

					</div>

					<div style="padding: 2%">
						<div class="col-md-6" style="padding: 0px">
						<a href="#"><img src="../assets/img/pdfreader.svg" style="width: 215px; float: left; margin-left:-6%; margin-top:-30px"></a>
						<a href="#"><img src="../assets/img/excelreader.svg" style="width: 215px; margin-left: -10%;margin-top:-30px"></a>
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
      <img src="../assets/img/search.svg" style="width: 15px">
    </div>
   <input type="text" class="form-box2" placeholder="Search">
  </div>	
</div>

  		
    			</div>
								
						</div>

							<div class="row" style="clear: both">
						<div class="col-md-3 hidden-sm hidden-xs"></div>
						<div class="col-md-5">
							<input type="text" class="form-box" id="demo" name="" placeholder="Search by Date">
						</div>
						<div class="col-md-1"><button type="submit" style="background: #1F69F5; border:none; border-radius: 20px; padding: 10px 50px; color:white">Search</button></div>
						<div class="col-md-3 hidden-sm hidden-xs"></div>
					</div>

					<table class="table table-striped">
					 <thead style="color:#187CCA"> 
					 	<tr> 
					 		<th>P/N</th> 
					 		<th>Date</th> 
					 		<th>Proposal Name</th>
					 		 <th>Organization</th> 
					 		 <th>Name</th> 
					 		 <th>Telephone</th> 
					 		  <th>Email</th> 
					 		</tr> 
					 </thead>
					  <tbody style="  font-family: 'Rubik', sans-serif; padding: 2%"> 
					  	<tr> 
					  		<td>001</td>
					  		 <td>02/03/2018</td> 
					  		 <td>Farraw Breweries</td> 
					  		 <td> Available of GPRA</td> 
					  		 <td>Business</td> 
					  		 <td>0808913012</td>
					  		 <td>
					  		 	Akin Ogunlewe	
					  		 </td> 
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