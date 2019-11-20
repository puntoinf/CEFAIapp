<?php 
	require __DIR__.'/vendor/autoload.php';

    use Spipu\Html2Pdf\Html2Pdf;
    
    $html2pdf = new Html2Pdf('P', 'A4', 'en');
    $contenido = file_get_contents('coso.html');
    $html2pdf->WriteHTML($contenido);
    $html2pdf->output();
?>