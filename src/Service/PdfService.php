<?php 

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfService
{
    private $dompdf;

    public function __construct()
    {
        // Instantiate and use the dompdf class
        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $options->set('isHtml5ParserEnabled', true);
        $this->dompdf = new Dompdf($options);
    }

    public function showPdfFile($html)
    {
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();
        $this->dompdf->stream("document.pdf", [
            "Attachment" => false
        ]);
    }

    public function generatePdfFile($html, $filePath)
    {
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();
        file_put_contents($filePath, $this->dompdf->output());
    }
}
