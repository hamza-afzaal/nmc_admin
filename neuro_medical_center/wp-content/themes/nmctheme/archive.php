<?php get_header() ?>


<div class="container-fluid">
		<div class="row header--sub-title">
			<div class="header--sub-background" style="background:url('<?php echo get_theme_file_uri('images/sub-header.png') ?>') no-repeat;background-size: cover;"></div>
			<div class="col-6" style="position:relative;">
				<div class="header--sub-title-text-area">
					<div style="position: relative;" class="title--text-box">
						<h1><?php 
                                the_archive_title(); 
                            ?></h1>
						<h5><?php the_archive_description() ?></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-sm-12 col-xs-8 col-md-8 col-lg-8">
                <!-- Single blog post mini statement -->

                <?php 
                while(have_posts()){
                    the_post();
                    ?>
                    <div class="row blog--section-padding-10">
                        <div class="col-5">
                            <a href="<?php the_permalink() ?>"><img src="<?php the_field('featured_image') ?>" width="100%" /></a>
                        </div>
                        <div class="col-7">
                            <div class="blog--sm-section-view">
                                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                <p><?php 
                                    if(has_excerpt()){
                                        the_excerpt();
                                    }
                                    else{
                                        echo wp_trim_words(get_the_content(), 20);
                                    }
                                 ?></p>
                                <p class="blog--sm-border-separator"><a href="<?php the_permalink(); ?>">(More..) &raquo;</a></p>
                                <p><?php the_time('F d, Y') ?> / by <?php the_author_posts_link();?> in <?php echo get_the_category_list(', '); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php 
                }
                echo paginate_links();
                ?>
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
                        <li><a class="rcontent--list-with-border-a" href="#">Recent post data goes here</a></li>
                        <li><a class="rcontent--list-with-border-a" href="javascript:void(0);">Recent post data goes here</a></li>
                        <li><a class="rcontent--list-with-border-a" href="javascript:void(0);">Recent post data goes here</a></li>
                        <li><a class="rcontent--list-with-border-a" href="javascript:void(0);">Recent post data goes here</a></li>
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

                <div class="rcontent--list-with-arrow">
                    <h3>Categories</h3>
                    <ul>
                    <?php 
                        $categories = get_categories();
                        $count = 0;
                        foreach($categories as $category){
                            echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>