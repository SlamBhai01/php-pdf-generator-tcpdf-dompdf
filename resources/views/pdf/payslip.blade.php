<style>

    * { font-family: 'dejavusans', sans-serif; direction: rtl; color: #000; margin: 0; padding: 0; }


    .header-container {
        position: absolute;
        top: -5mm;
        left: -5mm;
        width: 210mm;
        line-height: 0;
    }
    .main-content {
        width: 100%;
        margin: 0 auto;
        padding: 0 10mm;
    }

    table { width: 100%; border-collapse: collapse; margin-top: 5px;font-size: 13pt; }
    td, th { border: 1px solid #000; padding: 6px; font-size: 13pt; vertical-align: middle; }

    .title-box {
        border: 0.5pt solid #000;
        width: 300px;
        margin: 0 auto 15px auto;
        text-align: center;
        font-weight: bold;
        font-size: 16pt;
        background-color: #fff;
    }

    .bg-gray { background-color: #f2f2f2; font-weight: bold; text-align: center; }
    .text-center { text-align: center; }
    .text-right { text-align: right; padding-right: 8px; }


</style>
<div class="header-container" style="text-align: center;">
    <img src="{{ public_path('images/'.$data['images']['header'])}}" width="200mm"  height= "auto">
</div><br>
<div class="main-content" dir="rtl">

<table align="center" style="margin-bottom: 20px; width: 100%; border: none;">
    <tr>
        <td style="width: 25%; border:none;"></td>
        <td style="width: 50%; background-color: #eeeeee; padding: 5px; " class="title-box">
            <span style="font-weight: bold; font-size: 14pt;">
                &#x202B; {{ $data['titles']['main']['ar'] }} &#x202C;
            </span>

            <span style="font-size: 14pt;"> | </span>

            <span style="font-family: dejavusans; font-weight: bold; font-size: 12pt;">
               {{ $data['titles']['main']['en'] }}
            </span>
        </td>
        <td style="width: 25%; border:none;"></td>
    </tr>
</table>
<br><br><br>
<table align="center" style="width: 100%; border-collapse: collapse; border: 0.5pt solid #000;">
    <tr>
        <td style="width:45%; text-align: right; background-color: #f2f2f2; font-weight: bold;">
            {{ $data['meta_labels']['month'] }}
        </td>
        <td style="width: 55%; text-align: right; direction: ltr;">
            <span>{{ $data['meta_values']['month'] }}</span>
        </td>
    </tr>

    <tr>
        <td style="width:45%; text-align: right; background-color: #f2f2f2; font-weight: bold;">
            {{ $data['meta_labels']['name'] }}
        </td>
        <td style="width: 55%; text-align: right; direction: ltr;">
            <span>{{ $data['meta_values']['name'] }}</span>
        </td>
    </tr>

    <tr>
        <td style="width:45%; text-align: right; background-color: #f2f2f2; font-weight: bold;">
            {{ $data['meta_labels']['id'] }}
        </td>
        <td style="width: 55%; text-align: right; direction: ltr;">
            <span>{{ $data['meta_values']['id'] }}</span>
        </td>
    </tr>

    <tr>
        <td style="width:45%; text-align: right; background-color: #f2f2f2; font-weight: bold;">
            {{ $data['meta_labels']['location'] }}
        </td>
        <td style="width: 55%; text-align: right; direction: ltr;">
            <span>{{ $data['meta_values']['location'] }}</span>
        </td>
    </tr>
</table>
<br>
<div style="border: none; background: none;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border: none; background-color: #ffffff;">
        <tr>
            <td style="text-align: center; border: none; direction: ltr; padding: 10px 0;">
                <span style="font-weight: bold; font-size: 13pt;">
                   {{ $data['titles']['salary_section']['ar'] }}
                </span>
                -
                <span style=" font-size: 13pt;">
                  {{ $data['titles']['salary_section']['en'] }}
                </span>
            </td>
        </tr>
    </table>
</div>

<table align="center">
@foreach($data['salary_details'] as $salary)
    <tr>
        <td style="width:55%;" class="text-right bg-gray">{{ $salary['label'] }}</td>
        <td style="width: 45%;" class="text-right">{{ $salary['value'] }}</td>
    </tr>
@endforeach
<tr class="bg-gray">
    <td style="text-align: right; direction: ltr; padding: 5px; border: 0.5pt solid #000;">
        <span style="font-family: dejavusans; font-weight: bold;">
            {{ $data['total_salary_label']['ar'] }}
        </span>
      -
        <span style="font-size: 13pt;">
            {{ $data['total_salary_label']['en'] }}
        </span>
    </td>
    <td style="text-align: right; font-weight: bold; border: 0.5pt solid #000; background-color:white;">
        {{ $data['total_salary_value'] }}
    </td>
</tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border: 0.5pt solid #000;">
    <tr class="bg-gray" style="background-color: #e9e3e3; font-weight: bold;">
        <td colspan="2" style="width: 55%; text-align: center; border: 0.5pt solid #000; padding: 5px;">
            {{ $data['addition_header'] }}
        </td>
        <td colspan="2" style="width: 45%; text-align: center; border: 0.5pt solid #000; padding: 5px;">
           {{ $data['deduction_header'] }}
        </td>
    </tr>

@for($i = 0; $i < max(count($data['additions']), count($data['deductions'])); $i++)
<tr>
    <td style="width: 35%; text-align: right; padding: 5px; background-color: #E2EFDA; border: 0.5pt solid #000; border-right: 0.5pt solid #000;">
        {{ $data['additions'][$i]['label'] ?? '' }}
    </td>
    <td style="width: 15%; text-align: center; padding: 5px; background-color: #fcfcfc; border: 0.5pt solid #000; border-left: 0.5pt solid #000;">
        {{ $data['additions'][$i]['value'] ?? '' }}
    </td>
    <td style="background-color: #FDEBD0; width: 43%; text-align: right; font-size:12pt; border: 0.5pt solid #000;">
        {{ $data['deductions'][$i]['label'] ?? '' }}
    </td>
    <td style="width: 7%; text-align: center; border: 0.5pt solid #000;">
        {{ $data['deductions'][$i]['value'] ?? '' }}
    </td>
</tr>
@endfor

<tr style="background-color: #eeeeee; font-weight: bold;">
    <td colspan="2" style="text-align: right; border-top: 2.5px solid #000; padding: 8px; direction: ltr;">
        <span>{{ $data['net_salary_label'] }}</span>
    </td>
    <td colspan="2" style="text-align: center; padding: 8px; ">
        {{ $data['net_salary_value'] }}
    </td>
</tr>
</table>
<br><br>
<div class="text-center" style="margin-top: 15px; font-size: 9.5pt;">
    <strong>{{ $data['footer_disclaimer']['arabic'] }}</strong><br>
    {{ $data['footer_disclaimer']['english'] }}
</div><br>
<br>
<table border="0" cellspacing="0" cellpadding="0" align="center" style="width: 100%; border: none; border-collapse: collapse; margin-top: 20px;">
    <tr>
        <td style="width: 45%; text-align: center; vertical-align: bottom; border: none;">
            <img src="{{ public_path('images/'.$data['images']['stamp']) }}" width="130" style="border: none;">
        </td>
        <td style="width: 55%; text-align: center; vertical-align: top; border: none;">
            <div style="font-weight: bold; margin-bottom: 5px; font-size: 10pt; font-family: dejavusans;">
             {{ $data['titles']['hr_manager_title'] }}
            </div>
            <br>
            <img src="{{ public_path('images/'.$data['images']['signature']) }}" width="150" style="border: none;">
        </td>
    </tr>
</table>
</div>


<div class="header-container" style="text-align: center;">
     <img src="{{ public_path('images/footer_strip.png') }}" width="200mm" height="auto" style="border: none;">
</div>
