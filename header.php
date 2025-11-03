<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>

  
<header style="background-color:#3e3779; color:white; text-align:center; padding:40px; font-family:'Roboto', sans-serif;">
  <h1 style="font-size:3em; margin:0;">Digjital School</h1>
  <p style="font-size:1.3em; margin:10px 0;">Inspiring Codes, Proggraming and Futures</p>
  <nav style="margin-top:15px;">
    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>

  </nav>
</header>    
