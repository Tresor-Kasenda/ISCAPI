<?php
declare(strict_types=1);
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/***
 * Class StudentRequest
 * @author scotttresor@gmail.com
 * @package App\Http\Requests
 */
class StudentRequest extends FormRequest
{
    /***
     * @return false
     * @author scotttresor@gmail.com
     */
    public function authorize()
    {
        return false;
    }

    /***
     * @return array
     * @author scotttresor@gmail.com
     */
    public function rules()
    {
        return [
            'username' => 'required|min:3',
            'prenom' => 'required|min:3',
            'sexe' => 'required',
            'birthdays' => 'date_format:Y/m/d',
            'nationality' => 'required',
            'phoneNumber' => 'required|unique:students|max:20',
            'adress' => 'required',
            'ville' => 'required',
            'school' => 'required',
            'province' => 'required',
            'codeExetat' => 'required|max:16',
            'option' => 'required',
            'annee' => 'date_format:Y',
            'pourcent' => 'required|numeric|max:2',
            'Department' => 'required',
            'Depart' => 'required'
        ];
    }
}
