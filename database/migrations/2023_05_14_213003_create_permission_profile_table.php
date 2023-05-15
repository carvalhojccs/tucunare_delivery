<?php

use App\Models\Permission;
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
        Schema::create('permission_profile', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Permission::class);
            $table->foreignIdFor(Profile::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permission_profile');
    }
};
