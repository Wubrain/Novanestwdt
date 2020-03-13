<!DOCTYPE html>
<!-- Template by html.am -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Index</title>
		<style type="text/css">
		
		body {
			margin: 0;
			padding: 0;
			overflow: hidden;
			height: 100%; 
			max-height: 100%; 
			font-family:Sans-serif;
			line-height: 1.5em;
			background-image: url("./img/mine.jpg");
  			background-position: center;
		}
		
		#header {
			position: absolute;
			top: 0;
			left: 230px;
			width: 100%;
			height: 100px; 
			overflow: hidden; /* Disables scrollbars on the header frame. To enable scrollbars, change "hidden" to "scroll" */
			background: #212F3D;
			color: white;
			font-family: sans-serif;
		}
		
		#nav {
			position: absolute; 
			top: 0;
			bottom: 0;
			left: 0; 
			width: 230px;
			overflow: auto; /* Scrollbars will appear on this frame only when there's enough content to require scrolling. To disable scrollbars, change to "hidden", or use "scroll" to enable permanent scrollbars */
			background:#AED6F1; 		
		}
		
		#logo {
			padding:10px;
		}
		.logo{
  		height: 80px;
  		width: 80px;
  		float: left;
  		border-radius: 20px;
  		padding-right: 30px;
		}

		main {
			position: fixed;
			top: 100px; /* Set this to the height of the header */
			left: 230px; 
			right: 0;
			bottom: 0;
			overflow: auto; 
			background: ;
		}
		
		.innertube {
			margin: 15px; /* Provides padding for the content */
		}
		
		p {
			color: #555;
		}

		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		
		nav ul a {
			color: #0C0301;
			text-decoration: none;
		}
				
		/*IE6 fix*/
		* html body{
			padding: 100px 0 0 230px; /* Set the first value to the height of the header and last value to the width of the nav */
		}
		
		* html main{ 
			height: 100%; 
			width: 100%; 
		}
		.button {
         background-color:white;
         border: none;
         /*color: white;*/
         padding: 20px 34px;
         text-align: center;
         text-decoration: none;
         display:inline-block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
         border-radius: 20px;
         }

         .myButton {
	box-shadow: 3px 4px 0px 0px #1564ad;
	background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	background-color:#79bbff;
	border-radius:5px;
	border:1px solid #337bc4;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	font-weight:bold;
	padding:12px 44px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.myButton:hover {
	background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	background-color:#378de5;
}
.myButton:active {
	position:relative;
	top:1px;
}

.myButton1 {
	box-shadow:inset 0px 39px 0px -24px #212F3D;
	background-color:#212F3D;
	border-radius:4px;
	border:1px solid #ffffff;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	padding:6px 15px;
	text-decoration:none;
	text-shadow:0px 1px 0px #b23e35;
}
.myButton1:hover {
	background-color:white;
}
.myButton1:active {
	position:relative;
	top:1px;
}


		
		</style>
		
		
	</head>
	
	<body>		

		<header id="header">

			<div id="logo">
				<img src="./img/log.png" class="logo">
				<h1>TRUE WORSHIPPERS INC.</h1>
			</div>
		</header>
				
		<main>
			<h2 style="text-align: center;">About us</h2>
			<p style="margin: 20px;">True worshipper Incorporate is a non-denominational group aimed at raising generational leaders who
				will love the Lord <br> with all their hearts and will be willing to serve in the areas of government to influence nations and all races. We are passsionate<br> about mentoring and teaching youths the ways of the Lord.</p>
			
			<a href="Register.php" class="myButton">Register</a>
			<a href="login.php" class="myButton">Login</a>
		</main>

		<nav id="nav">
			<div class="innertube">
				<!-- <h1>Heading</h1> -->
				<ul>
					<li><a href="#" class="myButton1">Home</a></li>
					<li><a href="#" class="myButton1">About Us</a></li>
					<li><a href="#" class="myButton1">Contact</a></li>
					<li><a href="#" class="myButton1">Portfolio</a></li>
					
				</ul>
				
			</div>
		</nav>	
	</body>
</html>