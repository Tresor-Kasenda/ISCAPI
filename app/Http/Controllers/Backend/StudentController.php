<?php
declare(strict_types=1);
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Data;
use App\Models\Student;
use Illuminate\Http\Request;

/****
 * Class StudentController
 * @author scotttresor@gmail.com
 * @package App\Http\Controllers\Backend
 */
class StudentController extends Controller
{
    use Data;

    /**
     * @var Student
     */
    private Student $student;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Student $student)
    {
        return view('app.student.index', [
           'students' => $student::paginate(15)
        ]);
    }
}
