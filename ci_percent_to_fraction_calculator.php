<?php
/*
Plugin Name: CI Percent to fraction calculator
Plugin URI: https://www.calculator.io/percent-to-fraction-calculator/
Description: The percent to fraction calculator converts the given percentages into fractions. If the percent value exceeds 100, the calculator performs percent to mixed number conversion.
Version: 1.0.0
Author: Percent to Fraction Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_percent_to_fraction_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Percent to Fraction Calculator by www.calculator.io";

function display_calcio_ci_percent_to_fraction_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Percent to Fraction Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_percent_to_fraction_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_percent_to_fraction_calculator', 'display_calcio_ci_percent_to_fraction_calculator' );