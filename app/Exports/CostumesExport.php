<?php

namespace App\Exports;

use App\Models\Costum;
use App\Models\CostumModel;
use App\Models\SewaKostumModel;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class CostumesExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('admin.datakostum.export', [
            'costumes' => CostumModel::all()
        ]);
    }
}
