<?php 

namespace App\Controllers;
use App\Models\BaseModel;
use App\Models\HangHoaModel;
use App\Models\ProductModel;

class HomeController extends Controller{
    public function index(){
        $hanghoa = HangHoaModel::all();
        $this->view('trangchu',['hanghoa'=>$hanghoa]);
        

    }

    public function giaCao(){
        $hanghoa = HangHoaModel::allMoney();
        $this->view('spgiacao',['hanghoa'=>$hanghoa]);
    }

    public function moiNhat(){
        $hanghoa = HangHoaModel::allMoi();
        $this->view('spmoinhat',['hanghoa'=>$hanghoa]);
    }

}