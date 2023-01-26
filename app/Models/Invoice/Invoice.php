<?php

namespace App\Models\Invoice;

use App\Models\inv_attachments\inv_attachments;
use App\Models\InvDetails;
use App\Models\Invoice_Attachments\Invoice_Attachments;
use App\Models\section\Sections;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory , SoftDeletes;

    protected $guarded=[];


    public function details(){

        return $this->hasOne(InvDetails::class,'invoice_id','id');
    }

    public function section(){

        return $this->belongsTo(Sections::class, 'section_id', 'id');


    }

    public function attachments(){

        return $this->hasOne(inv_attachments::class,'invoice_id','id');
    }
}
