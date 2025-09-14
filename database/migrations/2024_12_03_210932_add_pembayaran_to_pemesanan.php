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
    Schema::table('pemesanan', function (Blueprint $table) {
        if (!Schema::hasColumn('pemesanan', 'bukti_transfer')) {
            $table->string('bukti_transfer')->nullable();
        }
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('pemesanan', function (Blueprint $table) {
        if (Schema::hasColumn('pemesanan', 'bukti_transfer')) {
            $table->dropColumn('bukti_transfer');
        }
    });
}

};
