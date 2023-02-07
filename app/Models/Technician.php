<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'technicians';
    protected $fillable = [
        
        'name',
        'hour_cost',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'pivot'
    ];

    
    public function tickets()
    {
        return $this->belongsToMany(Ticket::class,'id','ticket_id','technician_id');
    }
    function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
