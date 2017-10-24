
				<div class="about-content">

					<div class="about-image-placeholder" height="400px;">
						<div> TEST </div>
					</div>
					<div class="about-right" height="400px;">
						<div>
						<div class="about-content-text">
							<h1 class="kyp">
							Lorem Ipsum Dolor
							</h1>
							<p class="regularText">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit
							</p>
						</div>

						</div>
					</div>
				</div>
				<script>

				new Tether({
					element: '.about-content-text h1',
					target: '.about-right',
					attachment: '300 -100',
					targetAttachment: '0 0'
				});

				new Tether({
					element: '.about-content-text',
					target: '.about-right',
					attachment: '150 200',
					targetAttachment: '0 0'
				});
				</script>
