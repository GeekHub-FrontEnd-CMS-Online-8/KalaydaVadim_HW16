<?php
/*
Plugin Name: Расширенные комментарии
Version: 1.0
Description: Плагин, добавляющий произвольные поля в форму комментариев.
Author: VadimKalayda
*/

add_action('comment_form_default_fields', 'extend_comment_custom_default_fields');
function extend_comment_custom_default_fields($fields) {

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields[ 'author' ] = '<p class="comment-form-author">'.
	  '<label for="author">' . __( 'Name' ) . '</label>'.
	  ( $req ? '<span class="required">*</span>' : '' ).
	  '<input id="author" name="author" type="text" value="'. esc_attr( $commenter['comment_author'] ) .
	  '" size="30" tabindex="1"' . $aria_req . ' /></p>';

	$fields[ 'email' ] = '<p class="comment-form-email">'.
	  '<label for="email">' . __( 'Email' ) . '</label>'.
	  ( $req ? '<span class="required">*</span>' : '' ).
	  '<input id="email" name="email" type="text" value="'. esc_attr( $commenter['comment_author_email'] ) .
	  '" size="30"  tabindex="2"' . $aria_req . ' /></p>';

	$fields[ 'url' ] = '<p class="comment-form-url">'.
	  '<label for="url">' . __( 'Website' ) . '</label>'.
	  '<input id="url" name="url" type="text" value="'. esc_attr( $commenter['comment_author_url'] ) .
	  '" size="30"  tabindex="3" /></p>';

  return $fields;
}

//

add_action( 'comment_form_logged_in_after', 'extend_comment_custom_fields' );
add_action( 'comment_form_after_fields', 'extend_comment_custom_fields' );
function extend_comment_custom_fields() {

	echo '<p class="comment-form-title">'.
			  '<label for="title">' . __( 'Comment Title' ) . '</label>'.
			  '<input id="title" name="title" type="text" size="16"/></p>';

    echo '<p class="comment-form-content">'.
			  '<label for="content">' . __( 'Comment Content' ) . '</label>'.
			  '<input id="content" name="content" type="text" size="14"/></p>';


	echo'</span></p>';
}

//

add_action( 'comment_post', 'save_extend_comment_meta_data' );
function save_extend_comment_meta_data( $comment_id ){

	if( !empty( $_POST['title'] ) ){
		$title = sanitize_text_field($_POST['title']);
		add_comment_meta( $comment_id, 'title', $title );
	}

	if( !empty( $_POST['content'] ) ){
		$content = intval($_POST['content']);
		add_comment_meta( $comment_id, 'content', $content );
	}

}

//

add_action( 'add_meta_boxes_comment', 'extend_comment_add_meta_box' );
function extend_comment_add_meta_box(){
	add_meta_box( 'title', __( 'Comment Metadata - Extend Comment' ), 'extend_comment_meta_box', 'comment', 'normal', 'high' );
}

// Отображаем наши поля
function extend_comment_meta_box( $comment ){
	$title  = get_comment_meta( $comment->comment_ID, 'title', true );
	$content = get_comment_meta( $comment->comment_ID, 'content', true );

	wp_nonce_field( 'extend_comment_update', 'extend_comment_update', false );
	?>
	<p>
		<label for="content"><?php _e( 'Comment Text' ); ?></label>
		<input type="text" name="content" value="<?php echo esc_attr( $content ); ?>" class="widefat" />
	</p>
	<p>
		<label for="title"><?php _e( 'Comment Title' ); ?></label>
		<input type="text" name="title" value="<?php echo esc_attr( $title ); ?>" class="widefat" />
	</p>
	<?php
}

//


add_action( 'edit_comment', 'extend_comment_edit_meta_data' );
function extend_comment_edit_meta_data( $comment_id ) {
	if( ! isset( $_POST['extend_comment_update'] ) || ! wp_verify_nonce( $_POST['extend_comment_update'], 'extend_comment_update' ) )
	return;

	if( !empty($_POST['title']) ){
		$phone = sanitize_text_field($_POST['title']);
		update_comment_meta( $comment_id, 'title', $title );
	}
	else
		delete_comment_meta( $comment_id, 'title');

	if( !empty($_POST['content']) ){
		$title = sanitize_text_field($_POST['content']);
		update_comment_meta( $comment_id, 'content', $content );
	}
	else
		delete_comment_meta( $comment_id, 'content');


}