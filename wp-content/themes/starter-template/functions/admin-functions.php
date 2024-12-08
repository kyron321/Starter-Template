<?php
//Retrieve the Brand Logo from ACF
function get_acf_brand_logo_url()
{
    if (function_exists('get_field')) {
        $logo = get_field('brand_logo', 'option');
        if ($logo) {
            return esc_url($logo['url']);
        }
    }
}

//Replace Login Page Logo with ACF Logo
function custom_login_logo()
{
    $logo_url = get_acf_brand_logo_url();
    if ($logo_url) :
?>
        <style type="text/css">
            #login h1 a {
                background-image: url('<?php echo $logo_url; ?>');
                background-size: contain;
                background-repeat: no-repeat;
                width: 100%;
                height: 80px;
            }
        </style>
<?php
    endif;
}
add_action('login_enqueue_scripts', 'custom_login_logo');
?>