<?php
function rmo_replace_yd_wpmuso_footer() {
	$options = get_option( 'widget_yd_wpmuso' );
	$i = 0;
	if( $options[$i]['disable_backlink'] ) echo "<!--\n";
	echo '<p style="text-align:center" class="yd_linkware"><small><a href="' 
		. __( 'http://www.phmschools.org/', 'yd-wpmuso' ) 
		. '">' . ('PHM Staff Blogs - Copyright © ') . date("Y") . __( ' PHM School Corporation', 'yd-wpmuso' )
		. '</a></small></p>';
	if( $options[$i]['disable_backlink'] ) echo "\n-->";
}
add_filter('wp_footer', 'rmo_replace_yd_wpmuso_footer');
?>