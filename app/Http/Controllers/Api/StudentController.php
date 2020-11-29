<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataTrait\StudentTrait;
use App\Models\Student;
use App\Modules\Events\StudentSubscriptionEvent;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/****
 * Class StudentController
 * @author scotttresor@gmail.com
 * @package App\Http\Controllers\Api
 */
class StudentController extends Controller
{
    use StudentTrait;

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
            'email' => 'required|email|unique:students',
            'adress' => 'required',
            'ville' => 'required',
            'school' => 'required',
            'province' => 'required',
            'codeExetat' => 'required|unique:students|max:16',
            'option' => 'required',
            'annee' => 'date_format:Y',
            'matricule' => $this->registrationNumber(),
            'pourcent' => 'required|numeric',
            'Department' => 'required',
            'Depart' => 'required'
        ]);
        if ($data) {
            $student = Student::create($data);
            event(new StudentSubscriptionEvent($student));
            return response()->json(['success' => 'Votre inscription a ete enregistrer'], 200);
        }
        return response()->json(['error' => 'Impossible de contactez le serveur'], 404);
    }

    /***
     * @param Request $request
     * @return string
     * @author scotttresor@gmail.com
     */
    private function registrationNumber(Request $request)
    {
        $department = $request->Department;
        $years = $request->annee;
        return $matricul = $years. '-'. $department;
    }

}
