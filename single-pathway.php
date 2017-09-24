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
                                        <?php 
                                            $term = get_field('state');
                                            if( $term ): ?>
                                                <?php echo $term->name; ?>
                                        <?php endif; ?>
                                        <?php 
                                            $term = get_field('country');
                                            if( $term ): ?>
                                                <?php echo $term->name; ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Entry level</strong></td>
                                    <td>
                                        <?php 
                                            $term = get_field('entry_level');
                                            if( $term ): ?>
                                                <?php echo $term->name; ?>
                                        <?php endif; ?>                                            
                                    </td>
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