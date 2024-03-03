<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SparepartExport implements FromView
{
    protected $spareparts;

    public function __construct($spareparts)
    {
        $this->spareparts = $spareparts;
    }

    public function view(): View
    {
        return view('admin.export.sparepart_export', [
            'spareparts' => $this->spareparts,
        ]);
    }
}
