<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Anabasii - Upload File</title>
		<link rel="stylesheet" href="styles.css">
	</head>

	<body>
	<center>
		<div class="titleclass">
		<h1>Anabasii</h1>
		<h3>Simple large file sharer</h3>
		</div>
		<h2>Select browse to choose a file<br>then upload to get a link to share</h2>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="file">
			<button type="submit" name="submit">Upload</button>
		</form>
	</center>
	</body>
</html>
