<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    
}

if (file_exists($target_file)) {
    echo "Fisiereul exista.";
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Prea mare.";
    $uploadOk = 0;
}


if ($uploadOk == 0) {
    echo "Fisier neuploadat.";

	} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo basename( $_FILES["fileToUpload"]["name"]). " a fost uploadat.";
    } else {
        echo "A aparut o eroare.";
    }
}
?>