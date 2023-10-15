<?php

use App\Models\Plan;
use App\Models\Profile;
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
        Schema::create('plan_profile', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Plan::class)->constrained();
            $table->foreignIdFor(Profile::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_profile');
    }
};
