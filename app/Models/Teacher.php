<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $casts = [
        'class' => 'array',
        'addprices' => 'array',
        'instruments' => 'array'
    ];

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class); 
    }
}