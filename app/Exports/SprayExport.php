<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SprayExport implements FromView
{
    protected $sprays;

    public function __construct($sprays)
    {
        $this->sprays = $sprays;
    }

    public function view(): View
    {
        return view('admin.export.spray_export', [
            'sprays' => $this->sprays,
        ]);
    }
}
