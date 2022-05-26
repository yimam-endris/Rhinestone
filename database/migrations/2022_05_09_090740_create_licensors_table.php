<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licensors', function (Blueprint $table) {
            $table->id();
            $table->string('Licensor_ID')->unique();
            $table->string('Last_Name');
            $table->string('Given_Name');
            $table->string('Nationality');
            $table->string('Phone_Number');
            $table->string('Home_Address');
            $table->string('Employer');
            $table->string('Employer_Address');
            $table->date('Date_of_Termination');
            $table->date('Date_of_Commencement');
            $table->string('Contractor');
            $table->string('ContractorType');
            $table->date('Date_of_Contract');
            $table->string('Email_of_Future_Contact');
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
        Schema::dropIfExists('licensors');
    }
}
