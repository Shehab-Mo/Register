<?php
$products = require_once 'data/products.php';
require_once 'helpers/functions.php';
require_once 'inc/header.php';
require_once 'inc/nav.php';
?>

<div class="container">
    <div class="row">
        <?php foreach ($products as $product) : ?>
            <div class="col-3 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $product["image"] . ".png"; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name']; ?></h5>
                        <p class="card-text"><?= $product['description']; ?></p>
                        <span class="badge bg-success"> Price : <?= $product['price']; ?> $</span>
                        <div class="d-flex justify-content-end mt-3">
                            <button class="btn btn-primary d-block btn-small">Buy now</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once 'inc/footer.php'; ?>