<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('anons');
            $table->text('text');
            $table->unsignedBigInteger('user_id'); // Убедитесь, что поле существует
            $table->foreign('user_id')->references('id')->on('users'); // Внешний ключ
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles'); // Исправлено имя таблицы
    }
}
