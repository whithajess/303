<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Waste Not Want Not</title>
<link rel="stylesheet" media="screen" href="style.css" />
<?php
if(!isset($_COOKIE['user'])){
  header('Location: notloggedin.php');	
}
?>
</head>
<body>

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
  <p id="title" align="center"> Pickup Map </p>
  <div id="container-inline">
    <div id="left-panel"> </div>
    <div id="right-panel"> </div>
  </div>
  <div id="mapcontainer">
    <iframe id = "map" width="500" height="300" frameborder="0" scrolling="no" src="http://maps.google.com/maps/ms?ie=UTF8&amp;msa=0&amp;msid=202688352085211030514.0004			abcb335084e10025e&amp;vpsrc=0			&amp;ll=-41.290563,174.779079&amp;spn=0.00514,0.010522&amp;output=embed"></iframe>
  </div>
  <br />
  <div id = "largermap"> <small>View <a href="http://maps.google.com/maps/ms?ie=UTF8&amp;msa=0&amp;msid=		202688352085211030514.0004abcb335084e10025e&amp;vpsrc=0&amp;ll=-41.290563,174.779079&amp;spn=0.00514,0.010522&amp;source=embed" style="color:#0000FF;text-align:left">Wellington Region</a> in a larger map</small> </div>
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
			window.location.href = 'logout.php';
		}
    })
})
</script>
</body>
</html>