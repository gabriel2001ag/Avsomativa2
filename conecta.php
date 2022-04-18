<?php
define('host', 'localhost');
define('user', 'gabriel');
define('passwd', 'root');
define('DB', 'login');

$conexao = mysqli_connect(host, user, passwd, DB) or die ("não foi possivel conectar");



?>