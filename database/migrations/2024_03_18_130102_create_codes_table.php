<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_id')->constrained()->onDelete('cascade');// 言語名
            $table->string('library', 255)->nullable();// ライブラリー名
            $table->tinyInteger('check_flag')->nullable();// チェック項目
            $table->string('category', 255)->nullable();// カテゴリー
            $table->longText('main_code')->nullable();// メインコード
            $table->longText('example')->nullable();// コード例
            $table->longText('explain')->nullable();// 説明
            $table->longText('description')->nullable();// 備考
            $table->string('image')->nullable();// 画像
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codes');
    }
};
