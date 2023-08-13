<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bookingrooms extends Model
{
    use HasFactory;
    protected $primaryKey = 'br_id';
    protected $guarded = ['br_id'];

    //kaitkan ke table user dan room
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'br_user_id', 'id');
    }

    public function rooms(): BelongsTo
    {
        return $this->belongsTo(Rooms::class, 'br_room_id', 'r_id');
    }

}
