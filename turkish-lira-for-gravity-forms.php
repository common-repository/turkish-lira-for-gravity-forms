<?php
/**
 * Plugin Name: Turkish Lira For Gravity Forms
 * Plugin URI: https://212medya.com.tr
 * Description: This plugin adds the Turkish Lira (₺) as a currency option in Gravity Forms. Enhance your Gravity Forms payment capabilities by allowing users to select Turkish Lira for their transactions.
 * Version: 1.0.1
 * Author: 212 MEDYA
 * Author URI: https://212medya.com.tr
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: turkish-lira-for-gravity-forms
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Add Turkish Lira to Gravity Forms currencies
 *
 * @param array $currencies
 * @return array
 */
function tlgf_add_turkish_lira_to_gravity_forms($currencies) {
    $currencies['TRY'] = array(
        'name' => __('Turkish Lira', 'turkish-lira-for-gravity-forms'),
        'symbol_left' => '₺',
        'symbol_right' => '',
        'symbol_padding' => ' ',
        'thousand_separator' => '.',
        'decimal_separator' => ',',
        'decimals' => 2
    );
    
    return $currencies;
}
add_filter('gform_currencies', 'tlgf_add_turkish_lira_to_gravity_forms');
