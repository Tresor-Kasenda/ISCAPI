<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/****
 * Class StudentController
 * @author scotttresor@gmail.com
 * @package App\Http\Controllers\Api
 */
class StudentController extends Controller
{

    public function index()
    {
        return Student::all();
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $data  = $request->validate([
            'username' => 'required|min:3',
            'prenom' => 'required|min:3',
            'sexe' => 'required',
            'birthdays' => 'required',
            'nationality' => 'required',
            'phoneNumber' => 'required|max:20',
            'adress' => 'required',
            'ville' => 'required',
            'school' => 'required',
            'province' => 'required',
            'codeExetat' => 'required|max:16',
            'option' => 'required',
            'annee' => 'date_format:Y',
            'pourcent' => 'required|numeric',
            'Department' => 'required',
            'Depart' => 'required'
        ]);
        if ($data) {
            Student::create($data);
            return response()->json(['message' => 'Votre inscription a ete enregistrer'], 200);
        }
    }

}
