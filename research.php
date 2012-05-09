<?php
/*
Template Name: Research Page
*/
?>
<?php get_header(); ?>

<div class="fl-centered fl-col-mixed fl-site-wrapper">

	<aside>
		<div class="fl-col-fixed fl-force-left"> 
			<?php get_sidebar('research'); ?>
		</div>
	</aside>

	<div class="fl-col-flex idi-one-column idi-research">
		<ul class="fl-grid">
			<li>
				<section>
					<div class="idi-research-item">
						<head>
							<a href="design">
								<div class="idi-cluster-icon idi-cluster-design">
									<span class="fl-hidden-accessible">Design and Development research cluster</span>
									<div class="idi-cluster-hover-overlay">
										<div class="idi-cluster-icon idi-cluster-design-hover">
											<span class="idi-cluster-icon-text fl-centered"> learn more</span>
										</div>
									</div>
								</div>
							</a>
							<h2>Design &amp; Development</h2>
						</head>
						<p>Creating tools, strategies, resources and exemplars that address all stages of ICT production and use</p>
						<p><a class="idi-more" href="design">learn more</a></p>
					</div>
				</section>
			</li>

			<li>
				<section>
					<div class="idi-research-item">
						<head>
							<a href="policies">
								<div class="idi-cluster-icon idi-cluster-policies">
									<span class="fl-hidden-accessible">Business Case, Policies, Standards and Legislation research cluster</span>
									<div class="idi-cluster-hover-overlay">
										<div class="idi-cluster-icon idi-cluster-policies-hover">
											<span class="idi-cluster-icon-text fl-centered"> learn more</span>
										</div>
									</div>
								</div>
							</a>
							<h2>Business Case, Policies, Standards &amp; Legislation</h2>
						</head>
						<p>Engaging legislators, specifications bodies, advocacy grops and consumer communities in inclusive design research</p>
						<p><a class="idi-more" href="policies">learn more</a></p>
					</div>
				</section>
			</li>

			<li>
				<section>
					<div class="idi-research-item">
						<head>
							<a href="mobile">
								<div class="idi-cluster-icon idi-cluster-mobile">
									<span class="fl-hidden-accessible">Mobile and Pervasive Computing research cluster</span>
									<div class="idi-cluster-hover-overlay">
										<div class="idi-cluster-icon idi-cluster-mobile-hover">
											<span class="idi-cluster-icon-text fl-centered"> learn more</span>
										</div>
									</div>
								</div>
							</a>
							<h2>Mobile &amp; Pervasive Computing</h2>
						</head>
						<p>Focusing on mobile, context-aware and location-aware technologies, ubiquitous web application, pervasive computing and ambient intelligence</p>
						<p><a class="idi-more" href="mobile">learn more</a></p>
					</div>
				</section>
			</li>

			<li>
				<section>
					<div class="idi-research-item">
						<head>
							<a href="implementation">
								<div class="idi-cluster-icon idi-cluster-implementation">
									<span class="fl-hidden-accessible">Implementation and Information Practices research cluster</span>
									<div class="idi-cluster-hover-overlay">
										<div class="idi-cluster-icon idi-cluster-implementation-hover">
											<span class="idi-cluster-icon-text fl-centered"> learn more</span>
										</div>
									</div>
								</div>
							</a>
							<h2>Implementation &amp; Information Practices</h2>
						</head>
						<p>Examining the role of ICT and inclusive design in education, health, cultur and civic engagement</p>
						<p><a class="idi-more" href="implementation">learn more</a></p>
					</div>
				</section>
			</li>
		</ul>
	</div>

</div>

<?php get_footer(); ?>
