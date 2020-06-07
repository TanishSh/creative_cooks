<?php
if(isset($_POST['dish'], $_POST['message'])){
    $dishName = $_POST['dish'];
    $instructions = $_POST['message'];
}

if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'mp4');
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if ($fileSize < 5000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = "../images/".$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location:uploaded.php?file=$fileDestination&dish=$dishName&message=$instructions");
            }else{
                echo "Your file is too big! ";
            }
        }else{
            echo "There was an error uploading your file! ";
        }
    }else{
        echo "You cannot upload files of this type! ";
    }
}

?>

<script type="text/javascript">
    var fileName = '<?php echo $fileNameNew;?>';
    img.src = "../images/".concat(String(fileName));
    document.getElementById('body').appendChild(img);
</script>

