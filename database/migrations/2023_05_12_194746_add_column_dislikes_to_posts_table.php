<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnDislikesToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //добавляем поле с числовым типом, используя метод integer
            $table->integer('dislikes')->nullable()->after('likes');//также указываем точное расположение колонки с помощью метода after
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

            //в случае отката, используем метод dropColumn по отношению к конкретному полю, которое мы указали в up
            $table->dropColumn('dislikes');

        });
    }
}
