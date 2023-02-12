<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); //Auto incrementing primary key
            //$table->integer('user_id')->unsigned()->index(); // Different way of doing it
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); //Bind user from users table with post table
            $table->text('body');
            $table->timestamps(); //created_at & updated_at column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
