<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email')->nullable();
            $table->string('phone', 100);
            $table->string('title');
            $table->string('company_name', 100);
            $table->string('lead_status', 100)->nullable();
            $table->string('lead_source', 100)->nullable();

            $table->string('building_no', 100);
            $table->string('street', 100);
            $table->string('state', 200);
            $table->string('city', 100);
            $table->string('zip_code', 10);
            $table->string('country', 150);

            $table->string('note_1')->nullable();
            $table->string('note_2')->nullable();

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
        Schema::dropIfExists('leads');
    }
};
