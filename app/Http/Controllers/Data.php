<?php
declare(strict_types=1);
namespace App\Http\Controllers;

/***
 * Trait Data
 * @package App\Http\Controllers
 */
trait Data
{
    /***
     * @param array|null $student
     * @return mixed
     * @author scotttresor@gmail.com
     */
    public function getStudent(array $student = null)
    {
        return $this->getStudent($student);
    }

    /***
     * @param array|null $result
     * @return mixed
     * @author scotttresor@gmail.com
     */
    public function getResult(array  $result = null)
    {
        return $this->getResult($result);
    }

    /***
     * @param array|null $communicate
     * @return mixed
     * @author scotttresor@gmail.com
     */
    public function  getCommunicate(array  $communicate = null)
    {
        return $this->getCommunicate($communicate);
    }
}
