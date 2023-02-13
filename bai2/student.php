<?php

class Student{
    public $rollNo;
    public $name;

    public function getInfo(){
        echo "Sinh viên có tên {$this->name} có mã số {$this->rollNo} <br />";
    }
    
}

$student = new Student;
$student-> name = "Duong";
$student->rollNo = "PH26200";
var_dump($student);
$student->getInfo();