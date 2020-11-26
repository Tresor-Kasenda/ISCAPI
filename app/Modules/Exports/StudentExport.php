<?php
declare(strict_types=1);
namespace App\Modules\Exports;
use App\Models\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

/****
 * Class StudentExport
 * @author scotttresor@gmail.com
 * @package App\Exports
 */
class StudentExport implements FromCollection, WithHeadings, WithColumnFormatting, WithEvents
{
    /****
     * @return Student[]|\Illuminate\Database\Eloquent\Collection|Collection
     * @author scotttresor@gmail.com
     */
    public function collection()
    {
        return Student::all();
    }

    /***
     * @return string[]
     * @author scotttresor@gmail.com
     */
    public function headings(): array
    {
        return [
            'Identifiant',
            'Nom et Postnom',
            'Prenom',
            'Sexe',
            'Date de naissance',
            'Nationalite',
            'Numero de telephone',
            'Adresse',
            'Ville',
            'Ecole de Provenance',
            'Provice',
            'Code Exetat',
            'Option',
            'Annee de diplome',
            'Pourcentage',
            'Department choisie 1',
            'Departement choisie 2'
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
                $event->sheet->getStyle('A1:S1')->applyFromArray($styleArray);
            }
        ];
    }
}
