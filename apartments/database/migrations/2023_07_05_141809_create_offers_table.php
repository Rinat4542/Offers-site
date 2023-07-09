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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->integer('b24_contact_id')->nullable();
            $table->integer('b24_deal_id')->nullable();
            $table->integer('b24_manager_id')->nullable();
            $table->string('name')->nullable();//ФИО
            $table->string('position')->nullable();//Должность сотрудника
            $table->bigInteger('phone')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('status')->default(false)->nullable();
            $table->date('date_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
