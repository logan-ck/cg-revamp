<?php
	ini_set('display_startup_errors',1);
	ini_set('display_errors',1);
	error_reporting(-1);
	error_reporting(E_ALL);
	// Get Config File
	require '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Carrion Gaming | Community</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<script language="JavaScript">
		<!--
		function autoResize(id){
			var newheight;
			var newwidth;

			if(document.getElementById){
				newheight=document.getElementById(id).contentWindow.document .body.scrollHeight;
				newwidth=document.getElementById(id).contentWindow.document .body.scrollWidth;
			}

			document.getElementById(id).height= (newheight) + "px";
			document.getElementById(id).width= (newwidth) + "px";
		}
		//-->
	</script>
    <script src="js/jquery.js"></script>
	<link rel='icon' href='../css/img/favicon.ico' type='image/ico' />

    <!--[if lt IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/ie.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/grid.css" rel="stylesheet">
    <link href="../css/nivo.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/custom_colors.css" rel="stylesheet">
</head>

<body>

<div id="page_wrap">
    <header>
        <div class="logo-container">
			<a id="logo" title="CG Clan Homepage" href="index.php"><img src="../css/img/logo.png" alt=""></a>
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
					<?php 
						if($mybb->user['uid']) { echo "
							<div class='menu-abs-bg background-color'></div>
							<div class='to-left-icon menu-specs'>
								<a href='forum/member.php?action=logout&amp;logoutkey={$mybb->user['logoutkey']}' title='Logout'>Logout</a>
								<span>Signed in as $name</span>
							</div>
						";
						} else {
						echo '
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
						';
						}
					?>	
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
            <div class="nine columns">
                <h1>Community Forum</h1>
            </div>
            <div class="three columns">
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" title="Go Back" class="back-button to-left-icon-b">Go back</a>
            </div>
        </div>
        <div class="row">
            <div class="twelve columns">
				<?php include './index.php' ?>
			</div>
        </div>
		<div class="row">
            <div class="twelve columns">
				<a href="contact.php">
                <div class="carousel-controls">
                    To next page ->
                </div>
				</a>
                <div class="lines"></div>
                <div class="carousel margin-tb-20">
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

<script src="../js/isotope.js"></script>
<script src="../js/caroufredsel.js"></script>
<script src="../js/nivo.js"></script>
<script src="../js/jquery.mousewheel.js"></script>
<script src="../js/tinyscrollbar.js"></script>
<script src="../js/custom.js"></script>
<!--[if lte IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->
</body>
</html>