<?php

function connection(){
    try{
    $conn = new PDO("mysql:host=localhost;dbname=lab1;charset=utf8","root","");
    return $conn;
    }
    catch (PDOException $e){
        echo "Lỗi".$e->getMessage();

    }

}

function cn_execute($sql){
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function cn_query($sql){
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function cn_query_one($sql){
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}