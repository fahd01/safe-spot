<?php

namespace App\Service;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Label\Margin\Margin;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Builder\BuilderInterface;

class QrCodeService
{
    /**
     * @var BuilderInterface
     */
    protected $builder;

    public function __construct(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function qrcode($url, $details)
    {
        $objDateTime = new \DateTime('NOW');
        $dateString = $objDateTime->format('d-m-Y H:i:s');
        $path = dirname(__DIR__, 2) . '/public/';

        // Assuming that the label alignment is set via a configuration array or a method
        // You should refer to the actual library documentation for the correct approach
        $result = $this->builder
            ->data($url)
            ->encoding(new Encoding('UTF-8'))
            ->size(300)
            ->margin(10)
            ->labelText($dateString . ' - ' . $details)
            // Remove the instantiation of LabelAlignmentCenter and set alignment directly
            ->labelMargin(new Margin(15, 5, 5, 5))
            ->logoPath($path . 'logo.png')
            ->logoResizeToWidth(100)
            ->logoResizeToHeight(100)
            ->backgroundColor(new Color(221, 158, 3))
            ->build();

        $namePng = uniqid('', '') . '.png';
        $result->saveToFile($path . 'qr-code/' . $namePng);

        return $result->getDataUri();
    }
}
