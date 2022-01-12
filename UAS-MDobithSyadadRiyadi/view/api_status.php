<?php
    header("Access-Control-Allow-Origin:*");
    header("Content-Type:application/json;charset=UTF-8");
    header("Access-Control-Allow-Methods:POST,GET,PUT,DELETE");
    header("Access-Control-Max-Age:3600");
    header("Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers-Authorization,X-Requested-With");
    //get database connection
    include '../controller/Vaksin.php';
    $ctrl = new Vaksin();
    $request = $_SERVER['REQUEST_METHOD'];
    switch($request){
        //showing
        case 'GET':
            $ctrl->getStatusData();
            break;
        //
        case 'POST':
            break;
        //mengedit
        case 'PUT':
            break;
        //menghapus
        case 'DELETE':
            break;
        default:
            http_response_code(404);
            echo "Request tidak diizinkan";
    }
?>