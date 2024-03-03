<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DoubleTapeExport implements FromView
{
    protected $doubleTapes;

    public function __construct($doubleTapes)
    {
        $this->doubleTapes = $doubleTapes;
    }

    public function view(): View
    {
        return view('admin.export.double_tape_export', [
            'doubleTapes' => $this->doubleTapes,
        ]);
    }
}
