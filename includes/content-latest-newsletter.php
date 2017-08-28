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