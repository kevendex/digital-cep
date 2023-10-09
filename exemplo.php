<?php 

require_once "vendor/autoload.php";

use kevendex\DigitalCep\Search;

$busca = new Search;
$resultado = $busca->getAddresFromZipcode("13033499");

print_r($resultado)

?>