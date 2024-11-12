<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_subscribers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribersTable extends Migration
{
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique(); // Email field (unique to prevent duplicates)
            $table->timestamps(); // To store created_at and updated_at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('subscribers');
    }
}