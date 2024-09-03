<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SA_E-Learning
 */

get_header();
?>





<!-- Page Header section start here -->
<div class="pageheader-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="pageheader-content text-center">
					<h2>Our Blog Classic Posts</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="/">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Blog classic</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page Header section ending here -->


<!-- blog section start here -->
<div class="blog-section padding-tb section-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-12">
				<article>
					<div class="section-wrapper">
						<div id="primary"
							class="site-main row row-cols-1 row-cols-sm-2 row-cols-md-2 justify-content-center g-4">

							<?php
							if (have_posts()):


								/* Start the Loop */
								while (have_posts()):
									the_post();
									?>
									<div class="col">
										<div class="post-item">
											<div class="post-inner">
												<div class="post-thumb">
													<?php
													if (has_post_thumbnail()) {
														$thumbnail_url = get_the_post_thumbnail_url();
														?>
														<a href="<?php the_permalink(); ?>"><img
																src="<?php echo get_the_post_thumbnail_url() ?>"
																alt="blog thumb"></a>
														<?php
													} else {
														?>
														<a href="<?php the_permalink(); ?>"><img
																src="<?php echo get_template_directory_uri() ?>/assets/images/blog/02.jpg"
																alt="blog thumb"></a>
														<?php
													}
													?>
												</div>
												<div class="post-content">
													<a href="<?php the_permalink(); ?>">
														<h4><?php the_title(); ?></h4>
													</a>
													<div class="meta-post">
														<ul class="lab-ul">
															<li><i class="icofont-ui-user"></i><?php echo get_the_author(); ?>
															</li>
															<li><i class="icofont-calendar"></i><?php echo get_the_date(); ?>
															</li>
														</ul>
													</div>
													<p><?php echo the_excerpt(); ?></p>
												</div>
												<div class="post-footer">
													<div class="pf-left">
														<a href="<?php the_permalink(); ?>" class="lab-btn-text">Read more
															<i class="icofont-external-link"></i></a>
													</div>
													<div class="pf-right">
														<i class="icofont-comment"></i>
														<span class="comment-count"><?php echo get_comments_number(); ?></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php


								endwhile;

								// the_posts_navigation();

							else:

								get_template_part('template-parts/content', 'none');

							endif;
							?>

						</div>
						<?php
						global $wp_query;
						$pages = paginate_links(array(
							'total' => $wp_query->max_num_pages,
							'prev_text' => '<i class="icofont-rounded-left"></i>',
							'next_text' => '<i class="icofont-rounded-right"></i>',
							'type' => 'array',
						));

						if (is_array($pages) && !empty($pages)) {
							echo '<ul class="default-pagination lab-ul">';
							foreach ($pages as $page) {
								if (strpos($page, 'current') !== false) {
									echo '<li><a class="active">' . $page . '</a></li>';
								} else {
									echo '<li>' . $page . '</li>';
								}
							}
							echo '</ul>';
						}
						?>
					</div>
				</article>
			</div>
			<div class="col-lg-4 col-12">
				<aside>
					<div class="widget widget-search">
						<form action="/" class="search-wrapper">
							<input type="text" name="s" placeholder="Search...">
							<input type="hidden" name="post_type" value="post">
							<button type="submit"><i class="icofont-search-2"></i></button>
						</form>
					</div>
					<div class="widget widget-category">
						<div class="widget-header">
							<h5 class="title">Post Category</h5>
						</div>
						<ul class="widget-wrapper">
							<?php
							$categories = get_categories();
							if (!empty($categories) && !is_wp_error($categories)) {

								foreach ($categories as $category) {
									?>
									<li><a class="d-flex flex-wrap justify-content-between"
											href="<?php echo get_category_link($category->term_id); ?>">
											<span><i
													class="icofont-double-right"></i><?php echo $category->name; ?></span><span><?php echo $category->count; ?></span>
										</a></li>
									<?php
								}

							}
							?>
						</ul>
					</div>
				</aside>
			</div>
		</div>
	</div>
</div>
<!-- blog section ending here -->


<?php
// get_sidebar();
get_footer();