
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Carrion Gaming | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <script src="js/jquery.js"></script>
	<link rel='icon' href='css/img/favicon.ico' type='image/ico' />

    <!--[if lt IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/ie.js"></script>
    <![endif]-->

    <!-- Le styles ;) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/nivo.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/custom_colors.css" rel="stylesheet">
</head>

<body>

<div id="page_wrap">
    <header>
        <div class="logo-container">
			<a id="logo" title="CG Clan Homepage" href="index.php"><img src="css/img/logo.png" alt=""></a>
        </div>
        <nav>
            <ul id="menu">
                <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="home-icon menu-specs">
                        <a href="index.php" title="Home Page">Home</a>
                        <span>CG Clan</span>
                    </div>
                </li>
                <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="aboutus-icon menu-specs">
                        <a href="about.php" title="About Us">About</a>
                        <span>About CG Clan</span>
                    </div>
                </li>
                <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="link menu-specs">
                        <a href="servers.php" title="Our Servers">Servers</a>
                        <span>Live server stats</span>
                    </div>
                </li>
                <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="mail-icon menu-specs">
                        <a href="forum.php" title="Community Forum">Forum</a>
                        <span>Community Forum</span>
                    </div>
                </li>
                <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="contact-icon menu-specs">
                        <a href="contact.php" title="Contact an administrator">Contact</a>
                        <span>Contact an administrator</span>
                    </div>
                </li>
				<li>
							<div class="menu-abs-bg background-color"></div>
							<div class="left-login menu-specs-2">
								<form action="forum/member.php" method="post" role="form" class="form" id="formLogin">
									<input style="width: 165px; border-radius: 5px; border: solid red 1px;" id="username" placeholder="Username" type="text" name="username" size="25" maxlength="30" autofocus=""/>
										<br> <br>
									<input style="width: 165px; border-radius: 5px; border: solid red 1px;" id="password" placeholder="Password" type="password" name="password" size="25" value=""/>
									<input type="hidden" name="action" value="do_login">
									<input type="hidden" name="url" value="" />
										<br> <br>
									<center>
										<button class="button" type="submit" id="btnLogin" class="submit" name="submit" value="submit">&nbsp; Login &nbsp;</button>
										&nbsp;
										<a href="forum/member.php?action=register"><button class="button">Register</button></a>
									</center>
								</form>
							</div>
				</li>
            </ul>
        </nav>
        <div class="search-and-misc">
            <div class="text margin-tb-20">
                &copy; CG Clan | Site by Logan
                <a href="" class="side-social facebook"></a>
            </div>
        </div>
    </header>
    <div id="subLevel" class="border-color background-color">
        <div id="opener" class="border-left-color border-top-color"><div class="opener-plus"></div></div>
    </div>
    <div class="rightSide">
        <div class="row">
            <div class="twelve columns">
                <div class="announce announce-icon">
					Welcome to <span class="color">Carrion Gaming's</span> website! ~ Visit the forums and get involved with the community!
				</div>
            </div>
        </div>
        <div class="row">
            <div class="twelve columns">
                <div class="slider nivoSlider">
                    <img src="css/img/slider-1.png" alt="slider1" title="#slider-caption-1" />
                    <img src="css/img/slider-1.png" alt="slider2" title="#slider-caption-2" />
                    <img src="css/img/slider-1.png" alt="slider3" title="#slider-caption-3" />
                </div>
                <div id="slider-caption-1" class="nivo-html-caption"><div class="icon-side info-icon"></div>Head over to the `SERVERS page to find the IP's | Unless you've been here before</div>
                <div id="slider-caption-2" class="nivo-html-caption"><div class="icon-side info-icon"></div>Immerse yourself into the game, become the counter of strike | The strike of counter</div>
				<div id="slider-caption-3" class="nivo-html-caption"><div class="icon-side info-icon"></div>Carrion Gaming | Counter Strike Division</div>
            </div>
        </div><!-- Slider Row ENDS -->
        <div class="row">
            <div class="three columns">
                <div class="title star-icon-b">Fabulous Experience</div>
                <div class="text margin-tb-20">Here at CG Clan we strive to provide a mature enviornment for our gamers, including cutting out the bullshit of those kiddies we see running around some servers. <br><br>Just kidding, PG-13 kids, we will still love to have you on the servers ;)</div>
                <a href="servers.php" class="link color" title="read">■  join our servers</a>
            </div>
            <div class="three columns">
                <div class="title clients-icon">Great Community</div>
                <div class="text margin-tb-20">Our servers are filled with eager gamers who absolutely enjoy socializing with you, and the rest of the people on these servers you're currently taking a look at.<br><br> On the other hand, I suppose you could say that you wont be introverted here!</div>
                <a href="forum.php" class="link color" title="read">■  join our forum</a>
            </div>
            <div class="three columns">
                <div class="title tag-cloud">Fast, Reliable Servers</div>
                <div class="text margin-tb-20">Our servers rarely ever crash, which can insure a great experience with gaming without the network lag! Playing on our high-performance servers are a must.<br><br>What's network lag? It's short for network latency, in others words; data loss between two networks/systems.</div>
                <a href="servers.php" class="link color" title="read">■  test them yourself</a>
            </div>
            <div class="three columns">
                <div class="plus-with-hard-text">
                    <div class="hard-text">&nbsp;  CG Clan ¯\_(ツ)_/¯ <br> &nbsp; &nbsp; &nbsp; Gaming Deluxe</div>
                    <div class="plus-sign color">+</div>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="nine columns">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/1nkO4N7P-Ys" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="three columns">
                <div class="title title-icon">Counter-Strike: Global Offensive</div>
                <div class="text margin-tb-10">
                    Wonder what Counter-Strike is? Watch this quick video and at then end, when your jaw hits the floor; buy the game & join one of our fabulous servers.
					<br><br>
					After that, you might be able to become The Global Elite everyone wants to be.
                </div>
                <div class="margin-tb-10 color text">Counter-Strike Badass</div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="text font-15 margin-tb-20">Rating : <span class="color">★★★★</span>☆</div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="row">
            <div class="twelve columns">
				<a href="about.php">
					<div class="carousel-controls">
						To next page ->
					</div>
				</a>
                <div class="lines"></div>
            </div>
        </div>
    </div>
        <div class="row footer background-color">
            <div class="twelve columns">
                <div class="footer-menu">
                    <a href="index.php" class="left" title="Home">Home</a>
                    <a href="about.php" class="left" title="About">About</a>
                    <a href="servers.php" class="left" title="Servers">Servers</a>
                    <a href="forum.php" class="right" title="Forum">Forum</a>
                    <a href="contact.php" class="right" title="Contact">Contact</a>
                </div>
            </div>
        </div>
    </div>
	<div id="toTop"></div>
</div>

<script src="js/isotope.js"></script>
<script src="js/caroufredsel.js"></script>
<script src="js/nivo.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/tinyscrollbar.js"></script>
<script src="js/custom.js"></script>
<!--[if lte IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->
</body>
</html>