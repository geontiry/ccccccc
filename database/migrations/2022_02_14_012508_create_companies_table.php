<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up()
    {
        /* --- TABLE - COMPANY --- */
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('logo');
            $table->string('slogan');
            $table->timestamps();
            $table->softDeletes();
        });

        /* --- TABLE - DIRECTORATE --- */
        Schema::create('directorates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->string('name');
            $table->string('code');
            $table->string('route');
            $table->timestamps();
            $table->softDeletes();
        });

        /* --- TABLE - DEPARTMENT --- */
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('directorate_id')->constrained();
            $table->string('name');
            $table->string('route');
            $table->timestamps();
            $table->softDeletes();
        });

        /* --- TABLE - OFFICE --- */
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->constrained();
            $table->string('name');
            $table->string('route');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
        Schema::dropIfExists('directorates');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('offices');
    }
};
