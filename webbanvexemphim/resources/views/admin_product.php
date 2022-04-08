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
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh Sách Phim</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="/addproduct" class="btn btn-primary">Thêm Phim</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>Mã Phim </th>
											<th width="20%">Tên Phim</th>										
											<th>Thời Lượng</th>
											<th width="20%">Ảnh Minh Họa</th>

											<th>Ngôn Ngữ</th>
											<th>Ngày Phát Hành</th>
											<th>Quốc Gia</th>

											<th>Thể Loại</th>
											<th>Quản Lý</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Ngày Cũ Của Tương Lai</td>
											<td>120 Phút</td>
											<td>
												<img width="200px" src="img/ncctl.jpg" class="thumbnail">
											</td>
											<td>Tiếng Anh</td>
											<td>23-5-2014</td>
											<td>Mỹ</td>
											<td>Hành Động</td>

											<td>
												<a href="/editproduct" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										
									</tbody>
								</table>							
							</div>
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
