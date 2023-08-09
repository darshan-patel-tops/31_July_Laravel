<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pdf extends Model
{
    use HasFactory;
    protected $table= "pdfs";    
    protected $fillable = ['course','topic','filename'];
}
