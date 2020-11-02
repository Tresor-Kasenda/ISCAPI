<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Charts\HomeChart;
use App\Models\Communicate;
use App\Models\Result;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\DB;

/****
 * Class HomeController
 * @author scotttresor@gmail.com
 * @package App\Http\Controllers
 */
class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     * @return Renderable
     */
    public function index()
    {
        $record  = $this->getDataByDays();
        $data = [];

        foreach($record as $row) {
            $data['label'][] = $row->day_name;
            $data['data'][] = (int) $row->count;
        }
        $data['chart_data'] = json_encode($data);

        return view('home', $data);
    }

    /***
     * @return mixed
     * @author scotttresor@gmail.com
     */
    private  function getDataByDays()
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
