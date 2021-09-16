<!DOCTYPE html>

<html lang="en">
	
	<head>

		<title>Anabasii - Uploaded</title>
		<link rel="stylesheet" type="text/css" href="styles.css?version=51">

	</head>


	<body>

		<header>

			<h5>
			<a href="index.php">Home</a> |
			<a href="https://github.com/Grapes42/Anabasii">Github Repo</a> |
			<a href="definition.html">Anabasii Definition</a>
			</h5>

		</header>


		<center>

			<div class="titleclass">

				<h1>Anabasii</h1>
				<h2>Simple large file sharer</h2>

			</div>


			<div class="bodyclass">

				<hr>
				
				<h3>Copy this link and send it to your friends!</h3>

				<p class="linkclass">

					<?php

					if (isset($_POST['submit']))
					{

						$file = $_FILES['file'];

						$fileName = $_FILES['file']['name'];
						$fileTmpName = $_FILES['file']['tmp_name'];
						$fileSize = $_FILES['file']['size'];
						$fileError = $_FILES['file']['error'];
						$fileType = $_FILES['file']['type'];

						$fileExt = explode('.', $fileName);
						$fileActualExt = strtolower(end($fileExt));

						if($fileError === 0)
						{
							if($fileSize < 1000*1000*1000) // 1GB
							{
								$fileNameNew = uniqid('', true).".".$fileActualExt;
								$fileDestination = 'uploads/'.$fileNameNew;
								move_uploaded_file($fileTmpName, $fileDestination);
								echo "http://anabasii.ddns.net/".$fileDestination;
							}
							else
							{
								echo "Your file is too large";
							}
						}
						else
						{
						    echo "There was an error uploading your file";
						}

					}

					?>

				</p>

				
				<p>This link may last anywhere from a couple of weeks to a couple of months depending on how much use the server receives</p>

				<hr>

			</div>

		</center>

	</body>

</html>
