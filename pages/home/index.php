
<?php
$root = dirname(__DIR__, 2);

if (!defined('BASE_URL')) {
    define('BASE_URL', '');
}

require_once $root . '/components/landing/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home - Tastify</title>

    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/base.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/components/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/components/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/pages/home.css">
</head>

<body>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Discover Your Favorite Flavors!</h1>
            <p>
                Find the best restaurants, menus, and food spots around you.
            </p>
            <form class="search-bar"
                  action="<?= BASE_URL ?>/pages/foods/index.php"
                  method="GET">

                <button type="submit" aria-label="Search">
                    &#9906;
                </button>

                <input
                    type="text"
                    name="search"
                    placeholder="Find restaurants, food, or locations..."
                >
            </form>
        </div>
    </section>


    <section class="quick-features">
        <a href="<?= BASE_URL ?>/pages/foods/index.php"
           class="feature-card">
            <div class="feature-icon">🎲</div>
            <div>
                <h3>RANDOM FOOD PICKER</h3>
                <p>Spin It & Get Food</p>
            </div>
        </a>
        <a href="<?= BASE_URL ?>/pages/points/index.php"
           class="feature-card">
            <div class="feature-icon">💳</div>
            <div>
                <h3>BUDGET SLIDER</h3>
                <p>Find By Price</p>
            </div>
        </a>
        <a href="<?= BASE_URL ?>/pages/challenges/index.php"
           class="feature-card">
            <div class="feature-icon">🏆</div>

            <div>
                <h3>FOOD CHALLENGE</h3>
                <p>Earn Badges & Points</p>
            </div>
        </a>
    </section>

    <section class="trending-section">
        <div class="section-title">
            <h2>🔥 TRENDING FOOD</h2>
        </div>
        <div class="food-grid">
            <a href="<?= BASE_URL ?>/pages/foods/detail.php?id=1"
               class="food-card">
                <img src="<?= BASE_URL ?>/images/spicy-ramen.jpg"
                     alt="Spicy Ramen">
                <div class="food-info">
                    <h3>Spicy Ramen</h3>
                    <p>⭐ 4.6</p>
                </div>
            </a>

            <a href="<?= BASE_URL ?>/pages/foods/detail.php?id=2"
               class="food-card">
                <img src="<?= BASE_URL ?>/images/beef-burger.jpg"
                     alt="Beef Burger">
                <div class="food-info">
                    <h3>Beef Burger</h3>
                    <p>⭐ 3.3</p>
                </div>
            </a>

            <a href="<?= BASE_URL ?>/pages/foods/detail.php?id=3"
               class="food-card">
                <img src="<?= BASE_URL ?>/images/sushi-roll.jpg"
                     alt="Sushi Roll">
                <div class="food-info">
                    <h3>Sushi Roll</h3>
                    <p>⭐ 4.2</p>
                </div>
            </a>

            <a href="<?= BASE_URL ?>/pages/foods/detail.php?id=4"
               class="food-card">
                <img src="<?= BASE_URL ?>/images/brownies.jpg"
                     alt="Brownies">
                <div class="food-info">
                    <h3>Brownies</h3>
                    <p>⭐ 4.5</p>
                </div>
            </a>

            <a href="<?= BASE_URL ?>/pages/foods/detail.php?id=5"
               class="food-card">
                <img src="<?= BASE_URL ?>/images/spaghetti-carbonara.jpg"
                     alt="Spaghetti Carbonara">
                <div class="food-info">
                    <h3>Spaghetti Carbonara</h3>
                    <p>⭐ 4.2</p>
                </div>
            </a>


            <a href="<?= BASE_URL ?>/pages/foods/detail.php?id=6"
               class="food-card">
                <img src="<?= BASE_URL ?>/images/tuna-melt-pizza.jpg"
                     alt="Tuna Melt Pizza">
                <div class="food-info">
                    <h3>Tuna Melt Pizza</h3>
                    <p>⭐ 4.4</p>
                </div>
            </a>
        </div>
    </section>

    <section class="filter-section">
        <div class="filter-heading">
            <h2>FILTER YOUR FOOD</h2>
            <p>
                Customize your meal options. Set the dietary filters below
                to find the dishes best suited to your health and lifestyle.
            </p>
        </div>
        <div class="filter-container">
            <div class="filter-options">
                <button class="filter-card">
                    <span>☪</span>
                    <div>
                        <h3>Halal Verification</h3>
                        <p>HALAL</p>
                    </div>
                </button>
                <button class="filter-card">
                    <span>🌿</span>
                    <div>
                        <h3>Vegan</h3>
                        <p>Plant Based</p>
                    </div>
                </button>
                <button class="filter-card">
                    <span>🥬</span>
                    <div>
                        <h3>Vegetarian</h3>
                        <p>Vegetarian Food</p>
                    </div>
                </button>

                <button class="filter-card">
                    <span>🌾</span>
                    <div>
                        <h3>Gluten Free</h3>
                        <p>Gluten Free Food</p>
                    </div>
                </button>
            </div>
            <div class="filter-image">
                <img src="<?= BASE_URL ?>/images/Nasi + Sapo Tahu Seafood.jpg"
                     alt="Healthy Food">
            </div>
        </div>
    </section>

    <?php
    require_once $root . '/components/landing/footer.php';
    ?>

</body>
</html>
