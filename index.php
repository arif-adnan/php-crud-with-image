<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <div class="main">
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            
            <label for="">Name:</label>
            <input type="text" name="name"><br> <!--input theke data get korar jonno name attribute-->
            <label for="">Price:</label>
            <input type="text" name="price"><br>
            <label for="">Image:</label>
            <input type="file" name="image"><br>
            <button name="upload">Upload</button>
        </form>
                
        </div>
        
    </center>

    <!-- Fetch data -->
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
            
            
          </tr>
        </thead>
        <tbody>
          <?php
          include 'config.php';

          $pic = mysqli_query($con, "SELECT * FROM `tblcrud`");
          while($row = mysqli_fetch_array($pic)){
              echo "
                  <tr>
                      <td>$row[Id]</td>
                      <td>$row[Name]</td>
                      <td>$row[Price]</td>
                      <td><img src='$row[Image]' width = '200px' height = '70px'></td>
                      <td><a href='update.php?Id=$row[Id]' class='btn btn-success'>Update</a></td>
                      <td><a href='delete.php?Id=$row[Id]' class='btn btn-danger'>Delete</a></td>
                    
              
                  </tr>
              ";
              
          }

          ?>
        </tbody>
    </table>
    </div>

</body>
</html>