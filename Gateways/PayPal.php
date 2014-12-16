<?php

namespace ZippySites\Gateways;

class PayPal {

  var $complete_message = false;
  
  function __construct()
  {
      //settings 
      add_action('zippysites_gateway_settings', array(&$this, 'settings'));
      add_filter('zippysites_settings_filter', array(&$this, 'settings_process'));
      
      //checkout stuff
      add_action('zippysites_checkout_page_load', array(&this, 'process_checkout'));
  }

}
