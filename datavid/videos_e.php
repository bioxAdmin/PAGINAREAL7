<?php require_once "parte_superior1.php"?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Videos</title>
<body>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Aprendizaje</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<?php
			require 'conn.php';
			
			$query = mysqli_query($conn, "SELECT * FROM `video` ORDER BY `video_id` ASC") or die(mysqli_error());
			while($fetch = mysqli_fetch_array($query)){
		?>
		<div class="col-md-12">
			<div class="col-md-4" style="word-wrap:break-word;">
				<br />
				<h4>Nombre del Video</h4>
				<h5 class="text-primary"><?php echo $fetch['video_name']?></h5>
			</div>
			<div class="col-md-8">
				<video width="200%" height="300%" controls>
					<source src="<?php echo $fetch['location']?>">
				</video>
			</div>
			<br style="clear:both;"/>
			<hr style="border-top:1px groovy #000;"/>
		</div>
		<?php
			}
		?>
	</div>
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog">
			<form action="save_video.php" method="POST" enctype="multipart/form-data">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Archivo de Video</label>
								<input type="file" name="video" class="form-control-file"/>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
				</div>
			</form>
		</div>
	</div>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.js"></script>

</body>

</html>
<?php require_once "parte_inferior1.php"?>