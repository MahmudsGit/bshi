<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->references('id')->on('jobs')->cascadeOnDelete();
            $table->foreignId('candidate_id')->references('id')->on('candidates')->cascadeOnDelete();
            $table->decimal('amount', 20, 4)->default(0);
            $table->string('payment_via')->nullable();
            $table->boolean('payment_status')->default(0);
            $table->foreignId('reviewed_by')->nullable()->references('id')->on('users')->cascadeOnDelete();
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
        Schema::dropIfExists('transactions');
    }
}
