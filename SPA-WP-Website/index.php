<?php/* Template Name:  FrontPage Template0 */ ?>

<!-- page-index -->

<?php get_header(); ?>

<div class="row">
	<div class="col-sm-12">

		<?php

		/// Load Indivudal Template Files
		get_template_part('about');
		get_template_part('services');
		// get_template_part('content'); // blog posts as items for sale content
		?>
			<!-- ITEM GALLERY -->
			<div class="itemGallery">

				<h2 style="text-align:center;"> Items For Sale </h3>
				<?php
					if (!have_posts() ){
						get_template_part('itemsOutOfStock');
					}
				?>

				<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile; endif;
				?>

			</div>
			<!-- END OF ITEMS GALLERY -->

		<?php
		get_template_part('contact');
		?>

	</div>
</div>

<?php get_footer(); ?>
