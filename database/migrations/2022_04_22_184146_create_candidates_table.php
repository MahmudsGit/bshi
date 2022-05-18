<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('full_name_bangla');
            $table->string('full_name_english');
            $table->string('position_name');
            $table->string('job_id')->references('id')->on('jobs');
            $table->string('clo_name_bangla');
            $table->string('clo_name_english');
            $table->string('mother_name_bangla');
            $table->string('mother_name_english');
            $table->date('birth_date');
            $table->string('age');
            $table->integer('nid_number');
            $table->string('parmanet_address_bangla');
            $table->string('parmanet_address_english');
            $table->string('contact_address_bangla');
            $table->string('contact_address_english');
            $table->integer('moblie_number');
            $table->string('email')->nullable();
            $table->enum('married_status', ['married', 'unmarried', 'others']);
            $table->enum('sex', ['male', 'female', 'others']);
            $table->enum('nationality', ['bangladeshi']);
            $table->enum('religion', ['islam', 'hindu', 'christian','buddhism','others']);
            $table->text('employment')->nullable();
            $table->string('ssc');
            $table->string('hsc')->nullable();
            $table->string('diploma')->nullable();
            $table->string('bsc')->nullable();
            $table->string('others_degree')->nullable();
            $table->string('experience')->nullable();
            $table->integer('reg_number');
            $table->date('reg_date');
            $table->string('reference_1')->nullable();
            $table->string('reference_2')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
