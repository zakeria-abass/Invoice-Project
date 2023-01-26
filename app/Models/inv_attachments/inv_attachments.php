<?php

namespace App\Models\inv_attachments;

use App\Models\Invoice\Invoice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inv_attachments extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function invoice(){

        return $this->belongsTo(Invoice::class,'invoice_id','id');
    }
}
