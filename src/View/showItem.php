<?php
/**
 * Created by PhpStorm.
 * User: hisha
 * Date: 07/10/18
 * Time: 21:47
 */
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>  </head>
<body>
<main>
    <h1>Item <?= $item['title'] ?></h1>
    <ul>
        <li>Id : <?= $item['id'] ?></li>
    </ul>
    <a href='index.php?route=items'>Back to list</a>
</main>
</body>
</html>