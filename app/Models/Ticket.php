<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'priority_id',
        'status_id',
        'service_id',
        'evaluation_id',
        'work_hour',
        'work_report',
        'notes',
        'total_cost',
        'work_completion_date',
        'created_at',
        'discount',
        'complete'
    ];
    protected $hidden = [
        'updated_at',
        
    ];
    public function technicians()
    {
        return $this->belongsToMany(Technician::class,'ticket_technicians','ticket_id','technicians_id');
    }
    public function client()
    {
        return $this->belongsTo(User::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }
    public function technician()
    {
        return $this->belongsTo(Technician::class);
    }
    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }
}
