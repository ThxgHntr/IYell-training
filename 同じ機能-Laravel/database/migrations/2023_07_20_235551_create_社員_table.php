<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('社員', function (Blueprint $table) {
            $table->id();
            $table->string('社員番号',10);
            $table->string('氏名', 100);
            $table->string('部署');
            $table->boolean('性別');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('社員');
    }
};
