<?php
include 'connect.php';

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql  = "INSERT INTO crud (name, email, mobile, password) 
    VALUES ('$name',' $email', '$mobile',' $password')";

    $result = mysqli_query($con, $sql);

    if(!$result){
        echo "Error". $sql. "<br>". mysqli_error($con);
        die();
    }
    else{
        header('location:display.php');
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
     <title>Crud Operation</title>
</head>

<body>
   
 <div class="container my-5" >
    <h1>Information of user</h1>
    <form  method="post" >
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name " name="name" autocomplete="off">
        </div>
        
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" class="form-control" placeholder="Enter your email " name="email" autocomplete="off">
        </div>

        <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" placeholder="Enter your mobile number " name="mobile" autocomplete="off">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter your password " name="password" autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary" name= "submit">
            Submit
        </button>
        
    </form>
 </div>
</body>

</html>