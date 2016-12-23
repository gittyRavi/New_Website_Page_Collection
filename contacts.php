<HTML>

<HEAD>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A New Website.">
<meta name="author" content="Ravi Saxena">

<TITLE>Contact</TITLE>			<!--PHP-pg.2-->

<div id="header">
Search The Content<br/>			<!--Second PHP Page-->
<pre><button id="home">HOME</button>  <button id="id1">MENU</button>  <button id="id2">ARCHIVE</button>  <button id="id3">TEXT</button>
</pre>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="jquery.buttons.js"></script>
<link rel="stylesheet" type="text/css" href="style3.css">

<Style type="text/CSS">
	.t{color : Blue;}
	.g{color:Red;}
	.h{color:Green;}
</Style>

</HEAD>

<BODY class="t">
<div>						<!--div id="wrapper"-->

<?php
if (isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text']))
{
	$contact_name=$_POST['contact_name'];
	$contact_email=$_POST['contact_email'];
	$contact_text=$_POST['contact_text'];
	if(!empty($contact_name) && !empty($contact_email) && !empty($contact_text))
	{
		if(strlen($contact_name)>25 || strlen($contact_email)>50 || strlen($contact_text)>1000)
		{
			echo "<center class='g'>Sorry, maxlength for some field has been exceeded.</center>";
		}
		else
		{
			$to="ravisaxena2004@gmail.com";
			$subject="Contact Form Submitted";
			$body=$contact_name."\n".$contact_text;
			$headers="From: ".$contact_email;
			if(@mail($to,$subject,$body,$headers))
			{
				echo "<center class='h'>Thanks for contacting us. W\'ll be in touch soon.</center>";
			}
			else
			{
				echo "<center class='g'>Sorry an error occured. Please try again later</center>";
			}
			
		}
	}
	else
	{
		echo "<center class='g'>All fields are required.</center>";
	}
}
?>

<form action="new 2.php" method="POST">					<!--html form linked to new 2.php-->
	<center style="padding:2%">
	Name:<br><input type="text" name="contact_name" style="border-radius:50%;text-align:center"><br><br>
	Email Address:<br><input type="text" name="contact_email" style="width:200px;height:relative;border-radius:50%;text-align:center" ><br><br>
	Message:<br><textarea name="contact_text" rows="6" cols="30" style="border-radius:10%;text-align:center"></textarea><br><br>
	<input type="submit" value="Send">
	</center>
</form>

<div id="footer">										<!--footer-->
<button id="id4">CONTACT</button><br/><br/>
<span style="font-size:0.7em">Dated 9/12/16.</span>
</div>
</div>
</BODY>
</HTML>
