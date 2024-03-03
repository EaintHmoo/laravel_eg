<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InterlineExport implements FromView
{
    protected $interlines;

    public function __construct($interlines)
    {
        $this->interlines = $interlines;
    }

    public function view(): View
    {
        return view('admin.export.interline_export', [
            'interlines' => $this->interlines,
        ]);
    }
}
