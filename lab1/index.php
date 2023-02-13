<?php
require_once "models/database.php";
require_once "controllers/brandcontroller.php";
require_once "controllers/carcontroller.php";
$ctr = $_GET['ctr'] ?? '';
switch ($ctr) {
    case '':
    case 'brand':
        include "../lab1/views/brand/list.php";
        break;
    case 'brandadd':
        include "../lab1/views/brand/add.php";
        insert_brand();
        break;
    case 'brandedit':
        include "../lab1/views/brand/edit.php";
        break;
    case 'brandupdate':
        update_brand();
        include "../lab1/views/brand/list.php";
        break;
    case 'branddelete':
        include "../lab1/views/brand/delete.php";
        include "../lab1/views/brand/list.php";
        break;
    case 'car':
        include "../lab1/views/car/list.php";
        break;
        case 'caradd':
            include "../lab1/views/car/add.php";
            insert_car();
            break;
            case 'cardelete':
                include "../lab1/views/car/delete.php";
                include "../lab1/views/car/list.php";
                break;
                case 'caredit':
                    include "../lab1/views/car/edit.php";
                    break;
                    case 'carupdate':
                        update_car();
                        include "../lab1/views/car/list.php";
                        break;
}
