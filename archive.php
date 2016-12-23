<HTML>
<HEAD>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A New Website.">
<meta name="author" content="Ravi Saxena">

<TITLE>Archive</TITLE>

<div id="header">Search The Content<br/>
<pre><button id="home">HOME</button>  <button id="id1">MENU</button>  <button id="id2">ARCHIVE</button>  <button id="id3">TEXT</button></pre>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="jquery.buttons.js"></script>
<script src="jquery.archive_buttons.js"></script>

<link rel="stylesheet" type="text/css" href="style3.css">

<Style type="text/CSS">    
	H1{background-color:pink;}
 
	html,body{
		-webkit-animation: mymove 20s infinite; /* Chrome, Opera, and Safari */
		animation: mymove 20s infinite; /* Standard syntax */
		background-color: black;
		}
 
		@-webkit-keyframes mymove 				/* Chrome, Opera, and Safari */
		{
		0% {background-color: black;}
		50% {background-color: yellow;}
		100% {background-color: black;}
		}
 
		@keyframes mymove						/* Standard syntax */
		{
		0% {background-color: black;}
		50% {background-color: yellow;}
		100% {background-color: black;}
		}       
		 .circle {
			width: 50px;
			height: 50px;
			-webkit-border-radius: 25px;
			-moz-border-radius: 25px;
			border-radius: 25px;
				}
				
		.blink_text 											/* for blink operation. */
				{
						animation:2s blinker linear infinite;
						-webkit-animation:2s blinker linear infinite;
						-moz-animation:2s blinker linear infinite;

						color: white;
				}

			@-moz-keyframes blinker
				{  
						0% { opacity: 1.0; }
						50% { opacity: 0.0; }
						100% { opacity: 1.0; }
				}

			@-webkit-keyframes blinker
				{  
						0% { opacity: 1.0; }
						50% { opacity: 0.0; }
						100% { opacity: 1.0; }
				}

			@keyframes blinker {  
						0% { opacity: 1.0; }
						50% { opacity: 0.0; }
						100% { opacity: 1.0; }
				}
</style>
<link rel="stylesheet" type="text/CSS" href="mystyle.css">
</HEAD>
<body>
<H1 class="class1"><center>Archive</center></H1>

<z class="t" align="center">
<center>
<z class="blink_text"><u>Click on the Tabs</u></z>
</center>
</z>
<br/>

<button class="circle" id="id5" style="background: red;left: 25%">
<H3 style="horizontal-align:center;vertical-align:center;text-align:center;padding:1px;font-size:1em;color: white">
C++
</H3>
</button>
<br/>
<br/>

<button class="circle" id="id6" style="background: pink;left: 25%">
<H3 style="horizontal-align:center;vertical-align:center;text-align:center;padding:1px;font-size:1em;color: white">
Java
</H3>
</button>
<br/>

<H5 style="text-align:center;background-color:orange;position:relative;color:grey;opacity:0.8">"Click on this button <a href="archive.php">
<button class="circle" style="background: palegreen;">
<H3 style="horizontal-align:center;vertical-align:center;text-align:center;padding:1px;font-size:0.9em;color: blue;opacity:1;">Reload 
</H3>
</button>
</a> to reload the Archive".
</H5>

<button class="circle" id="id7" style="background: green;left: 25%">
<H3 style="horizontal-align:center;vertical-align:center;text-align:center;padding:1px;font-size:1em;color: white"> 
ECO
</H3>
</button>
<br/>
<br/>

<button class="circle" id="id8" style="background: violet;left: 25%">
<H3 style="horizontal-align:center;vertical-align:center;text-align:center;padding:1px;font-size:1em;color: white">
MUSIC
</H3>
</button>
<br/>
<br/>
<H1> &nbsp </H1>

<div id="footer" style="position:relative;bottom:0px">										<!--footer-->
<button id="id4">CONTACT</button><br/><br/>
<span style="font-size:0.7em">Dated 9/12/16.</span>
</div>
</BODY>
</HTML>
