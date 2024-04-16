<?php
include('database.php');
?>
<?php
$id=$_GET['id'];
$sql="DELETE FROM customers where id=" .$id;
$res=$conn->query($sql);
if($res==1){
    header('Location: http://localhost/crud/table.php');
}
else{
    echo "error";
}
?>