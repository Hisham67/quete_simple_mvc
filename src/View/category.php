<!DOCTYPE html>
<html>
<head> MVC3 </head>
<body>
<section>
    <h1>Categories</h1>
    <ul>
        <?php foreach ($categories as $category) : ?>
            <li><?= $category['name'] ?></li>

        <?php endforeach ?>
    </ul>

</section>
</body>
</html>