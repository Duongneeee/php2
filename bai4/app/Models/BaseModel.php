<?php

namespace App\Models;
use PDO;
use PDOException;
class BaseModel {
    protected $conn;
    protected $sqlBuiler;
    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host=localhost;dbname=we3014.01;charset=utf8","root","");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            throw $e;
        }
    }

    public static function all(){
        $model = new static;
        $model->sqlBuiler = "SELECT * FROM $model->tableName";
        $stmt = $model->conn->prepare($model->sqlBuiler);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public static function show_one($id){
        $model = new static;
        $model->sqlBuiler = "SELECT * FROM $model->tableName WHERE id =".$id;
        $stmt = $model->conn->prepare($model->sqlBuiler);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS,get_class($model));
        if($result){
            return $result[0];
        }else{
            return false;
        }
    }
    public function insert($data=[]){
        $this ->sqlBuiler = "INSERT INTO $this->tableName(";
        $colName ='';
        $params ='';

        foreach($data as $key=>$value){
           $colName .= "`$key`, "; 
           $params .= ":$key, ";
        }

        $colName = rtrim($colName,', ');
        $params = rtrim($params,', ');

        $this->sqlBuiler.= $colName .")VALUES(". $params .")";

        $stmt = $this->conn->prepare($this->sqlBuiler);
        $stmt->execute($data);
    }

    public function update($id,$data=[]){
       
        $this->sqlBuiler = "UPDATE $this->tableName SET";
        foreach($data as $colName=>$value){
            $this->sqlBuiler.= "`$colName`=:$colName, ";
         }

         $this->sqlBuiler = rtrim($this->sqlBuiler,', ');
         $this->sqlBuiler .= " WHERE id=:id";
         $data['id']=$id;
         $stmt = $this->conn->prepare($this->sqlBuiler);
         $stmt->execute($data);
         
    }

    public function delete($id){
        $this->sqlBuiler = "DELETE FROM $this->tableName WHERE id=".$id;
        $stmt = $this->conn->prepare($this->sqlBuiler);
         $stmt->execute();   
    }

    public function where($colName,$condition,$value){

        $this->sqlBuiler = "SELECT * FROM $this->tableName WHERE `$colName` $condition '$value'";
        return $this;
    }

    public function andWhere($colName,$condition,$value){
        $this->sqlBuiler .= " AND  `$colName` $condition '$value' ";
        return $this;
    }

    public function orWhere($colName,$condition,$value){
        $this->sqlBuiler .= " OR `$colName` $condition '$value' ";
        return $this;
    }

    public function get(){
        $stmt = $this->conn->prepare($this->sqlBuiler);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;;
    }
    
}