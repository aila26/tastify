
<?php
if (!defined('BASE_URL')) {
    define('BASE_URL', '');
}
?>

<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-about">
            <img src="<?= BASE_URL ?>/images/logo-tastify.png"
                 alt="Tastify Logo">
            <div>
                <h3>About Tastify</h3>
                <p>
                    Connecting food lovers<br>
                    with authentic cuisine<br>
                    and a vibrant community.
                </p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook">f</a>
                    <a href="#" aria-label="Instagram">◎</a>
                    <a href="#" aria-label="TikTok">♪</a>
                </div>
            </div>
        </div>
        <div class="footer-column">
            <h3>Explore</h3>
            <a href="<?= BASE_URL ?>/index.php">Home Page</a>
            <a href="<?= BASE_URL ?>/pages/restaurants/index.php">Restaurant</a>
            <a href="<?= BASE_URL ?>/pages/foods/index.php">Menu</a>
            <a href="<?= BASE_URL ?>/pages/points/index.php">Food Points</a>
        </div>
        <div class="footer-column">
            <h3>Community</h3>
            <a href="<?= BASE_URL ?>/pages/challenges/index.php">Challenges</a>
            <a href="#">Random Food Picker</a>
            <a href="#">Food Rules</a>
        </div>
        <div class="footer-column">
            <h3>Help</h3>
            <a href="#">FAQ</a>
            <a href="#">Contact Us</a>
            <a href="#">User Guide</a>
        </div>
        <div class="footer-column">
            <h3>Information</h3>
            <a href="#">About Us</a>
            <a href="#">Privacy Policy</a>
        </div>

    </div>
    <div class="footer-bottom">
        <p>2026 Tastify. All rights reserved.</p>
    </div>

</footer>
