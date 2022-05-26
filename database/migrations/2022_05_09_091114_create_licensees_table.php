<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenseesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licensees', function (Blueprint $table) {
            $table->id();
            $table->string('Licensee_ID')->unique();
            $table->string('Licensee_Name');
            $table->string('Licensee_Address');
            $table->string('Licensee_Email');
            $table->string('Licensee_Phone');
            $table->string('Nationality');
            $table->string('Country_of_Registration');
            $table->date('Date_of_Incorporation');
            $table->string('Notes');
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
        Schema::dropIfExists('licensees');
    }
}
