<?php 
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

ob_start();
require_once 'archivo.php';

$html = ob_get_clean();

$pdf = new Html2Pdf();
$pdf->writeHTML($html);
$pdf->output('ficha.pdf');
 ?>