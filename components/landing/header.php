
<?php
if (!defined('BASE_URL')) {
    define('BASE_URL', '');
}
?>

<header class="site-header">
    <div class="header-container">

        <a href="<?= BASE_URL ?>/index.php" class="header-logo">
            <img src="<?= BASE_URL ?>/images/logo-tastify.png" alt="Tastify Logo">
        </a>
        <nav class="nav-menu">
            <a href="<?= BASE_URL ?>/index.php">HOME</a>
            <a href="<?= BASE_URL ?>/pages/restaurants/index.php">
                RESTAURANT
            </a>
            <a href="<?= BASE_URL ?>/pages/foods/index.php">
                MENU
            </a>
            <a href="<?= BASE_URL ?>/pages/challenges/index.php">
                CHALLENGES
            </a>
            <a href="<?= BASE_URL ?>/pages/points/index.php">
                FOOD POINTS
            </a>
        </nav>
        <div class="header-icons">
            <a href="<?= BASE_URL ?>/pages/foods/index.php"
               class="search-icon" aria-label="Search">
                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="7"></circle>
                    <path d="m16 16 5 5"></path>
                </svg>
            </a>
            <a href="<?= BASE_URL ?>/login-user.php"
               class="profile-icon" aria-label="Profile">
                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="8" r="4"></circle>
                    <path d="M4 21c0-4.4 3.6-7 8-7s8 2.6 8 7"></path>
                </svg>
            </a>
        </div>
    </div>
</header>
