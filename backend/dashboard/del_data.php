<?php include "../conn.php";
$id = $_GET['id'];

    if($id){
        
        $qry_hapus=mysqli_query($conn,"delete from user where id='".$id."'");
        
        if($qry_hapus){
                header("location: admin-dashboard.php");
        } else {
            echo "<script>alert('delete failed');
            location.href='tampil_siswa.php';</script>";
        }
    }
?>
