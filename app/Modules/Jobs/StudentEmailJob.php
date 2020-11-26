<?php

namespace App\Modules\Jobs;

use App\Events\StudentEvent;
use App\Mails\RegistrationStudentEmail;
use App\Models\Student;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class StudentEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var Student
     */
    public Student $student;
    /**
     * @var StudentEvent
     */
    public StudentEvent $event;

    /**
     * Create a new job instance.
     * @param Student      $student
     * @param StudentEvent $event
     */
    public function __construct(StudentEvent $event, Student $student)
    {
        $this->student = $student->withoutRelations();
        $this->event = $event;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->student)->send(new RegistrationStudentEmail($this->student, $this->event));
    }
}
