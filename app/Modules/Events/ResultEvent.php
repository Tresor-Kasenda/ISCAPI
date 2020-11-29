<?php


namespace App\Modules\Events;


use App\Models\Result;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ResultEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var Result
     */
    public Result $result;


    /**
     * Create a new event instance.
     *
     * @param Result $result
     */
    public function __construct(Result $result)
    {

        $this->result = $result;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
