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
        Schema::create('Supplier', function(Blueprint $table){
            $table->engine = 'innodb';
            $table->integer('id_supplier', 6)->autoIncrement();
            $table->string('nama_supplier');
            $table->text('alamat_supplier');
            $table->string('telp_supplier', 14);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
