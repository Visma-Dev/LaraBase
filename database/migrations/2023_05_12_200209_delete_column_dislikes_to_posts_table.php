<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteColumnDislikesToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * При удалении воспроизводим обратные созданию действия
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {

            //при поднятии, мы, как ни странно - удаляем колонку
            $table->dropColumn('dislikes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {

            // а вот при откате - создаем.
            $table->integer('dislikes')->nullable()->after('likes');

        });
    }
}
