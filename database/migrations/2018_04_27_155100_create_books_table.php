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
				$table->increments('id_book');
				$table->string('title', 45);
				$table->string('author', 45);
				$table->string('isbn', 45);
				$table->integer('published');
				$table->string('is_active', 1);
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
