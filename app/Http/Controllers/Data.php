<?php 

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Support\Facades\DB;


trait Data
{
    public function getRequest()
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
