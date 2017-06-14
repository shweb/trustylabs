<?php montserrat_ninzio_global_variables(); ?>
<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<?php $classes= array('all');
			if (get_the_terms( $post->ID, 'projects-category', '', ' ', '' )) {
				foreach(get_the_terms( $post->ID, 'projects-category', '', '', '' ) as $term) {
					array_push($classes, $term->slug);
				}
			}
		?>
		<article data-grid="ninzio_01" <?php post_class($classes) ?> id="post-<?php the_ID(); ?>">
			<?php include(NINZIO_ADDONS.'projects/content.php'); ?>
		</article>
		
		<?php if (is_single()): ?>
			<?php if ($GLOBALS['montserrat_ninzio']['projects-rp'] && $GLOBALS['montserrat_ninzio']['projects-rp'] == 1): ?>

				<?php
					$posts_number = ($GLOBALS['montserrat_ninzio']['projects-rpn']) ? $GLOBALS['montserrat_ninzio']['projects-rpn'] : 4;
					$terms        = get_the_terms( $post->ID , 'projects-tag');
					$layout_class = ($posts_number == 3) ? 'medium-image-nogap' : 'small-image-nogap';				
				?>

				<?php if ($terms): ?>

					<?php

						$tagids = array();
						foreach($terms as $tag) {$tagids[] = $tag->term_id;}

						$args = array(
							'post_type' => 'projects',
							'tax_query' => array(
					            array(
					                'taxonomy' => 'projects-tag',
					                'field'    => 'id',
					                'terms'    => $tagids,
					                'operator' => 'IN'
					             )
					        ),
							'posts_per_page'      => $posts_number,
							'ignore_sticky_posts' => 1,
							'orderby'             => 'date',
							'post__not_in'        => array($post->ID)
						);

					    $related_projects = new WP_Query($args);

					?>
					<?php if ($related_projects->have_posts()): ?>
						
						<div class="nz-related-projects nz-recent-projects <?php echo $layout_class; ?> nz-clearfix column-<?php echo $posts_number; ?>">
							<div class="container">
								<h3><?php echo esc_html__("You may also like", 'ninzio-addons'); ?></h3>
								<div class="recent-projects-wrap nz-clearfix">
									<?php while($related_projects->have_posts()) : $related_projects->the_post(); ?>	

										<div class="projects nz-clearfix" data-grid="ninzio_01">
											<?php if (has_post_thumbnail()): ?>
											    <div class="nz-thumbnail">
													<?php echo get_the_post_thumbnail( $post->ID, "Montserrat-Ninzio-Half" );?>
											        <a class="ninzio-overlay" href="<?php echo get_permalink(); ?>"></a>
										        	<div class="project-info-tab">
										        		<a class="project-more" href="<?php echo get_permalink(); ?>"></a>
										        		<?php if ( '' != get_the_title() ){ ?>
															<h4 class="project-title">
																<?php echo get_the_title() ?>
															</h4>
														<?php } ?>
														<?php if('' != get_the_term_list($post->ID, 'projects-category')): ?>
															<div class="projects-category">
																<?php echo get_the_term_list( $post->ID, 'projects-category', '', ' | ', '' ); ?>
															</div>
														<?php endif ?>
										        	</div>
										        	
											    </div>
											<?php endif ?>
										</div>
									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>
								</div>
							</div>
						</div>
					<?php endif ?>
				<?php endif ?>
			<?php endif; ?>
		<?php endif ?>

	<?php endwhile; ?>

<?php else : ?>

	<?php montserrat_ninzio_not_found('projects'); ?>

<?php endif; ?>