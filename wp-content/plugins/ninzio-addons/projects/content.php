<?php 

	montserrat_ninzio_global_variables();
	$values                    = get_post_custom( $post->ID );
	$nz_project_details        = (isset( $values['project_details'][0]) && !empty($values['project_details'][0]) ) ? $values["project_details"][0] : "";
	$nz_pcl                    = (isset( $values['pcl'][0]) && !empty($values['pcl'][0]) ) ? $values["pcl"][0] : "";
	$nz_projects_layout        = (isset($GLOBALS['montserrat_ninzio']['projects-layout']) && !empty($GLOBALS['montserrat_ninzio']['projects-layout'])) ? $GLOBALS['montserrat_ninzio']['projects-layout'] : "small-image-nogap";
	$nz_projects_layout_single = (isset($GLOBALS['montserrat_ninzio']['projects-layout-single']) && !empty($GLOBALS['montserrat_ninzio']['projects-layout-single'])) ? $GLOBALS['montserrat_ninzio']['projects-layout-single'] : "sidebar";

?>	
<?php if (!is_single()): ?>
	<?php if ($nz_projects_layout == "small-standard" || $nz_projects_layout == "medium-standard" || $nz_projects_layout == "large-standard"): ?>
		<div class="nz-thumbnail">
	        <?php echo get_the_post_thumbnail( $post->ID, "Montserrat-Ninzio-Half" );?>
	        <div class="ninzio-overlay">
	        	<a class="nz-overlay-before" data-lightbox-gallery="gallery3" href="<?php echo get_permalink(); ?>"></a>
	        </div>
	    </div>
	    <div class="project-details">
	    	<?php if ( '' != get_the_title() ){ ?>
				<h4 class="project-title">
					<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title() ?></a>
				</h4>
			<?php } ?>
			<?php if('' != get_the_term_list($post->ID, 'projects-category')): ?>
				<div class="projects-category">
					<?php print_r(get_the_term_list( $post->ID, 'projects-category', '', ', ', '' )); ?>
				</div>
			<?php endif ?>
	    </div>
	<?php else: ?>
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
<?php else: ?>
	<div class="container">
		
		<div class="post-body nz-clearfix">

			<div class="single-project-main-detailes single-project-layout-<?php echo $nz_projects_layout_single; ?> nz-clearfix">
				<?php
			        $post_gallery_array = array();
			        $thumb_size = 'Montserrat-Ninzio-Whole';
			        $output     = "";

			        if (class_exists('MultiPostThumbnails')) {

			            if (MultiPostThumbnails::has_post_thumbnail('projects', 'project-feature-image-2')) {
			                $thumb_2 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'project-feature-image-2', $post->ID, $size = $thumb_size);
			                array_push($post_gallery_array, $thumb_2);
			            }

			            if (MultiPostThumbnails::has_post_thumbnail('projects', 'project-feature-image-3')) {
			                $thumb_3 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'project-feature-image-3', $post->ID, $size = $thumb_size);
			                array_push($post_gallery_array, $thumb_3);
			            }

			            if (MultiPostThumbnails::has_post_thumbnail('projects', 'project-feature-image-4')) {
			                $thumb_4 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'project-feature-image-4', $post->ID, $size = $thumb_size);
			                array_push($post_gallery_array, $thumb_4);
			            }

			            if (MultiPostThumbnails::has_post_thumbnail('projects', 'project-feature-image-5')) {
			                    $thumb_5 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'project-feature-image-5', $post->ID, $size = $thumb_size);
			                array_push($post_gallery_array, $thumb_5);
			            }

			        }

			        if (has_post_thumbnail()){

			        	if ($nz_projects_layout_single == "sidebar") {
			        		$output .= '<div class="post-gallery media main-content left">';
			        	} else {
			            	$output .= '<div class="post-gallery media">';
			        	}
			                	$output .= '<ul class="slides">';

			                    $output .= '<li>';

			                        if (has_post_thumbnail()){
									    $output .= '<div class="nz-thumbnail">';
									        $output .= get_the_post_thumbnail( $post->ID, "Montserrat-Ninzio-Whole" );
									    $output .= '</div>';
									}

			                    $output .= '</li>';


			                    foreach ($post_gallery_array as $thumb) {

			                        $output .='<li>';

			                        	$output .= '<div class="nz-thumbnail">';
									        $output .='<img src="'.$thumb.'" alt="'.get_the_title().'">';
									    $output .= '</div>';
			                            
			                        $output .='</li>';

			                    }

			                	$output .= '</ul>';
			            	$output .= '</div>';
			            echo $output;
			        }
			    ?>
			    <?php if ($nz_projects_layout_single == "sidebar"): ?>
			    	<div class="single-details sidebar">
						<?php if ('' != get_the_excerpt()): ?>
							<h3 class="projects-description-title"><?php echo esc_html__("Project Description:", "ninzio-addons"); ?></h3>
							<div class="project-excerpt nz-clearfix"><?php the_excerpt() ?></div>
						<?php endif ?>
						<?php if (!empty($nz_project_details)): ?>
							<div class="project-details">
								<ul>
									<?php
										$split = preg_split("/(\r?\n)+|(<br\s*\/?>\s*)+/", $nz_project_details);
										foreach($split as $haystack) {
								            echo  '<li>' . $haystack . '</li>';
								        }
									 ?>
									 <li>
									 	<div class="project-social-link-share">
									 		<strong><?php echo esc_html__("Share"); ?></strong>
											<div class="social-links left nz-clearfix">
										    	<a title="<?php echo esc_html__("Share on Facebook", 'ninzio-addons'); ?>" class="post-facebook-share icon-facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>"></a>
												<a title="<?php echo esc_html__("Tweet this!", 'ninzio-addons'); ?>" class="post-twitter-share icon-twitter" target="_blank" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>"></a>
										    	<a title="<?php echo esc_html__("Share on Pinterest", 'ninzio-addons'); ?>" class="post-pinterest-share icon-pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>"></a>
										    	<a title="<?php echo esc_html__("Share on LinkedIn", 'ninzio-addons'); ?>" class="post-linkedin-share icon-linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"></a>
										    	<a title="<?php echo esc_html__("Share on Google+", 'ninzio-addons'); ?>" class="post-google-share icon-googleplus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a>
											</div>
										</div>
									 </li>
								</ul>
							</div>
						<?php endif; ?>

						<?php if (!empty($nz_pcl)): ?>
							<a class="button button-ghost default full-false medium square icon-true animate-false anim-type-ghost hover-side" href="<?php echo esc_url($nz_pcl); ?>" target="_self">
								<span class="txt"><?php echo esc_html__('Visit project', 'ninzio-addons'); ?>
									<span class="screen-reader-text"> <?php the_title();?></span>
								</span>
								<span class="btn-icon icon-arrow-right2"></span>
							</a>
						<?php endif; ?>
					</div>
			    <?php else: ?>
			    	<div class="main-content left">
			    		<?php if ('' != get_the_excerpt()): ?>
							<h3 class="projects-description-title"><?php echo esc_html__("Description:", "ninzio-addons"); ?></h3>
							<div class="project-excerpt nz-clearfix"><?php the_excerpt() ?></div>
						<?php endif ?>
			    	</div>	
			    	<div class="single-details sidebar">
						<?php if (!empty($nz_project_details)): ?>
							<div class="project-details">
								<ul>
									<?php
										$split = preg_split("/(\r?\n)+|(<br\s*\/?>\s*)+/", $nz_project_details);
										foreach($split as $haystack) {
								            echo  '<li>' . $haystack . '</li>';
								        }
									 ?>
									 <li>
									 	<div class="project-social-link-share">
									 		<strong><?php echo esc_html__("Share"); ?></strong>
											<div class="social-links left nz-clearfix">
										    	<a title="<?php echo esc_html__("Share on Facebook", 'ninzio-addons'); ?>" class="post-facebook-share icon-facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>"></a>
												<a title="<?php echo esc_html__("Tweet this!", 'ninzio-addons'); ?>" class="post-twitter-share icon-twitter" target="_blank" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>"></a>
										    	<a title="<?php echo esc_html__("Share on Pinterest", 'ninzio-addons'); ?>" class="post-pinterest-share icon-pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>"></a>
										    	<a title="<?php echo esc_html__("Share on LinkedIn", 'ninzio-addons'); ?>" class="post-linkedin-share icon-linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"></a>
										    	<a title="<?php echo esc_html__("Share on Google+", 'ninzio-addons'); ?>" class="post-google-share icon-googleplus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a>
											</div>
										</div>
									 </li>
								</ul>
							</div>
						<?php endif; ?>
						<?php if (!empty($nz_pcl)): ?>
							<a class="button button-ghost default full-false medium square icon-true animate-false anim-type-ghost hover-side" href="<?php echo esc_url($nz_pcl); ?>" target="_self">
								<span class="txt"><?php echo esc_html__('Visit project', 'ninzio-addons'); ?>
									<span class="screen-reader-text"> <?php the_title();?></span>
								</span>
								<span class="btn-icon icon-arrow-right2"></span>
							</a>
						<?php endif; ?>
					</div>
			    <?php endif ?>
			</div>

			<div class="nz-clearfix"></div>
			<?php if ('' != get_the_content()): ?>
				<div class="project-content nz-clearfix"><?php the_content() ?></div>
			<?php endif ?>
		</div>	
	</div>
<?php endif ?>