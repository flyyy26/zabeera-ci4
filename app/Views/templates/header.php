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
<!-- <div class="nav-menu">
    <div class="logo-menu">
        <img src="<?= base_url('images/logo.png'); ?>" alt="Logo Adonia">
    </div>
    <button class="hamburger-menu" onClick="popupMenuMobile();">
        <iconify-icon icon="ion:menu-outline"></iconify-icon>
    </button>
    <div class="menu" id="menuMobilePopup">
        <div class="header-menu-mobile">
            <img src="<?= base_url('images/logo.png'); ?>" alt="Logo Adonia">
            <button class="close-menu" onClick="popupMenuMobile();"><iconify-icon icon="ic:round-close"></iconify-icon></button>
        </div>
        <ul>
            <li <?php if (isset($is_home_active) && $is_home_active) echo 'class="active"'; ?>><a href="/">Home</a></li>
            <li  <?php if (isset($is_about_active) && $is_about_active) echo 'class="active"'; ?>><a href="<?= base_url('about'); ?>">About</a></li>
            <li  <?php if (isset($is_healthySkin_active) && $is_healthySkin_active) echo 'class="active"'; ?>><a href="<?= base_url('healthy-skin-product'); ?>">Healthy Skin Products</a></li>
            <li  <?php if (isset($is_affiliate_active) && $is_affiliate_active) echo 'class="active"'; ?>><a href="<?= base_url('affiliate'); ?>">Affiliate</a></li>
            <li  <?php if (isset($is_contactus_active) && $is_contactus_active) echo 'class="active"'; ?>><a href="<?= base_url('contact-us'); ?>">Contact Us</a></li>
        </ul>
        <div class="social-media-healthy">
            <div class="box-social-media-healthy">
                <iconify-icon icon="gg:instagram"></iconify-icon>
                <span>@adoniabeauty_</span>
            </div>
            <div class="box-social-media-healthy">
                <iconify-icon icon="ic:outline-tiktok"></iconify-icon>
                <span>@adonia.beauty.off</span>
            </div>
        </div>
        <a class="our-store-mobile"><button onClick="toggleOurStore();">Our Store</button></a>
    </div>
    <div class="social-menu">
        <a href="https://www.instagram.com/adoniabeauty_/" target="_blank"><iconify-icon icon="mdi:instagram"></iconify-icon></a>
        <a href="https://www.tiktok.com/@adonia.beauty.off" target="_blank"><iconify-icon icon="ic:baseline-tiktok"></iconify-icon></a>
        <button onClick="toggleOurStore();">Our Store</button>
    </div>
</div> -->

<!-- <div class="our-store-popup" id="ourStoreMenu">
    <div class="our-store-overlay" onClick="toggleOurStore();"></div>
    <div class="our-store-content">
        <iconify-icon icon="mingcute:close-fill" class="close-icon-store" onClick="toggleOurStore();"></iconify-icon>
        <a href="https://www.tiktok.com/">
            <div class="our-store-box">
                <iconify-icon icon="logos:tiktok-icon"></iconify-icon>
                <span>Buka di Tiktok Shop</span>
            </div>
        </a>
        <a href="https://shopee.co.id/">
            <div class="our-store-box our-store-box-2">
                <iconify-icon icon="simple-icons:shopee"></iconify-icon>
                <span>Buka di Shopee</span>
            </div>
        </a>
    </div>
</div> -->

<!-- <script src="<?= base_url('js/menu-mobile.js'); ?>"></script> -->