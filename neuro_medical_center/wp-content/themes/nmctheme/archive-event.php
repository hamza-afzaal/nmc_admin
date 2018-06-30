<?php get_header() ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title">
                Archive: Events
            </h1>
            <div class="page-banner__intro">
                <p>All related Events and History.</p>
            </div>
        </div>  
    </div>

    <div class="container container--narrow page-section">
        <?php 
            while(have_posts()){
                the_post();
        ?>

        <div class="event-summary">
        <a class="event-summary__date t-center" href="#">
          <span class="event-summary__month"><?php $dateToday = new DateTime(get_field('event_date'));
          echo $dateToday->format('M') ?></span>
          <span class="event-summary__day"><?php echo $dateToday->format('d') ?></span>  
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>
          <p><?php 
          if(has_excerpt()){
            echo get_the_excerpt();
          }
          else{
            echo wp_trim_words(get_the_content(),28);
          } 
          ?> <a href="<?php the_permalink() ?>" class="nu gray">Learn more</a></p>
        </div>
      </div>
        <?php 
        }
        echo paginate_links();
        ?>
        <hr class="section-break">
        <p>To see the past events, <a href="<?php echo site_url('past-events') ?>">Click here to view them.</a></p>
    </div>

<?php get_footer(); ?>