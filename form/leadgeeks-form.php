<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Lead Geeks (Company Name) Form
 * Plugin URI:        https://www.leadgeeks.com
 * Description:       Use shortcode [lg-(Company Initials)-form url='http://www.landing-page.url'] on short-form page. Use shortcode [lg-source-form] on the landing page.
 * Version:           0.0.1
 * Author:            Earl Alexander
 * Author URI:        www.earlalex.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lead-geeks-(Company Initials)-form
 */
function lg_(Company Initials)_init(){
  wp_register_script( 'lg-(Company Initials)', plugin_dir_url(__FILE__).'js/lg.js', array('jquery'), '0.0.1', true );
  wp_enqueue_script( 'lg-(Company Initials)' );
  wp_register_style( 'lg-(Company Initials)', plugin_dir_url(__FILE__).'css/lg.css', array(), '0.0.1', 'all' );
  wp_enqueue_style( 'lg-(Company Initials)');
}
add_action('init','lg_(Company Initials)_init');

function form_init($atts){
  $atts = shortcode_atts(array(
      'url' => 'http://www.example.com'
    ),$atts);
?>
<div class="wrapper">
<!--(form code) -->
</div>
<?php
}
function source_init(){
?>
<!-- (Lead Geeks Boberdoo Code Snippet) -->
<?php
}
function lg_shortcode() {
  add_shortcode( 'lg-(Company Initials)-form', 'form_init');
  add_shortcode( 'lg-source-form', 'source_init');
}
add_action('wp_loaded','lg_shortcode');