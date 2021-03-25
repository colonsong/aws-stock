<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;


class PushMsgEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $msg;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($msg)
    {
        //

        $this->msg = $msg;
        Log::info('construct' . $this->msg);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        Log::info('broadcastOn');
        return new Channel('push');
    }

    /**
    *  重命名一下广播名称，一般默认为类名
    */
    public function broadcastAs()
    {
        Log::info('broadcastAs');
        return 'push.msg';
    }

}
