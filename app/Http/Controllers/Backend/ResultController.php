<?php

declare(strict_types=1);
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

/***
 * Class ResultController
 * @author scotttresor@gmail.com
 * @package App\Http\Controllers\Backend
 */
class ResultController extends Controller
{
    /***
     * ResultController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('app.results.index', [
            'results' => Result::paginate(20)
        ]);
    }

    public function create()
    {
        return view('app.results.create');
    }

    public function store()
    {
    }


}
