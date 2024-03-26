<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment('ชื่อตัวละคร');
            $table->string('race', 255)->comment('เผ่าพันธุ์');
            $table->string('class', 255)->comment('คลาส');
            $table->integer('level')->comment('เลเวล');
            $table->integer('strength')->comment('ค่าพลัง Strength');
            $table->integer('dexterity')->comment('ค่าพลัง Dexterity');
            $table->integer('constitution')->comment('ค่าพลัง Constitution');
            $table->integer('intelligence')->comment('ค่าพลัง Intelligence');
            $table->integer('wisdom')->comment('ค่าพลัง Wisdom');
            $table->integer('charisma')->comment('ค่าพลัง Charisma');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
