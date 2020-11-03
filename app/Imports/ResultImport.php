<?php

namespace App\Imports;

use App\Models\Result;
use Maatwebsite\Excel\Concerns\ToModel;

class ResultImport implements ToModel
{
    /**
    * @param array $row
    * @return Result
     */
    public function model(array $row)
    {
        return new Result([
            'username'     => $row[0],
            'prenom'    => $row[1],
            'department' => $row[2]
        ]);
    }
}
