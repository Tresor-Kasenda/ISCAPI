<?php
declare(strict_types=1);
namespace  App\Http\Controllers\DataTrait;

/***
 * Trait StudentTrait
 * @package App\Http\Controllers\DataTrait
 */
trait StudentTrait
{
    /***
     * StudentTrait constructor.
     */
    public function __construct(){
        $this->middleware('auth');
    }
}
