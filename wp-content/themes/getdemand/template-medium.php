<?php
/*
Template Name: Medium
*/
?>

<?php get_header();?>

<!-- Call global metaboxes -->
<?php
	global $medium;
	global $title;
	$title = $post->post_name;
	$cpg = get_post_meta(get_the_ID(), $medium->get_the_id(), TRUE);
?>

<div class="hero">
		      <div class="container">
		      	<div class="row">
		      		<div class="col-md-5">
		      			<?php echo "<img class='medium-icon img-responsive' src='".get_stylesheet_directory_uri().$cpg['medium-icon']."'/>"; ?>
		      		</div>
			        <div class="col-md-7 hero-copy">
			          <?php
			          		echo "<h2 itemprop='headline'>".$cpg['medium-headline']."</h2>";
							echo "<p itemprop='description'>".$cpg['medium-subheadline']."</p>";
		          	  ?>
			        </div><!-- /col-md-6 -->
		       	</div><!--row-->
      </div><!-- /container -->
</div><!-- /hero -->

<div class="cpg-icons">
	<div class="container">
    	<div class="row">
    		<h2>Learn how to plan and measure <span class="cpg-name">Food &amp; Drink</span> with purchase data</h2>
    		<p class="medium-description">Click any of the icons below to see examples.</p>
    		<div class="col-sm-2">
		          	<a href="#grocery" class="cpg-icon" data-toggle="tab"><img class="medium-icon img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cpg_grocery.svg" alt="print icon"></a>
		         	<h2 class="cpg-title" itemprop="headline">Food &amp; Drink</h2>
    		</div><!-- col-md-2-->
    		<div class="col-sm-2">
					<a href="#otc" class="cpg-icon" data-toggle="tab"><img class="medium-icon img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cpg_rx.svg" alt="print icon"></a>
		         	<h2 class="cpg-title" itemprop="headline">OTC</h2>
    		</div><!-- col-md-2-->
    		<div class="col-sm-2">
					<a href="#beauty" class="cpg-icon" data-toggle="tab"><img class="medium-icon img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cpg_beauty.svg" alt="print icon"></a>
		         	<h2 class="cpg-title" itemprop="headline">Health &amp; Beauty</h2>
    		</div><!-- col-md-2-->
    		<div class="col-sm-2">
					<a href="#adult" class="cpg-icon" data-toggle="tab"><img class="medium-icon img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cpg_adult_beverages.svg" alt="print icon"></a>
		         	<h2 class="cpg-title" itemprop="headline">Adult Beverages</h2>
    		</div><!-- col-md-2-->
    		<div class="col-sm-2">
					<a href="#household" class="cpg-icon" data-toggle="tab"><img class="medium-icon img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cpg_household.svg" alt="print icon"></a>
		         	<h2 class="cpg-title" itemprop="headline">Household Products</h2>
    		</div><!-- col-md-2-->
    	</div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /cpgs -->

<div class="inset">
	<div class="container">
		<div class="row">
			<div class="tab-content" id="target">
				<div class="tab-pane in active" id="grocery">
					<div class="row cpg plan">
						<h2>Target an audience segment in the <span class="cpg-name">Food &amp; Drink</span> category:</h2>
						<p class="medium-description">The example targets below utilize actual retail sales data from more than 60 million households to ensure that only relevant households are included in your media plan.</p>
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['grocery-creative-1-heading']."</h3>";
							echo "<p>".$cpg['grocery-creative-1-desc']."</p>";
							echo $cpg['grocery-creative-1-image'];?>
						</div><!-- /col-md-4 --> 
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['grocery-creative-2-heading']."</h3>";
							echo "<p>".$cpg['grocery-creative-2-desc']."</p>";
							echo "<img class='img-responsive' src='".$cpg['grocery-creative-2-image']."'./>";?>
						</div><!-- /col-md-4 -->
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['grocery-creative-3-heading']."</h3>";
							echo "<p>".$cpg['grocery-creative-3-desc']."</p>";
							echo "<img class='img-responsive' src='".$cpg['grocery-creative-3-image']."'./>";?>
						</div><!-- /col-md-4 -->
					</div><!-- /row-->
				</div><!-- /grocery -->
				<div class="tab-pane" id="otc">
					<div class="row cpg plan">
						<h2>Here's an example of <span class="cpg-name">OTC</span> targeting:</h2>
						<p class="medium-description">Only serve impressions  on NCS partners qualified by what the household bought over the last two years.</p>
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['otc-creative-1-heading']."</h3>";
							echo "<p>".$cpg['otc-creative-1-desc']."</p>";
							echo "<img class='img-responsive' src='".$cpg['otc-creative-1-image']."'./>";?>
						</div><!-- /col-md-4 --> 
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['otc-creative-2-heading']."</h3>";
							echo "<p>".$cpg['otc-creative-2-desc']."</p>";
							echo "<img class='img-responsive' src='".$cpg['otc-creative-2-image']."'./>";?>
						</div><!-- /col-md-4 -->
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['otc-creative-3-heading']."</h3>";
							echo "<p>".$cpg['otc-creative-3-desc']."</p>";
							echo "<img class='img-responsive' src='".$cpg['otc-creative-3-image']."'./>";?>
						</div><!-- /col-md-4 -->
					</div><!-- /row-->
				</div><!-- /otc -->
				<div class="tab-pane" id="beauty">
					<div class="row cpg plan">
						<h2>Show me an example of how to plan and measure <span class="cpg-name">Food &amp; Drink</span> with purchase data?</h2>
						<p class="medium-description">Only serve impressions  on NCS partners qualified by what the household bought over the last two years.</p>
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['beauty-creative-1-heading']."</h3>";
							echo "<p>".$cpg['beauty-creative-1-desc']."</p>";
							echo "<img class='img-responsive' src='".$cpg['beauty-creative-1-image']."'./>";?>
						</div><!-- /col-md-4 --> 
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['beauty-creative-2-heading']."</h3>";
							echo "<p>".$cpg['beauty-creative-2-desc']."</p>";
							echo $cpg['beauty-creative-2-image'];?>
						</div><!-- /col-md-4 -->
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['beauty-creative-3-heading']."</h3>";
							echo "<p>".$cpg['beauty-creative-3-desc']."</p>";
							echo "<img class='img-responsive' src='".$cpg['beauty-creative-3-image']."'./>";?>
						</div><!-- /col-md-4 -->
					</div><!-- /row-->
				</div><!-- /beauty -->
				<div class="tab-pane" id="adult">
					<div class="row cpg plan">
						<h2>Show me an example of how to plan and measure <span class="cpg-name">Food &amp; Drink</span> with purchase data?</h2>
						<p class="medium-description">Only serve impressions  on NCS partners qualified by what the household bought over the last two years.</p>
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['adult-creative-1-heading']."</h3>";
							echo "<p>".$cpg['adult-creative-1-desc']."</p>";
							echo "<img class='img-responsive' src='".$cpg['adult-creative-1-image']."'./>";?>
						</div><!-- /col-md-4 --> 
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['adult-creative-2-heading']."</h3>";
							echo "<p>".$cpg['adult-creative-2-desc']."</p>";
							echo "<img class='img-responsive' src='".$cpg['adult-creative-2-image']."'./>";?>
						</div><!-- /col-md-4 -->
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['adult-creative-3-heading']."</h3>";
							echo "<p>".$cpg['adult-creative-3-desc']."</p>";
							echo "<img class='img-responsive' src='".$cpg['adult-creative-3-image']."'./>";?>
						</div><!-- /col-md-4 -->
					</div><!-- /row-->
				</div><!-- /otc -->
				<div class="tab-pane" id="household">
					<div class="row cpg plan">
						<h2>Show me an example of how to plan and measure <span class="cpg-name">Food &amp; Drink</span> with purchase data?</h2>
						<p class="medium-description">Only serve impressions  on NCS partners qualified by what the household bought over the last two years.</p>
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['household-creative-1-heading']."</h3>";
							echo "<p>".$cpg['household-creative-1-desc']."</p>";
							echo "<img class='img-responsive' src='".$cpg['household-creative-1-image']."'./>";?>
						</div><!-- /col-md-4 --> 
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['household-creative-2-heading']."</h3>";
							echo "<p>".$cpg['household-creative-2-desc']."</p>";
							echo "<img class='img-responsive' src='".$cpg['household-creative-2-image']."'./>";?>
						</div><!-- /col-md-4 -->
						<div class="col-sm-4 creative">
							<?php echo "<h3 class='creative-heading'>".$cpg['household-creative-3-heading']."</h3>";
							echo "<p>".$cpg['household-creative-3-desc']."</p>";
							echo "<img class='img-responsive' src='".$cpg['household-creative-3-image']."'./>";?>
						</div><!-- /col-md-4 -->
					</div><!-- /row-->
				</div><!-- /beauty -->
			</div><!-- /tab-container-->
			<div class="row cpg measure">
				<h2>Measure your <span class="cpg-name">Food &amp; Drink</span> Campaign</h2>
				<p class="medium-description">Use NCS data to set measurement goals...and determine whether your campaign drove sales. </p>
				<div class="col-sm-4 creative">
					<?php echo "<img class='img-responsive' src='".$cpg['measure1-image']."'./>";
					echo "<h3 class='creative-heading'>".$cpg['measure1-headline']."</h3>";
					echo $cpg['measure1-description'];?>
				</div><!-- /col-md-4 -->
				<div class="col-sm-4 creative">
					<?php echo "<img class='img-responsive' src='".$cpg['measure2-image']."'./>";
					echo "<h3 class='creative-heading'>".$cpg['measure2-headline']."</h3>";
					echo $cpg['measure2-description'];?>
				</div><!-- /col-md-4 -->
				<div class="col-sm-4 creative">
					<?php echo "<img class='img-responsive' src='".$cpg['measure3-image']."'./>";
					echo "<h3 class='creative-heading'>".$cpg['measure3-headline']."</h3>";
					echo $cpg['measure3-description'];?>
				</div><!-- /col-md-4 -->
			</div><!-- /row-->
			<div class="row cpg results">
				<h2>Results Inform Your Next Buy</h2>
					<p class="medium-description">Since your campaign was successful in stealing share from Brands X and Y, optimize your next campaign’s segmentation strategy to specifically go after their vulnerable customers to further increase your brands market share:</p>
				<img class="chart img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/competitive_share_shift.png" alt="print icon">
				<div class="col-sm-6 creative">
					<h3>Original Target</h3>
					<p>Heavy buyers of the cookie category, and medium/light buyers of the Oreo Brand</p>
				</div><!-- /col-md-4 -->
				<div class="col-sm-6 creative">
					<h3>Informed Target</h3>
					<p>Light/medium buyers of Competitors X and Y.</p>
				</div><!-- /col-md-4 -->
			</div><!-- /row-->
			</div><!-- /grocery -->
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /inset -->
<div class="inset-blue">
    <div class="container">
    	<div class="row">
    	      	 	<div class="col-md-12 form">
			          <?php
					          $form = $cpg["form_code"];
							  echo "<h3>".$cpg['form_name']."</h3>";
							  echo "<p>".$cpg['form_desc']."</p>";
							  echo do_shortcode($form);
		          	  ?>
	          		</div><!-- /col-md-4 -->
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /inset -->


<div class="container">
	<div class="row medium-partners">
		<h2>Companies that Count On Us:</h2>
			<div class="col-sm-2">
				<h3>Partner</h3>
			</div><!-- /col-sm-2 -->
			<div class="col-sm-2">
				<h3>Partner</h2>
			</div><!-- /col-md-2 -->
			<div class="col-sm-2">
				<h3>Partner</h3>
			</div><!-- /col-sm-2 -->
			<div class="col-sm-2">
				<h3>Partner</h3>
			</div><!-- /col-sm-2 -->
			<div class="col-sm-2">
				<h3>Partner</h2>
			</div><!-- /col-sm-2 -->
			<div class="col-sm-2">
				<h3>Partner</h3>
			</div><!-- /col-sm-2 -->
	</div><!-- /row-->
        <div class="row case-studies">
        <h2><?php echo get_the_title(); ?> Case Studies</h2>
        <div class="col-md-4 case-study">
	          <?php
	          //$meta = get_post_meta(get_the_ID(), $case_studies->get_the_id(), TRUE);
			  echo "<h3 class='section-title'>".$cpg['name1']."</h3>";
			  echo "<p>".$cpg['description1']."</p>";
			  echo "<a class='pull-right' href='".$cpg['link1']."'>Read the Study »</a>";
	          ?>
        </div><!-- /col-md-4 -->
        <div class="col-md-4 case-study">
	          <?php
			  echo "<h3 class='section-title'>".$cpg['name2']."</h3>";
			  echo "<p>".$cpg['description2']."</p>";
			  echo "<a class='pull-right' href='".$cpg['link2']."'>Read the Study »</a>";
	          ?>
        </div><!-- /col-md-4 -->
        <div class="col-md-4 case-study">
	          <?php
			  echo "<h3 class='section-title'>".$cpg['name3']."</h3>";
			  echo "<p>".$cpg['description3']."</p>";
			  echo "<a class='pull-right' href='".$cpg['link3']."'>Read the Study »</a>";
	          ?>
        </div><!-- /col-md-4 -->
      </div><!-- /row -->
	</div>

<div class="container main loops">
  <div class="row">
    <div class="col-md-6 posts">
      	<h2 class="section-title">Recent Thoughts on <?php echo $title;?></h2>
		<?php if ( have_posts() ): ?>
			<?php $featured = new WP_Query("category_name=$title&showposts=3"); ?>
				<?php while ($featured->have_posts()) : $featured->the_post(); ?>
							<article>
								<?php the_post_thumbnail(); ?>
								<div class="entry-meta">
									<h2 class="blog-title" itemprop="headline"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
									<h4 class="post-meta"><?php the_category(' '); ?> | <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate itemprop="datePublished"><?php echo get_the_date(); ?></time> | By <span class="entry-author" itemprop="author"><?php the_author_posts_link(); ?></span></h4>
									<?php the_excerpt(); ?>
								</div>
							</article>
				<?php endwhile; ?>
			<?php else: ?>
			<h2>No posts to display</h2>
			<?php endif; ?>
    </div><!-- /col-md-6 -->
    <div class="col-md-6 press">
     	<h2 class="section-title">Recent Press on <?php echo $title;?></h2>
		<?php if ( have_posts() ):
				//$args = array( 'post_type' => 'ncs_press', 'category_name' => 'mobile', 'posts_per_page' => 10);
				$loop = new WP_Query(array( 'post_type' => 'ncs_press', 'category_name'=>$title, 'posts_per_page' => 5));
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<article class="entry-meta">
						<?php the_content(); ?>
					</article>
			<?php endwhile;
			else: ?>
			<h2>No posts to display</h2>
			<?php endif; ?>
    </div><!-- /col-md-6 -->
  </div><!-- /row -->
</div><!-- container -->


 <?php get_footer(); ?>