<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="wrapper head">
            <div class="logo">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/assets/images/group.svg" alt=""></a>
            </div>
            <nav>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
            </nav>  
        </div>
    </header>