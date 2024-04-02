<?php
/*
 * Template Name: Front Page Template
 */
?>

<?php get_header(); ?>
<div id="" <?php astra_primary_class(); ?>>
  <div class="custom-homepage-container">
    <section class="hero-block">
      <div class="container">
        <div class="hero-content">
          <div class="hero-text">
              <h1>Welcome to HyperLand</h1>
              <p>EverPark is spreading its wings all over the country. Now there are already 13 EverParks in Finland.</p>
              <div>
                <a href="#" class="button">Learn More</a>
                <a href="#youtube-video" class="button cta-button">Watch Video</a>
              </div>
          </div>
          <div class="hero-image">
              <img src="<?php echo get_stylesheet_directory_uri() . '/images/hero/image1.png'; ?>" class="image1">
              <img src="<?php echo get_stylesheet_directory_uri() . '/images/hero/image2.png'; ?>" class="image2">
              <img src="<?php echo get_stylesheet_directory_uri() . '/images/hero/image3.png'; ?>" class="image3">
              <img src="<?php echo get_stylesheet_directory_uri() . '/images/hero/image4.png'; ?>" class="image4">
          </div>
        </div>
      </div>
      <div class="image5">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/hero/image5.png'; ?>" alt="Your Image">
      </div>
    </section>

    <section class="container media-block">
      <div class="media-wrapper">
        <div class="youtube-video" id="youtube-video">
          <iframe src="https://www.youtube.com/embed/T75IKSXVXlc" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="media1">
          <img src="<?php echo get_stylesheet_directory_uri() . '/images/media1.png'; ?>" alt="Your Image">
        </div>
        <div class="media2">
          <img src="<?php echo get_stylesheet_directory_uri() . '/images/media2.png'; ?>" alt="Your Image">
        </div>
        <div class="media3">
          <img src="<?php echo get_stylesheet_directory_uri() . '/images/media3.png'; ?>" alt="Your Image">
        </div>
      </div>
    </section>

    <section class="container articles-block">
      <div class="posts">
      <?php
        // Get the three latest posts
        $latest_posts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'order' => 'ASC',
            'orderby' => 'date',
        ));

        // Check if there are posts
        if ($latest_posts->have_posts()) :
            while ($latest_posts->have_posts()) : $latest_posts->the_post();
        ?>
          <article class="article-pullup" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if (has_post_thumbnail()) : ?>
                <div class="entry-thumbnail">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                </div><!-- .entry-thumbnail -->
            <?php endif; ?>
            <header class="entry-header">
                <a href="<?php the_permalink(); ?>"><h5 class="entry-title"><?php the_title(); ?></h5></a>
            </header><!-- .entry-header -->
            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div><!-- .entry-content -->
            <p class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></p>
          </article><!-- #post-<?php the_ID(); ?> -->
        <?php
            endwhile;
            // Restore global post data
            wp_reset_postdata();
        else :
          // If no posts are found
          echo 'No posts found.';
      endif;
      ?>
    </div>
    <div class="posts-page-link">
      <a class="button" href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">
        <button>Read More</button>
      </a>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri() . '/images/posts1.png'; ?>" class="posts1">
    <img src="<?php echo get_stylesheet_directory_uri() . '/images/posts2.png'; ?>" class="posts2">
    </section>
  </div>
</div><!-- #primary -->