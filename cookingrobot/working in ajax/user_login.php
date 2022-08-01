<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$dbname = "cooking_robot_db";

$conn = new mysqli($host,$username,$password,$dbname);

if($conn->connect_error){
    echo "Not Connected";
}
else{

    echo "Connected:";
}

if (isset($_POST["signIn"])){
    $email_id = $_POST['email_id'];
    $pass_word = $_POST['password'];
    $sql = "select * from users_table where `email` = '$email_id' and `pass_word` = '$pass_word' limit 1";
    $result = mysqli_query($conn, $sql);

    if( mysqli_num_rows($result) > 0){
        $_SESSION['login'] = 'true';
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $row['first_name'];
        $_SESSION['userId'] = $row['user_id'];
        // console.log($row['first_name']);
        // $response['result']="success";
        header("Location:homepage1.php");
    }
    else{
        $response['result']="Invalid Login Details";
    } 
}
echo json_encode($response);
?>