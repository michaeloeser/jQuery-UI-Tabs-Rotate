<?php 
// enqueue the script into the head

  wp_enqueue_script('ui-tabs-rotate', PRiNZ_SCRIPTS .'jquery-ui-tabs-rotate.js', array('jquery'), '', true);

?>

<?php 
// call the function

if (is_home()) : ?>
jQuery.noConflict();
jQuery(function() {
jQuery("#tabs").tabs().tabs("rotate", 4000, true);
	});

<?php endif; ?>
