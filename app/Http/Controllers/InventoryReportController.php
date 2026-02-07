<?php

namespace App\Http\Controllers;
use TCPDF;
class InventoryReportController extends Controller
{
 public function generateInventoryPDF()
{
    $path = storage_path('app/data/inventory.json');
    $allData = json_decode(file_get_contents($path), true);
    $html = view('inventory_report', [
        'meta' => $allData['meta'],
        'products' => $allData['products'],
        'lables'   => $allData['lable']
    ])->render();
    $pdf = new \TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
    $pdf->SetTitle('Inventory Report');
    $pdf->SetMargins(10, 20, 10);
    $pdf->setFooterMargin(10);
    $pdf->setPrintHeader(true);
    $pdf->AddPage();
    $pdf->writeHTML($html, true, false, true, false, '');
    return $pdf->Output('Inventory_Report.pdf', 'I');
}
}
