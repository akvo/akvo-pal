<?php
// $Id: block.tpl.php,v 1.3 2007/08/07 08:39:36 goba Exp $
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>"  class="frame block-<?php print $block->module; ?>">
	<?php if (!empty($block->subject)): ?>
		<h2><?php print $block->subject; ?></h2>
	<?php endif;?>
	<div class="white_box" style="margin-bottom:20px;">
		<div class="space20">
			<?php print $block->content; ?>
		</div>
	</div>	
</div>