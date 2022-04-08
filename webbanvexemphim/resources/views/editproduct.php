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
					<div class="panel-heading">Sửa Thông Tin Phim</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">

									<div class="form-group" >
										<label>Tên Phim</label>
										<input required type="text" name="" class="form-control">
									</div>

									<div class="form-group" >
										<label>Thời Lượng</label>
										<input required type="number" name="" class="form-control">
									</div>

									<div class="form-group" >
										<label>Ảnh Minh Họa</label>
										<input id="img" type="file" name="" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="img/iphone7-plus-black-select-2016.jpg">
									</div>
									<div class="form-group" >
										<label>Ngôn Ngữ</label>
										<input required type="text" name="" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ngày Phát Hành</label>
										<input required type="date" name="" class="form-control">
									</div>
									<div class="form-group" >
										<label>Quốc Gia</label>
										<input required type="text" name="" class="form-control">
									</div>

									<div class="form-group" >
										<label>Ngày Chiếu</label>
										<input required type="date" name="" class="form-control">
									</div>

									<div class="form-group" >
										<label>Giờ Bắt Đầu</label>
										<input required type="text" name="" class="form-control">
									</div>

									<div class="form-group" >
										<label>Giờ Kết Thúc</label>
										<input required type="text" name="" class="form-control">
									</div>
							
									<div class="form-group" >
										<label>Mô Tả</label>
										<textarea required name="description"></textarea>
									</div>

									<div class="form-group" >
										<label>Thể Loại</label>
										<select required name="" class="form-control">
											<option value="1">Kinh Dị</option>
											<option value="2">Hành Động</option>
											<option value="3">Kinh Dị</option>
											<option value="4">Hành Động</option>
											<option value="5">Kinh Dị</option>
											<option value="6">Hành Động</option>
					                    </select>
									</div>
									<div class="form-group" >
										<label>Phim Bom Tấn</label><br>
										YES: <input type="radio" name="" value="1">
										NO: <input type="radio" checked name="" value="0">
									</div>
									<input type="submit" name="" value="Sửa" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
						</form>
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
