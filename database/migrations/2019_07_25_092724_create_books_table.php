<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->double('rate_average')->default('0');
            $table->integer('user_rate_total');
            $table->string('slug');
            $table->string('type');
            $table->text('detail');
            $table->string('image')->default('default.jpg');
            $table->datetime('public_date');
            $table->string('author');
            $table->string('publishing_company');
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
        Schema::dropIfExists('books');
    }
}
