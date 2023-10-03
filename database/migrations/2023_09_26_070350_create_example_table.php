<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
        public function up()
    {
        Schema::create('Form', function (Blueprint $table) {
            $table->id();
            $table->string('field1');
            $table->string('field2');
            $table->string('field3');
            $table->string('field4');
            $table->float('field5', 5, 2); // Float with 2 decimal places
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Form');
    }
};
