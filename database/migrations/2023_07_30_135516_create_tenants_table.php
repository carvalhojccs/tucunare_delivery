<?php

use App\Models\Plan;
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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Plan::class);
            $table->string('cnpj',11)->unique();
            $table->string('business_name');
            $table->string('fantasy_name');
            $table->string('url');
            $table->string('email')->unique();
            $table->string('logo');
            $table->boolean('active')->default(true);
            $table->timestamp('subscription')->comment('Data da assinatura do plano pelo cliente');
            $table->timestamp('expires_at')->comment('Data em que expira o acesso ao sistema');
            $table->string('subscription_id')->comment('Identificador do gatway de pagamento');
            $table->boolean('subscription_active')->default(false)->comment('Assinatura ativa. Em caso de falta de pagamento, será desativada');
            $table->boolean('subscription_suspended')->default(false)->comment('Assinatura cancelada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
