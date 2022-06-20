<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCicloEscolarTable extends Migration{
    
    public function up(){
        Schema::create('ciclo_escolar', function (Blueprint $table) {
            $table->id();
            $table->date('inicio_ciclo');
            $table->date('fin_ciclo');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down(){
        Schema::dropIfExists('ciclo_escolar');
    }
}