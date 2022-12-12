<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Viewer</title>
	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<style>

	</style>
</head>
<body>
	<div class="flex-card3">
		<div class="flex-card1">
		<div class="fontstyleflex1">
			<a href="index.php">ЗАГРУЗИТЬ</a>
		</div>
		</div>

		<?php 
		 include "db_conn.php";
		 $sql = "SELECT * FROM videos ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($video = mysqli_fetch_assoc($res)) { 
		 ?>
		 	<div class="content-container">	
	        <video src="uploads/<?=$video['video_url']?>" 
	        	   controls>
	        	
	        </video>
				<div class="fontstyleflex2">
					<a href="index.php"><?=$video['video_url']?></a>
				</div>
			</div>

	    <?php 
	     }
		 }else {
		 	echo "<div class='fontstyleflex2'><h1>Для начала, загрузите сюда что-нибудь</h1></div>";
		 }
		 ?>
	</div>
</body>
</html>