<!DOCTYPE html>
<html lang="ur">

<head>
    <meta charset="utf-8">
    <style>
        body {
            font-size: 10px;
            line-height: 1.4;
            color: #000;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .bold {
            font-weight: bold;
        }
        .full-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 5px;
            margin-bottom: 8px;
        }

        .underlined {
            text-decoration: underline
        }
        .section-header {
            border-top: 1px dashed #000;
            border-bottom: 1px dashed #000;
        }
        .urdu-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .urdu-table th,
        .urdu-table td {
            border: 1px solid #000;
            padding: 4px;
            text-align: center;
        }
        .rtl {
            direction: rtl;
        }
        .checkbox-table {
            width: 100%;
            border-spacing: 5px;
            border-collapse: separate;
            margin-bottom: 10px;
        }

        .box {
            border: 1px solid #000;
            text-align: center;
            background-color: #f9f9f9;
            font-size: 9pt;
        }

        .selected {
            background-color: #d1d1d1;
            font-weight: bold;
        }
         .form-container { direction: rtl; padding: 50px; }
    .box-sm { border: 1px solid #000; padding: 2px 8px; margin-left: 10px; display: inline-block;font-size: 11px;  }
    .selected-box { background-color: #d1d1d1; font-weight: bold; }
    .line-field { border-bottom: 1px solid #000; min-width: 100px; display: inline-block; text-align: center; }
    .dashed-line { border-top: 1px dashed #000; margin: 20px 0; }
    .die-table { width: 100%; border-collapse: collapse; margin-top: 5px; }
    .die-table th, .die-table td { border: 1px solid #000; text-align: center; padding: 5px; }
    .form-container { direction: rtl;  font-family: freeserif; }
    .section-title { text-align: center; font-weight: bold; font-size: 16px; border-bottom: 2px solid #000; margin: 10px 0; background-color: #f9f9f9; padding: 5px; }
    table { width: 100%; border-collapse: collapse; margin-bottom: 10px; }
    .dispatch-table td, .dispatch-table th { border: 1px solid #000; text-align: center; padding: 6px; font-size: 10px; }
    .store-table { width: 100%; border-collapse: collapse; margin-top: 10px; }
    .store-table td { border: 1px solid #000; height: 25px; text-align: center; font-size: 11px; }
    .inst-row { margin-bottom: 15px; border-bottom: 1px solid #000; padding-bottom: 5px; }
    .inst-label { font-weight: bold; width: 150px; display: inline-block; }

    </style>
</head>

<body>

    <table cellspacing="0" cellpadding="0" border="0" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td class="text-center bold" style=" font-size: 20px; text-decoration: underline;">{{ $labels['main_title'] }}</td>
        </tr>
        <tr>
            <td class="text-right" >{{ $labels['doc_info_label'] }}{{ $data['header']['document_no'] }} | {{ $labels['date_eff_label'] }}{{ $data['header']['effective_date'] }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td class="text-center bold" style="font-size: 18pt;  text-decoration: underline;">{{ $labels['company_name_full'] }}</td>
        </tr>
    </table>

    <table class="full-table">
        <tr>
            <td width="40%">{{ $labels['lbl_company_name'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp; <span class="underlined"
                    style="width: 250px; ">{{ $data['job_info']['company_name'] }}</span></td>
            <td width="30%" class="text-center">{{ $labels['lbl_job_card_no'] }}:&nbsp;&nbsp;&nbsp;&nbsp; <span
                    class="underlined"
                    style="width: 100px;">{{ $data['job_info']['job_card_no'] }}</span></td>
            <td width="30%" class="text-right">{{ $labels['lbl_date'] }}:&nbsp;&nbsp;&nbsp;&nbsp; <span class="underlined"
                    style="width: 80px;">{{ $data['job_info']['date'] }}</span></td>
        </tr>
        <tr>
            <td width="70%">{{ $labels['lbl_job_name'] }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="underlined" style="width: 380px;" >{{ $data['job_info']['job_name'] }}</span></td>
            <td width="30%" class="text-right">{{ $labels['lbl_po_no'] }} <span class="underlined" style="width: 120px;">{{ $data['job_info']['po_no'] }}</span></td>
        </tr>
    </table>
    <table class="checkbox-table " cellspacing="5">
        <tr>
            @foreach ($labels['lbl_design_options'] as $option)
                <td class="box {{ $data['design_specs']['selected_design'] == $option ? 'selected' : '' }}">{{ $option }}@if ($data['design_specs']['selected_design'] == $option)
                    @endif
                </td>
            @endforeach
        </tr>
    </table>
    <table class="full-table " cellspacing="5">
        <tr>
            <td width="30%"><span style="font-size:12px;">{{ $labels['lbl_no_of_color'] }}</span> :
&nbsp;&nbsp;&nbsp;&nbsp;
<span class="underlined" style=" font-size: 12px; display: inline-block;">{{ $data['design_specs']['no_of_colors'] }}</span></td>
            <td width="70%">
                <table class="checkbox-table">
                    <tr>
                        @foreach ($labels['lbl_process_options'] as $proc)
                            <td class="box {{ in_array($proc, $data['design_specs']['selected_processes']) ? 'selected' : '' }}"
                                style="width: 25.5%;">{{ $proc }}
                            </td>
                        @endforeach
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="full-table">
        <tr>
            <td>{{ $labels['lbl_new_ctp'] }} &nbsp;&nbsp;&nbsp; <span class="underlined" style="width: 130px;">{{ $data['design_specs']['new_ctp_required'] }}</span>
            </td>
            <td class="text-center">{{ $labels['lbl_old_ctp'] }} &nbsp;&nbsp;&nbsp; <span class="underlined" style="width: 130px; ">{{ $data['design_specs']['old_ctp_existing'] }}</span>
            </td>
            <td class="text-right">{{ $labels['lbl_remarks'] }} &nbsp;&nbsp;&nbsp;&nbsp;<span class="underlined" style="width: 150px;">{{ $data['design_specs']['remarks'] }}</span></td>
        </tr>
        <tr>
            <td>{{ $labels['lbl_order_qty'] }} &nbsp;&nbsp;&nbsp; <span
                   class="underlined" style="width: 130px;">{{ $data['order_details']['order_qty'] }}</span>
            </td>
            <td class="text-center">{{ $labels['lbl_order_received_date'] }} &nbsp;&nbsp;&nbsp; <span class="underlined"
                    style="width: 130px;">{{ $data['order_details']['order_received_date'] }}</span>
            </td>
            <td class="text-right">{{ $labels['lbl_order_deliver_date'] }} &nbsp;&nbsp;&nbsp;&nbsp;<span
                    class="underlined"
                    style="width: 150px; ">{{ $data['order_details']['order_deliver_date'] }}</span>
            </td>
        </tr>
    </table>

    <div class="section-header" style="border-top: none;"></div>
    <table class="full-table" cellpadding="2">
        <tr>
            <td>{{ $labels['lbl_lot_no'] }} <span class="underlined"
                    style="width: 20px; line-height:20px;">{{ $data['store_paper_instructions']['lot_no'] }}</span>
            </td>
            <td style="width: 200px;"><span class="underlined bold"
                    style=" font-size:14px;">{{ $labels['section_store_instruction'] }}</span>
            </td>
            <td class="text-right " style=" line-height:20px;">{{ $labels['lbl_date'] }}&nbsp;&nbsp; <span
                    class="underlined ">{{ $data['store_paper_instructions']['date'] }}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
        </tr>
        <tr>
            <td>{{ $labels['lbl_paper_board_name'] }} &nbsp;&nbsp;&nbsp;<span class="underlined" style="width: 50%;"> {{ $data['store_paper_instructions']['paper_board_name'] }}</span></td>
            <td class="text-center">{{ $labels['lbl_paper_board_size'] }} &nbsp;&nbsp; <span class="underlined"
                    style="width: 30%;">{{ $data['store_paper_instructions']['paper_board_size'] }}
                </span></td>
            <td class="text-right">{{ $labels['lbl_grm'] }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="underlined"
                    style="width: 20%;">{{ $data['store_paper_instructions']['grm'] }}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
        </tr>
        <tr>
            <td>{{ $labels['lbl_total_packets'] }} &nbsp;&nbsp;&nbsp; <span
                   class="underlined" style="width: 50%;">
                    {{ $data['store_paper_instructions']['total_packets'] }}</span></td>
            <td class="text-center">{{ $labels['lbl_required_size'] }} &nbsp;&nbsp; <span class="underlined"
                    style="width: 30%; ">{{ $data['store_paper_instructions']['required_size'] }}
                </span></td>
            <td class="text-right">{{ $labels['lbl_total_sheets'] }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                    class="underlined"
                    style="width: 20%;">{{ $data['store_paper_instructions']['total_sheets'] }}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
        </tr>
        <tr>
            <td>{{ $labels['lbl_total_ups'] }} &nbsp;&nbsp;&nbsp; <span class="underlined" style="width: 50%;">
                    {{ $data['store_paper_instructions']['total_ups'] }}</span></td>
            <td class="text-center">{{ $labels['lbl_qty'] }} &nbsp;&nbsp; <span class="underlined"
                    style="width: 30%; ">{{ $data['store_paper_instructions']['qty'] }}
                </span></td>
            <td class="text-right">{{ $labels['lbl_wastage_allowed'] }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                    class="underlined"
                    style="width: 20%; ">{{ $data['store_paper_instructions']['wastage_allowed'] }}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
        </tr>
        <tr>
            <td>{{ $labels['lbl_machine_man'] }} &nbsp;&nbsp;&nbsp; <span
                  class="underlined"  style="width: 50%;">
                    {{ $data['store_paper_instructions']['machine_man'] }}</span></td>
            <td class="text-center">{{ $labels['lbl_store_incharge'] }} &nbsp;&nbsp; <span class="underlined"
                    style="width: 30%; ">{{ $data['store_paper_instructions']['store_incharge'] }}
                </span></td>
            <td class="text-right">{{ $labels['lbl_production_manager'] }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                    class="underlined"
                    style="width: 20%; ">{{ $data['store_paper_instructions']['production_manager'] }}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
        </tr>

    </table>
    <div class="section-header" style="border-bottom: none;"></div>

    <table width="100%" class=" rtl" cellpadding="0" cellspacing="0" style="margin: 0; padding: 0; border: none;">
        <tr>
            <td width="40%" style="font-size: 10px; ">{{ $labels['lbl_urdu_date'] }}: <span class="underlined"
                    style="width: 100px;">{{ $data['printing_department']['date_urdu'] }}</span></td>
            <td width="60%" class="bold" style="font-size: 16px;  line-height: 0px; padding: 5px 0;">
                {{ $labels['urdu_section_title'] }}</td>
        </tr>
    </table>
    <br>
    <table width="100%" class="rtl">
        <tr>
            <td width="30%" style="line-height: 17px;">{{ $labels['lbl_urdu_incharge_sign'] }}: <span
                    class="underlined"
                    style="width: 100px;">{{ $data['printing_department']['incharge_signature'] }}</span></td>
            <td width="70%" style="text-align: right;">
                <span
                    class=" {{ $data['printing_department']['has_previous_job_items'] == 'نہیں' ? 'selected' : '' }}"
                    style="border: 1px solid #000; padding: 2px 5px;">
                    {{ $labels['lbl_urdu_no'] }}
                </span>
                <span class=" {{ $data['printing_department']['has_previous_job_items'] == 'ہاں' ? 'selected' : '' }}"
                    style=" border: 1px solid #000; padding: 2px 5px;">
                    {{ $labels['lbl_urdu_yes'] }}
                </span>
                <span class="rtl" style=" display: inline-block;">{{ $labels['lbl_urdu_note'] }}</span>
                <span class="bold rtl"
                    style="display: inline-block; font-size:16px; text-align:right;">{{ $labels['lbl_urdu_title'] }}:</span>
            </td>
        </tr>
        <tr class="rtl" style="line-height:18px;" >
            <td width="30%" >{{ $labels['lbl_urdu_feeder_man'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="underlined" >{{ $data['printing_department']['feeder_man'] }}</span></td>
            <td width="30%" class="text-center"><span class="underlined">{{ $data['printing_department']['machine_man_urdu'] }}</span>{{ $labels['lbl_urdu_machine_man'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="40%" class="text-right"><span  class="underlined">{{ $data['printing_department']['machine_no'] }}</span>{{ $labels['lbl_urdu_machine'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

        </tr>
    </table>
    <table class="urdu-table">
        <thead>
            <tr style="background-color: #f2f2f2;">
                @foreach ($labels['lbl_urdu_table_cols'] as $index => $col)
                    @php
                        $w = $index == 5 ? '50%' : '10%';
                        $align = $index == 5 ? 'right' : 'center';
                    @endphp
                    <th width="{{ $w }}"
                      class="rtl bold"  style="text-align: {{ $align }}; border: 0.5pt solid #000; padding-right: 5px;">
                        {{ $col }}@if ($index == 5)
                            :-
                        @endif
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($data['printing_department']['production_rows'] as $row)
                <tr class="rtl">
                    <td width="10%">{{ $row['qty'] }}</td>
                    <td class="bold" width="10%">{{ $row['color'] }}</td>
                    <td width="10%">{{ $row['waste'] }}</td>
                    <td width="10%">{{ $row['old_plate'] }}</td>
                    <td width="10%">{{ $row['new_plate'] }}</td>
                    <td width="50%" style="text-align: right; direction: rtl; padding-right: 5px;">
                        {{ $row['production'] }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="6" style="text-align: right; direction: rtl; padding-right: 10px;">
                    {{ $labels['lbl_urdu_waste_reason'] }}:
                </td>
            </tr>
        </tbody>
    </table>
<div style="page-break-before: always;"></div>
{{-- page 2 --}}
<div class="form-container">
    <table width="100%" class=" rtl" cellpadding="0" cellspacing="0" style="margin: 0; padding: 0; border: none;">
        <tr>
            <td width="40%" style="font-size: 10px; ">{{ $labels['lbl_urdu_date'] }}: <span class="underlined"
                    style="width: 100px;">{{ $data['production_forms']['varnish']['date'] }}</span></td>
            <td width="60%" class="bold underlined" style="font-size: 16px;  line-height: 30px;">{{ $labels['lbl_varnish'] }}</td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td width="30%">{{ $labels['lbl_urdu_incharge_sign'] }}: <span class="line-field">__________</span></td>
            <td width="70%" align="right">
                <span class="box-sm {{ ($data['production_forms']['varnish']['prev_job'] ?? '') == 'نہیں' ? 'selected-box' : '' }}">{{ $labels['lbl_urdu_no'] }}</span>
                <span class="box-sm {{ ($data['production_forms']['varnish']['prev_job'] ?? '') == 'ہاں' ? 'selected-box' : '' }}">{{ $labels['lbl_urdu_yes'] }}</span>
                {{ $labels['lbl_urdu_note'] }} <strong>نوٹ:</strong>
            </td>
        </tr>
    </table>
    <table class="rtl" width="100%" style="margin-top:5px;">
          <tr class="rtl" style="line-height:18px;" >
            <td width="30%" ><span  class="underlined">{{ $data['production_forms']['varnish']['f_man'] }}</span>{{ $labels['lbl_urdu_feeder_man'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="30%" class="text-center"><span class="underlined">{{ $data['production_forms']['varnish']['m_man'] }}</span>{{ $labels['lbl_urdu_machine_man'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="40%" class="text-right"><span class="underlined" >{{ $data['production_forms']['varnish']['machine'] }}</span>{{ $labels['lbl_urdu_machine'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

        </tr>
          <tr class="rtl" style="line-height:18px;" >
            <td width="100%" class="text-right"><span class="underlined" >{{ $data['production_forms']['varnish']['v_type'] ?? '' }}</span>{{ $labels['lbl_varnish'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr class="rtl" style="line-height:18px;" >
            <td width="100%" class="text-right"><span class="underlined" >{{ $data['production_forms']['varnish']['folder'] ?? '' }}</span>{{ $labels['lbl_folder'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
  <tr class="rtl" style="line-height:18px;" >
            <td width="30%" ><span  class="underlined">{{ $data['production_forms']['varnish']['matte'] ?? '' }}</span>{{ $labels['lbl_matte'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="30%" class="text-center"><span class="underlined">{{ $data['production_forms']['varnish']['shine'] ?? '' }}</span>{{ $labels['lbl_shine'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="40%" class="text-right"><span class="underlined" >{{ $data['production_forms']['varnish']['lam_size'] ?? '' }}</span>{{ $labels['lbl_lam_roll_size'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

        </tr>
        <tr class="rtl" style="line-height:18px;" >
            <td width="30%" ><span  class="underlined">{{ $data['production_forms']['varnish']['waste'] ?? '' }}</span>{{ $labels['lbl_waste'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="30%" class="text-center"><span class="underlined">{{ $data['production_forms']['varnish']['prod'] ?? '' }}</span>{{ $labels['lbl_production'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="40%" class="text-right"><span class="underlined" >{{ $data['production_forms']['varnish']['glue'] ?? '' }}</span>{{ $labels['lbl_glue'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

        </tr>
    </table>
    <div class="dashed-line"></div>
    {{-- //-- Corrugation Section -- --}}
    <table width="100%" class=" rtl" cellpadding="0" cellspacing="0" style="margin: 0; padding: 0; border: none;">
        <tr>
            <td width="40%" style="font-size: 10px; ">{{ $labels['lbl_urdu_date'] }}: <span class="underlined"
                    style="width: 100px;">{{ $data['production_forms']['varnish']['date'] }}</span></td>
            <td width="60%" class="bold underlined" style="font-size: 16px;line-height: 40px;">{{ $labels['sec_corrugation'] }}</td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td width="30%">{{ $labels['lbl_urdu_incharge_sign'] }}: <span class="line-field">__________</span></td>
            <td width="70%" align="right">
                <span class="box-sm {{ ($data['production_forms']['varnish']['prev_job'] ?? '') == 'نہیں' ? 'selected-box' : '' }}">{{ $labels['lbl_urdu_no'] }}</span>
                <span class="box-sm {{ ($data['production_forms']['varnish']['prev_job'] ?? '') == 'ہاں' ? 'selected-box' : '' }}">{{ $labels['lbl_urdu_yes'] }}</span>
                {{ $labels['lbl_urdu_note'] }} <strong>نوٹ:</strong>
            </td>
        </tr>
    </table>
    <table class="rtl" width="100%" style="margin-top:5px;">
          <tr class="rtl" style="line-height:18px;" >
            <td width="40%" class="text-center"><span class="underlined">{{ $data['production_forms']['corrugation']['helpers'] }}</span>{{ $labels['lbl_helpers'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="60%" class="text-right"><span class="underlined" >{{ $data['production_forms']['corrugation']['m_man'] }}</span>{{ $labels['lbl_urdu_machine'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

        </tr>
  <tr class="rtl" style="line-height:18px;" >
            <td width="30%" ><span  class="underlined">{{ $data['production_forms']['varnish']['matte'] ?? '' }}</span>{{ $labels['lbl_matte'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="30%" class="text-center"><span class="underlined">{{ $data['production_forms']['varnish']['shine'] ?? '' }}</span>{{ $labels['lbl_shine'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="40%" class="text-right"><span class="underlined" >{{ $data['production_forms']['varnish']['lam_size'] ?? '' }}</span>{{ $labels['lbl_lam_roll_size'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

        </tr>
        <tr class="rtl" style="line-height:18px;" >
            <td width="30%" ><span  class="underlined">{{ $data['production_forms']['corrugation']['cut_size'] ?? '' }}</span>{{ $labels['lbl_cutting_size'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="30%" class="text-center"><span class="underlined">{{ $data['production_forms']['corrugation']['roll_qty'] ?? '' }}</span>{{ $labels['lbl_roll_qty'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="40%" class="text-right"><span class="underlined" >{{ $data['production_forms']['corrugation']['roll_size'] ?? '' }}</span>{{ $labels['lbl_roll_size'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

        </tr>
        <tr class="rtl" style="line-height:18px;" >
            <td width="100%" class="text-right"><span class="underlined" >{{ $data['production_forms']['corrugation']['prod'] ?? '' }}</span>{{ $labels['lbl_production'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
         <tr class="rtl" style="line-height:18px;" >
            <td width="100%" class="text-right"><span class="underlined" >{{ $data['production_forms']['corrugation']['waste'] ?? '' }}</span>{{ $labels['lbl_waste'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
           <tr class="rtl" style="line-height:18px;" >
            <td width="50%" class="text-center"><span class="underlined" >{{ $data['production_forms']['corrugation']['chem'] ?? '' }}</span>{{ $labels['lbl_chemical'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="50%" class="text-right"><span class="underlined" >{{ $data['production_forms']['corrugation']['gum'] ?? '' }}</span>{{ $labels['lbl_kora_gum'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>

    </table>
    <div class="dashed-line"></div>
    <table width="100%" class=" rtl" cellpadding="0" cellspacing="0" style="margin: 0; padding: 0; border: none;">
        <tr>
            <td width="40%" style="font-size: 10px; ">{{ $labels['lbl_urdu_date'] }}: <span class="underlined"
                    style="width: 100px;">{{ $data['production_forms']['varnish']['date'] }}</span></td>
            <td width="60%" class="bold underlined" style="font-size: 16px;  line-height: 40px; padding: 5px 0;">{{ $labels['lbl_sec_die'] }}</td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td width="30%">{{ $labels['lbl_urdu_incharge_sign'] }}: <span class="line-field">__________</span></td>
            <td width="70%" align="right">
                <span class="box-sm {{ ($data['production_forms']['varnish']['prev_job'] ?? '') == 'نہیں' ? 'selected-box' : '' }}">{{ $labels['lbl_urdu_no'] }}</span>
                <span class="box-sm {{ ($data['production_forms']['varnish']['prev_job'] ?? '') == 'ہاں' ? 'selected-box' : '' }}">{{ $labels['lbl_urdu_yes'] }}</span>
                {{ $labels['lbl_urdu_note'] }} <strong>نوٹ:</strong>
            </td>
        </tr>
        <tr class="rtl" style="line-height:18px;" >
            <td width="30%" ><span  class="underlined">{{ $data['production_forms']['die']['helpers'] }}</span>{{ $labels['lbl_helpers'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="30%" class="text-center"><span class="underlined">{{ $data['production_forms']['die']['m_man'] }}</span>{{ $labels['lbl_urdu_machine_man'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="40%" class="text-right"><span class="underlined" >{{ $data['production_forms']['die']['machine'] }}</span>{{ $labels['lbl_urdu_machine'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

        </tr>
    </table>
    <table class="die-table">
        <tr>
            @foreach($labels['lbl_die_table'] as $col)
                <th>{{ $col }}</th>
            @endforeach
        </tr>
        <tr>
            @foreach($labels['lbl_die_table'] as $col)
                <td height="25"></td>
            @endforeach
        </tr>
    </table>
    <div style="margin-top: 5px; text-align: right;">
        <span class="box-sm {{ ($data['production_forms']['die']['die_condition'] ?? '') == 'نہیں' ? 'selected-box' : '' }}">{{ $labels['lbl_urdu_no'] }}</span>
        <span class="box-sm {{ ($data['production_forms']['die']['die_condition'] ?? '') == 'ہاں' ? 'selected-box' : '' }}">{{ $labels['lbl_urdu_yes'] }}</span>
        {{ $labels['lbl_die_note_2'] }} <strong>نوٹ:</strong>
    </div>
    <div class="dashed-line"></div>
<table width="100%" class=" rtl" cellpadding="0" cellspacing="0" style="margin: 0; padding: 0; border: none;">
        <tr>
            <td width="40%" style="font-size: 10px; ">{{ $labels['lbl_urdu_date'] }}: <span class="underlined"
                    style="width: 100px;">{{ $data['production_forms']['pasting']['date'] }}</span></td>
            <td width="60%" class="bold underlined" style="font-size: 16px;  line-height: 40px; padding: 5px 0;">{{ $labels['lbl_sec_pasting'] }}</td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td width="30%">{{ $labels['lbl_urdu_incharge_sign'] }}: <span class="line-field">__________</span></td>
            <td width="70%" align="right">
                <span class="box-sm {{ ($data['production_forms']['pasting']['prev_job'] ?? '') == 'نہیں' ? 'selected-box' : '' }}">{{ $labels['lbl_urdu_no'] }}</span>
                <span class="box-sm {{ ($data['production_forms']['pasting']['prev_job'] ?? '') == 'ہاں' ? 'selected-box' : '' }}">{{ $labels['lbl_urdu_yes'] }}</span>
                {{ $labels['lbl_urdu_note'] }} <strong>نوٹ:</strong>
            </td>
        </tr>
    </table>
    <table class="rtl" width="100%" style="margin-top:5px;">
          <tr class="rtl" style="line-height:18px;" >
            <td width="100%" class="text-right"><span class="underlined" >{{ $data['production_forms']['pasting']['machine'] }}</span>{{ $labels['lbl_urdu_machine'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

        </tr>
  <tr class="rtl" style="line-height:18px;" >
            <td width="30%" ><span  class="underlined">{{ $data['production_forms']['pasting']['worker'] ?? '' }}</span>{{ $labels['lbl_pasting_workers'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="30%" class="text-center"><span class="underlined">{{ $data['production_forms']['pasting']['helpers'] }}</span>{{ $labels['lbl_helpers'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="40%" class="text-right"><span class="underlined" >{{ $data['production_forms']['pasting']['m_man'] ?? '' }}</span>{{ $labels['lbl_lam_roll_size'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

        </tr>
         <tr class="rtl" style="line-height:18px;" >
            <td width="100%" class="text-right"><span class="underlined" >{{ $data['production_forms']['pasting']['prod'] }}</span>{{ $labels['lbl_production'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

        </tr>
        <tr class="rtl" style="line-height:18px;" >
            <td width="50%" class="text-right"><span class="underlined" >{{ $data['production_forms']['pasting']['prod'] ?? '' }}</span>{{ $labels['lbl_waste'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="50%" class="text-right"><span class="underlined" >{{ $data['production_forms']['pasting']['waste'] ?? '' }}</span>{{ $labels['lbl_gum_usage'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
    </table>


</div>
<div style="page-break-before: always;"></div>
{{-- page 3 --}}


<div class="form-container">

    <table width="100%" class=" rtl" cellpadding="0" cellspacing="0" style="margin: 0; padding: 0; border: none;">
        <tr>
            <td width="40%" style="font-size: 10px; ">{{ $labels['lbl_urdu_date'] }}: <span class="underlined"
                    style="width: 100px;">{{ $data['sorting_packing']['date']}}</span></td>
            <td width="60%" class="bold underlined" style="font-size: 16px;line-height: 40px;">{{ $labels['lbl_sec_sorting'] }}</td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td width="30%">{{ $labels['lbl_urdu_incharge_sign'] }}: <span class="line-field">__________</span></td>
            <td width="70%" align="right">
                <span class="box-sm {{ ($data['sorting_packing']['prev_job'] ?? '') == 'نہیں' ? 'selected-box' : '' }}">{{ $labels['lbl_urdu_no'] }}</span>
                <span class="box-sm {{ ($data['sorting_packing']['prev_job'] ?? '') == 'ہاں' ? 'selected-box' : '' }}">{{ $labels['lbl_urdu_yes'] }}</span>
                {{ $labels['lbl_urdu_note'] }} <strong>نوٹ:</strong>
            </td>
        </tr>
    </table>
    <table class="rtl" width="100%" style="margin-top:5px;">
          <tr class="rtl" style="line-height:18px;" >
            <td width="40%" class="text-center"><span class="underlined">{{ $data['sorting_packing']['helpers_count'] ?? '' }}</span>{{ $labels['lbl_helpers'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="60%" class="text-right"><span class="underlined" >{{ $data['sorting_packing']['incharge_name'] ?? '' }}</span>{{ $labels['lbl_incharge'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

        </tr>
         <tr class="rtl" style="line-height:18px;" >
            <td width="100%" class="text-right"><span class="underlined" >{{ $data['sorting_packing']['remarks_text'] ?? '' }}</span>{{ $labels['lbl_remarks_urdu'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
           <tr class="rtl" style="line-height:18px;" >
            <td width="50%" class="text-center"><span class="underlined" >{{ $data['sorting_packing']['waste_reason_text'] ?? '' }}</span>{{ $labels['lbl_waste_reason'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="50%" class="text-right"><span class="underlined" >{{ $data['sorting_packing']['waste_qty'] ?? '' }}</span>{{ $labels['lbl_waste'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>

    </table>
    <div class="dashed-line"></div>

    <div style="text-align:center; font-weight:bold; font-size:15pt; margin-bottom:10px;">
        <span style="border: 2px solid #000; padding: 0 20px;">{{ $labels['lbl_special_qc'] }}</span>
    </div>

    <table cellpadding="5">
        @foreach($labels['lbl_qc_questions'] as $index => $question)
        @php $qKey = 'q' . ($index + 1); @endphp
        <tr>
            <td width="30%" align="right">
                <span class="box-sm {{ ($data['qc_checks'][$qKey] ?? '') == 'نہیں' ? 'selected-box' : '' }}">{{ $labels['lbl_urdu_no'] }}</span>
                <span class="box-sm {{ ($data['qc_checks'][$qKey] ?? '') == 'ہاں' ? 'selected-box' : '' }}">{{ $labels['lbl_urdu_yes'] }}</span>
            </td>
            <td width="50%" align="right" style="font-size:12px;">{{ $question }}</td>
<td width="20%" align="right"></td>
        </tr>
        @endforeach
    </table>

    <table width="100%" style="margin-top:25px; text-align:center; font-size:10px; direction: ltr;">
        <tr>
            <td>{{ $labels['lbl_sig_prod_mgr'] }}<br>____________________</td>
            <td align="center">{{ $labels['lbl_sig_qc_mgr'] }}<br>____________________</td>
            <td align="right">{{ $labels['lbl_sig_dispatch_off'] }}<br>____________________</td>
        </tr>
    </table>

    <div class="dashed-line"></div>

    <div style="text-align:center; font-weight:bold; font-size:14pt; margin-bottom:10px;">{{ $labels['lbl_dispatch_detail'] }}</div>
    <table class="dispatch-table">
        <tr style="background-color:#eee;">
            @foreach($labels['lbl_dispatch_table'] as $col)
                <th>{{ $col }}</th>
            @endforeach
        </tr>
        @for($i=0; $i<4; $i++)
        @php $row = $data['dispatch_rows'][$i] ?? null; @endphp
        <tr>
            <td>{{ $row['sr'] ?? ($i + 1) }}</td>
            <td>{{ $row['date'] ?? '' }}</td>
            <td>{{ $row['order'] ?? '' }}</td>
            <td>{{ $row['dispatch'] ?? '' }}</td>
            <td>{{ $row['balance'] ?? '' }}</td>
            <td>{{ $row['dc'] ?? '' }}</td>
            <td>{{ $row['po'] ?? '' }}</td>
            <td>{{ $row['dispatcher'] ?? '' }}</td>
        </tr>
        @endfor
         <tr>
                <td colspan="8" style="  padding-right: 10px;" align="left">
                    {{ $labels['lbl_remarks_en'] }}
                </td>
            </tr>
    </table>
</div>
{{-- //page 4 --}}

<div style="page-break-before: always;"></div>

<div class="form-container" dir="rtl">

    <div style="text-align:center; font-weight:bold; font-size:18pt; margin-bottom:20px;">
        {{ $labels['lbl_special_inst'] }}
    </div>

     <table class="rtl" width="100%" style="margin-top:5px;">
         <tr class="rtl" style="line-height:18px;" >
            <td width="100%" class="text-right"><span class="underlined" >{{ $data['special_instructions']['designing'] ?? '' }}</span>{{ $labels['lbl_designing'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
          <tr class="rtl" style="line-height:18px;" >
            <td width="100%" class="text-right"><span class="underlined" >{{ $data['special_instructions']['printing'] ?? '' }}</span>{{ $labels['lbl_printing'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
          <tr class="rtl" style="line-height:18px;" >
            <td width="100%" class="text-right"><span class="underlined" >{{ $data['special_instructions']['die_cutting'] ?? '' }}</span>{{ $labels['lbl_die_cutting'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
          <tr class="rtl" style="line-height:18px;" >
            <td width="100%" class="text-right"><span class="underlined" >{{ $data['special_instructions']['packing'] ?? '' }}</span>{{ $labels['lbl_packing'] }}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
          <tr class="rtl" style="line-height:18px;" >
            <td width="100%" class="text-right"><span class="underlined" >{{ $data['special_instructions']['dispatch'] ?? '' }}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:{{ $labels['lbl_dispatch'] }}</td>
        </tr>
    </table>

    <div class="dashed-line"></div>

  <div style="text-align: center; text-decoration: underline; font-weight: bold; font-size: 16pt; margin-bottom: 10px;">{{ $labels['lbl_for_store'] }}</div>
    <table class="store-table">
        @for($i = 0; $i < 9; $i++)
        <tr>
            <td width="45%">{{ $data['store_data'][$i+9]['val'] ?? '' }}</td>
            <td width="5%" style="background-color: #f2f2f2; font-weight: bold;">{{ $i + 10 }}</td>
            <td width="45%">{{ $data['store_data'][$i]['val'] ?? '' }}</td>
            <td width="5%" style="background-color: #f2f2f2; font-weight: bold;">{{ $i + 1 }}</td>
        </tr>
        @endfor
    </table>

</div>

</body>

</html>

