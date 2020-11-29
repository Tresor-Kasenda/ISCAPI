<?php

declare(strict_types=1);
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataTrait\StudentTrait;
use App\Models\Result;
use App\Modules\Events\ResultEvent;
use App\Modules\Imports\ResultImport;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

/***
 * Class ResultController
 * @author scotttresor@gmail.com
 * @package App\Http\Controllers\Backend
 */
class ResultController extends Controller
{
    use StudentTrait;

    /***
     * @return Application|Factory|View
     * @author scotttresor@gmail.com
     */
    public function index()
    {
        return view('app.results.index', [
            'results' => Result::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /***
     * @return Application|Factory|View
     * @author scotttresor@gmail.com
     */
    public function create(): View
    {
        return view('app.results.create');
    }

    public function store(Request $request)
    {
        $resultat = $request->file('result');
        Excel::import(new ResultImport, $resultat);
        session()->flash('success', 'Le résultat ont été publié avec succée');
        return redirect()->route('result.index');
    }

    /***
     * @param Result $result
     * @return RedirectResponse
     * @author scotttresor@gmail.com
     */
    public function destroy(Result $result): RedirectResponse
    {
        if ($result){
            $result->delete();
            session()->flash('success', `Le résultat a été supprimer avec succée`);
            return redirect()->route('result.index');
        }
        session()->flash('danger', 'Impossible de supprimé ce resultat');
        return redirect()->route('result.index');
    }


}
