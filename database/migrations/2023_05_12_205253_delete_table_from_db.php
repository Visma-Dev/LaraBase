<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteTableFromDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //в случае выполнения этой миграции - удаляем таблицу posts
        Schema::dropIfExists('posts');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //в случе отката - создаем заново
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('content');
            $table->string('picture');
            $table->unsignedBigInteger('likes')->nullable();
            $table->unsignedBigInteger('dislikes')->nullable();
            $table->boolean('is_published')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
