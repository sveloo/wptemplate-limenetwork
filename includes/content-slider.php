<!-- Slick Slider -->
<div class="hero center-align">
    <div class="slick-slider">

        <?php
            $args = array(
                'post_type' => 'slide',
                'post_status' => 'publish',
                'posts_per_page' => -1
            );
            $the_query = new WP_Query($args);
        ?>
        
        <?php if (have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

        <!-- Slide -->
        <div>
            <a href="<?php the_field('link');?>">
            <?php 
                $image = get_field('image');
                $size = 'full';
            ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="responsive-img">
                <h3><?php the_title() ?></h3>
            </a>
        </div>

         <?php endwhile; endif; ?>
    
    </div>
</div>