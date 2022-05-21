<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidate_id')->references('id')->on('candidates')->cascadeOnDelete();
            $table->foreignId('job_id')->references('id')->on('jobs')->cascadeOnDelete();
            $table->string('identification_number');
            $table->string('identification_password');
            $table->boolean('payment_status')->default(0);
            $table->foreignId('reviewed_by')->nullable()->references('id')->on('users')->cascadeOnDelete();
            $table->enum('status', ['applied', 'paid', 'admit_card', 'expired'])->default('applied');
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
        Schema::dropIfExists('job_applies');
    }
}
