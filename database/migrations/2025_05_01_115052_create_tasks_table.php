<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Запуск миграции - создание таблицы tasks
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Автоинкрементный первичный ключ
            $table->string('title'); // Заголовок задачи (обязательное поле)
            $table->text('description')->nullable(); // Описание (может быть пустым)
            $table->string('status')->default('pending'); // Статус со значением по умолчанию
            $table->timestamps(); // Автоматические поля created_at и updated_at
        });
    }

    /**
     * Откат миграции - удаление таблицы tasks
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
