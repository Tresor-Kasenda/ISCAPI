<?php
declare(strict_types=1);
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataTrait\StudentTrait;
use App\Models\Communicate;
use App\Models\Result;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/***
 * Class CommunicateController
 * @author scotttresor@gmail.com
 * @package App\Http\Controllers\Backend
 */
class CommunicateController extends Controller
{
    use StudentTrait;
    /**
     * @var Communicate
     */
    private Communicate $communicate;

    /***
     * @return Application|Factory|View
     * @author scotttresor@gmail.com
     */
    public function index(): View
    {
        return view('app.communicate.index', [
            'invoice' => $this->communicate::all()
        ]);
    }

    /***
     * @return Application|Factory|View
     * @author scotttresor@gmail.com
     */
    public function create(): View
    {
        return view('app.communicate.create');
    }

    /***
     * @param Request $request
     * @return RedirectResponse
     * @author scotttresor@gmail.com
     */
    public function store(Request $request): RedirectResponse
    {
        $communiquer = $request
            ->validate([
                'title' => 'required|min:6',
                'content' => 'required'
            ]);
        Communicate::create($communiquer);
        session()->flash('success', 'Le résultat a été publié avec succée');
        return redirect()->route('communiquer.index');
    }

    /***
     * @param Communicate $communicate
     * @return RedirectResponse
     * @author scotttresor@gmail.com
     */
    public function destroy(Communicate $communicate)
    {

        if ($communicate){
            $communicate->delete();
            session()->flash('success', `Le résultat a été supprimer avec succée`);
            return redirect()->route('communiquer.index');
        }
        session()->flash('danger', 'Impossible de supprimé ce communiquer');
        return redirect()->route('communiquer.index');
    }

}
