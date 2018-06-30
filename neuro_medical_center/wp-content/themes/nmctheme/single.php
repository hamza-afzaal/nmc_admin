<!--Handles single blog posts-->

<?php
get_header();
    while(have_posts()){
        the_post();
        ?>

		<div class="container-fluid">
		<div class="row header--sub-title">
			<div class="header--sub-background" style="background:url('<?php echo get_theme_file_uri('images/sub-header.png') ?>') no-repeat;background-size: cover;"></div>
			<div class="col-6" style="position:relative;">
				<div class="header--sub-title-text-area">
					<div style="position: relative;" class="title--text-box">
						<h1><?php the_title() ?></h1>
						<h5>Description goes here.</h5>
					</div>
				</div>
			</div>
			<!-- <div class="header--sub-breadcrumb">
				<div class="btn-group" role="group" aria-label="Basic example">
				  <button type="button" class="btn btn-secondary btn-lg"><i class="fas fa-home"></i> Blog Home</button>
				  <div class="header--sub-breadcrumb-desc">Lorel ipsum der amet.</div>
				</div>
			</div> -->
		</div>
	</div>
        <!-- <div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>);"></div>
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title"><?php the_title() ?></h1>
                <div class="page-banner__intro">
                   <p>Blog Description</p>
                </div>
            </div>  
        </div> -->


        <div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-xs-8 col-md-8 col-lg-8">
				<!-- Single blog post mini statement -->
					<div class="row">
						<div class="col-12">
							<div>
								<img src="<?php echo the_field('featured_image')?>" width="100%"/>
								<p class="post--category-list"><a href="#"><?php echo get_the_category_list(', ') ?></a></p>
							</div>
							<div class="blog--section-view">
								<a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
								<p class="blog--border-separator"><p><?php echo get_the_time('F d, Y') ?> / by <?php the_author_posts_link() ?></p>
							</div>
							<discover_pingback_server_uri class="blog--description-text">
                                <?php echo get_the_content() ?>
							</discover_pingback_server_uri>
							<div class="row post--author-block">
								<div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center">
									<img src="<?php echo get_avatar_url(get_the_author_ID()) ?>" height="100%" style="border-radius:50%;"/>
								</div>
								<div class="col-12 col-sm-12 col-md-10 col-lg-10">
									<h4 class="post--author-title">
                                    Author: <?php the_author_posts_link(); ?>
								</div>
							</div>
							<br/>
						</div>
					</div>
			</div>

			<!-- side display menu data  -->
			<div class="col-12 col-sm-12 col-xs-4 col-md-4 col-lg-4">
				<!-- side panel for feeds and search -->
				<div class="input-group rcontent--search-box">
					<input type="text" class="form-control" placeholder="type any search item..." aria-label="Recipient's username" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-primary" type="button">Search</button>
					</div>
				</div>
				<!-- recent posts columns data -->
				<div class="rcontent--list-with-border">
					<h3>Recent Posts</h3>
					<ul>
						<li><a href="#">Recent post data goes here</a></li>
						<li><a href="javascript:void(0);">Recent post data goes here</a></li>
						<li><a href="javascript:void(0);">Recent post data goes here</a></li>
						<li><a href="javascript:void(0);">Recent post data goes here</a></li>
					</ul>
				</div>

				<div class="rcontent--list-with-arrow">
					<h3>Archives</h3>
					<ul>
                    <?php 
                        wp_get_archives(array(
                            'type'=>'monthly', 
                            'show_post_count'=>true, 
                            'limit'=>5, 
                            'post_type'=>'post', 
                            'format'=>'custom',
                            'before'=> '</li>
                            <li><a class="rcontent--list-with-arrow-a"the_permalink()">',
                            'after'=>'</a></li>'
                        ));
                        ?>
					</ul>
				</div>


                <div class="rcontent--list-with-arrow">
					<h3>Categories</h3>
					<ul>
                    <?php 
                        wp_list_categories(array(
                            'orderby'=>'name',
                            'title_li'=>NULL
                        ))
                        ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- End of blog row -->

	</div>

	<?php 
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	?>

<!-- <?php echo do_shortcode( '[contact-form-7 id="56" title="Contact form 1"]'/*'[wpforms id="58"]'*/ ); ?> -->


        
        <?php }
        get_footer();
        ?>


                <!-- <div class="container container--narrow page-section">
            <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog') ?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home</a> <span class="metabox__main">Posted by <?php the_author_posts_link();?> on <?php the_time('n-j-y'); ?> in <?php echo get_the_category_list(', '); ?></span></p>
            </div>
            <?php the_content() ?>
        </div> -->