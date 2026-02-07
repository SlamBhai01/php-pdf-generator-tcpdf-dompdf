<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: 'freeserif';
            font-size: 11px;
        }

        .center {
            text-align: center;
        }

        .header-table {
            width: 100%;
            margin-bottom: 20px;
        }

        .main-title {
            font-size: 20px;
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 10px;
        }

        .inventory-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .inventory-table th {
            background-color: #f2f2f2;
            font-weight: bold;
            border: 1px solid #000;
            padding: 8px;
        }

        .inventory-table td {
            border: 1px solid #000;
            padding: 5px;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="center main-title">{{ $lables['lbl_main_title'] }}</div>
    <br><br>
    <table class="header-table">
        <tr>
            <td width="50%" align="left"><strong>{{$lables['lbl_generated_at']}} :</strong> {{ $meta['generated_at'] }}</td>
            <td width="50%" align="right"><strong>{{$lables['lbl_created_by']}} :</strong> {{ $meta['created_by'] }}</td>
        </tr>
    </table>
    <br>
    <table class="inventory-table" cellpadding="5">
        <thead>
            <tr>
                <th class="center" > {{$lables['lbl_Inventory_caption']}}</th>
            </tr>
            <tr>
                <th width="20%">{{$lables['lbl_serial_no']}}</th>
                <th width="50%">{{$lables['lbl_products']}}</th>
                <th width="30%">{{$lables['lbl_quantity']}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $item)
                <tr>
                    <td width="20%">{{ $index + 1 }}</td>
                    <td width="50%">
                        <table>
                            <tr>
                                <td width="50"><img src="{{ public_path($item['image']) }}" width="30" height="30"></td>
                                <td>{{ $item['title'] }}</td>
                            </tr>
                        </table>
                    </td>
                    <td width="30%">{{ $item['quantity'] }} {{ $item['unit'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
