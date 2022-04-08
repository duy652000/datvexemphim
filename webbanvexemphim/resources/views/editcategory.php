<!DOCTYPE html>
<html>

<head>
	<?php
	include("feAdmin/lib/libr.php")//libary
	?>
</head>

<body>
<?php
	include("feAdmin/lib/header.php");//header 
	include("feAdmin/lib/sidebar.php");//sidebar
	include("feAdmin/lib/row.php");//row
	?>
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Chỉnh Sửa Thể Loại Phim
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label>Tên Thể Loại:</label>
    							<input type="text" name="name" class="form-control" placeholder="Tên Thể Loại...">
							</div>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

	<?php
	include("feAdmin/lib/libjs.php")//lib js
	?>
		
</body>

</html>