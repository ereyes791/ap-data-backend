<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('PDF_URL');
            $table->timestamps();
            $table->uuid('topic_id')->unsigned()->nullable();
            $table->foreign('topic_id')->references('id')->on('topics')
                ->onDelete('cascade');
            $table->uuid('content_id')->unsigned()->nullable();
            $table->foreign('content_id')->references('id')->on('contents')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papers');
    }
}
