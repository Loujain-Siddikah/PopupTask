<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class OwnerNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $owner_id;
    public $user_id;
    public $popup_id;
    public $type;

    /**
     * Create a new event instance.
     */
    public function __construct($owner_id,$user_id, $popup_id, $type)
    {
        $this->owner_id = $owner_id;
        $this->user_id = $user_id;
        $this->popup_id = $popup_id;
        $this->type = $type;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('owner-notifications.'. $this->owner_id),
        ];
    }

    public function broadcastWith()
    {
        return [
            'user_id' => $this->user_id,
            'popup_id' => $this->popup_id,
            'type' => $this->type,
        ];
    }
}
