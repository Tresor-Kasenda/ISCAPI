<?php
declare(strict_types=1);
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataTrait\StudentTrait;
use App\Models\Student;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

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


    /***
     * @param Student $student
     * @return Application|Factory|View
     * @author scotttresor@gmail.com
     */
    public function index(Student $student)
    {
        return view('app.student.index', [
           'students' => $student::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /***
     * @param Student $student
     * @return RedirectResponse
     * @author scotttresor@gmail.com
     */
    public function destroy(Student $student)
    {
        if ($student){
            $student->delete();

            session()->flash('success', `L\'etudiant a été supprimer avec succée`);

            return redirect()->route('student.index');
        }
        session()->flash('danger', 'Impossible de supprimé cet étudiant');
        return redirect()->route('student.index');
    }

}
