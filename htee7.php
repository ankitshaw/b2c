<?php 
	session_start();
?>

<html>

<head>
<script src="https://use.fontawesome.com/7bcf909bab.js"></script>
<script type="text/javascript" src="js/dateestimated.js"></script>
	<title>
		Mountains (Reggae Colours) Half Sleeve T-Shirt
	</title>
	<link rel="stylesheet" href="css/hteeproduct.css">
</head>
<body height="100%" width="100%">
	<section>
		<header>
			<nav id = "nav">
					<div>
						<ul>
							<li id="logolist"><a href="home.php">
							<img id = "logo" src="img/logo2.png" vspace = "0" hspace = "0" height="45" width="130" >
							</a></li>
						</ul>						
					</div>
					<div class="menu">
					<ul id="ul1">
						<li id="mlist"><a href="home.php">HOME</a></li>
							<li id="mlist"><a href="aboutus.php">ABOUT</a></li>
							<li id="mlist"><a href="howitworks.php">HOW IT WORKS</a></li>
							<li id="mlist" class= "dropdown"><a href="shop.php">SHOP</a>
								<ul id = "drop-menu">
								<li><a href="hteepg1.php">Half Sleeve T-Shirt</a></li>
								<li><a href="fteepg1.php">Full Sleeve T-Shirt</a></li>
								<li><a href="pteepg1.php">Polo T-Shirt</a></li>
								</ul>
							</li>
						<!--<li id="mlist"><a href="men.php">MEN</a></li>
						<li id="mlist"><a href="women.php">WOMEN</a></li>
						<li id="mlist"><a href="acces.php">ACCESSORIES</a></li>-->
					</ul>
					<ul id= "ul2">
						<li id="mlist">
							<form id="searchContainer"> 
									<input id= "searchinput" placeholder=" Joggers, Superman T-Shirt, iPhone 6 Covers etc." type="text"> 
									<label for="searchInput" title="Search" rel="tooltip"></label> 
							</form>
						</li>
						<?php 
								if(isset($_SESSION['username'])){ 
									echo '<li id="mlist"><a href="logout.php">Hi! '.$_SESSION['username'].'</a>
											<ul id = "drop-menu">
												<li><a href="myaccount.php">My Account</a></li>
												<li><a href="logout.php">Logout</a></li>
											</ul>
										</li>';
								}
								else
								{
									echo '<li id="mlist"><a href="login.php">LOGIN</a></li>';
								}
						?>
						<!--<li id="mlist"><a href="">LOGIN</a></li>-->         
						<li id="mlist"><a href="#cart.php">
						<img id = "cart" src="img/cart.png" vspace = "0" height="22" width="25"></a>
						</li> 
					</ul>
					</div>
			</nav>
		</header>
	</section>
	<div id= "main">
		<div id="bread">
			<p><a href="men.php">Men</a> &nbsp / &nbsp <a href="menhalfsleeve.php">Half Sleeve T-Shirt's</a> &nbsp / &nbsp <a href="htee7.php">Mountains (Reggae Colours)</a></p>  <!--Edit Here -->
		</div>
		<div id="item">
			<div id= "content">
				<img src="img/htee7.jpg" height="620px" width="495px"><!-- Edit Here-->
			</div>
			<div id="itemdetail">
				<h2><b>Mountains (Reggae Colours)</b></h2><!-- Edit Here-->
				<p id="categ">Men's Half Sleeve T-Shirts</p>
				<p id="prices">&#8377 </p><p id="price"> 445</p><br><!-- Edit Here-->
				<p id="dechead"><br><br>Description</p><p id="deccont">Show off your love for mountains in the trendiest way possible with this Mountains are Calling guy�s T-shirt. Featuring every mountain lovers favourite quote, this tee is something you will cherish for seasons to come. Pair it with classic jeans and converse to make a lasting impression. Shop yours today!</p>
				<hr>
				<p id="size"><br><br>Size:</p><p id="sizec1">S</p><p id="sizec1">M</p><p id="sizec2">L</p><p id="sizec3">XL</p><p id="sizec4">2XL</p><p id="sizec4">3XL</p>
				
				<div id="btn">
					<br><br><br>
					<button id= "btn1" onclick="">ADD TO BAG</button>
					<!--<p id="btn2"><a type= "button" onclick= href="addtowishlist.php">ADD TO WISHLIST</a></p>-->	
				</div>
				<p id ="cod">Cash On Delivery Available</p>
				<p id ="edate"></p>
			</div>
		</div>
		<br><br>
		<div id="br">
			<p>15 Days return policy &nbsp  |  &nbsp Cash on delivery &nbsp  |  &nbsp Free Shipping above &nbsp &#8377 500</p>
		</div>
		<div>
			<div id="sugtxt">
				<p> You May Also Like <p>
			</div>
			<div id="suggest">
				<div id= "ymal">
					<a href="htee8.php"><img src="img/htee8.jpg" height="620px" width="495px">
					<p>Minimal Cycle</p>
					<p>&#8377 495</p></a>
				</div>
				<div id= "ymal">
					<a href="htee9.php"><img src="img/htee9.jpg" height="620px" width="495px">
					<p>Ninja Chop</p>
					<p>&#8377 445</p></a>
				</div>
				<div id= "ymal">
					<a href="htee10.php"><img src="img/htee10.jpg" height="620px" width="495px">
					<p>Interstellar Superman (GID) (SL)</p>
					<p>&#8377 495</p></a>
				</div>
				<div id= "ymal">
					<a href="htee11.php"><img src="img/htee11.jpg" height="620px" width="495px">
					<p>Psy</p>
					<p>&#8377 445</p></a>
				</div>	
			</div>
		</div>
		<footer id="foot">
				<div id="flogo">
					<a href="home.php"><img src="img/logo2.png" height="15%" width="15%"></a>
				</div>
				<div id="fdetail">
					<div id="fitem">
							<h3>CUSTOMER SERVICES</h3>
							<p><a href="#contact.php">Contact</a></p>
							<p><a href="#track.php">Track Order</a></p>
							<p><a href="#acces.php">Return Order</a></p>
							<p><a href="#women.php">Cancel Order</a></p>
							<p><a href="#acces.php">FAQ</a></p>
					</div>
					<div id="fitem">
							<h3>COMPANY</h3>
							<p><a href="aboutus.php">About Us</a></p>
							<p><a href="">Careers</a></p>
							<p><a href="">Terms and Conditions</a></p>
							<p><a href="">Privacy Policy</a></p>
							<p><a href="">Blog</a></p>
					</div>
					<div id="fitem">
							<h3>CONNECT WITH US</h3>
							<a href="https://www.facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i> 2.3 M People Like This</a><br>
							<a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i> 120K Followers</a><br>
							<div id ="faline">
								<a href="https://www.twitter.com"><i  class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="https://www.googleplus.com"><i  class="fa fa-google-plus" aria-hidden="true"></i></a>
								<a href="https://www.pinterest.com"><i  class="fa fa-pinterest" aria-hidden="true"></i></a>
								<a href="https://www.apple.com"><i  class="fa fa-apple" aria-hidden="true"></i></a>
								<a href="https://www.android.com"><i  class="fa fa-android" aria-hidden="true"></i></a>
							</div>
					</div>
					<div id="fitem">
							<h3>KEEP UP TO DATE</h3>
							<form> <input id="email" type="email" placeholder="Enter Email Id"> <input id="submit" type="submit" value="SUBSCRIBE"> </form>
					</div>
				</div>
				<br>
				<div id="fdetail2">
					<div id="fitem2">
						<p>15 Days return policy</p>
						<p>Cash on delivery</p>
						<p>Free Shipping above &nbsp &#8377 500</p>
					</div>
					<div id="fitem2">
						<h3>Download The App</h3>
						<a href="https://play.google.com"><img src="img/android.png" height="35%" width="35%"></a>
						<a href="https://appstore.com"><img src="img/ios.png" height="35%" width="35%"></a>
					</div>
					<div id="fitem2">
						<h3>100% SECURE PAYMENT</h3>
						<img src="img/payment.png" height="90%" width="90%">
					</div>				
				</div>
		<footer>
	</div>
	
</body>

</html>