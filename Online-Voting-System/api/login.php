<?php 
session_start();

include 'connection.php';

$mobile = $_POST['mobile'];
$password = $_POST['password'];
$role = $_POST['role'];

//এই তিন তা moble, password, role same হলে লগিন করতে দিব এই quey করলাম
$check = mysqli_query($connect, "SELECT * FROM user WHERE mobile ='$mobile' AND password = '$password' AND role = '$role'");

if($check->num_rows > 0){
    //$userData = $check->fetch_assoc();

    $userData = mysqli_fetch_array($check); //এইটা একজন এর ডাটা তুলে নিয়ে আছে।
    $groups = mysqli_query($connect, "SELECT * FROM user WHERE role = 2"); //এখানে জাদের role 1 তারা ত voter আর role 2 তারা ত group। আমরা এই group এর মানুষ গুলা কে তুলে নিয়ে আসলাম। 

    $groupsData = mysqli_fetch_all($groups, MYSQLI_ASSOC);


    //ডাটা গুলা যে তুলে নিয়ে আসলাম এইবার session এ সেট করতে হবে।
    $_SESSION['userData'] = $userData;
    $_SESSION['groupsData'] = $groupsData;

    echo '
        <script>
            window.location = "../routes/dashboard.php";
        </script>
    ';


}else{
    echo "
    <script>
    alert('Invalid Credentials or User Not Found');
    window.location = '../';
    </script>"; 
}