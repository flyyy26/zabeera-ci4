<footer class="footer_container">
        <div class="company_identity">
            <img src="images/logo.png" alt="">
            <p>Jl. Sudirman Barat, Jakarta Pusat, DKI Jakarta </p>
            <p>Tel: +62 819 4005 0394</p>
            <p>Email: zabeera@gmail.com</p>
        </div>
        <div class="menu_footer">
            <ul>
                <li><a href="#">Product</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">FaQ</a></li>
            </ul>
        </div>
        <div class="form_footer">
            <h5>Subscribe to our Newsletter</h5>
            <form action="">
                <div class="form_box_footer">
                    <input type="email" placeholder="Email Address"/>
                    <button>Send</button>
                </div>
                <label class="container_checkbox">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    I accept the terms & condition
                </label>
            </form>
        </div>
        <div class="social_media_footer">
            <a href="#"><iconify-icon icon="fa-brands:tiktok"></iconify-icon></a>
            <a href="#"><iconify-icon icon="fa:facebook"></iconify-icon></a>
            <a href="#"><iconify-icon icon="fa6-brands:instagram"></iconify-icon></a>
        </div>
    </footer>
    <div class="copyright">
        <span>Copyright © 2024 zabeera.com</span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/slide.js"></script>
    <script src="js/accordion.js"></script>
    <script src="js/menu-mobile.js"></script>
    <script>
        // Fungsi untuk menambahkan atau menghapus kelas 'scroll' pada <nav>
        function handleScroll() {
            const nav = document.querySelector('nav'); // Ambil elemen <nav>
            
            // Cek apakah halaman telah discroll lebih dari 0px
            if (window.scrollY > 0) {
                nav.classList.add('scroll'); // Tambahkan kelas 'scroll'
            } else {
                nav.classList.remove('scroll'); // Hapus kelas 'scroll' jika scroll kembali ke atas
            }
        }

        // Tambahkan event listener untuk 'scroll' pada window
        window.addEventListener('scroll', handleScroll);
    </script>

</body>
</html>