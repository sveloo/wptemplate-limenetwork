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
			    	<option value="1">Undergraduate</option>
					<option value="2">School leaver provisional</option>
					<option value="3">Graduate</option>
			    </select>

			    <select id="country">
		      		<option value="" disabled selected>Country</option>
		      		<option value="1">Australia</option>
		      		<option value="2">Aotearo/New Zealand</option>				      		
		    	</select>

			    <select id="state">
		      		<option value="" disabled selected>State</option>
		      		<option value="1">North Island - NZ</option>
		      		<option value="2">South Island - NZ</option>				      		
		      		<option value="3">Australian Capital Territory</option>				      		
		      		<option value="4">New South Wales</option>				      		
		      		<option value="5">Northern Territory</option>				      		
		      		<option value="6">Queensland</option>				      		
		      		<option value="7">South Australia</option>				      		
		      		<option value="8">Tasmania</option>				      		
		      		<option value="9">Victoria</option>				      		
		      		<option value="10">Western Australia</option>				      		
		    	</select>

			    <select id="specific-pathway">
		      		<option value="" disabled selected>Specific Indigenous Pathway</option>
		      		<option value="1">No</option>
		      		<option value="2">Yes</option>				      		
		    	</select>

			    <select id="umat">
		      		<option value="" disabled selected>Required to complete UMAT</option>
		      		<option value="1">No</option>
		      		<option value="2">Yes</option>				      		
		    	</select>					    

		    	<select id="gamsat">
		      		<option value="" disabled selected>Required to complete GAMSAT</option>
		      		<option value="1">No</option>
		      		<option value="2">Yes</option>				      		
		    	</select>

			    <select id="marks">
		      		<option value="" disabled selected>Entry excludes academic marks</option>
		      		<option value="1">No</option>
		      		<option value="2">Yes</option>				      		
		    	</select>

			    <select id="interview">
		      		<option value="" disabled selected>Entry excludes an interview</option>
		      		<option value="1">No</option>
		      		<option value="2">Yes</option>				      		
		    	</select>					    

		    	<select id="prerequisites">
		      		<option value="" disabled selected>Pre-requisites required for entry</option>
		      		<option value="1">No</option>
		      		<option value="2">Yes</option>				      		
		    	</select>

		    	<select id="prerequisites">
		      		<option value="" disabled selected>There is a preparation course</option>
		      		<option value="1">No</option>
		      		<option value="2">Yes</option>				      		
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

			        <tbody>
			          	<tr>
							<td><a href="##">Doctor of Medicine and Surgery (MChD)</a></td>
							<td>Australian National University (ANU)</td>
			          	</tr>

			          	<tr>
							<td><a href="##">The Bachelor of Medical Studies / Doctor of Medicine Program</a></td>
							<td>Bond University</td>
			          	</tr>

			          	<tr>
							<td><a href="##">Bachelor of Medicine Bachelor of Surgery (BMBS)</a></td>
							<td>Deakin University</td>
			          	</tr>

			          	<tr>
							<td><a href="##">Bachelor of Clinical Sciences, Doctor of Medicine (BClinSci MD)</a></td>
							<td>Flinders University SA</td>
			          	</tr>

			          	<tr>
							<td><a href="##">Doctor of Medicine (MD)</a></td>
							<td>Flinders University NT</td>
			          	</tr>

			          	<tr>
							<td><a href="##">Bachelor of Medical Science (BMedSci)</a></td>
							<td>Griffith University</td>
			          	</tr>

			          	<tr>
							<td><a href="##">Doctor of Medicine (MD)</a></td>
							<td>Griffith University</td>
			          	</tr>

			          	<tr>
							<td><a href="##">Bachelor of Medicine, Bachelor of Surgery (MBBS)</a></td>
							<td>James Cook University (JCU)</td>
			          	</tr>

			          	<tr>
							<td><a href="##">Bachelor of Medicine/ Bachelor of Surgery (MBBS) Undergraduate</a></td>
							<td>Monash University</td>
			          	</tr>					          						          						          						

			          	<tr>
							<td><a href="##">Doctor of Medicine and Surgery (MChD)</a></td>
							<td>Australian National University (ANU)</td>
			          	</tr>

			          	<tr>
							<td><a href="##">The Bachelor of Medical Studies / Doctor of Medicine Program</a></td>
							<td>Bond University</td>
			          	</tr>

			          	<tr>
							<td><a href="##">Bachelor of Medicine Bachelor of Surgery (BMBS)</a></td>
							<td>Deakin University</td>
			          	</tr>

			          	<tr>
							<td><a href="##">Bachelor of Clinical Sciences, Doctor of Medicine (BClinSci MD)</a></td>
							<td>Flinders University SA</td>
			          	</tr>

			          	<tr>
							<td><a href="##">Doctor of Medicine (MD)</a></td>
							<td>Flinders University NT</td>
			          	</tr>

			          	<tr>
							<td><a href="##">Bachelor of Medical Science (BMedSci)</a></td>
							<td>Griffith University</td>
			          	</tr>

			          	<tr>
							<td><a href="##">Doctor of Medicine (MD)</a></td>
							<td>Griffith University</td>
			          	</tr>

			          	<tr>
							<td><a href="##">Bachelor of Medicine, Bachelor of Surgery (MBBS)</a></td>
							<td>James Cook University (JCU)</td>
			          	</tr>

			          	<tr>
							<td><a href="##">Bachelor of Medicine/ Bachelor of Surgery (MBBS) Undergraduate</a></td>
							<td>Monash University</td>
			          	</tr>								          	          						          						          	
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