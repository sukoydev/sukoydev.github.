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

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-4">
		<?php include ('message.php');?>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4>Student Details
						<a href="create.php" class="btn btn-primary float-end">Add Student</a>
						</h4>
					</div>
					<div class="card-body">

						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama</th>
									<th>Nrp</th>
									<th>Email</th>
									<th>Jurusan</th>
									<th>Gambar</th>
									<th>Action</th></th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$query = "SELECT * FROM mahasiswa";
									$query_run = mysqli_query($con, $query);

									if( mysqli_num_rows($query_run) > 0)
									{
										foreach($query_run as $mahasiswa)
										{
											
											?>
											<tr>
												<td><?= $mahasiswa['id']; ?></td>
												<td><?= $mahasiswa['nama']; ?></td>
												<td><?= $mahasiswa['nrp']; ?></td>
												<td><?= $mahasiswa['email']; ?></td>
												<td><?= $mahasiswa['jurusan']; ?></td>
												<td><?= $mahasiswa['gambar']; ?></td>
												<td>
													<a href="view.php?id=<?=$mahasiswa['id']; ?>" class="btn btn-info btn-sm">View</a>
													<a href="edit.php?id=<?=$mahasiswa['id']; ?>" class="btn btn-success btn-sm">Edit</a>
													<form action="code.php" method="POST" class="d-inline">
													<button type="submit" name="delete_mahasiswa" value="<?=$mahasiswa['id'];?>" class="btn btn-danger btn-sm">Delete</button>
													</form>
													
												</td>
											</tr>
											<?php
										}
									}
									else
									{
										echo "<h5>No Record Found</h5>";
									}
								?>
								<tr>
									<td></td>
								</tr>
							</tbody>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>