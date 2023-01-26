<?php

namespace App\Models\Product;

use App\Models\section\Sections;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

//    protected $fillable=[
//      'prouduct_name','description'
//    ];

     protected $guarded=[];


     public function section(){
         return $this->belongsTo(Sections::class,'sections_id','id');
     }
}
