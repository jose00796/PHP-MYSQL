<?php

require_once "autoload.php";

$objUsuario = new usuario();
/*$insert = $objUsuario->InsertarUsuario('Jose', 4242218958, 'jose+migdalyforever@gmail.com');
echo $insert;*/
$users = $objUsuario->getUsuarios();
echo "<pre>";
print_r($users);
echo "</pre>";

$updateUser = $objUsuario->updateUsuario(2, "Migdaly", 4248736975, "AmoAmiMuñecoJoseAndres@gmail.com");
echo $updateUser;