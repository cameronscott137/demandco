<div class="my_meta_control">

<!-- Heading
======================================================================================================================== -->
<label>Landing Page Heading</label>
	<p>
		<input type="text" name="<?php $metabox->the_name('landing-title'); ?>" value="<?php $metabox->the_value('landing-title'); ?>"/>
		<span>Landing Page Heading</span>
	</p>

	<p>
		<input type="text" name="<?php $metabox->the_name('landing-description'); ?>" value="<?php $metabox->the_value('landing-description'); ?>"/>
		<span>Landing Page Header Description</span>
	</p>

	<p>
		<input type="text" name="<?php $metabox->the_name('landing-image'); ?>" value="<?php $metabox->the_value('landing-image'); ?>"/>
		<span>Feature image (ex: <code>http://atmosferiq.thinktiv.webfactional.com/wp-content/uploads/2013/11/atmosferiq_filler.png</code>)</span>
	</p>
 

	<hr>

<!-- Copy
======================================================================================================================== -->
	<label>Landing Page Copy</label>

	<p>
		<?php $metabox->the_field('landing-copy-desc'); ?>
		<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
		<span>Landing Page Copy</span>
	</p>			
		
	<hr>

<!-- Bullets
======================================================================================================================== -->

	<label>Bullet #1</label>
 
	<p>
		<input type="text" name="<?php $metabox->the_name('landing-bullet-header1'); ?>" value="<?php $metabox->the_value('landing-bullet-header1'); ?>"/>
		<span>Bullet Header #1</span>
	</p>

	<p>
		<?php $metabox->the_field('landing-bullet-desc1'); ?>
		<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
		<span>Bullet Description #1</span>
	</p>

	<label>Bullet #2</label>
 
	<p>
		<input type="text" name="<?php $metabox->the_name('landing-bullet-header2'); ?>" value="<?php $metabox->the_value('landing-bullet-header2'); ?>"/>
		<span>Bullet Header #2</span>
	</p>

	<p>
		<?php $metabox->the_field('landing-bullet-desc2'); ?>
		<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
		<span>Bullet Description #2</span>
	</p>

	<label>Bullet #3</label>
 
	<p>
		<input type="text" name="<?php $metabox->the_name('landing-bullet-header3'); ?>" value="<?php $metabox->the_value('landing-bullet-header3'); ?>"/>
		<span>Bullet Header #3</span>
	</p>

	<p>
		<?php $metabox->the_field('landing-bullet-desc3'); ?>
		<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
		<span>Bullet Description #3</span>
	</p>

<hr> 
<!-- Forms
======================================================================================================================== -->
	<label>Form</label>
 
		<p>
			<input type="text" name="<?php $metabox->the_name('landing-form-header'); ?>" value="<?php $metabox->the_value('landing-form-header'); ?>"/>
			<span>Form Header</span>
		</p>

		<p>
			<input type="text" name="<?php $metabox->the_name('landing-form-shortcode'); ?>" value="<?php $metabox->the_value('landing-form-shortcode'); ?>"/>
			<span>Form Shortcode</span>
		</p>

		<p>
			<input type="text" name="<?php $metabox->the_name('landing-form-button'); ?>" value="<?php $metabox->the_value('landing-form-button'); ?>"/>
			<span>Form Button</span>
		</p>

</div>


