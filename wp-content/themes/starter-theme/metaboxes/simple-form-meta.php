<div class="my_meta_control">
 
	<label>Forms</label>
 
	<p>
		<input type="text" name="<?php $metabox->the_name('form_name'); ?>" value="<?php $metabox->the_value('form_name'); ?>"/>
		<span>Enter in a name</span>
	</p>

	<label>Form Description</label>
 
	<p>
		<?php $metabox->the_field('form_desc'); ?>
		<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
		<span>Enter in a description</span>
	</p>


	<label>Form Code (Be careful making edits here!)</label>
 	
	<p>
		<?php $metabox->the_field('form_code'); ?>
		<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
		<span>Enter in a description</span>
	</p>
</div>


