<?php
/*
 * Plugin Name: PHP HTML Generator
 * Version: 1.0
 * Plugin URI:  https://github.com/Airmanbzh/php-html-generator.git
 * GitHub Plugin URI:  https://github.com/talend-webdev/php-html-generator.git
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: php-html-generator
 * Domain Path: /lang/
 *
 * @package Talend\HtmlTag
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Implements an API for constructing and modifying html elements in
 * pure php
 */

require 'src/Markup.php';
require 'src/HtmlTag.php';

// EOF