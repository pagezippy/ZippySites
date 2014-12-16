<?php

namespace ZippySites\Helpers;

class PluginLoader {

  function __construct() {
  
    //load modules
    add_action('plugins_loaded', array(&$this, 'load_modules'));
    
    //load gateways
    add_action('plugins_loaded', array(&$this, 'load_gateways'));
  
  }
  
  function load_modules()
  {
  
  }
  
  function load_gateways()
  {
  
  }

}
