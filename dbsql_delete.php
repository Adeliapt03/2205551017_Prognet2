<?php
   $servername = "prognet.localnet";
   $username = "2205551017";
   $password = "2205551017";
   $dbname = "db_2205551017";

    // membentuk koneksi ke database mysql
    $conn = new mysqli($servername, $username, $password, $dbname);
    $idtodelete = $_GET['nim'];

    $sql = "DELETE FROM tb_student WHERE nim='$idtodelete'";
    if ($conn->query($sql) === TRUE){
        header("Location:dbsql_select.php");
    }
?>