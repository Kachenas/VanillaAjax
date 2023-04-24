<?php 

date_default_timezone_set('Asia/Singapore');

// echo "Run Laragon" . "<br>";
// echo "Create Folder Inside WWW" . "<br>";
// echo "Create Index.php" . "<br>";
// echo " Run http://127.0.0.1/ plus the name of the Folder" . "<br>";
$host = "127.0.0.1";
$username = "root";
$pw = "";

$connection = mysqli_connect($host,$username,$pw) or die('Unable to connect!');

// mysqli_select_db($connection,'crm') or die('Unable to select database!');

// $query = 'SELECT * FROM customer_registration';
// $result = mysqli_query($connection, $query) or die("Error in Query: $query" . mysqli_error());

// if (mysqli_num_rows($result) > 0) {
  
//   while ($row = mysqli_fetch_row($result)) {
//     echo $row[0];
//     echo $row[1];
//   }
// } else {
//   echo "No entry found";
// }

// mysqli_free_result($result);

// mysqli_close($connection); 

?>