<?php
$servername="localhost";
$username="root";
$password="";
$dbname="firstdb";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    echo "error";die;
}
// else
// $sql="CREATE TABLE customers(
// id INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(250) NOT NULL,
// email VARCHAR(255) NOT NULL,
// password varchar(200) NOT NULL
// )";
// if($conn->query($sql)===TRUE){
//     echo "table created";
// }
?>