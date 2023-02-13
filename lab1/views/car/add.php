<?php
include "../lab1/views/header.php";
$brand = selectBrand();
?>
<form action="?ctr=caradd" method="POST" enctype="multipart/form-data" >
    <input type="text" name="carname" placeholder="carname"> <br>
    <input type="file" name="image" placeholder=""> <br>
    <input type="text" name="price" placeholder="price"> <br>
    <input type="text" name="description" placeholder="description"> <br>
    <input type="text" name="version" placeholder="version"> <br>
    <input type="text" name="gear" placeholder="gear"> <br>
    <input type="text" name="origin" placeholder="origin"> <br>
    <select name="dmbrand" id="">
        <option value="">Danh mục brand</option>
        <?php foreach($brand as $listbrand) : ?>
            <?php extract($listbrand) ?>
            <option value="<?=$id?>"><?=$brandname?></option>
            <?php endforeach ?>
    </select>
    <button type="submit" name="btn_add">Add</button> 
</form>
<a href="?ctr=car"><button>List</button></a>
<?php
include "../lab1/views/footer.php";
?>