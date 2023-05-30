<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading');
            $table->text('titleImage');
            $table->string('title');
            $table->text('titleDescription');
            $table->text('teamMemberImage');
            $table->string('teamMemberName');
            $table->text('teamMemberDescription');
            $table->tinyInteger('publicationStatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('abouts');
    }

}
