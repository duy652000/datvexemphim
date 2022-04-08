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
					<div class="panel-heading">Thông Tin Chi Tiết</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
                                            <th>Mã Vé</th>
                                            <th>Giá Vé</th>
                                            <th>Số Vé</th>
											<th>Tên KH</th>
											<th>SĐT</th>
                                            <th>Tên Phim</th>
                                            <td>Giờ Bắt Đầu</td>
                                            <td>Giờ Kết Thúc</td>										
											<th>Số Ghế</th>
                                            <th>Giờ Đặt</th>
                                            <th>Tên Phòng</th>
                                            
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>100003</td>
											<td>50.000vnđ</td>
                                            <td>4</td>
											<td>Nguyễn Văn Huê</td>
											<td>09000000</td>
                                            <td>Ngày Cũ Của Tương Lai</td>
                                            <td>21:30</td>
                                            <td>23:30</td>                                         
                                            <td>20</td>
                                            <td>10:03</td>
											<td>D</td>
                                            
											
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
