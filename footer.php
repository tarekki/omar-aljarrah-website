<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/logo.jpg" alt="Omar Al-Jarrah Logo" class="footer-logo-img" />
                        <h3>Omar Al-Jarrah</h3>
                    </div>
                    <p>Strategic Business Consultant helping companies achieve sustainable growth.</p>
                </div>
            <div class="footer-section">
                <h4>Services</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#services">Strategic Planning</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#services">Operations Optimization</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#services">Growth Strategy</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contact</h4>
                <p>omar@aljarrahconsulting.com</p>
                <p>+1 (555) 123-4567</p>
            </div>
            <div class="footer-section">
                <h4>Follow</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Omar Al-Jarrah Consulting. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

<?php wp_footer(); ?>

</body>
</html>
