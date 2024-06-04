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
            $table->id();
            $table->string("nama");
            $table->string("tempat_lahir");
            $table->date("tgl_lahir");
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan'])->default('laki-laki');
            $table->enum('status', ['Belum Kawin', 'Kawin','Cerai Hidup','Cerai Mati'])->default('Belum Kawin');
            $table->enum('gol_dar', ['Tidak Tahu', 'A','B','AB','O'])->default('Tidak Tahu');
            $table->string("pekerjaan");
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
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
