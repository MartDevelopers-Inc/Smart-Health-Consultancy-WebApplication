<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->string('consul_id')->id();
            $table->string('consul_code');
            $table->string('member_id');
            $table->string('member_name');
            $table->string('member_phone');
            $table->string('doc_id');
            $table->string('doc_name');
            $table->longText('consul_details');
            $table->string('consul_status');
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
        Schema::dropIfExists('consultations');
    }
}
