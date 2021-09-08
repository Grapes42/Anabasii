<!DOCTYPE html>

<html>

<head>
<title>Anabasii - Uploaded</title>
</head>

<body>
<h1>Anabasii</h1>
<h2>Copy this link and send it to your friends!</h2>
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

    if(in_array($fileActualExt, $allowed))
    {
        if($fileError === 0)
        {
            if($fileSize < 100000000)
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
    else
    {
        echo "File type not allowed";
    }
}
?>
</p>
</body>

</html>
