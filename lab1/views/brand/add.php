<?php
include "../lab1/views/header.php";
?>
<form action="" method="POST" enctype="multipart/form-data" >
    <input type="text" name="brandname" placeholder="brandname">
    <button type="submit" name="btn_add">Add</button> 
</form>
<a href="?ctr=brand"><button>List</button></a>
<?php
include "../lab1/views/footer.php";
?>