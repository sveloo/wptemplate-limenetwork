<?php // Template Name: Pathways ?>
 
<?php get_header(); ?>

<div class="page-header center-align">
    <h1><?php the_title(); ?></h1>
</div>
   
<div class="section">
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
    </div>
</div>

<div class="section">
    <div class="container">

        <div class="row">
	        <div class="input-field col s12 m4">

			    <select id="entry-level">
			    	<option value="" disabled selected>Entry Level</option>
			    	<?php
						$field_key = "field_59acb98c4db07";
						$field = get_field_object($field_key);
						
						if( $field )
						{
					    
					        foreach( $field['choices'] as $k => $v )
					        {
					            echo '<option value="' . $k . '">' . $v . '</option>';
					        }

						}
					?>
			    </select>

			    <select id="country">
		      		<option value="" disabled selected>Country</option>
			    	<?php
						$field_key = "field_59acac7f13a01";
						$field = get_field_object($field_key);
						
						if( $field )
						{
					    
					        foreach( $field['choices'] as $k => $v )
					        {
					            echo '<option value="' . $k . '">' . $v . '</option>';
					        }

						}
					?>			      		
		    	</select>

			    <select id="state">
		      		<option value="" disabled selected>State</option>
			    	<?php
						$field_key = "field_59acb05751e54";
						$field = get_field_object($field_key);
						
						if( $field )
						{
					    
					        foreach( $field['choices'] as $k => $v )
					        {
					            echo '<option value="' . $k . '">' . $v . '</option>';
					        }

						}
					?>	
					<?php
						$field_key = "field_59acb0cccda21";
						$field = get_field_object($field_key);
						
						if( $field )
						{
					    
					        foreach( $field['choices'] as $k => $v )
					        {
					            echo '<option value="' . $k . '">' . $v . '</option>';
					        }

						}
					?>				      		
		    	</select>

			    <select id="specific-pathway">
		      		<option value="" disabled selected>Specific Indigenous Pathway</option>
					<?php
						$field_key = "field_59acb1b947ece";
						$field = get_field_object($field_key);
						
						if( $field )
						{
					    
					        foreach( $field['choices'] as $k => $v )
					        {
					            echo '<option value="' . $k . '">' . $v . '</option>';
					        }

						}
					?>			      		
		    	</select>

			    <select id="umat">
		      		<option value="" disabled selected>Required to complete UMAT</option>
					<?php
						$field_key = "field_59acb442fea95";
						$field = get_field_object($field_key);
						
						if( $field )
						{
					    
					        foreach( $field['choices'] as $k => $v )
					        {
					            echo '<option value="' . $k . '">' . $v . '</option>';
					        }

						}
					?>				      		
		    	</select>					    

		    	<select id="gamsat">
		      		<option value="" disabled selected>Required to complete GAMSAT</option>
					<?php
						$field_key = "field_59acb5c0ef356";
						$field = get_field_object($field_key);
						
						if( $field )
						{
					    
					        foreach( $field['choices'] as $k => $v )
					        {
					            echo '<option value="' . $k . '">' . $v . '</option>';
					        }

						}
					?>					      		
		    	</select>

			    <select id="marks">
		      		<option value="" disabled selected>Entry excludes academic marks</option>
					<?php
						$field_key = "field_59acb68ba82a8";
						$field = get_field_object($field_key);
						
						if( $field )
						{
					    
					        foreach( $field['choices'] as $k => $v )
					        {
					            echo '<option value="' . $k . '">' . $v . '</option>';
					        }

						}
					?>					      		
		    	</select>

			    <select id="interview">
		      		<option value="" disabled selected>Entry excludes an interview</option>
					<?php
						$field_key = "field_59acb69ca82a9";
						$field = get_field_object($field_key);
						
						if( $field )
						{
					    
					        foreach( $field['choices'] as $k => $v )
					        {
					            echo '<option value="' . $k . '">' . $v . '</option>';
					        }

						}
					?>				      		
		    	</select>					    

		    	<select id="prerequisites">
		      		<option value="" disabled selected>Pre-requisites required for entry</option>
					<?php
						$field_key = "field_59acb6a7a82aa";
						$field = get_field_object($field_key);
						
						if( $field )
						{
					    
					        foreach( $field['choices'] as $k => $v )
					        {
					            echo '<option value="' . $k . '">' . $v . '</option>';
					        }

						}
					?>					      		
		    	</select>

		    	<select id="prerequisites">
		      		<option value="" disabled selected>There is a preparation course</option>
					<?php
						$field_key = "field_59acb6b6a82ab";
						$field = get_field_object($field_key);
						
						if( $field )
						{
					    
					        foreach( $field['choices'] as $k => $v )
					        {
					            echo '<option value="' . $k . '">' . $v . '</option>';
					        }

						}
					?>					      		
		    	</select>

		    	<select id="university">
		      		<option value="" disabled selected>University</option>
						<?php
							$terms = get_terms('uni_tax');
							 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
							     foreach ( $terms as $term ) {
								    ?>
									 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
								   <?php
							     }
							 }
		    			?>			      		
		    	</select>		

		    	<div class="row">
		    		<div class="col s6">
			    		<a class="waves-effect waves-light btn btn-purple"><i class="material-icons"></i>Search</a>
					</div>
					<duv class="col s6">
						<a class="waves-effect waves-light btn btn-purple"><i class="material-icons"></i>Reset</a>
					</duv>
		    	</div>

			</div>


            <div class="col s12 m8">
			     <table class="striped resources-results">
			        <thead>
			         	<tr>
			              <th>Pathway</th>
			              <th>University</th>

			          	</tr>
			        </thead>

			        <tbody id="results">
			        <!-- AJAX! -->

		            <!-- INITIAL STATE -->

	               	<?php

	                   	global $post;

						$args = array(
		                    'post_type' => 'pathway',
		                    'post_status' => 'publish',
		                    'posts_per_page' => -1,
		                    'order' => 'DESC'
						);

						$myposts = get_posts( $args );

						foreach ($myposts as $post) : start_wp();

					?>	
			          	<tr>
							<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
							<td>            
							<?php 
				                $term = get_field('university');
				                if( $term ): ?>
				                    <?php echo $term->name; ?>
				            <?php endif; ?>
				            	
				            </td>
			          	</tr>

					<?php

						endforeach;

						rewind_posts();

					?>		          								          	          						          						          	
			        </tbody>
			    </table>
        
           	</div>
        </div>
<!-- Pagination -->
        <div class="row">
        	<div class="col s12 center-align">
                <ul class="pagination">
				    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
				    <li class="active"><a href="#!">1</a></li>
				    <li class="waves-effect"><a href="#!">2</a></li>
				    <li class="waves-effect"><a href="#!">3</a></li>
				    <li class="waves-effect"><a href="#!">4</a></li>
				    <li class="waves-effect"><a href="#!">5</a></li>
				    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
				</ul>
        	</div>
        </div>
    </div>
</div>


<?php get_footer(); ?>