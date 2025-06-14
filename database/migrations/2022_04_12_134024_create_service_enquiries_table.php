<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('contact_person_name');
            $table->string('company_name');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile_no');
            $table->string('city');
            $table->string('country');
            $table->string('service_id');
            $table->string('requirement_details');
            $table->string('expected_date');
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
        Schema::dropIfExists('service_enquiries');
    }
}
