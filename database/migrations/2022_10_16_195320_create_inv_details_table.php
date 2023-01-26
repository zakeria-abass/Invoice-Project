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
        Schema::create('inv_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained('invoices')->onDelete('cascade');
            $table->string('product');
            $table->foreignId('section_id')->constrained('sections')->onDelete('cascade');
            $table->integer('status');
            $table->text('note')->nullable();
            $table->date('payment_date')->nullable();//تاريخ الدفع
            $table->string('residual')->nullable();//المبلغ المتبقي
            $table->string('transaction_id')->nullable();// رقم دفع عبر البطاقة
            $table->string('name_user')->nullable();
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
        Schema::dropIfExists('inv_details');
    }
};
