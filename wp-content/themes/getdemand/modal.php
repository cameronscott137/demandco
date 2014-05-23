<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="preOrderLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/modal-logo.svg" alt="atmosferiq logo">
            <h4 class="modal-title">Get Demand</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[gravityform id="6" name="Webinar" title="false" description="false" ajax="true"]');?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /modal -->