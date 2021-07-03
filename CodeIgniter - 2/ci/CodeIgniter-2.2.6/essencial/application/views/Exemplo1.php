<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?> <!--Sempre deixar definido, pois se não achar o diretório vai aparecer a mensagem.*/ -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>View de exemplo</title>
</head>
<body>

<div id="container">
	<h1><?php echo $titulo; ?> </h1>

	<div id="body">
		<p><?php echo $conteudo; ?> </p>
	</div>
</div>

</body>
</html>