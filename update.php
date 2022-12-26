<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <style>
        input{
            margin: 10px;
        }
    </style>
</head>
<body>
<?php
include 'config.php'; 
$ID = $_GET['Id'];
$Record = mysqli_query($con, "SELECT * FROM `tblcrud` WHERE Id=$ID");
$data = mysqli_fetch_array($Record); 

?>

<center>
        <div class="main">
        <form action="updateAction.php" method="POST" enctype="multipart/form-data">
            
            <label for="">Name:</label>
            <input type="text" value="<?php echo $data['Name'] ?>" name="name" ><br> <!--input theke data get korar jonno name attribute-->
            <label for="">Price:</label>
            <input type="text" value="<?php echo $data['Price'] ?>" name="price"><br>
            <label for="">Image:</label>
            <td><input type="file" value="<?php echo $data['Image'] ?>" name="image"> <img src="<?php echo $data['Image'] ?>"></td><br>
            <input type="hidden" name="id" value="<?php echo $data['Id'] ?>">
            <button name="update" class="btn btn-success m-2">Update</button>
        </form>
                
        </div>
        
    </center>

    <!-- Update Code -->



</body>
</html>