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
            $table->string('clo_name_bangla');
            $table->string('clo_name_english');
            $table->string('mother_name_bangla');
            $table->string('mother_name_english');
            $table->date('birth_date');
            $table->string('age');
            $table->integer('nid_number')->unique();
            $table->string('parmanet_address_bangla');
            $table->string('parmanet_address_english');
            $table->string('contact_address_bangla');
            $table->string('contact_address_english');
            $table->integer('moblie_number')->unique();
            $table->string('email')->unique()->nullable();
            $table->boolean('married')->default(0);
            $table->string('religion');
            $table->string('nationality');
            $table->text('employment')->nullable();
            $table->string('ssc');
            $table->string('hsc')->nullable();
            $table->string('diploma')->nullable();
            $table->string('bsc')->nullable();
            $table->string('others_degree')->nullable();
            $table->string('experience')->nullable();
            $table->integer('reg_number')->unique();
            $table->date('reg_date');
            $table->string('reference_1');
            $table->string('reference_2');
            $table->integer('bank_draft_number')->unique();
            $table->string('bank_name');
            $table->string('bank_branch');
            $table->date('bank_draft_date');
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
