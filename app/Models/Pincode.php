<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use \Cviebrock\EloquentSluggable\Services\SlugService;
class Pincode extends Model
{
    use HasFactory;

    public function getSlugAttribute($val)
{
    return "find-pincode/".$val;
}
}
