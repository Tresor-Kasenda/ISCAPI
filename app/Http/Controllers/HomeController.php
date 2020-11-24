<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\DataTrait\Data;
use Illuminate\Contracts\Support\Renderable;



/****
 * Class HomeController
 * @author scotttresor@gmail.com
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{

    use Data;

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

}
