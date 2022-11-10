<?php

	session_start();

/*
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

//Remover índices do array de sessão  > Coloca o array e indice que quer remover
	//unset()

	unset($_SESSION['x']); //remove o indice apenas se existir, não havendo erro se não existir

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';


//destruir a variável de sessão
	//session_destroy() //A variável é destruida. Somente na próxima requisição que é visivel que não há variável de sessão disponível

	session_destroy();

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
*/

	session_destroy();
	header('Location: index.php');


?>