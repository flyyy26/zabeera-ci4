<?php
include(APPPATH . 'Views/templates/header.php');
?>
<div class="container-home">
    <div class="banner_page banner_page_about">
        <img src="images/heading_banner_product.svg" alt="About Zabeera">
    </div>
    <div class="product_details_container">
        <div class="product_details">
            <div class="product_details_content bg_grey">
                <h1><?php echo $products[0]['name']; ?></h1>
                <p><?php echo $products[0]['description']; ?></p>
                <div class="price_button">
                    <h5>idr <?php echo $products[0]['weight']; ?></h5>
                    <a href="#"><button>Buy Now</button></a>
                </div>
            </div>
            <div class="product_details_image">
                <img src="images/product_page_1.png" class="img_cover" alt="">
            </div>
        </div>
        <div class="product_details">
            <div class="product_details_image">
                <img src="images/product_page_2.png" class="img_cover" alt="">
            </div>
            <div class="product_details_content bg_blue">
                <h1><?php echo $products[1]['name']; ?></h1>
                <p><?php echo $products[1]['description']; ?></p>
                <div class="price_button">
                    <h5>idr <?php echo $products[1]['weight']; ?></h5>
                    <a href="#"><button>Buy Now</button></a>
                </div>
            </div>
        </div>
        <div class="product_details">
            <div class="product_details_content bg_orange">
                <h1><?php echo $products[2]['name']; ?></h1>
                <p><?php echo $products[2]['description']; ?></p>
                <div class="price_button">
                    <h5>idr <?php echo $products[2]['weight']; ?></h5>
                    <a href="#"><button>Buy Now</button></a>
                </div>
            </div>
            <div class="product_details_image">
                <img src="images/product_page_3.png" class="img_cover" alt="">
            </div>
        </div>
    </div>
    <img src="images/footer_bg.png" class="footer_bg footer_bg_product" alt="Zabeera Image Lotion">
</div>
<?php
include(APPPATH . 'Views/templates/footer.php');
?>