<?php // Template Name: Resources Hub ?>
 
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
	        <div class="input-field col s12">
	         	<input id="input_text" placeholder="Search using resource title, author, year, keywords. You can also use the filters below" id="search terms" type="text">
	         	<label for="search terms">Search terms</label>
	        </div>

	    </div>

	    <div class="row">
			<div class="input-field col s5">
			    <select id="the_topic_selecter" multiple>
			    	<option value="" disabled selected>You can filter by topic</option>
						<?php
							$terms = get_terms('topic_tax');
							 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
							     foreach ( $terms as $term ) {
								    ?>
									 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
								   <?php
							     }
							 }
		    			?>
			    </select>
			    <label>Topic</label>
			</div>
			<div class="input-field col s5">
			    <select id="the_resourcetype_selecter" multiple>
		      		<option value="" disabled selected>Or by resource type</option>
						<?php
							$terms = get_terms('resource_tax');
							 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
							     foreach ( $terms as $term ) {
								    ?>
									 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
								   <?php
							     }
							 }
		    			?>
		    	</select>
		    	<label>Resource type</label>
			</div>
	        <div class="col s2">
	        	<a id="the_search" class="waves-effect waves-light btn btn-purple"><i class="material-icons"></i>Search</a>
	        </div>
        </div>

        <div class="row">
		     <table class="striped resources-results">
		        <thead>
		         	<tr>
		              <th>Title</th>
		              <th>Author(s)</th>
		              <th>Topic</th>
		              <th>Resource type</th>
		          	</tr>
		        </thead>

		        <tbody id="results">
		        <!-- AJAX! -->

	            <!-- INITIAL STATE -->

               <?php

                   	global $post;

					$args = array(
	                    'post_type' => 'resource',
	                    'post_status' => 'publish',
	                    'posts_per_page' => 10,
	                    'order' => 'DESC'
					);

					$myposts = get_posts( $args );

					foreach ($myposts as $post) : start_wp();

				?>	        
		          	<tr>
						<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
						<td><?php echo the_field('author'); ?></td>
						<td>
							<!-- GET ACF TAXONOMY -->
							<?php

								$terms = get_field('topic');

								if( $terms ):
								foreach( $terms as $term ):

									 echo $term->name; echo ' ';

								 endforeach;

							endif; ?>

						</td>
						<td><span class="new badge" data-badge-caption="

                                <?php
                                    $terms = get_field('resource_type');
                                    if( $terms ):
                                        foreach( $terms as $term ):
                                            echo $term->name;
                                        endforeach;
                                    endif;
                                ?>

						"></span></td>
		          	</tr>		

					<?php

						endforeach;

						rewind_posts();

					?>

		        </tbody>
		      </table>
    
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

		// RESOURCE HUB FILTERS
		function filterResources(){
			var the_topic_filter = $('#the_topic_selecter').val();
			var the_resourcetype_filter = $('#the_resourcetype_selecter').val();

			$('#results').html('');
			$('#results').html('<tr><td colspan="5" class="thinking"><img src="/wp-content/themes/limenetwork/images/ajax-spinner.gif" /></td></tr>');

			// AJAX CALL
			var data = {
				action: 'resourcehub_filter',
				send_the_topic_filter : the_topic_filter,
				send_the_resourcetype_filter : the_resourcetype_filter,
			};

			// RESPONSE
			jQuery.post(ajaxurl, data, function(response) {
				$('#results').html('');
				$('#results').html(response);

				if(!$.trim(response)){
					$('#results').html('<tr><td colspan="5" class="thinking">We could not find any resources, please try again.</td></tr>');
				}

			});

		}

		$('#the_search').click(function(){
			filterResources();
		});

		// $(document).keypress(function(event){

		// var keycode = (event.keyCode ? event.keyCode : event.which);
		// 	if(keycode == '13'){
		// 		resourcehubFilters();
		// 	}

		// });

	});

</script>

<?php get_footer(); ?>