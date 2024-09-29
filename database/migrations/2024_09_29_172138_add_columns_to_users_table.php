<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Schema::table('users', function (Blueprint $table) {
        //     //
        // });
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Автоинкрементный идентификатор
            $table->string('first_name'); // Столбец для имени
            $table->string('last_name'); // Столбец для фамилии
            $table->string('email')->unique(); // Столбец для электронной почты, уникальный
            $table->date('workdata'); // Столбец для даты работы
            $table->timestamps(); // Поля created_at и updated_at
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
