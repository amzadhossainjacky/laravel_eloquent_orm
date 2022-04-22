<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'project_id'
    ];

    public function deployment(){
        return $this->hasMany(Deployment::class);
    }
}
