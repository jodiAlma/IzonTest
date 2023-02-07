<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $table = 'evaluations';
    protected $fillable = [
        
        'title',
        'value',
    ];
    function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
