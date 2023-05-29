<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            
            //departmentモデルに関連付
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->cascadeOnDelete();
            //問い合わせ氏名(20文字以下)
            $table->string('name', 20);
            //メールアドレス(255文字以下)
            $table->string('email', 255);
            //問い合わせ内容(1000文字以下)
            $table->string('content', 1000);
            //年齢(空白可)
            $table->integer('age')->nullable();
            //性別(空白可)
            $table->integer('gender')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
