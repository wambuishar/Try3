<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/hover.css') }}">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<style type="text/css">
		
		
	</style>
	<body>
		<div class="container-fluid" style="margin-top: 100px;margin-left: 50px;margin-right: 50px;">
			<div class="container" style="overflow: visible;">
		         
				<div class="row" style="max-height: 100%; margin-left: 0px;">
						
						<div class="col-sm-12" style="border-color: #DCDCDC; border: ridge;">
							 <div style="text-align: center;font-size: 20px; border: ridge; border-top: none; "><b>Edit profile</b></div>
							<div class="row" style="margin-left: 75px;">

								<div class="col-sm-4">

							<div class="button" style="border-radius: 50%;background-color: grey;height: 50px;width: 50px; margin-left: 210px;margin-top: 20px;"></div>
                              </div>
                              <div class="col-sm-8" style="margin-top: 20px; margin-left: -40px;">
                              	<div style="font-size: 20px;" >User name</div>
                              	<div style=""><button onclick="#ahref" style=" border-color: ;font-size:10px; font-style: bold;background-color: white; color: #5DADE2;"><b>Change profile picture</b></button></div>
                              	
                              </div>
			                </div>

			                <div class="form" style="margin-top: 30px; margin-left: 300px;">
			                	<form action="/action_page.php" style="font-size: 18px;">
                                  <div><b> Name </b>
                                   <input type="text" name="name" style="margin-left: 40px; margin-bottom: 20px; width: 400px;"required><br></div>

                                    <div style="margin-left: -45px; margin-bottom: 20px;"><b> User name </b> 
                                   <input type="text" name="username"  style="margin-left: 42px; width: 400px;"required><br> </div>

                                   <div style="margin-left: 20px; ">  <b> Bio </b>
                                   <textarea type="textarea" name="bio"style="margin-left: 40px; height:100px; width:400px;" required></textarea><br><br></div>
                                            <div style="margin-left:92px; color: #B2BABB"><h5>Private Information</h5></div>
                                   <div  style="margin-bottom: 20px;"><b> Email </b>
                                   <input type="Email" name="email" style="margin-left: 40px; width:400px;" required=""><br></div>

                                   <div  style="margin-bottom: 20px; margin-left: -40px;"><b> Password</b>
                                   <input type="Password" name="password1" style="margin-left: 42px; width:400px;"required><br></div>

                                   <div  style="margin-bottom: 20px; margin-left: -40px;"><b> Password </b>
                                   <input type="Password" name="password2" style="margin-left: 42px; width:400px;"required><br></div>

                                    <div style="margin-left: -60px;"><b> Phone number </b>
                                   <input type="number" name="phone" style="margin-left: 20px; width:400px;"required><br><br> </div>

                                   <b> Gender</b>
                                   <input type="radio" name="gender" value="male" style="margin-left: 20px;"> Male<br>
                                   <input type="radio" name="gender" value="male" style="margin-left: 88px;"> Female<br>
                                   <input type="radio" name="gender" value="male" style="margin-left: 88px;"> Others<br>

                                   <input type="submit" value="Submit" style="background-color: #85C1E9; color: white; margin-left: 90px; margin-top: 20px;">
                                   </form>
			                </div>
		</div>
		</div>
	</div>

	</body>
	</html>