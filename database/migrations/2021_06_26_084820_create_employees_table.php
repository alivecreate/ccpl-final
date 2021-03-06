<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
                       
            $table->text('item_no')->nullable();
            $table->text('name');
            $table->text('email');
            $table->text('password');
            $table->text('image')->nullable();
            $table->text('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('education')->nullable();
            $table->text('post')->nullable();
            $table->text('docs')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('employees');
    }
}
