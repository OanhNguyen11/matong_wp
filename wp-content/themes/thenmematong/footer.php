<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package matong
 */

?>

	 <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>VỀ CHÚNG TÔI</h4>
                        <ul>
                            <li>Chúng tôi chuyên cung cấp các sản phẩm thực phẩm sạch an toàn cho sức khỏe con người</li>
                            <li>Hồ Gươm, Vietnam</li>
                            <li>0986096111<br />Thứ 2 - Chủ nhật: 9:00 - 18:00</li>
                            <li>dualeotheme@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>LIÊN KẾT NHANH</h4>
                        <ul>
                            <li>Trang chủ</li>
                            <li>Giới thiệu</li>
                            <li>Sản phẩm</li>
                            <li>Liên hệ</li>
                        </ul>
                    </div>
              
                    <div class="col-md-3">
                        <h4>HƯỚNG DẪN MUA HÀNG</h4>
                        <form method="POST" action="https://formspree.io/oanhoneone@gmail.com">
                            <input type="email" name="email" placeholder="Your email">
                            <textarea name="abc" placeholder="Your message"></textarea>
                            <button type="submit">Send</button>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <h4>KẾT NỐI VỚI CHÚNG TÔI</h4>
                      
                    </div>
                </div>
            </div>
        </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

  <!-- vendors -->
        <script src="<?php bloginfo('stylesheet_directory') ?>/owlcarousel/js/highlight.js"></script>
        <script src="<?php bloginfo('stylesheet_directory') ?>/owlcarousel/js/app.js"></script>
         <script src="<?php bloginfo('stylesheet_directory') ?>/owlcarousel/js/style.js"></script>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
