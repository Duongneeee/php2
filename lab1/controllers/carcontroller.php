<?php   

function selectCar(){
    $car = cn_query("SELECT * FROM car ORDER BY id desc");
    return $car;
}

function selectCarOne($id){
    $car = cn_query_one("SELECT * FROM car WHERE id=".$id);
    return $car;
}

function insert_car(){
    if(isset($_POST['btn_add'])){
        $carname=$_POST['carname'];
        $price=$_POST['price'];
        $description=$_POST['description'];
        $version=$_POST['version'];
        $gear=$_POST['gear'];
        $origin=$_POST['origin'];
        $brand_id=$_POST['dmbrand'];
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "img/" . $image);

        $sql = "INSERT INTO car (carname,image,price,description,version,gear,origin,brand_id)
         values ('$carname','$image','$price','$description','$version','$gear','$origin','$brand_id')";
         cn_execute($sql);

    }
}

function update_car(){
    if(isset($_POST['btn_add'])){
        $carname=$_POST['carname'];
        $price=$_POST['price'];
        $description=$_POST['description'];
        $version=$_POST['version'];
        $gear=$_POST['gear'];
        $origin=$_POST['origin'];
        $brand_id=$_POST['dmbrand'];
        $image = $_FILES['image']['name'];
        $id=$_POST['id'];
        $targetdir = "../lab1/img/";
            $target_file = $targetdir . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], "img/" . $image);

        
            $sql= "UPDATE car SET carname='".$carname."',image='".$image."',price='".$price."',
       description='".$description."',version='".$version."',gear='".$gear."',
       origin='".$origin."',brand_id='".$brand_id."' where id=".$id;
         cn_execute($sql);
        
        


    }
}

function delete_car($id){
    $sql = "DELETE FROM car WHERE id=".$id;
    cn_execute($sql);
}