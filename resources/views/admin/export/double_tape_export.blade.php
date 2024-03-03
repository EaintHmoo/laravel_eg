<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Double Tape Export</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th class="text-nowrap">
                    {{ trans('cruds.doubleTape.fields.id') }}
                </th>
                <th class="text-nowrap">
                    {{ trans('cruds.doubleTape.fields.branch') }}
                </th>
                <th class="text-nowrap">
                    {{ trans('cruds.doubleTape.fields.purchase_source') }}
                </th>
                <th class="text-nowrap">
                    {{ trans('cruds.doubleTape.fields.made_from') }}
                </th>
                <th class="text-nowrap">
                    {{ trans('cruds.doubleTape.fields.brand') }}
                </th>
                <th>
                    {{ trans('cruds.doubleTape.fields.color') }}
                </th>
                <th>
                    {{ trans('cruds.doubleTape.fields.size') }}
                </th>
                <th class="text-nowrap">
                    {{ trans('cruds.doubleTape.fields.part_no') }}
                </th>
                <th>
                    {{ trans('cruds.doubleTape.fields.qty') }}
                </th>
                <th>
                    {{ trans('cruds.doubleTape.fields.unit') }}
                </th>
                <th class="text-nowrap">
                    {{ trans('cruds.doubleTape.fields.kyat') }}
                </th>
                <th class="text-nowrap">
                    {{ trans('cruds.doubleTape.fields.dollar') }}
                </th>
                
                <th class="text-nowrap">
                    {{ trans('cruds.doubleTape.fields.total_kyat') }}
                </th>
                <th class="text-nowrap">
                    {{ trans('cruds.doubleTape.fields.total_usd') }}
                </th>
                <th class="text-nowrap">
                    {{ trans('cruds.doubleTape.fields.remark') }}
                </th>
            
            </tr>
        </thead>
        <tbody>
            @foreach($doubleTapes as $key => $doubleTape)
                <tr data-entry-id="{{ $doubleTape->id }}">
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>
                        {{ $doubleTape->branch->name ?? '' }}
                    </td>
                    <td class="text-nowrap">
                        {{ $doubleTape->purchase_source->name ?? '' }}
                    </td>
                    <td>
                        {{ $doubleTape->made_from->made ?? '' }}
                    </td>
                    <td>
                        {{ $doubleTape->brand->brand_name ?? '' }}
                    </td>
                    <td>
                        {{ $doubleTape->color ?? '' }}
                    </td>
                    <td>
                        {{ $doubleTape->size ?? '' }}
                    </td>
                    <td>
                        {{ $doubleTape->part_no ?? '' }}
                    </td>
                    <td>
                        {{ $doubleTape->qty ?? '' }}
                    </td>
                    <td>
                        {{ $doubleTape->unit->name ?? '' }}
                    </td>
                    <td>
                        {{ $doubleTape->kyat ?? '' }}
                    </td>
                    <td>
                        {{ $doubleTape->dollar ?? '' }}
                    </td>
                    <td>
                        {{ ($doubleTape->qty ?? '') * ($doubleTape->kyat ?? '') }}
                    </td>
                    <td>
                        {{ ($doubleTape->qty ?? '') * ($doubleTape->dollar ?? '') }}
                    </td>
                    <td>
                        {{ $doubleTape->remark ?? '' }}
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>