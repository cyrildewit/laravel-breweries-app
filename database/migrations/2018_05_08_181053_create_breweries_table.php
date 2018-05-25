<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreweriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breweries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('excerpt')->nullable();
            $table->text('content')->nullable();
            $table->boolean('is_published')->default(true); // TODO: think about it at a later moment
            // $table->enum('status', ['publish', 'future', 'draft', 'pending', 'private', 'trash']);
            $table->float('lat', 10, 6);
            $table->float('lng', 10, 6);
            $table->json('opening_hours')->nullable();
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
        Schema::dropIfExists('breweries');
    }
}
