<?php
include('database.php');
?>
<?php
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $id=$_POST["id"];

    $sql="UPDATE customers SET name='$name',email='$email',password='$password' WHERE id=" .$id;
    $res = $conn->query($sql);
   if($res == 1){
    header('Location: http://localhost/crud/table.php');
   }else{
    echo"error";
   }

}
?>