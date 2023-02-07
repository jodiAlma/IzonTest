<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'services';
    protected $fillable = [
        
        'title',
        'price',
        'category_id'
        
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
