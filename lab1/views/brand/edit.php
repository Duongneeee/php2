<?php
include "../lab1/views/header.php";
if(isset($_GET['id'])){
    $brand = selectBrandOne($_GET['id']);
}
?>
<form action="?ctr=brandupdate" method="POST" enctype="multipart/form-data" >
    <input type="hidden" name="id" value="<?=$brand['id']?>">
    <input type="text" name="brandname" value="<?=$brand['brandname']?>">
    <button type="submit" name="btn_add">Add</button> 
</form>
<?php
include "../lab1/views/footer.php";
?>