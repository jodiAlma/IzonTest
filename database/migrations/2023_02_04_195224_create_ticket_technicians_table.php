<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_technicians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ticket_id')->unsigned();
            $table->unsignedBigInteger('technicians_id')->unsigned();
            $table->unique(['ticket_id','technicians_id']); 
            $table->timestamps();
        });
        Schema::table('ticket_technicians', function($table)
        { $table->foreign('ticket_id')->references('id')->on('tickets')->onDelete('cascade');
            $table->foreign('technicians_id')->references('id')->on('technicians')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_technicians');
    }
}
