<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        
        
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    protected $table = 'statuses';

    function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
    
}
