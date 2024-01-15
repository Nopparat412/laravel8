<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeek05Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Week05', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('B')->nullable();
            $table->string('C')->nullable();
            $table->integer('M')->nullable();
            $table->text('G')->nullable();
            $table->float('T')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Week05');
    }
}
