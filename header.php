<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-100'); ?>>

<header class="bg-gray-900 text-white shadow-md">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
        
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" 
                     alt="<?php bloginfo('name'); ?>" 
                     class="h-10 w-auto">
            </a>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex items-center space-x-8">
            <a href="<?php echo home_url(); ?>" class="hover:text-gray-300">Home</a>
            <a href="<?php echo site_url('/about'); ?>" class="hover:text-gray-300">About Us</a>
            <a href="<?php echo site_url('/contact'); ?>" class="hover:text-gray-300">Contact</a>
        </nav>

        <!-- Mobile Button -->
        <button id="menu-btn" class="md:hidden focus:outline-none text-2xl">
            ☰
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="menu" class="hidden md:hidden px-6 pb-4">
        <a href="<?php echo home_url(); ?>" class="block py-2">Home</a>
        <a href="<?php echo site_url('/about'); ?>" class="block py-2">About Us</a>
        <a href="<?php echo site_url('/contact'); ?>" class="block py-2">Contact</a>
    </div>
</header>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    if (btn && menu) {
        btn.addEventListener('click', function () {
            menu.classList.toggle('hidden');
        });
    }
});
</script>