<!doctype html>
<html>
	<head>
		<title>Admin Page | View All Products</title>

		<!-- add js dan css -->
		<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

		<!-- buat ngecek border kiri ama kanan pas bikin margin
		<style >
			.row div{ border:#000 1px solid }
		</style> -->
	</head>
	<body>

		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<h1>Products Table </h1>
				<table id="myTable" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>#</th>
							<th>Category Name</th>
							<th>Products</th>
							<th>
								<?=anchor('admin/products/create_category/','Add Category', ['class'=>'btn btn-success'])?>

							</th>
						</tr>
					</thead>	

					<tbody>
						<?php foreach ($hasil_data as $hasil) : ?> 
						<tr>
							<td><?=$hasil->id?></td>
							<td><?=$hasil->category_name?></td>
							<td><?=$hasil->products?></td>
							<!-- kasi tombol edit delete buat suatu product pake php-->
							<td>
								
							</td>	
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-1"></div>
		</div>
		
		

		<script>
			$(document).ready(function() {
			    $('#myTable').DataTable();
			} );
		</script>

	</body>
</html>