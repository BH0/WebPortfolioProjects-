

<div class="blog-post">
	<h2 class="blog-post-title" style="position:relative;top:-10px;"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?/*php the_date(); */?> <a href="#"><?php/* the_author(); */?></a></p>

	<div class="blog-post-inner">
		<style>

		.text-wrapper {
			text-align: center;
			overflow-wrap: break-word;
		}
		p {
			overflow-wrap: break-word;
			text-align: center;
			z-index: 1;
		}
		img {
			width: 180px;
			height: 140px;
			z-index: -1;
		}
		.buyButton {
			background-color: green;
			color: pink;
			border-radius: 10%;
		}
		</style>

		<div class="text-wrapper"> <?php the_content(); ?> </div>

		<div class="buyButton">
			</b> Interested? <b>
		</div>
	</div>
</div><!-- /.blog-post -->
<script>
/*
new Tether({
	element: 'blog-post-inner',
	target: '.blog-post',
	attatchment: 'top'
}); */

$(document).ready(function() {

	$('.buyButton').mouseover(function() {
		$('.hoveringInfoBox').css('background-color', 'rgba(176, 66, 244, 1)');
	});
	$('.buyButton').mouseleave(function() {
		$('.hoveringInfoBox').css('background-color', 'rgba(176, 66, 244, 0.1)');
	});
});

</script>
