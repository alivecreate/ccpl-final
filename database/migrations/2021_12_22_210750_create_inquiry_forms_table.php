<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiryFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiry_forms', function (Blueprint $table) {
            $table->id();

            $table->integer('item_id')->nullable();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('page_url')->nullable();
            $table->text('item_url')->nullable();
            $table->text('item_image')->nullable();

            $table->text('client_name')->nullable();
            $table->text('client_country')->nullable();
            $table->text('client_phone')->nullable();
            $table->text('client_email')->nullable();
            $table->longText('client_message')->nullable();

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
        Schema::dropIfExists('inquiry_forms');
    }
}
