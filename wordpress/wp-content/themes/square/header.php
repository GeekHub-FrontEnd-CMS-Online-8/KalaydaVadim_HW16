
<header class="header" id="header">
    <div class="header__container">
       <div class="header__left">
           <div class="header__left-toggle-btn" id="header__left-toggle-btn" onclick=" openMenu(); openMenuClickFunc()">
                <i class="fa fa-bars fa-2x header-toggle-btn-open" id="header__left-toggle-btn-open" aria-hidden="true"></i>
            </div>
            <?php if(has_nav_menu('primary')): ?>
                <?php
                    wp_nav_menu(array(
                        'menu_class'    => 'header__left__nav',
                        'menu_id'       => 'nav',
                        'theme_location'=> 'primary',
                    ));
                ?>
            <?php endif; ?>
       </div>
        <div class="header__center">
            <a href="<?php echo home_url(); ?>" class="header-logo-link"><img src="<?php echo SQ_IMG_DIR; ?>/square_logo.png" class="header-logo-link-img" alt="Logo Link"></a>
        </div>
        <div class="header__right">
            <div class="header__right__soc">
                <a href="https://www.facebook.com"><i class="fa fa-facebook header__right__soc-logo" aria-hidden="true"></i></a>
                <a href="https://twitter.com"><i class="fa fa-twitter header__right__soc-logo" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com"><i class="fa fa-instagram header__right__soc-logo" aria-hidden="true"></i></a>
                <a href="#"><img src="<?php echo SQ_IMG_DIR; ?>/soc-icon.png" class="header__right__soc-logo" alt="Soc Icon"></a>
                <a href="https://plus.google.com/discover"><i class="fa fa-google-plus header__right__soc-logo" aria-hidden="true"></i></a>
                <a href="https://mail.google.com/mail/u/0/"><i class="fa fa-envelope header__right__soc-logo" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</header>
