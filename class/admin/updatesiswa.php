<?php 
require_once "admin.php";

if(isset($_POST['nis'])){
    $nis = $_POST['nis'];
    $name = $_POST['name'];
    $kelas = $_POST['kelas'];
    $siswa = $admin->updatesiswa($name,$kelas,$nis);
    if($siswa == true)
    {
        $status = ["status"=>true,"message"=>"Data berhasil di update"];
        echo json_encode($status,true);
    }
    else{
        $status = ["status"=>true,"message"=> $admin->error];
        echo json_encode($status,true);
    }
}
?>