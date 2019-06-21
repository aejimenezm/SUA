<?php
require './vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$html2pf = new Html2Pdf();
$html2pf->writeHTML('<h1>Probando generar un pdf</h1>');
$html2pf->output();

?>