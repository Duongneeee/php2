<?php
include "../lab1/views/header.php";
$brand = selectBrand();
if(isset($_GET['id'])){
    $car = selectCarOne($_GET['id']);
}
?>
<?php if ($ctr == 'caredit') : ?>
        <form action="?ctr=carupdate" method="POST" enctype="multipart/form-data">

            <?php extract($car);
                $imgpath = "../lab1/img/" . $image;
                if (is_file($imgpath)) {
                    $image = "<img src='" . $imgpath . "' width='100' height='60'>";
                } else {
                    $image = "Không có ảnh";
                } ?>
                <select name="dmbrand" id="iddm">
                    <?php foreach ($brand as $listBrand) : ?>
                        <?php if ($brand_id == $listBrand['id']) : ?>
                            <option selected value="<?= $listBrand['id'] ?>"><?= $listBrand['brandname'] ?></option>
                        <?php else : ?>
                            <option value="<?= $listBrand['id'] ?>"><?= $listBrand['brandname'] ?></option>
                        <?php endif ?>

                    <?php endforeach ?>
                </select>

                <input type="hidden" name="id" value="<?=$car['id']?>">
    <input type="text" name="carname" value="<?=$car['carname']?>">
    <input type="file" name="image" value=""> <br>
    <input type="text" name="price" value="<?=$car['price']?>"> <br>
    <input type="text" name="description" value="<?=$car['description']?>"> <br>
    <input type="text" name="version" value="<?=$car['version']?>"> <br>
    <input type="text" name="gear" value="<?=$car['gear']?>"> <br>
    <input type="text" name="origin" value="<?=$car['origin']?>"> <br>
    
    <button type="submit" name="btn_add">Add</button> 
                

            
        </form>
    <?php endif ?>

<?php
include "../lab1/views/footer.php";
?>