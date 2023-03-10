<?php

namespace App\Exports;

use App\Models\Municipal;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

use App\Http\Contracts\Admin\MunicipalController;
use App\Models\Survey;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      //  return $this->index($municipal);

        return Survey::all ();

        return Excel::download(new UsersExport ($municipal), 'filter.xlsx');



    }
}
