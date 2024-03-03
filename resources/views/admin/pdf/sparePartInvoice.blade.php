<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sparepart Invoice PDF</title>
    <style>
        table.styletable {
            border-collapse: collapse;
            width: 100%;
        }
        table.styletable, table.styletable td, table.styletable th {
            border: 1px solid;
        }
    </style>
</head>
<body>
    <table id="header_table">
        <tr>
            <td width="60%">
                <h2 style="">
                    MEC Embroidery Center
                </h2>
            </td>
            <td width="30%" style="text-align:right;">
                <h4 style="">
                    {{  trans('cruds.sparePartInvoice.fields.invoice_no') }}  :
                </h4>
            </td>
            <td width="30%" style="text-align:left;">
                <h4 style="">
                    {{ $sparePartInvoice->invoice_no }}
                </h4>
            </td>

        </tr>
        {{-- address --}}
        <tr>
            <td>
                <p style="">
                    No. 8/1/14, Kong Baung Lane-2
                </p>
                <p style="">
                    Kong Baung Street, Industrial Zone-7
                </p>
                <p style="">
                    Hlaing Tharyar T/S, Yangon, Myanmar
                </p>
                <p style="">
                    Tel: 09 5502754, 09 425502754
                </p>
            </td>
            <td width="30%" style="text-align:right;">
                <h4 style="">
                    {{
                        trans('cruds.sparePartInvoice.fields.branch') }}    :
                </h4>
            </td>
            <td width="30%" style="text-align:left;">
                <h4 style="">
                    <span >{{ $sparePartInvoice->branch->name }}</span>
                </h4>
            </td>

        </tr>

    </table>

    <hr style="margin-top:50px;">

    <table id="header_table">
        <tr>
            <td style=" width:30%;">
                <p style="">
                    {{ trans('cruds.sparePartInvoice.fields.to') }}
                </p>
            </td>
            <td style="text-align:right;">
                <p style="">
                    {{ trans('cruds.sparePartInvoice.fields.date') }}   :
                </p>
            </td>
            <td style="text-align:right;">
                <p style="">
                    {{ date_format(date_create($sparePartInvoice->date),"d-m-Y") }}
                </p>
            </td>
        </tr>
        {{-- address --}}
        <tr>
            <td>
                <p style="">
                    {{ $sparePartInvoice->customer->attention_person ?? '' }} ({{ $sparePartInvoice->customer->factory_name ?? '' }})
                </p>
            </td>
            <td  style="text-align:right;">
                <p style="">
                    {{ trans('cruds.sparePartInvoice.fields.credit_term') }}    :
                </p>
            </td>
            <td  style="text-align:right;">
                <p style="">
                    {{ $sparePartInvoice->credit_term }}
                </p>
            </td>
        </tr>

        <tr>
            <td>
                <p style="">
                    {{ $sparePartInvoice->customer->phone }}
                </p>
            </td>
            <td  style="text-align:right;">
                <p style="">
                    {{ trans('cruds.sparePartInvoice.fields.payment') }}    :
                </p>
            </td>
            <td  style="text-align:right;">
                <p style="">
                    {{$sparePartInvoice->payment}}
                </p>
            </td>
        </tr>

    </table>

    <hr style="margin-top: 50px; margin-bottom:50px;">


    <table class="styletable st1">
        <thead>
            <tr>
                <th style="padding:20px; width: 25%;">{{ trans('cruds.sparePartInvoice.fields.description') }}</th>
                <th style="padding:20px; width: 25%;">{{ trans('cruds.sparePartInvoice.fields.qty')}}</th>
                <th style="padding:20px; width: 25%;">{{ trans('cruds.sparePartInvoice.fields.unit_price')}}</th>
                <th style="padding:20px; width: 25%;">{{ trans('cruds.sparePartInvoice.fields.total')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sparePartInvoice->spareparts as $count=>$data)
                <tr>
                    <td style="text-align: center; padding:20px; width: 25%;">{{ $data->name }}</td>
                    <td style="text-align: right; padding:20px; width: 25%;">{{ $data->pivot->qty }}</td>
                    <td style="text-align: right; padding:20px; width: 25%;">{{ $data->dollar }} USD</td>
                    <td style="text-align: right; padding:20px; width: 25%;">{{ floatval($data->dollar) * intval($data->pivot->qty) }} USD</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td style="text-align: right; padding:20px;">
                        {{ $sparePartInvoice->total }} USD
                    </td>
                </tr>


            @endforeach
            <tr>
                <td colspan="4" style="text-transform: uppercase;padding:20px;">
                    The total amount is {{Helper::numberToWord($sparePartInvoice->total)}} {{$sparePartInvoice->total > 1 ? 'dollars' : 'dollar'}}.
                </td>
            </tr>
        </tbody>
    </table>
    {{-- <p style="text-transform: uppercase;">The total amount is {{Helper::numberToWord($sparePartInvoice->total)}} {{$sparePartInvoice->total > 1 ? 'dollars' : 'dollar'}}.</p> --}}

    <hr style="margin-top: 50px; margin-bottom:50px;">

    <table class="">
        <tr>
            <td style="width:10%;">Note:</td>
            <td style="width:10%;">1</td>
            <td>Please issue payment in USS/FEC to MEC Embroidery Center.</td>
        </tr>
        <tr>
            <td style="width:10%;"></td>
            <td style="width:10%;">2</td>
            <td>Please check for any discrepancy and inform within 7 days, otherwise we will accept the invoice statment as correct.</td>
        </tr>
    </table>

    <table style="margin-top: 50px;">
        <tr>
            <td style=" padding:20px; width: 25%;">
                <hr>
                {{ trans('cruds.sparePartInvoice.fields.customer_sign') }}
            </td>
            <td style="text-align: right; padding:20px; width: 25%;">
                <hr>
                {{ trans('cruds.sparePartInvoice.fields.authorized_sign') }}
            </td>
        </tr>
    </table>
    </div>

</body>
</html>
