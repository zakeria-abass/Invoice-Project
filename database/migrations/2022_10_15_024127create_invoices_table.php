<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number');/*-------رقم الفاتورة------*/
            $table->date('invoice_date');/*-------تاريخ الفاتورة------*/
            $table->date('due_date');/*-------تاريخ  الاستحقاق------*/
            $table->foreignId('section_id')->constrained('sections')->onDelete('cascade');

            $table->string('product');/*-------المنتج------*/
           $table->decimal('amount_collection',8,2)->nullable();
           $table->decimal('amount_commission',8,2);

            $table->string('discount');/*-------الخصم------*/
            $table->string('rate_vat');/*-------نسبة الضريبة------*/
            $table->decimal('value_vat',8,2);/*-------قيمة الضريبة------*/
            $table->decimal('total',8,2);/*-------مجموع الضريبة------*/
            $table->string('status',50)->default(2);/*-------حالة الفاتورة------*/
            $table->text('note')->nullable();
            $table->string('user');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
