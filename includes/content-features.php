<div class="section features">
    <div class="container">
        <div class="row">
            <div class="col s12 m4">
                <?php
                    $args = array(
                        'post_type' => 'newsletter',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'orderby' => 'post_date',
                        'order' => 'DESC'
                    );
                    $the_query = new WP_Query($args);
                ?>

                <?php if (have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                <div class="quicklinks">
                    <ul class="collection with-header orange-gradient">
                        <li class="collection-header"><h4>Newsletter: <?php the_title(); ?></h4></li>
                    </ul>
                </div>

                <div class="card-panel hoverable">
                       
                    <?php 
                        $image = get_field('image');
                        $size = 'full';
                        $file = get_field('file');
                    ?> 
                    <a href="<?php echo $file['url']; ?>" target="_blank"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="responsive-img"></a>
                    <?php endwhile; endif; ?>
                </div>
                
            </div>  

            <div class="col s12 m4">
                <div class="quicklinks">
                    <ul class="collection with-header">
                        <li class="collection-header"><h4><?php the_field('pdf_title', 'option'); ?></h4></li>
                    </ul>
                </div>
                <div class="card-panel hoverable">
                    <a href="<?php the_field('file', 'option'); ?>" target="_blank"><img src="<?php the_field('pdf_thumbnail', 'option'); ?>" class="responsive-img"></a>
                </div>
            </div>   

            <div class="col s12 m4">

                <div class="quicklinks">
                      <ul class="collection with-header">
                        <li class="collection-header"><h4>Quicklinks</h4></li>

                        <?php if( have_rows('quicklinks', 'option') ): ?>
                        <?php while( have_rows('quicklinks', 'option') ): the_row(); ?>
                        <?php    
                            $title = get_sub_field('title');
                            $link = get_sub_field('link');
                        ?>

                        <a href="<?php echo $link; ?>" class="collection-item"><?php echo $title; ?></a>

                        <?php endwhile; endif; ?>
                      </ul>           
                </div>

                <div class="quicklinks">
                    <ul class="collection with-header">
                        <li class="collection-header"><h4>Social</h4></li>
                        <li><a href=""><img class="social-logo" src="<?php echo get_template_directory_uri(); ?>/images/youtube.png"></a><a href=""><img class="social-logo" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"></a></li>
                    </ul>           
                </div>
            </div>    
        </div>
    </div>
</div>