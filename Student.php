<?php
require('connection.php');

session_start();

if(empty($_SESSION['member_id'])){
 header("location:access-denied.php");
}
?>
<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head><body bgcolor="tan">

<center><b><font color = "brown" size="6">Online Voting System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>YOUR HOME </h1>
<a href="student.php">Home</a> | <a href="vote.php">Current Votings</a> | <a href="manage-profile.php">Manage My Profile</a> | <a href="logout.php">Logout</a>
</div>
<div id="container">
<p> Click a link above to do some stuff.</p>
</div>
<div id="footer">
<div class="bottom_addr"></div>
</div>
</div>
</body></html>
