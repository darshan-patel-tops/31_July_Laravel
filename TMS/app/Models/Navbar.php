<?php

namespace App\Models;

use App\Models\SubNavbar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Navbar extends Model
{
    use HasFactory;
    protected $fillable =['navbar'];

    public function subnavbar()
    {
        return $this->hasMany(SubNavbar::class);
    }

}
