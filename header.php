<!DOCTYPE html>
<html lang="de">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<head>
    <title>
        <?php wp_title(); if ( is_front_page()==false){ echo " - "; } bloginfo( 'name'); ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo(get_template_directory_uri()); ?>/style.css">
</head>
    
    <div id="circle">
</div>



<div id="wrapper">
    <img id="HFU-Logo" src="<?php echo(get_template_directory_uri()); ?>/Logo_HFU_rz_4c.png" alt="HFU-Logo">