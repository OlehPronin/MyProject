<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('article_id'); // Добавляем столбец user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Создаем внешний ключ для user_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Удаляем внешний ключ
            $table->dropColumn('user_id'); // Удаляем столбец user_id
        });
    }
}
