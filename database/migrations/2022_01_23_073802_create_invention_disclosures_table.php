<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventionDisclosuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invention_disclosures', function (Blueprint $table) {
            $table->id();
            $table->string("reference_number")->nullable();
            $table->string("file_open_date")->nullable();
            $table->string("title")->nullable();
            $table->string("status")->nullable();
            $table->string("date_of_invention")->nullable();
            $table->string("keyword")->nullable();
            $table->string("center_code")->nullable();
            $table->string("joint_venture_with")->nullable();
            $table->string("cost_center")->nullable();
            $table->string("joint_venture")->nullable();
            $table->string("agreement_place")->nullable();
            $table->string("primary_attorney")->nullable();
            $table->string("secondary_attorney")->nullable();
            $table->string("primary_paralegal")->nullable();
            $table->string("secondary_paralegal")->nullable();
            $table->string("invention_description")->nullable();
            $table->string("general_notes")->nullable();
            $table->string("proposed_investors")->nullable();
            $table->string("confirmed_investors")->nullable();
            $table->string("approved_for_filing")->nullable();
            $table->string("date_of_approval")->nullable();
            $table->string("reason")->nullable();
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
        Schema::dropIfExists('invention_disclosures');
    }
}
