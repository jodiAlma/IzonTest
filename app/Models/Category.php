<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'categories';
    protected $fillable = [
        
        'name',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        
    ];
    function service()
    {
        return $this->hasMany(Service::class);
    }
}
