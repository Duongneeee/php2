<?php 

class TaiKhoan{
    private $soTK;
    private $tenTK;
    private $tienTK;
    private $nap;
    public function __construct($soTK,$tenTK,$tienTK)
    {
        $this->soTK=$soTK;
        $this->tenTK=$tenTK;
        $this->tienTK=$tienTK;
    }

    public function getSoTK(){
        return $this->soTK;
    }
    
    public function setSoTK($soTK){
        $this->soTK=$soTK;
    }

    public function getTenTK(){
        return $this->tenTK;
    }
    
    public function setTenTK($tenTK){
        $this->tenTK=$tenTK;
    }

    public function getTienTK(){
        return $this->tienTK;
    }
    
    public function setTienTK($tienTK){
        $this->tienTK=$tienTK;
    }

    public function getNap(){
        return $this->nap;
    }
    
    public function setNap($nap){
        $this->nap=$nap;
    }

    public function hienThi(){
        echo "Số tài khoản của bạn là {$this->soTK}, tên tài khoản là {$this->tenTK}, số tiền trong tài khoản là {$this->tienTK} <br>";
    }

    public function napTien(){
        if($this->nap>=50000){
            $this->tienTK += $this->nap;
           echo "Số tiền bạn nạp là {$this->nap} và số tiền sau khi nạp là {$this->tienTK}<br>";
        }else{
            echo "Số tiền nạp tối thiểu là 50000 và bạn đã nạp thấp hơn số tiền tối thiểu <br>";
        }
        
    }
    public function rutTien($rut){
        if($this->tienTK<$rut){
            echo 'Số dư của bạn không đủ để rút tiền <br>';
        }else{
            if($rut>=50000 && $rut<=20000000){
                $this->tienTK -= $rut;
               echo "Số tiền bạn nạp là {$rut} và số tiền sau khi nạp là {$this->tienTK}<br>";
            }else{
                echo "Số tiền nạp tối thiểu là 50000 và bạn đã rút thấp hơn số tiền tối thiểu <br>";
            }
        }
        
    }
}

$khachHang = new TaiKhoan(11242334,'Nguyễn Huy Dương', 1200000);
$khachHang->setNap(2000000);
$khachHang->hienThi();
$khachHang->rutTien(500000);
$khachHang->rutTien(500000);
$khachHang->napTien();


