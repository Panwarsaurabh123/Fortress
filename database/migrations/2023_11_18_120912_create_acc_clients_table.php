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
        Schema::create('acc_clients', function (Blueprint $table) {
            $table->id(); 
            $table->string('account_id');
            $table->string('client_id'); 
            $table->string('status');
            $table->integer('can_sign');
            $table->string('get_statement'); 
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
        Schema::dropIfExists('acc_clients');
    }
};
