<!--index-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap row">

						<main id="main" class="col-xs-12 col-sm-8 col-lg-9" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( ' single-post' ); ?> role="article">

								<header class="article-header">

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline entry-meta vcard">
	                      <?php printf( __( '', 'halcyon' ).' %1$s %2$s',
	       								/* the time the post was published */
	       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
	       								/* the author of the post */
	       								'- <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
	    							); ?>
									</p>

								</header>
								<div class="hero--image"><?php the_post_thumbnail('gallery-image'); ?></div>
								<section class="entry-content ">
									<?php the_excerpt(); ?>
								</section>

								<footer class="article-footer ">
									<p class="footer-comment-count">
										<?php comments_number( __( '<span>No</span> Comments', 'halcyon' ), __( '<span>One</span> Comment', 'halcyon' ), __( '<span>%</span> Comments', 'halcyon' ) );?>
									</p>


                 	<?php printf( '<p class="footer-category">' . __('filed under', 'halcyon' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'halcyon' ) . '</span> ', ', ', '</p>' ); ?>


								</footer>

							</article>

							<?php endwhile; ?>

									<?php halcyon_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry ">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'halcyon' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'halcyon' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( '', 'halcyon' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
