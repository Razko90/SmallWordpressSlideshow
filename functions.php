<?php
	//Custom slideshow
	function return_slideshow($attr){
		$html = '<div class="slideshow"><ul>';
		foreach(explode(',', $attr['ids']) as $v)$html.= '<li><img src="' . wp_get_attachment_url($v) . '" class="alignnone"></li>';
		$html .= '</ul><span class="prev">&#8249;</span><span class="next">&#8250;</span></div>';
		return $html;
	}add_shortcode('slideshow', 'return_slideshow');
