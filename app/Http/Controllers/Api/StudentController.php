<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        $data = $request->all();
        if($data){
            Student::create($data);
            return response()->json(['messgae' => 'Votre inscription a ete effectuer avec success'], 200);
        }
        return response()->json(['message' => 'Veillez verifier vos informations s il sont correcte'], 404);
    }

}