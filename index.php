<!DOCTYPE HTML>
<!-- Anthony Krivonos -->
<html>
	<head>
		<title>Vingt-Deux et Cinq</title>
		<link type="text/css" rel = "stylesheet" href="index.css"/>
		<script src="store.js"></script>
	</head>
	<body onload="initialize();">
		<a  class="shopnow"  onclick="logIn(ON);">Cart: __<span id="cartcount"></span> &diams; Sh&ocirc;p N&ocirc;w</a>
		<div class="sideborder"></div>
		<div style="text-align: center;"><img class="bgimg" src="images/buildinganim.gif" id="BGimg"/></div>
		<div class="credits">F&ocircunded By Anthony Kr&igravevonos </div>
		<h1 id="login" class="login">
			<p>Login</p>
			<div class="b1">Us&ecircrn&agraveme:</div>
			<div class="b2"><input type="text" name = "username" style="width: 134px;"placeholder= "kanyayEAST"/></div>
			<div class="b1">P&acircssw&ograverd:</div>
			<div class="b2"><input type="password" name = "pass" style="width: 140px;" placeholder= "K@n73"/></div>
			<input type="submit" value="Enter" onclick="logIn(OFF);"/>
			<a href="info.html"><button class="register">Register</button></a>
		</h1>
		<nav>
			<ul>
				<li onmouseover="backgroundFade(ON);" onmouseout="backgroundFade(OFF);"><a  class="titleitem" href="index.html">V&icircngt-D&egrave;ux et C&icirc;nq</a>
					<ul>
						<li><a href="men.php">M&egrave;n</a></li>
						<li><a href="women.php">W&ocirc;men</a></li>
						<li><a href="blog.php">Bl&ocirc;g</a></li>
						<li><a href="info.php">Inf&ocirc;</a></li>
						<li class = "miniitem" onclick="logIn(ON);"><a>L&ocirc;g&icirc;n / R&egrave;gster</li>
					</ul>
				</li>
			</ul>
		</nav>
	</body>
	</html>
