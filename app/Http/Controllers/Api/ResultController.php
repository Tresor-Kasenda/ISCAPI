<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;

/***
 * Class ResultController
 * @author scotttresor@gmail.com
 * @package App\Http\Controllers\Api
 */
class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Result[]|Collection|Response
     */
    public function index()
    {
        $result = Result::all();
        if ($result){
            return response()->json($result, 200);
        }
    }

}
