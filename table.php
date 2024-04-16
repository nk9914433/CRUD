<?php
include('database.php');
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

<?php
$sql="SELECT * from customers";
$result= $conn->query($sql);
    
  if($result->num_rows >0 ){?>

       <table class="table">
       <tr>
        <th>ID</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>operation</th>
    </tr>

    <?php
        while($row=$result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['id'];  ?></td>
            <td><?php echo $row['name'];  ?></td>
            <td><?php echo $row['email'];  ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
    

        </tr>
    <?php }}?>
        </table>
