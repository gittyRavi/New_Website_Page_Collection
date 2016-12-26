<HTML>
<HEAD>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A New Website.">
<meta name="author" content="Ravi Saxena">

<TITLE>World . Animals</TITLE>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="jquery.buttons.js"></script>
<link rel="stylesheet" type="text/css" href="style3.css">

<Style type="text/CSS">
	.t{color : Blue;}			
	p{	-webkit-animation: my 10s infinite; /* Chrome, Opera, and Safari */
		animation: my 10s infinite; /* Standard syntax */
		background-color:red;
	  }
 
		@-webkit-keyframes my				/* Chrome, Opera, and Safari */
		{
		0% {background-color: red;}
		50% {background-color: yellow;}
		100% {background-color: red;}
		}
 
		@keyframes my						/* Standard syntax */
		{
		0% {background-color: red;}
		50% {background-color: yellow;}
		100% {background-color: red;}
		}      
 
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
			background: red;
				}
			#anim{
				width: 50px;
				height: 50px;
				background-color: red;
				position: relative;
				-webkit-animation: example 7s infinite; /* Chrome, Safari, Opera */
														/* Chrome, Safari, Opera */
				animation: example 7s infinite;
				}

														/* Chrome, Safari, Opera */
			@-webkit-keyframes example {
				0%   {background-color:red; left:0px; top:0px;}
				25%  {background-color:yellow; }
				50%  {background-color:blue; }
				75%  {background-color:green; }
				100% {background-color:red; left:92%; top:0px;}
			}

														/* Standard syntax */
			@keyframes example {
				0%   {background-color:red; left:0px; top:0px;}
				25%  {background-color:yellow; }
				50%  {background-color:blue; }
				75%  {background-color:green; }
				100% {background-color:red; left:92%; top:0px;}
				}
			
			p #g {
						width: 100%;
						height: 100%;
						position: relative;
				}
			
			center>div>img
				{
					border-radius:10%;
					height:90px;
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

<div id="wrapper">
<div id="header">Search The Content<br/>
<pre><button id="home">HOME</button>  <button id="id1">MENU</button>  <button id="id2">ARCHIVE</button>  <button id="id3">TEXT</button></pre>
</div>

<p class="t" align="center">
<z class="blink_text">World Animals</z>
</p>

<H1 class="class1">Infos!!</H1>
<p id="g" >
<center>
<div style="border-radius:15%;background-color:#B4A113;width:90%;padding:3%"><img src="http://www.wildart.in/cache/babblers/indian-scimitar-babbler/indian_scimitar_babbler_mg_4178_1200.jpg" alt="Green sea turtle" style="width:19.2%;height:relative;"><img src="http://canopygoa.com/wp-content/gallery/birds/indian-scimitar-babbler.jpg" alt="Green sea turtle" style="width:19.2%;height:relative;"><img src="http://orientalbirdimages.org/images/data/indianscimitarbabblerbm.jpg" alt="Green sea turtle" style="width:19.2%;height:relative;"><img src="https://leesbirdblog.files.wordpress.com/2015/09/pas-tima-sri-lanka-scimitar-babbler-pomatorhinus-melanurus-c2a9wikic.jpg" alt="Green sea turtle" style="width:19.2%;height:relative;"><img src="http://i0.wp.com/naturetravelnetwork.com/wp-content/uploads/2016/03/Taiwan-Scimitar-Babbler-by-Andy-Walker-Birding-Ecotours.png?fit=859%2C627" alt="Green sea turtle" style="width:19.2%;height:relative;">
</div>
</center>
</p>
<H1>
<?php
	echo " <H5 style='color:white'>Hello World!! this is php</H5>";
?>
</H1>
<td>
<H1 class="class2">
Indian Scimitar Babbler
</H1>
</td>
<p>
<!--<pre>-->
<div style="background-color:#28CA74;padding:5px;border-radius:5px;overflow:hidden"><div style="background-color:orange;padding:5px;border-radius:5px;overflow:hidden"></div><textarea maxlength="50" rows="7" cols="50" style="position:relative;max-width:100%">The Indian scimitar babbler (Pomatorhinus horsfieldii) is an Old World babbler. It is found in peninsular India in a range of forest habitats. They are most often detected by their distinctive call which is an antiphonal duet produced by pairs within small groups. 

They are often hard to see as they forage through dense vegetation. The long curve yellow, scimitar-shaped bills give them their name. It has been treated in the past as subspecies of the white-browed scimitar babbler which is found along the Himalayas but now separated into two species, the peninsular Indian species and the Sri Lanka scimitar babbler (Pomatorhinus melanurus).

<<--------------------------------------Description---------------------------------------->>

The most distinctive feature of this 22 cm long bird is the long down-curved yellow bill which is blackish at the base of the upper mandible. It has a striking head pattern, with a long white supercilum above a broad black band through the eye. The white throat and breast contrast with the dark greyish brown on the upperside and dark grey to black on most of the underside. The tail is broad, long and graduated. They have short, round wings and being weak fliers are rarely seen flying in the open.[2]

Distribution[edit]
It is the only scimitar babbler in Peninsular India. This species is found south of line between Rajasthan and Orissa.[2]
Taxonomy and systematics[edit]
The Old World babblers are a large family of passerine birds characterised by soft fluffy plumage. They are birds of tropical areas, with the greatest variety in southeast Asia. This species is very close to the Sri Lanka scimitar babbler which has in the past been treated as a subspecies. In the past, this species has been considered as a subspecies of the white-browed scimitar babbler (Pomatorhinus schisticeps) which is found along the Himalayan foothills.[2] Molecular studies confirm this relatedness.[5]
</textarea> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/PomatorhinusHorsfieldiiMap.png/220px-PomatorhinusHorsfieldiiMap.png" style="height:23%;width:relative"> <img src="https://i.ytimg.com/vi/I8zTyEDI4E8/maxresdefault.jpg" style="height:23%;width:relative"> <div style="background-color:orange;padding:5px;border-radius:5px;overflow:hidden"></div></div>
<iframe width="relative" height="23%" src="https://www.youtube.com/embed/X14IQLk1xIk" frameborder="0" allowfullscreen></iframe></div>
<!--</pre>-->
</p>
<div class="circle" id="anim">
<pre>
<H3 align="center"> 
T=7s
</H3>
</pre>
</div>
<H2>
<p class="t" align="center">Slide the Bottom-Right-Square to read info in the Text Box        &copy 145128
</p>
</H2>
<H5 align="right">
<a href="https://en.wikipedia.org/wiki/Indian_scimitar_babbler">
Go To Wikipedia Page For More ...
</a>
</H5>

<div id="footer" style="position:relative">										<!--footer-->
<button id="id4">CONTACT</button><br/><br/>
<span style="font-size:0.7em">Dated 9/12/16.</span>
</div>

</div>

</BODY>
</HTML>
