<?php 
    session_start();
    if(!isset($_SESSION['userData'])){
        header("location:../index.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    
    <button>Back</button> 
    <button>Logout</button>
<h1>Online Voting System</h1>
<hr>




</body>
</html>