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
        
        add_action( 'wp_enqueue_scripts', 'connectAllForSingle');
        
        function connectAllForSingle() {
            wp_enqueue_style( 'single-post', SQ_CSS_DIR.'/single-post.css');
            wp_enqueue_style( 'third-footer', SQ_CSS_DIR.'/third-footer.css');
        }
        
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(750, 750, true);
    ?>
    <?php 
        wp_head();
    ?>
</head>
<body>
    <?php get_header(); ?>
    <main>
       <?php while ( have_posts() ){ the_post(); ?>
        <div class="post">
            <div class="post__container">
                <div class="post-image">
                <?php if(has_post_thumbnail()) {
                    echo the_post_thumbnail(get_the_ID(), array('class' => 'post-image'));
                } else {
                    echo '<img src="'.SQ_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                }
                ?>
                </div>
                <h2 class="post-headline"><?php single_post_title(); ?></h2>
                <div class="post__soc">
                    <p class="post__soc-text"><i class="fa fa-calendar-o" aria-hidden="true"> </i> <?php the_date('d/m/Y'); ?></p>
                    <p class="post__soc-text"><i class="fa fa-comment" aria-hidden="true"> </i> <?php comments_number(); ?></p>
                    <p class="post__soc-text"><i class="fa fa-heart" aria-hidden="true"> </i> 400</p>
                </div>
                <div class="post__text">
                    <p class="post__text-text"><?php the_content(); ?></p>
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
                        <div class="commentlist">
                            <?php
                                $comments_args = array(
                                    // изменим название кнопки
                                    'label_submit' => 'Send',
                                    // заголовок секции ответа
                                    'title_reply'=>'Write a Reply or Comment',
                                    // удалим текст, который будет показано после того как коммент отправлен
                                    'comment_notes_after' => '',
                                    // переопределим textarea (тело формы)
                                    'comment_field' => '<p class="comment-form-comment"> <textarea id="comment" name="comment" cols="45" rows="8"  aria-required="true" required="required" placeholder="Comment"></textarea></p>',
                            );
                                    
                                comment_form($comments_args);
                            ?>
                        </div>
                        <p class="post__comments-much"><?php comments_number(0, 1, '%'); ?> Comments</p>
                        <div class="post__comments__comment">
                           <?php
                                // The Query
                                $comments_query = new WP_Comment_Query;
                                $comments = $comments_query->query($args);

                                // Comment Loop
                                if ( $comments ) {
                                    foreach ( $comments as $comment ) {
                            ?>
                            
                                <div class="post__comments__comment__about">
                                <div class="post__comments__comment__about__left">
                                    <p class="post__comments__comment__about__left-name">
                                        <?php echo get_comment_author( $comment_ID ) ?>
                                    </p>
                                    <p class="post__comments__comment__about__left-date">
                                        <?php the_time('j F Y, G:i'); ?>
                                    </p>
                                </div>
                                <div class="post__comments__comment__about__right">
                                    <a href="#" class="post__comments__comment__about__right-reply">
                                        <i class="fa fa-repeat" aria-hidden="true"> </i> REPLY
                                    </a>
                                </div>
                            </div>
                            <div class="post__comments__comment__content">
                                <?php
                                $size = 80;
                                echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?>
                                <p class="post__comments__comment__content-text">
                                    <?php echo $comment->comment_content; ?>
                                </p>
                            </div>
                        </div>
                           
                            
                            <?php
                                    }
                                }
                            ?>
                    </div> 
                </div>
                <div class="post__bottom">
                    <div class="post__bottom__container">
                        <h2 class="post__bottom-headline">Leave a comment</h2>
                        <?php echo do_shortcode('[contact-form-7 id="24" title="Post form"]'); ?>
                        <p class="post__bottom-text-under-form">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis semper nisl, vitae malesuada massa egestas a. Vestibulum vestibulum urna sapien, eu bibendum magna ornare non.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </main>
    
    <?php 
        get_footer('single');
    ?>
    
    <?php 
        wp_footer();
    ?>
</body>
</html>
