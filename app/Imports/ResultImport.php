<?php
declare(strict_types=1);
namespace App\Imports;
use App\Models\Result;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;

/***
 * Class ResultImport
 * @author scotttresor@gmail.com
 * @package App\Imports
 */
class ResultImport implements ToModel
{
    /****
     * @param array $row
     * @return Result|Model|Model[]|null
     * @author scotttresor@gmail.com
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
