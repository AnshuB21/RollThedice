<?php 
session_start();
$_SESSION['players'] = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>	ROLL THE DICE! - Home</title>
    <link rel="stylesheet" type="text/css" href="css/index1.css">
</head>
<body>

<header>
    <div class="headingDiv">
        <marquee behavior="scroll" direction="right">ROLL THE DICE! Climb fast, dodge danger, and roll to win!</marquee>
    </div>
    <div class="headingDiv2">
        <div class="got">
            <img class="gotimg" alt="ROLL THE DICE!" src="images/title.jpeg">
        </div>
    </div>
	<div class="menu">
	<!--<img class="imgB1" src="images/dice.png" />-->
	<ul>  
	 
	  <h3> NAVIGATE: <h3>
	  <li class="li2"><a class = "a2" href="summary.php">SUMMARY</a></li>	
	  <li class="li3"><a class = "a5" href="contact.php">CONTACTPAGE</a></li>
	  <li class="li4"><a class = "a5" href="login.php">LOGINPAGE</a></li>
	</ul>
</div>
</header>



<main class="mainBodyDiv">
    

    <div class="flip-card">
        <div class="flip-card-inner">

            <div class="flip-card-back">
                <p>
                    <h2>Where every number can change your game!!</h2><br>
					This is a two-player game played on a board with numbered, grid-like squares. 
					Throughout the board, you'll encounter random "danger zones" and "green zones" that
					link certain squares. The objective is to reach the final square at the top by
				    rolling the dice — but beware, these zones can either speed up your journey or set you back!
                </p>
                <h2>LOGIN AND GET STARTED!</h2>
            </div>
        </div>
    </div>

    <div class="dicegif">
        <img class="gif2" src="images/dice23.gif" alt="Dice animation">
    </div>
</main>

<footer>
    <div class="footerDiv">
        <marquee behavior="scroll" direction="right">Project by Shruthi Ledalla and  Anshu Budha chhetri</marquee>
    </div>
</footer>

</body>
</html>
