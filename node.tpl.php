<?php
// $Id: node.tpl.php,v 1.7 2007/08/07 08:39:36 goba Exp $
?>
<div id="node-<?php print $node->nid; ?>" class="frame node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
	<div class="sliding_box_header">
		<a href="<?php print $node_url?>"><?php print $title?></a>
	</div>
	<div class="space20">
		<?php print $content?>
	</div>
	
</div>
	

