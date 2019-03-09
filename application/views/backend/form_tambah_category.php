<!doctype html>
<html>
	<head>
		<title>Admin Page | Add Category</title>

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
				<h1>Add New Product </h1>
				<div><?= validation_errors() ?></div>
				<?= form_open_multipart('admin/products/create_category', ['class'=>'form-horizontal'])?>
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="category_name" placeholder="" value="<?= set_value('category_name')?>">
					    </div>
					  </div>
					  
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-default">Add</button>
					    </div>
					  </div>
				<?= form_close()?>
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