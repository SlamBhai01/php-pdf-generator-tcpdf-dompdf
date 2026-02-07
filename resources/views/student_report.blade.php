<style>
    table {
        width: 100%;
        border-collapse: collapse;
border: none;
        margin-bottom: 0px;
    }
    th {
        background-color: #f2f2f2;
        font-weight: bold;
        text-align: center;
        /* border: 1px solid #000; */
        font-size: 10pt;
        color: #333;
        border: 0.1mm solid #000;
        font-size: 10pt;
        color: #333;
    }
    td {
        text-align: center;
        padding: 6px;
        font-size: 9pt;
        border: 0.1mm solid #000;
    }
    .text-left {
        text-align: left;
        padding-left: 5px;
    }
    .title {
        text-align: center;
        font-weight: bold;
        font-size: 14pt;
    }
</style>

<table cellpadding="5">
    <thead>
        <tr>
            <th width="10%">Sr. No.</th>
            <th width="25%">Registration ID</th>
            <th width="25%">Roll Number</th>
            <th width="40%">Student Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $index => $emp)
            <tr>
                <td width="10%">{{ $index + 1 }}</td>
                <td width="25%">{{ $emp['registration_id'] ?? '---' }}</td>
                <td width="25%">{{ $emp['roll_number'] ?? '---' }}</td>
                <td class="text-left" width="40%">
                    {{ strtoupper(($emp['first_name']?? '') . ' ' . ($emp['last_name'] ?? '')) }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
