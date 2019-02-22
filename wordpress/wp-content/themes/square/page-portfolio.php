<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/basic.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/sec-footer.css">
    <?php
        wp_head();
    ?>
</head>
<body>
    <header class="header" id="header">
        <div class="header__container">
           <div class="header__left">
               <div class="header__left-toggle-btn" id="header__left-toggle-btn" onclick=" openMenu(); openMenuClickFunc()">
                <i class="fa fa-bars fa-2x header-toggle-btn-open" id="header__left-toggle-btn-open" aria-hidden="true"></i>
            </div>
            <ul class="header__left__nav" id="nav">
                <li class="header__left__nav-list"><a href="page-portfolio.html">Portfolio</a></li>
                <li class="header__left__nav-list"><a href="page-blog.php">Blog</a></li>
                <li class="header__left__nav-list"><a href="home.php">Clients</a></li>
                <li class="header__left__nav-list"><a href="home.php">News</a></li>
                <li class="header__left__nav-list"><a href="home.php">About Me</a></li>
                <li class="header__left__nav-list"><a href="home.php">Contact</a></li>
            </ul>
           </div>
            <div class="header__center">
                <a href="home.php" class="header-logo-link"><img src="<?php echo SQ_IMG_DIR;?>/square_logo.png" class="header-logo-link-img" alt="Logo Link"></a>
            </div>
            <div class="header__right">
                <div class="header__right__soc">
                    <a href="https://www.facebook.com"><i class="fa fa-facebook header__right__soc-logo" aria-hidden="true"></i></a>
                    <a href="https://twitter.com"><i class="fa fa-twitter header__right__soc-logo" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com"><i class="fa fa-instagram header__right__soc-logo" aria-hidden="true"></i></a>
                    <a href="home.php"><img src="<?php echo SQ_IMG_DIR;?>/soc-icon.png" class="header__right__soc-logo" alt="Soc Icon"></a>
                    <a href="https://plus.google.com/discover"><i class="fa fa-google-plus header__right__soc-logo" aria-hidden="true"></i></a>
                    <a href="https://mail.google.com/mail/u/0/"><i class="fa fa-envelope header__right__soc-logo" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="main__container">
            <div class="main__container__gallery">
                <div class="main__container__gallery__block">
                    <h2 class="main__container__gallery__block-headline">Portfolio</h2>
                    <p class="main__container__gallery__block-under-headline">gallery three</p>
                </div>
                <div class="main__container__gallery-image">
                    <img src="img/gallery-photo1.png" alt="Photo 1" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <div class="main__container__gallery-image">
                    <img src="img/gallery-photo2.png" alt="Photo 2" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <div class="main__container__gallery-image">
                    <img src="img/gallery-photo3.png" alt="Photo 3" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <div class="main__container__gallery-image">
                    <img src="img/gallery-photo4.png" alt="Photo 4" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <div class="main__container__gallery-image">
                    <img src="img/gallery-photo5.png" alt="Photo 5" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <div class="main__container__gallery-image">
                    <img src="img/gallery-photo6.png" alt="Photo 6" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <div class="main__container__gallery-image">
                    <img src="img/gallery-photo7.png" alt="Photo 7" class="main__container__gallery-image-photo">
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <div class="main__container__gallery-image">
                    <img src="img/gallery-photo8.png" alt="Photo 8" class="main__container__gallery-image-photo">
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
    
    <footer class="footer">
        <div class="footer__container">
            <p class="footer-text1">Created by 2ndself.com, with exclusive for theuncreativelab.com</p>
            <p class="footer-copyright">© 2014 Square. All Rights Reserved.</p>
        </div>
    </footer>
    
    <script src="js/header-nav.js"></script>
    <?php
        wp_footer();
    ?>
</body>
</html>