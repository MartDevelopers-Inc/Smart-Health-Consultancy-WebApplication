<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_experts', function (Blueprint $table) {
            $table->string('doc_id')->id();
            $table->string('doc_number');
            $table->string('doc_name');
            $table->string('doc_email');
            $table->string('doc_phone');
            $table->longText('doc_bio');
            $table->string('doc_photo');
            $table->string('doc_status');
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
        Schema::dropIfExists('medical_experts');
    }
}
