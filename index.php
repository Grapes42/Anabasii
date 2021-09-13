<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Anabasii - Upload File</title>
		<link rel="stylesheet" href="styles.css">
	</head>

	<header>
	<a href="index.php">Home</a> |
	<a href="https://github.com/Grapes42/Anabasii">Github Repo</a>
	</header>

	<body>
	<center>
		<div class="titleclass">
		<h1>Anabasii</h1>
		<h2>Simple large file sharer</h2>
		</div>

		<div class="bodyclass">
		<hr>
		<h3>Select browse to choose a file<br>then upload to get a link to share</h3>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="file">
			<button type="submit" name="submit">Upload</button>
		</form>
		<hr>
		<h3>What is Anabasii?</h3>
		<p><span title="What does Anabasii mean?"><a href="definition.html">Anabasii</a></span> is an opensource (<span title="Github Repository"><a href="https://github.com/Grapes42/Anabasii">Github</a><span>), free to use file sharer hosted on a little raspberry pi
		<br><br>
		It allows you to share any videos or other files without the small limits most communication programs provide</p>
		</div>
	</center>
	</body>
</html>
