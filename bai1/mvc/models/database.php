<?php

function connection(){
    try{
    $conn = new PDO("mysql:host=localhost;dbname=duan1_nhom8;charset=utf8","root","");
    return $conn;
    }
    catch (PDOException $e){
        echo "Lỗi".$e->getMessage();

    }

}

function getData($sql){
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function exQuery($sql){
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}