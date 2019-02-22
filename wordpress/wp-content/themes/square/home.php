<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <?php
        wp_head();
    ?>
</head>
<body>
   <?php get_header(); ?>
    <main class="main">
        <div class="main__container">
            <div class="slider-container">
                <div class="slider-content">
                    <div class="slider-single">
                        <img class="slider-single-image" src="<?php echo SQ_IMG_DIR; ?>/morgan.png" alt="Actor">
                        <div class="slider-single__manage-block">
                            <div class="slider-single__manage-block__top">
                                <a href="#" class="slider-single__manage-block__top-resize-btn">
                                    <i class="fa fa-expand" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="slider-single__manage-block__middle">
                                <p class="slider-single__manage-block__middle-name">Morgran Freeman</p>
                                <p class="slider-single__manage-block__middle-job">actor</p>
                                <p class="slider-single__manage-block__middle-about">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci, ac venenatis ante venenatis eget.</p>
                            </div>
                            <div class="slider-single__manage-block__bottom">
                                <a href="#" class="slider-single__manage-block__bottom-like">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="slider-single__manage-block__bottom-repost">
                                    <img src="<?php echo SQ_IMG_DIR;?>/repost.png" alt="Repost icon">
                                </a>
                                <a href="#" class="slider-single__manage-block__bottom-mail">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                            
                    </div>
                    
                    <div class="slider-single">
                        <img class="slider-single-image" src="<?php echo SQ_IMG_DIR; ?>/DfTJDi85jZ0.jpg" alt="Actor">
                        <div class="slider-single__manage-block">
                            <div class="slider-single__manage-block__top">
                                <a href="#" class="slider-single__manage-block__top-resize-btn">
                                    <i class="fa fa-expand" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="slider-single__manage-block__middle">
                                <p class="slider-single__manage-block__middle-name">Бомж Евпатий</p>
                                <p class="slider-single__manage-block__middle-job">actor</p>
                                <p class="slider-single__manage-block__middle-about">Первый актёр с 10 оскарами.</p>
                            </div>
                            <div class="slider-single__manage-block__bottom">
                                <a href="#" class="slider-single__manage-block__bottom-like">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="slider-single__manage-block__bottom-repost">
                                    <img src="<?php echo SQ_IMG_DIR;?>/repost.png" alt="Repost icon">
                                </a>
                                <a href="#" class="slider-single__manage-block__bottom-mail">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>             
                    </div>
                    <a class="slider-left" href="javascript:void(0);"><i class="fa fa-arrow-left"></i></a>

                    <a class="slider-right" href="javascript:void(0);"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </main>
    
    <?php get_footer(); ?>
    <?php 
        wp_footer();
    ?>
</body>
</html>
