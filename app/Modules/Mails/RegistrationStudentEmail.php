<?php
declare(strict_types=1);
namespace App\Modules\Mails;

use App\Events\StudentEvent;
use App\Models\Student;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/***
 * Class RegistrationStudentEmail
 * @author scotttresor@gmail.com
 * @package App\Mails
 */
class RegistrationStudentEmail extends Mailable
{
    use Queueable, SerializesModels;

    public Student $student;

    public StudentEvent $event;


    /**
     * RegistrationStudentEmail constructor.
     * @param Student      $student
     * @param StudentEvent $event
     */
    public function __construct(Student $student, StudentEvent $event)
    {
        $this->student = $student;
        $this->event = $event;
    }

    /***
     * @return RegistrationStudentEmail
     * @author scotttresor@gmail.com
     */
    public function build()
    {
        return $this
            ->view('email.confirmation-subscription')
            ->with('student', $this->student);
    }
}
