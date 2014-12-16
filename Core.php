<?php

/**
 * Plugin Name: ZippySites
 * Plugin URI: http://plugin.pagezippy.com
 * Description: Allows for management of paid and free packages for wordpress multisite installs
 * Version: 1.0.0
 * Author: XAOS Interactive
 * Author URI: http://xaos-ia.com
 * Network: true
 * License: MIT
 */
 
namespace ZippySites;

use ZippySites\Helpers\Loader;

class Core {
 
 var $location;
 var $language;
 var $plugin_dir = '';
 var $plugin_url = '';
 var $pro_sites = array();
 var $level = array();
	var $checkout_processed = false;

	var $tcpdf = array(); //Array for PDF settings
 
 function __construct() {
  //setup our variables
  $this->init_vars;
  
  
  
 }

 public static function version() 
 { 
  return '1.0.0-alpha'; 
 } 
  
}
