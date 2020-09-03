<?php

/***
 * Personalisation du BackOffice
 */


/*** Cette fonction cache les nouvelles mises à jours ***/

function hide_wp_update_nag() {
	remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action('admin_menu','hide_wp_update_nag');


/*** Permet la simplification de l'interfaces administrateur  ***/

function remove_menu_pages() {
	//remove_menu_page('tools.php');
	//remove_menu_page('edit-comments.php');
	//remove_menu_page('users.php');
}
add_action( 'admin_menu', 'remove_menu_pages' );

/*** Ici on supprime les attributs hauteurs et largeurs que wp impose. **/
function bbx_images( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return $html;
}
add_filter( 'post_thumbnail_html', 'bbx_images', 10 );
add_filter( 'image_send_to_editor', 'bbx_images', 10 );
add_filter( 'wp_get_attachment_link', 'bbx_images', 10 );
/* ---------------------END----------------------- */




/**
 * Personalisation de l'écran login
 **/


/** Remplacement du logo Wp par le logo memory (voir login.css) **/

function childtheme_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo( 'stylesheet_directory' ) . '/styles/login.css" />';
}
add_action( 'login_head', 'childtheme_custom_login' );
/* ---------------------END----------------------- */





// Suppression de la bar de menu
add_filter('show_admin_bar', '__return_false');


// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');


// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');


/*
 * Liens vers les autres fichier (js/css/scss)
 */
function register_assets() {

    // jQuery
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true);
    // Global css with definition of theme
    wp_enqueue_style('memory_blog', get_stylesheet_uri(), array(), '1.0');
    //global script
    wp_enqueue_script('memory_blog', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script('memory_blog', get_template_directory_uri() . '/js/scrollTo.js', array('jquery'), '1.0', true);


    //Responsive css
    wp_enqueue_style('memory_blog', get_template_directory_uri() . '/styles/mobile.scss');
    wp_enqueue_style('memory_blog', get_template_directory_uri() . '/styles/tablet.scss');
    wp_enqueue_style('memory_blog', get_template_directory_uri() . '/styles/desktop.scss');
    // Boostrap css
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/styles/bootstrap.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/styles/bootstrap-grid.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/styles/bootstrap-reboot.css');
    // bootstrap JS
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.js', array( 'jquery' ), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'register_assets' );

// Ajout du format SVG au cas ou
function add_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'add_mime_types' );


/*
 * COMMENTS
 */
/*
 modifie le texte avant le formulaire de commentaires */
/**function cd_pre_comment_text( $arg ) {

	unset($arg['comment_notes_before']);

	$arg['comment_notes_before'] = '
<p class="comment-notes">Votre adresse de messagerie ne sera pas publi&eacute;e. Les champs obligatoires sont indiqu&eacute;s avec *.
<br />Les commentaires sont publi&eacute;s apr&egrave;s mod&eacute;ration.</p>
';
	return $arg;
}
add_filter( 'comment_form_defaults', 'cd_pre_comment_text' );
*/


/*
 * Google Captcha
 */

/**
 * Google recaptcha add before the submit button
 * data-sitekey & secret
 */
function add_google_recaptcha($submit_field) {
	$submit_field['submit_field'] = '<div class="g-recaptcha" data-sitekey="6Le0wbIUAAAAAIGMqnuGl3uPZXhCAYAamv4pZ-eH"></div><br>' . $submit_field['submit_field'];
	return $submit_field;
}
add_filter('comment_form_defaults','add_google_recaptcha');





/** Ajout de la taxonomie "type de contenu" **/


function register_post_types() {


	// Déclaration de la Taxonomie
	$labels = array(
		'name'          => 'Type de contenu',
		'new_item_name' => 'Nom du nouveau contenu',
		/*'parent_item'   => 'Type de contenu parent',*/
	);

	$args = array(
		'labels'       => $labels,
		'public'       => true,
		'show_in_rest' => true,
		'hierarchical' => true,
	);

	register_taxonomy( 'type-contenu', 'post', $args );
}

add_action( 'init', 'register_post_types' );






//Gestion des images



function wpb_image_editor_default_to_gd( $editors ) {
	$gd_editor = 'WP_Image_Editor_GD';
	$editors = array_diff( $editors, array( $gd_editor ) );
	array_unshift( $editors, $gd_editor );
	return $editors;
}
add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );
/* ---------------------END----------------------- */









/**
 * Hooks pour modifier les champs des commentaires
**/

function bs_modified_comment_reply_text( $link ) {
	$link = str_replace( 'Reply', 'Respond', $link );
	return $link;
}
add_filter( 'comment_reply_link', 'bs_modified_comment_reply_text' );


/** Supprimer le champ site web des commentaires **/

function delete_url_field($fields) {
	unset($fields['url']);
	return $fields;
}

add_filter('comment_form_default_fields','delete_url_field');


/** Positionne la zone commentaire en bas du formulaire **/

function change_textarea_position($fields){
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}
add_filter('comment_form_fields', 'change_textarea_position');


/** Remplace adresse de messagerie par Email **/

function change_comment_field($field){
	$field['author'] = '<label for="email">Nom <span class="required">*</span></label>' . '<input id="email" name="email" type="text" placeholder="Votre nom">';
	$field['email'] = '<label for="email">Email <span class="required">*</span></label>' . '<input id="email" name="email" type="text" placeholder="Votre adresse mail">';

	return $field;
}
add_filter('comment_form_default_fields','change_comment_field');
/* ---------------------END----------------------- */

