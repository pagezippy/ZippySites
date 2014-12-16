<?php

namespace ZippySites\Modules;

class Ads {

  var $ad_counter;
  
  function __construct() {
  
    global $zippy;
    
    add_action('zippy_settings_page', array(&$this, 'settings'));
    add_filter('zippy_settings_filter', array(&$this, 'settings_process'));
    add_action('admin_menu', array(&$this, 'plug_page'), 100);
    
    //update install script if necessary 
    if ($zippy->get_setting('ads_version') != $zippy->version) {
      $this->install();
    }
  
  }

}
