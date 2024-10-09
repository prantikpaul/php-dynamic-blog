<?php

if (file_exists(__DIR__ . '/autoload.php')) {
	require_once __DIR__ . '/autoload.php';
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
	<title><?php echo $title["title"]; ?> </title>
</head>

<body id="home">
	<div id="wrapper">

		<!--__--__--__--__--__--  L O G O  &   N A V    B A R --__--___--__--__--__-->
		<header>
			<div id="logo">
				<h1><?php echo $title["title"]; ?><span id="iisrt"><span id="ii">Tech</span> <span id="srt">HUB</span></span></h1>
				<div id="tagline">
					<h2><?php echo $title["des"]; ?></h2>
				</div>
			</div>
			<nav>
				<ul>
					<?php foreach ($menu as $m): ?>
						<li><a href="<?php echo $m["link"]; ?>" id="<?php echo $m["id"]; ?>"><?php echo $m["title"]; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</nav>
		</header>

		<!--__--__--__--__--  T H E    S L I D E R --__--__--__--___--__--__--__-->
		<div class="slider-wrapper theme-default">
			<div id="slider" class="nivoSlider">
				<img src="images/slide1.jpg" alt="" />
				<a href="http://geeksband.com"><img src="images/slide2.jpg" alt="" title="This is an example of a caption with a link" /></a>
				<img src="images/slide3.jpg" alt="" title="This is an example of a caption" />
				<img src="images/slide4.jpg" alt="" />
			</div>
		</div>
		<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider({
					pauseTime: 6000,
				});
			});
		</script>

		<!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
		<section>
			<div id="line">
				<div class="dline"></div>
				<h1>
					<?php echo $service["title"]; ?>
				</h1>
				<div class="dline"></div>
			</div>
			<div id="ourserv">
				<?php foreach ($service['cat'] as $c) : ?>
					<article>
						<h1><?php echo $c["title"]; ?></h1>
						<img src="<?php echo $c["pic"]; ?>" alt="" />
						<p><?php echo $c["des"]; ?></p>
						<a href="<?php echo $c["link"]; ?>" class="rm">Read More</a>
					</article>
				<?php endforeach ?>
			</div>
			<div id="sline">
				<div class="sdline"></div>
				<h1>Latest Projects</h1>
				<div class="sdline"></div>
			</div>
			<div id="latestp">
				<article>
					<h1>Lorem Ipsum Dolor Sit</h1>
					<img src="images/1s.jpg" alt="" />
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque.</p>
					<a href="singlepost.html" class="rm">Read More</a>
				</article>
				<article>
					<h1>Lorem Ipsum Dolor Sit</h1>
					<img src="images/2s.jpg" alt="" />
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque.</p>
					<a href="singlepost.html" class="rm">Read More</a>
				</article>
				<article>
					<h1>Lorem Ipsum Dolor Sit</h1>
					<img src="images/3s.jpg" alt="" />
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque.</p>
					<a href="singlepost.html" class="rm">Read More</a>
				</article>
				<article class="lastarticle">
					<h1>Lorem Ipsum Dolor Sit</h1>
					<img src="images/4s.jpg" alt="" />
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque.</p>
					<a href="singlepost.html" class="rm">Read More</a>
				</article>
			</div>
		</section>
		<!--__--__--__--__--  T H E    F O O T E R --__--__--__--___--__--__--__-->
		<footer>
			<p>Copyright &copy 2013 Source X by Youssef Nassim and Zakariya Lhamri, design from <a href="http://geeksband.com">Geeksband.com</a>. All Rights Reserved.</p>
		</footer>
	</div>
</body>

</html>