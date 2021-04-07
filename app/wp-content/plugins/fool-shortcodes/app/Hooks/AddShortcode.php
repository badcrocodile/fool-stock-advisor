<?php


namespace FoolShortcodes;


use Fool\Connection;

class AddShortcode {

	public function expandTicker( $atts, $content = null ) {
		$profile = ( new Connection( $content, 'profile' ) )->getResponse();

		if ( is_object( $profile ) ) {
			return "<strong>" . $profile->companyName . "</strong> (" . $profile->exchangeShortName . ":" . $content . ")";
		}

		return $content;
	}
}