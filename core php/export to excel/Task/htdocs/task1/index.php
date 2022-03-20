<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add contact!</title>
</head>
<body>
  <?php include 'components/_dbconnect.php'; ?>
  <?php include 'components/_navbar.php'; ?>
    
     <!-- database write querry here -->

    <?php 
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
       
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];

        // to check if number already exists or submiting without entering anything
        $existSql = "select * from `users` where mobile = '$number'";
        $result = mysqli_query($conn, $existSql);
        $numRows = mysqli_num_rows($result);
        if($numRows>0 || $number ==0){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Failed!!</strong> Your contact already exists or you did not enter the phone number! 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        else{
            $sql = "INSERT INTO `users` (`sno`, `name`, `email`, `mobile` ) VALUES (NULL, '$name','$email', '$number');";
            $result = mysqli_query($conn, $sql);
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!!</strong> Your contact has been added! 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'; }
    }
    ?>
    <!-- Input form -->

    <div class="container my-3 mx-auto" style="width: 50%;">
        <form action="/task1/index.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contact Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contact Number</label>
                <input type="text" class="form-control" name="number" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Id</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
 <hr>

    <!-- Output form -->

    <?php
    $sql = "SELECT * FROM `users`"; 
    $result = mysqli_query($conn, $sql);
    $sn=0;
    while($row = mysqli_fetch_assoc($result)){
        // $name = $row['name'];
        // $number = $row['phone_no'];
        // $email = $row['email'];
        $sn+=1;
    echo'   
    <div class="container my-3 mx-auto" style="width: 50%;">
    <div class="card" style="width: 40rem;">
        <div class="card-header">
            Contact '.$sn.'
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Name: </b>'. $row['name'].'</li>
            <li class="list-group-item"><b>Mobile: </b>'.$row['mobile'].'</li>
            <li class="list-group-item"><b>Email: </b>'.$row['email'].'</li>
        </ul>  
        </div>
        </div>
   ';
    }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>