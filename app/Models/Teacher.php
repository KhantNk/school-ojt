<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
 
    protected $primaryKey = 'id';
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
