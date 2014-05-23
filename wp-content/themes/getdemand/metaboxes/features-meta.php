<div class="panel-group" id="accordion">
	<div class="panel panel-default">
	        <div class="panel-heading">
	            <h4 class="panel-title">
	                <a data-toggle="collapse" data-parent="#accordion" href="#feature1">Page Header</a>
	            </h4>
	        </div><!-- /panel-heading -->
	        <div id="feature1" class="panel-collapse collapse">
	            <div class="panel-body">

						<p>
							<input type="text" name="<?php $metabox->the_name('heading-title'); ?>" value="<?php $metabox->the_value('heading-title'); ?>"/>
							<span>Feature Set Heading</span>
						</p>

						<p>
							<?php $metabox->the_field('heading-description'); ?>
							<textarea name="<?php $metabox->the_name(); ?>" rows="6"><?php $metabox->the_value(); ?></textarea>
							<span>Enter in a description</span>
						</p>

	          </div><!-- /panel-body -->
	      </div><!-- /collapseHeader -->
	 	</div><!-- /panel -->    


    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#feature1">Feature Set #1</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="feature1" class="panel-collapse collapse">
            <div class="panel-body">

					<p>
						<input type="text" name="<?php $metabox->the_name('heading-title1'); ?>" value="<?php $metabox->the_value('heading-title1'); ?>"/>
						<span>Feature Set Heading</span>
					</p>

					<p>
						<input type="text" name="<?php $metabox->the_name('heading-description1'); ?>" value="<?php $metabox->the_value('heading-description1'); ?>"/>
						<span>Feature Set Description</span>
					</p>

					<hr>

					<label>Feature #1</label>

					<p>
						<input type="text" name="<?php $metabox->the_name('feature-title1'); ?>" value="<?php $metabox->the_value('feature-title1'); ?>"/>
						<span>Name of feature</span>
					</p>

					<p>
						<input type="text" name="<?php $metabox->the_name('feature-image1'); ?>" value="<?php $metabox->the_value('feature-image1'); ?>"/>
						<span>Feature image (ex: <code>http://atmosferiq.thinktiv.webfactional.com/wp-content/uploads/2013/11/atmosferiq_filler.png</code>)</span>
					</p>

					<p>
						<?php $metabox->the_field('feature-description1'); ?>
						<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
						<span>Enter in a description</span>
					</p>

					<hr>

					<!-- Two -->
					<label>Feature #2</label>

					<p>
						<input type="text" name="<?php $metabox->the_name('feature-title2'); ?>" value="<?php $metabox->the_value('feature-title2'); ?>"/>
						<span>Name of feature</span>
					</p>

					<p>
						<input type="text" name="<?php $metabox->the_name('feature-image2'); ?>" value="<?php $metabox->the_value('feature-image2'); ?>"/>
						<span>Feature image (ex: <code>http://atmosferiq.thinktiv.webfactional.com/wp-content/uploads/2013/11/atmosferiq_filler.png</code>)</span>
					</p>

					<p>
						<?php $metabox->the_field('feature-description2'); ?>
						<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
						<span>Enter in a description</span>
					</p>

					<hr>

					<label>Feature #3</label>

					<p>
						<input type="text" name="<?php $metabox->the_name('feature-title3'); ?>" value="<?php $metabox->the_value('feature-title3'); ?>"/>
						<span>Name of feature</span>
					</p>

					<p>
						<input type="text" name="<?php $metabox->the_name('feature-image3'); ?>" value="<?php $metabox->the_value('feature-image3'); ?>"/>
						<span>Feature image (ex: <code>http://atmosferiq.thinktiv.webfactional.com/wp-content/uploads/2013/11/atmosferiq_filler.png</code>)</span>
					</p>
				 
					<p>
						<?php $metabox->the_field('feature-description3'); ?>
						<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
						<span>Enter in a description</span>
					</p>

          </div><!-- /panel-body -->
      </div><!-- /collapseHeader -->
 	</div><!-- /panel -->

<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#feature2">Feature Set #2</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="feature2" class="panel-collapse collapse">
            <div class="panel-body">
				<p>
					<input type="text" name="<?php $metabox->the_name('heading-title2'); ?>" value="<?php $metabox->the_value('heading-title2'); ?>"/>
					<span>Feature Set Heading</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('heading-description2'); ?>" value="<?php $metabox->the_value('heading-description2'); ?>"/>
					<span>Feature Set Description</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('feature-image2-1'); ?>" value="<?php $metabox->the_value('feature-image2-1'); ?>"/>
					<span>Section image (ex: <code>http://atmosferiq.thinktiv.webfactional.com/wp-content/uploads/2013/11/atmosferiq_filler.png</code>)</span>
				</p>

				<hr>

				<!-- One -->
				<label>Feature #1</label>

				<p>
					<input type="text" name="<?php $metabox->the_name('feature-title2-1'); ?>" value="<?php $metabox->the_value('feature-title2-1'); ?>"/>
					<span>Name of feature</span>
				</p>
			 
				<p>
					<?php $metabox->the_field('feature-description2-1'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
					<span>Enter in a description</span>
				</p>

				<hr>

				<!-- Two -->
				<label>Feature #2</label>

				<p>
					<input type="text" name="<?php $metabox->the_name('feature-title2-2'); ?>" value="<?php $metabox->the_value('feature-title2-2'); ?>"/>
					<span>Name of feature</span>
				</p>

				<p>
					<?php $metabox->the_field('feature-description2-2'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
					<span>Enter in a description</span>
				</p>

				<hr>

				<!-- Three -->
				<label>Feature #3</label>

				<p>
					<input type="text" name="<?php $metabox->the_name('feature-title2-3'); ?>" value="<?php $metabox->the_value('feature-title2-3'); ?>"/>
					<span>Name of feature</span>
				</p>
			 
				<p>
					<?php $metabox->the_field('feature-description2-3'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
					<span>Enter in a description</span>
				</p>
			
            </div><!-- /panel-body -->
        </div><!-- /collapseHeader -->
  	</div><!-- /panel -->



<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#feature3">Feature Set #3</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="feature3" class="panel-collapse collapse">
            <div class="panel-body">
				<p>
					<input type="text" name="<?php $metabox->the_name('heading-title3'); ?>" value="<?php $metabox->the_value('heading-title3'); ?>"/>
					<span>Feature Set Heading</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('heading-description3'); ?>" value="<?php $metabox->the_value('heading-description3'); ?>"/>
					<span>Feature Set Description</span>
				</p>

				<hr>

				<label>Feature #1</label>

							<p>
								<input type="text" name="<?php $metabox->the_name('feature-title3-1'); ?>" value="<?php $metabox->the_value('feature-title3-1'); ?>"/>
								<span>Name of feature</span>
							</p>

							<p>
								<input type="text" name="<?php $metabox->the_name('feature-image3-1'); ?>" value="<?php $metabox->the_value('feature-image3-1'); ?>"/>
								<span>Feature image (ex: <code>http://atmosferiq.thinktiv.webfactional.com/wp-content/uploads/2013/11/atmosferiq_filler.png</code>)</span>
							</p>
						 
							<p>
								<?php $metabox->the_field('feature-description3-1'); ?>
								<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
								<span>Enter in a description</span>
							</p>

							<hr>

							<!-- Two -->
							<label>Feature #2</label>

							<p>
								<input type="text" name="<?php $metabox->the_name('feature-title3-2'); ?>" value="<?php $metabox->the_value('feature-title3-2'); ?>"/>
								<span>Name of feature</span>
							</p>

							<p>
								<input type="text" name="<?php $metabox->the_name('feature-image3-2'); ?>" value="<?php $metabox->the_value('feature-image3-2'); ?>"/>
								<span>Feature image (ex: <code>http://atmosferiq.thinktiv.webfactional.com/wp-content/uploads/2013/11/atmosferiq_filler.png</code>)</span>
							</p>
						 
							<p>
								<?php $metabox->the_field('feature-description3-2'); ?>
								<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
								<span>Enter in a description</span>
							</p>

							<hr>

							<!-- Three -->
							<label>Feature #3</label>

							<p>
								<input type="text" name="<?php $metabox->the_name('feature-title3-3'); ?>" value="<?php $metabox->the_value('feature-title3-3'); ?>"/>
								<span>Name of feature</span>
							</p>

							<p>
								<input type="text" name="<?php $metabox->the_name('feature-image3-3'); ?>" value="<?php $metabox->the_value('feature-image3-3'); ?>"/>
								<span>Feature image (ex: <code>&lt;i class="fa fa-check-circle fa-4x"&gt;&lt;/i&gt;</code>)</span>
							</p>
						 
							<p>
								<?php $metabox->the_field('feature-description3-3'); ?>
								<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
								<span>Enter in a description</span>
							</p>
            </div><!-- /panel-body -->
        </div><!-- /collapseHeader -->
  	</div><!-- /panel -->

	<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#violator">Violator</a>
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
</div>


