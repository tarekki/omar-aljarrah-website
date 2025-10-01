<?php
/**
 * Omar Al-Jarrah Consulting Theme functions and definitions
 *
 * @package Omar_Al_Jarrah_Consulting
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme setup
function omar_consulting_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
    add_theme_support('customize-selective-refresh-widgets');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'omar-consulting'),
    ));
}
add_action('after_setup_theme', 'omar_consulting_setup');

// Enqueue scripts and styles
function omar_consulting_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('omar-consulting-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue Google Fonts
    wp_enqueue_style('omar-consulting-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null);
    
    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0');
    
    // Enqueue JavaScript
    wp_enqueue_script('omar-consulting-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('omar-consulting-script', 'omar_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('omar_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'omar_consulting_scripts');

// Register widget areas
function omar_consulting_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'omar-consulting'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'omar-consulting'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'omar_consulting_widgets_init');

// Custom post type for case studies
function omar_consulting_case_studies_post_type() {
    $labels = array(
        'name'                  => _x('Case Studies', 'Post type general name', 'omar-consulting'),
        'singular_name'         => _x('Case Study', 'Post type singular name', 'omar-consulting'),
        'menu_name'             => _x('Case Studies', 'Admin Menu text', 'omar-consulting'),
        'name_admin_bar'        => _x('Case Study', 'Add New on Toolbar', 'omar-consulting'),
        'add_new'               => __('Add New', 'omar-consulting'),
        'add_new_item'          => __('Add New Case Study', 'omar-consulting'),
        'new_item'              => __('New Case Study', 'omar-consulting'),
        'edit_item'             => __('Edit Case Study', 'omar-consulting'),
        'view_item'             => __('View Case Study', 'omar-consulting'),
        'all_items'             => __('All Case Studies', 'omar-consulting'),
        'search_items'          => __('Search Case Studies', 'omar-consulting'),
        'parent_item_colon'     => __('Parent Case Studies:', 'omar-consulting'),
        'not_found'             => __('No case studies found.', 'omar-consulting'),
        'not_found_in_trash'    => __('No case studies found in Trash.', 'omar-consulting'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'case-studies'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('case_studies', $args);
}
add_action('init', 'omar_consulting_case_studies_post_type');

// Custom post type for testimonials
function omar_consulting_testimonials_post_type() {
    $labels = array(
        'name'                  => _x('Testimonials', 'Post type general name', 'omar-consulting'),
        'singular_name'         => _x('Testimonial', 'Post type singular name', 'omar-consulting'),
        'menu_name'             => _x('Testimonials', 'Admin Menu text', 'omar-consulting'),
        'name_admin_bar'        => _x('Testimonial', 'Add New on Toolbar', 'omar-consulting'),
        'add_new'               => __('Add New', 'omar-consulting'),
        'add_new_item'          => __('Add New Testimonial', 'omar-consulting'),
        'new_item'              => __('New Testimonial', 'omar-consulting'),
        'edit_item'             => __('Edit Testimonial', 'omar-consulting'),
        'view_item'             => __('View Testimonial', 'omar-consulting'),
        'all_items'             => __('All Testimonials', 'omar-consulting'),
        'search_items'          => __('Search Testimonials', 'omar-consulting'),
        'parent_item_colon'     => __('Parent Testimonials:', 'omar-consulting'),
        'not_found'             => __('No testimonials found.', 'omar-consulting'),
        'not_found_in_trash'    => __('No testimonials found in Trash.', 'omar-consulting'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'testimonials'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('testimonials', $args);
}
add_action('init', 'omar_consulting_testimonials_post_type');

// Custom post type for resources
function omar_consulting_resources_post_type() {
    $labels = array(
        'name'                  => _x('Resources', 'Post type general name', 'omar-consulting'),
        'singular_name'         => _x('Resource', 'Post type singular name', 'omar-consulting'),
        'menu_name'             => _x('Resources', 'Admin Menu text', 'omar-consulting'),
        'name_admin_bar'        => _x('Resource', 'Add New on Toolbar', 'omar-consulting'),
        'add_new'               => __('Add New', 'omar-consulting'),
        'add_new_item'          => __('Add New Resource', 'omar-consulting'),
        'new_item'              => __('New Resource', 'omar-consulting'),
        'edit_item'             => __('Edit Resource', 'omar-consulting'),
        'view_item'             => __('View Resource', 'omar-consulting'),
        'all_items'             => __('All Resources', 'omar-consulting'),
        'search_items'          => __('Search Resources', 'omar-consulting'),
        'parent_item_colon'     => __('Parent Resources:', 'omar-consulting'),
        'not_found'             => __('No resources found.', 'omar-consulting'),
        'not_found_in_trash'    => __('No resources found in Trash.', 'omar-consulting'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'resources'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-download',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('resources', $args);
}
add_action('init', 'omar_consulting_resources_post_type');

// Add custom fields for testimonials
function omar_consulting_add_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        'Testimonial Details',
        'omar_consulting_testimonial_meta_box_callback',
        'testimonials',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'omar_consulting_add_testimonial_meta_boxes');

function omar_consulting_testimonial_meta_box_callback($post) {
    wp_nonce_field('omar_consulting_testimonial_meta_box', 'omar_consulting_testimonial_meta_box_nonce');
    
    $client_name = get_post_meta($post->ID, '_client_name', true);
    $client_position = get_post_meta($post->ID, '_client_position', true);
    $client_company = get_post_meta($post->ID, '_client_company', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="client_name">Client Name</label></th>';
    echo '<td><input type="text" id="client_name" name="client_name" value="' . esc_attr($client_name) . '" size="50" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="client_position">Client Position</label></th>';
    echo '<td><input type="text" id="client_position" name="client_position" value="' . esc_attr($client_position) . '" size="50" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="client_company">Client Company</label></th>';
    echo '<td><input type="text" id="client_company" name="client_company" value="' . esc_attr($client_company) . '" size="50" /></td>';
    echo '</tr>';
    echo '</table>';
}

function omar_consulting_save_testimonial_meta_box($post_id) {
    if (!isset($_POST['omar_consulting_testimonial_meta_box_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['omar_consulting_testimonial_meta_box_nonce'], 'omar_consulting_testimonial_meta_box')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (isset($_POST['post_type']) && 'testimonials' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    }
    
    if (isset($_POST['client_name'])) {
        update_post_meta($post_id, '_client_name', sanitize_text_field($_POST['client_name']));
    }
    
    if (isset($_POST['client_position'])) {
        update_post_meta($post_id, '_client_position', sanitize_text_field($_POST['client_position']));
    }
    
    if (isset($_POST['client_company'])) {
        update_post_meta($post_id, '_client_company', sanitize_text_field($_POST['client_company']));
    }
}
add_action('save_post', 'omar_consulting_save_testimonial_meta_box');

// Contact form handler
function omar_consulting_handle_contact_form() {
    if (!wp_verify_nonce($_POST['nonce'], 'omar_nonce')) {
        wp_die('Security check failed');
    }
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $company = sanitize_text_field($_POST['company']);
    $message = sanitize_textarea_field($_POST['message']);
    
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission from ' . $name;
    $body = "Name: $name\nEmail: $email\nCompany: $company\nMessage: $message";
    
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success('Message sent successfully!');
    } else {
        wp_send_json_error('Failed to send message.');
    }
}
add_action('wp_ajax_omar_contact_form', 'omar_consulting_handle_contact_form');
add_action('wp_ajax_nopriv_omar_contact_form', 'omar_consulting_handle_contact_form');

// Customizer settings
function omar_consulting_customize_register($wp_customize) {
    // Add a section for theme options
    $wp_customize->add_section('omar_consulting_options', array(
        'title'    => __('Theme Options', 'omar-consulting'),
        'priority' => 30,
    ));
    
    // Add setting for contact email
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'omar@aljarrahconsulting.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label'   => __('Contact Email', 'omar-consulting'),
        'section' => 'omar_consulting_options',
        'type'    => 'email',
    ));
    
    // Add setting for contact phone
    $wp_customize->add_setting('contact_phone', array(
        'default'           => '+1 (555) 123-4567',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_phone', array(
        'label'   => __('Contact Phone', 'omar-consulting'),
        'section' => 'omar_consulting_options',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'omar_consulting_customize_register');

// Add theme support for custom background
add_theme_support('custom-background', array(
    'default-color' => 'ffffff',
));

// Add theme support for custom header
add_theme_support('custom-header', array(
    'default-image'      => '',
    'default-text-color' => '000000',
    'width'              => 1200,
    'height'             => 400,
    'flex-height'        => true,
    'flex-width'         => true,
));
