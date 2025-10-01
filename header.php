<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
    
    <!-- Professional Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Cairo:wght@300;400;500;600;700&family=Noto+Sans+Arabic:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Navigation -->
<nav class="navbar">
    <div class="nav-container">
        <div class="nav-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/logo.jpg" alt="Omar Al-Jarrah Logo" class="logo-img" />
                <span class="logo-text">Omar Al-Jarrah</span>
            </a>
        </div>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="<?php echo esc_url(home_url('/')); ?>#home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo esc_url(home_url('/')); ?>#about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo esc_url(home_url('/')); ?>#services" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo esc_url(home_url('/')); ?>#portfolio" class="nav-link">Portfolio</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo esc_url(home_url('/')); ?>#contact" class="nav-link">Contact</a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</nav>
