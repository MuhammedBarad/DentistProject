<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'user_id',
        'appointment_type',
        'date',
        'email',
        'note',
        'state'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
