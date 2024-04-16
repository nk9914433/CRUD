<?php
include('database.php');
?>
<?php
if(isset($_GET['id'])){
    $row;
    $id=$_GET['id'];
    $sql="select * from customers where id = ".$id;
    $result=$conn->query($sql);
    if($result->num_rows >0){
        $row = $result->fetch_assoc();
    }
}
?>
<html>
    <head>


    <title>edit form</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<div class="container">
        <div style="background-color-red;margin:20px;">


</div>

    <?php
    if(!empty($row)){?>
    <form  action="update.php" method="POST">
    <div class="form-group">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    Name:
    <input type="name" class="form-control" id="name"  name="name"value="<?php echo $row['name']; ?>"><br>
    </div>
    <div class="form-group">
     Email:
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>"><br>
    </div>
    <div class="form-group">
    Password:
    <input type="password" class="form-control" id="password" name="password"value="<?php echo $row['password']; ?>"><br>
    </div>

    <button type="submit" name="submit">update</button>
    </form>
        <?php }?>
        </body>