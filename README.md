Title:

Dynamic PDF Report Generator for Students & Employee Management (Laravel + TCPDF + DOMPDF)

Description:

This Laravel project generates dynamic, professional, and bilingual PDF reports including:

Student Registration Reports

Job Card Reports

Inventory & Asset Reports

Academic / Penalty Notifications

Employee Pay Slips

Features:

Fully bilingual support (RTL Arabic + English)

Dynamic content from JSON files

Professional table formatting with headers, footers, and logos

Salary, deductions, and additions calculated automatically

Generates print-ready PDFs for HR, management, and academic records

Tech Stack:

Laravel 12,php

TCPDF & DOMPDF for PDF generation

JSON for dynamic data

HTML + CSS for report templates

Usage:

Place JSON files in /storage/app/data/

Run the respective controller method (generateStudentPDF(), generateJobCardPDF(), generatePaySlip(), etc.)

PDF opens automatically in browser or can be downloaded
