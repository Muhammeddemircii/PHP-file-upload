<!-- <?php
    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"] == "upload"){
        echo "<pre>";
        print_r($_FILES["fileToUpload"]);
        print_r($_POST);
        echo "</pre>";
    }
    $dest_path="./uploadedFiles/";
    $filename=$_FILES["fileToUpload"]["name"];

    if(empty($_filename)){
        echo "Dosya seçiniz.";
    }

    $fileSourcePath=$_FILES["fileToUpload"]["tmp_name"];

    $fileDesPath= $dest_path.$filename;

    if (move_uploaded_file($fileSourcePath, $fileDesPath)){
        echo "dosya yüklendi";
    } else
    {
        echo "hata";
    }
?> -->