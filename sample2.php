<?php 

include "sample.php";

// $txt = $_POST['txt'];
// $txt1 = $_POST['txt1'];

if (isset($_POST)) {
    $data = file_get_contents("php://input");
    $user = json_decode($data,true);
    echo json_encode($user);
    
}
?>