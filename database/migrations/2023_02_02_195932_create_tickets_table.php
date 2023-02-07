<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('priority_id')->unsigned();
            $table->foreign('priority_id')->references('id')->on('priorities')->onDelete('cascade');
            $table->bigInteger('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->bigInteger('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->bigInteger('evaluation_id')->unsigned()->nullable();
            $table->foreign('evaluation_id')->references('id')->on('evaluations')->onDelete('cascade');
            $table->integer('work_hour')->nullable();
            $table->string('work_report')->nullable();
            $table->string('notes')->nullable();
            $table->float('total_cost')->nullable();
            $table->date('work_completion_date')->nullable();
            $table->boolean('complete')->default('0');
            $table->float('discount')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
