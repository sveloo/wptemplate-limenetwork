<?php get_header(); ?>

<!-- PAGE HEADER -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>

<!-- PAGE SECTION -->
<div class="section">
    <div class="container">
        <div class="row">
            <!-- CONTENT -->
            <div class="col s12">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php the_field('content'); ?>
                <?php endwhile; else: ?>
                    <h2>We could not find what you were looking for.</h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>