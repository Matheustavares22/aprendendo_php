<?php 
$i = 0;
echo '<h1>Isso é um laço de repetição While:<br></h1>';
while ($i < 10){
	echo 'oi olha só o número '.$i, '<br> ';
	$i++;
}

$i = 0;
echo '<h1>Esse laço lança todos os h algum numero do hmtl:<br></h1>';
while ($i < 10){
	echo '<h'.$i,'>Titulo do tipo h'.$i, '</h '.$i,'><br>';
	$i++;
}

?>