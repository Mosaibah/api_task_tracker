<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            \Illuminate\Support\Facades\DB::statement('SET SESSION sql_require_primary_key=0'); 
            // in DigitalOeacen you must add this line ^^, otherwise you can commet it.
            $table->id();
            $table->string('text');
            $table->string('day');
            $table->boolean('reminder')->default(true);
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
        Schema::dropIfExists('tasks');
    }
}
