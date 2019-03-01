<?php 

    /*
    Template Name: Page Portfolio
    Template Post Type: page
    */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo the_title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <?php 
        
        add_action( 'wp_enqueue_scripts', 'connectAllForPortfolio');
        
        function connectAllForPortfolio() {
            wp_enqueue_style( 'portfolio', SQ_CSS_DIR.'/portfolio.css');
            wp_enqueue_style( 'sec-footer', SQ_CSS_DIR.'/sec-footer.css');
        }
    
    ?>
    <?php
        wp_head();
    ?>
</head>
<body>
    <?php get_header(); ?>
    <main class="main">
        <div class="main__container">
            <div class="main__container__gallery">
                <div class="main__container__gallery__block">
                    <h2 class="main__container__gallery__block-headline">Portfolio</h2>
                    <p class="main__container__gallery__block-under-headline">gallery three</p>
                </div>
                <div class="main__container__gallery-image">
                    <img src="<?php echo SQ_IMG_DIR;?>/gallery-photo1.png" alt="Photo 1" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <div class="main__container__gallery-image">
                    <img src="<?php echo SQ_IMG_DIR;?>/gallery-photo2.png" alt="Photo 2" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <div class="main__container__gallery-image">
                    <img src="<?php echo SQ_IMG_DIR;?>/gallery-photo3.png" alt="Photo 3" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <div class="main__container__gallery-image">
                    <img src="<?php echo SQ_IMG_DIR;?>/gallery-photo4.png" alt="Photo 4" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <div class="main__container__gallery-image">
                    <img src="<?php echo SQ_IMG_DIR;?>/gallery-photo5.png" alt="Photo 5" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <div class="main__container__gallery-image">
                    <img src="<?php echo SQ_IMG_DIR;?>/gallery-photo6.png" alt="Photo 6" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <div class="main__container__gallery-image">
                    <img src="<?php echo SQ_IMG_DIR;?>/gallery-photo7.png" alt="Photo 7" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <div class="main__container__gallery-image">
                    <img src="<?php echo SQ_IMG_DIR;?>/gallery-photo8.png" alt="Photo 8" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
            </div>
        </div>
    </main>
    
    <div class="middle">
        <div class="middle__container">
            <a href="#header" class="middle-up-btn">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </a>
       </div>
    </div>
    
    <?php get_footer('portfolio'); ?>
    
    <?php
        wp_footer();
    ?>
</body>
</html>