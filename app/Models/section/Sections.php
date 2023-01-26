<?php

namespace App\Models\section;

use App\Models\Invoice\Invoice;
use App\Models\Product\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    use HasFactory;

    protected $fillable=[
      'section_name','descripion','created_by'
    ];


}
