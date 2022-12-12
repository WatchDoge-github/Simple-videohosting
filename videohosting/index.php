<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Uploader</title>
	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<style>
		
	</style>
</head>
<body>
	<div class="flex-card1">
		<div class="fontstyleflex1">
			<a href="view.php">ЗАГРУЖЕННЫЕ ВИДЕО</a>
		</div>
			<?php if (isset($_GET['error'])) {  ?>
				<p><?=$_GET['error']?></p>
			<?php } ?>
			<div class="flex-card2">
	 			<form action="upload.php"
	       			method="post"
	       			enctype="multipart/form-data">

	 			<input type="file"
	 	       		name="my_video">

	 			<input type="submit"
	 	       		name="submit" 
	 	       		value="Загрузить">
	 			</form>
			</div>
	</div>
</body>
</html>