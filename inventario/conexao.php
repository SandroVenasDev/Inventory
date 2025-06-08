<?php
define('HOST', '127.0.0.1:3307');
define('USUARIO', 'root');
define('SENHA', ''); 
define('DB', 'inventario'); 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>


