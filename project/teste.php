<?php
error_reporting(E_ALL & ~ E_NOTICE ); //& ~ E_DEPRECATED
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
@require_once("../vendor/autoload.php");
@require_once("entity.php");

use project\database\ENTITY;

$pessoa = ENTITY::instance("PESSOA");
$pessoa->insert(array("nm"=>"teste","email"=>"teste@teste.com.br"));
$id = $pessoa->Insert_ID();

echo "<br/>$id";
$pessoa->delete($id-4);

echo "<br/>";
$u = $id-1;
$pessoa->UPDATE(array("nm" => "Teste$u", "email"=>"teste$u@teste.com.br"), $u);

echo "<br/>";
$result = $pessoa->select();
foreach($result as $k => $f){
	print_r($f);
	echo "<br/>";
}

exit;
?>