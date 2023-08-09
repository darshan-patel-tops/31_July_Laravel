<?php

namespace App\Models;

use App\Models\Navbar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubNavbar extends Model
{
    use HasFactory;

    protected $fillable =['navbar_id','subnavbar'];

    public function navbar()
    {
        return $this->belongsTo(Navbar::class);
    }
}
