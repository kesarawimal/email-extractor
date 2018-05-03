<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailPathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_path', function (Blueprint $table) {
            $table->integer('path_id')->unsigned()->nullable();
            $table->foreign('path_id')->references('id')
                ->on('path')->onDelete('cascade');
            $table->integer('mail_id')->unsigned()->nullable();
            $table->foreign('mail_id')->references('id')
                ->on('mail')->onDelete('cascade');
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
        Schema::dropIfExists('mail_path');
    }
}
