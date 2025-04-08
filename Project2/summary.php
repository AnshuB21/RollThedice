<?php 
session_start();
$_SESSION['players'] = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROLL THE DICE!</title>
    <link rel="stylesheet" type="text/css" href="css/index1.css"/>
</head>
<body>
   
<header class="header">
    <div class="logo">
        <img class="logo-img" src="images/dice.jpeg" alt="Game Logo">
        <h1>Excited to play? Roll the dice! </h1>
    </div>
    <nav class="nav">
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="summary.php">Summary</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
</header>

<section class="welcome">
    <h2>Summary</h2>
</section>

<section class="main-content">
    <div class="project-details">
        <h3>Project Details</h3>
        <ul>
            <li><strong>Project Title:</strong> ROLL THE DICE!</li>
            <li><strong>Project Description:</strong> Climb fast, dodge danger, and roll to win!.</li>
        </ul>
    </div>

    <div class="team-members">
        <h3>Team Members</h3>
        <ul>
            <li>Shruthi Ledallai</li>
            <li>Anshu Budha chhetri</li>
        </ul>
    </div>

    <div class="responsibilities">
        <h3>Project Responsibilities</h3>
        <div class="member-responsibility">
            <h4>Shruthi Ledalla</h4>
            <ul>
                <li>Responsible for the idea of the project along with the design of logos</li>
                <li>Created the design layout of the home page.</li>
                <li>Responsible for coding of the summary and contact page</li>
            </ul>
        </div>


        <div class="member-responsibility">
            <h4>Anshu Budha chhetri </h4>
            <ul>
                <li>Responsible for coding of the login and signup page</li>
                <li>Also responsible for the idea of the game.</li>
                <li>Responsible for the presentationt</li>
            </ul>
        </div>
    </div>
</section>

<footer class="footer">
    <p>&copy; 2025 ROLL THE DICE!. All rights reserved.</p>
</footer>

</body>
</html>
<?php
?>
