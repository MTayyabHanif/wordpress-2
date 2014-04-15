<?php 


///////////////////////////////////
// Dashboard Custom Admin Footer Text
///////////////////////////////////
add_filter('admin_footer_text', 'poxy_custom_admin_footer');
function poxy_custom_admin_footer() {
	_e('<span id="footer-thankyou">Developed by <a href="http://workhorse45.com" target="_blank">Workhorse 45</a></span>.', 'poxy');
}
?>