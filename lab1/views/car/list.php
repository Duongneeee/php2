<?php 
include "../lab1/views/header.php"; 
$car = selectCar();
?>
<div class="list">
    <h1>Danh sách Card</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>CAR NAME</th>
                <th>IMAGE</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
                <th>VERSION</th>
                <th>GEAR</th>
                <th>ORIGIN</th>
                <th>BRAND</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($car as $listcar) : ?>
                <?php extract($listcar);
                $imgpath ="../lab1/img/".$image;
                ?>
                <tr>
                    <td><?=$id?></td>
                    <td><?=$carname?></td>
                    <td><img src="<?=$imgpath?>" alt="" width="150"></td>
                    <td><?=$price?></td>
                    <td><?=$description?></td>
                    <td><?=$version?></td>
                    <td><?=$gear?></td>
                    <td><?=$origin?></td>
                    <td><?=$brand_id?></td>
                    <td><a href="?ctr=caredit&&id=<?=$id?>"><button>edit</button></a></td>
                    <td><a href="?ctr=cardelete&&id=<?=$id?>"><button>Detele</button></a></td>
                </tr>
             <?php endforeach ?>
             <a href="?ctr=caradd"><button>Add</button></a></td>
        </tbody>
    </table>
</div>

<?php
include "../lab1/views/footer.php";
?>