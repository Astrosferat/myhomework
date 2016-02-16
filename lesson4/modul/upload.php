<?php
$nowtime = time() ;

$uploaddir = 'files/'; //заданий каталог для файлів
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

//копіюю файл в заданий каталог
if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
    echo "<h3>File : ".$_FILES['uploadfile']['name']." load successfully</h3>";
    echo "<p><b>file size: ".$_FILES['uploadfile']['size']." Kbyte</b></p>";
    echo "<p><b>Time to file load : ".(time()-$nowtime)." sec</b></p>";
}
else 
{ 
    echo "<h3>Error! Can not load file!</h3>";
}

?>
