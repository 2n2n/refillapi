<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitializeTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function(Blueprint $table) 
        {
            $table->increments('id');
            $table->string('username');
            $table->string('first_name');
            $table->string('last_name');
            // $table->string('password');
            $table->date('schedule');
            $table->text('address');
        });    

        Schema::create('invoices', function(Blueprint $table) 
        {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            // $table->foreign('client_id')->id('id')->on('client');
            $table->string('agent_name');
            $table->string('remarks');            
        });

        Schema::create('invoicedetails', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('invoice_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->decimal('price', 5, 2); // price of item during that time.
            $table->integer('qty');
            $table->decimal('amount', 5, 2); // price- A value that will purchase a finite quantity, weight, or other measure of a good or service. Read more: http://www.businessdictionary.com/definition/price.html
        });

        Schema::create('items', function(Blueprint $table) 
        {
            $table->increments('id');
            $table->string('type', 20);
            $table->decimal('price', 5, 2);
            $table->integer('available');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('invoicedetails');
        Schema::dropIfExists('items');
    }
}
