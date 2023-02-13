<?php

class People{
    public $fullName;
    public $birdthday;
    public $address;
    public $luongCoBan;
    public $tongLuong;

    public function __construct($fullName,$birdthday,$address)
    {
        $this->fullName=$fullName;
        $this->birdthday=$birdthday;
        $this->address=$address;
    }
    
    public function getInfo(){
        echo "Tên:{$this->fullName}, Ngày sinh: {$this->birdthday}, Địa chỉ:{$this->address} <br>";
    }
}

class Employee extends People{
    public $id;
    public $workingDays;
    public $totalLeaveTaken;
    public $dailyWage;

    public function __construct($fullName,$birdthday,$address,$id,$workingDays,$totalLeaveTaken,$dailyWage)
    {
        parent::__construct($fullName,$birdthday,$address);
        $this->id=$id;
        $this->workingDays=$workingDays;
        $this->totalLeaveTaken=$totalLeaveTaken;
        $this->dailyWage=$dailyWage;
    }

    public function getSalaryAmount(){
        if($this->workingDays+$this->totalLeaveTaken == 30 || $this->workingDays+$this->totalLeaveTaken == 31 ){
            echo "Mã nhân viên:{$this->fullName},Số ngày làm:{$this->workingDays},
        Số ngày nghỉ:{$this->totalLeaveTaken},Lương theo ngày:{$this->dailyWage} <br>";
            if($this->totalLeaveTaken > 6){
                $this->luongCoBan= $this->workingDays * $this->dailyWage;
                $this->tongLuong = ($this->workingDays * $this->dailyWage)*0.75;
            echo "Bạn đã nghỉ quá số buổi theo công ty là 6 buổi nên bạn bị trừ 25% lương <br> ";
            echo "Lương ban đầu: {$this->luongCoBan}, Lương sau khi trừ:{$this->tongLuong} <br>";
            }else{
                $this->luongCoBan= $this->workingDays * $this->dailyWage;
                echo "Lương của bạn: {$this->luongCoBan}";
            }
        }else{
            echo "Tổng số ngày làm và ngày nghỉ phải bằng là 1 tháng";
        }
        
    }

}

$nhanVien = new Employee('Dương',12,'Hà Nội',1,26,4,290000);

$nhanVien->getInfo();
$nhanVien->getSalaryAmount();