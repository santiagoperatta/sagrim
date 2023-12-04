<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
	public function up(): void
    {
        Schema::table('tareas', function (Blueprint $table) {
            $table->string('expediente');
			$table->string('tarea');
			$table->string('comitente');
			$table->date('ultimo_envio');
			$table->date('ultima_correccion');
			$table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tareas', function (Blueprint $table) {
            $table->dropColumn(['expediente', 'tarea', 'comitente', 'ultimo_envio',
			'ultima_correccion']);
        });
    }
};