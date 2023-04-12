<?php

if(!file_exists("livro.txt")){

    print "Sem Registros.";

}else{

    $handle = fopen("livro.txt", "r");

}

while (!feof($handle)) {
    $line = fgets($handle);
    echo $line ."<br>";
}
fclose($handle);

?>

<!DOCTYPE html>
<html lang="pt_BR">
 <head> 
     <p>
         <a href="menu.php" class="btn btn-danger">Retornar</a>
     </p>
  </head>
    </html>>
    
