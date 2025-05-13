<?php
// filepath: database/migrations/xxxx_xx_xx_xxxxxx_increase_history_length_in_places_table.php
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
        Schema::table('places', function (Blueprint $table) {
            $table->longText('history')->change(); // Change the column type to longText
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('places', function (Blueprint $table) {
            $table->string('history', 60000)->change(); // Revert back to the original type and size
        });
    }
};