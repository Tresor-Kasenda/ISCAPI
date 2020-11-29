<?php


namespace App\Modules\Mail;



use App\Models\Result;
use App\Models\Student;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResultEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Result
     */
    private Result $result;


    /**
     * Create a new message instance.
     *
     * @param Result $result
     */
    public function __construct(Result $result)
    {

        $this->result = $result;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.result');
    }
}
