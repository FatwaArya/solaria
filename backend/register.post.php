<?php include "./conn.php";


$user = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "insert into user (email, username,password,name) 
        values ('".$email."','".$user."','".md5($password)."','".$name."')";


        
        $result = mysqli_query($conn,$sql);
        if($result){
            header('Location: login.php');
        
        }else{
            printf('Gagal Menambah'.mysqli_error($conn));
            exit();
        }
        

?>

