<?php
/*
 * Create custom theme dashboard footer message
 */

function endo_admin_footer_text() {
    return '<span id="footer-thankyou">Thank you for creating with <a href="http://www.endocreative.com/" target="_blank" rel="noopener noreferrer">Endo Creative Web Design and Development</a>, Fort Collins, CO.</span>';
}
add_filter( 'admin_footer_text', 'endo_admin_footer_text' );

/*
 * Add custom login screen styles
 */

function endo_login_logo() {
?>
    <style type="text/css">
        body.login div#login h1 a {
            background: url(<?php echo get_template_directory_uri(); ?>/images/logo.png) no-repeat center center / contain;
            width: 200px;
            height: 200px;
            margin-bottom: 0;
        }
        body.login {
            background: #b2947a;
        }
        .login form {
            background: #fff;
            border-radius: 4px;
        }
        .login #nav a, .login #backtoblog a {
            text-shadow: none;
        }
        .login #wp-submit {
            background: #b2947a;
            text-shadow: none;
            color: #fff;
            box-shadow: 0 1px 0 #b2947a;
            border-color: #b2947a;
        }
    </style>
<?php
    }
add_action( 'login_enqueue_scripts', 'endo_login_logo' );

function endo_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'endo_login_logo_url' );

function endo_login_logo_url_title() {
    return get_bloginfo('name');
}
add_filter( 'login_headertitle', 'endo_login_logo_url_title' );
