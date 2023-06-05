<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('transaction', function (Blueprint $table) {
            $table->foreign('appointment_id', 'fk_transaction_to_appointment')
            ->references('id')->on('appointment')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaction', function (Blueprint $table) {
            $table->dropForeign('fk_transaction_to_appointment');
        });
    }
};
