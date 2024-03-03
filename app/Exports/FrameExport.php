<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FrameExport implements FromView
{
    protected $frames;

    public function __construct($frames)
    {
        $this->frames = $frames;
    }

    public function view(): View
    {
        return view('admin.export.frame_export', [
            'frames' => $this->frames,
        ]);
    }
}
