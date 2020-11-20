<?php
declare(strict_types=1);
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataTrait\StudentTrait;
use App\Models\Student;

/****
 * Class StudentController
 * @author scotttresor@gmail.com
 * @package App\Http\Controllers\Backend
 */
class StudentController extends Controller
{
    use StudentTrait;
    /**
     * @var Student
     */
    private Student $student;


    public function index(Student $student)
    {
        return view('app.student.index', [
           'students' => $student::orderBy('created_at', 'DESC')->get()
        ]);
    }

    public function destroy(Student $student)
    {
        if ($student){
            $student->delete();

            return redirect()->route('student.index');
        }
        return redirect()->route('student.index')->with('message', 'Impossible de supprimer cet etudiant');
    }

}
