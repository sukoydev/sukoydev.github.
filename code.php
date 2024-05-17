<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_mahasiswa']))
{
    $mahasiswa_id = mysqli_real_escape_string($con, $_POST['delete_mahasiswa']);
    $query = "DELETE FROM mahasiswa WHERE id='$mahassiswa_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Delete Successfully";
        header("Location: index.php");
        exit(0);

    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted ";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $mahasiswa_id = mysqli_real_escape_string($con, $_POST['mahasiswa_id']);

    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $nrp = mysqli_real_escape_string($con, $_POST['nrp']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);
    $gambar = mysqli_real_escape_string($con, $_POST['gambar']);

    $query = "UPDATE mahasiswa SET nama='$nama', nrp='$nrp', email='$email', jurusan='$jurusan', gambar='$gambar' 
                WHERE id='$mahasiswa_id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Update Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Update";
        header("Location: index.php");
        exit(0);
    }
}






if(isset($_POST['save_student']))
{

    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $nrp = mysqli_real_escape_string($con, $_POST['nrp']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);
    $gambar = mysqli_real_escape_string($con, $_POST['gambar']);

    $query = "INSERT INTO mahasiswa (nama,nrp,email,jurusan,gambar) VALUES 
            ('$nama', '$nrp', '$email', '$jurusan', '$gambar')";

            $query_run = mysqli_query($con, $query);
            if($query_run)
            {
                $_SESSION['message'] = "Student Create Successfully";
                header("Location: create.php");
                exit(0);
            }
            else
            {
               
                $_SESSION['message'] = "Student Not Created";
                header("Location: create.php");
                exit(0); 
            }
}

?>
