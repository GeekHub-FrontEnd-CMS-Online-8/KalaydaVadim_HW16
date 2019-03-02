<?php
/* 
    Template Name: Page Blog
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
        
        add_action( 'wp_enqueue_scripts', 'connectAllForBlog');
        
        function connectAllForBlog() {
            wp_enqueue_style( 'blog', SQ_CSS_DIR.'/blog.css');
            wp_enqueue_style( 'sec-footer', SQ_CSS_DIR.'/sec-footer.css');
        }
    
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(360, 360, true);
    ?>
    <?php
        wp_head();
    ?>
</head>
<body>
   
    <?php get_header(); ?>
    
    <div class="blogs">
        <div class="blogs__container">
            <?php 
                
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => '6',
                    'paged'          => get_query_var('paged')?: 1
                );
            
                $query = new WP_Query($args);
            
                if($query->have_posts()) {
                    while($query->have_posts()) {
                        $query->the_post();
                        
                        ?>
                        <div class="blogs__post">
                <div class="blogs__post__top">
                    <div class="blogs__post__top-image">
                        <?php if(has_post_thumbnail()) { 
                            echo get_the_post_thumbnail(get_the_ID());
                        }else {
                            echo '<img class="blogs__post__top-image" src="'.SQ_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                        }; ?>
                    </div>
                    <h2 class="blogs__post__top-headline"><?php the_title(); ?></h2>
                    <div class="blogs__post__top-text"><?php the_excerpt(); ?></div>
                    <div class="blogs__posts__top__bottom">
                        <a class="blogs__post__top__bottom-btn" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                    <div class="blogs__posts__top__under__bottom">
                        <p class="blogs__posts__top__under__bottom-left-date"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time('d/m/Y'); ?></p>
                        <p class="blogs__posts__top__under__bottom-right-comments">
                            <i class="fa fa-comment" aria-hidden="true"></i> <?php comments_number(0, 1, '%'); ?>
                        </p>
                    </div>
                </div>
                <hr class="blogs-under-post">
            </div>
            <?php
                    }
                    
                } else {}
            
                wp_reset_postdata();
            
            ?>
            
        </div>
    </div>
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
    
    <?php get_footer('portfolio'); ?>
    
    <?php
        wp_footer();
    ?>
</body>
</html>