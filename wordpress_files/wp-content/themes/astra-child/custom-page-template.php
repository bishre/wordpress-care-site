<?php
/*
 * Template Name: Custom Page Template
 */
?>
<?php get_header(); ?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h1><?php the_title(); ?></h1>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post-<?php the_ID(); ?> -->
                <?php endwhile; ?>
            </div><!-- .col-md-8 -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .content -->

