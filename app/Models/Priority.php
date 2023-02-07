<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'title',
        'value',
        
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        
    ];
    function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
