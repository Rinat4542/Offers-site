<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // protected $connection = 'pgsql';


    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offer_id')->constrained();
            $table->string('cid')->nullable();
            $table->string('type')->nullable();//Тип кваритры(однушка)
            $table->float('square')->nullable();//Площадь квартиры
            $table->string('complex')->nullable();//Название ЖК
            $table->string('house')->nullable();//Название дома
            $table->text('description')->nullable();//Описание кваритры
            $table->text('images')->nullable();
            $table->boolean('like')->nullable();;//отметка 'Нравится'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
