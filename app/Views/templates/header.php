<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zabeera</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
    <script src="https://code.iconify.design/iconify-icon/2.0.0/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="<?= base_url('images/favicon.png'); ?>" type="image/x-icon">
</head>
<body>
    <div class="top-header">
        <span>Hot Promo Code up to <b>50%</b></span>
    </div>
    <nav class="padding-container">
        <div class="logo">
            <img src="<?= base_url('images/logo.png'); ?>" alt="Zabeera Logo Png | Zabeera Website">
        </div>
        <div class="menu_layout" id="popup">
            <ul>
                <li <?php if (isset($is_home_active) && $is_home_active) echo 'class="active"'; ?>><a href="/">Home</a></li>
                <li  <?php if (isset($is_about_active) && $is_about_active) echo 'class="active"'; ?>><a href="<?= base_url('about'); ?>">About</a></li>
                <li  <?php if (isset($is_product_active) && $is_product_active) echo 'class="active"'; ?>><a href="<?= base_url('product'); ?>">Product</a></li>
                <li  <?php if (isset($is_faq_active) && $is_faq_active) echo 'class="active"'; ?>><a href="<?= base_url('faq'); ?>">FaQ</a></li>
                <div class="close_btn" id="closePopup">
                    <iconify-icon icon="ic:round-close"></iconify-icon>
                    <span>CLOSE</span>
                </div>
            </ul>
            <div class="overlay_menu"></div>
        </div>
        <div class="layout_nav">
            <a href="#"><button>Zabeera Academy</button></a>
            <button class="hamburger" id="togglePopup"><iconify-icon icon="solar:hamburger-menu-outline"></iconify-icon></button>
        </div>
    </nav>