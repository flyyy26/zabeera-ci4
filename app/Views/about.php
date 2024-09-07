<?php
include(APPPATH . 'Views/templates/header.php');
?>

<div class="container-home">
    <div class="banner_page">
        <img src="<?= base_url('images/heading_banner_about.svg'); ?>" alt="About Zabeera">
    </div>
    <div class="section_2_about">
        <h1>Who Are We</h1>
        <p>Zabeera from the word ‘Zubair’, means powerful, strong, and brave. Align with the purpose of Zabeera Beauty to empower Z-Squad achieving long lasting radiance through any kind of weather. Giving you the confidence you need.</p>
    </div>
    <div class="section_3_about">
        <div class="purposes_image">
            <div class="purposes_box purposes_box_1">
                <h1>1</h1>
                <p>Empowering Confidence</p>
            </div>
            <div class="purposes_box purposes_box_2">
                <h1>2</h1>
                <p>Achieving Long Lasting Radiance</p>
            </div>
            <div class="purposes_box purposes_box_3">
                <h1>3</h1>
                <p>Cultivating Inner Beauty</p>
            </div>
        </div>
        <div class="purposes_text">
            <h1>Our<br/>Purposes</h1>
        </div>
    </div>
    <div class="section_3_about">
        <div class="section_about_4_text">
            <h1>Zabeera Lotion</h1>
            <p><span>WITH YOU THROUGH ALL KINDS OF WEATHER </span>Sweat and water-proof brightening lotion made from carefully selected ingredients. Three scented variations to complement every occasion.</p>
        </div>
        <div class="section_about_4_image">
            <img src="<?= base_url('images/image_about.png'); ?>" class="img_cover" alt="">
        </div>
    </div>
    <div class="section_3_about_product">
        <h1>Our Lotion Variants</h1>
        <div class="about_product">
            <div class="about_product_box">
                <div class="about_product_box_image">
                    <img src="<?= base_url('images/about_product_1.png'); ?>" class="img_cover" alt="">
                </div>
                <div class="about_product_box_content bg_grey">
                    <h4><?php echo $products[0]['name']; ?></h4>
                    <p><?php echo $products[0]['description']; ?></p>
                </div>
            </div>
            <div class="about_product_box">
                <div class="about_product_box_image">
                    <img src="<?= base_url('images/about_product_2.png'); ?>" class="img_cover" alt="">
                </div>
                <div class="about_product_box_content bg_blue">
                    <h4><?php echo $products[1]['name']; ?></h4>
                    <p><?php echo $products[1]['description']; ?></p>
                </div>
            </div>
            <div class="about_product_box">
                <div class="about_product_box_image">
                    <img src="<?= base_url('images/about_product_3.png'); ?>" class="img_cover" alt="">
                </div>
                <div class="about_product_box_content bg_orange">
                    <h4><?php echo $products[2]['name']; ?></h4>
                    <p><?php echo $products[2]['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="section_bottle">
        <div class="section_bottle_img">
            <img src="<?= base_url('images/bottle_image.png'); ?>" style="width:100%;" alt="">
        </div>
        <div class="section_bottle_content">
            <h1>ALL THE GOODNESS IN A BOTTLE</h1>
            <ul>
                <li>UV Filter (Physical and Chemical)</li>
                <li>⁠Niacinamide</li>
                <li>⁠Vitamin E</li>
                <li>⁠Collagen</li>
                <li>⁠Licorice Extract</li>
                <li>⁠Kojic Acid</li>
                <li>⁠Centella Extract</li>
                <li>⁠Artemisia Capillaris</li>
                <li>⁠Whitening Multi Complex</li>
            </ul>
        </div>
    </div>
</div>
<div class="container-home">
    <img src="<?= base_url('images/footer_bg.png'); ?>" class="footer_bg" alt="Zabeera Image Lotion">
</div>

<?php
include(APPPATH . 'Views/templates/footer.php');
?>