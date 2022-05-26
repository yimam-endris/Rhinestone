<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent', function (Blueprint $table) {
            $table->id();
            $table->string('agent_ID')->unique();
            $table->string('agent_name');
            $table->string('agent_address');
            $table->string('agent_nationality');
            $table->string('agent_contact_person');
            $table->string('agent_phone');
            $table->string('agent_email')->unique();
            $table->string('agent_fax_number');
            $table->string('agent_office_phone');
            $table->string('agent_future_email');
            $table->string('agent_status');
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
        Schema::dropIfExists('agent');
    }
}
