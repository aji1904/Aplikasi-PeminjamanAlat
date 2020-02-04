<?php include 'view/header.php'; ?>

<body id="bglogin">
  	<div class="w3-white w3-border " style="width: 450px; border-radius: 10px; padding-bottom: 10px; 
		position: absolute;
		top: 38%;
		left: 50%;
		margin-top:-100px;
		margin-left:-225px;
		box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);">

	
    <div class="w3-indigo" style="padding: 10px 40px; border-radius: 10px 10px 0px 0px;">
    	<center><font size="5">Login Admin</font></center>
    </div>	
	    <div>	
	    	<form class="w3-container" method="post" action="login_admin.php" style="margin : 10px 15px; padding-top: 25px;">
				<label>Username</label>
					<input class="w3-input" type="text" name="username" required style="margin-bottom: 20px;"> 

				<label>Password</label>
					<input class="w3-input" type="password" name="password" required style="margin-bottom: 20px;">

				<div class="w3-center"> 
					<button type="submit" name="login" class="w3-btn w3-indigo w3-round-large" style="padding: 10px 40px; margin-right: 50px;">Login</button>
				
					<a href="index.php" class="w3-btn w3-indigo w3-round-large" style="padding: 10px 40px;">
					 Batal
					</a>
				</div>
			</form>
			</div> 
	    </div>	    
</body>
</html>