<?php
function pvw_preprocess_page(&$vars) {
	$links = $vars['primary_links'];
	foreach ($links as $key => $link) {
		$links[$key]['html'] = true;
		$links[$key]['title'] = '<span>'. $link['title'] . '</span>';
	}
	$vars['primary_links'] = $links;
}