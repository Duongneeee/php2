<?php

use App\Controllers\HomeController;
use App\Models\CategoryModel;
use App\Router;

require_once __DIR__ ."/../vendor/autoload.php";

// $cate = new CategoryModel;
// // var_dump($cate->all());
// var_dump($cate->show_one(31));
// // $cate->insert(
// //     [
// //         "cate_name"=>"reghsgs",
// //         "slug"=>"010",
// //         "desc"=>"lp",
// //     ]
// //     );

// $cate->update(
//     31,[
//         "cate_name"=>"loadddddd",
//         "slug"=>"0100000", 
//     ]
// );
// var_dump($cate->where('cate_name','=','Iphone')->orWhere('id','=','1')->get());


// // $cate->delete(27);

$router = new Router;

Router::get('/',function(){
    echo "Hello world";
});

Router::get('/about', function(){
    echo "About page";
});

Router::get('/aha', function(){
    echo "ahahahahahah";
});

Router::post('/ahas', function(){
    echo "ahahahahahah Ô sờ kê";
});

Router::get('/home',[HomeController::class,'index']);
Router::get('/giacao', [HomeController::class, 'giaCao']);
Router::get('/moinhat', [HomeController::class, 'moiNhat']);
$router->resolve();