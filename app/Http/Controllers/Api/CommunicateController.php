<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Communicate;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/***
 * Class CommunicateController
 * @author scotttresor@gmail.com
 * @package App\Http\Controllers\Api
 */
class CommunicateController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Communicate[]|Collection|Response
     */
    public function index()
    {
        return Communicate::all();
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return void
     */
    public function show(int $id)
    {
        //
    }


}
