<?php

namespace App\Models;

use App\Models\city;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class country extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function states()
    {
        return $this->hasMany(city::class);
    }
}
