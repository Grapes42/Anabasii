<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Anabasii - Upload File</title>
	</head>

	<body>
		<h1>Anabasii</h1>
		<h3>Select browse to choose a file<br>then upload to get a link to share</h3>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="file">
			<button type="submit" name="submit">Upload</button>
		</form>
	</body>
</html>
