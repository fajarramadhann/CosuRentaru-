<?php

namespace App\Http\Controllers;

use App\Exports\CostumesExport;
use App\Exports\DataSewaCostumesExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportCostumes()
    {
        return Excel::download(new CostumesExport, 'data-kostum.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }

    public function exportDataSewaKostum()
    {
        return Excel::download(new DataSewaCostumesExport, 'data_sewa_kostum.xlsx');
    }
}
