<!DOCTYPE html>

<html>

<head>
<title>Anabasii - Uploaded</title>
<link rel="stylesheet" type="text/css" href="styles.css?version=51">
</head>

<header>
<h5>
<a href="index.php">Home</a> |
<a href="https://github.com/Grapes42/Anabasii">Github Repo</a>
</h5>
</header>

<body>
<center>
<div class="titleclass">
<h1>Anabasii</h1>
<h2>Simple large file sharer</h2>
</div>
<h3>Copy this link and send it to your friends!</h3>
<p>
<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'txt', 'mp4', 'gif');

    //if(in_array($fileActualExt, $allowed))
    //{
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
    //}
    //else
    //{
    //    echo "File type not allowed";
    //}
}
?>
</p>
</center>
</body>

</html>
