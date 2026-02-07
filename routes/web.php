<?php

use App\Http\Controllers\InventoryReportController;
use App\Http\Controllers\JobCardController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/print-job-card', [JobCardController::class, 'generateJobCardPDF']);//jobcard
Route::get('/generate-employee-pdf', [JobCardController::class, 'generateEmployeePDF']);//studentregistration
Route::get('/print-inventory-report', [InventoryReportController::class, 'generateInventoryPDF']);//inventory
Route::get('/generate-penalty-pdf', [PdfController::class, 'generatePdf']);//Arabic/English Academic & Employee Penalty PDF Generator (Laravel + TCPDF)
Route::get('/generate-payslip', [PdfController::class, 'generatePaySlip']);
