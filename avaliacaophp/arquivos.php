<?php
print_r($_POST);
$filename = "livro.txt";

if(!file_exists("livro.txt")){
    $handle = fopen("livro.txt", "w");
} else {
    $handle = fopen("livro.txt", "a");
}

fwrite($handle,$_POST['titlo']);
fwrite($handle,"\n");
fwrite($handle,$_POST['autor']);
fwrite($handle,"\n");
fwrite($handle,$_POST['data']);
fwrite($handle,"\n");
fwrite($handle,"-----------------------------\n");
fflush($handle);
fclose($handle);

header("location: menu.php");

?>