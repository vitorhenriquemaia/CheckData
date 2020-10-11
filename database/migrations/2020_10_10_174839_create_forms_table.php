<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();                       
            $table->unsignedBigInteger('profile_id');           
            $table->string('name');
            $table->string('mother');
            $table->string('cpf');
            $table->string('rg');
            $table->string('passport');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('cellphone');
            $table->string('checkin');
            $table->string('checkout'); 
            $table->string('why'); 
            $table->string('when'); 
            $table->string('who'); 
            $table->string('whoedit');           

            $table->timestamps();
                     
            $table->foreign('profile_id')->references('id')->on('profiles');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
