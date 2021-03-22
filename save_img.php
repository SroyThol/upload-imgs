
<?php
 
if (isset($_POST['txt-post'])) {
    echo      'ID:    '.$_POST['txt-id'].'<br>';
    echo    'Name:    '.$_POST['txt-name'].'<br>';
    echo  'Gender:    '.$_POST['txt-gender'].'<br>';
    echo 'Address:    '.$_POST['txt-address'].'<br>';
    $img = $_FILES['txt-file'];
    // echo 'Name:        '.$img['name'].'<br>';
    $path = $img['name'];
    $ext = pathinfo($path,PATHINFO_EXTENSION);
    // echo $ext;
    $newName = time(); // function time(): use for not doble extention
    $newFile = $newName.'.'.$ext;
    // echo 'Folder&file: '.$img['tmp_name'];
    move_uploaded_file($img['tmp_name'],'img/'.$newFile); //cus us move to folder
}
else 
{
    echo "No have data";
}
   
?>