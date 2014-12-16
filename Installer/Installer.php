<?php

namespace ZippySites\Installer;

class Installer {



  function install_db() {
  
    global $wpdb, $current_site;
    
    $table1 = "CREATE TABLE {$wpdb->base_prefix}zippysites (
      blog_ID bigint(20) NOT NULL,
      level int(3) NOT NULL DEFAULT 1,
      expire bigint(20) NOT NULL,
      gateway varchar(25) NOT NULL DEFAULT 'PayPal',
      term varchar(25) NULL DEFAULT NULL,
      amount varchar(10) NULL DEFAULT NULL,
      PRIMARY KEY (blog_ID),
      KEY (blog_ID, level, expire)
    );";
    
    $table2 = "CREATE TABLE {$wpdb->base_prefix}zippysites_signup_stats (
		  action_ID bigint(20) unsigned NOT NULL auto_increment,
		  blog_ID bigint(20) NOT NULL,
		  action varchar(20) NOT NULL,
		  time_stamp DATE NOT NULL,
		  PRIMARY KEY  (action_ID)
		);";
		
		$table3 = "CREATE TABLE {$wpdb->base_prefix}zippysites_daily_stats (
		  id bigint(20) unsigned NOT NULL auto_increment,
		  date DATE NOT NULL,
		  supporter_count int(10) NOT NULL DEFAULT 0,
		  expired_count int(10) NOT NULL DEFAULT 0,
		  term_count_1 int(10) NOT NULL DEFAULT 0,
		  term_count_3 int(10) NOT NULL DEFAULT 0,
		  term_count_12 int(10) NOT NULL DEFAULT 0,
		  term_count_manual int(10) NOT NULL DEFAULT 0,
		  level_count_1 int(10) NOT NULL DEFAULT 0,
		  level_count_2 int(10) NOT NULL DEFAULT 0,
		  level_count_3 int(10) NOT NULL DEFAULT 0,
		  level_count_4 int(10) NOT NULL DEFAULT 0,
		  level_count_5 int(10) NOT NULL DEFAULT 0,
		  level_count_6 int(10) NOT NULL DEFAULT 0,
		  level_count_7 int(10) NOT NULL DEFAULT 0,
		  level_count_8 int(10) NOT NULL DEFAULT 0,
		  level_count_9 int(10) NOT NULL DEFAULT 0,
		  level_count_10 int(10) NOT NULL DEFAULT 0,
		  PRIMARY KEY  (id)
		);";
		
  }
  
  function install_cron() {
  
    global $wpdb, $current_site;
    
    //add stats cron
    
  }
  
}
