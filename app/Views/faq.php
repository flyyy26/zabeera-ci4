<?php
include(APPPATH . 'Views/templates/header.php');
?>

<div class="container-home">
    <div class="banner_page banner_page_faq">
        <img src="images/heading_banner_faq.svg" alt="About Zabeera">
    </div>
    <div class="faq-layout">
        <?php if (!empty($faqs)): ?>
            <?php foreach ($faqs as $faq): ?>
                <button class="faq-accordion"><?= $faq['question']; ?></button>
                <div class="faq-panel">
                    <p><?= $faq['answer']; ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No faq found.</p>
        <?php endif; ?>
    </div>
</div>
<div class="container-home">
    <img src="images/footer_bg.png" class="footer_bg footer_bg_product" alt="Zabeera Image Lotion">
</div>

<?php
include(APPPATH . 'Views/templates/footer.php');
?>