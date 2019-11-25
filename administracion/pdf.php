<style>


</style>

<?php 
	require '../vendor/autoload.php';

    use Spipu\Html2Pdf\Html2Pdf;
    /**
     * recogemos el contenido de una estructura php
     */
    
    ob_start();
    require_once 'estructuraPdfCorrelativas.php';
    $html = ob_get_clean();

    

    $html2pdf = new Html2Pdf('P', 'A4', 'en', true, 'UTF-8');
    $html2pdf->WriteHTML($html);
    $html2pdf->output();
?>