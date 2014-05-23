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
                <a data-toggle="collapse" data-parent="#accordion" href="#basic">Basic Options</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="basic" class="panel-collapse collapse">
            <div class="panel-body">
				<p>
					<input type="text" name="<?php $metabox->the_name('price'); ?>" value="<?php $metabox->the_value('price'); ?>"/>
					<span>Price per Month</span>
				</p>

				<p>
					<?php $metabox->the_field('price-desc'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="2"><?php $metabox->the_value(); ?></textarea>
					<span>Pricing Description</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('price-btn'); ?>" value="<?php $metabox->the_value('price-btn'); ?>"/>
					<span>Button Text</span>
				</p>
				<a style="float:right; margin:0 10px;" href="#" class="dodelete-basic-features button">Remove All</a>
				<?php while($metabox->have_fields_and_multi('basic-features')): ?>
		            <?php $metabox->the_group_open(); ?>

				              <p><input type="text" name="<?php $metabox->the_name('pricing-feature'); ?>" value="<?php $metabox->the_value('pricing-feature'); ?>"/>
				              		<span>Feature</span>
				          
				              </p>

				              <p>
				                  <a href="#" class="dodelete button">Remove Feature</a>
				              </p>
				    <?php $metabox->the_group_close(); ?>
				<?php endwhile; ?>   
				<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-basic-features button">Add Feature</a></p>  
          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->

	<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#plus">Plus Options</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="plus" class="panel-collapse collapse">
            <div class="panel-body">
				<p>
					<input type="text" name="<?php $metabox->the_name('price-plus'); ?>" value="<?php $metabox->the_value('price-plus'); ?>"/>
					<span>Price per Month</span>
				</p>

				<p>
					<?php $metabox->the_field('price-desc-plus'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="2"><?php $metabox->the_value(); ?></textarea>
					<span>Pricing Description</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('price-btn-plus'); ?>" value="<?php $metabox->the_value('price-btn-plus'); ?>"/>
					<span>Button Text</span>
				</p>
				<a style="float:right; margin:0 10px;" href="#" class="dodelete-plus-features button">Remove All</a>
				<?php while($metabox->have_fields_and_multi('plus-features')): ?>
		            <?php $metabox->the_group_open(); ?>

				              <p><input type="text" name="<?php $metabox->the_name('pricing-feature-plus'); ?>" value="<?php $metabox->the_value('pricing-feature-plus'); ?>"/>
				              		<span>Feature</span>
				          
				              </p>

				              <p>
				                  <a href="#" class="dodelete button">Remove Feature</a>
				              </p>
				    <?php $metabox->the_group_close(); ?>
				<?php endwhile; ?>   
				<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-plus-features button">Add Feature</a></p>  
          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->

	<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#premium">Premium Options</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="premium" class="panel-collapse collapse">
            <div class="panel-body">
				<p>
					<input type="text" name="<?php $metabox->the_name('price-prem'); ?>" value="<?php $metabox->the_value('price-prem'); ?>"/>
					<span>Price per Month</span>
				</p>

				<p>
					<?php $metabox->the_field('price-desc-prem'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="2"><?php $metabox->the_value(); ?></textarea>
					<span>Pricing Description</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('price-btn-prem'); ?>" value="<?php $metabox->the_value('price-btn-prem'); ?>"/>
					<span>Button Text</span>
				</p>
				<a style="float:right; margin:0 10px;" href="#" class="dodelete-premium-features button">Remove All</a>
				<?php while($metabox->have_fields_and_multi('premium-features')): ?>
		            <?php $metabox->the_group_open(); ?>

				              <p><input type="text" name="<?php $metabox->the_name('pricing-feature-prem'); ?>" value="<?php $metabox->the_value('pricing-feature-prem'); ?>"/>
				              		<span>Feature</span>
				          
				              </p>

				              <p>
				                  <a href="#" class="dodelete button">Remove Feature</a>
				              </p>
				    <?php $metabox->the_group_close(); ?>
				<?php endwhile; ?>   
				<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-premium-features button">Add Feature</a></p>  
          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->


</div><!-- /panel-group -->