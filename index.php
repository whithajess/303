<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Waste Not Want Not</title>
<link rel="stylesheet" media="screen" href="style.css" />
</head>
<body>
<div id="top-links"> <a id="login-button"  title="Login">Log In</a> </div>
<div id= "top-pane"></div>
</div>
<div id="content">
  <div id="login-panel">
    <form action="login.php" method="post">
      <p>
        <label>Username:
          <input name="username" type="text" value="" />
        </label>
        <br />
        <label>Password:
          <input name="password" type="password" value="" />
        </label>
        <br />
        <br />
      <p align="center">
        <input type="submit" name="submit" value="Log In" />
      </p>
      </p>
    </form>
  </div>
  <div id="header">
    <div id = "logo-image" class ="inline"> <a href="index.php"><img src="deliverytruck.png" width = 180px height = 80px/></a> 
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
  <p id="title" align="center" class ="center"> About </p>
  <div id="container-inline">
    <div id="left-panel"> </div>
    <div id="right-panel"> </div>
  </div>
  <p class = "center" align="center">
  Welcome to waste not want not a food wastage management website for wellington, the idea behind this website is that food charity's can receive wastage information from food outlets around wellington and can plan pickups based on that information and the locational information of the food outlets provided on a map. Supermarkets and other food outlets are constantly throwing away food for various reasons: damaged packaging, fresh daily promises, one egg broken out of a dozen etc. and this program will help get this food to those in real need. 
  </p>
  <p align = "center" class ="center">
  <a href="pickupmap-design.php"> Pickup Map Design </a>
  <a href="wastagedata-design.php"> Pickup Wastage Design </a>
  </p>
  </div>
<div id="footer">
  <div id="bottom-links"> <a id ="bottomleft-link" href="pickupmap.php" title="Pickup Map"> Pickup Map</a> <a id ="bottomleft-link" href="chat.php" title="Chat"> Chat</a> <a id ="bottomright-link" href="wastagedata.php" title="rightlink"> Wastage Data</a> </div>
</div>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	function toggle(){
        $("#login-panel").slideToggle(200);
    }
    $("#login-button").click(toggle)
})
$(document).keydown(function(e) {
    if (e.keyCode == 27) {
        $("#login-panel").hide(0);
    }
});
</script>
</body>
</html>