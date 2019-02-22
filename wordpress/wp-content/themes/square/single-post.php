<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KalaydaVadim_HW16</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/basic.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/single-post.css">
    <link rel="stylesheet" href="css/third-footer.css">
    <?php 
        wp_header();
    ?>
</head>
<body>
    <?php get_header(); ?>
    <main>
        <div class="post">
            <div class="post__container">
                <img src="<?php echo SQ_IMG_DIR; ?>/post-image.png" alt="Post Image" class="post-image">
                <h2 class="post-headline">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                <div class="post__soc">
                    <p class="post__soc-text"><i class="fa fa-calendar-o" aria-hidden="true"> </i> 02/03/2014</p>
                    <p class="post__soc-text"><i class="fa fa-comment" aria-hidden="true"> </i> 201</p>
                    <p class="post__soc-text"><i class="fa fa-heart" aria-hidden="true"> </i> 400</p>
                </div>
                <div class="post__text">
                    <p class="post__text-text"><span>Duis dapibus aliquam mi</span>, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et <span>malesuada fames ac turpis egestas</span>. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <p class="post__text-text">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. <span>Curabitur vitae velit in neque</span> dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                    <p class="post__text-text">Duis dapibus aliquam mi, <span>eget euismod sem scelerisque ut</span>. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <p class="post__text-text">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. <span>Vivamus at elit quis urna adipiscing iaculis</span>. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. <span>Pellentesque habitant</span> morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                </div>
                <div class="post__share">
                    <div class="post__share__container">
                        <div class="post__share__left">
                            <a href="#" class="post__share__left-share">share</a>
                            <a href="https://www.facebook.com" class="post__share__left-link">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="https://twitter.com" class="post__share__left-link">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.pinterest.com" class="post__share__left-link">
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="post__share__right">
                            <a href="#" class="post__share__right-link">
                                <i class="fa fa-retweet" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="post__comments">
                    <div class="post__comments__container">
                        <p class="post__comments-much">10 Comments</p>
                        <div class="post__comments__comment">
                            <div class="post__comments__comment__about">
                                <div class="post__comments__comment__about__left">
                                    <p class="post__comments__comment__about__left-name">
                                        Robert Smith
                                    </p>
                                    <p class="post__comments__comment__about__left-date">
                                        02 June 2014, 15:20
                                    </p>
                                </div>
                                <div class="post__comments__comment__about__right">
                                    <a href="#" class="post__comments__comment__about__right-reply">
                                        <i class="fa fa-repeat" aria-hidden="true"> </i> REPLY
                                    </a>
                                </div>
                            </div>
                            <div class="post__comments__comment__content">
                                <img src="<?php echo SQ_IMG_DIR; ?>/comment-photo.png" class="post__comments__comment__content-photo" alt="Comment Photo">
                                <p class="post__comments__comment__content-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra, lacus turpis dapibus magna, eget aliquam diam erat at velit.
                                </p>
                            </div>
                        </div>
                        <div class="post__comments__comment post__comments__comment__reply">
                            <div class="post__comments__comment__about">
                                <div class="post__comments__comment__about__left">
                                    <p class="post__comments__comment__about__left-name">
                                        Greg Rouge
                                    </p>
                                    <p class="post__comments__comment__about__left-date">
                                        02 June 2014, 15:20
                                    </p>
                                </div>
                                <div class="post__comments__comment__about__right"></div>
                            </div>
                            <div class="post__comments__comment__content">
                                <img src="<?php echo SQ_IMG_DIR; ?>/comment-photo.png" class="post__comments__comment__content-photo" alt="Comment Photo">
                                <p class="post__comments__comment__content-text">
                                    Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. 
                                </p>
                            </div>
                        </div>
                        <div class="post__comments__comment">
                            <div class="post__comments__comment__about">
                                <div class="post__comments__comment__about__left">
                                    <p class="post__comments__comment__about__left-name">
                                        Ely Grogoelar
                                    </p>
                                    <p class="post__comments__comment__about__left-date">
                                        02 June 2014, 15:20
                                    </p>
                                </div>
                                <div class="post__comments__comment__about__right">
                                    <a href="#" class="post__comments__comment__about__right-reply">
                                        <i class="fa fa-repeat" aria-hidden="true"> </i> REPLY
                                    </a>
                                </div>
                            </div>
                            <div class="post__comments__comment__content">
                                <img src="<?php echo SQ_IMG_DIR; ?>/comment-photo.png" class="post__comments__comment__content-photo" alt="Comment Photo">
                                <p class="post__comments__comment__content-text">
                                    Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. 
                                </p> 
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="post__bottom">
                    <div class="post__bottom__container">
                        <h2 class="post__bottom-headline">Leave a comment</h2>
                        <form action="post" class="post__bottom__form">
                            <div class="post__bottom__form__top-inputs">
                                <input type="text" name="name" class="post__bottom__form__top-inputs-input" placeholder="Name" required>
                                <input type="email" name="email" class="post__bottom__form__top-inputs-input" placeholder="E-mail" required>
                            </div>
                            <div class="post__bottom__form__middle-inputs">
                                <input type="text" name="website" class="post__bottom__form__middle-inputs-input" placeholder="Web site">
                                <input type="text" name="job" class="post__bottom__form__middle-inputs-input" placeholder="Job">
                            </div>
                            <div class="post__bottom__form__bottom-inputs">
                                <textarea name="comment" class="post__bottom__form__bottom-inputs-textarea" placeholder="Comment"></textarea>
                                <input type="button" name="send" class="post__bottom__form__bottom-inputs-send" value="Send">
                            </div>
                        </form>
                        <p class="post__bottom-text-under-form">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis semper nisl, vitae malesuada massa egestas a. Vestibulum vestibulum urna sapien, eu bibendum magna ornare non.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__top">
                <div class="footer__top__left">
                    <div class="footer__top__left__top">
                        <h3 class="footer__top__left__top-headline">Fashion Workshop</h3>
                        <p class="footer__top__left__top-date">Nov 21 - 23</p>
                        <p class="footer__top__left__top-time">9:00am - 4:00pm</p>
                    </div>
                    <div class="footer__top__left__bottom">
                        <button class="footer__top__left__bottom-btn shake">rsvp</button>
                    </div>
                </div>
                <div class="footer__top__center">
                    <h3 class="footer__top__center-headline">Recent Post</h3>
                    <div class="footer__top__center__content">
                        <div class="footer__top__center__content__row">
                            <img src="<?php echo SQ_IMG_DIR; ?>/woman1.png" class="footer__top__center__content__row-photo" alt="Photo">
                            <div class="footer__top__center__content__row__text">
                                <p class="footer__top__center__content__row__text-headline">New Gallery Set</p>
                                <p class="footer__top__center__content__row__text-date">09.12.2014</p>
                                <p class="footer__top__center__content__row__text-about">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci, ac venenatis ante venenatis eget. <a href="home.php" class="footer__top__center__content__row__text-about-link"> read more</a></p>
                            </div>
                        </div>
                        <div class="footer__top__center__content__row">
                            <img src="<?php echo SQ_IMG_DIR; ?>/woman2.png" class="footer__top__center__content__row-photo" alt="Photo">
                            <div class="footer__top__center__content__row__text">
                                <p class="footer__top__center__content__row__text-headline">wedding workshop</p>
                                <p class="footer__top__center__content__row__text-date">09.12.2014</p>
                                <p class="footer__top__center__content__row__text-about">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci, ac venenatis ante venenatis eget. <a href="home.php" class="footer__top__center__content__row__text-about-link"> read more</a></p>
                            </div>
                        </div>
                        <div class="footer__top__center__content__row">
                            <img src="<?php echo SQ_IMG_DIR; ?>/baby.png" class="footer__top__center__content__row-photo" alt="Photo">
                            <div class="footer__top__center__content__row__text">
                                <p class="footer__top__center__content__row__text-headline">Personal Project</p>
                                <p class="footer__top__center__content__row__text-date">09.12.2014</p>
                                <p class="footer__top__center__content__row__text-about">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci, ac venenatis ante venenatis eget. <a href="home.php" class="footer__top__center__content__row__text-about-link"> read more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__top__right">
                    <h2 class="footer__top__right-headline">Category</h2>
                    <ul class="footer__top__right__categorys">
                        <li class="footer__top__right__categorys-list">Fashion</li>
                        <li class="footer__top__right__categorys-list">Collections</li>
                        <li class="footer__top__right__categorys-list">World</li>
                        <li class="footer__top__right__categorys-list">Photography</li>
                        <li class="footer__top__right__categorys-list">General</li>
                        <li class="footer__top__right__categorys-list">Info</li>
                        <li class="footer__top__right__categorys-list">Catalog</li>
                        <li class="footer__top__right__categorys-list">Video</li>
                        <li class="footer__top__right__categorys-list">Showreal</li>
                        <li class="footer__top__right__categorys-list">Glamour</li>
                        <li class="footer__top__right__categorys-list">Accessories</li>
                    </ul>
                </div>
            </div>
            <div class="footer__sponcors">
                <img src="<?php echo SQ_IMG_DIR; ?>/sponcor1.png" class="footer__sponcors-sponcor" alt="Sponcor 1">
                <img src="<?php echo SQ_IMG_DIR; ?>/sponcor2.png" class="footer__sponcors-sponcor" alt="Sponcor 2">
                <img src="<?php echo SQ_IMG_DIR; ?>/sponcor3.png" class="footer__sponcors-sponcor" alt="Sponcor 3">
                <img src="<?php echo SQ_IMG_DIR; ?>/sponcor4.png" class="footer__sponcors-sponcor" alt="Sponcor 4">
            </div>
            <div class="footer__bottom">
                <p class="footer__bottom-text1">Created by 2ndself.com, with exclusive for theuncreativelab.com</p>
                <p class="footer__bottom-copyright">© 2014 Square. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    
    <?php 
        wp_footer();
    ?>
</body>
</html>
