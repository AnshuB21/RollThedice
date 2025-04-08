<?php 
session_start();
$_SESSION['players'] = '';
?><!doctype unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="css/index1.css"/>
</head>
<body>
   
<div class="headingDiv">
	<marquee behavior="scroll" direction="right">ROLL THE DICE!  Climb fast, dodge danger, and roll to win!</marquee>
</div>
<div class="headingDiv2">


	<div class="got">
		<img class="gotimg" alt="Roll the dice!" src="images/title.jpeg"/>
	</div>
</div>
</div>
<div class="menu">
	<!--<img class="imgB1" src="images/dice.png" />-->
	<ul>  
	 
	  <li class="li1"><a class = "a1" class="active" href="index.php">HOMEPAGE</a></li>
	  <li class="li2"><a class = "a2" href="summary.php">SUMMARY</a></li>	
	  <li class="li4"><a class = "a5" href="login.php">LOGINPAGE</a></li>
	</ul>
</div>
<div class="contact">
    <div class="contact1">
        <div style="margin-top:60px">
            <h2> SHRUTHI LEDALLA</h2>
			<p>  Panther ID: 002821933</p>
            <p>  Email: sledalla1@student.gsu.edu</p>
    </div>
    </div>
    <div class="contact1">
        <div style="margin-top:60px; padding-left: 15px">
            <h2>ANSHU BUDHA CHHETRI</h2>
        	<p>Panther ID: 002831347</p>
            <p>Email: abudhachhetri1@student.gsu.edu</p>
        </div>
    </div>
    
</div>


</body>
</html>
<?php
?>