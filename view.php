<?php

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

                      
                        <input type="hidden" name="mahasiswa_id" value="<?=$mahasiswa['id'];?>">
                        <div class="mb-3">
                          <label>Student Nama</label>
                          <p class="form-control">
                          <?=$mahasiswa['nama'];?>
                          </p>
                        </div>
                        <div class="mb-3">
                          <label>Student Nrp</label>
                          <p class="form-control">
                          <?=$mahasiswa['nrp'];?>
                          </p>
                          
                        </div>
                        <div class="mb-3">
                          <label>Student Email</label>
                          <p class="form-control">
                          <?=$mahasiswa['email'];?>
                          </p>
                         
                        </div>
                        <div class="mb-3">
                          <label>Student Jurusan</label>
                          <p class="form-control">
                          <?=$mahasiswa['jurusan'];?>
                          </p>
                        
                        </div>
                        <div class="mb-3">
                          <label>Student Gambar</label>
                          <p class="form-control">
                          <?=$mahasiswa['gambar'];?>
                        </p>
                        
                    
                      
                      
                      
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