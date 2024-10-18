<?php
    require('connectDB.php');
    if (isset($_POST['id']) && isset($_POST['password'])){
    $id=$_POST['id'];
    $password=$_POST['password'];
    $sql= "select * from tbEmployee where empId = '$id' and password = '$password'";
    $emp= executeResult($sql);
    if(count($emp) ==0){
        $error = "login fail";
    }else{
        //dang nhap sai
        $employee = $emp[0];
        if($employee['role'] ==1){
            header('location: staff.php');
        }else{
            header('location: admin.php');
        }
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>Login</h1><p style="color:red;"><?=isset($error)? $error : ''?></p>
    <form action="" method="post">
        <div class="mb-3 mt-3">
        <p> <label for="empId" class="form-label">empId:</label> 
            <input type="text" class="form-control" name="id"></p>
        </div>
        <div class="mb-3 mt-3">
        <p> <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" name="password"></p>
        </div>
        <div class="mb-3 mt-3">
        <p><input type="submit" class="btn btn-primary" name="login"></p>
        </div>
    </form>
</body>
</html>