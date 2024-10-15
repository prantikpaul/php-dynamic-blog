<?php
include_once __DIR__ . "/templates/header.php";

?>




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


<?php
include_once __DIR__ . "/templates/footer.php";

?>