<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCantactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cantacts', function (Blueprint $table) {
            $table->id();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('adresse');
            $table->string('email');
            $table->string('numberPhone');
            $table->string('town');
            $table->integer('codePostal');
            $table->longText('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cantacts');
    }
}
