<?php
function selectBrand(){
    $brand = cn_query("SELECT * FROM brand");
    return $brand; 
}

function selectBrandOne($id){
    $brand = cn_query_one("SELECT * FROM brand WHERE id=".$id);
    return $brand;
}

function insert_brand(){
    if(isset($_POST['btn_add'])){
        $brandname=$_POST['brandname'];
        $sql = "INSERT INTO brand (brandname) values ('$brandname')";
        cn_execute($sql);
    }
    
}

function update_brand(){
    
    if(isset($_POST['btn_add'])){
        $id=$_POST['id'];
        $brandname=$_POST['brandname'];
        $sql = "UPDATE brand set brandname='".$brandname."' where id=".$id;
        cn_execute($sql);
    }

}

function delete_brand($id){
    $sql = "DELETE FROM brand where id=".$id;
    cn_execute($sql);
}

