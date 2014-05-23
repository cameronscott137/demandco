<div class="my_meta_control">

<!-- Single Blog Post Meta
======================================================================================================================== -->
<label>Landing Page Heading</label>
	<p>
		<input type="text" name="<?php $metabox->the_name('blog-cta-title'); ?>" value="<?php $metabox->the_value('blog-cta-title'); ?>"/>
		<span>Custom Call-to-Action Headline. If left empty, will default to "Are You Tradigital? Sign Up for the Mailing List"</span>
	</p>

	<p>
		<input type="text" name="<?php $metabox->the_name('blog-photo-credit'); ?>" value="<?php $metabox->the_value('blog-photo-credit'); ?>"/>
		<span>Featured Image Credit (Always cite your sources!)</span>
	</p>
	<p>
		<input type="text" name="<?php $metabox->the_name('blog-photo-url'); ?>" value="<?php $metabox->the_value('blog-photo-url'); ?>"/>
		<span>Featured Image Credit URL</span>
	</p>
</div><!-- /my_meta_control -->
