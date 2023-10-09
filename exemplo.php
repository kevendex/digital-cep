<?php 

require_once "vendor/autoload.php";

use usuario\DigitalCep\Search;

$busca = new Search;
$resultado = $busca->getAddresFromZipcode("13033499");

print_r($resultado)

?>