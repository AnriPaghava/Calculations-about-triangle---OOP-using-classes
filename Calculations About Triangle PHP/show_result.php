<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>სამკუთხედი</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="center">
    <div class="content">
        <div class="info">
            <?php

            require __DIR__ . '/func.php';
            require __DIR__ . '/init.php';
            $triangle = init();
            info_about_triangle($triangle);

            ?>
            <a href="index.php">მთავარ გვერდზე დაბრუნება</a>
        </div>

    </div>
</div>
</body>
</html>