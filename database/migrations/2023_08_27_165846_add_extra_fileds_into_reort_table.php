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
        Schema::table('reports', function($table) {
            $table->text('knoledgeBase')->nullable();
            $table->float('RevenueTax')->nullable();
            $table->float('salaryTax')->nullable();
            $table->float('taklifiTax')->nullable();
            $table->float('rentTax')->nullable();
            $table->float('valueAddedTax')->nullable();
            $table->float('moreTax')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
