<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/user.js">
</script>
</head><body bgcolor="tan">

<center><b><font color = "brown" size="6">Online Voting System</font></b></center><br><br>
<style> .class{font-size: 20px; color: white;}</style>
<div id="page">
<div id="header">
<h1>Voter Login </h1>
<div class="news"><marquee behavior="alternate">New votings are up and running. But they will not be up forever! Just Login and then go to Current Votings to vote for your favourate candidates. </marquee></div>
</div>
<div id="container">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<form name="form1" method="post" action="checklogin.php" onSubmit="return loginValidate(this)">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor: rgb(207, 255, 215)>
<tr>
<td width="78">Username/Email</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<center>
<br>Not yet registered? <a href="registeracc.php"><b>Register Here</b></a>
</center>
</div>
<div id="footer">
<div class="bottom_addr"></div>
</div>
</div>
</body></html>
