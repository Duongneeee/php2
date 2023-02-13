<h1>Home page</h1>

<?php foreach($products as $product) : ?>
<h3><?= $product->name ?></h3>
<p><?= $product->price ?></p>
<?php endforeach ?>