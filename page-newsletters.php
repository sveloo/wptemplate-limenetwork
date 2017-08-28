<?php
/*
Template Name: Newsletters
*/
?>

<?php get_header(); ?>

<div class="page-header center-align">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</div>

<div class="section newsletters">
    <div class="container">

        <div class="row">
            <div class="col s12">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; else: ?>
                    <h2>You can add content here.</h2>
                    <h3>By editing the page and using the content area box.</h3>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <?php
                $args = array(
                    'post_type' => 'newsletter',
                    'post_status' => 'publish',
                    'posts_per_page' => -1
                );
                $the_query = new WP_Query($args);
            ?>
                
            <?php $i = 0; ?>
            <?php if (have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <?php if($i % 6 == 0) { echo '<div class="clearfix"></div>'; } ?>

            <div class="col s4 m2">
                <div class="card hoverable"">
                    <div class="card-image">
                        <?php 
                            $image = get_field('image');
                            $size = 'full';
                        ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="responsive-img">
                        
                        <?php $file = get_field('file'); ?>
                        <a class="btn-floating halfway-fab waves-effect waves-light btn-purple" href="<?php echo $file['url']; ?>" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?php the_title() ?></span>
                        <p class="postion"><?php the_field('monthyear'); ?></p>
                    </div>
                </div>
            </div>

            <?php $i++; endwhile; endif; ?>
        
        </div>
    </div>
</div>

<?php get_footer(); ?>