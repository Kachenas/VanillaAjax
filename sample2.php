<?php 
//working file
// include "sample.php";

// $txt = $_POST['txt'];
// $txt1 = $_POST['txt1'];

// $user = ['txt' => $txt, 'txt1' => $txt1];

// if (isset($_POST)) {
//     $data = file_get_contents("php://input");
//     $user = json_decode($data,true);
//     echo json_encode($user);
    
// }
//echo json_encode($user);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  
   
    $user = ['name' => $name, 'email' => $email, 'message' => $message];
    echo json_encode($user);
  }
  
  ?>