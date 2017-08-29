<?php get_header(); ?>


<div class="page-header center-align">
	<div class="container">
  		<h1><?php the_title(); ?></h1>
    </div>
</div>

<div class="section resource-info">
    <div class="container">
        <div class="row">
            <div class="col s12">

            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            	<h2>Resource Information</h2>
            	<table class="striped">
			        <tbody>
		        		<tr>
			            	<td><strong>Year</strong></td>
			            	<td><?php the_field('year'); ?></td>
			          	</tr>
			          	<tr>
			            	<td><strong>Author(s)</strong></td>
			            	<td><?php the_field('author'); ?></td>
			          	</tr>
			          	<tr>
			            	<td><strong>Topic(s)</strong></td>
			            	<td>
                                <?php
                                    $terms = get_field('topic');
                                    if( $terms ):
                                        foreach( $terms as $term ):
                                            echo $term->name; echo ', ';
                                        endforeach;
                                    endif;
                                ?>
                            </td>
			          	</tr>					          	
			          	<tr>
			            	<td><strong>Book/Journal</strong></td>
			            	<td><?php the_field('bookjournal'); ?></td>
			          	</tr>					          	
			          	<tr>
			            	<td><strong>Volume and Page Info</strong></td>
			            	<td><?php the_field('volpage'); ?></td>
			          	</tr>			
			          	<tr>
			            	<td><strong>Resource Type</strong></td>
			            	<td>

                                <?php
                                    $terms = get_field('resourcetype');
                                    if( $terms ):
                                        foreach( $terms as $term ):
                                            echo $term->name;
                                        endforeach;
                                    endif;
                                ?>

                            </td>
			          	</tr>			          	
			          	<tr>
			            	<td><strong>Online Link</strong></td>
			            	<td><a href="<?php the_field('link'); ?>" target="_blank"><?php the_field('link'); ?></a></td>
			          	</tr>
			        </tbody>
			    </table>

				<h2>Abstract</h2>

				<?php the_content(); ?>

            <?php endwhile; endif; ?>


            </div>
        </div>
    </div>
</div>

        
<?php get_footer(); ?>