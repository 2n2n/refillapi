<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablesForForeignkeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function(Blueprint $table) 
        {
            $table->foreign('client_id')->references('id')->on('clients');
        });

        Schema::table('invoicedetails', function(Blueprint $table) 
        {
            $table->foreign('invoice_id')->references('id')->on('invoices');
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('invoices', function(Blueprint $table) 
        {
            $table->dropForeign('invoices_client_id_foreign');
        });

        Schema::table('invoicedetails', function(Blueprint $table) 
        {
            $table->dropForeign('invoicedetails_invoice_id_foreign');
            $table->dropForeign('invoicedetails_item_id_foreign');
        });

    }
}
