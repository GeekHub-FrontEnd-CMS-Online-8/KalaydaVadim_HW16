<div class="header__left">
               <div class="header__left-toggle-btn" id="header__left-toggle-btn" onclick=" openMenu(); openMenuClickFunc()">
                <i class="fa fa-bars fa-2x header-toggle-btn-open" id="header__left-toggle-btn-open" aria-hidden="true"></i>
            </div>
            <ul class="header__left__nav" id="nav">
                <li class="header__left__nav-list"><a href="<?php get_page_uri('portfolio'); ?>">Portfolio</a></li>
                <li class="header__left__nav-list"><a href="<?php get_permalink(45); ?>">Blog</a></li>
                <li class="header__left__nav-list"><a href="<?php echo home_url(); ?>">Clients</a></li>
                <li class="header__left__nav-list"><a href="<?php echo home_url(); ?>">News</a></li>
                <li class="header__left__nav-list"><a href="<?php echo home_url(); ?>">About Me</a></li>
                <li class="header__left__nav-list"><a href="<?php echo home_url(); ?>">Contact</a></li>
            </ul>
           </div>