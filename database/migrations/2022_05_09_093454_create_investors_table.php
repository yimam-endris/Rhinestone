<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            $table->id();
            $table->string("InvestorID")->unique();
            $table->string("InvestorLastName");
            $table->string("InvestorGivenName");
            $table->string("InvestorPhone");
            $table->string("InvestorEmail");
            $table->date("Date_of_Termination");
            $table->string("Contractor");
            $table->string("ContractorType");
            $table->date("Date_of_Contract");
            $table->date("Date_of_Commencement");
            $table->string("Nationality");
            $table->string("Home");
            $table->string("Country");
            $table->string("Zip_Code");
            $table->string("Employer_Name");
            $table->string("Employer_Address");
            $table->string("Employer_Nationality");
            $table->string("Email_of_Future_Contact");
            $table->string("Notes");
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
        Schema::dropIfExists('investors');
    }
}
