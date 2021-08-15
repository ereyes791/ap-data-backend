<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlgorithmsTable extends Migration
{
    protected $connection = 'pgsql';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('algorithms', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->text('title');
            $table->text('problem');
            $table->text('problem_examples');
            $table->text('initial_code');
            $table->text('problem_solved');
            $table->text('tests_input');
            $table->text('tests_results_output');
            $table->boolean('orderMandatory');
            $table->uuid('topic_id')->unsigned()->nullable();
            $table->foreign('topic_id')->references('id')->on('topics')
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
        Schema::dropIfExists('algorithms');
    }
}
