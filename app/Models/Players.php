<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'team',
        'position'
    ];

    protected $guarded = [];

    public function getPathAttribute () {
        return $this -> path ();
    }

    public function path () {
        return '/players/' . $this -> id;
    }
}
