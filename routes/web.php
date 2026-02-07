<?php

use App\Http\Controllers\InventoryReportController;
use App\Http\Controllers\JobCardController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/print-job-card', [JobCardController::class, 'generateJobCardPDF']);
Route::get('/generate-employee-pdf', [JobCardController::class, 'generateEmployeePDF']);
Route::get('/print-inventory-report', [InventoryReportController::class, 'generateInventoryPDF']);
Route::get('/generate-penalty-pdf', [PdfController::class, 'generatePdf']);
Route::get('/generate-payslip', [PdfController::class, 'generatePaySlip']);
