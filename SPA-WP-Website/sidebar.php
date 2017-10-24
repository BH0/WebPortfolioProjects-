
		<!-- start of sidebar.php file -->
		<div class="sidebar">
			<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
			  <div class="sidebar-module sidebar-module-inset">
				<h4>About</h4>
				<p><?php the_author_meta('description'); ?></p>
			</div>
			  <div class="sidebar-module">
				<h4>Archives</h4>
				<ul class="list-unstyled">
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			  </div>
			  <div class="sidebar-module">
				<h4>Elsewhere</h4>
				<ol class="list-unstyled">
				</ol>
			  </div>
			</div><!-- /.blog-sidebar -->
		</div>
	<!-- end of sidebar.php file -->
    
