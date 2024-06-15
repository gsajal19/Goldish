<?php
 
      // Get the current URL
      $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      
      // Check if the current URL is the home page
      if ($current_url == "http://$_SERVER[HTTP_HOST]/") {
          // If it's the home page, set the link to #
          $home_url = "#";
      } else {
          // If it's not the home page, set the link to the root URL
          $home_url = "http://$_SERVER[HTTP_HOST]/";
      }
    
$jsonfile = "config/config.json";
$configData = file_get_contents($jsonfile);

$config = json_decode($configData,true);


$name = $config['website_name'];
$domain = $home_url."goldish/";
$email  = $config['contact_email'];
$phone  = $config['contact_phone'];
$address  = $config['contact_address'];
$timing = $config['store_timing'];
$special_line = $config['header_heading'];

$facebook_url = $config['facebook_url'];
$twitter_url = $config['twitter_url'];
$instagram_url = $config['instagram_url'];
$youtube_url = $config['youtube_url'];
?>