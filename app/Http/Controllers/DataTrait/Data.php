<?php 

namespace App\Http\Controllers\DataTrait;

use Carbon\Carbon;
use App\Models\Result;
use App\Models\Student;
use App\Models\Communicate;
use Illuminate\Support\Facades\DB;


trait Data
{
    /**
     * @var Student
     */
    private Student $student;
    /**
     * @var Result
     */
    private Result $result;
    /**
     * @var Communicate
     */
    private Communicate $communicate;

    /***
     * HomeController constructor.
     * @param Student     $student
     * @param Result      $result
     * @param Communicate $communicate
     */
    public function __construct(Student $student, Result $result, Communicate $communicate)
    {
        $this->middleware('auth');
        $this->student = $student;
        $this->result = $result;
        $this->communicate = $communicate;
    }
    public function getDataByDays()
    {
        return Student::select(
            DB::raw("COUNT(*) as count"),
            DB::raw("DAYNAME(created_at) as day_name"),
            DB::raw("DAY(created_at) as day"))
             ->where('created_at', '>', Carbon::today()->subDay(6))
             ->groupBy('day_name','day')
             ->orderBy('day')
             ->get();
    }
}
