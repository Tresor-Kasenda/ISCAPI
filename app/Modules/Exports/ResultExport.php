<?php
declare(strict_types=1);
namespace App\Modules\Exports;
use App\Models\Result;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

/***
 * Class ResultExport
 * @author scotttresor@gmail.com
 * @package App\Exports
 */
class ResultExport implements FromCollection, WithHeadings, WithColumnFormatting, WithEvents
{
    /**
     * @return Result[]|\Illuminate\Database\Eloquent\Collection|Collection
     * @author scotttresor@gmail.com
     */
    public function collection()
    {
        return Result::all();
    }

    /***
     * @return string[]
     * @author scotttresor@gmail.com
     */
    public function headings(): array
    {
        return [
            'id',
            'username',
            'prenom',
            'department',
        ];
    }

    /***
     * @return array
     * @author scotttresor@gmail.com
     */
    public function columnFormats(): array
    {
        return [];
    }

    /***
     * @return array[]
     * @author scotttresor@gmail.com
     */
    public function registerEvents(): array
    {
        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'style' => [
                'uppercase' => true
            ]
        ];
        return [
            AfterSheet::class => function(AfterSheet $event) use ($styleArray) {
                $event->sheet->getStyle('A1:D1')->applyFromArray($styleArray);
            }
        ];
    }
}
