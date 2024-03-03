<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class NeedleExport implements FromView
{
    protected $needles;

    public function __construct($needles)
    {
        $this->needles = $needles;
    }

    public function view(): View
    {
        return view('admin.export.needle_export', [
            'needles' => $this->needles,
        ]);
    }
}
