<?php get_header(); ?>


<section class="wrapper">
	<div class="container-620 search-page">
		<?php
		$s=get_search_query();
		$args = array(
		                's' =>$s
		            );
		    // The Query
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ):
		        _e("<h4>Search Results for: ".get_query_var('s')."</h4><br />");
		    ?>
		    <div class="row">
		    	
		    
		        <?php while ( $the_query->have_posts() ):
		           $the_query->the_post();
		                 ?>	
		                 <div class="row">
	                 		<h5><?php the_title(); ?></h5>
		                 	<div class="row">
		                 		<?php echo trimText(get_the_content(), '...', 150) ?>
		                 	</div>

							<div class="row">
								<a class="small-but" href="<?php the_permalink(); ?>">Read More</a>
							</div>
		                 </div>
		         <?php endwhile; ?>
		<?php else: ?>         
		        <h4>Nothing Found</h4>
		        <div class="alert alert-info">
		          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
		        </div>
		<?php endif; ?>
		</div>
	</div>
</section>


<?php include (get_stylesheet_directory() . '/sub-footer.php'); ?>

<?php get_footer(); ?>