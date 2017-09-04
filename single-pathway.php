<?php get_header(); ?>

<div class="page-header center-align">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <h3>
            <?php 
                $term = get_field('university');
                if( $term ): ?>
                    <?php echo $term->name; ?>
            <?php endif; ?>
        </h3>
    </div>
</div>

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        
        <div class="section pathway-info">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h3>&nbsp;</h3>
                    	<table class="striped">    
					        <tbody>
                                <tr>
                                    <td style="width: 20%;"><strong>Location</strong></td>
                                    <td>
                                        <?php the_field('city'); ?>, 
                                        <?php if( get_field('aus_state') ): the_field('aus_state'); endif; ?>
                                        <?php if( get_field('nz_state') ): the_field('nz_state'); endif; ?>
                                        <?php the_field('country'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Entry level</strong></td>
                                    <td><?php the_field('entry_level'); ?></td>
                                </tr>  
                                <tr>
                                    <td><strong>Duration</strong></td>
                                    <td><?php the_field('duration'); ?></td>
                                </tr>                   
                                <tr>
                                    <td><strong>Important dates</strong></td>
                                    <td><?php the_field('imp_dates'); ?></td>
                                </tr>     
                                <tr>
                                    <td><strong>Indigenous entry pathway</strong></td>
                                    <td><?php the_field('iep_text'); ?></td>
                                </tr>                                               
					        </tbody>
					    </table>

                    </div>
                </div>
            </div>
        </div>

        <div class="section pathways-tabs">
            <div class="container">
                <div class="col s12">
                    <div class="row">
                        <div class="col s12">
                            <h3>Course Information</h3>
                            
                            <?php the_content(); ?>
                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php endwhile; endif; ?>
        
<?php get_footer(); ?>