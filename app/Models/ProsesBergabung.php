<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prosesbergabung extends Model
{
    use HasFactory;
    
    protected $table = 'prosesbergabungs'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['title', 'content', 'slug'];
}
