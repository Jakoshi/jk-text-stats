<?php
/**
 * @author Joshua Kresse <jk@lichtblick-webmanufaktur.de>
 * @date 8.9.2020
 */

/**
 * Plugin Name:       JK Text Stats
 * Description:       Shortcode to display text stats
 * Version:           1.0.00
 * Author:            Joshua Kresse
 * Author URI:        https://kresser-webagentur.de
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       jk-text-stats
 */

if (is_file(__DIR__.'/vendor/autoload.php')) {
    require_once __DIR__.'/vendor/autoload.php';
}
if (is_file(ABSPATH.'/vendor/autoload.php')) {
    require_once ABSPATH.'/vendor/autoload.php';
}
require_once 'src/Plugin.php';
$plugin = new \JK\TextStats\Plugin();
