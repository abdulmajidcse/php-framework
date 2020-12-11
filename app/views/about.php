<?php defined('APP_ROOT') OR exit('Access to this resource on the server is denied!'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
</head>
<body>
    <h2>About Page</h2>
    <?php
        echo isset($_GET['url']) ? $_GET['url'] : '';
    ?>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur soluta ullam perspiciatis accusantium atque at aliquam labore officiis, ducimus saepe tenetur corrupti rem reprehenderit praesentium ea velit magnam? Saepe, animi?</p>
</body>
</html>