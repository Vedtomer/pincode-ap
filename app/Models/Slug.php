<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class Slug extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'slug',
       
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }



    public function CreateSlug($name){

        $insert = [
            'name' => $name,
            'slug' => SlugService::createSlug(Slug::class, 'slug', $name),
        ];

       
   
      $data=Slug::create($insert);
      return $data->slug;
    

    }

    public function UpdateSlug($slug,$cat=null,$subcat=null,$product=null){

        $insert = [
            'categories_id' => $cat,
            'sub_categories_id' => $subcat,
            'product_id' => $product,
        ];

       
   
     return $data=Slug::where('slug',$slug)->update($insert);
      
    

    }

    
}
