<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabalheConoscoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabalhe_conosco', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->date('data_nascimento')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('telefone', 20)->nullable();
            $table->string('endereco', 100)->nullable();
            $table->string('cidade', 30)->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('cargo', 100)->nullable();
            $table->string('curriculo', 100)->nullable();
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
        Schema::dropIfExists('trabalhe_conosco');
    }
}
