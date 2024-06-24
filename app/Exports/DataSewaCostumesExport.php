<?php

namespace App\Exports;

use App\Models\SewaKostumModel;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class DataSewaCostumesExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('admin.dataSewaan.export', [
            'sewaCostumes' => SewaKostumModel::all()
        ]);
    }
}
