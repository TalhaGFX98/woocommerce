<?php
/**
 * Plugin Name: Custom WooCommerce States
 * Plugin URI: https://github.com/TalhaGFX98/woocommerce/
 * Author: TalhaGFX98
 * Author URI: https://github.com/TalhaGFX98
 * Description: Add Custom WooCommerce States Using This Plugin
 * Version: 0.1.0
 * License: GPL2 or Later.
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: prefix-plugin-name
*/

add_filter( 'woocommerce_states', 'custom_woocommerce_states' );

function custom_woocommerce_states( $states ) {
    
    $states['AE'] = array(
        'AE1' => 'Abu Dhabi',    
        'AE2' => 'Dubai',    
        'AE3' => 'Sharjah',
		'AE4' => 'Ajman',
		'AE5' => 'Umm Al Quwain',
		'AE6' => 'Ras Al Khaimah',
		'AE7' => 'Fujairah',
    );
    
    return $states ;
}
