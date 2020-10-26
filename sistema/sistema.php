<?php

require_once "autoload.php";

$objUsuario = new usuario();
//$insert = $objUsuario->InsertarUsuario('Jose', 4242218958, 'jose+migdalyforever@gmail.com');
//$insert = $objUsuario->InsertarUsuario('Migdaly', 4142026911, 'AmoaMiMuñecoJoseAndres@gmail.com');
//$insert = $objUsuario->InsertarUsuario('Franmy', 4149143536, 'VaquitaSexy@gmail.com');
//$insert = $objUsuario->InsertarUsuario('Kendra Lust', 4149143536, 'SuperMilf@gmail.com');
//echo $insert;

/*$updateUser = $objUsuario->updateUsuario(3, "Franmy", 4142026911, "VaquitaSexy@gmail.com");
echo $updateUser;*/

$users = $objUsuario->getUsuarios();
echo "<pre>";
print_r($users);
echo "</pre>";

$OneUser = $objUsuario->GetUser(3);
echo "<pre>";
print_r($OneUser);
echo "</pre>";

$objUsuario->DelUser(5);
echo $objUsuario;