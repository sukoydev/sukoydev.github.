<?php

session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"></link>

    <title>Student Add</title>
  </head>
  <body>

  
  <div class="container mt-5">
    
      <?php  include('message.php'); ?>


      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Student Add
                  <a href="index.php" class="btn btn-danger float-end">Back</a></h4>
                  </div>
                    <div class="card-body">
                      <form action="code.php" method="POST">
                        <div class="mb-3">
                          <label>Student Nama</label>
                          <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label>Student Nrp</label>
                          <input type="text" name="nrp" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label>Student Email</label>
                          <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label>Student Jurusan</label>
                          <input type="text" name="jurusan" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label>Student Gambar</label>
                          <input type="text" name="gambar" class="form-control">
                        </div>
                        <div class="mb-3">
                          <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                      </div>
                    
                      
                      </form>
                 </div>
          </div>
       </div>
    </div>  

  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>