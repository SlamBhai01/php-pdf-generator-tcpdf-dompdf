# 📄 Automated Enterprise Document Generation Engine

A robust PHP/Laravel backend module designed to automate the generation of complex, high-fidelity business documents. This project demonstrates a hybrid approach using **TCPDF** and **Dompdf** to solve rendering challenges like **Right-to-Left (RTL)** text support, dynamic tables, and CSS-styled layouts.

---

## 🚀 Key Features

* **Multi-Lingual RTL Support:** Full support for **Urdu & Arabic** text rendering (official notices & invoices) without character breaking.
* **Hybrid Rendering Engine:** Strategically uses:
    * **TCPDF** for coordinate-based, precise layouts and massive datasets.
    * **Dompdf** for converting styled HTML/Blade templates into PDFs.
* **Complex Layouts:** Handling of nested tables, dynamic checkboxes, and custom headers/footers.
* **Bulk Processing:** Optimized for generating large-scale reports (e.g., student lists) with memory efficiency.

---

## 📂 Generated Modules (PDF Portfolio)

Below is the list of modules developed in this system, categorized by their use-case and the underlying library used.

### 🏛️ Official Administrative Notices
*Handles strict formatting and RTL (Urdu/Arabic) text rendering.*

* **`Academic_Notification.pdf`** `(Package: tecnickcom/tcpdf)`
    * *Description:* Official academic warning notice generated in Arabic/Urdu with dynamic student data injection.
* **`Penalty_Notice.pdf`** `(Package: tecnickcom/tcpdf)`
    * *Description:* HR disciplinary action notice featuring precise text alignment for legal compliance.

### 💰 Financial Invoicing System
*Demonstrates versatility between HTML styling and raw text rendering.*

* **`Final_Invoice.pdf`** `(Package: dompdf/dompdf)`
    * *Description:* A modern, CSS-styled commercial invoice generated directly from HTML/Blade views with auto-calculated taxes.
* **`Urdu_Invoice.pdf`** *(File: tcpdf final.pdf)* `(Package: tecnickcom/tcpdf)`
    * *Description:* A specialized invoice supporting local language (Urdu) descriptions alongside English numerals.

### 📊 Operational & Bulk Reporting
*Focuses on data iteration and complex elements.*

* **`Inventory_Report.pdf`** `(Package: tecnickcom/tcpdf)`
    * *Description:* Warehouse inventory status featuring dynamic boolean indicators (Checkboxes ☑) and table formatting.
* **`Student_Report.pdf`** `(Package: tecnickcom/tcpdf)`
    * *Description:* High-volume data list generated via loop iteration, optimized for performance.
* **`Job_Card_Report.pdf`** `(Package: tecnickcom/tcpdf)`
    * *Description:* Manufacturing job sheet with intricate coordinate positioning for print-ready production.

---

## 🛠️ Tech Stack

* **Language:** PHP / Laravel 12
* **Libraries:**
    * [`tecnickcom/tcpdf`](https://github.com/tecnickcom/TCPDF) - For complex, RTL, and coordinate-based PDFs.
    * [`dompdf/dompdf`](https://github.com/dompdf/dompdf) - For HTML-to-PDF styling.
 
**Author:** Abdul Islam
