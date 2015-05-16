<!DOCTYPE HTML>
<!-- Anthony Krivonos -->
<html>
	<head>
		<title>Vingt-Deux Women</title>
		<link type="text/css" rel = "stylesheet" href="women.css"/>
		<script src="store.js"></script>
	</head>
	<body onload = "initialize();">
		<a  class="shopnow"  onclick="logIn(ON);">Cart: __<span id="cartcount"></span> &diams; Sh&ocirc;p N&ocirc;w</a>
		<div class="sideborder"></div>
		<h1 id="login" class="login">
			<p>Login</p>
			<div class="b1">Us&ecircrn&agraveme:</div>
			<div class="b2"><input type="text" name = "username" style="width: 134px;"placeholder= "urbanOUTF1TT3RS"/></div>
			<div class="b1">P&acircssw&ograverd:</div>
			<div class="b2"><input type="password" name = "pass" style="width: 140px;" placeholder= "iamnotahipster"/></div>
			<input type="submit" value="Enter" onclick="logIn(OFF);"/>
			<a href="info.php"><button class="register">Register</button></a>
		</h1>
		<h1 id="errordisplay" class="error">
			<div class="b1">S&ograverry!</div>
			<div class="b2">We are sorry, but due to limited availability, we limit customers to only 20 items in their carts.</div>
			<button onclick ="cartError.style.display = 'none';">Ok&acircy.</button>
		</h1>
		<div class="items">
			<div class="itemtitle">T&ocirc;ps</div>
				<div onclick="roll('women', 0);" class="subitem">Bl&ucirc;e and Bl&acirc;ck Dress</div>
				<div onclick="roll('women', 1);" class="subitem">P&icircnk Dr&egrave;ss w/ B&egrave;lt</div>
				<div onclick="roll('women', 2);" class="subitem">R&ocirc;se Bl&ocirc;us&egrave</div>
			<div class="itemtitle">B&ocirc;tt&ocirc;ms</div>
				<div onclick="roll('women', 3);" class="subitem">"Fresh Outta Alcatraz"</div>
				<div onclick="roll('women', 4);" class="subitem">G&acirc;l&acirc;xy Sk&igrave;rt</div>
				<div onclick="roll('women', 5);" class="subitem">Shr&ucircnken Jeans</div>
			<div class="itemtitle">L&egrave;fts</div>
				<div onclick="roll('women', 6);" class="subitem">D&icirc;amond&ecirc;</div>
				<div onclick="roll('women', 7);" class="subitem">D&icirc;amond&ecirc;&ecirc;</div>
				<div onclick="roll('women', 8);" class="subitem">Gl&ograveve</div>
			<div class="itemtitle">R&igrave;ghts</div>
				<div onclick="roll('women', 9);" class="subitem">Cl&ograveth Gl&ograveve</div>
				<div onclick="roll('women', 10);" class="subitem">H&acircppy Bandz</div>
				<div onclick="roll('women', 11);" class="subitem">Kn&icirc;pads</div>
			<div class="itemtitle">V&egrave;ry T&ocirc;ps</div>
				<div onclick="roll('women', 12);" class="subitem">Wyg</div>
				<div onclick="roll('women', 13);" class="subitem">Cr&ocircwn</div>
				<div onclick="roll('women', 14);" class="subitem">Big Hat</div>
			<div class="itemtitle">V&egrave;ry B&ocirc;tt&ocirc;ms</div>
				<div onclick="roll('women', 15);" class="subitem">Jewel Sand&acirc;ls</div>
				<div onclick="roll('women', 16);" class="subitem">M&acirc;rgiela Sh&ocirc;&egrave;s</div>
				<div onclick="roll('women', 17);" class="subitem">B&acirc;lenc&icirc;&acirc;g&acirc; B&ocirc;&ograve;ts</div>
		</div>
		<img id="strtImg" class="strtimg" src="images/model.jpg" onclick="this.src = 'images/coloreffect/' + (Math.floor((Math.random() * 8) + 1)) + '.jpg';"/>
		<div id="info" class="info">
			<div id="infnme" class="infname">Crocs</div>
			<img id="infimg" class="infimage" src="images/sc1.jpg"/>
			<div id="infdsc" class="infdesc">These are no ordinary shoes: they are made with state-of-the-art scissors and leftover plastic from toy containers!</div>
			<div id="infid" class="infident"></div>
			<div class="itemobj">
				<input id="count" type="text" placeholder="00"/>
				<select id = "sizebox" size = "1">
				</select>
				<button onclick="roll(ON)"/>Add to Cart</button>
			</div>
		</div>
		<img class="bird" src="images/bird.png"/>
		<nav>
			<ul>
				<li><a  class="titleitem" href="index.php">V&icircngt-D&egrave;ux W&ocirc;men</a>
					<ul>
						<li><a href="men.php">M&egrave;n</a></li>
						<li><a href="blog.php">Bl&ocirc;g</a></li>
						<li><a href="info.php">Inf&ocirc;</a></li>
						<li class = "miniitem" onclick="logIn(ON);"><a>L&ocirc;g&icirc;n / R&egrave;gster</li>
					</ul>
				</li>
			</ul>
		</nav>
	</body>
</html>