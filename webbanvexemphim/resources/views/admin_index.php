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
			<div class="col-md-12">
				<div class="panel panel-blu">
					<div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Lịch</div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->
		  

	<?php
	include("feAdmin/lib/libjs.php")//lib js
	?>

</body>

</html>
