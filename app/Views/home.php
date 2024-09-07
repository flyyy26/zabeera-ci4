<?php
include(APPPATH . 'Views/templates/header.php');
?>
    
<section class="container-home">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php if (!empty($banners)): ?>
                <?php foreach ($banners as $banner): ?>
                    <div class="swiper-slide banner" style="background-image: url('https://prahwa.net/storage/<?= $banner['image']; ?>')">
                        <img src="<?= base_url('images/heading_banner.svg'); ?>" alt="Zabeera Website | About Zabeera | Zabeera Beauty | Zabeera Lotion">
                        <span>#LongLastingRadiance</span>
                        <a href="<?= $banner['link']; ?>"><button>Explore Now <iconify-icon icon="solar:arrow-down-outline"></iconify-icon></button></a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No banners found.</p>
            <?php endif; ?>
        </div>
    </div>

    <div class="section-2" id="explore">
        <div class="swiper mySwiper w-100">
            <div class="swiper-wrapper">
                <?php if (!empty($bannersTwo)): ?>
                    <?php foreach ($bannersTwo as $bannerTwo): ?>
                        <div class="swiper-slide about_slide">
                            <img src="https://prahwa.net/storage/<?= $bannerTwo['image']; ?>" class="img_cover" alt="Zabeera Website | About Zabeera | Zabeera Beauty | Zabeera Lotion"/>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No banners found.</p>
                <?php endif; ?>
            </div>
        </div>
        <div class="section-2-content">
            <h1>Who <br/>Are We</h1>
            <p>At Zabeera Beauty, we believe in celebrating natural beauty through luxurious and effective skincare and cosmetics. Our products are carefully formulated with the finest</p>
            <a href="/about"><button>Learn More</button></a>
        </div>
    </div>
    <div class="section-2">
        <div class="introduction-content">
            <span>Introducing</span>
            <h2>Zabeera Lotion</h2>
            <p>At Zabeera Beauty, we believe in celebrating natural beauty through luxurious and effective skincare and cosmetics. Our products are carefully formulated with the finest ingredients to enhance your beauty routine, empowering you to embrace your natural glow.</p>
            <a href="/product"><button>Buy Now <iconify-icon icon="solar:arrow-right-outline"></iconify-icon></button></a>
        </div>
        <div class="introduction-image">
            <img src="<?= base_url('images/introducing_image.png'); ?>"  class="img_cover" alt="Introducing Zabeera">
        </div>
    </div>
    <div class="product">
        <h1>Our Products</h1>
        <div class="w-100 grid-3 border-top-product">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                <div class="product_box">
                    <div class="product_image">
                        <img src="https://prahwa.net/storage/<?= $product['image']; ?>" class="img_cover" alt="Zabeera Product">
                    </div>
                    <div class="product_desc">
                        <div class="product_name">
                            <h5><?= $product['name']; ?></h5>
                        </div>
                        <div class="product_price">
                            <span>IDR <?= $product['weight']; ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No products found.</p>
            <?php endif; ?>
        </div>
    </div>
    <div class="cta">
        <h1>At Zabeera Beauty, we believe in celebrating natural beauty through luxurious and effective skincare and cosmetics.</h1>
        <a href="/faq"><button>Learn More</button></a>
    </div>
    <div class="why"> 
        <div class="why_image">
            <img src="<?= base_url('images/why_us_image.png'); ?>" class="img_cover" alt="Why Choose Zabeera?">
        </div>
        <div class="why_content">
            <h4>Why Us?</h4>
            <div class="why_content_list">
                <h5>Quality</h5>
                <p>We prioritize premium ingredients and rigorous testing to ensure effective results.</p>
            </div>
            <div class="why_content_list">
                <h5>Diversity</h5>
                <p>Our inclusive product range caters to all skin tones and types.</p>
            </div>
            <div class="why_content_list">
                <h5>Ethics</h5>
                <p>Committed to cruelty-free practices and sustainable packaging, contributing to a cleaner planet.</p>
            </div>
        </div>
    </div>
</section>
<section class="review">
    <h1>Reviews</h1>
    <div class="review-layout">
        <div class="review-container">
            <img src="<?= base_url('images/images/bg_review_1.png'); ?>" alt="Zabeera Review" class="bg-review-1">
            <img src="<?= base_url('images/images/bg_review_2.png'); ?>" alt="Zabeera Review" class="bg-review-2">
            <img src="<?= base_url('images/images/bg_review_3.png'); ?>" alt="Zabeera Review" class="bg-review-3">
            <img src="<?= base_url('images/images/bg_review_4.png'); ?>" alt="Zabeera Review" class="bg-review-4">
            <div class="review-content review-content-1">
                <span><?php echo $review[0]['date']; ?></span>
                <h3><?php echo $review[0]['title']; ?></h3>
                <p><?php echo $review[0]['description']; ?></p>
            </div>
            <div class="review-content review-content-2">
                <span><?php echo $review[1]['date']; ?></span>
                <h3><?php echo $review[1]['title']; ?></h3>
                <p><?php echo $review[1]['description']; ?></p>
            </div>
            <div class="review-content review-content-3">
                <span><?php echo $review[2]['date']; ?></span>
                <h3><?php echo $review[2]['title']; ?></h3>
                <p><?php echo $review[2]['description']; ?></p>
            </div>
            <div class="review-content review-content-4">
                <span><?php echo $review[3]['date']; ?></span>
                <h3><?php echo $review[3]['title']; ?></h3>
                <p><?php echo $review[3]['description']; ?></p>
            </div>
            <div class="review-content review-content-5">
                <span><?php echo $review[4]['date']; ?></span>
                <h3><?php echo $review[4]['title']; ?></h3>
                <p><?php echo $review[4]['description']; ?></p>
            </div>
            <div class="review-content review-content-6">
                <span><?php echo $review[5]['date']; ?></span>
                <h3><?php echo $review[5]['title']; ?></h3>
                <p><?php echo $review[5]['description']; ?></p>
            </div>
            <div class="review-content review-content-7">
                <span><?php echo $review[6]['date']; ?></span>
                <h3><?php echo $review[6]['title']; ?></h3>
                <p><?php echo $review[6]['description']; ?></p>
            </div>
            <div class="review-content review-content-8">
                <span><?php echo $review[7]['date']; ?></span>
                <h3><?php echo $review[7]['title']; ?></h3>
                <p><?php echo $review[7]['description']; ?></p>
            </div>
        </div>
    </div>
</section>
<div class="container-home">
    <img src="<?= base_url('images/footer_bg.png'); ?>" class="footer_bg" alt="Zabeera Image Lotion">
</div>

<?php
include(APPPATH . 'Views/templates/footer.php');
?>