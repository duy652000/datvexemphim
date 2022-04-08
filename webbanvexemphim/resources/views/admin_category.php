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
							Thêm Thể Loại
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label>Tên Thể Loại:</label>
								
    							<input type="text" name="name" class="form-control" placeholder="Tên Thể Loại...">
								<br>

								<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Thêm Thể Loại</a>
							</div>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách Thể Loại</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Tên Thể Loại</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
								<tr>
									<td>Hành Động</td>
									<td>
			                    		<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="#" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
			                  		</td>
			                  	</tr>
								  <tr>
									<td>Kinh Dị</td>
									<td>
			                    		<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="#" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
			                  		</td>
			                  	</tr>
			                  	
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
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