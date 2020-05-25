<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalculationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('c_id');
            $table->float('optical_u',8,2);
            $table->float('optical_g',8,2);
            $table->float('optical_r',8,2);
            $table->float('optical_i',8,2);
            $table->float('optical_z',8,2);
            $table->float('infrared3',8,2);
            $table->float('infrared4',8,2);
            $table->float('infrared5',8,2);
            $table->float('infrared8',8,2);
            $table->float('infrared_J',8,2);
            $table->float('infrared_K',8,2);
            $table->float('radio',8,2);
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
        Schema::dropIfExists('calculations');
    }
}
