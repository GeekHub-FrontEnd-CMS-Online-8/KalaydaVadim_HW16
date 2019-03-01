<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <?php 
        
        add_action( 'wp_enqueue_scripts', 'connectCSSForHome');
        
        function connectCSSForHome() {
            wp_enqueue_style( 'home', SQ_CSS_DIR.'/home.css');
            wp_enqueue_style( 'slider', SQ_CSS_DIR.'/slider.css');
            wp_enqueue_style( 'footer', SQ_CSS_DIR.'/footer.css');
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
            <div class="slider-container">
                <div class="slider-content">
                    <?php 
                    
                        $args = array(
                            'post_type'      => 'sq_carousel',
                            'posts_per_page' => '200',
                            'paged'          => get_query_var('paged')?: 1
                        );

                        $query = new WP_Query($args);

                        if($query->have_posts()) {
                            while($query->have_posts()) {
                                $query->the_post();
                    ?>
                    <div class="slider-single">
                        <div class="slider-single-image">
                            
                            <?php if(has_post_thumbnail()) { 
                                echo the_post_thumbnail(get_the_ID(), array('class' => 'slider-single-image'));
                            }else {
                                echo '<img src="'.SQ_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                            }; ?>
                            
                        </div>
                        <div class="slider-single__manage-block">
                            <div class="slider-single__manage-block__top">
                                <a href="#" class="slider-single__manage-block__top-resize-btn">
                                    <i class="fa fa-expand" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="slider-single__manage-block__middle">
                                <div class="slider-single__manage-block__middle-name"><?php the_title(); ?></div>
                                <div class="slider-single__manage-block__middle-job"><?php the_excerpt(); ?></div>
                                <div class="slider-single__manage-block__middle-about"><?php the_content();?></div>
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
                    <?php
                        }
                    
                        } else {}

                        wp_reset_postdata();

                    ?>
                    
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
