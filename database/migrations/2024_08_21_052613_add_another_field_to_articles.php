<?php

// 2024_08_21_052613_add_another_field_to_articles.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnotherFieldToArticles extends Migration
{
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            // Проверяем, существует ли столбец, перед добавлением
            if (!Schema::hasColumn('articles', 'another_field')) {
                $table->string('another_field')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            // Удаляем столбец, если он существует
            if (Schema::hasColumn('articles', 'another_field')) {
                $table->dropColumn('another_field');
            }
        });
    }
}
