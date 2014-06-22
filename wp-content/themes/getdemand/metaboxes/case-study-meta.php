<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#header">Page Header</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="header" class="panel-collapse collapse in">
            <div class="panel-body">
					<p>
						<input type="text" name="<?php $metabox->the_name('hero'); ?>" value="<?php $metabox->the_value('hero'); ?>"/>
						<span>Hero Image</span>
					</p>
				 
					<p>
						<input type="text" name="<?php $metabox->the_name('color'); ?>" value="<?php $metabox->the_value('color'); ?>"/>
						<span>Logo Color (defaults to Demand Red)</span>
					</p>

					<p>
						<?php $metabox->the_field('heading'); ?>
						<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
						<span>Heading</span>
					</p>

					<p>
						<?php $metabox->the_field('story'); ?>
						<textarea name="<?php $metabox->the_name(); ?>" rows="10"><?php $metabox->the_value(); ?></textarea>
						<span>Story Lede</span>
					</p>

          </div><!-- /panel-body -->
      </div><!-- /collapseHeader -->
  </div><!-- /panel -->

<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#intro">Portfolio</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="intro" class="panel-collapse collapse in">
            <div class="panel-body">
            	<?php $portfolio = array('Full-Width','Image Left-Aligned', 'Image Right-Aligned', 'Testimonial'); ?> 
		            <?php while($metabox->have_fields_and_multi('portfolio')): ?>
		            <?php $metabox->the_group_open(); ?>
		           	<div class="repeat-header">
			            <label>Portfolio Section</label>
		                <a href="#" class="dodelete pull-right">&#10005;</a>
		            </div><!-- /header -->
					<label>Choose a Format</label>
					<div class="radio-group"> 
						<?php $mb->the_field('format'); ?>
						<div class="radio">
							<label>
								<input type="radio" name="<?php $mb->the_name(); ?>" value="full"<?php echo $mb->is_value('full')?' checked="checked"':''; ?>/> Full-Width Image
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="<?php $mb->the_name(); ?>" value="left"<?php echo $mb->is_value('left')?' checked="checked"':''; ?>/> Left-Aligned Image
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="<?php $mb->the_name(); ?>" value="right"<?php echo $mb->is_value('right')?' checked="checked"':''; ?>/> Right-Aligned Image
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="<?php $mb->the_name(); ?>" value="testimonial"<?php echo $mb->is_value('testimonial')?' checked="checked"':''; ?>/> Testimonial
							</label>
						</div>
					</div>
					<p class="image">
					<input type="text" name="<?php $metabox->the_name('portfolio-img'); ?>" value="<?php $metabox->the_value('portfolio-img'); ?>"/>
						<span>Portfolio Image URL</span>
					</p>
		            <p class="copy">
						<?php $metabox->the_field('portfolio-copy'); ?>
						<textarea name="<?php $metabox->the_name(); ?>" rows="8"><?php $metabox->the_value(); ?></textarea>
						<span>Portfolio Copy</span>
					</p>
		            <?php $metabox->the_group_close(); ?>
		            <?php endwhile; ?>
		            <a style="margin-left: 10px; padding-bottom: 20px;"href="#" class="docopy-portfolio add button pull-right"><span class="ab-icon"></span>Add</a>
          </div><!-- /panel-body -->
      </div><!-- /collapseHeader -->
</div><!-- /panel -->


<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#feature1">Form</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="feature1" class="panel-collapse collapse in">
            <div class="panel-body">
            		<p>
						<?php $metabox->the_field('form-heading'); ?>
						<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
						<span>Heading</span>
					</p>

					<p>
						<?php $metabox->the_field('form-copy'); ?>
						<textarea name="<?php $metabox->the_name(); ?>" rows="10"><?php $metabox->the_value(); ?></textarea>
						<span>Story Lede</span>
					</p>
          </div><!-- /panel-body -->
      </div><!-- /collapseHeader -->
  </div><!-- /panel -->
</div><!-- /panel-group -->