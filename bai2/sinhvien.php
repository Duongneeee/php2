<?php

class SinhVien
{
    public $maSV;
    public $hoTen;
    public $diem;

    public function __construct($maSV, $hoTen, $diem)
    {
        $this->maSV = $maSV;
        $this->hoTen = $hoTen;
        $this->diem = $diem;
    }

    public function kiemTra()
    {
        //    
        if ($this->diem > 50 && $this->diem<100) {
            echo "Mã sinh viên là {$this->maSV}";
            echo "Tên sinh viên là {$this->hoTen}";
            echo "Điểm của sinh viên là {$this->diem}<br>";
        } else if ($this->diem < 50 && $this->diem > 0) {
            echo "Mã sinh viên là {$this->maSV}";
            echo "Tên sinh viên là {$this->hoTen}";
            echo "Điểm của sinh viên đã trượt là {$this->diem}<br>";
        } else {
            $this->diem = 0;
            echo "Mã sinh viên là {$this->maSV}";
            echo "Tên sinh viên là {$this->hoTen}";
            echo "Điểm của bạn nằm ngoài vùng 0 đến 100 nên điểm của bạn là {$this->diem}<br>";
        }
    }
}

$sinhvien1 = new SinhVien("a1", 'duong', 102);
$sinhvien2 = new SinhVien("a2", 'duong', 8);
$sinhvien3 = new SinhVien("a1", 'duong', 60);

$sinhvien1->kiemTra();
$sinhvien2->kiemTra();
$sinhvien3->kiemTra();
