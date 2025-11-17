<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>

  
<header class="site-header">
    <nav class="site-nav">

    <?php wp_nav_menu(array(
    "theme_location" => "primary",
    "menu_class" => "main-menu"
  )); 
  ?>

  </nav>
</header>    
