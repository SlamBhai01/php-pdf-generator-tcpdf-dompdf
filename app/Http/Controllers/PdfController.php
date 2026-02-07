<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCPDF;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function generatePdf()
    {
        $jsonPath = storage_path('app/data/data.json');
        if (!file_exists($jsonPath)) {
            return response()->json(['error' => 'JSON file not found'], 404);
        }
        $jsonData = json_decode(file_get_contents($jsonPath), true);
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->setRTL(true);
        $pdf->SetFont('dejavusans', '', 11);
        $pdf->SetMargins(20, 25, 20);
        $pdf->AddPage();
        $html = view('pdf.penalty_form', ['data' => $jsonData])->render();
        $pdf->writeHTML($html, true, false, true, false, '');
        return response($pdf->Output('Academic_Notification.pdf', 'I'))->header('Content-Type', 'application/pdf');
    }
    public function generatePaySlip()
    {

        $jsonPath = storage_path('app/data/payslip_data.json');

        if (!file_exists($jsonPath)) {
            return response()->json(['error' => 'Data file not found.'], 404);
        }

        $jsonData = json_decode(file_get_contents($jsonPath), true);


        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


        $pdf->SetCreator('Management Time Co.');
        $pdf->SetAuthor('HR System');
        $pdf->SetTitle('Employee Pay Slip');
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetMargins(5, 5, 5);
        $pdf->SetAutoPageBreak(TRUE, 15);
        $pdf->setRTL(true);
        $pdf->SetFont('dejavusans', '', 10);
        $pdf->AddPage();
        $html = view('pdf.payslip', ['data' => $jsonData])->render();
        $pdf->writeHTML($html, true, false, true, false, '');
        $fileName = 'PaySlip_' . ($jsonData['meta_values']['id'] ?? time()) . '.pdf';
        return response($pdf->Output($fileName, 'I'))
            ->header('Content-Type', 'application/pdf');
    }
}
