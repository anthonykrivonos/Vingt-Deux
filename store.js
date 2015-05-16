// Anthony Krivonos Vingt-Deux et Cinq Javascript

var OFF = 0, ON = 1, XINFO = 2;

var cart = new Array();
var cartCount = 0;

/*
	Object properties:
	user - username, password, name, address, credit card number, email, phone number
	item - item code, item image, price, description, category, size
	cart - quanity of each item, price of each item
 */

function display()
{
	cartCounter = document.getElementById("cartcount");
	cartCounter.innerHTML = cartCount;
	cartError = document.getElementById("errordisplay");
	sizeBox = document.getElementById("sizebox");
}

function setUser ()
{
	this.username = function ()
	{
	
	}
	this.password = function ()
	{
	
	}
	this.name = function ()
	{
	
	}
	this.address = function ()
	{
	
	}
	this.creditCard = function ()
	{
	
	}
	this.email = function ()
	{
	
	}
	this.phone = function ()
	{
	
	}
}

function setItems ()
{
	
}

function initialize(act)
{
	bgImg = document.getElementById("BGimg");
	infoCollage = document.getElementById("collage");
	Login = document.getElementById("login");
	display();
}

function setImg(idx)
{
	var bgImg = document.getElementById("bg");
	var Body = document.getElementsByTagName("body")[0];
	if (idx == OFF)
	{
		setTimeout(function()
		{
			bgImg.setAttribute("style", "opacity : 0; left: 20%; -webkit-filter: grayscale(0%);");
			bgImg.src = "";
		}, 3000);
		return;
	}
	bgImg.setAttribute("style", "opacity : 0; left: 20%; width : 400px; -webkit-filter: grayscale(0%);");
	setTimeout(function()
	{
		bgImg.setAttribute("style", "transition: all 1s ease; opacity : 1; width : 400px; left: 30%; -webkit-filter: grayscale(100%);");
		bgImg.src = "images/sc" + idx + ".jpg";
	}, 50);
}

function backgroundFade(action)
{
	if (action == ON)
	{
		bgImg.setAttribute("style", "transition: all 1s ease; -webkit-filter:grayscale(100%);");
		return;
	}
	if (action == XINFO)
	{
		infoCollage.style.marginLeft = "320px";
		bgImg.setAttribute("style", "transition: all 1s ease; -webkit-filter:grayscale(100%);");
		return;
	}
	bgImg.setAttribute("style", "transition: all 1s ease; -webkit-filter:grayscale(0%);");
	infoCollage.style.marginLeft = "150px";
}

function logIn(funct)
{
	if (funct == ON)
	{
		Login.setAttribute("style", "transition: all 1s ease; opacity : 1; display: inline-block;");
		cartError.style.display = "none";
	}
	if (funct == OFF)
	{
		Login.setAttribute("style", "display: inline-block; transition: all 1s ease; opacity : 0;");
		setTimeout(function()
		{
			display: none;
		}, 500);
	}
}

function roll(act, idx)
{
	if (act == "men")
	{
		itemIndex = idx;
		document.getElementById("strtImg").style.display = "none";
		document.getElementById("info").style.display = "inline-block";
		var itemList = document.getElementsByClassName("subitem");
		var amount = document.getElementById("count");
		items = new Array();
		for (i = 0; i < itemList.length; i++)
		{
			items.push(itemList[i].innerHTML);
		}
		picList = new Array("images/sc7.jpg", "images/sc9.jpg", "images/purp.jpg", "images/sc8.jpg", "images/boringshorts.png", "images/funshorts.png", "images/lglove.jpg", "images/lhand.jpg", "images/banana.jpg", "images/rglove.jpg", "images/rhand.jpg", "images/sock.jpg", "images/hat.jpg", "images/hatt.jpg", "images/hattt.jpg", "images/sc1.jpg", "images/sc2.jpg", "images/sc3.jpg")
		descList = new Array("($300.00) Made from top quality fabric, this shirt is proven to last through mud, sweat, and chocolate.", "($950.00) In an effort to distract you from realizing how cheaply made our goods are, we partnered up with A Bathing Ape Ltd.", "($500.00) Confucious says, 'The less comfy, the better.'", "($200.00) These pants are built to last and are stretchier than KRAFT string cheese.", "($10,000.00) Boo!", "($100,000.00) Yay!", "($50.00) Fashion for your left hand.", "($0.25) Just in case, you know.", "($100.00) We hired an experts team in order to devise an avant-garde spelling for this word.", "($50.00) Fashion for your right hand.", "($0.25) Hey, you never know if you will need it.", "($900.00) Why buy a car when you can buy a sock?", "($5.00) It's just a h&acirc;t.", "($500.00) It's not just a h&acirc;tt.", "($5,000,000.00) It's a h&acirc;ttt.", "($400.00) These are no ordinary shoes: they are made with state-of-the-art scissors and leftover plastic from toy containers!", "($1,000.00) I can see my house from here!", "($500.00) Why buy fake New Balance 574s when you can buy these?");
		idList = new Array("11001", "11002", "11003", "22001", "22002", "22003", "33001", "33002", "33003", "44001", "44002", "44003", "55001", "55002", "55003", "66001", "66002", "66003");
		sizeList = new Array("S;M;L", "S;M;L", "S;M;L", "M;L", "M;L", "S;M;L", "S;M", "X", "X", "S;M", "X", "S;M", "X", "X", "X", "7;8;9;10;11;12;13;14", "7;8;9;10;11;12;13;14", "7;8;9;10;11;12;13;14");
		document.getElementById("infimg").src = picList[itemIndex];
		document.getElementById("infnme").innerHTML = items[itemIndex];
		document.getElementById("infdsc").innerHTML = descList[itemIndex];
		document.getElementById("infid").innerHTML = idList[itemIndex];
		for (i = sizeBox.length; i > 0; i--)
		{
			sizeBox.remove(sizeBox.length - 1);
		}
		if (sizeList[idx] != "X")
		{
			sizeBox.style.display = "inline-block";
			var tempSize = sizeList[idx].split(';');
			for (i = 0; i < tempSize.length; i++)
			{
				var itm = document.createElement("option");
				itm.innerHTML = tempSize[i];
				sizeBox.add(itm);
			}
		}
		else
		{
			sizeBox.style.display = "none";
		}
	}
	if (act == "women")
	{
		itemIndex = idx;
		document.getElementById("strtImg").style.display = "none";
		document.getElementById("info").style.display = "inline-block";
		var itemList = document.getElementsByClassName("subitem");
		var amount = document.getElementById("count");
		items = new Array();
		for (i = 0; i < itemList.length; i++)
		{
			items.push(itemList[i].innerHTML);
		}
		picList = new Array("images/sc4.jpg", "images/sc5.jpg", "images/roseblouse.jpg", "images/sc6.jpg", "images/gskirt.jpg", "images/shrunkenjeans.jpg", "images/bracelet.jpg", "images/ring.jpg", "images/pglove.jpg", "images/cgloves.jpg", "images/bandz.png", "images/kneepads.jpg", "images/wig.jpg", "images/crown.jpg", "images/what.jpg", "images/sandals.jpg", "images/margiela.jpg", "images/balenciaga.jpg")
		descList = new Array("($400.00) This is the most stylish and durable white and gold dress you will ever encounter!", "($1,100.00) We partnered with Supreme in order to create a comfortable blanket that you tie around your waste.", "($200.00) Laser-measured to fit just about no one, this shirt is popular not for people wearing it, but for people trying to figure out who would buy it.", "($500.00) Some 5 Gs can help you match with your husband!", "($0.00) Possibly the only stylish item in this whole store, this skirt is now free!", "($6,000.00) Studies have shown that most jeans are shrunk upon their first wash, so we got that covered!", "($50.00) We got these wholesale from Chinatown. As you can see, they are very high quality and will last you almost 24 hours!", "($1,000,000,000.00) No time to explain, we stole this from Queen Elizabeth.", "($10.00) Do not expect too much.", "($900.00) Want to look like Lady Gaga? Look no further. We brought this idea from Antarctican penguin sweatshops to your front door.", "($500.00) Apparently, these are very dangerous for your skin. However, we only found this out after manufacuring a few million packs.", "($1,100.00) In case you liked your lamp shades but did not have the courage to wear them on your knees, we fixed everything.", "($4,500.00) Some fellow Oompa Loompas helped us craft this masterpiece.", "($750.00) If you are really pretentious, self-centered, and have no friends, buy this immediately.", "($5.00) Special thanks to Costco for keeping the cost low.", "($95,000.00) Made from shiny jewels we borrowed from Zales, it's easy to say that every kiss begins with 95K.", "($1,000.00) I can see my mom from here!", "($5,000.00) We know that almost every retailer sells these shoes for $50.00 max. However, we decided to defy all odds and bring to you the biggest waste of money of the 21st century.");
		idList = new Array("01001", "01002", "01003", "00101", "00102", "00103", "00011", "00012", "00013", "10101", "10102", "10103", "01101", "01102", "01103", "00111", "00112", "00113");
		sizeList = new Array("S;M;L", "S;M;L", "S;M;L", "S;M;L", "S;M;L", "S;M;L", "X", "X","S;M;L", "S;M;L", "X", "S;M", "X", "X", "X", "3;4;5;6;7;8;9", "3;4;5;6;7;8", "3;4;5;6;7;8;9;10;11");
		document.getElementById("infimg").src = picList[itemIndex];
		document.getElementById("infnme").innerHTML = items[itemIndex];
		document.getElementById("infdsc").innerHTML = descList[itemIndex];
		document.getElementById("infid").innerHTML = idList[itemIndex];
		for (i = sizeBox.length; i > 0; i--)
		{
			sizeBox.remove(sizeBox.length - 1);
		}
		if (sizeList[idx] != "X")
		{
			sizeBox.style.display = "inline-block";
			var tempSize = sizeList[idx].split(';');
			for (i = 0; i < tempSize.length; i++)
			{
				var itm = document.createElement("option");
				itm.innerHTML = tempSize[i];
				sizeBox.add(itm);
			}
		}
		else
		{
			sizeBox.style.display = "none";
		}
	}
	if (act == ON)
	{
		amount = document.getElementById("count");
		addItemCount = amount.value;
		if (sizeList[itemIndex] != "X")
		{
			var cartItem = idList[itemIndex] + "(" + sizeBox.options[sizeBox.selectedIndex].value + ")";
		}
		else
		{
			var cartItem = idList[itemIndex];
		}
		for (i = 0; i < addItemCount; i++)
		{
			cart.push(cartItem);
		}
		updateCart("reload");
		setTimeout(function(){amount.value = ""; sizeBox[0].selected = "selected";},500);
	}
	
}

function updateCart (act)
{
	if (act == "reload")
	{
		for (i = 0; i < addItemCount; i++)
		{
			cartCount++;
		}
		if (cartCount > 20)
		{
			
			cartError.style.display = "inline-block";
			cartCount = cartCount - addItemCount;
			cart = cart.splice(cart.length - addItemCount, addItemCount);
		}
	}
	display();
}