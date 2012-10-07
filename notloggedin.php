<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Waste Not Want Not</title>
<link rel="stylesheet" media="screen" href="style.css" />
</head>
<body>
  <?php
  if(isset($_COOKIE["user"]))
	  header("Location: loggedin.php")
  ?>
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
			<p id="title" class = "center" align="center"> Not Logged In </p>
              <div id="container-inline">
   				 <div id="left-panel"> </div>
    			<div id="right-panel"> </div>
  			</div>
		<p class = "center" align="center">
			Please use the Login Panel up the top right to log in.<br />
			If you do not have a login or have forgotten it please email the site admin at:
			<a href="mailto:admin@jessewhitham.co.nz?subject=Login Trouble">admin@jessewhitham.co.nz</a>
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
	toggle();
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