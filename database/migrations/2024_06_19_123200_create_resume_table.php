<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('email');
            $table->string('position', 255);
            $table->enum('education', [
                'ens_medio_incom',
                'ens_medio_com',
                'grad_incom',
                'grad_com',
                'pos_grad_incom',
                'pos_grad_com'
            ]);
            $table->string('ip');
            $table->string('resume_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resume');
    }
};
