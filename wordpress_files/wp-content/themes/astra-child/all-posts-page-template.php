<?php
/*
 * Template Name: All Posts
 */
?>
<?php
/*
 * Template Name: All Posts
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <h1>All Posts</h1>
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1 // Display all posts
            );
            $posts_query = new WP_Query($args);
            if ($posts_query->have_posts()) :
                while ($posts_query->have_posts()) : $posts_query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'No posts found.';
            endif;
            ?>
        </div><!-- .container -->
    </main><!-- #main -->
</div><!-- #primary -->