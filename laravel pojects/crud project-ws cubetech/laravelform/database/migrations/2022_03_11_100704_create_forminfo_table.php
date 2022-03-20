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
        Schema::create('forminfo', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->text('mobile', 20)->nullable();
            $table->string('email');
            $table->text('cpassword');      
            $table->text('address');
            $table->boolean('status')->default(1);
            $table->text('pincode');
            $table->enum('gender', ["M","F","O"])->nullable();
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
        Schema::dropIfExists('forminfo');
    }
};
