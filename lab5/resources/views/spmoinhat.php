<?php include '../resources/views/header.php'; ?>

<div class="heading headline">Sản phẩm Mới nhất</div>
<div class="row">
    <?php ; foreach($hanghoa as $hanghoas) : ?>
        
        <div class="col">
                        <a href="#">
                            <img src="images/".<?= $hanghoas->hinh?> alt="">
                            <div class="product-name">
                                <h4><?= $hanghoas->tenhh?></h4>
                            </div>
                            <div class="price">
                            <?= $hanghoas->gia?> <u>đ</u>
                            </div>
                        </a>
                    </div>
            
    <?php endforeach ?>
</div>



<?php include '../resources/views/footer.php'; ?>