<?php

session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"></link>

    <title>Student Edit</title>
  </head>
  <body>

  
  <div class="container mt-5">
    
      <?php  include('message.php'); ?>


      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Student Edit
                  <a href="index.php" class="btn btn-danger float-end">Back</a></h4>
                  </div>
                    <div class="card-body">

                    <?php
                    if(isset($_GET['id']) )
                    {
                      $mahasiswa_id = mysqli_real_escape_string($con, $_GET['id']);
                      $query = "SELECT * FROM mahasiswa WHERE id='$mahasiswa_id' ";
                      $query_run = mysqli_query($con, $query);

                      if(mysqli_num_rows($query_run) > 0)
                      {
                        $mahasiswa = mysqli_fetch_array($query_run);
                        ?>

                      <form action="code.php" method="POST">
                        <input type="hidden" name="mahasiswa_id" value="<?=$mahasiswa['id'];?>">
                        <div class="mb-3">
                          <label>Student Nama</label>
                          <input type="text" name="nama" value="<?=$mahasiswa['nama'];?>" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label>Student Nrp</label>
                          <input type="text" name="nrp"  value="<?=$mahasiswa['nrp'];?>" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label>Student Email</label>
                          <input type="email" name="email" value="<?=$mahasiswa['email'];?>" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label>Student Jurusan</label>
                          <input type="text" name="jurusan" value="<?=$mahasiswa['jurusan'];?>" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label>Student Gambar</label>
                          <input type="text" name="gambar" value="<?=$mahasiswa['gambar'];?>" class="form-control">
                        </div>
                        <div class="mb-3">
                          <button type="submit" name="update_student" class="btn btn-primary">
                            Update Student

                          </button>
                        </div>
                    
                      
                      </form>
                      
                      <?php

                      }
                      else
                      {
                        echo "<h4>No Such Id Found</h4>";
                      }
                      }
                      ?>
                 </div>
          </div>
       </div>
    </div>  

  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>