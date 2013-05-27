<?php

function quitar_barra_administracion(){
	$current_user = wp_get_current_user();
	$roles = $current_user->roles;
	if (in_array('administrator', $roles)) {
		return true;
	} else {
		return false;
	}
}
 
add_filter( 'show_admin_bar' , 'quitar_barra_administracion');


function si2_check_user(){
//echo "<br><br><br>in function";
$current_user = wp_get_current_user();
$roles = $current_user->roles;
 if ((!in_array('administrator', $roles))&&(!in_array('author', $roles))) {
	 header("Location: ".get_bloginfo('url')); //redirigimos a la home si no es admin
 }
}
//echo "<br><br><br>out function";
//add_action('admin_init', 'si2_check_user' );

/* ------------ LOGIN ----------------------- */
function si2_login_url( $url ) {
    return "http://si2.info/";
}
add_filter( 'login_headerurl', 'si2_login_url' );



function si2_login_msg( $url ) {
    return "
	<div style='text-align: center;'>
	<p></p>
	</div>
	
	";
}
add_filter( 'login_message', 'si2_login_msg' );


function si2_login_headertitle( $url ) {
    return "Funciona gracias a Wordpress + SI2 | desarrollo web Granada";
}
//add_filter( 'login_headertitle', 'si2_login_headertitle' );

// Logo login
//---------------------------------------------------------------------
function my_custom_login_logo() {
echo '<style type="text/css">
h1 a { background-image:url(wp-content/themes/wordpress-bootstrap/images/logo_prov_acceso.png) !important;}
</style>';
}
add_action('login_head', 'my_custom_login_logo');
//---------------------------------------------------------------------

?>