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
	        <div class="input-field col s12 m3">

		    	<select id="the_university_selecter">
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

			    <select id="the_entrylevel_selecter">
			    	<option value="" disabled selected>Entry Level</option>
						<?php
							$terms = get_terms('entry_level_tax');
							 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
							     foreach ( $terms as $term ) {
								    ?>
									 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
								   <?php
							     }
							 }
		    			?>	
			    </select>

			    <select id="the_country_selecter">
		      		<option value="" disabled selected>Country</option>
						<?php
							$terms = get_terms('country_tax');
							 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
							     foreach ( $terms as $term ) {
								    ?>
									 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
								   <?php
							     }
							 }
		    			?>			      		
		    	</select>

			    <select id="the_state_selecter">
		      		<option value="" disabled selected>State</option>
						<?php
							$terms = get_terms('state_tax');
							 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
							     foreach ( $terms as $term ) {
								    ?>
									 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
								   <?php
							     }
							 }
		    			?>				      		
		    	</select>

			    <select id="the_sip_selecter">
		      		<option value="" disabled selected>Specific Indigenous Pathway</option>
						<?php
							$terms = get_terms('sip_tax');
							 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
							     foreach ( $terms as $term ) {
								    ?>
									 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
								   <?php
							     }
							 }
		    			?>      		
		    	</select>

			    <select id="the_umat_selecter">
		      		<option value="" disabled selected>Required to complete UMAT</option>
						<?php
							$terms = get_terms('umat_tax');
							 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
							     foreach ( $terms as $term ) {
								    ?>
									 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
								   <?php
							     }
							 }
		    			?>		      		
		    	</select>					    

		    	<select id="the_gamsat_selecter">
		      		<option value="" disabled selected>Required to complete GAMSAT</option>
						<?php
							$terms = get_terms('gamsat_tax');
							 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
							     foreach ( $terms as $term ) {
								    ?>
									 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
								   <?php
							     }
							 }
		    			?>				      		
		    	</select>

			    <select id="the_marks_selecter">
		      		<option value="" disabled selected>Entry excludes academic marks</option>
						<?php
							$terms = get_terms('marks_tax');
							 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
							     foreach ( $terms as $term ) {
								    ?>
									 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
								   <?php
							     }
							 }
		    			?>				      		
		    	</select>

			    <select id="the_interview_selecter">
		      		<option value="" disabled selected>Entry excludes an interview</option>
						<?php
							$terms = get_terms('interview_tax');
							 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
							     foreach ( $terms as $term ) {
								    ?>
									 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
								   <?php
							     }
							 }
		    			?>				      		
		    	</select>					    

		    	<select id="the_prereq_selecter">
		      		<option value="" disabled selected>Pre-requisites required for entry</option>
						<?php
							$terms = get_terms('prereq_tax');
							 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
							     foreach ( $terms as $term ) {
								    ?>
									 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
								   <?php
							     }
							 }
		    			?>				      		
		    	</select>

		    	<select id="the_prep_selecter">
		      		<option value="" disabled selected>There is a preparation course</option>
						<?php
							$terms = get_terms('prep_tax');
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
			    		<a id="the_search" class="waves-effect waves-light btn btn-purple"><i class="material-icons"></i>Search</a>
					</div>
					<div class="col s6">
						<a id="the_reset" class="waves-effect waves-light btn btn-purple"><i class="material-icons"></i>Reset</a>
					</div>
		    	</div>

			</div>


            <div class="col s12 m9">
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

<script>

	$(document).ready(function(){

		// PATHWAYS FILTERS
		function filterPathways(){

			var the_university_filter = $('#the_university_selecter').val();
			var the_entrylevel_filter = $('#the_entrylevel_selecter').val();
			var the_country_filter = $('#the_country_selecter').val();
			var the_state_filter = $('#the_state_selecter').val();
			var the_sip_filter = $('#the_sip_selecter').val();
			var the_umat_filter = $('#the_umat_selecter').val();
			var the_gamsat_filter = $('#the_gamsat_selecter').val();
			var the_marks_filter = $('#the_marks_selecter').val();
			var the_interview_filter = $('#the_interview_selecter').val();
			var the_prereq_filter = $('#the_prereq_selecter').val();
			var the_prep_filter = $('#the_prep_selecter').val();
			

			$('#results').html('');
			$('#results').html('<tr><td colspan="5" class="thinking"><img src="/wp-content/themes/limenetwork/images/ajax-spinner.gif" /></td></tr>');

			// AJAX CALL
			var data = {
				action: 'pathways_filter',
				send_the_university_filter : the_university_filter,
				send_the_entrylevel_filter : the_entrylevel_filter,
				send_the_country_filter : the_country_filter,
				send_the_state_filter : the_state_filter,
				send_the_sip_filter : the_sip_filter,
				send_the_umat_filter : the_umat_filter,
				send_the_gamsat_filter : the_gamsat_filter,
				send_the_marks_filter : the_marks_filter,
				send_the_interview_filter : the_interview_filter,
				send_the_prereq_filter : the_prereq_filter,
				send_the_prep_filter : the_prep_filter,
				
			};

			// RESPONSE
			jQuery.post(ajaxurl, data, function(response) {
				$('#results').html('');
				$('#results').html(response);

				if(!$.trim(response)){
					$('#results').html('<tr><td colspan="5" class="thinking">We could not find any pathways, please try again.</td></tr>');
				}

			});

		}

		$('#the_search').click(function(){
			filterPathways();
		});

		$('#the_reset').click(function(){
			$('#the_university_selecter').val('');
			$('#the_entrylevel_selecter').val('');
			$('#the_country_selecter').val('');
			$('#the_state_selecter').val('');
			$('#the_sip_selecter').val('');
			$('#the_umat_selecter').val('');
			$('#the_gamsat_selecter').val('');
			$('#the_marks_selecter').val('');
			$('#the_interview_selecter').val('');
			$('#the_prereq_selecter').val('');
			$('#the_prep_selecter').val('');
			$('select').material_select();
		})

		// $(document).keypress(function(event){

		// var keycode = (event.keyCode ? event.keyCode : event.which);
		// 	if(keycode == '13'){
		// 		resourcehubFilters();
		// 	}

		// });

	});

</script>

<?php get_footer(); ?>