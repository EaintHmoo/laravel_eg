<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ThreadExport implements FromView
{
    protected $threads;

    public function __construct($threads)
    {
        $this->threads = $threads;
    }

    public function view(): View
    {
        return view('admin.export.thread_export', [
            'threads' => $this->threads,
        ]);
    }
}
