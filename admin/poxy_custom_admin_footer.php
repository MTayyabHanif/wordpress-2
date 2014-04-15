<?php 
/**
 * poxy_excerpt function.
 *
 * @access public
 * @param ID.
 * @return void
 */

//////////////////////////////////////////////////////////////////////
// Dashboard Custom Admin Footer Text
//////////////////////////////////////////////////////////////////////

add_filter('admin_footer_text', 'poxy_custom_admin_footer');

if ( !function_exists( 'poxy_mobile_toggle_last' ) ) :

	function poxy_custom_admin_footer() {
		
		//vars
		$link_description ='Developed by';
		$link_name = 'Link Name';
		$url = '#';

		_e('<span id="footer-thankyou">'.$link_description.' <a href="'.$url.'" target="_blank">'.$link_name.'</a></span>.', 'poxy');
	
	}

endif;
?>