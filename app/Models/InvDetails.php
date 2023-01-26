<?php

namespace App\Models;

use App\Models\Invoice\Invoice;
use App\Models\section\Sections;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvDetails extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function invoice(){

        return $this->belongsTo(Invoice::class,'invoice_id','id');
    }
    public function section(){

        return $this->belongsTo(Sections::class,'section_id','id');
    }
}
