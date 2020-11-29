<?php


namespace App\Modules\Listeners;


use App\Mail\StudentSubscriptionEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class ResultListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle(object $event)
    {
        Mail::to($event->result->email)->send(new StudentSubscriptionEmail($event->result));
    }
}
