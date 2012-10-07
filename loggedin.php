<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Waste Not Want Not</title>
<link rel="stylesheet" media="screen" href="style.css" />
</head>
<body>
  <?php
  if(!isset($_COOKIE["user"]))
	  header("Location: notloggedin.php")
  ?>
<div id="top-links"> <a id="login-button"  title="Log Out">Log Out</a> </div>
<div id= "top-pane"></div>
</div>
<div id="content">
  <div id="header">
    <div id = "logo-image" class ="inline"> <a href="index.php"><img src="deliverytruck.png" width = 180 height = 80/></a> 
    </div>
    <div id = "logo" class: "inline">
    	<div id = "logo-header">
    	Waste Not Want Not
    	</div>
    	<div id = "logo-footer">
    	A waste management system for wellington
    	</div>
    </div>
  </div>
			<p id="title" align = "center"> Logged In </p>
              <div id="container-inline">
   				 <div id="left-panel"> </div>
    			<div id="right-panel"> </div>
  			</div>
		<p align = "center">
			Welcome, <b><?php echo $_COOKIE["user"]?></b><br />
			You are now logged in if you have any trouble accessing pages, please email the site admin at:
			<a href="mailto:admin@jessewhitham.co.nz?subject=Login Trouble">admin@jessewhitham.co.nz</a>
		</p>
    </div>
<div id="footer">
  <div id="bottom-links"> <a id ="bottomleft-link" href="pickupmap.php" title="Pickup Map"> Pickup Map</a> <a id ="bottomleft-link" href="chat.php" title="Chat"> Chat</a> <a id ="bottomright-link" href="wastagedata.php" title="rightlink"> Wastage Data</a> </div>
</div>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#login-button").click(function(){
		var exit = confirm("Are you sure you want to Logout?");  
    	if(exit==true){
			window.location.href = "logout.php";
		}
    })
})
</script>
</body>
</html>