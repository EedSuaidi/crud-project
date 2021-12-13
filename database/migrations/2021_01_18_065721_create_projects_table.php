<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('nis')->nullable();
            $table->string('nama', 128)->nullable();
            $table->string('jns_kel', 50)->nullable();
            $table->string('tempat_lahir', 50)->nullable();
            $table->date('tgl_lhr')->nullable();
            $table->string('alamat', 256)->nullable();
            $table->string('nama_ayah', 128)->nullable();
            $table->string('nama_ibu', 128)->nullable();
            $table->integer('thn_masuk')->nullable();
            $table->integer('thn_keluar')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
