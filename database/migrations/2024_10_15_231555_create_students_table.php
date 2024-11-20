<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('matricula');
        $table->string('endereco');
        $table->string('cpf')->unique();
        $table->string('telefone');
        $table->string('email')->unique();
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
        Schema::dropIfExists('students');
    }
}