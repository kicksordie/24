<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('comments', function (Blueprint $table)
	{		    
	    $table->increments('id');
	    $table->integer('prof_id')->references('id')->on('professors');
	    $table->string('comment');
	    $table->integer('author_id')->references('id')->on('users');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::drop('comments');
    }
}
