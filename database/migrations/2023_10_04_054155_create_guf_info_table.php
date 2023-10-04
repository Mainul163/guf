<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGufInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guf_info', function (Blueprint $table) {
            $table->id();
            
            $table->string('name')->nullable();
            $table->string('national_id')->nullable();
            $table->string('mobile')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('thana')->nullable();
          
            $table->string('victim_name');
            $table->string('victim_national_id');
            $table->string('victim_mobile');
            $table->string('victim_division');
            $table->string('victim_district');
            $table->string('victim_thana');
            $table->string('message');
            $table->string('required_money');
            $table->string('time');
            $table->string('img');
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
        Schema::dropIfExists('guf_info');
    }
}