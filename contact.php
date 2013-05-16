<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="container">
		<div class="logo">
			<a id="logo" href="index.html">DoDream</a>
		</div>
		<div class="topmenu">
			<ul id="menulist">
				<a href="about.html">About</a>
				<a href="photos.html">Photos</a>
				<a href="videos.html">Videos</a>
				<a href="events.html">Events</a>
				<a href="members.html">Members</a>
				<a href="contact.php"><strong>Contact</strong></a>
			</ul>
		</div>

		<div>
			<h2 style="clear:both; padding-top:50px; font-size:30px; margin-bottom:0;">Contact</h2>
			<hr>
			<p>We'd love to hear back from you! Please fill out the form below if you have any questions or comments.</p>
			<form name="contact" method="POST" action="process.php">
				<table width="456" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td height="28" valign="top">Subject:</td>
						<td><input name="subject" type="text"></td>
					</tr>
					<tr>
						<td height="28" valign="top">Your name:</td>
						<td><input name="name" type="text"></td>
					</tr>
					<tr>
						<td height="28" valign="top">E-mail address:</td>
						<td><input name="email" type="text"></td>
					</tr>
					<tr>
						<td height="28" valign="top">Message:</td>
						<td><input name="message" type="text"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td valign="top" align="center"><input type="submit" value="Submit" name="submit"></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="footer">
			Copyright &copy 2013 Alex Song. All Rights Reserved.
		</div>
	</div>
</body>
</html>