<?php 
include "../lab1/views/header.php"; 
$brand = selectBrand();
?>
<div class="list">
    <h1>Danh sách Brand</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>BRAND NAME</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($brand as $listbrand) : ?>
                <?php extract($listbrand) ?>
                <tr>
                    <td><?=$id?></td>
                    <td><?=$brandname?></td>
                    <td><a href="?ctr=brandedit&&id=<?=$id?>"><button>edit</button></a></td>
                    <td><a href="?ctr=branddelete&&id=<?=$id?>"><button>Detele</button></a></td>
                </tr>
             <?php endforeach ?>
             <a href="?ctr=brandadd"><button>Add</button></a></td>
        </tbody>
    </table>
</div>

<?php
include "../lab1/views/footer.php";
?>