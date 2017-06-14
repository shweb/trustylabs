<?php

	montserrat_ninzio_global_variables();				
    $nz_nav                 	  = (isset($GLOBALS['montserrat_ninzio']['projects-pagination']) && !empty($GLOBALS['montserrat_ninzio']['projects-pagination'])) ? $GLOBALS['montserrat_ninzio']['projects-pagination'] : "none";
    $nz_filter                 	  = (isset($GLOBALS['montserrat_ninzio']['projects-filter']) && $GLOBALS['montserrat_ninzio']['projects-filter'] == 1) ? "true" : "false";
	$nz_projects_layout     	  = (isset($GLOBALS['montserrat_ninzio']['projects-layout']) && !empty($GLOBALS['montserrat_ninzio']['projects-layout'])) ? $GLOBALS['montserrat_ninzio']['projects-layout'] : "small-image-nogap";
	$nz_projects_layout_container = (isset($GLOBALS['montserrat_ninzio']['projects-layout-container']) && !empty($GLOBALS['montserrat_ninzio']['projects-layout-container'])) ? $GLOBALS['montserrat_ninzio']['projects-layout-container'] : "boxed";
	$projects_per_page      = (isset($GLOBALS['montserrat_ninzio']['projects-per-page']) && !empty($GLOBALS['montserrat_ninzio']['projects-per-page'])) ? $GLOBALS['montserrat_ninzio']['projects-per-page'] : get_option( 'posts_per_page' );
    $paged             = (get_query_var('page')) ? get_query_var('page') : 1;

	$padding_class = "";

	if ($nz_nav == "none") {
		$padding_class .= " navigation-false";
	}

?>

<div class="projects-layout-wrap <?php echo $nz_projects_layout_container; ?> <?php echo $nz_projects_layout; ?> <?php echo $padding_class; ?>" id="nz-target">
	<div class="lazy">
		<?php if (!is_single()): ?>
			<div id="loop" class="loop filter-<?php echo $nz_filter; ?>" data-navigation="navigation-<?php echo $nz_nav; ?>">
				<?php if ($nz_filter == "true" && !is_tax()): ?>
				    <?php
				    	$args = array(
						    'orderby'           => 'name', 
						    'order'             => 'ASC',
						    'hide_empty'        => true, 
						    'exclude'           => array(), 
						    'exclude_tree'      => array(), 
						    'number'            => '', 
						    'fields'            => 'all', 
						    'slug'              => '', 
						    'parent'            => '',
						    'hierarchical'      => false, 
						    'child_of'          => 0, 
						    'get'               => '', 
						    'name__like'        => '',
						    'description__like' => '',
						    'pad_counts'        => false, 
						    'offset'            => '', 
						    'search'            => '', 
						    'cache_domain'      => 'core'
						);
				    	$count_posts = wp_count_posts('projects');
				    	$taxonomy  = 'projects-category'; 
				    	$tax_terms = get_terms($taxonomy);
				    ?>
					<?php if (count($tax_terms) != 0): ?>

						<div id="project-filter" data-posts-per-page="<?php echo $projects_per_page; ?>" class="nz-projects-filter ninzio-filter button-group filter-button-group">
				            <div class="container">
					            <span data-link="<?php echo get_post_type_archive_link( 'projects' ); ?>"  class="first-filter active filter" data-filter="*" data-count="<?php echo $count_posts->publish ?>"><?php echo esc_html__('Show All', 'ninzio-addons');?>
					            </span>
					        	<span class="filter-toggle">&nbsp;</span>
					            <div class="filter-container">
					            	<?php foreach(get_terms('projects-category',$args) as $filter_term): ?>
						                <span data-link="<?php echo esc_url(get_term_link($filter_term, 'projects-category')) ?>" class="filter" data-filter="<?php echo '.'.$filter_term->slug; ?>" data-count="<?php echo $filter_term->count; ?>"><?php echo $filter_term->name; ?>
						                </span>
						            <?php endforeach; ?>
					            </div>
				            </div>
					    </div>

					<?php endif; ?>
				<?php endif ?>
				<?php if ($nz_projects_layout == "small-image-nogap" || $nz_projects_layout == "medium-image-nogap"): ?>
					<section class="content projects-layout <?php echo $nz_projects_layout; ?> lazy nz-clearfix">
						<div class="projects-post projects-post-1 nz-clearfix"><?php include(NINZIO_ADDONS.'projects/content-projects-post.php'); ?></div>
						<div class="ajax-loading-wrap">
							<div class="load-text"><?php echo  esc_html__("Loading projects", 'montserrat'); ?></div>
							<div class="load-bar"></div>
						</div>
						<div class="ajax-loading-error">
							<div class="alert error">
								<div class="alert-message"><?php echo esc_html__('Something went wrong, please try again later or contact the site administrator', 'montserrat'); ?><span class="close-alert">X</span></div>
							</div>
						</div>
					</section>
				<?php else: ?>
					<div class="container">
						<section class="content projects-layout <?php echo $nz_projects_layout; ?> lazy nz-clearfix">
							<div class="projects-post projects-post-1 nz-clearfix"><?php include(NINZIO_ADDONS.'projects/content-projects-post.php'); ?></div>
							<div class="ajax-loading-wrap">
								<div class="load-text"><?php echo  esc_html__("Loading projects", 'montserrat'); ?></div>
								<div class="load-bar"></div>
							</div>
							<div class="ajax-loading-error">
							<div class="alert error">
								<div class="alert-message"><?php echo esc_html__('Something went wrong, please try again later or contact the site administrator', 'montserrat'); ?><span class="close-alert">X</span></div>
							</div>
						</section>
					</div>
				<?php endif ?>
			</div>
			<?php if ($nz_nav == "pagination"): ?>
				<div class="container">
					<?php
						if (!is_single()) {
							$big   = 99999999;
        					$total = (empty($projects_per_page)) ? $wp_query->max_num_pages : ceil($wp_query->found_posts/$projects_per_page);
        					if ($projects_per_page < $wp_query->found_posts) {
					            echo "<nav class=ninzio-navigation>";
					                echo paginate_links(array(
					                    'base'      => str_replace($big, '%#%', get_pagenum_link($big)),
					                    'format'    => '?paged=%#%',
					                    'total'     => $total,
					                    'current'   => max(1, get_query_var('paged')),
					                    'show_all'  => false,
					                    'end_size'  => 2,
					                    'mid_size'  => 3,
					                    'prev_next' => true,
					                    'prev_text' => '<span class="icon icon-arrow-left8"></span>',
					                    'next_text' => '<span class="icon icon-arrow-right8"></span>',
					                    'type'      => 'list'
					                ));
					            echo "</nav>";
					        }
						}
					?>
				</div>
			<?php elseif($nz_nav == "loadmore"): ?>
				<div class="container">
					<a id="projects-load-more" class="button button-normal grey_light full-true medium square animate-false anim-type-ghost hover-fill element-animate-false" href="#" target="_self" data-effect="none">
						<span class="txt">
							<?php echo esc_html__("Load more projects", 'montserrat');  ?>	
						</span>
						<span class="project-loader temp-hide">&nbsp;</span>
					</a>
				</div>
			<?php endif; ?>
		<?php elseif(is_single()): ?>
			<section class='content projects-layout nz-clearfix'>
				<?php include(NINZIO_ADDONS.'projects/content-projects-post.php'); ?>
			</section>
		<?php endif; ?>
	</div>
</div>