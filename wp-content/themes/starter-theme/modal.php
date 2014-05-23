<div class="modal fade" id="webinar" tabindex="-1" role="dialog" aria-labelledby="preOrderLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/modal-logo.svg" alt="atmosferiq logo">
            <h4 class="modal-title">Sign Up for a Webinar</h4>
      </div>
      <div class="modal-body">
        <p>We'll reach out as soon as possible to set up a time.</p>
        <?php echo do_shortcode('[gravityform id="6" name="Webinar" title="false" description="false" ajax="true"]');?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /modal -->


<div class="modal fade" id="preorder" tabindex="-1" role="dialog" aria-labelledby="DemoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/modal-logo.svg" alt="atmosferiq logo">
            <h4 class="modal-title">Notify Me</h4>
      </div>
      <div class="modal-body">
        <p>We'll let you know as soon as more pricing plans become available.</p>
        <?php echo do_shortcode('[gravityform id="2" name="Contact" title="false" description="false" ajax="true"]');?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->