<?php
require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();

$html='';
$html.='<html>';

$html.='<header></header>';
$html.='<body><h1>Head Line</h1>';
$html.='<div><table>';
$html.='<tr><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td></tr>';
$html.='<tr><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td></tr>';
$html.='<tr><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td></tr>';
$html.='<tr><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td></tr>';
$html.='<tr><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td></tr>';
$html.='<tr><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td></tr>';
$html.='<tr><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td><td>Col1</td></tr>';
$html.='</table></div>';
$html.='</body>';
$html.='</html>';

use Dompdf\Dompdf;

//$dompdf->set_option('defaultFont', 'Courier'); // You can set Font Here

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

?>