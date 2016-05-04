<?php
function rmo_remove_gde_mce_button($buttons) {	
	array_pop( $buttons );
    return $buttons;
}

//if ( get_user_option('rich_editing') == 'true') {
	add_filter('mce_buttons', 'rmo_remove_gde_mce_button');

?>