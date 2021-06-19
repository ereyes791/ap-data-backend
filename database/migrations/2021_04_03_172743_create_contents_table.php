<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    protected $connection = 'pgsql';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->timestamps();
            $table->uuid('id')->primary();
            $table->string('name');
            $table->text('description');
            $table->string('link_text');
        });
        Schema::table('videos', function (Blueprint $table) {
            $table->uuid('content_id')->unsigned()->nullable();
            $table->foreign('content_id')->references('id')->on('contents')
                ->onDelete('cascade');
        });
        Schema::table('algorithms', function (Blueprint $table) {
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
        Schema::dropIfExists('contents');
    }
}
