<?php
    $text = $_POST['text'];  
    $fp = fopen("chatboard.html", 'a');
	fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_COOKIE['user']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
	fclose($fp);
?>