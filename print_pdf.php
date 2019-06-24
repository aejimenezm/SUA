<?php
require './vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$nombres = $_GET['nombres'];
$apellidos = $_GET['apellidos'];
$dpi = $_GET['dpi'];
$vice = $_GET['viceministerio'];
$dir = $_GET['direccion'];
$depto = $_GET['depto'];
$puesto = $_GET['puesto'];
// $renglon = $_GET
$fecha_inicio = $_GET['fecha_inicio'];
$fecha_final = $_GET['fecha_final'];
$html2pf = new Html2Pdf();
$html2pf->writeHTML('Nombres: '.$nombres.'		Apellidos: '.$apellidos.'<br>DPI: '.$dpi);
$html2pf->output();

?>