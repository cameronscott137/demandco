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
						<input type="text" name="<?php $metabox->the_name('cta-title'); ?>" value="<?php $metabox->the_value('cta-title'); ?>"/>
						<span>Heading</span>
					</p>
				 
					<p>
						<input type="text" name="<?php $metabox->the_name('cta-description'); ?>" value="<?php $metabox->the_value('cta-description'); ?>"/>
						<span>Subheading</span>
					</p>

					<p>
						<input type="text" name="<?php $metabox->the_name('cta-button'); ?>" value="<?php $metabox->the_value('cta-button'); ?>"/>
						<span>Button Text</span>
					</p>

					<p>
						<input type="text" name="<?php $metabox->the_name('cta-image'); ?>" value="<?php $metabox->the_value('cta-image'); ?>"/>
						<span>Heading Image (ex: <code>http://atmosferiq.com/wp-content/uploads/2013/11/atmosferiq_filler.png</code>)</span>
					</p>
          </div><!-- /panel-body -->
      </div><!-- /collapseHeader -->
  </div><!-- /panel -->

<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#intro">Intro</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="intro" class="panel-collapse collapse">
            <div class="panel-body">
				<p>
					<?php $metabox->the_field('story1'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="5"><?php $metabox->the_value(); ?></textarea>
					<span>Story Lede</span>
				</p>

				<p>
					<?php $metabox->the_field('story2'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="5"><?php $metabox->the_value(); ?></textarea>
					<span>Story Content</span>
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
            	<label>Feature #1</label>
					<p>
						<input type="text" name="<?php $metabox->the_name('feature-title1'); ?>" value="<?php $metabox->the_value('feature-title1'); ?>"/>
						<span>Name of feature</span>
					</p>

					<p>
						<input type="text" name="<?php $metabox->the_name('feature-icon1'); ?>" value="<?php $metabox->the_value('feature-icon1'); ?>"/>
						<span>Feature icon (ex: <code>&lt;i class="fa fa-check-circle fa-4x"&gt;&lt;/i&gt;</code>)</span>
					</p>
				 
					<p>
						<?php $metabox->the_field('feature-description1'); ?>
						<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
						<span>Enter in a description</span>
					</p>
				<hr>
				<label>Feature #2</label>

				<p>
					<input type="text" name="<?php $metabox->the_name('feature-title2'); ?>" value="<?php $metabox->the_value('feature-title2'); ?>"/>
					<span>Name of feature</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('feature-icon2'); ?>" value="<?php $metabox->the_value('feature-icon2'); ?>"/>
					<span>Feature icon (ex: <code>&lt;i class="fa fa-check-circle fa-4x"&gt;</i></code>)</span>
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
					<input type="text" name="<?php $metabox->the_name('feature-icon3'); ?>" value="<?php $metabox->the_value('feature-icon3'); ?>"/>
					<span>Feature icon (ex: <code>&lt;i class="fa fa-check-circle fa-4x"&gt;</i></code>)</span>
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
                <a data-toggle="collapse" data-parent="#accordion" href="#testimonials">Testimonials</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="testimonials" class="panel-collapse collapse">
            <div class="panel-body">
				<p>
					<input type="text" name="<?php $metabox->the_name('testimonial-title'); ?>" value="<?php $metabox->the_value('testimonial-title'); ?>"/>
					<span>Testimonial Heading</span>
				</p>
			 
				<p>
					<?php $metabox->the_field('testimonial'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
					<span>The Testimonial (No quotes required!)</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('testimonial-cite'); ?>" value="<?php $metabox->the_value('testimonial-cite'); ?>"/>
					<span>Testimonial Attribution (ex: <code>&lt;strong&gt;John Henne&lt;/strong&gt;, Henne Jewelers


					</code></span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('testimonial-image'); ?>" value="<?php $metabox->the_value('testimonial-image'); ?>"/>
					<span>Testimonial Image (ex: <code>http://atmosferiq.thinktiv.webfactional.com/wp-content/uploads/2013/11/atmosferiq_filler.png</code>)</span>
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
</div><!-- /panel-group -->