<?php


?>
<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="fs-left">
                    <div class="logo">
                        <a href="#">
                            <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/footer-logo.png" alt="">
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan lacus vel facilisis.</p>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <form action="#" class="subscribe-form">
                    <h3>Subscribe to our newsletter</h3>
                    <input type="email" placeholder="Your e-mail">
                    <button type="submit">Subscribe</button>
                </form>
                <div class="social-links">
                    <a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                    <a href="#"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
                    <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                    <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                    <a href="#"><i class="fa fa-youtube"></i><span>Youtube</span></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search model -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <?php get_search_form(
                    array(
                        'placeholder' => "Search here.....",
                    )
            ) ?>
<!--            <input type="text" id="search-input" placeholder="Search here.....">-->
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="<?php  echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php  echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php  echo get_template_directory_uri(); ?>/assets/js/jquery.slicknav.js"></script>
<script src="<?php  echo get_template_directory_uri(); ?>/assets/js/jquery.nice-select.min.js"></script>
<script src="<?php  echo get_template_directory_uri(); ?>/assets/js/mixitup.min.js"></script>
<script src="<?php  echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>