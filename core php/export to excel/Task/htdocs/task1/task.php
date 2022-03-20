<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create Task!</title>
  </head>
  <body>
  <?php include 'components/_dbconnect.php'; ?>
    <?php include 'components/_navbar.php'; ?>


    <?php 
    
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        // Insert into comment db
        $name1 = $_POST['name1'];
        $taskName = $_POST['taskName'];
        $taskType = $_POST['taskType'];

            $sql = "INSERT INTO `task` (`sno`, `name`, `task_name`, `task_type`) VALUES (NULL, '$name1', '$taskName', '$taskType');";
            $result = mysqli_query($conn, $sql);
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!!</strong> Your Task has been added! 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'; }
    
    ?>

    <!-- task form -->
    <?php
    echo'
    <div class="container my-3 mx-auto" style="width: 50%;">
    <form action="/task1/task.php" method="post">
            <select class="form-select" aria-label="Default select example" name="name1">
            <option selected>Select name</option>';

        //   query for drop down
            $sql = "SELECT * FROM `users`"; 
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
                echo'    
            <option value="'. $row['name'].'" >'. $row['name'].'</option>
            ';}
            
            echo'
            </select>
            </div>
            <div class="container my-3 mx-auto" style="width: 50%;">
            <div class="mb-3 my-3">
                <label for="exampleInputEmail1" class="form-label">Task Name</label>
                <input type="text" class="form-control" name="taskName" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <select class="form-select" aria-label="Default select example" name="taskType">
            <option selected>Open this to mark the Task</option>
            <option value="Pending" >Pending</option>
            <option value="Done" >Done</option>
            </select>
            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
    </div>';
    ?>
    <hr>

    <!-- Output form -->

    <?php
    $sql = "SELECT * FROM `task`"; 
    $result = mysqli_query($conn, $sql);
    $sn=0;
    while($row = mysqli_fetch_assoc($result)){
        $sn+=1;
    echo'   
    <div class="container my-3 mx-auto" style="width: 50%;">
    <div class="card" style="width: 40rem;">
        <div class="card-header">
            Person '.$sn.'
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Name: </b>'. $row['name'].'</li>
            <li class="list-group-item"><b>Task : </b>'.$row['task_name'].'</li>
            <li class="list-group-item"><b>Status: </b>'.$row['task_type'].'</li>
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