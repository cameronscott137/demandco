<!-- Metaboxes for Admin About Page -->

<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#header">Page Header</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="header" class="panel-collapse collapse">
            <div class="panel-body">
					<p>
						<input type="text" name="<?php $metabox->the_name('heading-title'); ?>" value="<?php $metabox->the_value('heading-title'); ?>"/>
						<span>Heading</span>
					</p>
				 
					<p>
						<input type="text" name="<?php $metabox->the_name('heading-description'); ?>" value="<?php $metabox->the_value('heading-description'); ?>"/>
						<span>Subheading</span>
					</p>
          </div><!-- /panel-body -->
      </div><!-- /collapseHeader -->
  </div><!-- /panel -->

	<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#violator">Violator #1</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="violator" class="panel-collapse collapse">
            <div class="panel-body">
				<p>
					<input type="text" name="<?php $metabox->the_name('violator-title'); ?>" value="<?php $metabox->the_value('violator-title'); ?>"/>
					<span>Heading</span>
				</p>

				<p>
					<?php $metabox->the_field('violator-description'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="5"><?php $metabox->the_value(); ?></textarea>
					<span>Subheading</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('violator-btn'); ?>" value="<?php $metabox->the_value('violator-btn'); ?>"/>
					<span>Button Text</span>
				</p>

          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->

	<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#tradigital">What Is Tradigital?</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="tradigital" class="panel-collapse collapse">
            <div class="panel-body">
				<p>
					<input type="text" name="<?php $metabox->the_name('tradigital-title'); ?>" value="<?php $metabox->the_value('tradigital-title'); ?>"/>
					<span>Heading</span>
				</p>

				<p>
					<?php $metabox->the_field('tradigital-description'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="5"><?php $metabox->the_value(); ?></textarea>
					<span>Subheading</span>
				</p>

				<hr>

				<label>Column #1</label>

				<p>
					<input type="text" name="<?php $metabox->the_name('tradigital-col1-stat'); ?>" value="<?php $metabox->the_value('tradigital-col1-stat'); ?>"/>
					<span>Stat</span>
				</p>

				<p>
					<?php $metabox->the_field('tradigital-col1-desc'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="5"><?php $metabox->the_value(); ?></textarea>
					<span>Stat Explanation</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('tradigital-col1-link'); ?>" value="<?php $metabox->the_value('tradigital-col1-link'); ?>"/>
					<span>Link</span>
				</p>

				<hr>

				<label>Column #2</label>

				<p>
					<input type="text" name="<?php $metabox->the_name('tradigital-col2-stat'); ?>" value="<?php $metabox->the_value('tradigital-col2-stat'); ?>"/>
					<span>Stat</span>
				</p>

				<p>
					<?php $metabox->the_field('tradigital-col2-desc'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="5"><?php $metabox->the_value(); ?></textarea>
					<span>Stat Explanation</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('tradigital-col2-link'); ?>" value="<?php $metabox->the_value('tradigital-col2-link'); ?>"/>
					<span>Link</span>
				</p>

				<hr>

				<label>Column #3</label>

				<p>
					<input type="text" name="<?php $metabox->the_name('tradigital-col3-stat'); ?>" value="<?php $metabox->the_value('tradigital-col3-stat'); ?>"/>
					<span>Stat</span>
				</p>

				<p>
					<?php $metabox->the_field('tradigital-col3-desc'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="5"><?php $metabox->the_value(); ?></textarea>
					<span>Stat Explanation</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('tradigital-col3-link'); ?>" value="<?php $metabox->the_value('tradigital-col3-link'); ?>"/>
					<span>Link</span>
				</p>
          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->

	<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#violator2">Violator #2</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="violator2" class="panel-collapse collapse">
            <div class="panel-body">
				<p>
					<input type="text" name="<?php $metabox->the_name('violator2-title'); ?>" value="<?php $metabox->the_value('violator2-title'); ?>"/>
					<span>Heading</span>
				</p>

				<p>
					<?php $metabox->the_field('violator2-description'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="5"><?php $metabox->the_value(); ?></textarea>
					<span>Subheading</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('violator2-btn'); ?>" value="<?php $metabox->the_value('violator2-btn'); ?>"/>
					<span>Button Text</span>
				</p>

          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->

	<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#checklist">Checklist</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="checklist" class="panel-collapse collapse">
            <div class="panel-body">
				<p>
					<input type="text" name="<?php $metabox->the_name('checklist-title'); ?>" value="<?php $metabox->the_value('checklist-title'); ?>"/>
					<span>Heading</span>
				</p>

				<p>
					<?php $metabox->the_field('checklist-desc'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="5"><?php $metabox->the_value(); ?></textarea>
					<span>Subheading</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('checklist-bullet1'); ?>" value="<?php $metabox->the_value('checklist-bullet1'); ?>"/>
					<span>Bullet #1</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('checklist-bullet2'); ?>" value="<?php $metabox->the_value('checklist-bullet2'); ?>"/>
					<span>Bullet #2</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('checklist-bullet3'); ?>" value="<?php $metabox->the_value('checklist-bullet3'); ?>"/>
					<span>Bullet #3</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('checklist-btn'); ?>" value="<?php $metabox->the_value('checklist-btn'); ?>"/>
					<span>Button Text</span>
				</p>

          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->

	<div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
		          Testimonials
		        </a>
		      </h4>
		    </div>
		    <div id="collapseFour" class="panel-collapse collapse">
				<div class="panel-body adult">
					<a style="float:right; margin:0 10px;" href="#" class="dodelete-docs button">Remove All</a>
             
            <label>Add Testimonial</label>
             
            <?php while($metabox->have_fields_and_multi('docs')): ?>
            <?php $metabox->the_group_open(); ?>

		              <p>
		                <input type="text" name="<?php $metabox->the_name('testimonial-image'); ?>" value="<?php $metabox->the_value('testimonial-image'); ?>"/>
								<span>Image URL(ex: <code>http://atmosferiq.com/wp-content/uploads/2013/11/atmosferiq_filler.png</code>)</span>
		              </p>

		              <p>
		                <input type="text" name="<?php $metabox->the_name('testimonial-title'); ?>" value="<?php $metabox->the_value('testimonial-title'); ?>"/>
                	<span>Testimonial Title</span>
              		</p>
		            	  <?php $metabox->the_field('testimonial-copy'); ?>
		              <p>
		                	<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
		              		<span>Testimonial</span>
		              </p>


		              <p><input type="text" name="<?php $metabox->the_name('testimonial-owner'); ?>" value="<?php $metabox->the_value('testimonial-owner'); ?>"/>
		              		<span>Testimonial Name</span>
		              
		              </p>

		              <p><input type="text" name="<?php $metabox->the_name('testimonial-place'); ?>" value="<?php $metabox->the_value('testimonial-place'); ?>"/>   
		              		<span>Testimonial Business</span>           
		              </p>

		              <p>
		                  <a href="#" class="dodelete button">Remove Testimonial</a>
		              </p>
		            <?php $metabox->the_group_close(); ?>
		            <?php endwhile; ?>   
		          	<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-docs button">Add Testimonial</a></p>  
		    	</div><!-- /panel-body -->
			</div><!-- /collapsePerson -->
		  </div><!-- /panel -->


<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#violator3">Violator #3</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="violator3" class="panel-collapse collapse">
            <div class="panel-body">
				<p>
					<input type="text" name="<?php $metabox->the_name('violator3-title'); ?>" value="<?php $metabox->the_value('violator3-title'); ?>"/>
					<span>Heading</span>
				</p>

				<p>
					<?php $metabox->the_field('violator3-description'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="5"><?php $metabox->the_value(); ?></textarea>
					<span>Subheading</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('violator3-btn'); ?>" value="<?php $metabox->the_value('violator3-btn'); ?>"/>
					<span>Button Text</span>
				</p>

          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->
</div><!-- /panel-group -->