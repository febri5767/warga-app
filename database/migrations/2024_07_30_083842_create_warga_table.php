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
        Schema::create('warga', function (Blueprint $table) {
            $table->id()->primary();
            $table->string("nama");
            $table->string("tempat_lahir");
            $table->date("tgl_lahir");
            $table->unsignedBigInteger('kelamin_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('goldar_id');
            $table->string("pekerjaan");
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            
            $table->foreign('kelamin_id')->references('id')->on('m_kelamin');
            $table->foreign('status_id')->references('id')->on('m_status');
            $table->foreign('goldar_id')->references('id')->on('m_goldar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warga');
    }
};
