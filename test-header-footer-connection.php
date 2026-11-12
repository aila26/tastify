
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Header and Footer - Tastify</title>

    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/components/header.css">
    <link rel="stylesheet" href="assets/css/components/footer.css">
    <link rel="stylesheet" href="assets/css/pages/test-header-footer.css">
</head>
<body>

    <?php require_once __DIR__ . '/components/landing/header.php'; ?>

    <main style="padding: 100px 20px; text-align: center;">
        <h1>Welcome to Tastify!</h1>
        <p>Header and Footer Testing Page</p>
    </main>

    <?php require_once __DIR__ . '/components/landing/footer.php'; ?>

</body>
</html>
