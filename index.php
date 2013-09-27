<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>PRCN Movie Demo Site</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
	<![endif]-->
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-func.js"></script>
	<script type="text/javascript" src="js/contentlist.js"></script>
</head>
<body>
<!-- Shell -->
<div id="shell">
	<!-- Header -->
	<div id="header">
		<h1 id="logo"><a href="#">PRCN Movie Demo Site</a></h1>
		<!--social network-->
		<!--<div class="social">
			<span>FOLLOW US ON:</span>
			<ul>
			    <li><a class="twitter" href="#">twitter</a></li>
			    <li><a class="facebook" href="#">facebook</a></li>
			    <li><a class="vimeo" href="#">vimeo</a></li>
			    <li><a class="rss" href="#">rss</a></li>
			</ul>
		</div>-->
	
		
		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a class="active" href="#">HOME</a></li>
			    <li><a href="#">My HOME</a></li>
			    <li><a href="#">COMMING SOON</a></li>
			</ul>
		</div>
		
		<!-- end Navigation -->
		
		<!--Login and Regestration-->
		<div id="login">
			<form action="login.php" method="post">
				<label>USER</label>
				<input type="text" id="username"/>
				<label>PASSWORD</label>
				<input type="password" id="password"/>
				<input type="submit" value="LOGIN" class="button"/>
				<input type="button" value="REGESTER" class="button"/>	
			</form>
		</div>

		<!--end Login and Regestration-->
		
		<!-- Sub-menu -->
		<div id="sub-navigation">
			<ul>
			    <li><a href="index.php" target="_parent" id="showall">SHOW ALL</a></li>
			    <li><a href="#" onclick="loadcontentlist('movieid')" id="latest">LATEST</a></li>
			    <li><a href="#" onclick="loadcontentlist('movierate')" id="toprated">TOP RATED</a></li>
			    <li><a href="#" onclick="loadcontentlist('moviecomments')" id="mostcommented">MOST COMMENTED</a></li>
			</ul>
			<div id="search">
				<form action="home_submit" method="get" accept-charset="utf-8">
					<label for="search-field">SEARCH</label>					
					<input type="text" name="search field" value="Enter search here" id="search-field" title="Enter search here" class="blink search-field"  />
					<input type="submit" value="GO!" class="search-button" />
				</form>
			</div>
		</div>
		<!-- end Sub-Menu -->
	
		
	</div>
	<!-- end Header -->
	<!--<div class="inner_copyright">Collect from <a href="http://www.cssmoban.com/" target="_blank" title="网站模板">网站模板</a></div>-->
	

	<!-- Main -->
	<div id="main">
		<!-- Content -->
		<div id="content">

			<!-- Box -->
			<div class="box">
				<div class="head">
					<h2>LATEST</h2>
					<p class="text-right"><a href="#" onclick="loadcontentlist('movieid')">See all</a></p>
				</div>

			<?
			include 'function/function.php';
			$cat="movieid";
			$total=6;
			loadmoviemeta($cat,$total);
			?>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end Box -->
			
			<!-- Box -->
			<div class="box">
				<div class="head">
					<h2>TOP RATED</h2>
					<p class="text-right"><a href="#" onclick="loadcontentlist('movierate')">See all</a></p>
				</div>
		
			<?
			//include 'function/function.php';
			$cat="movierate";
			$total=6;
			loadmoviemeta($cat,$total);
			?>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end Box -->
			
			<!-- Box -->
			<div class="box">
				<div class="head">
					<h2>MOST COMMENTED</h2>
					<p class="text-right"><a href="#" onclick="loadcontentlist('moviecomments')">See all</a></p>
				</div>
			<?
			$cat="moviecomments";
			$total=6;
			loadmoviemeta($cat,$total);
			?>

			<div class="cl">&nbsp;</div>
			</div>
			<!-- end Box -->
			
		</div>
		<!-- end Content -->

		
		
		
	<!-- end Main -->

	<!-- Footer -->
	<div id="footer">
		<p>
			<a href="#">HOME</a> <span>|</span>
			<a href="#">COMING SOON </a> <span>|</span>
			<a href="#">CONTACT </a>
		</p>
		<p> &copy; 2013, Philips Research China. All Rights Reserved. </p>
	</div>
	<!-- end Footer -->
</div>
<!-- end Shell -->
	<!--script>$(document).ready(effect());</script-->
	<script>$(document).ready(effect());
	</script>

</body>
</html>
