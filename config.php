<?php

$jsonfile = "config/config.json";
$configData = file_get_contents($jsonfile);

$config = json_decode($configData,true);


$name = $config['website_name'];
$domain = $config['website_domain'];
?>