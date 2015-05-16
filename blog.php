<!DOCTYPE HTML>
<!-- Anthony Krivonos -->
<html>
	<head>
		<title>Vingt-Deux Blog</title>
		<link type="text/css" rel = "stylesheet" href="blog.css"/>
		<script src="store.js"></script>
	</head>
	<body onload = "initialize(); setImg(OFF);">
		<a  class="shopnow"  onclick="logIn(ON);">Cart: __<span id="cartcount"></span> &diams; Sh&ocirc;p N&ocirc;w</a>
		<div class="sideborder"></div>
		<img id="bg" class="bgimg" src="images/shirtanim.gif"/>
		<form action="registration.php" method="post">
			<h1 id="login" class="login">
				<p>Login</p>
				<div class="b1">Us&ecircrn&agraveme:</div>
				<div class="b2"><input type="text" name = "username" style="width: 134px;"placeholder= "FashionistaMom"/></div>
				<div class="b1">P&acircssw&ograverd:</div>
				<div class="b2"><input type="password" name = "pass" style="width: 140px;" placeholder= "I<3Books"/></div>
				<input type="submit" value="Enter" onclick="logIn(OFF);"/>
				<a href="info.php"><button class="register">Register</button></a>
			</h1>
		</form>
		<div class="title">Spr&icircng C&ocircllection 2015</div>
		<div class="itemsRowOne">
			<div class="item"><img src="images/sc1.jpg" onclick="setImg(1);"/>V&icircngt-D&egrave;ux et C&icirc;nq Cr&ocirc;cs</div>
			<div class="item"><img src="images/sc4.jpg" onclick="setImg(4);"/><br/><br/>Bl&ucirc;e and Bl&acirc;ck Dress</div>
			<div class="item"><img src="images/sc7.jpg" onclick="setImg(7);"/>M&acircrgiela X M&acircrni: "The Sh&icirc;rt"</div>
		</div>
		<div class="itemsRowTwo">
			<div class="item"><img src="images/sc2.jpg" onclick="setImg(2);"/>M&acirc;rgiela X V&icirc;ngt-D&egrave;ux et C&icirc;nq</div>
			<div class="item"><img src="images/sc5.jpg" onclick="setImg(5);"/>P&icircnk Supreme Dr&egrave;ss w/ B&egrave;lt</div>
			<div class="item"><img src="images/sc8.jpg" onclick="setImg(8);"/>V&icircngt-D&egrave;ux et C&icirc;nq X KITH M&egrave;rc&egrave;rs</div>
		</div>
		<div class="itemsRowThree">
			<div class="item"><img src="images/sc3.jpg" onclick="setImg(3);"/>B&acirc;lenc&icirc;&acirc;g&acirc; X V&icircngt-D&egrave;ux et C&icirc;nq</div>
			<div class="item"><img src="images/sc6.jpg" onclick="setImg(6);"/>V&icircngt-D&egrave;ux "Fresh Outta Alcatraz"</div>
			<div class="item"><img src="images/sc9.jpg" onclick="setImg(9);"/>BAPE X V&icircngt-D&egrave;ux et C&icirc;nq Sh&acirc;rk</div>
		</div>
		<nav>
			<ul>
				<li><a  class="titleitem" href="index.php">V&icircngt-D&egrave;ux Bl&ocirc;g</a>
					<ul>
						<li><a href="men.php">M&egrave;n</a></li>
						<li><a href="women.php">W&ocirc;men</a></li>
						<li><a href="info.php">Inf&ocirc;</a></li>
						<li class = "miniitem" onclick="logIn(ON);"><a>L&ocirc;g&icirc;n / R&egrave;gster</li>
					</ul>
				</li>
			</ul>
		</nav>
	</body>
</html>