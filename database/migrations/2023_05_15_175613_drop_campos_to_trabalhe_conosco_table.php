<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropCamposToTrabalheConoscoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trabalhe_conosco', function (Blueprint $table) {
            $table->dropColumn('data_nascimento');
            $table->dropColumn('endereco');
            $table->dropColumn('cidade');
            $table->dropColumn('uf');
            $table->dropColumn('cargo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trabalhe_conosco', function (Blueprint $table) {
            //
        });
    }
}
