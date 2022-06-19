<?php
    // for CORS
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Content-Type: application/json');
    
    // convert the POST body in JSON to a PHP object
    $content = file_get_contents("php://input");
    $customerInfo = json_decode($content, true);

    $id = uniqid();
    $formInfo = [ 'id' => $id, 'name' => $customerInfo['userName'], 'email' => $customerInfo['userEmail'], 'comments' => $customerInfo['userComments'] ];

    echo json_encode($formInfo);

?>