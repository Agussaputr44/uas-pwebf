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
        Schema::create('user_activity', function (Blueprint $table){

            $table->increments('no_activity')->primary();
            $table->string('id_user', 30);
            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
            $table->string('discripsi', 300);
            $table->string('status', 300);
            $table->string('menu_id', 3);
            $table->string('delete_mark', 1);
            $table->string('create_by', 30);
            $table->timestamp('create_date');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('user_activity', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
        });

        Schema::dropIfExists('user_activity');
    }
};
