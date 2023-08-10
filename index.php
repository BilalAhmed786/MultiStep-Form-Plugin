<?php

/**
 * Plugin Name:Multi-Step Form
 * Description:Multi-steps forms for beauty salons.
 * Version: 1.0.0
 * Author:Bilal Ahmed  
 */

 
defined('ABSPATH') or die();



function moai_academy_scripts(){
    wp_enqueue_script('jQuery',plugins_url('js/jquery-3.7.0.min.js',__FILE__),'','3.7.0',true);
    // Enqueue jQuery Validate plugin
    wp_enqueue_script('jquery-validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js', array('jquery'), '1.19.3', true);
    wp_enqueue_script('my-script',plugins_url('js/custom.js',__FILE__),[],'','all');
    wp_enqueue_script('stripe', 'https://js.stripe.com/v3/', array(), null, true);
    wp_enqueue_style('custom-bootstrap',plugins_url('css/bootstrap.min.css',__FILE__),[],'','all');
    wp_enqueue_style('multi-step1-css',plugins_url('css/style.css',__FILE__),[],'','all');
   
    }
    add_action('wp_enqueue_scripts','moai_academy_scripts' );






    //pages create on plugin activation

register_activation_hook( __FILE__, 'multi_form_activate' );

function multi_form_activate() {
    // Array of page data (title, content, template, etc.) for multiple pages
    $pages = array(
        array(
            'title'     => 'Form 1',
            'content'   => '[form-1]',
            'template'  => '', // Template name or file path
            'parent'    => 0, // Optional parent page ID
        ),
        array(
            'title'     => 'Form 2',
            'content'   => '[form-2]',
            'template'  => '', // Template name or file path
            'parent'    => 0, // Optional parent page ID
        ),
        array(
            'title'     => 'Form 3',
            'content'   => '[form-3]',
            'template'  => '', // Template name or file path
            'parent'    => 0, // Optional parent page ID
        ),
        array(
            'title'     => 'Form 4',
            'content'   => '[form-4]',
            'template'  => '', // Template name or file path
            'parent'    => 0, // Optional parent page ID
        ),
        array(
            'title'     => 'checkoutForm',
            'content'   => '[checkout]',
            'template'  => '', // Template name or file path
            'parent'    => 0, // Optional parent page ID
        ),
        // Add more pages as needed
    );

    foreach ( $pages as $page ) {
        $page_exists = get_page_by_title( $page['title'] );

        // Create the page if it doesn't exist
        if ( ! $page_exists ) {
             wp_insert_post( array(
                'post_title'     => $page['title'],
                'post_content'   => $page['content'],
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'post_parent'    => $page['parent'],
                'page_template'  => $page['template'],
            ) );

            // Optionally, you can set custom fields or perform other actions on the created page
            // For example:
            // update_post_meta( $new_page_id, 'custom_field_name', 'custom_field_value' );
        }
    }
}






        //tables create on plugin activation 

function multi_form_consultation()

{
    global $wpdb, $table_prefix;
    $wp_opitment = $table_prefix . 'bookopitment';
    $wp_image = $table_prefix . 'images';



    $q = "CREATE TABLE IF NOT EXISTS `$wp_opitment`(`id` INT NOT NULL AUTO_INCREMENT , `consultation` VARCHAR(100) NOT NULL , `date` date, PRIMARY KEY (`id`)) ENGINE = InnoDB";

    $wpdb->query($q);

    $q = "CREATE TABLE IF NOT EXISTS `$wp_image`(`id` INT NOT NULL AUTO_INCREMENT , `images` VARCHAR(100) NOT NULL , `date` date NOT NULL, PRIMARY KEY (`id`)) ENGINE = InnoDB";

    $wpdb->query($q);
}

 register_activation_hook( __FILE__, 'multi_form_consultation' );




 include("includes/includepages.php");
 include("includes/checkout.php");

    