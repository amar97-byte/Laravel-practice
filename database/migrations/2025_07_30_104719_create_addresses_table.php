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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained("orders")->cascadeOnDelete();
            $table->string("first_name")->nullable(false);
            $table->string("last_name")->nullable(false);
            $table->string("phone")->nullable(false);
            $table->text("street_address")->nullable(false);
            $table->string("city")->nullable(false);
            $table->string("state")->nullable(false);
            $table->string("zip_code")->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
