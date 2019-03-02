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
                    <h2 class="main__container__gallery__block-headline"><?php the_title(); ?></h2>
                    <p class="main__container__gallery__block-under-headline">Gallery</p>
                </div>
                <?php 
                    $args = array(
                    'post_type'      => 'sq_gallery-photo',
                    'posts_per_page' => '8',
                    'paged'          => get_query_var('paged')?: 1
                    );

                    $query = new WP_Query($args);

                    if($query->have_posts()) {
                        while($query->have_posts()) {
                            $query->the_post();
                        
                ?>
                <div class="main__container__gallery-image">
                    <?php if(has_post_thumbnail()) { 
                        echo the_post_thumbnail(get_the_ID(), array('class' => 'main__container__gallery-image-photo'));
                    }else {
                        echo '<img src="'.SQ_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                    }; ?>
                    <div class="main__container__gallery-image-box"><img src="<?php echo SQ_IMG_DIR;?>/scope.png" alt="Scope"></div>
                </div>
                <?php
                        }
                    }else {}
            
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </main>
    
    <div class="pagination">
        <div class="pagination__container">
            <?php 
        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i></i> %1$s', __( 'PREV', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( 'NEXT', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
    ?>
        </div>
    </div>
    
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