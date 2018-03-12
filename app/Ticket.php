<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\TicketEntry;

class Ticket extends Model
{
    protected $fillable = ['title', 'status'];

    public function subscribedUsers()
    {
        return $this->belongsToMany(User::class, 'ticket_subscriptions');
    }

    public function entries()
    {
        return $this->hasMany(TicketEntry::class);
    }
}
